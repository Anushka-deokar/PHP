<?php
   //Working with data types and strings 

   $str = "Hello World !";
   echo "String: $str\n";
   echo "<br><br>";

   $num = 42;
   echo "Integer: $num\n";
   echo "<br><br>";

   $float_num = 3.14;
   echo "Float: $float_num\n";
   echo "<br><br>";

   $num1 = true;
   echo "Boolean: " . ($num1 ? "1" : "0") . "\n";
   echo "<br><br>";

   $array = ["Apple", "Banana", "Orange"];
   echo "Array: ";
    foreach ($array as $item) {
    echo $item;
    if ($item !== end($array)) {
        echo ", ";
    }
}
echo "\n";
echo "<br><br>";

   class Car {
       public $model;
       public function __construct($model) {
           $this->model = $model;
       }
   }
   $car = new Car("Tesla");
   echo "Object: Car Model - " . $car->model . "\n";
   echo "<br><br>";

   $null_var = NULL;
   echo "NULL : " . var_export($null_var, true) . "\n";
   echo "<br><br>";

  

 
   $string_upper = strtoupper("hello");
   echo "String Uppercase: $string_upper\n";
   echo "<br><br>";

   $string_sliced = substr($str, 6, 5);
   echo "String Sliced: $string_sliced\n";
   echo "<br><br>";

  
 
?>
