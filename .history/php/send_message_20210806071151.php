<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
  //insert.php

  $connect = new PDO('mysql:host=localhost;dbname=mini_project', 'root', '');

  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    if(empty($_POST['fullname'])){
      http_response_code(400);
      echo json_encode("Please enter your name");
    }elseif(empty( $_POST['email'])){
      http_response_code(400);
      echo json_encode("Your email");
    }elseif(empty($subject)){
      http_response_code(400);
      echo json_encode("Add subject");
    }elseif(empty($_POST['phone'])){
        http_response_code(400);
        echo json_encode("Add phone number");
    }elseif(empty($_POST['message'])){
        http_response_code(400);
        echo json_encode("Add message");
    }else{

        $fullname_ = $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $subject = $_POST['subject'];

      try{
        
        $query = "INSERT INTO events (title, email, start_, end_, description_, color) VALUES (:title, :email, :start_, :end_, :description_, :color)";

        $insert = "INSERT INTO messages (firstname, lastname, email) VALUE (:firstname, :lastname, :email)";
        
        $statement = $connect->prepare($query);

        $fetch = $connect->prepare($insert);

        $statement->execute([
          ':title' => $title,
          ':email' => $email,
          ':start_' => $start_,
          ':end_' => $end_,
          ':description_' => $description_,
          ':color' => $color,
        ]);

        $calenderId = $connect->lastInsertId();

        $fetch->execute([
          ':firstname' => $firstname,
          ':lastname' => $lastname,
          ':email' => $email
        ]);

        $messageId = $connect->lastInsertId();
      

        ///Sending Mail

        //Load Composer's autoloader
        require 'vendor/autoload.php';

        $mail = new PHPMailer(true);
        $header = ' Customer Added an Event';

        $message = "
            <p>From : </p>
            <p>".$firstname.".".$lastname."</p>
            <p>Email: ".$email."</p>
            <p>Check Calender to see due date.</p>
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
      }

      http_response_code(200);
      echo json_encode("Added successfully");

      echo '<script>window.location.assign("http://localhost/mini-project/client/events.php")</script>';
    }

  }
exit;

?>