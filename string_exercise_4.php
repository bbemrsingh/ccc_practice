<?php
$name = "John";
echo "Originl string : " . $name ."<br><br>";

$paddedstringtoleft = str_pad($name,10,"_",STR_PAD_LEFT);
$paddedstringtoright = str_pad($name,8,"*",STR_PAD_RIGHT);

echo "Pad the string with underscores (`_`) on the left side to make its total length 10 characters : " . $paddedstringtoleft . "<br><br>";
echo " Pad the string with asterisks (`*`) on the right side to make its total length 8 characters : " . $paddedstringtoright . "<br>";


?>