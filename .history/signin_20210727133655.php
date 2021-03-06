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
        <form class="card login-form inner-content" method="post">
          <div class="card-body">
            <div class="title">
              <h3>Sign In Now</h3>
              <p>Sign in by entering the information below.</p>
            </div>
            <div class="input-head">
              <div class="form-group input-group">
                <label><i class="lni lni-envelope"></i></label>
                <input class="form-control" type="email" id="reg-email" placeholder="Enter your email" required>
              </div>
              <div class="form-group input-group">
                <label><i class="lni lni-lock-alt"></i></label>
                <input class="form-control" type="password" id="reg-pass" placeholder="Enter your password" required>
              </div>
            </div>
            <div class="d-flex flex-wrap justify-content-between bottom-content">
              <div class="form-check">
                <input type="checkbox" class="form-check-input width-auto" id="exampleCheck1">
                <label class="form-check-label">Remember me</label>
              </div>
              <a class="lost-pass" href="reset-password.php">Forgot password?</a>
            </div>
            <div class="button">
              <button class="btn" type="submit">Sign In</button>
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

<?php include('./includes/footer.php') ?>