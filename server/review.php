<?php
    include './database.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Thêm review mới
        if ($_POST['action'] == 'create') {
            $product_id = $_POST['product_id'];

            $rate = $_POST['rate'] ?? 5;
            $images = $_FILES['images'] ?? [];
            $content = $_POST['content'] ?? '';
            $phone = $_POST['phone'] ?? '';
            $name = $_POST['name'] ?? '';
            $path  = "";

            if(count($images) <= 0) {
                echo json_encode([
                    'status' => false,
                    'message' => 'Bạn phải gửi ít nhất một hình ảnh đánh giá'
                ]);
                exit();
            }

            $sql = "SELECT * FROM orders o JOIN orderdetail od ON o.id = od.order_id JOIN sputosku stk ON stk.id = od.product_id WHERE o.phone = ? AND stk.spu_id = ?";
            $parameters = [$phone, $product_id];
            $order = executeQuery($connection, $sql, $parameters, true);

            $sql = "SELECT * FROM reviews WHERE phone = ? AND product_id = ?";
            $parameters = [$phone, $product_id];
            $review = executeQuery($connection, $sql, $parameters, true);

            if(!$order) {
                echo json_encode([
                    'status' => false,
                    'message' => 'Bạn chưa mua sản phẩm này'
                ]);
                exit();
            }
            
            if(count($review) == count($order)) {
                echo json_encode([
                    'status' => false,
                    'message' => 'Bạn đã đánh giá sản phẩm này rồi'
                ]);
                exit();
            }

            if($rate == 0) {
                echo json_encode([
                    'status' => false,
                    'message' => 'Hãy đánh giá sản phẩm!'
                ]);
                exit();
            }
            
            foreach ($images['tmp_name'] as $key => $tmp_name) {
                $file = $images['name'][$key];

                $new_image_name = generateImageName($file);

                // Thư mục lưu trữ file ảnh
                $upload_directory = 'uploads/';

                // Đường dẫn đầy đủ của file ảnh
                $upload_path = $upload_directory . $new_image_name;

                // Di chuyển file ảnh vào thư mục lưu trữ
                move_uploaded_file($tmp_name, $upload_path);

                $path .= $upload_path.";";
            }

            $sql = "INSERT INTO reviews (product_id, rate, image, content, phone, name) VALUES (?, ?, ?, ?, ?, ?)";
            $parameters = [$product_id, $rate, $path, $content, $phone, $name];
            $result = executeQuery($connection, $sql, $parameters);   
            if ($result) {
                echo json_encode([
                    'status' => true,
                    'message' => 'Đánh giá thành công'
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'message' => 'Có lỗi khi đánh giá'
                ]);
            }
        }

        // Lấy toàn bộ reviews 
        if ($_POST['action'] == 'read') {
            $sql = "SELECT * FROM reviews ";
        
            if (isset($_POST['id'])) {
                $product_id = $_POST['id'];
                $sql .= " WHERE product_id = ?";
                $parameters = [$product_id];
                $reviews = executeQuery($connection, $sql, $parameters, true);
            } else {
                $reviews = executeQuery($connection, $sql, [], true);
            }
            echo json_encode($reviews);
        }

        // Lấy đánh giá và phản hồi 

        if($_POST['action'] == 'view') {
            $sql = "SELECT ps.name AS product_name,
             (SELECT i.image FROM productimage i WHERE i.product_id = ps.id LIMIT 1) AS image,
             ps.description,
             r.name AS reviewer_name,
             r.phone,
             r.rate,
             r.content,
             r.created_at,
             r.id,
             r.reply
             FROM reviews r JOIN productspus ps ON r.product_id = ps.id";

            if (isset($_POST['id'])) {
                $id = $_POST['id'];
                $sql .= " WHERE r.id = $id";
            }
            $reviews = executeQuery($connection, $sql, [], true);
            echo json_encode($reviews);
        }

        // Đánh giá sản phẩm
        if($_POST['action'] == 'reply') {
            $id = $_POST['id'];
            $reply = $_POST['reply'];
            $sql = "UPDATE reviews
                    SET reply = '$reply'
                    WHERE id = $id";
            $result = executeQuery($connection, $sql, []);
            if ($result) {
                echo json_encode([
                    'status' => true,
                    'message' => 'Phản hồi thành công'
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'message' => 'Đã có lỗi xảy ra'
                ]);
            }
        }


        // Lấy thông tin review theo id
        if ($_POST['action'] == 'getbyid') {
            $id = $_POST['id'];
            $sql = "SELECT * FROM reviews WHERE id = $id";
            $review = executeQuery($connection, $sql, [], true);
            echo json_encode($review);
        }

        // Thống kê số lượng đánh giá
        if ($_POST['action'] == 'statistics') {
            $sql = "SELECT 
                        AVG(rate) AS average_rating,
                        COUNT(*) AS total_reviews,
                        SUM(CASE WHEN rate = 5 THEN 1 ELSE 0 END) AS five_star_reviews,
                        SUM(CASE WHEN rate = 4 THEN 1 ELSE 0 END) AS four_star_reviews,
                        SUM(CASE WHEN rate = 3 THEN 1 ELSE 0 END) AS three_star_reviews,
                        SUM(CASE WHEN rate = 2 THEN 1 ELSE 0 END) AS two_star_reviews,
                        SUM(CASE WHEN rate = 1 THEN 1 ELSE 0 END) AS one_star_reviews,
                        COUNT(CASE WHEN created_at >= DATE_SUB(CURDATE(), INTERVAL 7 DAY) THEN 1 END) AS new_reviews
                    FROM reviews";
            $reviews = executeQuery($connection, $sql, [], true);
            echo json_encode($reviews[0]);
        }

        // Cập nhật thông tin review
        if ($_POST['action'] == 'update') {
            $product_id = $_POST['product_id'];
            $serializedObject = $_SESSION['user']; // Lấy chuỗi đối tượng từ phiên
            $user = unserialize($serializedObject); // Chuyển đổi chuỗi thành đối tượng ban đầu
            $user_id = $user['id'];
            $rate = $_POST['rate'];
            $image = $_POST['image'];
            $content = $_POST['content'];
            $id = $_POST['id'];

            $sql = "UPDATE reviews SET product_id = ?, user_id = ?, rate = ?, image = ?, content = ? WHERE id = ?";
            $parameters = [$product_id, $user_id, $rate, $image, $content, $id];

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
            }
        }

        // Xóa review
        if ($_POST['action'] == 'delete') {
            $id = $_POST['id'];

            $sql = "DELETE FROM reviews WHERE id = ?";
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
            }
        }
    }
?>