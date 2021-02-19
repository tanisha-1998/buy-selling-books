<?php

$showError=false;
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    include 'database_connect.php';
    $user_email=$_POST['signupEmail'];
    $pass= $_POST['signupPassword'];
    $cpass = $_POST['signupCPassword'];


    //check whether email exists
    $existSql = "select * from `users` where user_email='$user_email'";
    $result = mysqli_query($conn , $existSql);
    $numRows =mysqli_num_rows($result);
    if ($numRows>0) {
        $showError ="Email is already in use";
    }
    else {
        if ($pass==$cpass) {
            $hash = password_hash($pass,PASSWORD_DEFAULT);
            $sql="INSERT INTO `users` ( `user_email`, `user_pass`, `tstamp`) VALUES ( '$user_email', '$hash', current_timestamp())";
            $result=mysqli_query($conn , $sql);
            if ($result) {
                $showAlert = true;
                header("location:/forum/index.php?signupsuccess=true");
                exit();

            }
        }
        else {
            $showError="password do not match";
            
        }
    }
    header("location:/forum/index.php?signupsuccess=false&error=$showError");
    }

elseif($showError==true){ 
    echo'<div class="alert alert-warning alert-dismissible fade show my-0" role="alert">
              <strong>warning!</strong> error found
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
  }
  

?>
