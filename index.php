<?php 
require("includes/common.php");
if(isset($_SESSION['email'])){
	header("location:home.php");
}
?>
<!DOCTYPE html>
<html>
 <head>
     <title>Digital Store|Index</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <link href="style.css" rel="stylesheet" type="text/css"/> 
  </head>
<body style="margin-bottom:100px; margin-top:50px;">
	
	   <?php
     include("includes/header.php");
    include("includes/Check-if-added.php");
    ?><br>
      <div class=" row col-md-4 col-sm-6">
       
               <div class="thumbnail">
                 <img src="images/3.webp" class="img-responsive" alt="img-1">
                   <center>
                      <div class="caption">
                          <h5>Dt830d Multimeter</h5>
                          <p>Price:Rs.399.00</p>
                             <?php if (!isset($_SESSION['email'])) 
                                  { ?> 
                                 <p><a href="#" data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Order Now!</a></p>
                                 <?php } 
                               else 
                                     { if (check_if_added_to_cart(1)) 
                                        {  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } 
                                    else 
                                      { ?> <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                  <?php } 
                                     } ?>
                          
                          
                         
                      </div>
                   </center>
               </div>

               <div class="thumbnail">
                 <img src="images/2.webp" class="img-responsive" alt="img-1">
                   <center>
                      <div class="caption">
                          <h5>Bexo Mini Scale</h5>
                          <p>Price:Rs.370.00</p>

                           <?php if (!isset($_SESSION['email'])) 
                                  { ?> 
                                 <p><a href="#" data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Order Now!</a></p>
                                 <?php } 
                               else 
                                     { if (check_if_added_to_cart(3)) 
                                        {  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } 
                                    else 
                                      { ?> <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                  <?php } 
                                     } ?>

                          
                      </div>
                   </center>
               </div>

        </div>

        <div class=" row col-md-4 col-sm-6">
       
               <div class="thumbnail">
                 <img src="images/12.webp" class="img-responsive" alt="img-1">
                   <center>
                      <div class="caption">
                          <h5>Kids Mart TAB</h5>
                          <p>Price:Rs.489.00</p>

                           <?php if (!isset($_SESSION['email'])) 
                                  { ?> 
                                 <p><a href="#" data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Order Now!</a></p>
                                 <?php } 
                               else 
                                     { if (check_if_added_to_cart(5)) 
                                        {  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } 
                                    else 
                                      { ?> <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                  <?php } 
                                     } ?>

                          
                      </div>
                   </center>
               </div>
               <div class="thumbnail">
                 <img src="images/14.webp" class="img-responsive" alt="img-1">
                   <center>
                      <div class="caption">
                          <h5>Jack Thermometer</h5>
                          <p>Price:Rs.2299.00</p>

                           <?php if (!isset($_SESSION['email'])) 
                                  { ?> 
                                 <p><a href="#" data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Order Now!</a></p>
                                 <?php } 
                               else 
                                     { if (check_if_added_to_cart(7)) 
                                        {  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } 
                                    else 
                                      { ?> <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                  <?php } 
                                     } ?>

                         
                      </div>
                   </center>
               </div>
             </div>
                     <div class=" row col-md-4 col-sm-6">
       
              <div class="thumbnail">
                 <img src="images/22.webp" class="img-responsive" alt="img-1">
                   <center>
                      <div class="caption">
                          <h5>SF 400 Scale</h5>
                          <p>Price:Rs.1499.00</p>

                           <?php if (!isset($_SESSION['email'])) 
                                  { ?> 
                                 <p><a href="#" data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Order Now!</a></p>
                                 <?php } 
                               else 
                                     { if (check_if_added_to_cart(9)) 
                                        {  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } 
                                    else 
                                      { ?> <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                  <?php } 
                                     } ?>

                         
                      </div>
                   </center>
               </div>

               <div class="thumbnail">
                 <img src="images/9.webp" class="img-responsive" alt="img-1">
                   <center>
                      <div class="caption">
                          <h5>Skmei Watch</h5>
                          <p>Price:Rs.649.00</p>

                           <?php if (!isset($_SESSION['email'])) 
                                  { ?> 
                                 <p><a href="#" data-toggle="modal" data-target="#myModal" role="button" class="btn btn-primary btn-block">Order Now!</a></p>
                                 <?php } 
                               else 
                                     { if (check_if_added_to_cart(11)) 
                                        {  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } 
                                    else 
                                      { ?> <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                  <?php } 
                                     } ?>

                          
                      </div>
                   </center>
               </div>
             </div>
             <div>
  <h1>First Login to confirm your Order!</h1>
  </div>

  <?php
  include("includes/footer.php");
  ?>
</body>
</html>
 