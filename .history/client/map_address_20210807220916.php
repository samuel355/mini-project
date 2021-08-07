<?php 
    session_start();
    include 'includes/db.php';

    if($_SERVER['REQUEST_METHOD'] = 'POST'){
        $email = $_POST['email'];
        $user_address = $_POST['map-address'];

    }

    try{
        $query = "UPDATE users SET user_address=:user_address WHERE email = :email";
        $stmt = $db->prepare($query);
        $stmt->execute([
            ':user_address' => $user_address,
            ':email' => $email
        ]);

        header('location: ./client-profile.php');

    }catch(PDOException $e){
        $e->getMessage();
    }
?>