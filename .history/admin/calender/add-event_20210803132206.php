<?php

//insert.php

$connect = new PDO('mysql:host=localhost;dbname=mini_project', 'root', '');

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $end_date = $_POST['end_date'];
    $calender_title = $_POST['calender_title'];
    $star_date = new ddate("Y-m-d").Date("h:i A");

    $query = "INSERT INTO calender (calender_title, star_date, end_date) VALUES (:calender_title, :star_date, :end_date)";

    $statement = $connect->prepare($query);

    $statement->execute([
        ':calender_title'  => $calender_title,
        ':star_date' => $star_date,
        ':end_date' => $end_date
    ]);

  $calenderId = $connect->lastInsertId();
  header('location: ../events.php');
}


?>