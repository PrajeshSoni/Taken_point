<?php
include("connect.php");

session_start();
if (!isset($_SESSION['u_id'])) {
  header("location:../login.php");
} else {
  $q = "select j.*,c.com_name,c.logo from job_posting j,company c where c.com_id=j.com_id";
  $rs = mysqli_query($cn, $q);

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
              <h1 class="text-white font-weight-bold">Job List</h1>
              <div class="custom-breadcrumbs">
                <a href="#">Home</a> <span class="mx-2 slash">/</span>
                <span class="text-white"><strong>Job List</strong></span>
              </div>
            </div>
          </div>
        </div>
      </section>



      <section class="site-section" id="next">
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
                  <img src="photo/<?php print $row['logo']; ?>" alt="Free Website Template by Free-Template.co" class="img-fluid">
                </div>

                <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                  <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                    <h2><?php print $row['title']; ?></h2>
                    <strong><?php print $row['com_name']; ?></strong>
                  </div>
                  <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                    <span class="icon-room"></span> <?php print $row['state']; ?>, <?php print $row['country']; ?>
                  </div>
                  <div class="job-listing-meta">
                    <span class="badge badge-success"><?php print $row['job_type']; ?></span>
                  </div>
                </div>

              </li>


            <?php } ?>
          </ul>



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