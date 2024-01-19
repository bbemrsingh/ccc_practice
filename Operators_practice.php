<?php 
//Arithmetic operators
$x = 10;  
$y = 6;
// if we use string values in these VAR than answer is 0.

echo $x + $y . "<br>";
echo $x - $y . "<br>";
echo $x * $y . "<br>";
echo $x / $y . "<br>";
echo $x % $y . "<br>";
echo $x ** $y . "<br>";

//Assignment Operators
  
$x = 10; echo $x . "<br><br>"; //The left operand gets set to the value of the expression on the right
$x += 100; echo $x; //Addition
$x = 5; $x -= 3; echo $x . "<br>"; //Subtraction
$x = 5; $x *= 6; echo $x . "<br>";  //Multiplication
$x = 10; $x /= 3; echo $x . "<br>"; //Division
$x = 15; $x %= 3; echo $x . "<br>";  //Modulus
?>