<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Carbook - Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        function validateForm2() {
            var x = document.forms["Login"]["email"].value;
            if (x == "") {
                swal ( "ERROR !" ,  "Please Enter A Valid Email !" , "warning");
                return false ;
            }
            var x = document.forms["Login"]["password"].value;
            if (x == "") {
                swal ( "ERROR !" ,  "Please Enter Your Password !" , "warning");
                return false ;
            }
        }

        </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">Drive<span>Ease</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
                    <!-- <li class="nav-item"><a href="carbook.php" class="nav-link">Booking</a></li> -->
                    <li class="nav-item"><a href="car1.php" class="nav-link">Booking</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                    <li class="nav-item active"><a href="login.php" class="nav-link">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
    <section class="hero-wrap hero-wrap-3 js-fullheight"
        style="background-image: url('images/scott-graham-5fNmWej4tAA-unsplash.jpg');"
        data-stellar-background-ratio="0.5">
        <!-- <div class="overlay"></div> -->
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <div class="breadup">
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                        class="ion-ios-arrow-forward"></i></a></span> <span>Login <i
                                    class="ion-ios-arrow-forward"></i></span></p>
                        <h1 class="mb-3 bread">Login</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-about">
        <div class="container">
            <div class="col-md-8 block-9 mb-md-5">
                <form  class="bg-light p-5 contact-form" method="post" name="Login"  onsubmit="return validateForm2()">
                    <h2 class="bg-light p-5 contact-form" style="font-size: 40px;
                    font-weight: 600; margin-bottom: 0.5rem !important;">Login</h2>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Your Email" name="email" >
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Your Password" name="password" >
                    </div>
                    <div class="form-group">
                        <input type="submit" name="login" value="Login" class="btn btn-primary py-3 px-5">
                        <div class="login1"> Don't have an Account? <a href="register.php">Join CarBook</a></div>
                    </div>

                </form>
            </div>
        </div>
        </div>
    </section>
    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2"><a href="#" class="logo">Drive<span>Ease</span></a></h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Information</h2>
                        <ul class="list-unstyled">
                            <li><a href="about.html" class="py-2 d-block">About</a></li>
                            <li><a href="index.html#services" class="py-2 d-block">Services</a></li>
                            <li><a href="pricing.html" class="py-2 d-block">Best Price Guarantee</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Customer Support</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Booking Tips</a></li>
                            <li><a href="contact.html" class="py-2 d-block">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><a href="#"><span class="icon icon-map-marker"></span><span class="text">SSVPS
                                            Polytechnic Dhule, 424001</span></li></a>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+91
                                            9876543210</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">info@carbook.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script> All rights reserved | by TyCo Group
                        10 of SSVPS Polytechnic
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <!-- <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> -->
    <!-- <script src="js/google-map.js"></script> -->
    <script src="js/main.js"></script>

</body>

</html>
<?php

include "config.php";

if (isset($_POST['login'])) {

	extract($_POST);
    $log = mysqli_query($con, "select * from register where r_email='".$_POST['email']."' and r_pass='".$_POST['password']."'") or die(mysqli_error($con));
   // echo $log; die();
   if (mysqli_num_rows($log) > 0 ) {
        $fetch = mysqli_fetch_array($log);
        session_start();
        $_SESSION['login'] = true; 
		$_SESSION['r_id'] = $fetch['r_id'];
		$_SESSION['r_email'] = $fetch['r_email'];
		echo "<script>";
		echo "swal('Successfully Login...');";
		echo 'window.location.href="carbook.php";';
		echo "</script>";
	} else {
        echo "<script>";
        echo "swal ( 'ERROR !' ,  'Login Failed !' , 'error')";
        echo "</script>";

	}
}

?>