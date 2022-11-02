<?php
// Strings

$str = "This is a string";;
echo $str;

// Length

$len = strlen($str);
echo "The length of the string is ";
echo "<br>";
echo $len;
echo "<br>";

// String Concatanation

echo "The length of the string is " . $len . "<br> Thank You";
echo "<br>";

// Word Count

echo "The number of words in this string is " . str_word_count($str) . ". Thank You <br>";

// Reverse

echo "The reverse of the string is " . strrev($str) . ". Thank you <br>";

// Position

echo "The search for is in this string is " . strpos($str, "is") . ". Thank you <br>";

// Replace
echo "This replaced string is " . str_replace("is", "at", $str) . ". Thank you <br>";
