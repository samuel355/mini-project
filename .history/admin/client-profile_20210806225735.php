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

								$data = $prep->fetch();

							}catch(PDOException $e){
								$_SESSION['error'] = $e->getMessage();
							}
						}
					?>
					

					<div class="card mb-0">
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
									<div class="profile-view">
										<div class="profile-img-wrap">
											<div class="profile-img">
												<a href="">
													<img src="assets/img/profiles/avatar-19.jpg" alt="">
													<img  src="<?php echo (!empty($data['photo'])) ? './assets/img/profiles/'.$data['photo'] : './assets/img/profiles/avatar-19.jpg'; ?>" alt="User Image">
												</a>
											</div>
										</div>
										<div class="profile-basic">
											<div class="row">
												<div class="col-md-5">
													<div class="profile-info-left">
														<h3 class="user-name m-t-0"><?php echo $data['firstname']. " " .$data['lastname']; ?></h3>
														<div class="staff-msg"><a href="#" class="btn btn-custom" data-toggle="modal" data-target="#update-details">Edit profile</a></div>
													</div>
												</div>
												<div class="col-md-7">
													<ul class="personal-info">
														<li>
															<span class="title">Phone:</span>
															<span class="text"><a href="#"> <?php echo (!empty($data['phone'])) ? $data['phone'] : 'Update your phone number'; ?> </a></span>
														</li>
														<li>
															<span class="title">Email:</span>
															<span class="text"><a href="#"><?php echo (!empty($data['email'])) ? $data['email'] : 'Update your phone Email'; ?></a></span>
														</li>
														<li>
															<span class="title">Joined:</span>
															<span class="text"><?php echo $data['registered_on'] ?></span>
														</li>
														<li>
															<span class="title">Address:</span>
															<span class="text"><?php echo $data['user_address'] ?></span>
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
				

				<!-- Update Modal-->
				<div id="update-details" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Update Client</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">

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

								<form role="form" action="includes/update.php" method="POST">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">First Name <span class="text-danger">*</span></label>
												<input class="form-control" name="firstname" id="firstname" value="<?php echo $data['firstname']?>" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Last Name</label>
												<input class="form-control" name="lastname" id="lastname" value="<?php echo $data['lastname']?>" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Photo <span class="text-danger">*</span></label>
												<input class="form-control" name="user_image" id="user_image" type="file">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Email <span class="text-danger">*</span></label>
												<input class="form-control floating" value="<?php echo $data['email']?>" name="email" id="email" type="email" readonly>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Address</label>
												<input class="form-control" name="user_address" id="user_address" value="<?php echo $data['user_address']?>" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-form-label">Phone</label>
												<input class="form-control" value="<?php echo $data['phone']?>" id="phone" name="phone" type="text">
											</div>
										</div>
										
									</div>
									<div class="submit-section">
										<button id="submit" name="save-details" type="submit" class="btn btn-primary submit-btn">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

            </div>
        </div>
		<!-- /Main Wrapper -->
		
		<?php include('./includes/scripts.php') ?>