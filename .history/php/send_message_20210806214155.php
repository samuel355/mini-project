<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
  //insert.php

  require '../includes/db.php';

  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    if(empty($_POST['firstname'])){
      http_response_code(400);
      echo json_encode("Please enter your name");
    }elseif(empty( $_POST['email'])){
      http_response_code(400);
      echo json_encode("Your email");
    }elseif(empty($_POST['subject'])){
      http_response_code(400);
      echo json_encode("Add subject");
    }elseif(empty($_POST['phone'])){
        http_response_code(400);
        echo json_encode("Add phone number");
    }elseif(empty($_POST['message'])){
        http_response_code(400);
        echo json_encode("Add message");
    }else{

        $ful_ = $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message_ = $_POST['message'];
        $subject_ = $_POST['subject'];

      try{

        $insert = "INSERT INTO messages (firstname, email, subject_, message_, phone) 
          VALUES (:firstname, :email, :subject_, :message_, :phone)";
        
        $statement = $db->prepare($insert);

        $statement->execute([
          ':firstname' => $firstname,
          ':email' => $email,
          ':subject_' => $subject_,
          ':message_' => $message_,
          ':phone' => $phone,
        ]);

        $messageId = $db->lastInsertId();
      

        ///Sending Mail

        //Load Composer's autoloader
        require 'vendor/autoload.php';

        $mail = new PHPMailer(true);
        $header = ' Customer Added an Event';

        $message = "
            <p>From : </p>
            <p>".$fullname."</p>
            <p>Email: ".$email."</p>
            <p>Check Dashboard or email inbox to see</p>
        ";

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
        $mail->Port = 465; 

        $mail->setFrom($email, 'Waste Management Event');

        //Recipients
        $mail->addAddress('asamuel355@yahoo.com', $header);

        //Content
        $mail->isHTML(true);
        $mail->Subject = $header;
        $mail->Body    = $message;
        $mail->AltBody = $message;

        $mail->send();
        
      }catch(PDOException $e){
        $_SESSION['error'] = $e->getMessage();
        http_response_code(400);
        echo $_SESSION['error'];
      }

      http_response_code(200);
      echo json_encode("Sent successfully");

      //echo '<script>window.location.assign("http://localhost/mini-project/contact.php")</script>';
    }

  }
exit;

?>