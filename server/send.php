<?php
    use Infobip\Api\SmsApi;
    use Infobip\Configuration;
    use Infobip\Model\SmsAdvancedTextualRequest;
    use Infobip\Model\SmsDestination;
    use Infobip\Model\SmsTextualMessage;
    require '../vendor/autoload.php';

    function sendOtp ($connection, $id, $phone) {
        
        $otp = rand(100000, 999999);
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        // $RECIPIENT = "84982193203";
        $RECIPIENT = $phone;
        
        $SENDER = "InfoSMS";
        $MESSAGE_TEXT = "Ma OTP: ".$otp.".";
        
        $BASE_URL = "https://2vjr2z.api.infobip.com";
        $API_KEY = "bb2b75c4e97dd7292f6525e78c9c6c30-addaabe1-df70-48fe-a529-c038861ac889";
    
        $configuration = new Configuration(host: $BASE_URL, apiKey: $API_KEY);
    
        $sendSmsApi = new SmsApi(config: $configuration);
    
        $destination = new SmsDestination(
            to: $RECIPIENT
        );
    
        $message = new SmsTextualMessage(destinations: [$destination], from: $SENDER, text: $MESSAGE_TEXT);
    
        $request = new SmsAdvancedTextualRequest(messages: [$message]);
    
        try {
            // Lấy số lần yêu cầu OTP hiện tại cho user ID
            $sql = "SELECT request_count FROM otp WHERE user_id = $id";
            $result = executeQuery($connection, $sql, [], true);

            if ($result) {
                $requestCount = $result[0]['request_count'];
                // Nếu số lần yêu cầu OTP vượt quá giới hạn
                if ($requestCount >= 5) {
                    echo json_encode([
                        'status' => false,
                        'message' => 'Bạn đã vượt quá số lần yêu cầu OTP trong một khoảng thời gian nhất định. Vui lòng thử lại sau.',
                    ]); 
                    exit;
                }

                // Tăng số lần yêu cầu OTP lên 1
                $newRequestCount = $requestCount + 1;
                $currentTime = date('Y-m-d H:i:s');
                $expirationTime = date('Y-m-d H:i:s', strtotime($currentTime . '+5 minutes'));
                $sql = "UPDATE otp SET request_count = '$newRequestCount', code = '$otp', expiration_time = '$expirationTime' WHERE user_id = '$id'";
                executeQuery($connection, $sql, []);

            }else {
                // Nếu chưa có dữ liệu cho user ID, thêm một bản ghi mới
                $newRequestCount = 1;
                // Thời gian hết hạn (ví dụ: 5 phút)
                $expirationTime = date('Y-m-d H:i:s', strtotime('+5 minutes'));

                $sql = "INSERT INTO otp (user_id, request_count, code, expiration_time) VALUES (?, ?, ?, ?)";
                $parameters = [$id, $newRequestCount, $otp, $expirationTime];
                executeQuery($connection, $sql, $parameters);
            }
            $smsResponse = $sendSmsApi->sendSmsMessage($request);

            // echo $smsResponse->getBulkId() . PHP_EOL;
        
            // foreach ($smsResponse->getMessages() ?? [] as $message) {
            //     echo sprintf('Message ID: %s, status: %s', $message->getMessageId(), $message->getStatus()?->getName()) . PHP_EOL;
            // }
        } catch (Throwable $apiException) {
            echo("HTTP Code: " . $apiException->getCode() . "\n");
        }
    }
?>