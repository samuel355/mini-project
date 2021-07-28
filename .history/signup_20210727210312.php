<?php include('./includes/head.php') ?>
<body>
<!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

<div class="preloader">
  <div class="preloader-inner">
    <div class="preloader-icon">
      <span></span>
      <span></span>
    </div>
  </div>
</div>

<?php include('./includes/header.php') ?>


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
        <form class="card login-form inner-content" method="post">
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
        <div class="row p-3">
          <div class="col-md-12">
              <div id="process" class="alert alert-primary alert-dismissible fade show" role="alert" style="margin-top:20px; display:none;">
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
            <div class="row">
                <div class="col-lg-6 col-12">
                  <div class="form-group input-group">
                    <label><i class="lni lni-user"></i></label>
                    <input class="form-control" type="text" placeholder="First Name" required>
                  </div>
                </div>
                <div class="col-lg-6 col-12">
                  <div class="form-group input-group">
                    <label><i class="lni lni-user"></i></label>
                    <input class="form-control" type="text" placeholder="Last Name" required>
                  </div>
                </div>
              </div>
            <div class="row">
              <div class="col-lg-6 col-12">
                <div class="form-group input-group">
                  <label><i class="lni lni-user"></i></label>
                  <input class="form-control" type="text" placeholder="Your username" required>
                </div>
              </div>
              <div class="col-lg-6 col-12">
                <div class="form-group input-group">
                  <label><i class="lni lni-envelope"></i></label>
                  <input class="form-control" id="email" type="email" placeholder="Your email" required>
                </div>
              </div>
            </div>
            <div class="form-group input-group">
              <label><i class="lni lni-address"></i></label>
              <input class="form-control" id="address" type="text" placeholder="Address" required>
            </div>
            <div class="form-group input-group">
              <label><i class="lni lni-lock-alt"></i></label>
              <input class="form-control" type="password" id="password" placeholder="Your password" required>
            </div>
            <div class="form-group input-group">
              <label><i class="lni lni-lock-alt"></i></label>
              <input class="form-control" type="password" id="repassword" placeholder="Confirm password" required>
            </div>
          </div>
            <div class="button">
              <button class="btn" type="submit" id="signup">Create Account</button>
            </div>
            <h4 class="create-account">Already have an account? <a href="signin.php">Sign In</a>
            </h4>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include('./includes/footer.php') ?>