<?php
   $a = 5;
   $b = 7;
   
   echo "Before Swap: a is $a, b is $b<br>";
    
   function swapnum(&$a, &$b)
   {
    $temp = $a;
    $a = $b;
    $b = $temp;
   }
  
   swapnum($a, $b);
   
   echo "After Swap :  a is $a, b is $b";

?>