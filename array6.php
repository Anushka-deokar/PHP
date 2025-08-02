<!DOCTYPE html>
<html>
<body>
<?php

// Adding, Removing, and Updating Array Items
$fruits = ["Apple", "Banana", "Cherry"];
echo "Original Array: ";
print_r($fruits);
echo "<br>";

// Add items
$fruits[] = "Mango"; // Append to the array
array_push($fruits, "Orange"); // Using array_push()
echo "After Adding Items: ";
print_r($fruits);
echo "<br>";

// Remove items
unset($fruits[1]); // Remove Banana
echo "After Removing an Item: ";
print_r($fruits);
echo "<br>";

// Update item
$fruits[0] = "Pineapple"; // Update Apple to Pineapple
echo "After Updating an Item: ";
print_r($fruits);
echo "<br>";

// Sorting Arrays
$numbers = [4, 2, 8, 1, 5];
sort($numbers); // Ascending order
echo "Sorted Numbers: ";
print_r($numbers);
echo "<br>";

rsort($numbers);
echo "Descending order: ";
print_r($numbers);

echo "<br>";

// Multidimensional Arrays
$students = [
    ["name" => "John", "age" => 20, "grade" => "A"],
    ["name" => "Jane", "age" => 22, "grade" => "B"],
    ["name" => "Mark", "age" => 21, "grade" => "A"]
];
echo "Student Name: " . $students[1]["name"];
echo "<br>";

// Useful Array Functions
$array = ["Dog", "Cat", "Elephant"];
echo "Count: " . count($array);
echo "<br>";
echo "In Array Check (Cat): " . (in_array("Cat", $array) ? "Found" : "Not Found");
echo "<br>";
$reversed = array_reverse($array);
echo "Reversed Array: ";
print_r($reversed);
echo "<br>";

?>
</body>