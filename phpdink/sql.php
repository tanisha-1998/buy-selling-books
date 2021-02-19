<?php
echo " welocome to the codesmashers";
echo "<br>";
//for connecting to the database
$servername="localhost";
$username ="root";
$password ="";

//for creating connection

$conn= mysqli_connect($servername,$username,$password);

if (!$conn) {
    die("sorry we failed to connect".mysqli_connect_error());
} else {
    echo "connection was successful";
    
}
// create a db

$sql ="CREATE DATABASE dbtanisha";
$result =mysqli_query($conn , $sql);
//check for database connection
if ($result) {
    echo "the db was created successfully";
} else {
    echo "the db was not created successfully".mysqli_error($conn);
}



echo var_dump ($result);


?>