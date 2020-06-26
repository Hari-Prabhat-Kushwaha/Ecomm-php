<?php
include("login.php");
?>
<!DOCTYPE HTML>
<html>
  <head>
     <title>Digital Store|header</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <link href="style.css" rel="stylesheet" type="text/css"/> 
  </head>
  <body>
  	<div class="navbar navbar-default navbar-fixed-top"> 
  		<div class="container">
  		 <div class="navbar-header"> 
  		 	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> 
  		 		<span class="icon-bar"></span>
  		 		 <span class="icon-bar"></span>
  		 		  <span class="icon-bar"></span> 
  		 		</button> <a class="navbar-brand" href="index.php">Digital Store </a> 
  		 </div> 
  		  <div class="collapse navbar-collapse" id="myNavbar"> 
  		 	<ul class="nav navbar-nav navbar-right"> 
  		 		<?php
  		 			if (isset($_SESSION['email']))
  		 			 { ?> 
  		 			  	<li><a href = "confirm.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
  		 			  	 <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li> 
  		 			  	 <li><a href = "logout.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li> 
  		 			  	 <?php
  		 			  	 } else { 
  		 			  	 ?> 
  		 			  	 <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
  		 			  	  <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Log in</a></li>
                  <li><a href = "contact.php"><span class = "glyphicon glyphicon-phone"></span> Contactus</a></li>
                 <li><a href = "about.php"><span class = "glyphicon glyphicon-th-list"></span> Aboutus</a></li>
  		 			  	<?php 
  		 			  	} 
  		 			  	?> 
  		 			  	</ul> 
  		  </div>
  		</div>
  	 </div>