<?php
//create a cookie
setcookie("user", "Anushka", time() + 3600, "/"); 
echo "Cookie has been set!";
echo "<br>";
//retriving cookie value
if(isset($_COOKIE["user"])) {
    echo "User Cookie Value: " . $_COOKIE["user"];
} else {
    echo "Cookie is not set!";
}
echo "<br>";

//modify a cookie
setcookie("user", "XYZ ", time() + 3600, "/"); 
echo "Cookie value has been updated!";
echo "<br>";


//Deleting a cookie
setcookie("user", "", time() - 3600, "/");
echo "Cookie has been deleted!";

echo "<br>";

//to check if cookies are enabled or disabled
if(count($_COOKIE) > 0) {
    echo "Cookies are enabled!";
} else {
    echo "Cookies are disabled!";
}


?>