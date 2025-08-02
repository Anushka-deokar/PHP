<?php

$x = 5;
$y = "10";
$z = [1, 2, 3];
$emptyVar = "";
$nullVar = null;

// boolval()
echo boolval($x);  // Output: 1 (true)

// debug_zval_dump()
debug_zval_dump($x);  // Shows internal details of $x

// doubleval() or floatval()
echo doubleval($y);   // Output: 10

// empty()
echo empty($emptyVar);  // Output: 1 (true)

// get_debug_type()
echo get_debug_type($z);  // Output: array

// gettype()
echo gettype($y);  // Output: string

// intval()
echo intval("12.8");  // Output: 12

// is_array()
var_dump(is_array($z));  // Output: bool(true)

// is_bool()
var_dump(is_bool($x));   // Output: bool(false)

// is_numeric()
var_dump(is_numeric($y)); // Output: bool(true)

// is_null()
var_dump(is_null($nullVar)); // Output: bool(true)

// isset()
var_dump(isset($x));   // Output: bool(true)

// print_r()
print_r($z); 
// Output: 
// Array ( [0] => 1 [1] => 2 [2] => 3 )

// serialize() and unserialize()
$serialized = serialize($z);
echo $serialized; // Output: a:3:{i:0;i:1;i:1;i:2;i:2;i:3;}
$newArray = unserialize($serialized);
print_r($newArray);

// strval()
echo strval(1234);  // Output: "1234"

// var_dump()
var_dump($x);  // Output: int(5)

// var_export()
var_export($z);
// Output: array ( 0 => 1, 1 => 2, 2 => 3, )

?>
