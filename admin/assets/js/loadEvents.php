<?php

//load.php

$connect = new PDO('mysql:host=localhost;dbname=mini_project', 'root', '');

$data = array();

$query = "SELECT * FROM calender ORDER BY id";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
 $data[] = array(
  'id'   => $row["id"],
  'title'   => $row["title"],
  'start'   => $row["start_date"],
  'end'   => $row["end_date"]
 );
}

echo json_encode($data);

?>