<?php

    $a = 1;             // integer
    $b = 11.1;          // flot
    $c = "ankit";       // string                
    $d = true;          // boolean
    $e = null;          // NULL   



// // (string) - Converts to data type String 
// // when casting a Boolean into string it gets the value "1", and when casting NULL into string it is converted into an empty string 
//     $a = (string) $a;
//     $b = (string) $b;
//     $d = (string) $d;
//     $e = (string) $e;

// // (int) - Converts to data type Integer
//     $b = (int) $b;
//     $c = (int) $c;
//     $d = (int) $d;
//     $e = (int) $e;

// // (float) - Converts to data type Float
//     $a = (float) $a;
//     $c = (float) $c;
//     $d = (float) $d;
//     $e = (float) $e;

// // (bool) - Converts to data type Boolean
//     $a = (bool) $a;
//     $b = (bool) $b;
//     $c = (bool) $c;
//     $e = (bool) $e;

// // (array) - Converts to data type Array
//     $a = (array) $a;
//     $b = (array) $b;
//     $c = (array) $c;
//     $d = (array) $d;
//     $e = (array) $e;

// (unset) - Converts to data type NULL 
//The (unset) cast is no longer supported in php

// //most data types converts into a object with one property, named "scalar", with the corresponding value.    
//     //NULL values converts to an empty object.
//     $a = (object) $a;
//     $b = (object) $b;
//     $c = (object) $c;
//     $d = (object) $d;
//     $e = (object) $e;



    var_dump($a);
    var_dump($b);
    var_dump($c);
    var_dump($d);
    var_dump($e);

?>