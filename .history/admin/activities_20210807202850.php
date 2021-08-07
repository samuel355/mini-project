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
                <div class="content">
					
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Messages</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Messages</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="activity">
								<div class="activity-box">
									<ul class="activity-list">
										<?php 
											include 'includes/db.php';

											try{

												$extract = "SELECT * FROM messages ";
												$pext = $db->prepare($extract);
												$pext->execute();

												while($pextdata = $pext->fetch(PDO::FETCH_ASSOC)){
													echo '
														<li>
															<div class="activity-user">
																<a href="profile.html" title="Lesley Grauer" data-toggle="tooltip" class="avatar">
																	<img src="assets/img/profiles/avatar-01.jpg" alt="">
																</a>
															</div>
															<div class="activity-content">
																<div class="timeline-content">
																	<a href="activities.php" class="name">Lesley Grauer</a> added new task <a href="#">Hospital Administration</a>
																	<span class="time">4 mins ago</span>
																</div>
															</div>
														</li>
													';
												}

											}catch(PDOException $e){
												$e->getMessage();
											}
										?>
										
									</ul>
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