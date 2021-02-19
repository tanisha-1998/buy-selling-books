<?php

$showError=false;
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    include 'database_connect.php';
    $email=$_POST['LoginEmail'];
    $pass= $_POST['LoginPass'];
    
    $sql = "SELECT * from users where user_email='$email'";
    $result = mysqli_query($conn,$sql);
    $numRows =mysqli_num_rows($result);
    if ($numRows==1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($pass,$row['user_pass'])) {
        session_start();
        $_SESSION['loggedin']= true;
        $_SESSION['sno']= $row['s.no.'];
        $_SESSION['useremail']=$email;
        echo "loggedin" .$email;

        }
        header("location:/forum/index.php");
            
         
    }
}
?>