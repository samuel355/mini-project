<?php include('./includes/head.php') ?>
<body>
<!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    
<!--

<div class="preloader">
  <div class="preloader-inner">
    <div class="preloader-icon">
      <span></span>
      <span></span>
    </div>
  </div>
</div>

-->


<?php include('./includes/header.php') ?>

<div class="breadcrumbs">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
        <div class="breadcrumbs-content">
          <h1 class="page-title">Sign In</h1>
          <ul class="breadcrumb-nav">
            <li><a href="index.php">Home</a></li>
            <li>Sign In</li>
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
        
        <form id="signin" role="form" enctype="multipart/form-data" class="card login-form inner-content" method="POST">
          <div class="card-body">
            <div class="title">
              <h3>Sign In Now</h3>
              <p>Sign in by entering the information below.</p>
            </div>

            <div class="input-head">
              <div class="form-group input-group">
                <label><i class="lni lni-envelope"></i></label>
                <input class="form-control" type="email" id="email" name="email" placeholder="Enter your email">
              </div>
              <div class="form-group input-group">
                <label><i class="lni lni-lock-alt"></i></label>
                <input class="form-control" type="password" id="password" name="password" placeholder="Enter your password">
              </div>
            </div>
            <div class="d-flex flex-wrap justify-content-between bottom-content">
              <div class="form-check">
                <input type="checkbox" class="form-check-input width-auto" id="remember_me" name="remember_me">
                <label class="form-check-label">Remember me</label>
              </div>
              <a class="lost-pass" href="reset-password.php">Forgot password?</a>
            </div>
            <div class="button">
              <button class="btn" name="submit" id="signin-button" type="submit">Sign In</button>
            </div>
            <div class="or"><span>Or</span></div>
            <div class="alt-option">
              <span class="small-title">Sign in with your work email</span>
              <a href="javascript:void(0)" class="option-button"><img style="width: 20px; height: 20px;" src="assets/images/google.png" alt="#">Sign
              In With Google
              </a>
            </div>
            <h4 class="create-account">Don't have an account? <a href="signup.php">Sign Up Here</a>
            </h4>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include('./includes/footer.php'); ?>

<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/tiny-slider.js"></script>
<script src="assets/js/glightbox.min.js"></script>
<script src="assets/js/count-up.min.js"></script>
<script src="assets/js/imagesloaded.min.js"></script>
<script src="assets/js/isotope.min.js"></script>
<script src="assets/js/main.js"></script>


<script>
  $(document).ready(function() {
    $('#signin').submit(function(e) {
        
        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: "php/signin.php",
            //dataType: 'json',
            data: new FormData(this),
            processData: false,
            contentType: false,
            complete: function() {
                $('#process').fadeOut('slow');
                $('#submit').fadeIn('slow');
            },
            success: function(success) {
                $('#process').fadeOut('slow');
                $('#submit').fadeIn('slow');
                $('#alert').hide('slow');
                $('#add-student')[0].reset();
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
        });
        return false;
    });

});


</script>
</body>
</html>