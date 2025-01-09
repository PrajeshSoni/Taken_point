<?php
include("connect.php");

session_start();
if (!isset($_SESSION['u_id'])) {
  header("location:../login.php");
} else { ?>
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
              <h1 class="text-white font-weight-bold">Contact Us</h1>
              <div class="custom-breadcrumbs">
                <a href="#">Home</a> <span class="mx-2 slash">/</span>
                <span class="text-white"><strong>Contact Us</strong></span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="site-section" id="next-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0">
              <div class="p-4 mb-3 bg-white">
                <p class="mb-0 font-weight-bold">Address</p>
                <p class="mb-4">LJ Campus, Sarkhej - Gandhinagar Hwy, Makarba, Ahmedabad, Sarkhej-Okaf, Gujarat 382210</p>

                <p class="mb-0 font-weight-bold">Phone</p>
                <p class="mb-4"><a href="#">+91 90541 45123</a></p>

                <p class="mb-0 font-weight-bold">Email Address</p>
                <p class="mb-0"><a href="#">takenpointmanpowersolution.com</a></p>

              </div>
            </div>
            <div class="map col-lg-6">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3680.1775525769062!2d71.6541282147634!3d22.721641085106295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395940d74f8aee27%3A0xf4a4a0641daf9e60!2sC.U.%20Shah%20Commerce%20College!5e0!3m2!1sen!2sin!4v1663949837327!5m2!1sen!2sin" frameborder="0" style="border:0;" allowfullscreen="" height="500" width="500"></iframe>
            </div>
          </div>
        </div>
      </section>

      <section class="site-section bg-light">
        <div class="container">
          <div class="row mb-5">
            <div class="col-12 text-center" data-aos="fade">
              <h2 class="section-title mb-3">Happy Candidates Says</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="block__87154 bg-white rounded">
                <blockquote>
                  <p>&ldquo;Right from the very beginning Purekat has been excellent to work with. They are very friendly,
                    extremely professional
                    and nothing seems too much for the team. They are quick to respond either offering support or pointing
                    me in the
                    direction of someone else who could help. I would 100 % recommend this team of experts.&rdquo;</p>
                </blockquote>
                <div class="block__91147 d-flex align-items-center">
                  <figure class="mr-4"><img src="images/person_1.jpg" alt="Image" class="img-fluid"></figure>
                  <div>
                    <h3>Elisabeth Smith</h3>
                    <span class="position">Creative Director</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="block__87154 bg-white rounded">
                <blockquote>
                  <p>&ldquo;From the First time I contacted Purekat I felt at ease, simply because I could tell
                    immediately that they genuinely
                    wanted to see me back in employment. I have used others before, but these guys were just incredible in
                    every way! And
                    Daniel kept me informed during the whole process. I could not recommend these people highly enough.
                    Thank you Purekat.&rdquo;</p>
                </blockquote>
                <div class="block__91147 d-flex align-items-center">
                  <figure class="mr-4"><img src="images/person_2.jpg" alt="Image" class="img-fluid"></figure>
                  <div>
                    <h3>Chris Peter</h3>
                    <span class="position">Web Designer</span>
                  </div>
                </div>
              </div>
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
<?php }
?>