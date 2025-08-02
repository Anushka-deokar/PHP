<?php


for ($num = 1; $num <= 1000; $num++) {
    $sum = 0;
    $temp = $num;

    while ($temp > 0) {
        $digit = $temp % 10;     
        $sum += $digit * $digit * $digit; 
        $temp = (int)($temp / 10); 
    }
   
    if ($sum == $num) {
        echo $num . "<br>";
    }
}
?>