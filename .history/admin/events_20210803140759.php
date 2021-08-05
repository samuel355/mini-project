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
			edittable: true,
			navLinks: true,
			EventLimit: true,

			
			select: function(start, end) {
					
				$('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
				$('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
				$('#ModalAdd').modal('show');
			},
			eventAfterRender: function(eventObj, $el) {
					var request = new XMLHttpRequest();
					request.open('GET', '', true);
					request.onload = function () {
						$el.popover({
							title: eventObj.title,
							content: eventObj.description,
							trigger: 'hover',
							placement: 'top',
							container: 'body'
						});
					}
				request.send();
			},
			
			eventRender: function(event, element) {
				element.bind('click', function() {
					$('#ModalEdit #id').val(event.id);
					$('#ModalEdit #title').val(event.title);
					$('#ModalEdit #description').val(event.description);
					$('#ModalEdit #color').val(event.color);
					$('#ModalEdit').modal('show');
				});
			},
			eventDrop: function(event, delta, revertFunc) { // si changement de position

				edit(event);

			},
			eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur

				edit(event);

			},


			events: [
				<?php foreach($events as $event): 
				
					$start = explode(" ", $event['start']);
					$end = explode(" ", $event['end']);
					if($start[1] == '00:00:00'){
						$start = $start[0];
					}else{
						$start = $event['start'];
					}
					if($end[1] == '00:00:00'){
						$end = $end[0];
					}else{
						$end = $event['end'];
					}
				?>
					{
						id: '<?php echo $event['id']; ?>',
						title: '<?php echo $event['title']; ?>',
						description: '<?php echo $event['description']; ?>',
						start: '<?php echo $start; ?>',
						end: '<?php echo $end; ?>',
						color: '<?php echo $event['color']; ?>',
					},
					<?php endforeach; ?>
			]
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
				
				<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
						<form class="form-horizontal" method="POST" action="./core/add-event.php">
								
								<div class="modal-header">
								<h4 class="modal-title" id="myModalLabel">Add Event</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								</div>
								<div class="modal-body">
									
									<div class="form-group">
										<label for="title" class="col-sm-2 control-label">Title</label>
										<div class="col-sm-10">
										<input type="text" name="title" class="form-control" id="title" placeholder="Title">
										</div>
									</div>
									<div class="form-group">
										<label for="description" class="col-sm-2 control-label">Description</label>
										<div class="col-sm-10">
										<input type="text" name="description" class="form-control" id="description" placeholder="Description">
										</div>
									</div>
									<div class="form-group">
										<label for="color" class="col-sm-2 control-label">Color</label>
										<div class="col-sm-10">
										<select name="color" class="form-control" id="color">
											<option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
											<option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
											<option style="color:#008000;" value="#008000">&#9724; Green</option>						  
											<option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
											<option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
											<option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
											<option style="color:#000;" value="#000">&#9724; Black</option>
											
											</select>
										</div>
									</div>
									<div class="container">
									<div class="row">
									<div class="form-group">
										<label for="start" class="col-sm-12 control-label">Start date</label>
										<div class="col-sm-12">
										<input type="text" name="start" class="form-control" id="start" readonly>
										</div>
									</div>
									<div class="form-group">
										<label for="end" class="col-sm-12 control-label">End date</label>
										<div class="col-sm-12">
										<input type="text" name="end" class="form-control" id="end" readonly>
										</div>
									</div>
									</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-primary">Save</button>
								</div>
								</form>
						</div>
					</div>
				</div>
				<!-- /Add Event Modal -->
				
				<!-- Event Modal -->
				<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
								<form class="form-horizontal" method="POST" action="./core/edit-title.php">
								<div class="modal-header">
								<h4 class="modal-title" id="myModalLabel">Edit Event</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								</div>
								<div class="modal-body">
									
									<div class="form-group">
										<label for="title" class="col-sm-2 control-label">Title</label>
										<div class="col-sm-10">
										<input type="text" name="title" class="form-control" id="title" placeholder="Title">
										</div>
									</div>
									<div class="form-group">
										<label for="description" class="col-sm-2 control-label">Description</label>
										<div class="col-sm-10">
										<input type="text" name="description" class="form-control" id="description" placeholder="Description">
										</div>
									</div>
									<div class="form-group">
										<label for="color" class="col-sm-2 control-label">Color</label>
										<div class="col-sm-10">
										<select name="color" class="form-control" id="color">
											<option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
											<option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
											<option style="color:#008000;" value="#008000">&#9724; Green</option>						  
											<option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
											<option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
											<option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
											<option style="color:#000;" value="#000">&#9724; Black</option>
											
											</select>
										</div>
									</div>
										<div class="form-group"> 
											<div class="col-sm-2">
											<label onclick="toggleCheck('check1');" class="label-off" for="check1" id="check1_label">
											Delete
											</label>
											<input class="nocheckbox" type="checkbox" id="check1" name="delete">
											</div>
										</div>
										<script>
										function toggleCheck(check) {
											if ($('#'+check).is(':checked')) {
												$('#'+check+'_label').removeClass('label-on');
												$('#'+check+'_label').addClass('label-off');
											} else {
												$('#'+check+'_label').addClass('label-on');
												$('#'+check+'_label').removeClass('label-off');
											}
										}		  
										</script>
									<input type="hidden" name="id" class="form-control" id="id">
									
									
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-primary">Save</button>
								</div>
								</form>
							</div>
						</div>
					</div>

				</div>
				<!-- /Event Modal -->

            </div>
			<!-- /Page Wrapper -->
			
        </div>
		<!-- /Main Wrapper -->
		
	<?php
		include'./includes/scripts.php';
	?>