<?php

//update.php

$connect = new PDO('mysql:host=localhost;dbname=mini-project', 'root', '');

if(isset($_POST["id"]))
{
 $query = "
 UPDATE event 
 SET title=:title, start_date=:start_date, end_date=:end_date 
 WHERE id=:id
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':title'  => $_POST['title'],
   ':start_date' => $_POST['date'],
   ':end_date' => $_POST['end_date'],
   ':id'   => $_POST['id']
  )
 );
}

?>