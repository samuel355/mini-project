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
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

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
        
        $insert1 = "INSERT INTO events (title, email, start_, end_, description_, color) VALUES (:title, :email, :start_, :end_, :description_, :color)";

        $insert2 = "INSERT INTO messages (firstname, lastname, email) VALUE (:firstname, :lastname, :email)";
        
        $statement1 = $connect->prepare($insert1);

        $statement2 = $connect->prepare($insert2);

        $check1 = $statement->execute([
          ':title' => $title,
          ':email' => $email,
          ':start_' => $start_,
          ':end_' => $end_,
          ':description_' => $description_,
          ':color' => $color,
        ]);

        $check2 = $statement2->execute([
          ':firstname' => $firstname,
          ':lastname' => $lastname,
          ':email' => $email
        ]);

        if($check1 && $check2){
          http_response_code(200);
          echo json_encode("sent");
        }else
      

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