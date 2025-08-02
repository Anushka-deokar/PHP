<!DOCTYPE html>
<html>
<body>
<?php
$color="Blue";

switch($color){
    case "Blue":
        echo "Your favourite color is blue";
        break;

    case "red":
        echo "Your fav color is red";
        break;
        
        default:
        echo "!!!!";

}


$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
  case "blue":
    "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}

?>
</body>
    </html>