<!DOCTYPE html>
<html>
    <body>
<?php
function increaseValue($num) {
    $num += 5;
    echo "Inside function: $num <br>";
}

$originalNumber = 10;
increaseValue($originalNumber); // Passing by value
echo "Outside function: $originalNumber"; // Original value remains unchanged
?>
</body>
</html>

