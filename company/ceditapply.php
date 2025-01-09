<?php include("connect.php");
session_start();
if (!isset($_SESSION['com_id'])) {
    header("location:clogin.php");
    echo $_SESSION['com_id'];
} else {
    $ap_id = $_GET['ap_id'];
    $q = "select * from apply where ap_id= $ap_id";
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
                            <h1 class="text-white font-weight-bold">Edit Post</h1>
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
                    <form class="p-4 p-md-5 border rounded" action="ceditapply_code.php" method="post">

                        <input type="hidden" class="form-control" id="contact" name="ap_id" value="<?php print $row['ap_id']; ?>">
                        <h3 class="text-black mb-5 border-bottom pb-2">Edit Company Profile</h3>
                        <div class="form-group">
                            <label for="status">status</label>
                            <select class="selectpicker border rounded" id="status" name="status" value="<?php print $row['status']; ?>" data-style="btn-black" data-width="100%" data-live-search="true" title="Select status">
                                <option>Padding</option>
                                <option>Approve</option>
                                <option>Rejected</option>
                            </select>
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