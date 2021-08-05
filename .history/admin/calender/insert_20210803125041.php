<?php

//insert.php

$connect = new PDO('mysql:host=localhost;dbname=mini-project', 'root', '');

if(isset($_POST["title"]))
{
    $start = $_POST['start']
    $query = "INSERT INTO calender (calender_title, star_date, end_date) VALUES (:title, :start_dat, :end_date)";

    $statement = $connect->prepare($query);

    $statement->execute([
    ':title'  => $_POST['title'],
    ':star_dat' => $_POST['start'],
    ':end_date' => $_POST['end']
    ]);

  $calenderId = $connect->lastInsertId();
}


?>