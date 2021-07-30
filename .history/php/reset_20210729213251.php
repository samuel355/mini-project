<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    session_start();
    ob_start();
    require '../includes/db.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $email = trim($_POST['email']);

        if (empty($_POST['email'])){
            http_response_code(400);
            echo json_encode("Please Enter your email");
        }else{
            try {
                $sql = "SELECT *, COUNT(*) AS numrows FROM users WHERE email =:email";
                $stmt = $db->prepare($sql);
                $stmt->execute([
                    ':email'=>$email
                ]);
                $row = $stmt->fetch();
                if($row['numrows'] == 0){
                    http_response_code(400);
                    echo json_encode("Email not found");

                }else{
                    //auto generated fields
                    $reset_code = substr($email,0,1).date('y').rand(0000,9999);


                    try{
                        $query = "UPDATE users SET reset_code=:reset_code WHERE email=:email";
                        $stmtt = $db->prepare($query);
                        $stmtt->execute([
                            ':reset_code'=>$reset_code,
                            ':email'=>$row['email']
                        ]);

                        //Send mail to the email for user to reset
                        //Load Composer's autoloader
                        require 'vendor/autoload.php';

                        $mail = new PHPMailer(true);

                        $message = "
                            <h2>Account Reset</h2>
                            <p>Please click the link below to reset your password</p>
                            <a href='http://localhost/mini-project/reset_link.php?reset_code=".$reset_code."&email=".$email."'> Reset your account</a>
                        ";

                        $header = ' Reset Your Password';

                        //Server settings
                        $mail->isSMTP();
                        $mail->Host = 'smtp.gmail.com';
                        $mail->SMTPAuth = true;
                        $mail->Username = 'samueloseiboatenglistowell57@gmail.com';
                        $mail->Password = '0264748772';                             //SMTP password
                        $mail->SMTPOptions = array(
                            'ssl' => array(
                                'verify_peer' => false,
                                'verify_peer_name' => false,
                                'allow_self_signed' => true
                            )
                        );
                        $mail->SMTPSecure = 'ssl';
                        $mail->Port = 465;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                        
                        $mail->setFrom('noreply@wastemanagement.com', 'Waste Management');

                        //Recipients
                        $mail->addAddress($email,$header);

                        //Content
                        $mail->isHTML(true);
                        $mail->Subject = 'Waste Management Site';
                        $mail->Body    = $message;
                        $mail->AltBody = $message;

                        $mail->send();

                        if(!$mail->send()){
                            http_response_code(400);
                            $error_message = 'Sorry something went wrong...Contact the system admin '. $mail->ErrorInfo;
                            echo json_encode($error_message);
                        }else{
                            http_response_code(200);
                            echo json_encode('You can now log onto your account');
                            echo '<script>window.location.assign("http://localhost/mini-project/reset_success.php")</script>';
                        }
                        
                    }catch(PDOException $e){
                        $_SESSION['error'] = $e->getMessage();
                    }

                }

            }catch (PDOException $e){
                $_SESSION['error'] = $e->getMessage();
            }
        }
    } else {
        http_response_code(400);
        echo json_encode("Ooops");
    }

    exit;
