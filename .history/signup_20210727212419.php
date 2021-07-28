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
                        <input class="form-control" id="firstname" type="text" placeholder="First Name">
                      </div>
                    </div>
                    <div class="col-lg-6 col-12">
                      <div class="form-group input-group">
                        <label><i class="lni lni-user"></i></label>
                        <input class="form-control" id="lastname" type="text" placeholder="Last Name">
                      </div>
                    </div>
                  </div>
                <div class="row">
                  <div class="col-lg-6 col-12">
                    <div class="form-group input-group">
                      <label><i class="lni lni-user"></i></label>
                      <input class="form-control" id="username" type="text" placeholder="Your username">
                    </div>
                  </div>
                  <div class="col-lg-6 col-12">
                    <div class="form-group input-group">
                      <label><i class="lni lni-envelope"></i></label>
                      <input class="form-control" id="email" type="email" placeholder="Your email" >
                    </div>
                  </div>
                </div>
                <div class="form-group input-group">
                  <label><i class="lni lni-address"></i></label>
                  <input class="form-control" id="address" type="text" placeholder="Address">
                </div>
                <div class="form-group input-group">
                  <label><i class="lni lni-lock-alt"></i></label>
                  <input class="form-control" type="password" id="password" placeholder="Your password">
                </div>
                <div class="form-group input-group">
                  <label><i class="lni lni-lock-alt"></i></label>
                  <input class="form-control" type="password" id="repassword" placeholder="Confirm password">
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
    $('#signup-form').submit(function(e) {
        
        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: "php/signup.php",
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

function myFunction() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
function pFunction() {
    var x = document.getElementById("cpassword");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

</script>


<script>

        //========= testimonial 
        tns({
            container: '.testimonial-slider',
            items: 3,
            slideBy: 'page',
            autoplay: false,
            mouseDrag: true,
            gutter: 0,
            nav: true,
            controls: false,
            responsive: {
                0: {
                    items: 1,
                },
                540: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                992: {
                    items: 2,
                },
                1170: {
                    items: 3,
                }
            }
        });

        //====== counter up 
        var cu = new counterUp({
            start: 0,
            duration: 2000,
            intvalues: true,
            interval: 100,
            append: " ",
        });
        cu.start();

        //========= glightbox
        GLightbox({
            'href': 'https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM',
            'type': 'video',
            'source': 'youtube', //vimeo, youtube or local
            'width': 900,
            'autoplayVideos': true,
        });

        //============== isotope masonry js with imagesloaded
        imagesLoaded('#container', function () {
            var elem = document.querySelector('.grid');
            var iso = new Isotope(elem, {
                // options
                itemSelector: '.grid-item',
                masonry: {
                    // use outer width of grid-sizer for columnWidth
                    columnWidth: '.grid-item'
                }
            });

            let filterButtons = document.querySelectorAll('.portfolio-btn-wrapper button');
            filterButtons.forEach(e =>
                e.addEventListener('click', () => {

                    let filterValue = event.target.getAttribute('data-filter');
                    iso.arrange({
                        filter: filterValue
                    });
                })
            );
        });

    </script>



</body>
</html>