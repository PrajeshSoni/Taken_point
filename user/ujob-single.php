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
    <title>Taken point</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


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

      <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <h1 class="text-white font-weight-bold">Single job</h1>
              <div class="custom-breadcrumbs">
                <a href="uindex.php">Home</a> <span class="mx-2 slash">/</span>
                <a href="ujob-listings.php">Job list</a> <span class="mx-2 slash">/</span>
                <span class="text-white"><strong>Single job</strong></span>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php
      if (isset($_GET['post_id'])) {
        $post_id = $_GET['post_id'];
        $q = "select j.*,c.com_name,c.logo from job_posting j,company c where c.com_id=j.com_id 
      and j.post_id = $post_id";
        $rs = mysqli_query($cn, $q);
      } else {
        $q = "Select * from package";
      }
      ?>
      <?php
      while ($row = mysqli_fetch_array($rs)) {


      ?>

        <section class="site-section">
          <div class="container">
            <div class="row align-items-center mb-5">
              <div class="col-lg-8 mb-4 mb-lg-0">
                <div class="d-flex align-items-center">
                  <div class="border p-2 d-inline-block mr-3 rounded">
                    <img src="photo/<?php print $row['logo']; ?>" alt="Image" height="100" width="150">
                  </div>
                  <div>
                    <h2><?php print $row['title']; ?></h2>
                    <div>
                      <span class="ml-0 mr-2 mb-2"><span class="icon-briefcase mr-2"></span><?php print $row['com_name']; ?></span>
                      <span class="m-2"><span class="icon-room mr-2"></span><?php print $row['state']; ?></span>
                      <span class="m-2"><span class="icon-clock-o mr-2"></span><span class="text-primary"><?php print $row['job_type']; ?></span></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="row">
                  <div class="col-6">
                  </div>
                  <div class="col-6">
                    <a href="uapply_code.php?post_id=<?php print $row['post_id']; ?>" class="btn btn-block btn-primary btn-md">Apply Now</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-8">
                <div class="mb-5">
                  <figure class="mb-5"><img src="images/job_single_img_1.jpg" alt="Image" class="img-fluid rounded"></figure>
                  <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-align-left mr-3"></span>Job Description</h3>
                  <p><?php print $row['job_des']; ?></p>
                </div>


                <div class="mb-5">
                  <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-book mr-3"></span>Education + Salary</h3>
                  <ul class="list-unstyled m-0 p-0">
                    <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span><?php print $row['edu_level']; ?></span></li>
                    <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span><?php print $row['min_salary']; ?> To <?php print $row['max_salary']; ?></span></li>
                  </ul>
                </div>



                <div class="row mb-5">
                  <div class="col-6">
                  </div>
                  <div class="col-6">
                    <a href="#" class="btn btn-block btn-primary btn-md">Apply Now</a>
                  </div>
                </div>

              </div>
              <div class="col-lg-4">
                <div class="bg-light p-3 border rounded mb-4">
                  <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Job Summary</h3>
                  <ul class="list-unstyled pl-3 mb-0">
                    <li class="mb-2"><strong class="text-black">Published on:</strong> <?php print $row['post_date']; ?></li>
                    <li class="mb-2"><strong class="text-black">Vacancy:</strong> 20</li>
                    <li class="mb-2"><strong class="text-black">Employment Status:</strong> <?php print $row['job_type']; ?></li>
                    <li class="mb-2"><strong class="text-black">Job Location:</strong> <?php print $row['country']; ?></li>
                    <li class="mb-2"><strong class="text-black">Salary:</strong> <?php print $row['min_salary']; ?> - <?php print $row['min_salary']; ?></li>
                    <li class="mb-2"><strong class="text-black">Gender:</strong> Any</li>
                    <li class="mb-2"><strong class="text-black">post By</strong> <?php print $row['post_by']; ?></li>
                  </ul>
                </div>
            <?php }
        } ?>
            <div class="bg-light p-3 border rounded">
              <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Share</h3>
              <div class="px-3">
                <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-facebook"></span></a>
                <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-twitter"></span></a>
                <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-linkedin"></span></a>
                <a href="#" class="pt-3 pb-3 pr-3 pl-0"><span class="icon-pinterest"></span></a>
              </div>
            </div>

              </div>
            </div>
          </div>
        </section>




        <section class="bg-light pt-5 testimony-full">

          <div class="owl-carousel single-carousel">


            <div class="container">
              <div class="row">
                <div class="col-lg-6 align-self-center text-center text-lg-left">
                  <blockquote>
                    <p>&ldquo; I find Taken Point very helpful. it was a great project and good people to work with . Really
                      appriciate the team who helped me find this project which built my experience in the It industry.&rdquo;</p>
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
                      very responsive and humble when it comes to communication.&rdquo;</p>
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