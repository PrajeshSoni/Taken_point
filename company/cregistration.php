<?php include("connect.php");
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
        </div>
    </div><!-- .site-mobile-menu -->
    <!-- NAVBAR -->
    <?php
    include("loheader.php");
    ?>

    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="text-white font-weight-bold">Sign Up</h1>
                    <div class="custom-breadcrumbs">
                        <a href="../index.php">Home</a> <span class="mx-2 slash">/</span>
                        <span class="text-white"><strong>Registration</strong></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="site-section">
        <div class="container">

            <div class="row align-items-center mb-5">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <div class="d-flex align-items-center">
                        <div>
                            <h2>Company Registration</h2>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row mb-5">
                <div class="col-lg-12">

                    <form action="caddcompany_code.php" enctype="multipart/form-data" method="post" class="p-4 p-md-5 border rounded">


                        <h3 class="text-black my-5 border-bottom pb-2">Company Details</h3>

                        <div class="form-group">
                            <label for="com_name">Company Name</label>
                            <input type="text" class="form-control" id="com_name" name="com_name" placeholder=" Enter company Name" pattern="[a-zA-Z ]*$" required>
                        </div>
                        <div class="form-group">
                            <label for="add_1">Address</label>
                            <textarea name="add_1" class="form-control" id="add_1" cols="20" rows="2" required></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="company-website-tw d-block">Upload Logo Image</label> <br>
                            <label class="btn btn-primary btn-md btn-file">
                                Browse File<input type="file" name="logo" hidden>
                            </label>
                        </div>
                    


                        <div class="form-group">
                            <label for="job-city">city</label>
                            <input type="text" class="form-control" id="job-city" name="city" placeholder="Enter City Name" required>
                        </div>
                        <div class="form-group">
                            <label for="job-state">state</label>
                            <input type="text" class="form-control" id="job-state" name="state" placeholder="Enter state Name" required>
                        </div>
                        <div class="form-group">
                            <label for="job-country">country</label>
                            <input type="text" class="form-control" id="job-country" name="country" placeholder="Enter Country Name" required>
                        </div>
                        <div class="form-group">
                            <label for="zip">Zip</label>
                            <input type="text" class="form-control" id="zip" name="zip" placeholder="Enter Zip Code" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Your Pnone Number" required pattern="(\+?\d[- .]*){7,13}">
                        </div>
                        <div class="form-group">
                            <label for="fax">fax</label>
                            <input type="text" class="form-control" id="fax" name="fax" placeholder="Enter your Fax" required>
                        </div>
                        <div class="form-group">
                            <label for="com_email">Company Email </label>
                            <input type="text" class="form-control" id="com_email" name="email" placeholder="Enter Email id" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}">
                        </div>

                        <div class="form-group">
                            <label for="website_url">website Url</label>
                            <input type="text" class="form-control" id="website_url" name="website_url" placeholder="Enter your Website Url" required>
                        </div>


                        <div class="form-group">
                            <label for="com_profile">Company Profile</label>
                            <textarea name="com_profile" class="form-control" id="com_profile" cols="30" rows="10" required></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="password">password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                        </div>
                        <div class="form-group">
                            <label for="re-password">Re-password</label>
                            <input type="password" class="form-control" id="re-password" placeholder="Re-Enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                        </div>
                        <div class="row align-items-center mb-5">
                            <div class="col-lg-4 ml-auto">
                                <div class="row">
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-block btn-primary btn-md">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </form>

                </div>
            </div>
        </div>
    </section>
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