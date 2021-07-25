<?php include('./includes/head.php') ?>
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <?php include('./includes/header.php') ?>
			<!-- /Header -->
			
			<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div class="sidebar-menu">
						<ul>
							<li> 
								<a href="index.html"><i class="la la-home"></i> <span>Back to Home</span></a>
							</li>
							<li class="menu-title">Settings</li>
							<li> 
								<a href="settings.html"><i class="la la-building"></i> <span>Company Settings</span></a>
							</li>
							<li> 
								<a href="localization.html"><i class="la la-clock-o"></i> <span>Localization</span></a>
							</li>
							<li> 
								<a href="theme-settings.html"><i class="la la-photo"></i> <span>Theme Settings</span></a>
							</li>
							<li> 
								<a href="roles-permissions.html"><i class="la la-key"></i> <span>Roles & Permissions</span></a>
							</li>
							<li> 
								<a href="email-settings.html"><i class="la la-at"></i> <span>Email Settings</span></a>
							</li>
							<li> 
								<a href="invoice-settings.html"><i class="la la-pencil-square"></i> <span>Invoice Settings</span></a>
							</li>
							<li> 
								<a href="salary-settings.html"><i class="la la-money"></i> <span>Salary Settings</span></a>
							</li>
							<li> 
								<a href="notifications-settings.html"><i class="la la-globe"></i> <span>Notifications</span></a>
							</li>
							<li class="active"> 
								<a href="change-password.html"><i class="la la-lock"></i> <span>Change Password</span></a>
							</li>
							<li> 
								<a href="leave-type.html"><i class="la la-cogs"></i> <span>Leave Type</span></a>
							</li>
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-md-6 offset-md-3">
						
							<!-- Page Header -->
							<div class="page-header">
								<div class="row">
									<div class="col-sm-12">
										<h3 class="page-title">Change Password</h3>
									</div>
								</div>
							</div>
							<!-- /Page Header -->
							
							<form>
								<div class="form-group">
									<label>Old password</label>
									<input type="password" class="form-control">
								</div>
								<div class="form-group">
									<label>New password</label>
									<input type="password" class="form-control">
								</div>
								<div class="form-group">
									<label>Confirm password</label>
									<input type="password" class="form-control">
								</div>
								<div class="submit-section">
									<button class="btn btn-primary submit-btn">Update Password</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- /Page Content -->
				
			</div>
			<!-- /Page Wrapper -->
			
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		
		<!-- Select2 JS -->
		<script src="assets/js/select2.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>

    </body>
</html>