<?php

$showError=false;
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    include 'dbconect.php';
   
    $email=$_POST['loginName'];
    $pass= $_POST['loginpassword'];
    
    $sql = "SELECT * from bookusers where name='$email'";
    
    $result = mysqli_query($conn,$sql);
   
    $numRows =mysqli_num_rows($result);
    if ($numRows==1) {
        $row = mysqli_fetch_assoc($result);
      
        // if (password_verify($pass,$row['password'])) {
        session_start();
        $_SESSION['loggedin']= true;
        $_SESSION['userEmail']=$email;
        // echo "loggedin" .$email;
        echo"logged in ".$email;

        }
       header("location:/bookchor/welcome.php");
    
}

 ?>