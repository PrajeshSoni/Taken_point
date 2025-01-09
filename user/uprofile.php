<?php
include("connect.php");

session_start();
if (!isset($_SESSION['u_id'])) {
  header("location:../login.php");
} else {



?>
  <!doctype html>
  <html lang="en">
  <a href="uprofile.php"></a>

  <head>
    <title>Take Point </title>
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
              <h1 class="text-white font-weight-bold">Profile</h1>
              <div class="custom-breadcrumbs">
                <a href="#">Home</a> <span class="mx-2 slash">/</span>
                <span class="text-white"><strong>Profile</strong></span>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="container-fluid">
        <?php

        if (isset($_SESSION['u_id'])) {
          $u_id = $_SESSION['u_id'];
          $q = "select u.*,r.re_id,r.skill,r.education,r.experience,m.mr_id,m.pdf_file from users u,user_resume r,my_resume m where u.u_id=m.u_id and u.u_id=r.u_id and u.u_id = $u_id";
          $rs = mysqli_query($cn, $q);

          while ($row = mysqli_fetch_array($rs)) {
            $_SESSION['re_id'] = $row['re_id'];
            $_SESSION['mr_id'] = $row['mr_id'];

        ?>
            <section class="vh-100" style="background-color: #eee;">
              <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                  <div class="col-md-12 col-xl-4">

                    <div class="card" style="border-radius: 15px;">
                      <div class="card-body text-center">
                        <div class="mt-3 mb-4">
                        </div>
                        <h4 class="mb-2"><?php print $row['u_name']; ?></h4>
                        <p class="mb-4"><?php print $row['skill']; ?><span class="mx-2"></span> <?php print $row['email']; ?> </p>


                        <a href="resume/<?php print $row['pdf_file']; ?>">
                          <button type="button" class="btn btn-primary btn-rounded btn-lg">
                            <a href="resume/<?php print $row['pdf_file']; ?>" download> <span class="text-light">Resume</span> </a>
                          </button>
                        </a>
                        <a href="ueditprofile.php?u_id=<?php print $row['u_id']; ?>&&re_id=<?php print $row['re_id']; ?>&&mr_id=<?php print $row['mr_id']; ?>">
                          <button type="button" class="btn btn-primary btn-rounded btn-lg">
                            Edit
                          </button>
                        </a>
                        <div class="d-flex justify-content-between text-center mt-5 mb-2">
                          <div>
                            <p class="mb-2 h5"><?php print $row['education']; ?></p>
                            <p class="text-muted mb-0">Education</p>
                          </div>
                          <div class="px-3">
                            <p class="mb-2 h5"><?php print $row['p_no']; ?></p>
                            <p class="text-muted mb-0">Phone Number</p>
                          </div>
                          <div>
                            <p class="mb-2 h5"><?php print $row['experience']; ?></p>
                            <p class="text-muted mb-0">Experience</p>
                          </div>
                        </div>

                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </section>
      </div>
  <?php }
        }
  ?>


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
<?php } ?>