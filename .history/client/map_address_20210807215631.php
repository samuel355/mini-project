<?php 
    session_start();
    include 'includes/db.php';

    if($_SERVER['REQUEST_METHOD'] = 'POST'){
        $email = $_SESSION['email'];
        $user_address = $_POST['map-address'];

    }

    try{
        $query = "UPDATE users set"

    }catch(PDOException $e){
        $e->getMessage();
    }
?>