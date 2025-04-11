<?php
$str ="This is a string";
echo $str;
$lenn =strlen($str);
echo "The length of this string is ";
echo($lenn);

// echo "The length of the string is  ".$lenn;

echo "<br> The number of words is  in this string is " .str_word_count($str). "Thank you";
echo "<br>The reversed sting is :::".strrev($str);
echo "<br>The search for is in this sting is :::" .strpos($str,"is"). "<br>Thank you";
echo "<br>The search for is in this sting is :::" .strpos($str,"is"). "<br>Thank you";
echo "<br>The replace string for 'is' is 'at' in this sting is :::" .str_replace("is","at",$str). "<br>Thank you";
?>