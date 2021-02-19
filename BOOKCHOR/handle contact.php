<?php
$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partial/dbconect.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];
    $feed = $_POST['feedback_type'];
    $comments = $_POST['comments'];

    $sql = "INSERT INTO `contact`(`name`,`email`,`city`,`zip`,`feedback type`,`comments`,`timestamp`) VALUES('$name','$email','$city','$zip','$feed','$comments', current_timestamp())";
    $result = mysqli_query($conn, $sql);

    if($result){
        $showAlert = true;
        session_start();
        $_SESSION['commentsuccess']= true;
        $_SESSION['username']=$name;
        header("Location: /BOOKCHOR/contact.php?commentsuccess=true");
        exit();
}
header("Location: /BOOKCHOR/contact.php?commentsuccess=false&error=$showError");
}
?>