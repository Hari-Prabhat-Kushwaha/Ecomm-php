<?php
require("includes/common.php");
if(!isset($_SESSION['id'])){
  header('location:index.php');
}
$id=$_SESSION['id'];
$mysql_update_query="UPDATE user_items SET status='Confirmed' WHERE user_id='$id' ";
    $mysql_select_query_result=mysqli_query($con,$mysql_update_query);
?>
<!DOCTYPE html>
 <html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></link>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link href="style.css" rel="stylesheet" type="text/css"/>
    <style>
    
    </style>
  </head>
  <body>
    <?php
    include("includes/header.php");
    ?>
  	  <br><br><br>
	<div class="container">
    <center>
      <h1>Your order is confirmed.</h1> 
      <h2 style="color:red;">Thank you for Ordering from Digital Store.</h2> 
      <h1>Order some more electronic items <a href="home.php">here</a> </h1>
    </center>
  </div>
   <?php
    include("includes/footer.php");
    ?>
 </body>
</html>	