<?php
require("includes/common.php");
if(!isset($_SESSION['email'])){
  if(!headers_sent()){
  header('location:index.php');}
   }
?>
<!DOCTYPE html>
 <html>
  <head>
    <title>Digital Store|Cart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></link>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link href="style.css" rel="stylesheet" type="text/css"/> 
  </head>
  <body>
  	   <?php
    include("includes/header.php");
    ?><br><br><br>
	

   <div class="container">
    <div class="col-sm-6 col-sm-offset-3">
   
      <table class="table table-striped">
   <?php
   $sum=0;
   $id='';
   $user_id=$_SESSION['id'];
   $query="SELECT items.price AS Price,items.id,items.name AS Name FROM user_items JOIN items ON user_items.item_id=items.id WHERE user_id='$user_id' AND status='Added to cart'";
   $result = mysqli_query($con, $query)or die($mysqli_error($con));
   $num_rows=mysqli_num_rows($result);?>
   <thead> <tr><th>Item Number</th><th>Price</th><th>  </th></tr></thead>
       <tbody>
        <?php
   if($num_rows>=1){
    while($row=mysqli_fetch_array($result)){
      $sum=$sum+$row["Price"];
      $id.=$row["id"].",";
      echo"<tr><td>"."#".$row["id"]."</td><td>Rs".$row["Price"]."</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'>Remove</a></td></tr>";
    }
       $id=rtrim($id,",");
       echo"<tr><td>Total</td><td>Rs".$sum."</td><td>   
       <a href='success.php?item_id=".$id."' class='btn btn-primary'>Confirm Order</a></td></tr>";
        ?> 
      </tbody>
      <?php
      }
      ?>
        </table>
     </div> 
 
   </div>
   <?php include("includes/footer.php");
   ?>    
  </body>
</html>