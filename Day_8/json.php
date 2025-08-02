<!DOCTYPE html>
<html>

<body>

<h2>PHP - json_encode()</h2>
<?php
// Encoding an associative array
$age = array("Peter" => 35, "Ben" => 37, "Joe" => 43);
echo "<b>Associative Array to JSON:</b><br>";
echo json_encode($age);
echo "<br><br>";

// Encoding an indexed array
$cars = array("Volvo", "BMW", "Toyota");
echo "<b>Indexed Array to JSON:</b><br>";
echo json_encode($cars);
?>

<h2>PHP - json_decode()</h2>
<?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

// Decode into PHP Object
$obj = json_decode($jsonobj);
echo "<b>Decoded to PHP Object:</b><br>";
var_dump($obj);
echo "<br><br>";

// Decode into Associative Array
$arr = json_decode($jsonobj, true);
echo "<b>Decoded to Associative Array:</b><br>";
var_dump($arr);
?>

<h2>Accessing Decoded Values</h2>
<?php
echo "<b>From Object:</b><br>";
echo "Peter: " . $obj->Peter . "<br>";
echo "Ben: " . $obj->Ben . "<br>";
echo "Joe: " . $obj->Joe . "<br><br>";

echo "<b>From Associative Array:</b><br>";
echo "Peter: " . $arr["Peter"] . "<br>";
echo "Ben: " . $arr["Ben"] . "<br>";
echo "Joe: " . $arr["Joe"] . "<br>";
?>

<h2>Looping Through JSON Object</h2>
<?php
echo "<b>Loop through decoded object:</b><br>";
foreach($obj as $key => $value) {
    echo $key . " => " . $value . "<br>";
}
?>

</body>
</html>
