<?php include('./includes/head.php') ?>
    <body class="account-page">
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
			<div class="account-content">
				<div class="container">
				
					<!-- Account Logo -->
					<div class="account-logo">
						<a href="index.php"><img src="assets/img/logo2.png" alt="Dreamguy's Technologies"></a>
					</div>
					<!-- /Account Logo -->

					<!-- Register -->
					<form>
						<div class="row bg-white p-3">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-form-label">First Name <span class="text-danger">*</span></label>
									<input class="form-control" type="text">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-form-label">Last Name</label>
									<input class="form-control" type="text">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-form-label">Username <span class="text-danger">*</span></label>
									<input class="form-control" type="text">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-form-label">Email <span class="text-danger">*</span></label>
									<input class="form-control floating" type="email">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-form-label">Password</label>
									<input class="form-control" type="password">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-form-label">Confirm Password</label>
									<input class="form-control" type="password">
								</div>
							</div>
							<div class="col-md-6">  
								<div class="form-group">
									<label class="col-form-label"> Address <span class="text-danger">*</span></label>
									<input class="form-control floating" type="text">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-form-label">Phone </label>
									<input class="form-control" type="text">
								</div>
							</div>
							
						</div>
						<div class="submit-section mb-3">
							<button class="btn btn-primary submit-btn">REGISTER</button>
						</div>

						<div class="account-footer">
							<p>Already have an account? <a href="login.php">Login</a></p>
						</div>
					</form>
				</div>
			</div>
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>