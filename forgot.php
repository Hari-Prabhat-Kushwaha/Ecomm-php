<?php
require("includes/common.php");
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
	  	<form action="Forgot_script.php" method="POST">
	  		<div class="form-group">
	 		
	 		  <label><input type="email" class="form-control" placeholder="Registered Email" name="email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"></label>
        <br>
        <?php
        if(isset($_GET["m1"])){
        	echo $_GET['m1'];
        }
        ?>
	 		
	 		 <div><button type="submit" class="btn btn-primary " >Submit</button></div>
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