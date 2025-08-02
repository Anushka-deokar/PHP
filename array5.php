<!DOCTYPE html>
<html>
<body>
<pre>

<?php  

//create array
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);

//using []
$cars = ["Volvo", "BMW", "Toyota"];


//Multiple lines 
$cars = [
    "Volvo",
    "BMW",
    "Toyota"
  ];


  //Array keys

  $cars = [
    0 => "Volvo",
    1 => "BMW",
    2 =>"Toyota"
  ];
  
  var_dump($cars);




  $myCar = [
    "brand" => "Ford",
    "model" => "Mustang",
    "year" => 1964
  ];
  
  var_dump($myCar);



  //Mixing Array keys

  $myArr = [];
$myArr[0] = "apples";
$myArr[1] = "bananas";
$myArr["fruit"] = "cherries";

var_dump($myArr);
?>  

</pre>
</body>
</html>