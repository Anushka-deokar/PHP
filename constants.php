<!DOCTYPE html>
<html>
<?php

// Using define() to declare a constant
define("SITE_NAME", "MyWebsite");
echo "Website Name: " . SITE_NAME;
echo "<br>";

// Using const to declare a constant
const PI = 3.14159;
echo "Value of PI: " . PI;
echo "<br>";

// Difference between define and const
// define() allows dynamic constant names, but const does not
$dynamicName = "DYNAMIC_CONSTANT";
define($dynamicName, "This is dynamic");
echo $dynamicName . ": " . constant($dynamicName);
echo "<br>";

// Constant Arrays (only with define, not const)
define("COLORS", ["Red", "Green", "Blue"]);
echo "First Color: " . COLORS[0];
echo "<br>";

// Magic Constants
echo "File Path: " . __FILE__;
echo "<br>";
echo "Current Line: " . __LINE__;
echo "<br>";
echo "Current Function: " . __FUNCTION__;
echo "<br>";
echo "Current Class: " . __CLASS__;
echo "<br>";
echo "Current Method: " . __METHOD__;
echo "<br>";
echo "Current Namespace: " . __NAMESPACE__;

echo "<br>";

?>
</body>
</html>