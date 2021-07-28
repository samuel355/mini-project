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
          
          <form id="signin-form" role="form" enctype="multipart/form-data" class="card login-form inner-content" method="POST">
            <div class="card-body">
              <div class="title">
                <h3>Sign In Now</h3>
                <p>Sign in by entering the information below.</p>
              </div>
              
              <!--notifications-->
              <div class="row">
                  <div class="col-md-12">

                      <div id="process" class="alert alert-primary alert-dismissible fade show" role="alert" style="margin-top: 20px; display:none;">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              <span class="sr-only">Close</span>
                          </button>
                          <span>Processing ! ....</span>
                      </div>

                      <div id="alert" class="alert alert-danger alert-dismissible fade show text-center" role="alert" style="margin-top:20px; display:none;">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              <span class="sr-only">Close</span>
                          </button>
                          <span class="text-center" id="messages"></span>
                      </div>

                      <div id="succ" class="alert alert-info alert-dismissible fade show text-center" role="alert" style=" display:none;">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              <span class="sr-only">Close</span>
                          </button>
                          <span class="text-center" id="done"></span>
                      </div>
                  </div>
              </div>
              <!--/notifications-->

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
                <button class="btn" name="submit" id="submit" type="submit">Sign In</button>
              </div>
              <div class="or"><span>Or</span></div>
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

  <form id="ssss">
      <input type="text" name="name" id="name" placeholder="name">
      <input type="text" name="namde" id="namde" placeholder="last">
      <input type="text" name="work" id="work" workplace>
  </form>


  <?php include 'includes/footer.php' ; ?>

  <script>
      $(document).ready(function() {
          $("#signin-form").submit(function(e) {
            e.preventDefault();
          });
          return false;
      })
  </script>

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