<!DOCTYPE html>
<html>
    <body>
<?php

// Basic Math Functions
echo "Absolute Value: " . abs(-10) . "<br>";
echo "Square Root: " . sqrt(25) . "<br>";
echo "Power: " . pow(2, 3) . "<br>";
echo "Max Value: " . max(10, 20, 30, 40) . "<br>";
echo "Min Value: " . min(10, 20, 30, 40) . "<br>";

echo "<br>";


echo "Round: " . round(4.6) . "<br>";
echo "Floor: " . floor(4.9) . "<br>";
echo "Ceil: " . ceil(4.1) . "<br>";

echo "<br>";
//is_numeric() function used to find if value is numeric
$x = 5985;
var_dump(is_numeric($x));
?>
</body>
</html>