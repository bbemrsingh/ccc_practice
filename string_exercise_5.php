<?php
$quote = "In three words I can sum up everything I've learned about life: it
goes on.";

echo "Original quote : " . $quote. "<br><br>";
echo "1.Total number of words in the quote : " . str_word_count($quote) . "<br><br>";
echo "2.Quote in lowercase : " . strtolower($quote). "<br><br>";
echo "3.Capitalizing first letter of each word : ". ucwords($quote) . "<br><br>";
?>