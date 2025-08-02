
<!DOCTYPE html>
<html>
<body>

<?php  

// Create a global variable from inside a function, and use it outside of the function
function myfunction() {
  $GLOBALS["x"] = 100;
}

myfunction();

echo $GLOBALS["x"];
echo $x;
?>  

</body>
</html>