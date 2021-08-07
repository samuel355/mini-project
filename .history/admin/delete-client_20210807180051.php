<?php 
    include 'includes/db.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $client_id = $_POST['client_id'];

        try{

            $query = "DELETE * FROM users WHERE id=:id";
            $stmt = $db->prepare($query);
            $stmt->execute([':id' => $client_id]);

            header('location: ./index.php');

        }catch(PDOException $e){
            $e->getMessage();
        }
    }else{
        
    }
?>