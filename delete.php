<?php
    include "config.php";

    if(isset($_GET['id']))
    {
        $delete = mysqli_query($con,"delete from car where id = '".$_GET['id']."'") or die(mysqli_error($con));
        if($delete)
        {
            echo "<script>";
            echo "alert('Car Deleted.....!');";
            echo "window.location.href='ad_car.php';";
            echo "</script>";
        }
        else
        {
            echo "<script>";
            echo "windoe.alert('Record Not Deleted.....!');";
            echo "window.location.href='view_registration.php';";
            echo "</script>";
        }
    }



?>