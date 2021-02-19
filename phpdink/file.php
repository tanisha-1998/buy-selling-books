<?php
echo "tanisha";
echo"<br> raavi";
$name="tanisha loves dancing";
$company="LTI";
$salary=600000;
echo "<br>";
echo "$name is working in $company and salary is $salary per annum";

//boolean
 $x= true;
$y=false;
echo "<br>";
echo  var_dump($x);
echo "<br>";

echo var_dump($y);

//object-instance of classes
//employee is a classs ---> harry can be one object
//array - used to store  multiple values in a single variable
$friends = array("riti","raavi","susi","surry");
echo var_dump ($friends);
echo"<br>";
echo $friends[0];
echo"<br>";
echo $friends[1];
echo"<br>";
echo $friends[2];
echo"<br>";
echo $friends[3];
echo"<br>";
$tril =null;
echo var_dump($tril);

echo strlen($name);
echo"<br>";
echo "the length of string"."of my name is". strlen($name);
echo"<br>";
echo str_word_count($name);
echo"<br>";
echo strrev($name);
echo"<br>";
echo strpos($name ,"loves");
echo"<br>";
echo str_replace("dancing","web development",$name);
echo"<br>";
echo str_repeat($name,20);
echo"<br>";
echo rtrim("<pre>  this shows trick  </pre>");
echo"<br>";
echo ltrim("<pre> this shows trick </pre>");


//arithmetic operators
$a=3;
$b=2;
echo "when you add a and b ,the result is ".($a+$b);
echo"<br>";
echo "when you subtract a and b ,the result is ".($a-$b);
echo"<br>";
echo "when you multiply a and b ,the result is ".($a*$b);
echo"<br>";
echo "when you divide a and b ,the result is ".($a/$b);
echo"<br>";
echo "when you divide (modulus) a and b ,the result is ".($a%$b);
echo"<br>";
echo "when you power a and b ,the result is ".($a**$b);
echo"<br>";

//assignment operators
$x=$a;
echo "the value of x is".($x);
echo"<br>";
$x+=$a;
echo "the value of x is".($x);
echo"<br>";
$x-=3;
echo "the value of x is".($x);
echo"<br>";
$x*=3;
echo "the value of x is".($x);
echo"<br>";
$x/=3;
echo "the value of x is".($x);
echo"<br>";
$x%=3;
echo "the value of x is".($x);
echo"<br>";


//comparison operators
$x=5;
$y=10;
echo "the value of x==y is ";
echo var_dump($x==$y);
echo"<br>";
$x=5;
$y=5;
echo "the value of x==y is".($x==$y);
echo"<br>";
echo "the value of x==y is ";
echo var_dump($x<$y);
echo"<br>";
echo "the value of x==y is ";
echo var_dump($x<>$y);
echo"<br>";

//logical operators
$m =true;
$n=false;
echo "for m and n result is ";
echo var_dump($m and $n);
echo"<br>";
echo "for m or n result is ";
echo var_dump($m or $n);
echo"<br>";
$m =true;
$n=true;
echo "for m and n result is ";
echo var_dump($m and $n);
echo"<br>";
$m =true;
$n=true;
echo "for m and n result is ";
echo var_dump($m && $n);
echo"<br>";
echo "for m or n result is ";
echo var_dump($m || $n);
echo"<br>";
echo "for not m  result is ";
echo var_dump(! $m );
echo"<br>";

//ifelse
$a=34;
$b=56;
if($a>78){
    echo "a is greater than 78";
}
else
{
    echo "a is less than 78";
}

//switch
$age=56;
switch($age){
    case 56:
        echo "the age is 56";
    break;

        case 23:
            echo "the age is 23 ";
        break;
            case 78:
                echo "the age is 78 ";
            break;
                default:
                echo "the age is beyond this numbers";
        break;
}

?>
