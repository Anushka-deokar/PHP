<html>
   

<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l") . "<br>";
echo "Today is " .date("2") . "<br>";
echo " Current Month is " .date("F") . "<br>";

echo "<br><br>";
 
//Get a time in specific format with Time zone

date_default_timezone_set("Asia/Kolkata");
echo "Current Time in 24-hour format: " . date("H:i:s") . "<br>";
echo "Current Time in 12-hour format: " . date("h:i:s a") . "<br>";
echo "<br><br>";

// Create a Date With mktime()
//mktime(hour, minute, second, month, day, year)
$customDate = mktime(0, 0, 0, 12, 25, 2025); // 25th December 2025
echo "The custom date is: " . date("Y-m-d", $customDate) . "<br>";
echo "Formatted date: " . date("l, F j, Y", $customDate);
echo "<br><br>";


//Create a Date From a String With strtotime()
$d = strtotime("tomorrow");
echo "Tomorrow: " . date("Y-m-d h:i:sa", $d) . "<br>";

$d = strtotime("next Saturday");
echo "Next Saturday: " . date("Y-m-d h:i:sa", $d) . "<br>";

$d = strtotime("+3 Months");
echo "After 3 Months: " . date("Y-m-d h:i:sa", $d) . "<br>";

$d = strtotime("first day of next month");
echo "First Day of Next Month: " . date("Y-m-d h:i:sa", $d) . "<br>";

$d = strtotime("last day of this month");
echo "Last Day of This Month: " . date("Y-m-d h:i:sa", $d) . "<br>";

$d = strtotime("+1 year");
echo "One Year from Today: " . date("Y-m-d h:i:sa", $d) . "<br>";

?>
<body>
//Update the copyright year on website
<footer>
 &copy;
 2011-<?php echo date("Y"); ?> 
</footer>


</body>
</html>