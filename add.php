<?php
session_start();
if (!isset($_SESSION['loggedin1']) || $_SESSION['loggedin1'] != true) {
    $showError = "Login Failed...!";
    header("location: ad_login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Carbook - Add Car</title>
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
        function validateForm() {
            var x = document.forms["Register"]["car_name"].value;
            if (!isNaN(x) || x == "") {
                swal("ERROR !", "Please Enter Car Name !", "warning");
                return false;
            }

            var x = document.forms["Register"]["car_comp"].value;
            if (!isNaN(x) || x == "") {
                swal("ERROR !", "Please Enter Car Company Name !", "warning");
                return false;
            }

            var x = document.forms["Register"]["car_price"].value;
            if (x == "") {
                swal("ERROR !", "Please Enter Price !", "warning");
                return false;
            }

            var x = document.forms["Register"]["car_seat"].value;
            if (x == "") {
                swal("ERROR !", "Please Enter Seat  !", "warning");
                return false;
            }
        }
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-dark" id="ftco-navbar"
        style="background-color: #00aa73; padding: 20px;">
        <div class="container">
            <a class="navbar-brand" href="ad_index.php">Drive<span>Ease</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item" style="padding-right: 10px"><a href="ad_index.php" class="nav-link">Contact
                            Queries</a></li>
                    <li class="nav-item" style="padding-right: 10px"><a href="ad_record.php" class="nav-link">User
                            Record</a></li>
                    <li class="nav-item" style="padding-right: 10px"><a href="bookrec.php" class="nav-link">Booking
                            Record</a></li>
                    <li class="nav-item" style="padding-right: 10px"><a href="ad_car.php" class="nav-link">Update
                            cars</a></li>
                    <li class="nav-item active" style="padding-right: 10px"><a href="add.php" class="nav-link">Add
                            cars</a>
                    </li>
                    <?php
                if (!isset($_SESSION['loggedin1']) || $_SESSION['loggedin1'] != true) {
                    echo ' <li class="nav-item" style="padding-right: 10px"><a href="login.php" class="nav-link">Login</a>';
                }
                else{
					echo ' <li class="nav-item" style="padding-right: 10px"><a href="logout.php" class="nav-link">Logout</a>';
					echo  '<li class="nav-item" style="padding-right: 10px"><a href="ad_profile.php" class="nav-link"><svg
								xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
								class="bi bi-person-circle" viewBox="0 0 16 16">
								<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
								<path fill-rule="evenodd"
									d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
							</svg></a></li>';
                }

            ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- <section class="hero-wrap hero-wrap-3 js-fullheight" style="background-image: url('images/bg_3.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Cars <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">Add New Car</h1>
                </div>
            </div>
        </div>
    </section> -->
    <!-- END nav -->
    <div class="bg-image h-100" style="background-color: #f5f7fa" ;>
        <div class="mask d-flex align-items-center h-100">
            <div class="row justify-content-center">
                <div style="margin: 50px ;">
                    <div class="row">
                        <div class="col-md-12 offset-md-2">
                            <div class="col-md-12 offset-md-2">
                                <div class="col-md-12 offset-md-2">
                                    <div class="col-md-12 offset-md-2">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4>Add Car</h4>
                                            </div>
                                            <div class="card-body">
                                                <form class="bg-light p-5 contact-form" method="post" name="Register"
                                                    onsubmit="return validateForm()">
                                                    <h2 class="bg-light p-5 contact-form" style="font-size: 40px;
                            font-weight: 600; margin-bottom: 0.5rem !important;">Add New Car</h2>
                                                    <div class="form-group">
                                                        <label for="" class="label">Select Car Category</label><br>
                                                        <select class="form-control" id="cars" name="car_category">
                                                            <option class="form-control" value="">Select Car Category
                                                            </option>
                                                            <option class="form-control" value="Suv">Suv</option>
                                                            <option class="form-control" value="Sedan">Sedan</option>
                                                            <option class="form-control" value="Hatchback">Hatchback
                                                            </option>
                                                            <option class="form-control" value="Compact">Compact
                                                            </option>
                                                            <option class="form-control" value="Crossover">Crossover
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="varchar" class="form-control"
                                                            placeholder="Enter Car Name" name="car_name">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="varchar" class="form-control"
                                                            placeholder="Enter Car Company" name="car_comp">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="varchar" class="form-control"
                                                            placeholder="Enter Price" name="car_price">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="varchar" class="form-control"
                                                            placeholder="Enter No. Of Seats" name="car_seat">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="varchar" class="form-control"
                                                            placeholder="Enter Car Number" name="car_no">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="varchar" class="form-control"
                                                            placeholder="Enter Car Owner" name="car_own">
                                                    </div>
                                                    <div class="form-group">
                                                        A/C
                                                        <br><input type="radio" name="car_ac" value="Yes"
                                                            class="btn btn-primary py-3 px-5"> Yes
                                                        <input type="radio" name="car_ac" value="No"
                                                            class="btn btn-primary py-3 px-5"> No
                                                    </div>
                                                    <div class="form-group">
                                                        Select Car Photo <input type="file" class="form-control"
                                                            name="photo">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="submit" name="add" value="Add Now"
                                                            class="btn btn-primary py-3 px-5">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

if (isset($_POST['add'])) {
    extract($_POST);
    // if ($name) {

    //     $upload = "images/";
    //     $imgExt = strtolower(pathinfo($name, PATHINFO_EXTENSION));
    //     $valid_ext = array('jpg', 'png', 'jpeg');
    //     $photo = rand(1000, 1000000) . "." . $imgExt;
    //     move_uploaded_file($temp, $upload . $photo);
    // }

    $add = mysqli_query($con, "insert into car(car_category,car_name, car_comp, car_price,car_seat,car_no,car_ac,photo,car_own) values('$car_category','$car_name','$car_comp','$car_price','$car_seat','$car_no','$car_ac','$photo','$car_own')") or die(mysqli_error($con));
    if ($add) {
        echo "<script>";
        echo "window.alert('Car Added successfully.....!')";
        echo "</script>";
    } else {
        echo "<script>";
        echo "window.alert('Error To Add...!')";
        echo "</script>";
    }
}
?>