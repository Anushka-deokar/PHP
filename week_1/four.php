<?php
//sum of 2 numbers

function calculateSum($a, $b) {
    return $a + $b;
}

function findLargest($arr) {
    
    $largest = $arr[0];

   
    foreach ($arr as $value) {
        if ($value > $largest) {
            $largest = $value;
        }
    }

    return $largest;
}


$numbers = [3, 7, 2, 9, 5];


function reverseString($str) {
    return strrev($str);
}


function celsiusToFahrenheit($celsius) {
    return ($celsius * 9/5) + 32;
}

function isPrime($num) {
    if ($num < 2) return false;
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}


echo "Sum: " . calculateSum(5, 10) ;
echo "<br>";
echo "Largest number is: " . findLargest($numbers);
echo "<br>";
echo "Reversed: " . reverseString("hello");
echo "<br>";
echo "Celsius to Fahrenheit: " . celsiusToFahrenheit(25);
echo "<br>";
echo "Is Prime: " . (isPrime(11) ? "Yes" : "No") . "\n";

?>
