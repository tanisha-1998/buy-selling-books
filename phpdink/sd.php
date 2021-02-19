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

$sql ="SELECT * FROM `phpt`";
$result =mysqli_query($conn , $sql);

echo "<br>";
//count number of rows
$rows= mysqli_num_rows($result);
echo $rows;


//display number of rows
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
    echo $disRow['sr.no.']."hello".$disRow['name']."welcome to india".$disRow['dest'];
        echo"<br>";
}
}
?>