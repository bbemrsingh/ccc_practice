<?php

function bubbleSort(&$arr) {
    $n = count($arr);

    // Traverse through arrays elements
    for ($i = 0; $i < $n - 1; $i++) {
        // Last $i elements are already sorted, so would not check them
        for ($j = 0; $j < $n - $i - 1; $j++) {
            // Swap if the element found is greater than next element
            if ($arr[$j] > $arr[$j + 1]) {
                // Swap $arr[$j] and $arr[$j + 1]
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
}


$arrayToSort = [64, 34, 25, 12, 22, 11, 90];

echo "Original Array: " . implode(", ", $arrayToSort) . "<br>";

// Call the bubbleSort function to sort the array
bubbleSort($arrayToSort);

echo "Sorted Array: " . implode(", ", $arrayToSort) . "<br>";

?>
