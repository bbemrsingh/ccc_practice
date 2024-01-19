<?php
$text = "Hello, World! How are you doing?";

echo "Original statement : " . $text . "<br><br>";
echo "1.String length : ", strlen($text), "<br><br>";
echo "2.String is lowercase : " . strtolower($text) . "<br><br>";
echo "3.String in uppercase : " . strtoupper($text) . "<br><br>";
echo "4.Replacing a substring : " . str_replace("How are you doing?","Fine, thank you!",$text) . "<br><br>" ;
echo "5.First 10 character of string : " . substr($text,0,10). "<br><br>";
echo "6.Substring starting from 8th charater : ". substr($text,7) ."<br><br>";
?>