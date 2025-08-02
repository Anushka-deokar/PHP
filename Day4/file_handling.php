<?php

  $a = readfile('myfile.txt');
  echo $a;
  echo"<br>";
  //open file using fopen()
  $myfile = fopen("myfile.txt", "r") or die("Unable to open file!");
  

  //using fread function
  echo fread($myfile,filesize("myfile.txt"));

  //to close an open file we use
  fclose($myfile);
 // echo fread($myfile,filesize("myfile.txt"));

echo "<br>";
 //fgets
 $myfile = fopen("myfile.txt", "r") or die("Unable to open file!");
 echo fgets($myfile);
fclose($myfile);

echo "<br><br>";

//To check end of file 
$myfile = fopen("myfile.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>