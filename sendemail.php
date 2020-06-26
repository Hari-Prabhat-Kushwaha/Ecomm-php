<?php
header('Contant-type: application/json');
$status=array('type'=>'success',
				'message'=>'Thank you for contact us. As early as possible  we will contact you');
 $name=@trim(stripslashes($_POST['name']));
 $email=@trim(stripslashes($_POST['email']));
 $message=@trim(stripslashes($_POST['message']));

 $email_from=$email;
 $email_to='admin@digitalstore.com';

 $body='Name:'.$name."\n\n".'Email:'.$email."\n\n".'Message:'.$message;
 $success=@mail($email_to,$subject,$body,'From:<'.$email_from.'>');
 ?>
 <!DOCTYPE HTML>
<html>
<body>
<h1 style="color:orange;">HERE IS A MESSAGE FOR YOU</h1>
<h2 style="color:green;">Thank you for contact us. As early as possible  we will contact you.</h2>
<?php
echo json_encode($status);
 die;
 ?>