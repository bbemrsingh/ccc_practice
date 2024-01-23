<?php 
// //1. Array Creation and Initialization:

// // array() or []: Creates a new array.
// $fruits = array("apple","banana","car","car","mango");
// $g = array("rose","lotus","honda", "bmw","sunflower");
//     print_r ($fruits);
//     echo "<br>";
//     print_r ($g);

// echo "<br><br>";
// print_r (array_merge($g,$fruits)); // array_merge($array1, $array2): Merges two or more arrays.
// echo "<br>";
// print_r (array_combine($fruits, $g)); // array_combine($keys, $values): Creates an array by using one array for keys and another for its values.
// echo "<br><br>";

//  // range($start, $end, $step):    Creates an array containing a range of elements.
// $strarr = range("a","d");
// print_r ($strarr);
// echo "<br>";
// $numarr = range(0,5);
// print_r ($numarr);

// // Array Modification:
    
//     $arr = array("Broccoli","carrot","Eggplant");   //  array_push($array, $element) or $array[] = $element: Adds one or more elements to the end of an array.
//     array_push($arr,"Spinach","Tomato");
//     print_r($arr);   
//     echo "<br>";
//     array_pop($arr); 
//     echo "<br>";  print_r($arr);          //  array_pop($array): Removes the last element from an array.

//     array_unshift($arr, "Cucumber");      //  array_unshift($array, $element): Adds one or more elements to the beginning of an array.
//     echo "<br>"; print_r($arr);
    
//     array_shift($arr); 
//     echo "<br>";  print_r($arr);          //  array_shift($array):Removes the first element from an array.
    
//     $replace = array("mango","apple","banana");
//     array_splice($arr,0,2,$replace);     //  array_splice($array, $start, $length, $replacement):Removes a portion of the array and replaces it with something else.
//     echo "<br>";
//     print_r($arr);

//     //Array Access:
//     echo "<br><br><br>";
//     print_r(count($arr)) ;                      //Counts the number of elements in an array.
//     echo "<br>";

//     print_r(sizeof($arr));                     //Alias of count().
//     echo "<br>";

//     print_r(array_key_exists("2", $arr));  //Checks if the given key or index exists in the array.
//     echo "<br>";

//     print_r(array_keys($arr));                // Returns all the keys or a subset of the keys of an array.
//     echo "<br>";

//     print_r(array_values($arr));             // Returns all the values of an array.
//     echo "<br><br><br>";


//     // Array Search:
    
//     print_r(in_array("banana", $arr));       // Checks if a value exists in an array.
//     echo "<br>";
//     print_r(array_search("banana", $arr));   //  Searches an array for a given value and returns the corresponding key.
//     echo "<br>";
//     print_r(array_reverse($arr));            //  Returns an array with elements in reverse order.
//     echo "<br><br><br>";

    // // Array Sorting:
    // $zzz = array("Broccoli"=>"50","carrot"=>"60","Eggplant"=>"35","Spinach"=>"40","Tomato"=>"90 ");
    // print_r(sort($zzz));//Sorts an array.
    // echo "<br>";
    // print_r(rsort($zzz)); //Sorts an array in reverse order.
    // echo "<br>";
    // print_r(asort($zzz));//Sorts an associative array by values.
    // echo "<br>";
    // print_r(ksort($zzz));// Sorts an associative array by keys.
    // echo "<br>";
    // print_r(arsort($zzz)); // Sorts an associative array in reverse order by values.
    // echo "<br>";
    // print_r(krsort($zzz)); // Sorts an associative array in reverse order by keys.
    // echo "<br><br>";




    // // Array Filtering:
    // $Arr = array("Broccoli"=>"50","carrot"=>"60","Eggplant"=>"35","Spinach"=>"40","Tomato"=>"90 ");
    
    // function vegi($var)
    // {
    // return($var & 1);
    // }
    
    // print_r(array_filter($Arr, "vegi")); // Filters elements of an array using a callback function.
    // echo "<br>";
    // print_r(array_map("vegi", $Arr));    // Applies a callback function to each element of an array.
    // echo "<br>";
    // print_r(array_reduce($Arr,"vegi")); // Iteratively reduces the array to a single value using a callback function.
    // echo "<br><br>";

    // // Array Slicing:
    // $replaced = array("mango","apple","banana");
    // $ARR = array("Broccoli"=>"50","carrot"=>"60","Eggplant"=>"35","Spinach"=>"40","Tomato"=>"90 ");
    // print_r(array_slice($ARR, 1, 1, 4)); //Extracts a portion of the array.
    // echo "<br>";
    // print_r(array_splice($ARR, 2, 2, $replaced)); //Removes a portion of the array and replaces it with something else.


?>
