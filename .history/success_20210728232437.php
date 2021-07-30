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

  <div class="account-login section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
          
          <form id="signin-form" role="form" enctype="multipart/form-data" class="card login-form inner-content" method="POST">
            <div class="card-body">
              <div class="title">
                <h3>Sign In Now</h3>
                <p>Sign in by entering the information below.</p>
              </div>
              <div class="alt-option">
                <span class="small-title">Sign in with your work email</span>
                <a href="#" class="option-button"><img style="width: 20px; height: 20px;" src="assets/images/google.png" alt="#">Sign
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


  <?php include 'includes/footer.php' ; ?>

  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/tiny-slider.js"></script>
  <script src="assets/js/glightbox.min.js"></script>
  <script src="assets/js/count-up.min.js"></script>
  <script src="assets/js/imagesloaded.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="ajax/signin.js"></script>
</body>
</html>