<?php 
    include './database.php';
    include './send.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Thêm đăng ký tài khoản
        if ($_POST['action'] == 'register') {
            $first_name = $_POST['firstname'];
            $last_name = $_POST['lastname'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirmPassword'];
            $address = $_POST['address'];
            $image = '';
            // Kiểm tra mật khẩu và xác nhận mật khẩu
            if ($password !== $confirmPassword) {
                echo json_encode([
                    'status' => false,
                    'message' => 'Mật khẩu không khớp'
                ]);
                exit;
            }

            $sql = "SELECT * FROM users WHERE phone = ?";
            $parameters = [$phone];

            $result = executeQuery($connection, $sql, $parameters, true);

            if (count($result) != 0) {
                echo json_encode([
                    'status' => false,
                    'message' => 'Tài khoản đã tồn tại',
                ]);
                exit;
            }
    
            $sql = "INSERT INTO users (first_name, last_name, phone, image, phone_verify, password, address) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $parameters = [$first_name, $last_name, $phone, $image, false, $password, $address];
            $result = executeQuery($connection, $sql, $parameters, false, true);
            if ($result) {
                $phone = '84' . ltrim($phone, '0');
                sendOtp($connection, $result, $phone);
                echo json_encode([
                    'status' => true,
                    'message' => 'Đăng kí thành công',
                    'id' => $result
                ]);
            } else {
                echo json_encode([
                    'status' => false,
                    'message' => 'Đăng ký không thành công! Kiểm tra lại thông tin của bạn'
                ]);
            }
        }

        if ($_POST['action'] == 'login') {
            $phone = $_POST['phone'];
            $password = $_POST['password'];

            // Kiểm tra mật khẩu và xác nhận mật khẩu
            $sql = "SELECT * FROM users WHERE phone = ? AND password = ?";
            $parameters = [$phone, $password];
            $result = executeQuery($connection, $sql, $parameters, true);
            if (count($result) == 0) {
                echo json_encode([
                    'status' => false,
                    'message' => 'Sai số điện thoại hoặc mật khẩu',
                    'phone' => false
                ]);
            } else {
                $verify = $result[0]['phone_verify'];
                if ($verify == 0) {
                    echo json_encode([
                        'status' => true,
                        'message' => 'Đăng nhập thành công! Vui lòng xác thực số điện thoại!',
                        'phone' => false,
                        'id' => $result[0]['id']
                    ]);
                }else {
                    //Lưu đối tượng dưới dạng chuỗi vào phiên
                    $_SESSION['user'] = serialize($result[0]);
                    echo json_encode([
                        'status' => true,
                        'message' => 'Đăng nhập thành công!',
                        'phone' => true,
                        'id' => $result[0]['id']
                    ]);
                }
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