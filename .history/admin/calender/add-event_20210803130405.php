<?php

//insert.php

$connect = new PDO('mysql:host=localhost;dbname=mini-project', 'root', '');

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $star_date = $_POST['start'];
    $end_date = $_POST['end_'];
    $calender_title = $_POST['calender_title'];

    $query = "INSERT INTO calender (calender_title, star_date, end_date) VALUES (:calender_title, :star_date, :end_date)";

    $statement = $connect->prepare($query);

    $statement->execute([
        ':calender_title'  => $calender_title,
        ':star_date' => $start,
        ':end_date' => $end
    ]);

  $calenderId = $connect->lastInsertId();
}


?>