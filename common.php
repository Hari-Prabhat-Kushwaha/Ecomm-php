<?php
ob_start();
     $con=mysqli_connect("localhost","root","Pr#vnv40*","digital_store") or die(mysqli_error($con));
    if(!isset($_SESSION)){
       session_start();
     }
?> 