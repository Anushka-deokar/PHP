<?php
//overwrite
$myfile = fopen("sample.txt", "w") or die("Unable to open file!");
$txt = "Mickey Mouse\n";
fwrite($sample, $txt);
$txt = "Minnie Mouse\n";
fwrite($sample, $txt);
fclose($sample);
?>