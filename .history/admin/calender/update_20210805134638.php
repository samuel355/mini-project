<?php

  //insert.php

  $connect = new PDO('mysql:host=localhost;dbname=mini_project', 'root', '');

  if (isset($_POST['delete']) && isset($_POST['id'])){
	
	$id = $_POST['id'];

	$sql = "DELETE FROM events WHERE id = $id";

	$prepareQuery = $connect->prepare($sql);

	if ($prepareQuery == false) {
	 print_r($connect->errorInfo());
	 die ('Error preparing the query.');
	}

	$executeQuery = $prepareQuery->execute();

	if ($executeQuery == false) {
	 print_r($prepareQuery->errorInfo());
	 die ('Error executing the query.');
	}
	
} else if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['color']) && isset($_POST['id'])){
	
	$id = $_POST['id'];
	$title = $_POST['title'];
	$description_ = $_POST['description'];
	$color = $_POST['color'];
	
	$sql = "UPDATE events SET  title = '$title', description = '$description_', color = '$color' WHERE id = $id ";

	$prepareQuery = $connect->prepare($sql);

	if ($prepareQuery == false) {
	 print_r($connect->errorInfo());
	 die ('Error preparing the query.');
	}

	$executeQuery = $prepareQuery->execute();

	if ($executeQuery == false) {
	 print_r($prepareQuery->errorInfo());
	 die ('Error executing the query.');
	}
}

echo '<script>window.location.assign("http://localhost/mini-project/admin/events.php")</script>';
?>