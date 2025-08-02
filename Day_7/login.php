<!DOCTYPE html>
<html>
<body>
<form method="POST">
    <label>Username:</label>
    <input type="text" name="user_name" required><br><br>

    <label>Password:</label>
    <input type="password" name="password" required><br><br>

    <button type="submit" name="login">Login</button>
</form>


<?php

session_start();
include('dbConnect.php');

if (isset($_POST['login'])) {
    $username = $_POST['user_name'];
    $pass = md5($_POST['password']); 

    $sql = "SELECT * FROM users WHERE user_name = '$username' AND password = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['user_id'] = $row['user_id']; 
        header("Location: list.php"); 
        exit();
    } else {
        echo "Invalid username or password!";
    }
}

    
    



?>
</body>
</html>