<?php

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


$sql ="SELECT * FROM `phpt` WHERE `dest`= 'russia'";
$result =mysqli_query($conn , $sql);

echo "<br>";
//count number of rows
$rows= mysqli_num_rows($result);
echo $rows." rows in the database";
echo"<br>";

if ($rows>0) 
{
//     $disRow = mysqli_fetch_assoc($result);
//     echo var_dump($disRow);
//     echo"<br>";
//     $disRow = mysqli_fetch_assoc($result);
//     echo var_dump($disRow);
//     echo"<br>";
//     $disRow = mysqli_fetch_assoc($result);
//     echo var_dump($disRow);
// }

//we can fetch through loop the large data
while ($disRow = mysqli_fetch_assoc($result)) {
    echo var_dump($disRow);
    // echo $disRow['sr.no.']."hello".$disRow['name']."welcome to india".$disRow['dest'];
}
}

$sql ="UPDATE `phpt` SET `name` = 'v' WHERE `phpt`.`sr.no.` = 2";
$result =mysqli_query($conn , $sql);
echo var_dump($result);
$aff = mysqli_affected_rows($conn);
echo $aff." are affected";
if ($result) {
    echo "we updated the record successfully";
} 
else {
    echo "we could not update the record successfully";
}

?>