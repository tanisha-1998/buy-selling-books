<?php
echo " welocome to the codesmashers";
echo "<br>";
//for connecting to the database
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


//for creating a table
$sql = "CREATE TABLE `phpt` ( `sr.no.` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(11) NOT NULL , `role` VARCHAR(11) NOT NULL,`dest` VARCHAR(6) NOT NULL ,PRIMARY KEY (`sr.no.`))";
 
$result =mysqli_query($conn , $sql);
//check for table creation success
if ($result) {
    echo "the table was created successfully";
} else {
    echo "the table was not created successfully".mysqli_error($conn);
}


?>