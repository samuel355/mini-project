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
<h1 class="page-title">Reset Password</h1>
<ul class="breadcrumb-nav">
<li><a href="index.html">Home</a></li>
<li>Reset Password</li>
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
<h3>Reset Password</h3>
<p>Need to reset your password? No problem! Just enter your email & click the button
below.</p>
</div>
<div class="input-head">
<div class="form-group input-group">
<label><i class="lni lni-envelope"></i></label>
<input class="form-control" type="email" id="reg-email" placeholder="Enter your email" required>
</div>
</div>
<div class="button" style="margin-top: 20px;">
<button class="btn" type="submit">Send Rest Link</button>
</div>
<h4 class="create-account">Login to your account <a href="signin.html">Click here</a>
</h4>
</div>
 </form>
</div>
</div>
</div>
</div>

<?php include('./includes/footer.php') ?>