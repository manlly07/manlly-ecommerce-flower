<?php 
    include './database.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {


        if ($_POST['action'] == 'login') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Kiểm tra mật khẩu và xác nhận mật khẩu
            $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
            $parameters = [$username, $password];
            $result = executeQuery($connection, $sql, $parameters, true);
            if (count($result) == 0) {
                echo json_encode([
                    'status' => false,
                    'message' => 'Sai user name hoặc mật khẩu',
                    'phone' => false
                ]);
            } else {
                //Lưu đối tượng dưới dạng chuỗi vào phiên
                $_SESSION['user'] = serialize($result[0]);
                echo json_encode([
                    'status' => true,
                    'message' => 'Đăng nhập thành công!',
                ]);
            }
        }

        if ($_POST['action'] == 'logout') {
            session_destroy();
        }

        if ($_POST['action'] == 'resend') {
            $id = $_POST['id'];
            $phone = $_POST['phone'];
            $phone = '84' . ltrim($phone, '0');
            sendOtp($connection, $id, $phone);
        }

        if ($_POST['action'] == 'verify') {
            $otp = $_POST['otp'];
            $id = $_POST['id'];
            $sql = "SELECT * FROM otp WHERE user_id = '$id' AND code = '$otp' AND expiration_time > 'NOW()'";
            $result = executeQuery($connection, $sql, [], true);
            if (count($result) == 1) {
                $sql = "UPDATE users set phone_verify = '1' WHERE id = '$id'";
                $result = executeQuery($connection, $sql, []);
                $sql = "SELECT * FROM users WHERE id = '$id'";
                $result = executeQuery($connection, $sql, [], true);
                $_SESSION['user'] = serialize($result[0]);
                echo json_encode([
                    'status' => true,
                    'message' => 'Xác thực thành công',
                ]); 
            }else {
                echo json_encode([
                    'status' => false,
                    'message' => 'Không chính xác',
                ]);
            }
        }

        if ($_POST['action'] == 'checkAuth') {
            if(isset($_SESSION['user'])) {
                $serializedObject = $_SESSION['user']; // Lấy chuỗi đối tượng từ phiên
                $user = unserialize($serializedObject); // Chuyển đổi chuỗi thành đối tượng ban đầu
                unset($user['password']);
                $user['role'] = 'admin';
                echo json_encode([
                    'status' => true,
                    'message' => 'Đã đăng nhập',
                    'user' => $user
                ]);
            }else {
                $user['role'] = 'guest';
                echo json_encode([
                    'status' => false,
                    'message' => 'Chưa đăng nhập',
                    'user' => $user
                ]);
            }
        }
    }


?>