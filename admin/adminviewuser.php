<?php include("connect.php");
session_start();
if (!isset($_SESSION['a_id'])) {
    header("location:alogin.php");
    echo $_SESSION['a_id'];
} else {
    $q = "select * from users";
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
            include("aheader.php");
            ?>

            <!-- HOME -->
            <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <h1 class="text-white font-weight-bold">User</h1>
                            <div class="custom-breadcrumbs">
                                <a href="../index.php">Home</a> <span class="mx-2 slash">/</span>
                                <span class="text-white"><strong>User</strong></span>
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

                            <th scope="col">User Name</th>
                            <th scope="col">User Email </th>
                            <th scope="col">B_date</th>
                            <th scope="col">Uesr age</th>
                            <th scope="col">p_no</th>
                            <th scope="col">Profile</th>

                        </tr>
                    </thead>
                    <?php
                    while ($row = mysqli_fetch_array($rs)) {

                    ?>

                        <tbody>
                            <tr>
                                <td><?php print $row['u_name']; ?></td>
                                <td><?php print $row['email']; ?></td>
                                <td><?php print $row['b_date']; ?></td>
                                <td><?php print $row['u_age']; ?></td>
                                <td><?php print $row['p_no']; ?></td>
                                <td><a href="adminuserresume.php?u_id=<?php print $row['u_id']; ?>">Resume</a></td>

                            </tr>
                        <?php } ?>
                        </tbody>
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