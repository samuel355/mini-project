<?php include('./includes/head.php') ?>
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <?php include('./includes/header.php') ?>
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
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Clients</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Clients</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					

					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table datatable">
									<thead>
										<tr>
											<th>Name</th>
											<th>Address</th>
											<th>Email</th>
											<th>Mobile</th>
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
					</div>
                </div>
				<!-- /Page Content -->
				
            </div>
			<!-- /Page Wrapper -->
			
        </div>
		<!-- /Main Wrapper -->
		
<?php include('./includes/scripts.php') ?>