<?php

//load.php

$connect = new PDO('mysql:host=localhost;dbname=mini_project', 'root', '');

$data = array();

$query = "SELECT * FROM events ORDER BY id";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
 $data[] = array(
  'id'   => $row["id"],
  'title'   => $row["calender_title"],
  'start'   => $row["star_date"],
  'end'   => $row["end_date"],
  'color' => $row['']
 );
}

echo json_encode($data);

?>