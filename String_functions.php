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

/*
// htmlspecialchars($string): converts special characters to HTML entities.
$str = "This is <h1>heading</h1> text <br>";
echo $str;
echo "on using htmlspecialchars function html tags will be treated as text : ",htmlspecialchars($str);
*/

/*
//htmlentities($string): converts all applicable characters to HTML entities.
//this function is similar to htmlspecialchars but htmlspecialchars is used when there is no need to convert all characters which have their HTML equivalents into simple text.
echo "<h1>this is heading</h1>";
echo htmlentities("<h1>this is heading</h1>");
*/

/*
//nl2br($string):inserts HTML line breaks before all newlines in a string
$y = "php is a widely-used open source. \n & general-purpose scripting language";
echo nl2br("$y");
*/

/*
//str_repeat($string, $multiplier): repeats a string a specified number of times.
$y = "php is a widely-used open source scripting language\n ";
echo str_repeat(nl2br("$y"),5);
*/

/*
//strrev($string): reverses a string
$str = "php is scripting language";
$y= "1 2 3 4 5 6 7 8 9";
echo strrev("$str");
echo nl2br(" \n ");
echo strrev($y);
*/

/*
//str_shuffle($string) randomly shuffles all characters in a string & every time you refresh shuffled output is different
$str = "php is scripting language";
echo str_shuffle($str);
*/
/*
// str_word_count($string) Returns the number of words in a string.
$z = "marvel vs dc debate is on its peak";
echo str_word_count($z);
*/

/*
// substr_replace($string, $replacement, $start, $length) Replaces a portion of a string with another string.
$w = "marvel vs dc debate is on its peak";
$v = "over";
echo substr_replace($w, $v,23,);;
*/

/*
// str_pad($string, $length, $pad_string, $pad_type) pads a string to a certain length with another string.
$str = "marvel vs dc debate is on its peak";
echo str_pad($str,50,".:",STR_PAD_BOTH);
*/

/*
//strcmp($string1, $string2) Compares (two string content && their lengths)  & its case sensitive
$x = "Hello world!";
$y = "Hello world!"; 

if (strcmp($x,$y) == 0) {
    echo "both the strings are same";
} else if (strcmp($x,$y) < 0) {
    echo "string 1 is less than string 2";
} else if (strcmp($x,$y) > 0) {
    echo "string 2 is less than string 1";
}
*/

/*
// strcoll($string1, $string2) locale based string comparison.
//this comparison is case sensitive, and unlike strcmp () this function is not binary safe. strcoll () uses the current locale for doing the comparisons.
// If the current locale is C or POSIX, this function is equivalent to strcmp ().
//A "Locale" is an identifier used to get language, culture, or regionally-specific behavior from an API. 
$a = "Hello orld!";
$b = "Hello world!"; 

if(strcoll($a,$b) == 0) {
    echo "both strings are equal";
}
else {
    echo "strings are not equal";
}
*/

/*
//strcspn($string, $mask, $start, $length) returns length (including whitespaces) found in a string before a character is found.
//$length = max length upto which searching will be done in given string.
$x = "chess is fun";
echo "No of character before f = ",strcspn($x,"zf",0,11);
*/

/*
//stristr($haystack, $needle, $before_needle) search for the first occurrence of a string inside another string (Not case-sensitive)
//before_needle : its Optional. its A boolean value whose default is "false". If set to "true", it returns the part of the string before the first occurrence of the search parameter.
$x = "php is scripting language";
echo stristr($x,"SCRIPTING",true);
echo "<br>";
echo stristr($x,"SCRIPTING");
*/

/*
// strpbrk($string, $char_list)  searches a string for any of a set of characters( eg searching "oe" in string "hello world" returns: ello world) & return the rest of the string from where it found the first occurrence of the specified characters:.
//it is case sensitive
$x = "php is scripting language";
echo strpbrk($x,"t");
*/

/*
//strstr($haystack, $needle, $before_needle) Finds the first occurrence of a string
//This function is case-sensitive. For a case-insensitive search, use stristr() function
$x = "php is Sripting language";
echo strstr($x,"S",true);
echo "<br><br>";
echo strstr($x,"l");
*/


/*
only difference between stritr & strstr
stristr - Not case sensitive
strstr - Case sensitive
*/

/*
//strtr($string, $from, $to) Translates characters or replaces substrings.
$x = "Hulk is the best";
echo "before using function : $x <br>";
echo "after using function : ",strtr($x,"best","biggest");
echo "<br><br>";
*/

/*
//ucfirst($string) converts the first character of a string to uppercase.
$x = "visionary is the one who has a vision";
echo ucfirst($x);
echo "<br><br>";

// ucwords($string) converts the first character of each word in a string to uppercase.
$y = "visionary is the one who has a vision";
echo ucwords($y);
*/

?>
