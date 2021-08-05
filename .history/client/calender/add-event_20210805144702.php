<?php

  //insert.php
  include 'includes/db.php';

  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    $email = $_POST['email'];
    $start_ = $_POST['start_'];
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

        $statement = $db->prepare($query);
      
        $statement->execute([
          ':title' => $title,
          ':email' => $email,
          ':start_' => $start_,
          ':end_' => $end_,
          ':description_' => $description_,
          ':color' => $color,
        ]);
      
        $eventId = $db->lastInsertId();

      }catch(PDOException $e){
        $_SESSION['error'] = $e->getMessage();
      }

      http_response_code(200);
      echo json_encode("Added successfully");

      echo '<script>window.location.assign("http://localhost/mini-project/admin/events.php")</script>';
    }

  }
exit;

?>