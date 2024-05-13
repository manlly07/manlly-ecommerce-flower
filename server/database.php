<?php
    session_start();
    
    // Thông tin kết nối database
    $host = 'localhost'; // Địa chỉ host của database
    $dbname = 'ecommerce_flower'; // Tên database
    $username = 'root'; // Tên người dùng database
    $password = ''; // Mật khẩu database
    // Thực hiện kết nối đến database
    $connection = null;
    try {
        $connection = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        // Thiết lập chế độ báo lỗi và chế độ ném ngoại lệ cho PDO
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Kết nối thành công đến database.";
    } catch (PDOException $e) {
        echo "Lỗi kết nối đến database: " . $e->getMessage();
    }


    // Hàm thực thi câu lệnh
    function executeQuery($connection ,$query, $parameters = [], $fetch = false, $returnLastInsertId = false) {
    
        try {
            $stmt = $connection->prepare($query);
            $stmt->execute($parameters);
            if ($returnLastInsertId) {
                $lastInsertId = $connection->lastInsertId();
                return $lastInsertId;
            }
    
            if ($fetch) {
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $result;
            }
    
            return true;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    function generateRandomString($length) {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $result = '';
      
        for ($i = 0; $i < $length; $i++) {
          $randomIndex = rand(0, strlen($characters) - 1);
          $result .= $characters[$randomIndex];
        }
      
        return $result;
    }

    function generateImageName($file){
        $timestamp = time();
        if (isset($file['name'])) {
            $extension = pathinfo($file['name'], PATHINFO_EXTENSION);
        }else {
            $extension = pathinfo($file, PATHINFO_EXTENSION);
        }
        return generateRandomString(8).''.$timestamp . '.' . $extension;
    }
?>