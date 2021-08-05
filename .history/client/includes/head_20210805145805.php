<?php 
    session_start();
    include 'includes/db.php';

    if(!isset($_SESSION['email']) && !isset($_SESSION['login']) && !isset($_SESSION['client'])){
        header('location: ../index.php');
    }else{
        $email = $_SESSION['email'];
        $success = $_SESSION['login'];
        $client = $_SESSION['client'] ;

        try{
            $query = "SELECT * FROM users WHERE email=:email";
            $stmt = $db->prepare($query);
            $stmt->execute([
                ':email'=>$email,
            ]);
            $row = $stmt->fetch();

        }catch (PDOException $e){
            $_SESSION['error'] = $e->getMessage();
        }
    }
?>

<?php include '../' ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Waste Management</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="assets/css/line-awesome.min.css">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="assets/css/select2.min.css">
		
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
		
		<!-- Calendar CSS -->
		<link rel="stylesheet" href="assets/css/fullcalendar.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">	
</head>