<?php
ob_start();
require("includes/common.php");

$name = $_POST['name'];
$name=mysqli_real_escape_string($con,$name);

$email=$_POST['email'];
$email=mysqli_real_escape_string($con,$email);

$password=$_POST['password'];
$password=mysqli_real_escape_string($con,$password);

$contact=$_POST['contact'];
$contact=mysqli_real_escape_string($con,$contact);

$city=$_POST['city'];
$city=mysqli_real_escape_string($con,$city);

$address=$_POST['address'];
$address=mysqli_real_escape_string($con,$address);

$regex_email="/^[_a-z0-9]+(\.[a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$regex_num="/^[789][0-9]{9}$/";

$select_query="SELECT * FROM users WHERE email='$email' ";
$select_query_result=mysqli_query($con,$select_query)or die(mysqli_error($con));
$select_query_rows=mysqli_num_rows($select_query_result);
 $password=md5($password);
if($select_query_rows != 0){
  $m="<span class='red'>email already exist</span>";
	header('Location: signup.php?m1='.$m);
  }
  else if(!preg_match($regex_email,$email)){
  $m="<span class='red'>enter correct email</span>";
	header('location: signup.php?m1=' .$m);
  }
  else if(!preg_match($regex_num,$contact)){
  $m="<span class='red'>enter correct contact</span>";
	header('location: signup.php?m2=' .$m);
  }
else{
 $user_registration_query="INSERT INTO users(name, email, password, contact, city, address)VALUES('".$name."','".$email."','".$password."','".$contact."','".$city."','".$address."')";
 $user_registration_submit=mysqli_query($con,$user_registration_query) or die(mysql_error($con));
 $_SESSION['email']= $email;
 $user_id= mysqli_insert_id($con);
 $_SESSION['id']= $user_id;
 header('location: home.php');
}
?>
