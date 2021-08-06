<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
  //insert.php

  $connect = new PDO('mysql:host=localhost;dbname=mini_project', 'root', '');

  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    $start_ = $_POST['start_'];
    $email = $_POST['email'];
    $title = $_POST['title'];
    $description_ = $_POST['description_'];
    $end_ = $_POST['end_'];
    $color = $_POST['color'];

    if(empty($title)){
      http_response_code(400);
      echo json_encode("Pleae enter the title");
    }elseif(empty($description_)){
      http_response_code(400);
      echo json_encode("Please add description");
    }elseif(empty($color)){
      http_response_code(400);
      echo json_encode("Please choose color");
    }else{

      try{
        $query = "INSERT INTO events (title, email, start_, end_, description_, color) VALUES (:title, :email, :start_, :end_, :description_, :color)";

        $statement = $connect->prepare($query);
      
        $statement->execute([
          ':title' => $title,
          ':email' => $email,
          ':start_' => $start_,
          ':end_' => $end_,
          ':description_' => $description_,
          ':color' => $color,
        ]);
      
        $calenderId = $connect->lastInsertId();

        ///Sending Mail

        //Load Composer's autoloader
        require 'vendor/autoload.php';

        $mail = new PHPMailer(true);
        $header = ' Customer Added an Event';

        $message = "
            <p>From : </p>
            <p>".$firstname.".".$lastname."</p>
            <p>Email: ".$email."</p>
            <p>Password: ".$_POST['password']."</p>
            <p>Please click the link below to activate your account.</p>
            <a href='http://localhost/mini-project/email-verification.php?activation_code=".$activation_code."&email=".$email."'> Activate Account</a>
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