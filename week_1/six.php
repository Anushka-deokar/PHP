<?php
  //$var =1;

  for ($num = 2; $num <= 100; $num++) {
    $isPrime = true;

    for ($i = 2; $i < $num; $i++) {
     //  $var++;

        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }

    if ($isPrime) {
        echo $num . "<br>";
    }

  }
 // echo $var;
  ?>