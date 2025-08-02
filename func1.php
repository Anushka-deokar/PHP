<!DOCTYPE html>
<html>
<body>

<?php
function myMessage() {
  echo "Hello world!";
}

myMessage();



//PHP function arguments

function familyName($fname) {
    echo "$fname Refrence_names.<br>";
  }
  
  familyName("Jani");
  familyName("Hege");
  familyName("Stale");
  familyName("Kai Jim");
  familyName("Borge<br>");

//Default argument value

function setHeight($minheight = 50) {
    echo "The height is : $minheight <br>";
  }
  
  setHeight(350);
  setHeight(); // will use the default value of 50
  setHeight(135);
  setHeight(80);

?> 

</body>
</html>