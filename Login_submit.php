<?php
require("includes/common.php");
$email = $_POST['email'];
$email = mysqli_real_escape_string($con,$email);
$password = $_POST['password'];
$password = mysqli_real_escape_string($con,$password);
$password = md5($password);

$select_query="SELECT id,email FROM users WHERE email='".$email."' AND password='".$password."'";
$select_query_result=mysqli_query($con,$select_query) or die(mysql_error($con));
$num = mysqli_num_rows($select_query_result);

if($num==0){
    $error=$$_GET['error'];
	$error="<h2>Please SignUp First!</h2>";
	header('location:signup.php?m4=' .$error);
   }else{
    $row=mysqli_fetch_array($select_query_result);
    $_SESSION['email']=$row['email'];
    $_SESSION['id']=$row['id'];
    header('location:home.php');	
}
?>