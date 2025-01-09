<?php
include("connect.php");
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
        <!-- NAVBAR  -->
        <?php
        include("loheader.php");
        ?>

        <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1 class="text-white font-weight-bold">User Registration</h1>
                        <div class="custom-breadcrumbs">
                            <a href="uindex.php">Home</a> <span class="mx-2 slash">/</span>
                            <span class="text-white"><strong>User Registration</strong></span>
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
                                <h2>User Registration</h2>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row mb-5">
                    <div class="col-lg-12">

                        <form action="adduser_code.php" method="POST" enctype="multipart/form-data" class="p-4 p-md-5 border rounded">

                            <div class="form-group">
                                <label class="text-black" for="uname">User Name</label>
                                <input type="text" id="uname" class="form-control" name="u_name" placeholder="User Name" pattern="[a-zA-Z ]*$" required>
                            </div>
                            <div class="form-group">
                                <label class="text-black" for="uemail">User Email</label>
                                <input type="text" id="uemail" class="form-control" name="email" placeholder="Email address" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}">
                            </div>

                            <div class="form-group">

                                <label class="text-black" for="phoneno">Phone No</label>
                                <input type="number" id="phoneno" name="p_no" class="form-control" placeholder="Phone No" required pattern="(\+?\d[- .]*){7,13}">
                            </div>
                            <div class=" form-group">

                                <label class="text-black" for="bday">BDate </label>
                                <input type="date" id="bday" name="b_date" class="form-control" placeholder="BDate">
                            </div>
                            <div class="form-group">

                                <label class="text-black" for="uage">Age</label>
                                <input type="Text" id="uage" name="u_age" class="form-control" placeholder="Age" pattern="([0-9]*$){3}" required>
                            </div>
                            <div class="form-group">

                                <label class="text-black" for="edu">Education</label>
                                <input type="text" id="edu" class="form-control" name="education" placeholder="Education" required>

                            </div>
                            <div class="form-group">

                                <label class="text-black" for="skill">Skill</label>
                                <input type="text" id="skill" class="form-control" name="skill" placeholder="Skill" required>
                            </div>
                            <div class="form-group">

                                <label class="text-black" for="Experience">Experience</label>

                                <select class="selectpicker border rounded" id="Experience" data-style="btn-black" data-width="100%" data-live-search="true" name="experience" title="Select Experience" required>
                                    <option>Freaser</option>
                                    <option>1 Year</option>
                                    <option>2 Year</option>
                                    <option>3 Year</option>
                                    <option>4 Year</option>
                                    <option>5 Year</option>
                                    <option>6 Year</option>
                                    <option>7 Year</option>
                                    <option>8 Year</option>
                                    <option>9 Year</option>
                                    <option>10 Year</option>
                                    <option>11 Year</option>
                                    <option>12 Year</option>
                                    <option>13 Year</option>
                                    <option>14 Year</option>
                                    <option>15 Year</option>
                                    <option>16 Year</option>
                                    <option>17 Year</option>
                                    <option>18 Year</option>
                                    <option>19 Year</option>
                                    <option>20 Year</option>
                                    <option>21 Year</option>
                                    <option>22 Year</option>
                                    <option>23 Year</option>
                                    <option>24 Year</option>
                                    <option>25 Year</option>
                                    <option>26 Year</option>
                                    <option>27 Year</option>
                                    <option>28 Year</option>
                                    <option>29 Year</option>
                                    <option>30 Year</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="text-black" for="fname">Password</label>
                                <input type="password" id="fname" class="form-control" name="password" title="at least eight symbols containing at least one number, one lower, and one upper letter" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                            </div>
                            <div class="form-group">
                                <label class="text-black" for="fname">Re-Type Password</label>
                                <input type="password" title="at least eight symbols containing at least one number, one lower, and one upper letter" id="fname" class="form-control" placeholder="Re-type Password">
                            </div>

                            <div class="form-group">
                                <label for="company-website-tw d-block">Upload Resume</label> <br>
                                <label class="btn btn-primary btn-md btn-file">
                                    Browse File<input type="file" name="pdf_file_img" >
                                </label>
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