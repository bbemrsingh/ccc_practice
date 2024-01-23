<?php

function isPrime($number) {
    if ($number < 2) {
        return false; 
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false; // If the number is divisible by any integer from 2 to sqrt(number), it's not prime
        }
    }

    return true; // If no divisors are found, the number is prime
}

$testNumber = 8; // You can replace this with any number you want to test
if (isPrime($testNumber)) {
    echo "$testNumber is a prime number.";
} else {
    echo "$testNumber is not a prime number.";
}

?>
