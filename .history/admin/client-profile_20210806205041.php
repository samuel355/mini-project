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
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Profile</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Profile</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<?php 
						include 'includes/db.php';
						if(isset($_GET['id'])){
							$id = $_GET['id'];

							try{

								$qry = "SELECT * FROM users WHERE id=:id";
								$prep = $db->prepare($qry);
								$prep->execute([':id'=>$id]);

								$data->fe

							}catch(PDOException $e){
								$_SESSION['error'] = $e->getMessage();
							}
						}
					?>
					
					<?php echo $id; ?>
					<div class="card mb-0">
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
									<div class="profile-view">
										<div class="profile-img-wrap">
											<div class="profile-img">
												<a href="">
													<img src="assets/img/profiles/avatar-19.jpg" alt="">
													<img  src="<?php echo (!empty($row['photo'])) ? './assets/img/profiles/'.$row['photo'] : './assets/img/profiles/avatar-19.jpg'; ?>" alt="User Image">
												</a>
											</div>
										</div>
										<div class="profile-basic">
											<div class="row">
												<div class="col-md-5">
													<div class="profile-info-left">
														<h3 class="user-name m-t-0"><?php echo $row['firstname']. " " .$row['lastname']; ?></h3>
														<div class="staff-msg"><a href="#" class="btn btn-custom" data-toggle="modal" data-target="#update-details">Edit profile</a></div>
													</div>
												</div>
												<div class="col-md-7">
													<ul class="personal-info">
														<li>
															<span class="title">Phone:</span>
															<span class="text"><a href="#"> <?php echo (!empty($row['phone'])) ? $row['phone'] : 'Update your phone number'; ?> </a></span>
														</li>
														<li>
															<span class="title">Email:</span>
															<span class="text"><a href="#"><?php echo (!empty($row['email'])) ? $row['email'] : 'Update your phone Email'; ?></a></span>
														</li>
														<li>
															<span class="title">Joined:</span>
															<span class="text"><?php echo $row['registered_on'] ?></span>
														</li>
														<li>
															<span class="title">Address:</span>
															<span class="text"><?php echo $row['user_address'] ?></span>
														</li>
													</ul>
													<div class="staff-msg"><a href="#" class="btn btn-custom" data-toggle="modal" data-target="#current-location">set your exact location</a></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Page Content -->
				
            </div>
        </div>
		<!-- /Main Wrapper -->
		
		<?php include('./includes/scripts.php') ?>