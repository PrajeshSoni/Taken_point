<?php include("connect.php");
session_start();
if (!isset($_SESSION['u_id'])) {
  header("location:../login.php");
  echo $_SESSION['u_id'];
} else {
  $q = "select j.*,c.com_name,c.logo from job_posting j,company c where c.com_id=j.com_id order by rand() limit 5 ";
  $rs = mysqli_query($cn, $q);
  // $row = mysqli_fetch_array($rs);
?>
  <!doctype html>
  <html lang="en">

  <head>
    <title>Taken Point</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Free-Template.co" />
    <link rel="shortcut icon" href="ftco-32x32.png">

    <link rel="stylesheet" href="css/custom-bs.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/line-icons/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.min.css">

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
      <section class="home-section section-hero overlay bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">

        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-12">
              <div class="mb-5 text-center">
                <h1 class="text-white font-weight-bold">The Easiest Way To Get Your Dream Job</h1>
              </div>

            </div>
          </div>
        </div>

        <a href="#next" class="scroll-button smoothscroll">
          <span class=" icon-keyboard_arrow_down"></span>
        </a>

      </section>

      <section class="py-5 bg-image overlay-primary fixed overlay" id="next" style="background-image: url('images/hero_1.jpg');">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
              <h2 class="section-title mb-2 text-white">Taken Point Site Status</h2>
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



      <section class="site-section">
        <div class="container">

          <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
              <h2 class="section-title mb-2">43,167 Job Listed</h2>
            </div>
          </div>
          <ul class="job-listings mb-5">
            <?php
            while ($row = mysqli_fetch_array($rs)) {


            ?>

              <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
                <a href="ujob-single.php?post_id=<?php print $row['post_id']; ?>"></a>
                <div class="job-listing-logo">
                  <img src="photo/<?php print $row['logo']; ?>" alt="Free Website Template by Free-Template.co" class="img-fluid" hight="190" width="190">
                </div>

                <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                  <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                    <h2>
                      <?php print $row['title']; ?>
                    </h2>
                    <strong>
                      <?php print $row['com_name']; ?>
                    </strong>
                  </div>
                  <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                    <span class="icon-room"></span>
                    <?php print $row['state']; ?>, <?php print $row['country']; ?>
                  </div>
                  <div class="job-listing-meta">
                    <span class="badge badge-success">
                      <?php print $row['job_type']; ?>
                    </span>
                  </div>
                </div>

              </li>


            <?php } ?>
          </ul>



        </div>
      </section>
      <section class="bg-light pt-5 testimony-full">

        <div class="owl-carousel single-carousel">


          <div class="container">
            <div class="row">
              <div class="col-lg-6 align-self-center text-center text-lg-left">
                <blockquote>
                  <p>&ldquo;I find Taken Point very helpful. it was a great project and good people to work with .
                    Really
                    appriciate the team who helped me find this project which built my experience in the It industry.
                    &rdquo;</p>
                  <p>I am really thankful that they have given my the opportunity to polis myself.</p>
                  <p><cite> &mdash; Corey Woods, @Dribbble</cite></p>
                </blockquote>
              </div>
              <div class="col-lg-6 align-self-end text-center text-lg-right">
                <img src="images/person_transparent_2.png" alt="Image" class="img-fluid mb-0">
              </div>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col-lg-6 align-self-center text-center text-lg-left">
                <blockquote>
                  <p>&ldquo;I have worked with Taken Point recently , and they are good at providing service. They are
                    very responsive and humble when it comes to communication.&rdquo;
                  </p>
                  <p><cite> &mdash; Chris Peters, @Google</cite></p>
                </blockquote>
              </div>
              <div class="col-lg-6 align-self-end text-center text-lg-right">
                <img src="images/person_transparent.png" alt="Image" class="img-fluid mb-0">
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

    <script src="js/bootstrap-select.min.js"></script>

    <script src="js/custom.js"></script>


  </body>

  </html>

<?php } ?>