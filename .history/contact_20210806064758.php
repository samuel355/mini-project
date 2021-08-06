<?php include './includes/head.php'; ?>
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


<?php include './includes/header.php'; ?>

<div class="breadcrumbs">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
        <div class="breadcrumbs-content">
          <h1 class="page-title">Contact Us</h1>
          <ul class="breadcrumb-nav">
            <li><a href="index.html">Home</a></li>
            <li>Contact Us</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="contact-us section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-12">
        <div class="contact-widget-wrapper">
          <div class="main-title">
          <h2>Contact Us</h2>
            <p>Get in touch with our front desk</p>
          </div>
          <div class="contact-widget-block">
            <h3 class="title">Call us</h3>
            <p>+233 24 656 2377</p>
          </div>
          <div class="contact-widget-block">
            <h3 class="title">Email us</h3>
            <p><a href="#" class="__cf_email__" data-cfemail="630a0d050c230e020a0f4d000c0e">addsamuel355@gmail.com</a></p>
          </div>
          <div class="contact-widget-block">
            <h3 class="title">Our Address</h3>
            <p>Spintex Main St,</p>
            <p>Accra - Ghana</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-12">
        <div class="contact-form">
        <h3 class="form-title">Leave a message here</h3>

                      
          <!--notifications-->
          <div class="row">
            <div class="col-12">

              <div id="process" class="alert alert-primary alert-dismissible fade show form-group input-group" role="alert" style="display: none;">
                <strong>Processing ! .... </strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>

              <div id="alert" class="alert alert-danger alert-dismissible fade show form-group input-group" role="alert" style="display: none;">
                <strong id="messages"></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>

              <div id="succ" class="alert alert-info alert-dismissible fade show form-group input-group" role="alert" style="display: none;">
                <strong id="done"></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            </div>
          </div>
          <!--/notifications-->
          
          <form class="form" id="send_message_form" method="post" >
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                  <input name="name" type="text" placeholder="Name*" id="name" required="required">
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                  <input name="email" type="email" id="email" placeholder="Email*" required="required">
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                  <input name="subject" id="subject" type="text" placeholder="Subject*" required="required">
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                  <input name="phone" id="phone" type="text" placeholder="Phone*">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <textarea placeholder="Message*" name="message" id="message" class="form-control"></textarea>
                </div>
              </div>
              <div class="col-12 align-items-center">
                <div class="button">
                  <button type="submit" name="submit" id="submit" class="btn ">Send Message</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="map-section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="mapouter">
          <div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.7771616287255!2d-1.5738000853239178!3d6.674508823241332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb9461ea6fb9af%3A0xb0da4f6d9c4b361f!2sKwame%20Nkrumah%20University%20of%20Science%20and%20Technology!5e0!3m2!1sen!2sgh!4v1627378683809!5m2!1sen!2sgh" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include './includes/footer.php'; ?>


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