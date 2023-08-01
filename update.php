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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        function validateForm() {
            var x = document.forms["Register"]["name"].value;
            if (!isNaN(x) || x == "") {
                swal ( "ERROR !" ,  "Please Enter A Valid Name !" , "warning");
                return false ;
            }

            var x = document.forms["Register"]["phone"].value;
            if (isNaN(x) || x.length != 10) {
                swal ( "ERROR !" ,  "Please Enter A Valid Phone No. !" , "warning" );
                return false ;
            }

            var x = document.forms["Register"]["address"].value;
            if (x == "") {
                swal ( "ERROR !" ,  "Please Enter A Valid Address !" , "warning");
                return false ;
            }

            var x = document.forms["Register"]["email"].value;
            if (x == "") {
                swal ( "ERROR !" ,  "Please Enter A Valid Email !" , "warning");
                return false ;
            }

            var p = document.forms["Register"]["password"].value;
            if (p == "" || p.length<5  ) {
                swal ( "ERROR !" ,  "Please Enter Minimum 5 Digit Strong Password !" , "warning");
                return false ;
            }

            var y = document.forms["Register"]["cpassword"].value;
            if (y == "") {
                swal ( "ERROR !" ,  "Please Confirm Your Password Once Again !" , "warning");
                return false ;
            }
            if (y!=p) {
                swal ( "ERROR !" ,  "Passwords doesnt Match" , "warning");
                return false ;
            }

        }
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">Drive<span style = "color : white ; ">Ease</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
        </div>
    </nav>
    <!-- END nav -->
    <section class="ftco-section ftco-intro">
        <div class="overlay"></div>
        <div class="container">
            <div class="formup">
                <div class="col-md-8 block-9 mb-md-5">
                    <form action="#" class="bg-light p-5 contact-form" method="post" name="Register"
                        onsubmit="return validateForm()">
                        <h2 class="bg-light p-5 contact-form" style="font-size: 40px;
            font-weight: 600; margin-bottom: 0.5rem !important;">Update Here</h2>
                        <div class="form-group">
                            <input type="varchar" class="form-control" placeholder="Enter Car Name" name="car_name">
                        </div>
                        <div class="form-group">
                            <input type="varchar" class="form-control" placeholder="Enter Car Company" name="car_comp">
                        </div>
                        <div class="form-group">
                            <input type="varchar" class="form-control" placeholder="Enter Price" name="car_price">
                        </div>
                        <div class="form-group">
                            <input type="varchar" class="form-control" placeholder="Enter No. Of Seats" name="car_seat">
                        </div>
                        <div class="form-group">
                            <input type="radio" name="register" value="Ac" class="btn btn-primary py-3 px-5"> Ac
                            <input type="radio" name="register" value="Non Ac" class="btn btn-primary py-3 px-5"> Non Ac 
                        </div>
                        <div class="form-group">
                        Select Car Photo <input type="file" class="form-control" name="photo"> 
                        </div>
                        <div class="form-group">
                            <input type="submit" name="register" value="Update Now" class="btn btn-primary py-3 px-5">
                        </div>
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