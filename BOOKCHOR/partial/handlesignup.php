<?php
$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconect.php';
    $name = $_POST['signupName'];
    $email = $_POST['signupEmail'];
    $pass = $_POST['password'];
    $cpass = $_POST['cPassword'];

    $existSql = "select * from `bookusers` where Email = '$email'";
    $result= mysqli_query($conn , $existSql);
    $numRows = mysqli_num_rows($result);
    if($numRows>0){
        $showError = "email already in  use";
    }
    else{
        if($pass == $cpass){
            $hash = password_hash($pass , PASSWORD_DEFAULT);
            $sql = "INSERT INTO bookusers(`name`,`Email`,`password`,`Date and Time`) VALUES('$name','$email','$hash', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if($result){
                $showAlert = true;
                session_start();
                $_SESSION['signup']= true;
                $_SESSION['userEmail']=$name;
                header("Location: /BOOKCHOR/welcome.php?signupsuccess=true");
                exit();
        }
        }
        else{
            $showError = "Password do not match";
            
        }
    }
    header("Location: /BOOKCHOR/welcome.php?signupsuccess=false&error=$showError");
}

?>