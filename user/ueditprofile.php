<?php
include("connect.php");
$u_id = $_GET['u_id'];
$re_id = $_GET['re_id'];
$mr_id = $_GET['mr_id'];

$q = "select u.*,r.re_id,r.skill,r.education,r.experience,m.mr_id,m.pdf_file from users u,user_resume r,my_resume m where u.u_id=m.u_id and u.u_id=r.u_id and u.u_id = $u_id and r.re_id = $re_id and m.mr_id = $mr_id";
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
    include("uheader.php");
    ?>
    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Edit Profile</h1>
            <div class="custom-breadcrumbs">
              <a href="uindex.php">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Edit Profile</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="row mb-5">
      <div class="col-lg-12">
        <form class="p-4 p-md-5 border rounded" action="ueditprofile_code.php" method="post">

          <input type="hidden" class="form-control" id="contact" name="u_id" value="<?php print $row['u_id']; ?>">
          <input type="hidden" class="form-control" id="contact" name="re_id" value="<?php print $row['re_id']; ?>">
          <input type="hidden" class="form-control" id="contact" name="mr_id" value="<?php print $row['mr_id']; ?>">
          <h3 class="text-black mb-5 border-bottom pb-2">Edit User Profile</h3>

          <div class="form-group">
            <label for="job-name">User Name</label>
            <input type="text" class="form-control" id="job-name" name="u_name" value="<?php print $row['u_name']; ?>">
          </div>
          <div class="form-group">
            <label for="u_email">User Email</label>
            <input type="text" class="form-control" id="u_email" name="email" value="<?php print $row['email']; ?>" placeholder="Product Designer">
          </div>
          <div class="form-group">
            <label for="job-b_date">Birthday Date</label>
            <input type="text" class="form-control" id="job-b_date" name="b_date" value="<?php print $row['b_date']; ?>">
          </div>
          <div class="form-group">
            <label for="u_age">Age</label>
            <input type="text" class="form-control" id="u_age" name="u_age" value="<?php print $row['u_age']; ?>">
          </div>

          <div class="form-group">
            <label for="p_no">p_no no</label>
            <input type="text" class="form-control" id="p_no" name="p_no" value="<?php print $row['p_no']; ?>">
          </div>
          <div class="form-group">
            <label for="Education">Education</label>
            <input type="text" class="form-control" id="Education" name="education" value="<?php print $row['education']; ?>">
          </div>
          <div class="form-group">
            <label for="skill">skill</label>
            <input type="text" class="form-control" name="skill" value="<?php print $row['skill']; ?>" id="skill">
          </div>
          <div class="form-group">
            <label class="text-black" for="Experience">Experience</label>

            <select class="selectpicker border rounded" id="Experience" data-style="btn-black" data-width="100%" data-live-search="true" name="experience" title="<?php print $row['experience']; ?>">
              <option>Freaser</option>
              <option>1 Year</option><option>2 Year</option><option>3 Year</option>
              <option>4 Year</option><option>5 Year</option><option>6 Year</option>
              <option>7 Year</option><option>8 Year</option><option>9 Year</option>
              <option>10 Year</option><option>11 Year</option><option>12 Year</option>
              <option>13 Year</option><option>14 Year</option><option>15 Year</option>
              <option>16 Year</option><option>17 Year</option><option>18 Year</option>
              <option>19 Year</option><option>20 Year</option><option>21 Year</option>
              <option>22 Year</option><option>23 Year</option><option>24 Year</option>
              <option>25 Year</option><option>26 Year</option><option>27 Year</option>
              <option>28 Year</option><option>29 Year</option><option>30 Year</option>
            </select>
          </div>
          <div class="form-group">
            <label for="company-website-tw d-block">Upload File </label> <br>
            <label class="btn btn-primary btn-md btn-file">
              Browse File<input type="file" name="pdf_file" value="<?php print $row['pdf_file']; ?>" hidden>
            </label>
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
  </div>
  <?php
  include("userfooter.php");
  ?>

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