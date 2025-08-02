<?php
//add backslashes in front of specific characters
$str = "Hello World!";
echo addcslashes($str, "W");
echo "<br>";

//add backslashes before characters like ', ", \, and NULL
$str = "I'm learning PHP.";
echo addslashes($str);
echo "<br>";


//convert string to hexadecimal using bin2hex
$str = "PHP";
echo bin2hex($str);
echo "<br>";

//remove white spaxe from right side
$str = "Hello World!    ";
echo chop($str);
echo "<br>";

//to retun character from ascii value
echo chr(65);
echo "<br>";


//splitting string into chunks 
$str = "HelloWorld";
echo chunk_split($str, 2, "-");



?>