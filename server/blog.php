<?php
include './database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Thêm sản phẩm mới
    if ($_POST['action'] == 'create') {
        $product_name = $_POST['product_name'];
        $product_description =  $_POST['product_description'];
        $content = $_POST['content'] ?? '';

        if (empty($product_name) || empty($product_description) || !isset($_FILES['images'])) {
            echo json_encode([
                'status' => false,
                'message' => 'Vui lòng điền đầy đủ thông tin của sản phẩm'
            ]);
            exit();
        }

        if (isset($_FILES['images'])) {
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

                $sql = "INSERT INTO blog (title, description, thumbnail, content) VALUES (?, ?, ?, ?)";

                $parameters = array($product_name, $product_description, $upload_path, $content);

                $result = executeQuery($connection, $sql, $parameters);
                if($result) {
                    echo json_encode([
                        'status' => true,
                        'message' => 'Thêm blog thành công'
                    ]);
                } else {
                    echo json_encode([
                        'status' => false,
                        'message' => 'Đã xảy ra lỗi khi thêm blog'
                    ]);
                }
            }
        }
        exit();
    }

    // Lấy toàn bộ sản phẩm 
    if ($_POST['action'] == 'read') {
        $sql = "SELECT * FROM blog";
        $blogs = executeQuery($connection, $sql, [], true);
        echo json_encode($blogs);
    }
    
    if ($_POST['action'] == 'getbyid') {
        $id = $_POST['id'];

        // Lấy thông tin sản phẩm
        $sql = "SELECT * FROM blog WHERE id = $id";
        $blogs = executeQuery($connection, $sql, [], true);
        if (empty($blogs)) {
            echo json_encode([]);
            exit();
        }
        echo json_encode($blogs[0]);
    }

    // Cập nhật thông tin sản phẩm
    if ($_POST['action'] == 'update') {
        $product_name = $_POST['product_name'];
        $product_description =  $_POST['product_description'];
        $images = $_FILES['images'] ?? [];
        $images_old = json_decode($_POST['images_old']);
        $content = $_POST['content'] ?? '';

        $id = $_POST['id'];
        $files = [];

        if (empty($product_name) || empty($product_description)) {
            echo json_encode([
                'status' => false,
                'message' => 'Vui lòng điền đầy đủ thông tin của máy tính'
            ]);
            exit();
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

        foreach ($files as $image) {
            if ($image['status'] == 1) {
                $sql = "UPDATE blog SET title = ?, description = ?, thumbnail = ?, content = ? WHERE id = ?";
                $parameters = array($product_name, $product_description, $image['file'], $content, $id);
                executeQuery($connection, $sql, $parameters);
            } else if (file_exists($image['file'])) {
                unlink($image['file']);
            }
        }
    
        echo json_encode([
            'status' => true,
            'message' => 'Cập nhật blog thành công'
        ]);
    }

    // Xóa trạng thái product

    if ($_POST['action'] == 'delete') {
        $id = $_POST['id'];

        $sql = "DELETE FROM blog WHERE id = ?";
        $result = executeQuery($connection, $sql, [$id]);
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
