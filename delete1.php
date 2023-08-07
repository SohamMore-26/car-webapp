<?php
    include "config.php";

    if(isset($_GET['c_id']))
    {
        $delete = mysqli_query($con,"delete from contact where c_id = '".$_GET['c_id']."'") or die(mysqli_error($con));
        if($delete)
        {
            echo "<script>";
            echo "alert('Query Deleted.....!');";
            echo "window.location.href='ad_index.php';";
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