<?php
    include './database.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Thêm branch mới
        if ($_POST['action'] == 'create') {
            $branch_name = $_POST['branch_name'];
            $branch_image = $_FILES['image'];
            $status = $_POST['status'] ?? 1;
            $description = $_POST['description'] ?? '';
            // Tạo tên mới cho file ảnh
            $new_image_name = generateImageName($branch_image);
            // Thư mục lưu trữ file ảnh
            $upload_directory = 'uploads/';

            // Đường dẫn đầy đủ của file ảnh
            $upload_path = $upload_directory . $new_image_name;
            //Di chuyển file ảnh vào thư mục lưu trữ
            move_uploaded_file($branch_image['tmp_name'], $upload_path);
            $sql = "INSERT INTO branches (name, image, description, is_active) VALUES (?, ?, ?, ?)";
            $parameters = [$branch_name, $upload_path, $description, $status];
            $result = executeQuery($connection, $sql, $parameters);   
            if ($result) {
                echo json_encode([
                    'status' => true,
                    'message' => 'Successfully'
                ]);
            }else {
                echo json_encode([
                    'status' => false,
                    'message' => 'Something went wrong'
                ]);
            }
        }

        // Lấy toàn bộ branch 
        if ($_POST['action'] == 'read') {
            $sql = "SELECT * FROM branches";
            $branches = executeQuery($connection, $sql, [], true);
            echo json_encode($branches);
        }

        // Lấy toàn bộ branch theo id
        if ($_POST['action'] == 'getbyid') {
            $id = $_POST['id'];
            $sql = "SELECT * FROM branches WHERE id = $id";
            $branches = executeQuery($connection, $sql, [], true);
            echo json_encode($branches);
        }

        // Lấy branch theo số tổng sản phẩm, số tiền bán được và trạng thái của branch đó
        if ($_POST['action'] == 'readandfilter') {
            $sql = "SELECT
                    b.id AS branch_id,
                    b.name AS branch_name,
                    b.image AS branch_image,
                    b.description AS branch_description,
                    COUNT(DISTINCT p.id) AS total_products,
                    SUM(od.price * od.quantity) AS total_sales,
                    b.is_active AS branch_status
                    FROM
                        branches b
                    LEFT JOIN
                        products p ON b.id = p.branches_id
                    LEFT JOIN
                        order_details od ON p.id = od.product_id
                    LEFT JOIN
                        orders o ON od.order_id = o.id
                    GROUP BY
                        b.id, b.name, b.image, b.description, b.is_active";
            $branches = executeQuery($connection, $sql, [], true);
            echo json_encode($branches);
        }

        // Cập nhật thông tin branch

        if ($_POST['action'] == 'update') {
            $branch_name = $_POST['branch_name'];
            $branch_image_old = $_POST['image_old'];
            $status = $_POST['status'];
            $id = $_POST['id'];
            $description = $_POST['description'];
            // Kiểm tra nếu có ảnh mới được tải lên
            if (!empty($_FILES['image']['name'])) {
                $branch_image = $_FILES['image'];
                // Tạo tên mới cho file ảnh
                $new_image_name = generateImageName($branch_image);

                // Thư mục lưu trữ file ảnh
                $upload_directory = 'uploads/';
        
                // Đường dẫn đầy đủ của file ảnh
                $upload_path = $upload_directory . $new_image_name;
        
                // Di chuyển file ảnh vào thư mục lưu trữ
                move_uploaded_file($branch_image['tmp_name'], $upload_path);
        
                // Xóa ảnh cũ
                if (!empty($branch_image_old) && file_exists($branch_image_old)) {
                    unlink($branch_image_old);
                }
        
                $sql = "UPDATE branches SET name = ?, image = ?, description = ?, is_active = ? WHERE id = ?";
                $parameters = [$branch_name, $upload_path, $description, $status, $id];
            } else {
                $sql = "UPDATE branches SET name = ?, description = ?, is_active = ? WHERE id = ?";
                $parameters = [$branch_name, $description, $status, $id];
            }
        
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

        // Xóa trạng thái branch

        if ($_POST['action'] == 'delete') {
            $branch_id = $_POST['id'];

            $sql = "DELETE FROM branches WHERE id = ?";
            $parameters = [$branch_id];
    
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