<?php
	require_once('./includes/head.php');
?>
	
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
			<?php include("./includes/header.php") ?>
			<!-- /Header -->
			
			<!-- Sidebar -->
            <?php include('./includes/sidebar.php') ?>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
				<!-- Page Content -->
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Welcome <?php echo $row['firstname']." ".$row['lastname']?>!</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Dashboard</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
				
					<div class="row">
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="fa fa-cubes"></i></span>
									<div class="dash-widget-info">
										<h3>112</h3>
										<span>Dustbins</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="fa fa-usd"></i></span>
									<div class="dash-widget-info">
										<h3>$ 43,897,877</h3>
										<span>Revenue</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="fa fa-diamond"></i></span>
									<div class="dash-widget-info">
										<h3>37</h3>
										<span>Tasks</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
							<div class="card dash-widget">
								<div class="card-body">
									<span class="dash-widget-icon"><i class="fa fa-user"></i></span>
									<div class="dash-widget-info">
										<?php 
											include 'includes/db.php';

											try{

											}catch(PDOException $e){
												echo $e->getMessage();
											}
										?>
										<h3>218</h3>
										<span>Clients</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6 text-center">
									<div class="card">
										<div class="card-body">
											<h3 class="card-title">Total Revenue</h3>
											<div id="bar-charts"></div>
										</div>
									</div>
								</div>
								<div class="col-md-6 text-center">
									<div class="card">
										<div class="card-body">
											<h3 class="card-title">Activities Overview</h3>
											<div id="line-charts"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					
					
					<div class="row">
						<div class="col-md-12 d-flex">
							<div class="card card-table flex-fill">
								<div class="card-header">
									<h3 class="card-title mb-0">Clients</h3>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table custom-table mb-0">
											<thead>
												<tr>
													<th>Name</th>
													<th>Email</th>
													<th>Status</th>
													<th class="text-right">Action</th>
												</tr>
											</thead>
											<tbody>
												<?php
													include 'includes/db.php';

													try{
														$query = " SELECT * FROM users WHERE isAdmin = 0";
														$stmt = $db->prepare($query);
														$stmt->execute();

														while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
															echo '
																<tr>
																	<td>
																		<h2 class="table-avatar">
																			<a href="#" class="avatar"><img alt="" src="assets/img/profiles/avatar-19.jpg"></a>
																			<a href="client-profile.php?id='.$row['id'].'">'.$row['firstname'].' '.$row['lastname'].' </a>
																		</h2>
																	</td>
																	<td>'.$row['email'].'</td>
																	<td>
																		'.$row['user_address'].'
																	</td>
																	<td class="text-right">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a href="client-profile.php?id='.$row['id'].'" class="dropdown-item"><i class="fa fa-pencil m-r-5"></i> Edit</a>
																				<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete'.$row['id'].'"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
																			</div>
																		</div>
																	</td>
																</tr>

																<!-- Event Modal -->
																<div class="modal custom-modal fade" id="delete'.$row['id'].'">
																	<div class="modal-dialog modal-dialog-centered" role="document">
																		<div class="modal-content">
																			<div class="modal-header">
																				<h5 class="modal-title">Are you Sure you want to delete </h5>
																				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																					<span aria-hidden="true">&times;</span>
																				</button>
																			</div>
																			<div class="modal-body">
																				<form method="POST" action="delete-client.php">
																					<input style="display: none;"  class="form-control" type="text" name="client_id" value=" '.$row['id'].' " />
																					<div class="modal-footer text-center">
																						<button type="submit" class="btn btn-danger submit-btn">Delete</button>
																					</div>
																				</form>
																			</div>
																			
																		</div>
																	</div>
																</div>
															';
														}
													}catch(PDOException $e){
														$_SESSION['error'] = $e->getMessage();
													}
												?>
												
											</tbody>
										</table>
									</div>
								</div>
								<div class="card-footer">
									<a href="clients-list.php">View all clients</a>
								</div>
							</div>
						</div>
					</div>
				
				</div>
				<!-- /Page Content -->

            </div>
			<!-- /Page Wrapper -->
			
        </div>
		<!-- /Main Wrapper -->
		
<?php 
	include('./includes/scripts.php')
?>