<!DOCTYPE html>
<html>
    <body>
<?php

// Using if statement
$age = 20;
if ($age >= 18) {
    echo "You are eligible to vote.";
}

echo "<br>";

// Using if-else statement
$score = 75;
if ($score >= 50) {
    echo "You passed the exam.";
} else {
    echo "You failed the exam.";
}

echo "<br>";

// Using if-elseif-else statement
$marks = 85;
if ($marks >= 90) {
    echo "Grade: A";
} elseif ($marks >= 75) {
    echo "Grade: B";
} elseif ($marks >= 60) {
    echo "Grade: C";
} else {
    echo "Grade: F";
}

echo "<br>";

// Using shorthand if statement (Ternary Operator)
$number = 10;
echo ($number % 2 == 0) ? "Even Number" : "Odd Number";

echo "<br>";

// Using nested if statements
$salary = 5000;
$experience = 5;
if ($salary > 3000) {
    if ($experience >= 5) {
        echo "Eligible for Promotion";
    } else {
        echo "Not enough experience for promotion";
    }
} else {
    echo "Salary is too low for promotion consideration";
}

?>

</body>
</html>