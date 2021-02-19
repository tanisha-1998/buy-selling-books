<?php
$showAlert=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
include 'partials/db-connect.php';
$username=$_POST["username"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];
$exists=false;


$existsSql="SELECT * FROM `tab` WHERE username = '$username'";
$result= mysqli_query($conn,$existsSql);
$numExistsRows=mysqli_num_rows($result);
if($numExistsRows>0){
  $showError=" username already exists.";
}
else {
  

if(($password==$cpassword)){
$hash= password_hash($password,PASSWORD_DEFAULT);  
$sql="INSERT INTO `tab` ( `username`, `password`, `dt`) VALUES ('$username', '$hash', current_timestamp())";
$result= mysqli_query($conn,$sql);
if ($result) {
  $showAlert=true;
}

}


else {
  $showError="password do not match.";
}
}

}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Signup</title>
  <style>

  .form-group{
      margin:auto;
  }

  </style>
  </head>
  <body>
    <?php require 'partials/nav.php'; ?>
    <?php
    if($showAlert){
    echo ' 
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>success!</strong> Your account is created and you can login.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    }
    if($showError){
      echo ' 
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>error!</strong> ' . $showError . '
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
      }
?>
    <div class="container">
    <h1 class="text-center" >Sign up to your website</h1>
    <form action="/login/signup.php" method=post>
  <div class="form-group "  >
    <label for="username">Username</label>
    <input type="text" maxlength="11" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp">
  </div>
  <div class="form-group "  >
    <label for="exampleInputPassword1">Password</label>
    <input type="password" maxlength="23" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="form-group "  >
    <label for="exampleInputPassword1"> confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword2"name="cpassword" >
  </div>
 
  <button type="submit" class="btn btn-primary my-4">Submit</button>
</form>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>