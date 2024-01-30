<?php 

// Exercise 1: Simple Calculator

class Calculator {
    public function add($a, $b) {
        return " $a + $b = " . $a + $b ."<br><br>";
    }

    public function subtract($a, $b) {
        return "$a - $b = " . $a - $b ."<br><br>";
    }

    public function multiply($a, $b) {
        return "$a x $b = " . $a * $b  ."<br><br>";
    }

    public function divide($a, $b) {
        if ($b != 0) {
            return "$a/$b = " . $a / $b ."<br><br>";
        } else {
            return "Cannot divide by zero";
        }
    }
}

// Example Usage:
$calculator = new Calculator();
echo $calculator -> add(15, 5); // Output: 8
echo $calculator -> subtract(15,5);
echo $calculator -> multiply(15,5);
echo $calculator -> divide(15,5);
echo $calculator -> divide(15,5);




?>