<?php 
// //Arithmetic operators
// $x = 10;  
// $y = 6;
// // if we use string values in these VAR than answer is 0.

// echo $x + $y . "<br>";
// echo $x - $y . "<br>";
// echo $x * $y . "<br>";
// echo $x / $y . "<br>";
// echo $x % $y . "<br>";
// echo $x ** $y . "<br>";

// //Assignment Operators
  
// $x = 10; echo $x . "<br><br>"; //The left operand gets set to the value of the expression on the right
// $x += 100; echo $x; //Addition
// $x = 5; $x -= 3; echo $x . "<br>"; //Subtraction
// $x = 5; $x *= 6; echo $x . "<br>";  //Multiplication
// $x = 10; $x /= 3; echo $x . "<br>"; //Division
// $x = 15; $x %= 3; echo $x . "<br>";  //Modulus







// //Comparison Operators:
// // values for comparison
// $num1 = 10;
// $num2 = 5;

// // Equal to (==) operator
// if ($num1 == $num2) {
//     echo "$num1 is equal to $num2";
// } else {
//     echo "$num1 is not equal to $num2";
// }
// echo "<br><br>";

// // Not equal to (!=) operator
// if ($num1 != $num2) {
//     echo "$num1 is not equal to $num2";
// } else {
//     echo "$num1 is equal to $num2";
// }
// echo "<br>";

// // Greater than (>) operator
// if ($num1 > $num2) {
//     echo "$num1 is greater than $num2";
// } else {
//     echo "$num1 is not greater than $num2";
// }
// echo "<br><br>";

// // Less than (<) operator
// if ($num1 < $num2) {
//     echo "$num1 is less than $num2";
// } else {
//     echo "$num1 is not less than $num2";
// }
// echo "<br><br>";

// // Greater than or equal to (>=) operator
// if ($num1 >= $num2) {
//     echo "$num1 is greater than or equal to $num2";
// } else {
//     echo "$num1 is not greater than or equal to $num2";
// }
// echo "<br><br>";

// // Less than or equal to (<=) operator
// if ($num1 <= $num2) {
//     echo "$num1 is less than or equal to $num2";
// } else {
//     echo "$num1 is not less than or equal to $num2";
// }
// echo "<br><br>";






// // logical operations
// $age = 25;
// $isStudent = true;

// // Logical AND (&&) operator
// if ($age >= 18 && $isStudent) {
//     echo "You are eligible for a student discount.";
// } else {
//     echo "You are not eligible for a student discount.";
// }
// echo "<br><br>";

// // Logical OR (||) operator
// $hasCoupon = false;
// if ($age >= 60 || $hasCoupon) {
//     echo "You are eligible for a senior citizen discount or have a coupon.";
// } else {
//     echo "You are not eligible for a senior citizen discount and do not have a coupon.";
// }
// echo "<br><br>";

// // Logical NOT (!) operator
// $isMember = false;
// if (!$isMember) {
//     echo "You are not a member. Please sign up to enjoy additional benefits.";
// } else {
//     echo "Welcome, valued member!";
// }
// echo "<br><br>";





// // Increment Operator (++)
// $counter = 5;
// echo "Original Counter Value: $counter<br>";

// $counter++; // Incrementing  by 1
// echo "After Incrementing: $counter<br>";

// // Decrement Operator (--)
// $qty = 8;
// echo "Original Quantity: $qty<br>";

// $qty--; // Decrementing the qty by 1
// echo "After Decrementing: $qty<br>";


//String Operators

// String Concatenation Operator (.)
$firstName = "Ankit";
$lastName = "Singh";

// Concatenating the first and last names
$fullName = $firstName . " " . $lastName;

echo "Full Name: $fullName<br>";

// Example using the Compound Concatenation Operator (.=)
$greeting = "Hello, ";
$greeting .= $firstName;

echo "$greeting<br><br>";

//Ternary Operator:  (condition) ? true_expression : false_expression;

$marks = 75;

// give result based on marks
$result = ($marks >= 50) ? "Pass" : "Fail";

echo "Marks: $marks<br>";
echo "Result: $result<br>";

// Nested Ternary Operator
$grade = ($marks >= 90) ? "A" : (($marks >= 80) ? "B" : "C");

echo "Grade: $grade<br>";


?>