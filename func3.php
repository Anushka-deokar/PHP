

<!DOCTYPE html>
<html>
<body>
<?php

//pass by ref
function increment(&$num) {
    $num++;
}

$number = 5;
increment($number);
echo "Updated Number: $number";
?>
</body>
</html>