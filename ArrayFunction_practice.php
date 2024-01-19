<?php 
//1. Array Creation and Initialization:

// array() or []: Creates a new array.
$fruits = array("apple","banana","car","car","mango");
$g = array("rose","lotus","honda", "bmw","sunflower");
    print_r ($fruits);
    echo "<br>";
    print_r ($g);

echo "<br><br>";
print_r (array_merge($g,$fruits)); // array_merge($array1, $array2): Merges two or more arrays.

print_r (array_combine($fruits, $g)); // array_combine($keys, $values): Creates an array by using one array for keys and another for its values.

// range($start, $end, $step):    Creates an array containing a range of elements.



?>
