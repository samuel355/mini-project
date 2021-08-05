<?php 
    session_start();
    include 'includes/db.php';

    if(!isset($_SESSION['email']) && !isset($_SESSION['login']) && !isset($_SESSION['admin'])){
        header('location: ../index.php');
    }else{
        $email = $_SESSION['email'];
        $success = $_SESSION['login'];
        $admin = $_SESSION['admin'] ;

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



  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
  

	<script>
		$(document).ready(function() {
		var calendar = $('#calendar').fullCalendar({
			editable:true,
			header:{
			left:'prev,next today',
			center:'title',
			right:'month,agendaWeek,agendaDay'
			},
			events: './calender/load.php',
			selectable:true,
			selectHelper:true,

			
			select: function(start, end, allDay)
			{
				var title = prompt("Enter Event Title");
				if(title)
				{
					var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
					var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
					$.ajax({
						url:"./calender/insert.php",
						type:"POST",
						data:{title:title, start:start, end:end},
						success:function()
						{
							calendar.fullCalendar('refetchEvents');
							alert("Added Successfully");
						}
					})
				}
			},
			editable:true,

			eventResize:function(event)
			{
				var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
				var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
				var title = event.title;
				var id = event.id;
				$.ajax({
					url:"./calender/update.php",
					type:"POST",
					data:{title:title, start:start, end:end, id:id},
					success:function(){
						calendar.fullCalendar('refetchEvents');
						alert('Event Update');
					}
				})
			},
			
			eventDrop:function(event)
			{
				var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
				var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
				var title = event.title;
				var id = event.id;
				$.ajax({
					url:"./calender/update.php",
					type:"POST",
					data:{title:title, start:start, end:end, id:id},
					success:function()
					{
					calendar.fullCalendar('refetchEvents');
					alert("Event Updated");
					}
				});
			},

			eventClick:function(event)
			{
				if(confirm("Are you sure you want to remove it?"))
				{
					var id = event.id;
					$.ajax({
						url:"./calender/delete.php",
						type:"POST",
						data:{id:id},
						success:function()
						{
							calendar.fullCalendar('refetchEvents');
							alert("Event Removed");
						}
					})
				}
			},
		});
		});
	
	</script>
		
</head>

    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <?php include'./includes/header.php' ?>
			<!-- /Header -->
			
			<!-- Sidebar -->
            <?php include'./includes/sidebar.php' ?>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Events</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Events</li>
								</ul>
							</div>
							<div class="col-auto float-right ml-auto">
								<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_event"><i class="fa fa-plus"></i> Add Event</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-lg-12">
							<div class="card mb-0">
								<div class="card-body">
									<div class="row">
										<div class="col-md-12">
										
											<!-- Calendar -->
											<div id="calendar"></div>
											<!-- /Calendar -->
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
				<!-- /Page Content -->
			
				<!-- Add Event Modal -->
				
				
				<!-- /Add Event Modal -->
				
				<!-- Event Modal -->
				
				<!-- /Event Modal -->

            </div>
			<!-- /Page Wrapper -->
			
        </div>
		<!-- /Main Wrapper -->
		
	<?php
		include'./includes/scripts.php';
	?>