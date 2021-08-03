<?php

$id = $_POST['id'];
//Delete
$connect = new PDO('mysql:host=localhost;dbname=mini-project', 'root', '');

if(isset($_POST["id"])){
    $query = " DELETE FROM calender WHERE id=:id";
    $statement = $connect->prepare($query);
    $statement->execute([':id' =>$id]);
}
?>

