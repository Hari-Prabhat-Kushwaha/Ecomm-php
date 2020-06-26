<?php
require("includes/common.php");
if(!isset($_SESSION['email'])){
	header('location: index.php');
}
?>
<!DOCTYPE html>
 <html>
  <head>
  	<title>Digital Store|Setting</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></link>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link href="style.css" rel="stylesheet" type="text/css"/> 
  </head>
  <body>
 <br><br><br>
 <?php
     include("includes/header.php");
    ?>
	<div class="container">
	 <div class="row">
	   <div class="col-xs-4 col-xs-offset-4">
	 			<h4>Change Password</h4>
	  	<form action="Setting_script.php" method="POST">
	  		<div class="form-group">
	 		
	 		  <label><input type="password" class="form-control" placeholder="Old Password" name="old_password" required="true" pattern=".{6,}"></label>
        <label><input type="password" class="form-control" placeholder="New Password" name="new_password" required="true" pattern=".{6,}"></label>
        <label><input type="password" class="form-control" placeholder="Repeat New Password" name="repeat_new_password" required="true" pattern=".{6,}"></label><br>
        <?php
        if(isset($_GET["m1"])){
        	echo $_GET['m1'];
        }
        ?>
	 		
	 		 <div><button type="submit" class="btn btn-primary " >Change</button></div>
	 	   </div>
	  	</form>
	  </div>
	 </div>
	</div>
	<?php
    include("includes/footer.php");
    ?>
  </body>
</html>	