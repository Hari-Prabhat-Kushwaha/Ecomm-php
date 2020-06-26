<?php
ob_start();
require("includes/common.php");
if(!isset($_SESSION['email'])){
	header('location:index.php');
}

$new_password = $_POST['new_password'];
$new_password = mysqli_real_escape_string($con,$new_password);
$new_password = MD5($new_password);

$old_password = $_POST['old_password'];
$old_password = mysqli_real_escape_string($con,$old_password);
$old_password = MD5($old_password);

$repeat_new_password = $_POST['repeat_new_password'];
$repeat_new_password = mysqli_real_escape_string($con,$repeat_new_password);
$repeat_new_password = MD5($repeat_new_password);

  $mysql_select_query = "SELECT email,password FROM users WHERE email='".$_SESSION['email']."'";
  $mysql_select_query_result = mysqli_query($con,$mysql_select_query);
  $row=mysqli_fetch_array($mysql_select_query_result);
  $original_password = $row['password'];

if($new_password != $repeat_new_password){
    header('location:settings.php?m1=two password don\'t match.');
  }
else {
       if($old_password == $original_password){
  	  $mysql_update_query = "UPDATE users SET password='".$new_password."' WHERE email='".$_SESSION['email']."'";
  	  mysqli_query($con,$mysql_update_query) or die(mysqli_error($con));
      header('location: settings.php?m1=Password Updated');
      }else
  	  header('location:settings.php?m1=Enter right password.');
     }
?>   

