<?php
include("connect.php");

session_start();
if (!isset($_SESSION['u_id'])) {
  header("location:../login.php");
} else {
?>
  <!doctype html>
  <html lang="en">

  <head>
    <title>Taken Point</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/custom-bs.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/line-icons/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/quill.snow.css">


    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body id="top">

    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>


    <div class="site-wrap">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div> <!-- .site-mobile-menu -->


      <!-- NAVBAR -->
      <?php
      include("uheader.php");
      ?>
      <!-- HOME -->
      <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <h1 class="text-white font-weight-bold">About Us</h1>
              <div class="custom-breadcrumbs">
                <a href="#">Home</a> <span class="mx-2 slash">/</span>
                <span class="text-white"><strong>About Us</strong></span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="py-5 bg-image overlay-primary fixed overlay" id="next-section" style="background-image: url('images/hero_1.jpg');">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
              <h2 class="section-title mb-2 text-white">Taken Point Site Status</h2>
              <p class="lead text-white">If everyone is moving forward together , then success takes care of itself..</p>
            </div>
          </div>
          <div class="row pb-0 block__19738 section-counter">

            <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
              <div class="d-flex align-items-center justify-content-center mb-2">
                <strong class="number" data-number="1930">0</strong>
              </div>
              <span class="caption">Candidates</span>
            </div>

            <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
              <div class="d-flex align-items-center justify-content-center mb-2">
                <strong class="number" data-number="54">0</strong>
              </div>
              <span class="caption">Jobs Posted</span>
            </div>

            <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
              <div class="d-flex align-items-center justify-content-center mb-2">
                <strong class="number" data-number="120">0</strong>
              </div>
              <span class="caption">Jobs Filled</span>
            </div>

            <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
              <div class="d-flex align-items-center justify-content-center mb-2">
                <strong class="number" data-number="550">0</strong>
              </div>
              <span class="caption">Companies</span>
            </div>


          </div>
        </div>
      </section>


      <section class="site-section pb-0">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
              <a data-fancybox data-ratio="2" href="https://vimeo.com/317571768" class="block__96788">
                <span class="play-icon"><span class="icon-play"></span></span>
                <img src="images/sq_img_6.jpg" alt="Image" class="img-fluid img-shadow">
              </a>
            </div>
            <div class="col-lg-5 ml-auto">
              <h2 class="section-title mb-3">Taken Point For Freelancers, Web Developers</h2>
              <p class="lead">Freelancer is a marketplace where employers and employees are able to find each other. The
                site allows employers to post
                work for site members who place bids in a competitive tender process. The site also allows members to host
                and enter
                contests for which prize money is offered as a reward.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="site-section pt-0">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0 order-md-2">
              <a data-fancybox data-ratio="2" href="https://vimeo.com/317571768" class="block__96788">
                <span class="play-icon"><span class="icon-play"></span></span>
                <img src="images/sq_img_8.jpg" alt="Image" class="img-fluid img-shadow">
              </a>
            </div>
            <div class="col-lg-5 mr-auto order-md-1  mb-5 mb-lg-0">
              <h2 class="section-title mb-3">Taken Point For Workers</h2>
              <p class="lead">A Taken Point is a website used by employers to advertise their job vacancies to job seekers.
                Job seekers can use Taken Point to search for new job opportunities in their area and profession. Some well-known Taken Point sites
                are Indeed,
                Glassdoor, and Careerjet to name a few.</p>
            </div>
          </div>
        </div>
      </section>


      <section class="site-section">
        <div class="container">
          <div class="row mb-5">
            <div class="col-12 text-center" data-aos="fade">
              <h2 class="section-title mb-3">Our Team</h2>
            </div>
          </div>

          <div class="row align-items-center block__69944">

            <div class="col-md-6">
              <img src="images/person_6.jpg" alt="Image" class="img-fluid mb-4 rounded">
            </div>

            <div class="col-md-6">
              <h3>Elisabeth Smith</h3>
              <p class="text-muted">Creative Director</p>
              <p>Elisabeth Smith play role as creative director in our Company , it is a ?big-picture professional? who
                maintains a cohesive look and feel of a project, supervises the
                entire creative process, and guides the team that works under them. The creative team typically includes
                art directors,
                copywriters, content strategists, graphic artists, and various designers.</p>
              <div class="social mt-4">
                <a href="#"><span class="icon-facebook"></span></a>
                <a href="#"><span class="icon-twitter"></span></a>
                <a href="#"><span class="icon-instagram"></span></a>
                <a href="#"><span class="icon-linkedin"></span></a>
              </div>
            </div>

            <div class="col-md-6 order-md-2 ml-md-auto">
              <img src="images/person_5.jpg" alt="Image" class="img-fluid mb-4 rounded">
            </div>

            <div class="col-md-6">
              <h3>Chintan Patel</h3>
              <p class="text-muted">Creative Director</p>
              <p>A Creative Director is an advertising professional who is in charge of a company's advertising and
                marketing efforts.
                They plan out advertisements, monitor campaigns that use their company's assets for promotion purposes and
                revise
                presentations as needed along with shaping brand standards.</p>
              <div class="social mt-4">
                <a href="#"><span class="icon-facebook"></span></a>
                <a href="#"><span class="icon-twitter"></span></a>
                <a href="#"><span class="icon-instagram"></span></a>
                <a href="#"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
      </section>

      <?php
      include("userfooter.php");
      ?>


    </div>

    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/stickyfill.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>

    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/quill.min.js"></script>


    <script src="js/bootstrap-select.min.js"></script>

    <script src="js/custom.js"></script>


  </body>

  </html>
<?php
}
?>