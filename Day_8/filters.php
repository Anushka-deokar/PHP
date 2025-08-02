<?php
// 1. List all available filters
echo "<h2>Available PHP Filters:</h2>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Filter Name</th><th>Filter ID</th></tr>";
foreach (filter_list() as $filter) {
    echo "<tr><td>$filter</td><td>" . filter_id($filter) . "</td></tr>";
}
echo "</table><br><br>";

// 2. Sanitize a String
echo "<h2>Sanitize a String:</h2>";
$str = "<h1>Hello World!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo "Original String: $str<br>";
echo "Sanitized String: $newstr<br><br>";

// 3. Validate an Integer
echo "<h2>Validate an Integer:</h2>";
$int = 100;
if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
    echo "$int is a valid integer.<br><br>";
} else {
    echo "$int is not a valid integer.<br><br>";
}

// 4. Validate an Integer including 0
echo "<h2>Validate an Integer (including 0):</h2>";
$int = 0;
if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
    echo "$int is a valid integer (including 0).<br><br>";
} else {
    echo "$int is not a valid integer.<br><br>";
}

// 5. Validate an IP Address
echo "<h2>Validate an IP Address:</h2>";
$ip = "127.0.0.1";
if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
    echo "$ip is a valid IP address.<br><br>";
} else {
    echo "$ip is not a valid IP address.<br><br>";
}

// 6. Sanitize and Validate an Email Address
echo "<h2>Sanitize and Validate an Email Address:</h2>";
$email = "someone@example.com";
$sanitizedEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
if (filter_var($sanitizedEmail, FILTER_VALIDATE_EMAIL)) {
    echo "$sanitizedEmail is a valid email address.<br>";
} else {
    echo "$sanitizedEmail is not a valid email address.<br>";
}
?>
