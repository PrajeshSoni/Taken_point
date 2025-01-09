<?php include("connect.php");
session_start();
if (!isset($_SESSION['a_id'])) {
    header("location:alogin.php");
    echo $_SESSION['a_id'];
} else {
    $q = "select * from company";
    $rs = mysqli_query($cn, $q);
?>
    <!doctype html>
    <html lang="en">

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
            include("aheader.php");
            ?>

            <!-- HOME -->
            <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <h1 class="text-white font-weight-bold">Company</h1>
                            <div class="custom-breadcrumbs">
                                <a href="aindex.php">Home</a> <span class="mx-2 slash">/</span>
                                <span class="text-white"><strong>Company</strong></span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container-fluid">
                <br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">company name</th>
                            <th scope="col">Logo</th>
                            <th scope="col">city</th>
                            <th scope="col">state</th>
                            <th scope="col">country</th>
                            <th scope="col">Zip Code</th>
                            <th scope="col">Phone</th>
                            <th scope="col">company Email</th>
                            <th scope="col">website Url</th>
                        </tr>
                    </thead>
                    <?php
                    while ($row = mysqli_fetch_array($rs)) {
                    ?>
                        <tbody>
                            <tr>
                                <td><?php print $row['com_name']; ?></td>
                                <td><img src="photo/<?php print $row['logo']; ?>" alt="Free Website Template by Free-Template.co" class="img-fluid" width="100" height="100"></td>
                                <td><?php print $row['city']; ?></td>
                                <td><?php print $row['state']; ?></td>
                                <td><?php print $row['country']; ?></td>
                                <td><?php print $row['zip']; ?></td>
                                <td><?php print $row['phone']; ?></td>
                                <td><?php print $row['email']; ?></td>
                                <td><?php print $row['website_url']; ?></td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
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