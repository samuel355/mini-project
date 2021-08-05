<?php

//insert.php

$connect = new PDO('mysql:host=localhost;dbname=mini_project', 'root', '');

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $start_ = $_POST['start_'];
  $title = $_POST['title'];
  $description_ = $_POST['description_'];
  $end_ = $_POST['end_'];
  $color = $_POST['color'];

  if(empty($start_)){
    http_response_code(400);
    echo json_encode("Pleae enter the title");
  }elseif(empty($description_)){
    http_response_code(400);
    echo json_encode("Please add description");
  }eleif(empty($color)){
    http_response_code(400)
  }

  $query = "INSERT INTO calender (title, start_, end_, description_, color) VALUES (:title, :start_, :end_, :description_, :color)";

  $statement = $connect->prepare($query);

  $statement->execute([
    ':title' => $title_,
    ':start_' => $start_,
    ':end_' => $end_,
    ':description_' => $description_,
    ':color' => $color,
  ]);

  $calenderId = $connect->lastInsertId();
  header('location: ../events.php');
}


?>