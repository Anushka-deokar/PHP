<?php
session_start();
include 'dbConnect.php';

$student_id = (int)$_GET['student_id'];  
$status = $_GET['status'];

$sql = "UPDATE info SET status='$status' WHERE student_id=$student_id";
echo $sql;
if ($conn->query($sql) === TRUE) {
    
    $logFile = "logs/log_" . date('dFY') . ".txt";
    $logMsg = "[" . date('d-M-Y H:i:s') . "][" . $_SESSION['user_id'] . "] Status changed to $status for student_id $student_id\n";
    file_put_contents($logFile, $logMsg, FILE_APPEND);

    header("Location: list.php");
    exit;
} else {
    echo "Error updating record: " . $conn->error;
}
?>


