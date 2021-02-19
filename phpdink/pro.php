<?php
// $favcol = array( 'subham'=>'red','ravi'=>'blue', 'ram'=>'pink');
// // echo $favcol['ram'];
// foreach ($favcol as $key => $value) {
//     echo "fav color of $key is $value<br>";
// }

// echo"multi dimensional";
// //array ke andar arrray
// $multidim = array(array(2,5,7,8),
//             array(1,4,6,7),
//             array(4,9,0,0),
//             array(1,7,9,8)      );

// echo  $multidim[1][2] ;   
// for($i=0;$i<count($multidim);$i++){
// for ($j=0; $j <count($multidim[$i]) ; $j++) { 
//     // echo var_dump($multidim[$i]);
//     echo $multidim[$i][$j];
//     echo "   ";
// }   
// echo "<br>";
// }      

//local variable and global variable
echo "welcome to scope and local/global vars in php<br>";
$a=98;
function printvalue(){
    // $a =97;
    global $a;
    $a=90;
    echo "the value of your variable is $a";
}
echo $a;
printvalue();
echo var_dump ($GLOBALS["a"]);
?>