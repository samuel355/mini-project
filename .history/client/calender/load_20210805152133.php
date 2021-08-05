<?php

//load.php
$connect = new PDO('mysql:host=localhost;dbname=mini_project', 'root', '');
if(isset($_SESSION['email'])){
    $email = $_S
}
$data = array();

$query = "SELECT * FROM events";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
 $data[] = array(
  'id'   => $row["id"],
  'title'   => $row["title"],
  'description' => $row['description_'],
  'start'   => $row["start_"],
  'end'   => $row["end_"],
  'color' => $row["color"]
 );
}

echo json_encode($data);

?>