<?php

function generateFibonacci($numTerms) {
    $fibonacciSequence = array();

    if ($numTerms >= 1) {
        $fibonacciSequence[] = 0; // First term
    }

    if ($numTerms >= 2) {
        $fibonacciSequence[] = 1; // Second term
    }

    for ($i = 2; $i < $numTerms; $i++) {
        // Generate the next term by summing the last two terms
        $fibonacciSequence[] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
    }

    return $fibonacciSequence;
}

// Example usage:
$numTerms = 15; // You can replace this with the desired number of terms
$fibonacciSequence = generateFibonacci($numTerms);

echo "Fibonacci sequence up to $numTerms terms: " . implode(', ', $fibonacciSequence);

?>
