<?php
// to create a file using fopen() and write mode

$myfile = fopen("sample.txt", "w") or die("Unable to open file!");
$name = "Anushka Deokar\n";
fwrite($myfile, $name);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);

echo "<br>";

//Appending 
$myfile = fopen("sample.txt", "a") or die("Unable to open file!");
$txt = "Welcome\n";
fwrite($myfile, $txt);
fclose($myfile);


?>