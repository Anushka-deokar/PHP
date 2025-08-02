<?php
session_start();
include 'dbConnect.php';

$student_id = (int)$_GET['student_id'];

$sql = "UPDATE info SET is_deleted=1 WHERE student_id=$student_id";

if ($conn->query($sql) === TRUE) {
    
    $logFile = "logs/log_" . date('dFY') . ".txt";
    $logMsg = "[" . date('d-M-Y H:i:s') . "][" . $_SESSION['user_id'] . "] Student deleted student_id $student_id\n";
    file_put_contents($logFile, $logMsg, FILE_APPEND);

    header("Location: list.php");
    exit;
} else {
    echo "Error deleting record: " . $conn->error;
}
?>
