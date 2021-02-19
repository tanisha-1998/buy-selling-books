<?php

$servername="localhost";
$username ="root";
$password ="";
$database="dbtanisha";

//for creating connection

$conn= mysqli_connect($servername,$username,$password,$database);

if (!$conn) {
    die("sorry we failed to connect".mysqli_connect_error());
} else {
    echo "connection was successful";
    
}


$sql ="DELETE  FROM `phpt` WHERE `dest` ='russia' LIMIT 3";
$result =mysqli_query($conn , $sql);
$aff = mysqli_affected_rows($conn);
echo $aff." are affected";

echo "<br>";

?>