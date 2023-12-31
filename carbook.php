<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    $showError = "Login Failed...!";
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Welcome -
        <?php echo $_SESSION['name'] ?>
    </title>
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
</head>

<body>
    <?php
    include "config.php";
    if (isset($_GET['id'])) {
        $view = mysqli_query($con, "select * from car where id = '" . $_GET['id'] . "'") or die(mysqli_error($con));
        $row = mysqli_fetch_array($view);
    }
    ?>
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

                    <li class="nav-item" style="padding-right: 10px"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item active" style="padding-right: 10px"><a href="car1.php" class="nav-link">Cars</a>
                    </li>
                    <li class="nav-item" style="padding-right: 10px"><a href="contact.php" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item" style="padding-right: 10px"><a href="logout.php" class="nav-link">Logout</a>
                    </li>
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
    <!-- END nav -->

    <section class="ftco-section ftco-no-pt bg-light">
        <div class="container" style="margin-top: 50px;">
            <div class="breadup">
                <h1 class="mb-3 bread">Rent Here</h1>
            </div>
            <form class="request-form  bg-primary" method="post" name="Booking"
                onsubmit="return check()">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Your details</h2>
                        <div class="form-group">
                            <label for="" class="label">Name</label>
                            <input type="text" class="form-control" placeholder="Name" name="c_name" readonly
                                value="<?php echo $_SESSION['name'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="" class="label"> Your Car</label><br>
                            <input type="text" class="form-control" placeholder="Your Car" name="cars" readonly
                                value="<?php echo $row['car_name'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="" class="label"> Car Number</label><br>
                            <input type="text" class="form-control" placeholder="Your Car" name="carno" readonly
                                value="<?php echo $row['car_no'] ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2>Enter additional details</h2>
                        <div class="form-group">
                            <label for="" class="label">Pick-up location</label>
                            <input type="text" class="form-control" placeholder="City, Airport, Station, etc"
                                name="pick_loc" required min="">
                        </div>
                        <div class="form-group">
                            <label for="" class="label">Drop-off location</label>
                            <input type="text" class="form-control" placeholder="City, Airport, Station, etc"
                                name="drop_loc" required>
                        </div>
                        <div class="d-flex">
                            <div class="form-group">
                                <label class="label">Pick-up date</label>
                                <input type="date" class="form-control" id="pick_date" placeholder="Date"
                                    name="pick_date" required min="">
                            </div>
                            <div class="form-group">
                                <label class="label">Drop-off date</label>
                                <input type="date" class="form-control" id="drop_date" placeholder="Date"
                                    name="drop_date" required min="">
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

    var todayDate1 = new Date();
    var tdate1 = todayDate1.getDate();
    var month1 = todayDate1.getMonth() + 1;
    var year1 = todayDate1.getUTCFullYear() - 0;
    if (month1 < 10) {
        month1 = "0" + month1
    }
    if (tdate1 < 10) {
        tdate1 = "0" + tdate1;
    }
    var mindate1 = year1 + "-" + month1 + "-" + tdate1;
    document.getElementById("drop_date").setAttribute("min", mindate1); 
</script> 

</html>
<?php

include "config.php";
if (isset($_POST['book'])) {
    extract($_POST);

    $add = mysqli_query($con, "INSERT INTO `book`(`name`, `car`, `carno`, `pick_loc`, `drop_loc`, `pick_date`,`drop_date`, `pick_time`) VALUES ('$c_name','$cars','$carno','$pick_loc','$drop_loc','$pick_date','$drop_date','$pick_time')") or die(mysqli_error($con));
    if ($add) {
        echo "<script>";
        echo "swal('Car Booked Successfully ...');";
        echo "</script>";
    } else {
        echo "<script>";
        echo "swal('ERROR ! Registration Fail..!')";
        echo "</script>";
    }
}

?>