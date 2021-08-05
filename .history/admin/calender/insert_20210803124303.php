<?php

//insert.php

$connect = new PDO('mysql:host=localhost;dbname=mini-project', 'root', '');

if(isset($_POST["title"]))
{
 $query = "INSERT INTO calender (title, start_date, end_date) VALUES (:title, :start_date, :end_date)";

 $statement = $connect->prepare($query);

 $statement->execute([
   ':title'  => $_POST['title'],
   ':start_date' => $_POST['start_date'],
   ':end_date' => $_POST['end_date']
  ]);
  
}


?>