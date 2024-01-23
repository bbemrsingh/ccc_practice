<?php

for ($i = 1; $i <= 100; $i++) {
    // Check for multiples of both three and five first
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz";
    } 
    // Check for multiples of three
    elseif ($i % 3 == 0) {
        echo "Fizz" ;
    } 
    // Check for multiples of five
    elseif ($i % 5 == 0) {
        echo "Buzz" ;
    } 
    // Print the number if not a multiple of three or five
    else {
        echo $i ;
    }

    echo "<br><br>"; // newline after each output
}

?>
