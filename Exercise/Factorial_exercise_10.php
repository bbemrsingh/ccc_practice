<?php

function factorial($n) {
    if ($n < 0) {
        return "Undefined"; // Factorial is not defined for negative numbers
    }

    if ($n == 0 || $n == 1) {
        return 1; // Factorial of 0 and 1 is 1
    }

    $result = 1;
    for ($i = 2; $i <= $n; $i++) {
        $result *= $i; // Multiply each number from 2 to $n
    }

    return $result;
}

// Example usage:
$number = 5; // You can replace this with the desired number
$result = factorial($number);

echo "Factorial of $number is: $result";

?>
