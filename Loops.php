<!DOCTYPE html>
<html>
    <body>

<?php

// While Loop
$count = 1;
while ($count <= 5) {
    echo "While Loop: $count <br>";
    $count++;
}

// Alternative Syntax for While Loop
$count = 1;
while ($count <= 5):
    echo "Alternative While Loop: $count <br>";
    $count++;
endwhile;

// Do...While Loop
do {
    echo "Do While Loop: $count <br>";
    $count++;
} while ($count <= 7);

// For Loop
for ($i = 1; $i <= 5; $i++) {
    echo "For Loop: $i <br>";
}

// Alternative Syntax for For Loop
for ($i = 1; $i <= 5; $i++):
    echo "Alternative For Loop: $i <br>";
endfor;

// Foreach Loop with Arrays
$colors = ["Red", "Green", "Blue"];
foreach ($colors as $color) {
    echo "Foreach Loop: $color <br>";
}

// Alternative Syntax for Foreach Loop
foreach ($colors as $color):
    echo "Alternative Foreach Loop: $color <br>";
endforeach;

// Foreach Loop with Objects
class Car {
    public $brand;
    public $model;
    function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }
}
$car = new Car("Toyota", "Camry");
foreach ($car as $key => $value) {
    echo "Object Property: $key = $value <br>";
}

// Break Statement
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        break;
    }
    echo "Break Example: $i <br>";
}

// Continue Statement
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        continue;
    }
    echo "Continue Example: $i <br>";
}

?>

</body>
</html>

