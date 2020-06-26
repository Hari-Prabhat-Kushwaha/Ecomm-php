<?php
require("includes/common.php");
if(isset($_SESSION['email'])){
	header('location:home.php');
  }
?>
<!DOCTYPE html>
 <html>
  <head>
  	<title>Digital Store|SignUp Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></link>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 <link href="style.css" rel="stylesheet" type="text/css"/> 
  </head>
  <body>
  <br><br><br><?php
    include("includes/header.php");
    ?>
	<div class="container">
	 <div class="row">
	   <div class="col-xs-4 col-xs-offset-4">
	   	<?php
	 		 if(isset($_GET["m4"])){
	 		 	echo $_GET["m4"];
	 		 }
	 		 ?>
	 			<h1>SIGN UP</h1>
	  	<form method="POST" action="Signup_script.php">
	  		<div class="form-group">
	 		 <label><input type="text" class="form-control" placeholder="Name" name="name" required="true" pattern="[A-Za-z-0-9]+\s[A-Za-z-'0-9]+"></label>
	 		 <label><input type="email" class="form-control" placeholder="Email" name="email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"></label><?php
	 		 if(isset($_GET["m1"])){
	 		 	echo $_GET["m1"];
	 		 }
	 		 ?><label><input type="password" class="form-control" placeholder="Password" name="password" required="true" pattern=".{6,}"></label>
	 		 <label><input type="number" class="form-control" placeholder="Contact" name="contact" required="true" pattern=""></label><?php
	 		 if(isset($_GET['m2'])){
	 		 	echo $_GET['m2'];
	 		 }
	 		 ?>
             <label><input type="text" class="form-control" placeholder="City" name="city" ></label>
	 		 <label><input type="text" class="form-control" placeholder="Address" name="address" ></label>
	 		 <div><button type="submit" value="submit" class="btn btn-primary" >Submit</button></div>
	 	   </div>
	  	</form>
	  </div>
	 </div>
	</div><?php
    include("includes/footer.php");
    ?>
  </body>	
</html>	