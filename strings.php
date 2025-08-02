<!DOCTYPE html>
<html>
<?php


$string1 = "Hello";
$string2 = 'World';
echo $string1 . " " . $string2;  //concatenation
echo "<br>";

// string lenghth
echo strlen("Hello world!");
echo "<br>";

//To count number of words in string
echo str_word_count("Hello world!");
echo "<br>";

//To search withing string
echo strpos("Hello world!", "world");
echo "<br>";

$original = "php is fun!";
echo "Uppercase: " . strtoupper($original);
echo "<br>";
echo "Lowercase: " . strtolower($original);
echo "<br>";
echo "First letter uppercase: " . ucfirst($original);
echo "<br>";
echo "First letter of each word uppercase: " . ucwords($original);
echo "<br>";

//replacing
$x = "Hello World!";
echo str_replace("World", "Dolly", $x);
echo "<br>";


//reversing a string
$x = "Hello World!";
echo strrev($x);
echo "<br>";

//remove white spaces using trim
$x = "   Hello World! ";
echo trim($x);
echo "<br>";


//converting string to array by spitting string into array
$x = "Hello World!";
$y = explode(" ", $x);

//Use the print_r() function to display the result:
print_r($y);
echo "<br>";

// Concatenate Strings
$greeting = "Hello";
$name = "Anushka";
echo $greeting . ", " . $name . "!";
echo "<br>";

// Slicing Strings
$substring = substr("Hello World", 0, 5);
echo "Sliced string: " . $substring;
echo "<br>";

$x = "Hello World!";
echo substr($x, 6);

echo "<br>";

// Escape Characters
echo "She said, \"PHP is awesome!\"";
echo "<br>";
echo 'It\'s a great day!';
echo "<br>";

echo "New line example:\nThis is on a new line in source code.";
echo "<br>";

echo "Tab example:\tThis text is tabbed.";
echo "<br>";

?>
</body>
</html>