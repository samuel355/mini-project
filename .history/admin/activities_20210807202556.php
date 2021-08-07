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

												$extract = "SELECT * FROM messages";
												$pext = $db->prepare($extract);
												$pext->execute();

												while

											}catch(PDOException $e){
												$e->getMessage();
											}
										?>
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
										<li>
											<div class="activity-user">
												<a href="profile.html" class="avatar" title="Jeffery Lalor" data-toggle="tooltip">
													<img src="assets/img/profiles/avatar-16.jpg" alt="">
												</a>
											</div>
											<div class="activity-content">
												<div class="timeline-content">
													<a href="profile.html" class="name">Jeffery Lalor</a> added <a href="profile.html" class="name">Loren Gatlin</a> and <a href="profile.html" class="name">Tarah Shropshire</a> to project <a href="#">Patient appointment booking</a>
													<span class="time">6 mins ago</span>
												</div>
											</div>
										</li>
										<li>
											<div class="activity-user">
												<a href="profile.html" title="Catherine Manseau" data-toggle="tooltip" class="avatar">
													<img src="assets/img/profiles/avatar-08.jpg" alt="">
												</a>
											</div>
											<div class="activity-content">
												<div class="timeline-content">
													<a href="profile.html" class="name">Catherine Manseau</a> completed task <a href="#">Appointment booking with payment gateway</a>
													<span class="time">12 mins ago</span>
												</div>
											</div>
										</li>
										<li>
											<div class="activity-user">
												<a href="#" title="Bernardo Galaviz" data-toggle="tooltip" class="avatar">
													<img src="assets/img/profiles/avatar-13.jpg" alt="">
												</a>
											</div>
											<div class="activity-content">
												<div class="timeline-content">
													<a href="profile.html" class="name">Bernardo Galaviz</a> changed the task name <a href="#">Doctor available module</a>
													<span class="time">1 day ago</span>
												</div>
											</div>
										</li>
										<li>
											<div class="activity-user">
												<a href="profile.html" title="Mike Litorus" data-toggle="tooltip" class="avatar">
													<img src="assets/img/profiles/avatar-05.jpg" alt="">
												</a>
											</div>
											<div class="activity-content">
												<div class="timeline-content">
													<a href="profile.html" class="name">Mike Litorus</a> added new task <a href="#">Patient and Doctor video conferencing</a>
													<span class="time">2 days ago</span>
												</div>
											</div>
										</li>
										<li>
											<div class="activity-user">
												<a href="profile.html" title="Jeffery Lalor" data-toggle="tooltip" class="avatar">
													<img src="assets/img/profiles/avatar-16.jpg" alt="">
												</a>
											</div>
											<div class="activity-content">
												<div class="timeline-content">
													<a href="profile.html" class="name">Jeffery Lalor</a> added <a href="profile.html" class="name">Jeffrey Warden</a> and <a href="profile.html" class="name">Bernardo Galaviz</a> to the task of <a href="#">Private chat module</a>
													<span class="time">7 days ago</span>
												</div>
											</div>
										</li>
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