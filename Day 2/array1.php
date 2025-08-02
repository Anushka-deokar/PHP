<!DOCTYPE html>
<html>
<body>

<?php
$cars = array("Volvo", "BMW", "Toyota");

echo count($cars);

//updating
echo "<br>";
$cars[1] = "Ford";
echo $cars[1];
echo "<br>";


//adding 1 more item 
$cars[] = "Tesla";
echo count($cars);
?>

</body>
</html>