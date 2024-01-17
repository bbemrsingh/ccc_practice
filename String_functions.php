<?php
/*
// strlen($string): returns the length of the length of the string
$x = "Ankit";
echo strlen($x);
echo "<br>";
echo strlen("Ankit Singh");
*/

/*
// str_replace($search,$replace,$subject) : replaces all occurrences of a substring with another substring in a given string.
$x = "AntMan is the best";
echo "This is original statement: $x <br><br>";
echo "This is after replacement :", str_replace("AntMan","IronMan", $x);
*/

/*
//strpos("$haystack","needle") : finds the position of the first occurrence of a substring in a string (case-sensitive function)
echo strpos("lets do php for fun ","php");
*/

/*
// substr($string, $start, $length): returns a part of a string starting from the specified position and with a specified length.
$x = "marvel vs dc is an endless debate <br><br>";
echo "This is Original string: $x";
echo "This is substring: ",substr($x,0,12)."";
*/

/*
//strtolower($string):converts a string to lowercase.
$x = "MARVEL VS DC DEBATE IS ENDLESS";
echo "Statement without using function: $x <br><br>";
echo "Statement when using function: ",strtolower($x);
*/

/*
//strtoupper($string): converts a string to uppercase
$x = "marvel vs dc debate is endless";
echo "Statement without using function: $x <br><br>";
echo "Statement when using function: ", strtoupper($x);
*/

/*
//trim($string):removes whitespace or other predefined characters from the beginning and end of a string.
$x = "  marvel vs dc debate is endless <br>\n"; 
echo "before trim function: $x";
echo trim($x);
*/
/*
//implode($glue, $pieces): Joins array elements with a string.
$arr = array("marvel","vs","dc","debate","is","phase","1");
echo implode(" ", $arr);
*/

/*
// explode($delimiter, $string): splits a string into an array by a specified delimiter.
$x = "marvel vs dc debate is on its peak";
var_dump (explode(" ", $x)); //it prints string postion, content & length in array
echo"<br>";
print_r (explode(" ", $x)); // it prints only positions & content of string in array

*/
?>
