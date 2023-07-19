<!DOCTYPE html>
<html lang="en">

<head>
    <title>Carbook - Register Now</title>
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
    <script>
        function validateForm() {
            var x = document.forms["Register"]["name"].value;
            if (x == "") {
                alert("Enter your Name !");
                return false ;
            }

            var x = document.forms["Register"]["phone"].value;
            if (isNaN(x)) {
                alert("Enter Numeric Value Only !");
                return false ;
            }
            if (x.length != 10) {
                alert("Enter 10 Digits Phone Number!");
                return false ; 
            }

            var x = document.forms["Register"]["address"].value;
            if (x == "") {
                alert("Enter your Address !");
                return false ; 
            }
            var x = document.forms["Register"]["email"].value;
            if (x == "") {
                alert("Enter your Email !");
                return false ; 
            }
            var p = document.forms["Register"]["password"].value;
            if (x == "") {
                alert("Enter your Password !");
                return false ; 
            }

            var y = document.forms["Register"]["cpassword"].value;
            if (y == "" && y != p) {
                alert("Your Password Does Not Match !");
                return false ; 
            } 
        }
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">Car<span>Book</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="carbook.html" class="nav-link">Booking</a></li>
                    <li class="nav-item"><a href="car.html" class="nav-link">Cars</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                    <li class="nav-item active"><a href="login.php" class="nav-link">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
    <section class="hero-wrap hero-wrap-3 js-fullheight"
        style="background-image: url('images/kobu-agency-7okkFhxrxNw-unsplash.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <div class="breadup">
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                        class="ion-ios-arrow-forward"></i></a></span> <span>Register <i
                                    class="ion-ios-arrow-forward"></i></span></p>
                        <h1 class="mb-3 bread">Register Here</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-intro">
        <div class="overlay"></div>
        <div class="container">
            <div class="formup">
                <div class="col-md-8 block-9 mb-md-5">
                    <form action="#" class="bg-light p-5 contact-form" method="post" name="Register"
                        onsubmit="return validateForm()">
                        <h2 class="bg-light p-5 contact-form" style="font-size: 40px;
            font-weight: 600; margin-bottom: 0.5rem !important;">Register Here</h2>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name" name="name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Phone No." name="phone">
                        </div>
                        <div class="form-group">
                            <textarea type="text" class="form-control" placeholder="Your Address"
                                name="address"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email" name="email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Enter Password" name="password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder=" Confirm Password" name="cpassword">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="register" value="Register Now" class="btn btn-primary py-3 px-5">

                        </div>
                        <a href="login.php">Already have an account ? Login</a>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>

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
<?php

    include "config.php"; 
    if(isset($_POST['register']))
	{
		extract($_POST); 

		$add = mysqli_query($con,"insert into register(r_name , r_phone	 , r_address , r_email , r_pass	)values('$name','$phone','$address','$email','$password')") or die(mysqli_error($con));	
		
		if($add)
		{
			echo "<script>"; 
			echo "alert('Data Entered Sucessfully..!')"; 
			echo "</script>"; 
		}
		else
		{
			echo "<script>"; 
			echo "alert('Data Entered Error..!')"; 
			echo "</script>"; 
		}
	}

?>