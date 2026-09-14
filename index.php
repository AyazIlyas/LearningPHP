<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body {
        /* background: black; */
        /* color: white; */
        /* font-weight: 700; */
    }
</style>

<body>


<h1 style="text-align: center;">This is my first day work in PHP</h1>


<div class="my_div">
    <h3>What is PHP</h3>
<ul>
    <li>PHP is a <b>Hypertext Preprocessor</b> language </li>
    <li>PHP is a <b>Server Side Scripting</b> language </li>
    <li>PHP is used for <b>Web Applications</b> & <b>Web Development</b> </li>
</ul>
</div>




    
<?php 

// $my = "value for varible";
/* $my_1 = correct
$my_ = correct */

// define("hello", "This is Ayaz"); This is constant varaible
// echo hello;




// $value1 = 5;
// $value2 = 5;
// $new_value = $value1 % $value2;
// echo $new_value  . "<br>";


// echo "// this is php single-line-comment <br>";
// echo "/* this is php single-line-comment */  <br> ";
// echo var_dump($my) . "<br>";
// echo "  Hello", "Ayaz";


// (strlen) check string length
// (strtoupper) Uppercase
// (str_replace) Replace Text
// substr($text, 0, 5); Get part of a string
/* $text = "I am learning PHP";

if (str_contains($text, "PHP")) {
    echo "Found!";
}  */


// $intro = "My name is Maryam!";

// echo str_replace("Maryam", "Ayaz", $intro);


// $x = 100;
// $y = "100";
// if ($x == 100 and $y == 50) {
//     echo "Hello world!";
// } else {
//     echo "Wrong answer";
// }

// $time = 8;

// if ($time > 6) {
//     echo "Have a good day";
// } else if ($time > 17) {
//     echo "Have a good night";
// }

// $x = 8;
// $x -= 10;
// switch (true) {
//     case 1 :
//         if ($x > 0) {
//             echo "The value is positive";
//         }
//     break;
//     case 2 : 
//         if ($x < 0) {
//             echo "The value is negative";
//         }
//     break;
//     default:
//     echo "Enter the valid value";
// }




// $x = -2;

// switch ($x) {
//     case 1:
//         if ($x >= 0) {
//             echo "The value is Positive";
//         }
//         break;

//     case 2:
//         if ($x >= 0) {
//             echo "The value is Positive";
//         }
//         break;
//     case 3: 
//         if ($x <= 0) {
//             echo "The value is Negative";
//         }
//         break;

//     default:
//         echo "Enter a valid value";
// }



echo "<h1>Hi I am Ayaz!</h1>";
echo "i am now adding two numbers <br>";
$x = 3232;
$y = 204827;

echo "The Sum of " . $x . " & " . $y . " = " . $x+$y . "<br>";

$age = 20;

if ($age > 18) {
    echo "You are adult -- " . $age;
} else if ($age <= 18) {
    echo "You are under 18 -- " . $age ;
}


$number = 8;

echo "<br>";

if ($number % 2 == 0 ) {
    echo "The number is even -- " . $number;
} else  {
    echo "The number is odd -- " . $number;
}


echo "<br>";


$name = "Ayaz";
$age = 18;
$city = "Lahore";


echo "Hi, my name is " . $name . ". I am " . $age . " oears old and i live in " . $city . "."; 



?>



</body>
</html>