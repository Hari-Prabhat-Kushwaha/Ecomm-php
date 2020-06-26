<?php
require("includes/common.php");
$user_id=$_SESSION['id'];
$item_id=$_GET['id'];
$mysql_delete_query="DELETE FROM user_items WHERE user_id='$user_id' and item_id='$item_id' ";
$mysqli_query_result=mysqli_query($con,$mysql_delete_query);
header('location:confirm.php');
?>
