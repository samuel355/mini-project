<?php include './includes/head.php'; ?>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

    <!-- Start Header Area -->
    <?php include('./includes/header.php'; ?>
    <!-- End Header Area -->

    <!-- Start Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">About Us</h1>
                        <ul class="breadcrumb-nav">
                            <li><a href="index.php">Home</a></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start About Area -->
    <section class="about section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="image wow fadeInLeft" data-wow-delay=".2s">
                        <img src="assets/images/b1.jpeg" alt="#">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="content wow fadeInRight" data-wow-delay=".4s">
                        <h4>WE ARE WASTE MANAGEMENT OPERATIVE</h4>
                        <h2>We’ve built a platform for our everyone to keep our communinities and homes clean</h2>
                        <p>Cleaniness is next to Godliness....Try as mush as possible to make your evironment clean and tidy.</p>
                        <div class="list">
                            <div class="single-list">
                                <div class="list-icon">
                                    <i class="lni lni-checkmark"></i>
                                </div>
                                <h4>Register an account</h4>
                                <p>Let's get started by creating an account with us.</p>
                            </div>
                            <div class="single-list">
                                <div class="list-icon">
                                    <i class="lni lni-checkmark"></i>
                                </div>
                                <h4>Choose a way to get your place clean</h4>
                                <p>We home and office way to choose get them clean. Just signup </p>
                            </div>
                            <div class="single-list">
                                <div class="list-icon">
                                    <i class="lni lni-checkmark"></i>
                                </div>
                                <h4>Schedule anytime you need us</h4>
                                <p>We will on your doorstep as soon as you need us</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Area -->

    <!-- Start Services Area -->
    <div class="services section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">What we offer</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Our Services</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">
                            We are a wholly Ghanaian owned company that focuses on delivering total waste management solutions.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class=" col-12 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-service">
                        <h2 class="text-title">Sustainable Waste Management Solutions for homes, Businesses and Communities</h2>
                        <p>
                            We are a wholly Ghanaian owned company that focuses on delivering total waste management solutions.
                            We provide integrated waste management solution from waste collection, through haulage, transfer and sorting to recycling and disposal.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Services Area -->

    <!-- Start Call Action Area -->
    <section class="call-action bg-white">
        <div class="container">
            <div class="inner-content">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-7 col-12">
                        <div class="text">
                            <h2>You are using free
                                <br> <span>Lite version of Craft.</span>
                            </h2>
                            <p style="display: block;margin-top: 10px;">Please, signup, subscribe and let's get started </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5 col-12">
                        <div class="button">
                            <a href="signup.php" class="btn">Let's go
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Call Action Area -->

    <!-- Start Footer Area -->
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