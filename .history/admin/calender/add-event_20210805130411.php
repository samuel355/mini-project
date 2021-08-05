<?php

//insert.php

$connect = new PDO('mysql:host=localhost;dbname=mini_project', 'root', '');

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $start_ = $_POST['end_date'];
  $title = $_POST['title'];
  $de
  $end_ = $_POST['start'];

  $query = "INSERT INTO calender (calender_title, star_date, end_date) VALUES (:calender_title, :star_date, :end_date)";

  $statement = $connect->prepare($query);

  $statement->execute([
    ':calender_title' => $calender_title,
    ':star_date' => $star_date,
    ':end_date' => $end_date
  ]);

  $calenderId = $connect->lastInsertId();
  header('location: ../events.php');
}


?>