<!DOCTYPE html>
<html>
    <body>
<form method="post">
    Enter age: <input type="number" name="age">
    <input type="submit" value="Submit">
</form>
<?php



if (isset($_POST['age'])) {
    $age = (int)$_POST['age'];
if ($age < 13) {
    echo " You should play with toys.\n";
} elseif ($age >= 13 && $age <= 18) {
    echo " Focus on studies.\n";
} elseif ($age >= 19 && $age <= 25) {
    echo " Time to start a career.\n";
} else {
    echo " Work-life balance is important.\n";
}

// Using switch 
switch (true) {
    case ($age < 13):
        echo " You should play with toys.\n";
        break;
    case ($age >= 13 && $age <= 18):
        echo " Focus on studies.\n";
        break;
    case ($age >= 19 && $age <= 25):
        echo "Time to start a career.\n";
        break;
    default:
        echo "Work-life balance is important.\n";
        break;
}
}
?>

</body>
</html>