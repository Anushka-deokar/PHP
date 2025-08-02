<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $dob = htmlspecialchars($_POST['dob']);
    $address = htmlspecialchars($_POST['address']);
    $city = htmlspecialchars($_POST['city']);
    $state = htmlspecialchars($_POST['state']);
    $country = htmlspecialchars($_POST['country']);

    
    $data = "$name, $email, $password, $dob, $address, $city, $state, $country\n";

  
    $file = fopen("user_info.txt", "a"); 
    fwrite($file, $data);
    fclose($file);

    echo "<h2>Registration Successful!</h2>";
    
} else {
    echo "Invalid Request.";
}
?>
