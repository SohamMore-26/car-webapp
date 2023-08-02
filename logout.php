<?php
   session_start();
   session_destroy();

   echo "<script>";
   echo "alert('Logout successfully');";
   echo 'window.location.href="index.html";';
   echo "</script>";
?>