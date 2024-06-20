<?php
    include './database.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Thêm category mới
        if ($_POST['action'] == 'create') {
            $category_name = $_POST['category_name'];
            $status = $_POST['status'] ?? 1;
            $description = $_POST['description'] ?? '';

            $sql = "INSERT INTO ProductCategory (title, description, is_deleted) VALUES (?, ?, ?)";
            $parameters = [$category_name, $description, $status];
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

        // Lấy toàn bộ categories 
        if ($_POST['action'] == 'read') {
            $sql = "SELECT * FROM ProductCategory";
            $categories = executeQuery($connection, $sql, [], true);
            echo json_encode($categories);
        }

        // Lấy toàn bộ categories theo id
        if ($_POST['action'] == 'getbyid') {
            $id = $_POST['id'];
            $sql = "SELECT * FROM ProductCategory WHERE id = $id";
            $categories = executeQuery($connection, $sql, [], true);
            echo json_encode($categories);
        }

        // Cập nhật thông tin categories
        if ($_POST['action'] == 'update') {
            $category_name = $_POST['category_name'];
            $status = $_POST['status'];
            $id = $_POST['id'];
            $description = $_POST['description'];

            $sql = "UPDATE ProductCategory SET title = ?, description = ?, is_deleted = ? WHERE id = ?";
            $parameters = [$category_name, $description, $status, $id];
    
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

        // Xóa trạng thái categories

        if ($_POST['action'] == 'delete') {
            $category_id = $_POST['id'];
            $parameters = [$category_id];
            $sql = "SELECT * FROM ProductCategory WHERE id = $category_id";
            $result = executeQuery($connection, $sql, [], true);
            if (!$result) {
                echo json_encode([
                    'status' => false,
                    'message' => 'Không tìm thấy category'
                ]);
                return;
            }
            if ($result[0]['is_deleted'] == 0) {
                $sql = "UPDATE ProductCategory SET is_deleted = 1 WHERE id = ?";
                $bool = executeQuery($connection, $sql, $parameters);
                if ($bool) {
                    echo json_encode([
                        'status' => true,
                        'message' => 'Xóa thành công category'
                    ]);
                } else {
                    echo json_encode([
                        'status' => false,
                        'message' => 'Có lỗi khi xóa'
                    ]);
                }
            }

            if ($result[0]['is_deleted'] == 1) {
                $sql = "UPDATE ProductCategory SET is_deleted = 0 WHERE id = ?";
                $bool = executeQuery($connection, $sql, $parameters);
                if ($bool) {
                    echo json_encode([
                        'status' => true,
                        'message' => 'Cập nhật thành công category'
                    ]);
                } else {
                    echo json_encode([
                        'status' => false,
                        'message' => 'Có lỗi khi Cập nhật'
                    ]);
                }
            }
        }
    }
?>