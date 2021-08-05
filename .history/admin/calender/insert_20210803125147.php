<?php

//insert.php

$connect = new PDO('mysql:host=localhost;dbname=mini-project', 'root', '');

if(isset($_POST["title"]))
{
    $start = $_POST['start'];
    $end = $_POST['end'];
    $title = $_POST['title'];

    $query = "INSERT INTO calender (calender_title, star_date, end_date) VALUES (:title, :start_dat, :end_date)";

    $statement = $connect->prepare($query);

    $statement->execute([
    ':title'  => $start,
    ':star_dat' => $,
    ':end_date' => $_POST['end']
    ]);

  $calenderId = $connect->lastInsertId();
}


?>