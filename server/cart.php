<?php
    include './database.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Thêm giỏ hàng mới hoặc tăng số lượng nếu sản phẩm đã tồn tại
        if ($_POST['action'] == 'create') {
            $serializedObject = $_SESSION['user']; // Lấy chuỗi đối tượng từ phiên
            $user = unserialize($serializedObject); // Chuyển đổi chuỗi thành đối tượng ban đầu
            $user_id = $user['id']; //
            $product_id = $_POST['product_id'];
            $quantity = $_POST['quantity'] ?? 1;

            // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng hay chưa
            $sql_check = "SELECT * FROM carts WHERE user_id = ? AND product_id = ?";
            $parameters_check = [$user_id, $product_id];
            $existing_cart = executeQuery($connection, $sql_check, $parameters_check, true);

            if ($existing_cart) {
                // Nếu sản phẩm đã tồn tại trong giỏ hàng, tăng số lượng lên 1
                $new_quantity = $existing_cart[0]['quantity'] + 1;

                // Cập nhật số lượng trong giỏ hàng
                $sql_update = "UPDATE carts SET quantity = ? WHERE user_id = ? AND product_id = ?";
                $parameters_update = [$new_quantity, $user_id, $product_id];
                $result = executeQuery($connection, $sql_update, $parameters_update);

                if ($result) {
                    echo json_encode([
                        'status' => true,
                        'message' => 'Tăng số lượng sản phẩm thành công'
                    ]);
                } else {
                    echo json_encode([
                        'status' => false,
                        'message' => 'Có lỗi khi tăng số lượng sản phẩm'
                    ]);
                }
            } else {
                // Nếu sản phẩm chưa tồn tại trong giỏ hàng, thêm mới
                $sql_insert = "INSERT INTO carts (user_id, product_id, quantity) VALUES (?, ?, ?)";
                $parameters_insert = [$user_id, $product_id, $quantity];
                $result = executeQuery($connection, $sql_insert, $parameters_insert);

                if ($result) {
                    echo json_encode([
                        'status' => true,
                        'message' => 'Thêm vào giỏ hàng thành công'
                    ]);
                } else {
                    echo json_encode([
                        'status' => false,
                        'message' => 'Có lỗi khi thêm vào giỏ hàng'
                    ]);
                }
            }
        }

        // Lấy thông tin giỏ hàng của người dùng
        if ($_POST['action'] == 'read') {
            $serializedObject = $_SESSION['user']; // Lấy chuỗi đối tượng từ phiên
            $user = unserialize($serializedObject); // Chuyển đổi chuỗi thành đối tượng ban đầu
            $user_id = $user['id'];

            $sql = "SELECT carts.*, products.name AS product_name, products.quantity AS product_quantity,       products.price AS product_price,
                    (SELECT link FROM images WHERE product_id = products.id LIMIT 1) AS product_image
                    FROM carts
                    INNER JOIN products ON carts.product_id = products.id
                    WHERE carts.user_id = ?";
            $parameters = [$user_id];
            $carts = executeQuery($connection, $sql, $parameters, true);
            echo json_encode($carts);
        }

        // Cập nhật số lượng trong giỏ hàng
        if ($_POST['action'] == 'update') {
            $serializedObject = $_SESSION['user']; // Lấy chuỗi đối tượng từ phiên
            $user = unserialize($serializedObject); // Chuyển đổi chuỗi thành đối tượng ban đầu
            $user_id = $user['id'];
            $product_id = $_POST['product_id'];
            $quantity = $_POST['quantity'];
        
            if ($quantity < 0) {
                // Số lượng nhỏ hơn 0, báo lỗi
                echo json_encode([
                    'status' => false,
                    'message' => 'Số lượng không hợp lệ'
                ]);
                return;
            }

            if ($quantity == 0) {
                $sql = "DELETE FROM carts WHERE user_id = ? AND product_id = ?";
                $parameters = [$user_id, $product_id];
        
                $result = executeQuery($connection, $sql, $parameters);
            }
        
            // Kiểm tra số lượng sản phẩm có đủ để cập nhật không
            $sqlCheckQuantity = "SELECT quantity FROM products WHERE id = ?";
            $parametersCheckQuantity = [$product_id];
            $resultCheckQuantity = executeQuery($connection, $sqlCheckQuantity, $parametersCheckQuantity, true);
        
            if ($resultCheckQuantity) {
                $currentQuantity = $resultCheckQuantity[0]['quantity'];
        
                if ($quantity <= $currentQuantity) {
                    // Số lượng sản phẩm đủ để cập nhật
        
                    $sql = "UPDATE carts SET quantity = ? WHERE user_id = ? AND product_id = ?";
                    $parameters = [$quantity, $user_id, $product_id];
        
                    $result = executeQuery($connection, $sql, $parameters);
                    if ($result) {
                        echo json_encode([
                            'status' => true,
                            'message' => 'Cập nhật giỏ hàng thành công'
                        ]);
                    } else {
                        echo json_encode([
                            'status' => false,
                            'message' => 'Có lỗi khi cập nhật giỏ hàng'
                        ]);
                    }
                } else {
                    // Số lượng sản phẩm không đủ để cập nhật
                    echo json_encode([
                        'status' => false,
                        'message' => 'Số lượng sản phẩm không đủ'
                    ]);
                }
            } else {
                // Lỗi khi kiểm tra số lượng sản phẩm
                echo json_encode([
                    'status' => false,
                    'message' => 'Có lỗi khi kiểm tra số lượng sản phẩm'
                ]);
            }
        }

        // Xóa một mục trong giỏ hàng
        if ($_POST['action'] == 'delete') {
            $cart_id = $_POST['id'];

            $sql = "DELETE FROM carts WHERE id = ?";
            $parameters = [$cart_id];

            $result = executeQuery($connection, $sql, $parameters);
            if ($result) {
                echo json_encode([
                    'status' => true,
                    'message' => 'Xóa khỏi giỏ hàng thành công'
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'message' => 'Có lỗi khi xóa khỏi giỏ hàng'
                ]);
            }
        }

        if($_POST['action'] == 'updateQuantityInCart') {
            $product_id = $_POST['product_id'];
            $quantity = $_POST['quantity'];
        
            if ($quantity < 0) {
                // Số lượng nhỏ hơn 0, báo lỗi
                echo json_encode([
                    'status' => false,
                    'message' => 'Số lượng không hợp lệ'
                ]);
                return;
            }
            // Kiểm tra số lượng sản phẩm có đủ để cập nhật không
            $sqlCheckQuantity = "SELECT quantity FROM ProductSkus WHERE id = '$product_id'";
            // echo $sqlCheckQuantity;
            $parametersCheckQuantity = [];
            $resultCheckQuantity = executeQuery($connection, $sqlCheckQuantity, $parametersCheckQuantity, true);
            // echo json_encode($resultCheckQuantity);
            if ($resultCheckQuantity) {
                $currentQuantity = $resultCheckQuantity[0]['quantity'];
                // echo $quantity;
                // echo $currentQuantity;
                if ($quantity <= $currentQuantity) {
                    echo json_encode([
                        'status' => true,
                        'message' => 'Cập nhật giỏ hàng thành công'
                    ]);
                    
                } else {
                    // Số lượng sản phẩm không đủ để cập nhật
                    echo json_encode([
                        'status' => false,
                        'message' => 'Số lượng sản phẩm không đủ'
                    ]);
                }
            } else {
                // Lỗi khi kiểm tra số lượng sản phẩm
                echo json_encode([
                    'status' => false,
                    'message' => 'Có lỗi khi kiểm tra số lượng sản phẩm'
                ]);
            }
        }
    }
?>