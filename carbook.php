<!DOCTYPE html>
<html lang="en">

<head>
    <title>Welcome -  </title>
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
        function validate() {
            var x = document.forms["Booking"]["pick_loc"].value;
            if (x == "") {
                swal ( "ERROR !" ,  "Please Enter A Pickup Location!" , "error");
                return false ;
            }

            var x = document.forms["Booking"]["drop_loc"].value;
            if (x=="") {
                swal ( "ERROR !" ,  "Please Enter A Drop Location !" , "error" );
                return false ;
            }

            var x = document.forms["Booking"]["pick_date"].value;
            if (x == "") {
                swal ( "ERROR !" ,  "Please Enter A Pickup Date!" , "error");
                return false ;
            }

            var x = document.forms["Booking"]["drop_date"].value;
            if (x == "") {
                swal ( "ERROR !" ,  "Please Enter A Drop Date !" , "error");
                return false ;
            }

            var x = document.forms["Booking"]["pick_time"].value;
            if (x == ""  ) {
                swal ( "ERROR !" ,  "Please Enter A Pickup Time !" , "error");
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
                    <li class="nav-item active"><a href="carbook.php" class="nav-link">Booking</a></li>
                    <li class="nav-item"><a href="car1.php" class="nav-link">Cars</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                    <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('images/bg_1.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
                <div class="col-lg-8 ftco-animate">
                    <div class="text w-100 text-center mb-md-5 pb-md-5">
                        <h1 class="mb-4">Fast &amp; Rent Yourself A Car Now! </h1>
                        <p style="font-size: 18px;">A small river named Duden flows by their place and supplies it with
                            the necessary regelialia. It is a paradisematic country, in which roasted parts</p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-no-pt bg-light">
    <?php
    include "config.php";
    $view = mysqli_query($con, "select * from car") or die(mysqli_error($con));
    ?>
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-12	featured-top">
                    <div class="row no-gutters">
                        <div class="col-md-4 d-flex align-items-center">
                            <form class="request-form ftco-animate bg-primary" method="post" name="Booking"
                        onsubmit="return validate() || return validateDate()">
                                <h2>Make your trip</h2>
                                <div class="form-group">
                                    <label for="" class="label">Pick-up location</label>
                                    <input type="text" class="form-control" placeholder="City, Airport, Station, etc" name="pick_loc"  required min="">
                                </div>
                                <div class="form-group">
                                    <label for="" class="label">Drop-off location</label>
                                    <input type="text" class="form-control" placeholder="City, Airport, Station, etc" name="drop_loc" required>
                                </div>
                                <div class="form-group">
                                    <label for="" class="label">Select your Car</label><br>
                                    <select class="form-control" id="cars" name="cars">
                                        <option style="background-color:#007bff !important;" value="select">Select Your Car</option>
                                    <?php
                        while ($row = mysqli_fetch_array($view)) {
                          extract($row); ?>
                                        <option style="background-color:#007bff !important;" value=""><?php echo $row['car_name']; ?></option>
                                        <?php } ?>  
                                    </select>
                                      
                                </div>
                                <div class="d-flex">
                                    <div class="form-group mr-2">
                                        <label for="" class="label">Pick-up date</label>
                                        <input  type="date" class="form-control"  id="pick_date" placeholder="Date" name="pick_date" required min="">
                                    </div>
                                    <div class="form-group ml-2">
                                        <label for="" class="label">Drop-off date</label>
                                        <input id="drop_date" type="text" class="form-control"  placeholder="Date" name="drop_date" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="label">Pick-up time</label>
                                    <input type="time" class="form-control" id="" placeholder="Time" name="pick_time" required>
                                </div>
                                <div class="form-group">
                                    <input name="book" type="submit" value="Rent A Car Now" class="btn btn-secondary py-3 px-4">
                                </div>
                            </form>
                        </div>
                        <div class="col-md-8 d-flex align-items-center">
                            <div class="services-wrap rounded-right w-100">
                                <h3 class="heading-section mb-4">Better Way to Rent Your Perfect Cars</h3>
                                <div class="row d-flex mb-4">
                                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                        <div class="services w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                    class="flaticon-route"></span></div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2">Choose Your Pickup Location</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                        <div class="services w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                    class="flaticon-handshake"></span></div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2">Select the Best Deal</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                        <div class="services w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span
                                                    class="flaticon-rent"></span></div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2">Reserve Your Rental Car</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <p><a href="car.html" class="btn btn-primary py-3 px-4">Reserve Your Perfect Car</a></p> -->
                            </div>
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
<script>

    var todayDate = new Date();
    var tdate = todayDate.getDate();
    var month = todayDate.getMonth() + 1;
    var year = todayDate.getUTCFullYear() - 0;
    if (month < 10) {
        month = "0" + month
    }
    if (tdate < 10) {
        tdate = "0" + tdate;
    }
    var mindate = year + "-" + month + "-" + tdate;
    document.getElementById("pick_date").setAttribute("min", mindate);
</script>
</html>
<?php

    include "config.php";
    if(isset($_POST['book']))
	{
		extract($_POST);

		$add = mysqli_query($con,"insert into book(pick_loc	, drop_loc , pick_date , drop_date , pick_time)values('$pick_loc','$drop_loc','$pick_date','$drop_date','$pick_time')") or die(mysqli_error($con));

		if($add)
		{
			echo "<script>";
			echo "swal('Car Booked..!')";
			echo "</script>";
		}
		else
		{
			echo "<script>";
			echo "swal('Error..!' , Car not Booked ! , 'errors')";
			echo "</script>";
		}
	}

?>