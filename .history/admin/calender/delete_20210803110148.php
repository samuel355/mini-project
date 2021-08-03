<?php
$id = $_POST['id'];
try {
    $bdd = new PDO('mysql:host=localhost;dbname=fullcalendar', 'root', 'root');
} catch (Exception $e) {
    exit('Unable to connect to database.');
}
$sql = "DELETE from events WHERE id=" . $id;
$q = $bdd->prepare($sql);
$q->execute();

//Delete
$connect = new PDO('mysql:host=localhost;dbname=mini-project', 'root', '');

if(isset($_POST["id"])){
    $query = " DELETE FROM calender WHERE id=";
}
?>

