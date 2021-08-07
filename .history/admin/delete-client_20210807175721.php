<?php 
    include 'includes/db.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $client_id = $_POST['client_id'];

        try{

            $query = "DELETE * FROM user WHERE id=:id";
            $stmt = 

        }catch(PDOException $e){
            $e->getMessage();
        }
    }
?>