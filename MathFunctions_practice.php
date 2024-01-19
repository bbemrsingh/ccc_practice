<?php
// 1. Basic Arithmetic
// abs($number): Returns the absolute(POSITIVE) value of a number.
    echo(abs(-10000)) . "<br><br>";
// ceil($number): Rounds a number up to the nearest integer.
    echo(ceil(5.2))."<br>";
    echo(ceil(5.9))."<br><br>";
// floor($number): Rounds a number down to the nearest integer.
    echo(floor(5.2))."<br>";
    echo(floor(5.9))."<br><br>";

// round($number, $precision): Rounds a number to the nearest integer or specified number of decimal places.
    echo(round(0.51)) . "<br>";
    echo(round(0.49)) . "<br><br>";


// 2. Power Functions
// pow($base, $exponent): Returns the value of a base raised to the power of an exponent.
    echo (pow(2,10)) . "<br><br>";
// sqrt($number): Returns the square root of a number.
    echo "square root of 90 : " . (sqrt(90)) . "<br><br>";


// 3. Random Number Generation
// rand($min, $max): Generates a random integer between the specified minimum and maximum 
   echo (rand(10,10000)) . "<br><br>";


// 4. Number Formatting
// number_format($number, $decimals, $decimal_point, $thousands_separator): Formats a number with grouped thousands and a specified number of decimals.
 echo number_format(900000000,1,",",".")."<br>" ;
 echo number_format(999s000000,1,".",",")."<br>" ;


?>
