<?php

//starting session and storing data
session_start(); 
$_SESSION["username"] = "Anushka"; 
echo "Session has been set!";
echo "<br>";

//retrive session data
if(isset($_SESSION["username"])) {
    echo "Welcome, " . $_SESSION["username"];
} else {
    echo "No session found!";
}
echo "<br>";

//modify session value

$_SESSION["username"] = "ABC"; 
echo "Session value has been updated!";
echo "<br>";


//delete a specific session varible
unset($_SESSION["username"]); 
echo "Session variable deleted!";
echo "<br>";


//to destroy entire session
session_destroy(); 
echo "Session destroyed!";
echo "<br>";


//check if sessions are enabled
if(session_status() == PHP_SESSION_NONE) {
    echo "Sessions are not started!";
} else {
    echo "Sessions are enabled!";
}
?>
