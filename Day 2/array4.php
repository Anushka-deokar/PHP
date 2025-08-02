//Associative arrays 

<!DOCTYPE html>
<html>
<body>
<pre>

<?php
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
var_dump($car);

//Accessing model of car
echo $car["model"];

// changing year 
$car["year"] = 2024;
var_dump($car);


//Loooping through associative array
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

foreach ($car as $x => $y) {
  echo "$x: $y <br>";
}


?>

</pre>
</body>
</html>