<?php
$sentence = "The quick brown fox jumps over the lazy dog";
echo "Original Statement : " . $sentence . "<br><br>";

echo "1.fox is at position : " . strpos($sentence,"fox") . "<br><br>";
if ( strpos($sentence, "cat") !== false) {
    echo "2.word cat is present in the sentence";
}
else {
    echo "2.word cat is not present in the sentence";
}
echo "<br><br>";
echo " 3.first 20 characters : " . substr($sentence,0,20);
?>
