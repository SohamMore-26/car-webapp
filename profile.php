<?php session_start();
include "config.php";
if (isset($_SESSION['id'])) {
    $view = mysqli_query($con, "select * from book where id = '" . $_SESSION['id'] . "'") or die(mysqli_error($con));}
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    $showError = "Login Failed...!";
header("location: login.php");
   exit;
}
if(isset($_SESSION['id']))
{
    $view = mysqli_query($con,"select * from book where id = '".$_SESSION['id']."'") or die(mysqli_error($con));
    $row = mysqli_fetch_array($view);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>DriveEase - Profile</title>
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
</head>

<body style="background-image: linear-gradient(to bottom left, rgb(85, 236, 236), rgb(85, 236, 140));">
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
                    <li class="nav-item"><a href="carbook.php" class="nav-link"> Booking</a></li>
                    <li class="nav-item"><a href="car1.php" class="nav-link">Cars</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                    <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
                    <li class="nav-item active"><a href="profile.php" class="nav-link"><svg
                                xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-3 js-fullheight"
        style="background-image: url('images/damian-zaleski-RYyr-k3Ysqg-unsplash.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <h1 class="mb-3 bread">Profile</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div style="margin: 50px ; ">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card" style="margin-top: -100px;">
                        <div class="card-header">
                            <h4>User Profile</h4>
                        </div>
                        <div class="card-body">
                            <p><strong>Name:</strong>
                                <?php echo $_SESSION['name'] ?>
                            </p>
                            <p><strong>Email:</strong>
                                <?php echo $_SESSION['email'] ?>
                            </p>
                            <p><strong>Address:</strong>
                                <?php echo $_SESSION['address'] ?>
                            </p>
                            <p><strong>Phone Number:</strong>
                                <?php echo $_SESSION['phone'] ?>
                            </p>
                        </div>
                        <p class="d-flex mb-0 d-block"><a href="profileedit.php" style="margin: 20px;"><input
                                    type="button" name="Rent" value="Edit Details"
                                    class="btn btn-primary py-3 px-5"></a>
                    </div>
                </div>
            </div>
        </div>

        <div style="margin: 50px ;">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="card" >
                        <div class="card-header">
                            <h4>Booking History</h4>
                        </div>
                        <div class="card-body">
                            <table class ="table table-striped mb-0" style="color: rgb(45, 45, 45); font-style: normal;">
                                <thead style="background-color: #62beff; ">
                                    <tr class="text-center" data-expanded="true">
                                        <th>Car Name</th>
                                        <th>Company</th>
                                        <th>Pickup location</th>
                                        <th>Drop-off location</th>
                                        <th>Pickup date</th>
                                        <th>Pickup time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_array($view)) {
                                        extract($row); ?>
                                        <tr class="text-center">
                                            <td>
                                                <?php echo $row['r_id']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['r_name']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['r_phone']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['r_address']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['r_email']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['r_pass']; ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
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
                                            Polytechnic Dhule,
                                            424001</span></li></a>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+91
                                            9876543210</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">info@carbook.com</span></a>
                                </li>
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
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
</body>

</html>