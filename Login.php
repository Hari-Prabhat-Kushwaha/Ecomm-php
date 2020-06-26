<!DOCTYPE html>
<html lang="en">
<head>
  <title>Digital Store|Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login Form</h4>
        </div>
        <div class="modal-body">
         <form method="POST" action="Login_submit.php">
        <div class="form-group">
      <p>Don't have an account?<a href="signup.php">Register</a></p>
       <label><input type="email" class="form-control" placeholder="Email" name="email" required="true"></label><br><br>
       <label><input type="password" class="form-control" placeholder="Password" name="password" required="true"></label>
       <div class="form_group">
        <?php
         if(isset($_GET['m1'])){
               echo $_GET['m1'];
              }
              ?>
      
       <div><button type="submit" class="btn btn-primary " >Login</button></div>
       </div>
      </form> 
        </div>
       
          <a href="forgot.php">Forgot Password?</a>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>