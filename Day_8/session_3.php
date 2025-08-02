<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
print_r($_SESSION);
echo "<br>";


$_SESSION["favcolor"] = "yellow";
print_r($_SESSION);



session_unset();


session_destroy();
?>

</body>
</html>