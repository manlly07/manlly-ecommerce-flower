<?php
include './database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Thêm sản phẩm mới
    if ($_POST['action'] == 'create') {
        $product_name = $_POST['product_name'];
        $category_id =  $_POST['category_id'];
        $description = $_POST['description'] ?? '';
        $skus = json_decode($_POST['skus'], true);
        // echo json_encode([
        //     'product_name' => $product_name,
        //     'category_id' => $category_id,
        //     'skus' => $skus,
        // ]);

        if (empty($product_name) || empty($category_id) || !isset($_FILES['images'])) {
            echo json_encode([
                'status' => false,
                'message' => 'Vui lòng điền đầy đủ thông tin của sản phẩm'
            ]);
            exit();
        }

        foreach ($skus as $sku) {
            foreach ($sku['quantity'] as $quantity) {
                if ($quantity < 0) {
                    echo json_encode([
                        'status' => false,
                        'message' => 'Kiểm tra lại số lượng'
                    ]);
                    exit();
                }
            }
            foreach ($sku['prices'] as $price) {
                if ($price < 0) {
                    echo json_encode([
                        'status' => false,
                        'message' => 'Kiểm tra lại giá'
                    ]);
                    exit();
                }
            }
        }

        $sql = "INSERT INTO `productspus`(`name`, `description`, `category_id`) VALUES (?, ?, ?)";
        $parameters = array($product_name, $description, $category_id);

        $product_id = executeQuery($connection, $sql, $parameters, false, true);

        if ($product_id && isset($_FILES['images'])) {
            $images = $_FILES['images'];
            foreach ($images['tmp_name'] as $key => $tmp_name) {
                $file = $images['name'][$key];

                $new_image_name = generateImageName($file);

                // Thư mục lưu trữ file ảnh
                $upload_directory = 'uploads/';

                // Đường dẫn đầy đủ của file ảnh
                $upload_path = $upload_directory . $new_image_name;

                // Di chuyển file ảnh vào thư mục lưu trữ
                move_uploaded_file($tmp_name, $upload_path);

                $sql = "INSERT INTO productimage (image, product_id)
                    VALUES (?, ?)";

                $parameters = array($upload_path, $product_id);

                $result = executeQuery($connection, $sql, $parameters);
            }
        }
        foreach ($skus as $sku) {
            $color = $sku["color"];
            $sizes = $sku["sizes"];
            $quantity = $sku["quantity"];
            $prices = $sku["prices"];
            foreach ($sizes as $key => $size) {
                $current_quantity = $quantity[$key];
                $current_price = $prices[$key];
                $sql = "INSERT INTO ProductSkus (color, size, price, quantity) VALUES (? , ? , ? , ?)";
                $parameters = array($color, $size, $current_price, $current_quantity);
                $productSku_id = executeQuery($connection, $sql, $parameters, false, true);
                if ($productSku_id) {
                    $sql = "INSERT INTO SpuToSku (spu_id, sku_id) VALUES ($product_id, $productSku_id)";
                    $result = executeQuery($connection, $sql, []);
                }
            }
        }
        echo json_encode([
            'status' => true,
            'message' => 'Thêm sản phẩm thành công'
        ]);
        exit();
    }

    // Lấy toàn bộ sản phẩm 
    if ($_POST['action'] == 'read') {
        $sql = "SELECT ProductSpus.name AS product_name, 
                        ProductSpus.description AS product_description, 
                        ProductSpus.id AS product_id, 
                        ProductSpus.is_deleted AS product_is_deleted, 
                        ProductImage.image AS product_image, 
                        SUM(ProductSkus.quantity) AS total_quantity, 
                        ProductSpus.created_at AS product_created_at, 
                        ProductSpus.is_deleted AS product_is_deleted,
                        Productcategory.title AS category_name
                FROM ProductSpus 
                JOIN (
                    SELECT product_id, image
                    FROM ProductImage
                    GROUP BY product_id
                ) AS ProductImage ON ProductSpus.id = ProductImage.product_id 
                JOIN SpuToSku ON ProductSpus.id = SpuToSku.spu_id
                JOIN ProductSkus ON SpuToSku.sku_id = ProductSkus.id
                JOIN Productcategory ON ProductSpus.category_id = Productcategory.id
                GROUP BY ProductSpus.id;";
        $products = executeQuery($connection, $sql, [], true);
        echo json_encode($products);
    }

    //Lấy toàn bộ sản phẩm theo id
    if ($_POST['action'] == 'getcartbyid') {
        $products = [];
        $carts = json_decode($_POST['carts'], true);
        foreach ($carts as $cart) {
            $sql = "SELECT sts.id, ps.name, sk.color, sk.size,
                    (
                        SELECT image
                        FROM Productimage
                        WHERE product_id = ps.id
                        LIMIT 1
                    ) AS image,
                    sk.quantity, sk.price,
                    ps.id AS product_id,
                    sk.id AS sku_id
                    FROM ProductSpus ps
                    JOIN SpuToSku sts ON ps.id = sts.spu_id
                    JOIN ProductSkus sk ON sts.sku_id = sk.id
                    WHERE sk.size = ? AND sk.color = ? AND ps.id = ?";

            $product = executeQuery($connection, $sql, [$cart['size'], $cart['color'], $cart['id']], true);
            $product[0]['bought'] = $cart['quantity'];
            $products[] = $product[0];
        }

        echo json_encode($products);
    }

    // update quantity in cart

    
    if ($_POST['action'] == 'getbyid') {
        $id = $_POST['id'];

        // Lấy thông tin sản phẩm
        $sql = "SELECT p.*, i.image
                FROM productspus p
                LEFT JOIN productimage i ON i.product_id = p.id
                WHERE p.id = '$id'";
        $products = executeQuery($connection, $sql, [], true);
        if (empty($products)) {
            echo json_encode([]);
            exit();
        }
        $product = $products[0];
        $product["images"] = [];

        foreach ($products as $image) {
            if ($image["image"] !== null) {
                $product["images"][] = $image["image"];
            }
        }

        $sql = "SELECT ProductSpus.name AS product_name, 
                        ProductSpus.category_id AS category_id, 
                        ProductSkus.color AS color, 
                        ProductSkus.size AS size, 
                        ProductSkus.quantity AS quantity, 
                        ProductSkus.price AS price
                FROM ProductSpus
                JOIN SpuToSku ON ProductSpus.id = SpuToSku.spu_id
                JOIN ProductSkus ON SpuToSku.sku_id = ProductSkus.id
                WHERE ProductSpus.id = $id;";
        $data = executeQuery($connection, $sql, [], true);
        $product["skus"] = [];
        foreach ($data as $item) {
            $product["skus"][$item["color"]]["color"] = $item["color"];
            $product["skus"][$item["color"]]["sizes"][] = $item["size"];
            $product["skus"][$item["color"]]["quantity"][] = $item["quantity"];
            $product["skus"][$item["color"]]["prices"][] = $item["price"];
        }
        // Lấy tổng số đơn hàng của sản phẩm
        // $sql = "SELECT COUNT(DISTINCT order_id) as total_orders
        //         FROM order_details
        //         WHERE product_id = '$id'";
        // $result = executeQuery($connection, $sql, [], true);
        // $totalOrders = $result[0]['total_orders'] ?? 0;

        // // Gán tổng số đơn hàng vào mảng sản phẩm
        // $product['total_orders'] = $totalOrders;

        echo json_encode($product);
        
    }

    // Lấy sản phẩm theo số tổng sản phẩm, số tiền bán được và trạng thái của branch đó
    if ($_POST['action'] == 'readandfilter') {
        $categories = isset($_POST['categories']) ? json_decode($_POST['categories']) : [];
        $priceFrom = isset($_POST['priceFrom']) ? $_POST['priceFrom'] : '';
        $priceTo = isset($_POST['priceTo']) ? $_POST['priceTo'] : '';
        $rate = isset($_POST['rate']) ? $_POST['rate'] : '';
        $role = isset($_POST['role']) ? $_POST['role'] : '';
        $q = isset($_POST['q']) ? $_POST['q'] : '';
    
        // Base SQL query
        $sql = "SELECT
            p.id,
            (
                SELECT image
                FROM ProductImage
                WHERE product_id = p.id
                LIMIT 1
            ) AS image,
            p.name,
            p.description,
            c.title AS category_name,
            AVG(r.rate) AS average_rate,
            COUNT(r.id) AS total_reviews,
            MIN(ps.price) AS price
        FROM
            ProductSpus p
            LEFT JOIN ProductCategory c ON p.category_id = c.id
            LEFT JOIN Reviews r ON p.id = r.product_id
            LEFT JOIN SpuToSku sts ON p.id = sts.spu_id
            LEFT JOIN ProductSkus ps ON sts.sku_id = ps.id";
    
        // Filter conditions
        $filterConditions = [];
    
        if (!empty($categories)) {
            $categoryCondition = "c.id IN ('" . implode("','", $categories) . "')";
            $filterConditions[] = $categoryCondition;
        }
    
        if (!empty($q)) {
            $searchCondition = "p.name LIKE '%$q%'";
            $filterConditions[] = $searchCondition;
        }
    
        if (!empty($priceFrom)) {
            $priceFromCondition = "ps.price >= " . $priceFrom;
            $filterConditions[] = $priceFromCondition;
        }
    
        if (!empty($priceTo)) {
            $priceToCondition = "ps.price <= " . $priceTo;
            $filterConditions[] = $priceToCondition;
        }
    
        // Apply filter conditions
        if (!empty($filterConditions)) {
            $sql .= " WHERE " . implode(" AND ", $filterConditions);
        }
    
        $sql .= " GROUP BY p.id, p.name, p.description, c.title";
    
        if (!empty($rate)) {
            // HAVING clause for aggregated conditions
            $rateCondition = "HAVING ROUND(AVG(r.rate), 0) = " . floor($rate);
            $sql .= " $rateCondition";
        }
    
        // Execute query and fetch results
        $products = executeQuery($connection, $sql, [], true);
        echo json_encode($products);
    }

    // Cập nhật thông tin sản phẩm
    if ($_POST['action'] == 'update') {
        $product_name = $_POST['product_name'];
        $category_id =  $_POST['category_id'];
        $images = $_FILES['images'] ?? [];
        $images_old = json_decode($_POST['images_old']);
        $description = $_POST['description'] ?? '';
        $skus = json_decode($_POST['skus'], true);

        $id = $_POST['id'];
        $files = [];

        if (empty($product_name) || empty($category_id)) {
            echo json_encode([
                'status' => false,
                'message' => 'Vui lòng điền đầy đủ thông tin của máy tính'
            ]);
            exit();
        }

        foreach ($skus as $sku) {
            foreach ($sku['quantity'] as $quantity) {
                if ($quantity < 0) {
                    echo json_encode([
                        'status' => false,
                        'message' => 'Kiểm tra lại số lượng'
                    ]);
                    exit();
                }
            }
            foreach ($sku['prices'] as $price) {
                if ($price < 0) {
                    echo json_encode([
                        'status' => false,
                        'message' => 'Kiểm tra lại giá'
                    ]);
                    exit();
                }
            }
        }

        if (count($images) > 0) {
            foreach ($images['tmp_name'] as $key => $tmp_name) {
                $file = $images['name'][$key];
                $new_image_name = generateImageName($file);
                // Thư mục lưu trữ file ảnh
                $upload_directory = 'uploads/';
                // Đường dẫn đầy đủ của file ảnh
                $upload_path = $upload_directory . $new_image_name;
                // Di chuyển file ảnh vào thư mục lưu trữ
                move_uploaded_file($tmp_name, $upload_path);

                // Tạo một đối tượng với hai khóa "status" và "file"
                $fileObject = [
                    'status' => 1,
                    'file' => $upload_path
                ];
                // Đẩy đối tượng vào mảng $files
                array_push($files, $fileObject);
            }
        }
        foreach ($images_old as $image) {
            $fileObject = [
                'status' => $image->status,
                'file' => $image->file
            ];
            array_push($files, $fileObject);
        }

        $sql = "UPDATE productspus SET name = ?, description = ?, category_id = ? WHERE id = ?";
        $parameters = array($product_name, $description, $category_id, $id);

        $result = executeQuery($connection, $sql, $parameters);
        if ($result) {
            // Xóa hình ảnh cũ của sản phẩm
            $sql = "DELETE FROM productimage WHERE product_id = ?";
            $parameters = array($id);
            executeQuery($connection, $sql, $parameters);
            foreach ($files as $image) {
                if ($image['status'] == 1) {
                    $sql = "INSERT INTO productimage (image, product_id) VALUES (?, ?)";
                    $parameters = array($image['file'], $id);
                    executeQuery($connection, $sql, $parameters);
                } else if (file_exists($image['file'])) {
                    unlink($image['file']);
                }
            }
        } else {
            echo json_encode([
                'status' => false,
                'message' => 'Đã xảy ra lỗi khi cập nhật!'
            ]);
            return;
        }

        if ($result) {

            $sql = "SELECT sku_id FROM SpuToSku WHERE spu_id = ?";
            $parameters = array($id);
            $skuIds = executeQuery($connection, $sql, $parameters, true);
            // echo json_encode($skuIds);
            foreach ($skuIds as $skuId) {
                $sql = "DELETE FROM ProductSkus WHERE id = ?";
                $parameters = array($skuId['sku_id']);
                executeQuery($connection, $sql, $parameters);
            }

            $sql = "DELETE FROM SpuToSku WHERE spu_id = ?";
            $parameters = array($id);
            executeQuery($connection, $sql, $parameters);
            foreach ($skus as $sku) {
                $color = $sku["color"];
                $sizes = $sku["sizes"];
                $quantity = $sku["quantity"];
                $prices = $sku["prices"];
                foreach ($sizes as $key => $size) {
                    $current_quantity = $quantity[$key];
                    $current_price = $prices[$key];
                    $sql = "INSERT INTO ProductSkus (color, size, price, quantity) VALUES (? , ? , ? , ?)";
                    $parameters = array($color, $size, $current_price, $current_quantity);
                    $productSku_id = executeQuery($connection, $sql, $parameters, false, true);
                    if ($productSku_id) {
                        $sql = "INSERT INTO SpuToSku (spu_id, sku_id) VALUES ($id, $productSku_id)";
                        $result = executeQuery($connection, $sql, []);
                    }
                }
            }
        } else {
            echo json_encode([
                'status' => false,
                'message' => 'Đã xảy ra lỗi khi cập nhật!'
            ]);
            return;
        }

        echo json_encode([
            'status' => true,
            'message' => 'Cập nhật sản phẩm thành công'
        ]);
    }

    // Xóa trạng thái product

    if ($_POST['action'] == 'delete') {
        $id = $_POST['id'];

        $sql = "DELETE FROM images WHERE product_id = ?";
        $parameters = [$id];
        $result = executeQuery($connection, $sql, $parameters);

        $sql = "DELETE FROM products WHERE id = ?";
        $parameters = [$id];

        $result = executeQuery($connection, $sql, $parameters);

        if ($result) {
            echo json_encode([
                'status' => true,
                'message' => 'Successfully'
            ]);
        } else {
            echo json_encode([
                'status' => false,
                'message' => 'Something went wrong'
            ]);
            return;
        }
    }

    if ($_POST['action'] == 'updateStatus') {
        $id = $_POST['id'];
        $status = $_POST['status'];
        $sql = "UPDATE productspus SET is_deleted = $status WHERE id = $id";
        $result = executeQuery($connection, $sql, []);

        if ($result) {
            echo json_encode([
                'status' => true,
                'message' => 'Cập nhật trạng thái thành công'
            ]);
        } else {
            echo json_encode([
                'status' => false,
                'message' => 'Cập nhật trạng thái thất bại'
            ]);
            return;
        }
    }
}
