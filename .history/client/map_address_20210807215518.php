<?php 
    session_start();
    include 'includes/db.php';

    if($_SERVER['REQUEST_METHOD'] = 'POST'){
        $email = $_SESSION['email']

    }

    try{


    }catch(PDOException $e){
        $e->getMessage();
    }
?>