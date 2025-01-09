<?php include("connect.php");
session_start();
if (!isset($_SESSION['com_id'])) {
    header("location:clogin.php");
    echo $_SESSION['com_id'];
} else {
    $com_id = $_SESSION["com_id"];
    $q = "select j.*,c. com_name,c.logo from job_posting j,company c where c.com_id = j.com_id and c.com_id= $com_id";
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
            include("cheader.php");
            ?>

            <!-- HOME -->
            <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <h1 class="text-white font-weight-bold">Job post</h1>
                            <div class="custom-breadcrumbs">
                                <a href="#">Home</a> <span class="mx-2 slash">/</span>
                                <span class="text-white"><strong>Job post</strong></span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container-fluid">


                <table class="table table-bordered">
                    <thead>
                        <tr>

                            <th scope="col">company id</th>
                            <th scope="col">contact person</th>
                            <th scope="col">Title</th>
                            <th scope="col">Department</th>
                            <th scope="col">city</th>
                            <th scope="col">state</th>

                            <th scope="col">Education level</th>
                            <th scope="col">job Type</th>
                            <th scope="col">Min Salary</th>
                            <th scope="col">Max Salary</th>
                            <th scope="col">job description</th>
                            <th scope="col">posting date</th>
                            <th scope="col">posted by</th>
                            <th scope="col">Option</th>
                            <th scope="col">APPLY ON YOUR POST</th>


                        </tr>
                    </thead>
                    <?php
                    while ($row = mysqli_fetch_array($rs)) {


                    ?>

                        <tbody>
                            <tr>
                                <td><?php print $row['com_name']; ?></td>
                                <td><?php print $row['con_person']; ?></td>
                                <td><?php print $row['title']; ?></td>
                                <td><?php print $row['department']; ?></td>
                                <td><?php print $row['city']; ?> /td>
                                <td><?php print $row['state']; ?></td>

                                <td><?php print $row['edu_level']; ?></td>
                                <td><?php print $row['job_type']; ?></td>
                                <td><?php print $row['min_salary']; ?></td>
                                <td><?php print $row['max_salary']; ?></td>
                                <td><?php print $row['job_des']; ?></td>
                                <td><?php print $row['post_date']; ?></td>
                                <td> <?php print $row['post_by']; ?> , HR Manager</td>
                                <td><a href="ceditpost.php?post_id=<?php print $row['post_id']; ?>" style="color: black"> Edit</a> || <a href="cdelete_post.php?post_id=<?php print $row['post_id']; ?>" style="color: black">Delete</a></td>
                                <td><a href="capply.php?post_id=<?php print $row['post_id']; ?>" style="color: black">Apply</a></td>
                            </tr>
                        <?php
                    } ?>
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