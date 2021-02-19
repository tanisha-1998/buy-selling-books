<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "this is title";?></title>
</head>
<body>
    
<?php
// $i=0;
// $x=0;
// while ($i<60 && $x <10) {
//     echo $i+1;
//     echo "<br>";
//     $i++;
//     $x--;
// }

// for ($i=1; $i <=10 ; $i++) { 
//   echo 2*$i;
//   echo "<br>";
// }
// $a=1;
// echo  "the table of two is";
// do {
//   echo 2*$a;
//   echo "<br>";
//   $a++;
// } while ($a <= 10);

// $arr = array("banana" , "apple" , "pear");
// // for ($i=0; $i < count($arr) ; $i++) { 
// //     echo $arr[$i];
// //     echo "<br>";
// // }

// foreach ($arr as $value) {
//  echo "$value <br>";
// }

//functions

// echo "welcome to the functions";
// function processmarks($marksArr){
//     $sum=0;
//     foreach ($marksArr as $value) {
//         $sum += $value;

//     }
//     return $sum;
// }

// $rohan =[30,30,20,10,40];
//  $sumMarks = processmarks($rohan);
//  echo "total marks scored by rohan out of 250 $sumMarks";

// current date

$d = date(" d l");
echo "todays date is $d";
?>


</body>
</html>