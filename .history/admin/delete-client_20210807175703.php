<?php 
    include 'includes/db.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $client_id = $_POST['client_id'];

        try{

            $query = "DELETE "

        }catch(PDOException $e){
            $e->getMessage();
        }
    }
?>