<?php include './includes/head.php'; ?>

<body>

  <div class="preloader">
    <div class="preloader-inner">
      <div class="preloader-icon">
        <span></span>
        <span></span>
      </div>
    </div>
  </div>

  <?php include './includes/header.php'; ?>


  <div class="breadcrumbs">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
          <div class="breadcrumbs-content">
          <h1 class="page-title">Sign Up</h1>
          <ul class="breadcrumb-nav">
            <li><a href="index.html">Home</a></li>
            <li>Sign Up</li>
          </ul>
          </div>
        </div>
      </div>
    </div>
  </div>


	<div class="account-login section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
					<div class="card login-form inner-content">
						<div class="card-body">
							<div class="title">
								<h3>Sign Up Now</h3>
								<p>Use the form below to create your account.</p>
								</div>
								<div class="alt-option">
								<span class="small-title">Sign up with your work email</span>
								<a href="javascript:void(0)" class="option-button"><img style="width: 20px; height: 20px;" src="assets/images/google.png" alt="#">Sign
									Up With Google
								</a>
							</div>
							<div class="or"><span>Or</span></div>

							<!--notifications-->
							<div class="row">
								<div class="col-md-12">

									<div id="process" class="alert alert-primary alert-dismissible fade show" role="alert" style="display: none;">
										<strong>Processing ! .... </strong>
										<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
									</div>

									<div id="alert" class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none;">
										<strong id="messages"></strong>
										<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
									</div>

									<div id="succ" class="alert alert-info alert-dismissible fade show" role="alert" style="display: none;">
										<strong id="done"></strong>
										<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
									</div>
								</div>
							</div>
              				<!--/notifications-->
						
							<form method="POST" id="signup-form" role="form">
								<div class="input-head">
									<div class="row">
										<div class="col-lg-6 col-12">
											<div class="form-group input-group">
												<label><i class="lni lni-user"></i></label>
												<input class="form-control" id="firstname" name="firstname" type="text" placeholder="First Name">
												<small class="text-danger ml-3" id="firstnameError"></small>
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group input-group">
												<label><i class="lni lni-user"></i></label>
												<input class="form-control" id="lastname" type="text" name="lastname" placeholder="Last Name">
												<small class="text-danger ml-3" id="lastnameError"></small>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6 col-12">
											<div class="form-group input-group">
												<label><i class="lni lni-user"></i></label>
												<input class="form-control" id="username" name="username" type="text" placeholder="Your username">
												<small class="text-danger ml-3" id="usernameError"></small>
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group input-group">
												<label><i class="lni lni-envelope"></i></label>
												<input class="form-control" id="email" type="email" name="email" placeholder="Your email" >
												<small class="text-danger ml-3" id="emailError"></small>
											</div>
										</div>
									</div>

									<div class="form-group input-group">
										<label><i class="lni lni-address"></i></label>
										<input class="form-control" id="address" type="text" name="address" placeholder="Address">
										<small class="text-danger ml-3" id="addressError"></small>
									</div>
									<div class="form-group input-group">
										<label><i class="lni lni-lock-alt"></i></label>
										<input class="form-control" type="password" id="password" name="password" placeholder="Your password">
										<small class="text-danger ml-3" id="passwordError"></small>
									</div>
									<div class="form-group input-group">
										<label><i class="lni lni-lock-alt"></i></label>
										<input class="form-control" type="password" id="cpassword" name="cpassword" placeholder="Confirm password">
										<small class="text-danger ml-3" id="cpasswordError"></small>
									</div>

									<div class="button">
										<button class="btn" name="submit" type="submit" id="submit">Create Account</button>
									</div>
								</div>
							</form>
							<h4 class="create-account">
								Already have an account? <a href="signin.php">Sign In</a>
							</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include('./includes/footer.php') ?>

	
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/tiny-slider.js"></script>
<script src="assets/js/glightbox.min.js"></script>
<script src="assets/js/count-up.min.js"></script>
<script src="assets/js/imagesloaded.min.js"></script>
<script src="assets/js/isotope.min.js"></script>
<script src="assets/js/main.js"></script>

<script>

		$('#signup-form').on('submit', function(e) {

			e.preventDefault();

			var data = new FormData(this);
			data.append('action', 'register');
			var url = "./php/signup.php";

			$.ajax({
				type: 'POST',
				url: url,
				data: data,
				dataType: 'JSON',
				processData: false,
				contentType: false,

				error: function(error) {
					// 	s
					if (error) {
						$('#succ').fadeOut('slow');
						$('#messages').html(error.responseText);
						$('#submit').fadeIn('slow');
						$('#alert').show();
						console.log(error.message);
					}

				},
				success: function(success) {
					$('#process').fadeOut('slow');
					$('#submit').fadeIn('slow');
					$('#alert').hide('slow');
					$('#signin-form')[0].reset();
					$('#done').html(success);
					$('#succ').show();
					console.log(success);
				},
				error: function(error) {
					// 	s
					if (error) {
						$('#succ').fadeOut('slow');
						$('#messages').html(error.responseText);
						$('#submit').fadeIn('slow');
						$('#alert').show();
						console.log(error.message);
					}

				}
			})
		})
	})
</script>
</body>
</html>