<?php include 'includes/head.php' ?>

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

						<!--notifications-->
						<div class="row">
							<div class="col-12">

								<div id="process" class="alert alert-primary alert-dismissible fade show form-group input-group" role="alert" style="display: none;">
									<strong>Processing ! .... </strong>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>

								<div id="alert" class="alert alert-danger alert-dismissible fade show form-group input-group" role="alert" style="display: none;">
									<strong id="messages"></strong>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>

								<div id="succ" class="alert alert-info alert-dismissible fade show form-group input-group" role="alert" style="display: none;">
									<strong id="done"></strong>
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
							</div>
						</div>
						<!--/notifications-->
						
						<form id="addEvent-form" class="form-horizontal" method="POST">
								
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
											<input type="text" name="description_" class="form-control" id="description" placeholder="Description">
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
												<input type="text" name="start_" class="form-control" id="start" readonly>
												</div>
											</div>
											<div class="form-group">
												<label for="end" class="col-sm-12 control-label">End date</label>
												<div class="col-sm-12">
													<input type="text" name="end_" class="form-control" id="end" readonly>
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
								<form class="form-horizontal" method="POST" action="calender/update.php">
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
												<label onclick="toggleCheck('check1');" class="label-off text-danger font-weight-bold" for="check1" id="check1_label">
													Delete <input class="nocheckbox" type="checkbox" id="check1" name="delete">
												</label>
											
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
