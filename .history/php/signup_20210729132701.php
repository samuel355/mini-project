<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

session_start();
ob_start();
require '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(empty($_POST["firstname"])){
        http_response_code(400);
        echo json_encode("Please the firstname cannot be empty");
    }elseif(empty($_POST["lastname"])){
        http_response_code(400);
        echo json_encode("Please the lastname cannot be empty");
    }elseif(empty($_POST["email"])){
        http_response_code(400);
        echo json_encode("Your email is empty");
    }elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo json_encode("Please your email is invalid");
    }elseif(empty($_POST['password'])){
        http_response_code(400);
        echo json_encode("Enter your password");
    }
    elseif(strlen($_POST["password"]) <= '5') {
        http_response_code(400);
        echo json_encode('Your Password Must Contain At Least 6 Characters !');
    }
    elseif(!preg_match("#[0-9]+#",$_POST["password"])) {
        http_response_code(400);
        echo json_encode("Your Password Must Contain At Least 1 Number !") ;
    }
    elseif(!preg_match("#[A-Z]+#",$_POST["password"])) {
        http_response_code(400);
        echo json_encode('Your Password Must Contain At Least 1 Capital Letter !');
    }
    elseif(!preg_match("#[a-z]+#",$_POST["password"])) {
        http_response_code(400);
        echo json_encode("Your Password Must Contain At Least 1 Lowercase Letter !");
    }elseif ($_POST["password"] !== $_POST["repassword"]){
        http_response_code(400);
        echo json_encode("Your Passwords do not match");
    }else{
        $firstname = trim($_POST['firstname']);
        $lastname = trim($_POST['lastname']);
        $email = trim($_POST['email']);
        $user_password = trim($_POST['password']);
        $user_password = PASSWORD_HASH($_POST['password'],PASSWORD_DEFAULT);
        $user_address = trim($_POST['address']);

        $registered_on = date("Y-m-d") ." At ". date("h:i A");

        //auto generated fields
        $activation_code = substr($_POST['firstname'],0,1).date('y').rand(0000,9999);

        //Activation link to email
        $link = "<a href='http://localhost/mini-project/email-verification.php?key=".$email."&activation_code=".$activation_code."'> Click and Verify Email </a>";

        //check if mail already exits
        $mailExits = $db->prepare("SELECT * FROM users WHERE email =:email ");
        $mailExits->execute([':email'=>$email]);
        if ($mailExits->fetch(PDO::FETCH_ASSOC)) {
            http_response_code(400);
            echo json_encode('Email Already Exits');

        }else {

            $_SESSION['firstname'] = $firstname;
            $_SESSION['lastname'] = $lastname;
            $_SESSION['email'] = $email;

            try {
                //Insert user Values and Display success Message for registration details
                $insert = "INSERT INTO users( firstname, lastname, user_password, email, user_address, registered_on, activation_code) 
                        VALUES (:firstname, :lastname, :user_password, :email,  :user_address, :registered_on, :activation_code)";
                $stmt = $db->prepare($insert);
                $stmt->execute([
                    'firstname' => $firstname,
                    'lastname' => $lastname,
                    'user_password' => $user_password,
                    'email' => $email,
                    'user_address' => $user_address,
                    'registered_on' => $registered_on,
                    'activation_code' => $activation_code
                ]);

                $userid = $db->lastInsertId();

                //Send email on live server
                // $firstname = $_POST['firstname'];
                // $lastname = $_POST['lastname'];


                //$email_message = "
                    //Hello ".$firstname." + ".$lastname. "
                    //Thank you for signin up. click on the link below to verify your email ".$link."
                //";
                //$to = $email;
                //$subject = 'Account Verification';
                //$message = $email_message;
                //$headers = "From: Waste Management System";

                // mail ($to, $subject, $message, $headers);
                
                

            }catch(PDOException $e){
                $_SESSION['error'] = $e->getMessage();
            }

            http_response_code(200);
            echo json_encode('You have Created an account succesfully.');

                //TEST MAIL SENDING WITH LOCALHOST AND GMAIL ==============================================

                //Load Composer's autoloader
                require 'vendor/autoload.php';

                $mail = new PHPMailer(true);

                $message = "
                    <h2>Thank you for Registering.</h2>
                    <p>Your Account:</p>
                    <p> Dear ".$firstname.".".$lastname."</p>
                    <p>Email: ".$email."</p>
                    <p>Password: ".$_POST['password']."</p>
                    <p>Please click the link below to activate your account.</p>
                    <a href='http://localhost/mini-project/activate.php?activation_code=".$activation_code."&email=".$email."'>Activate Account</a>
				";

               try{
                   
                    $header = ' Activate Your Account';

                    //Server settings                     //Enable verbose debug output
                    $mail->isSMTP();                                            //Send using SMTP
                    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                    $mail->Username   = 'samueloseiboatenglistowell57@gmail.com';                     //SMTP username
                    $mail->Password   = '0264748772';                               //SMTP password
                    $mail->SMTPOptions = array(
                        'ssl' => array(
                            'verify_peer' => false,
                            'verify_peer_name' => false,
                            'allow_self_signed' => true
                        )
                    );
                    $mail->SMTPSecure = 'ssl';
                    $mail->Port = 465;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                    
                    $mail->setFrom('asamuel355@yahoo.com', 'Waste Management');

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
                        echo '<script>window.location.assign("http://localhost/mini-project/success.php")</script>';
                    }

               }catch (Exception $e) {
                $_SESSION['error'] = 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
                header('location: signup.php');
            }
        }

    }

} else {
    http_response_code(400);
    echo json_encode("Ooops");
}

exit;


?>