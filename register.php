<!DOCTYPE html>
<html lang="en">

<head>
    <title>DriveEase - Register Now</title>
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
    function validateRegister()
    {
      var x=document.forms["Register"]["name"].value;
      if(x=="")
      {
        alert("Enter name...!");
        return false;
      }
      var x=document.forms["Register"]["phone"].value;
      if(x=="")
      {
        alert("Enter phone no. ...!");
        return false;
      }
      var x=document.forms["Register"]["address"].value;
      if(x=="")
      {
        alert("Enter address...!");
        return false;
      }
      var x=document.forms["Register"]["email"].value;
      if(x=="")
      {
        alert("Enter email...!");
        return false;
      }
      var pass=document.forms["Register"]["password"].value;
      if(pass=="")
      {
        alert("Enter password...!");
        return false;
      }
      var cpass=document.forms["Register"]["cpassword"].value;
      if(cpass=="")
      {
        alert("Enter confirm password...!");
        return false;
      }
      if(cpass!=pass)
      {
        alert("Password do not match...!");
        return false;
      }

    }
    </script>
   
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-dark" id="ftco-navbar"
    style="background-color: #00aa73; padding: 20px;">
    <div class="container">
      <a class="navbar-brand" href="index.html">Drive<span>Ease</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item" style="padding-right: 10px"><a href="index.html" class="nav-link">Home</a></li>
          <!-- <li class="nav-item"><a href="carbook.php" class="nav-link"> Booking</a></li> -->
          <li class="nav-item" style="padding-right: 10px"><a href="car1.php" class="nav-link">Cars</a></li>
          <li class="nav-item" style="padding-right: 10px"><a href="contact.php" class="nav-link">Contact</a></li>
          <li class="nav-item active" style="padding-right: 10px"><a href="login.php" class="nav-link">Login</a></li>
          <li class="nav-item" style="padding-right: 10px"><a href="profile.php" class="nav-link"><svg
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
    <section class="ftco-section ftco-intro">
        <div class="overlay"></div>
        <div class="container">
            <div class="formup">
                <div class="col-md-8 block-9 mb-md-5">
                <form class="bg-light p-5 contact-form" method="post" name="Register" onsubmit="return validateRegister()">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name" name="name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Phone No."  maxlength = "10" name="phone">
              </div>
              <div class="form-group">
                <textarea type="text" class="form-control" rows="4" placeholder="Your Address" name="address"></textarea>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Your Email" name="email">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="password">
              </div>
              <div class="form-group">
              <input type="password" class="form-control" placeholder="Confirm Password" name="cpassword">
              </div>
              <div class="form-group">
                <input type="submit" value="Register" name="register" class="btn btn-primary py-3 px-5">
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

		$add = mysqli_query($con,"INSERT INTO `register`(`r_name`, `r_phone`, `r_address`, `r_email`, `r_pass`) VALUES ('$name','$phone','$address','$email','$password')") or die(mysqli_error($con));

		if($add)
		{
			echo "<script>";
		echo "alert('Successfully Register...');";
		echo 'window.location.href="login.php";';
		echo "</script>";
		}
		else
		{
			echo "<script>";
			echo "alert('ERROR ! Registration Fail..!')";
			echo "</script>";
		}
	}

?>