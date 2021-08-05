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

  $query = "INSERT INTO calender (calender_title, star_date, end_date) VALUES (:calender_title, :star_date, :end_date)";

  $statement = $connect->prepare($query);

  $statement->execute([
    ':title' => $title_,
    ':start_' => $start_,
    ':end_' => $end_,
    
  ]);

  $calenderId = $connect->lastInsertId();
  header('location: ../events.php');
}


?>