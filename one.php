<!DOCTYPE html>
<html>
<body>

<?php
// conditional statements
$a = 200;
$b = 33;
$c = 500;

if ($a > $b && $a < $c ) {
  echo "Both conditions are true<br>";
}


// compare as many conditions as we like in one if statement
$d = 5;

if ($d == 2 || $d == 3 || $d == 4 || $d == 5 || $d == 6 || $d == 7) {
  echo "$d is a number between 2 and 7";
}

?>
 
</body>
</html>