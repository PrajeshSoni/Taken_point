<?php include("connect.php");
session_start();
if (!isset($_SESSION['com_id'])) {
  header("location:clogin.php");
  echo $_SESSION['com_id'];
} else {
  $post_id = $_GET['post_id'];
  $q = "select * from job_posting where post_id= $post_id";
  $rs = mysqli_query($cn, $q);
  $row = mysqli_fetch_array($rs);
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
      include("cheader.php");
      ?>
      <!-- HOME -->
      <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <h1 class="text-white font-weight-bold">Edit Job Post</h1>
              <div class="custom-breadcrumbs">
                <a href="cindex.php">Home</a> <span class="mx-2 slash">/</span>
                <span class="text-white"><strong>Edit Post</strong></span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="row mb-5">
        <div class="col-lg-12">
          <form class="p-4 p-md-5 border rounded" action="ceditpost_code.php" method="post">

            <input type="hidden" class="form-control" id="contact" name="post_id" value="<?php print $row['post_id']; ?>">
            <h3 class="text-black mb-5 border-bottom pb-2">Job Details</h3>

            <div class="form-group">
              <input type="text" class="form-control" id="contact" name="com_id" value="<?php print $row['com_id']; ?>" hidden>
            </div>

            <div class="form-group">
              <label for="contact">Contact Person</label>
              <input type="text" class="form-control" id="contact" name="con_person" value="<?php print $row['con_person']; ?>">
            </div>

            <div class="form-group">
              <label for="job-title">Job Title</label>
              <input type="text" class="form-control" id="job-title" name="title" value="<?php print $row['title']; ?>">
            </div>
            <div class="form-group">
              <label for="job-department">Job department</label>
              <input type="text" class="form-control" id="job-department" name="department" value="<?php print $row['department']; ?>">
            </div>


            <div class="form-group">
              <label for="job-city">city</label>
              <input type="text" class="form-control" id="job-city" name="city" value="<?php print $row['city']; ?>">
            </div>
            <div class="form-group">
              <label for="job-state">state</label>
              <input type="text" class="form-control" id="job-state" name="state" value="<?php print $row['state']; ?>">
            </div>
            <div class="form-group">
              <label for="job-country">country</label>
              <input type="text" class="form-control" id="job-country" name="country" value="<?php print $row['country']; ?>">
            </div>
            <div class="form-group">
              <label for="educationlevel">Education-level</label>
              <input type="text" class="form-control" id="educationlevel" name="edu_level" value="<?php print $row['edu_level']; ?>">
            </div>



            <div class="form-group">
              <label for="job-type">Job Type</label>
              <select class="selectpicker border rounded" id="job-type" name="job_type" value="<?php print $row['job_type']; ?>" data-style="btn-black" data-width="100%" data-live-search="true" title="Select Job Type">
                <option>Part Time</option>
                <option>Full Time</option>
              </select>
            </div>

            <div class="form-group">
              <label for="minsalary">Min-salary</label>
              <input type="text" class="form-control" name="min_salary" value="<?php print $row['min_salary']; ?>" id="minsalary">
            </div>
            <div class="form-group">
              <label for="maxsalary">Max-salary</label>
              <input type="text" class="form-control" id="maxsalary" name="max_salary" value="<?php print $row['max_salary']; ?>">
            </div>
            <!-- <div class="form-group">
              <label for="Postby">Post By</label>
              <input type="text" class="form-control" id="postby" name="post_by" value="<?php print $row['post_by']; ?>">
            </div> -->

            <div class="form-group">
              <label for="job-description">Job Description</label>

              <textarea class="form-control" name="job_des"><?php print $row['job_des']; ?></textarea>

            </div>
            <div class="row align-items-center mb-5">
              <div class="col-lg-4 ml-auto">
                <div class="row">
                  <div class="col-6">
                    <button type="submit" class="btn btn-block btn-primary btn-md"> Update</button>
                  </div>
                </div>
              </div>
            </div>

          </form>
        </div>


      </div>
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