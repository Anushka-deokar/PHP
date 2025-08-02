<!DOCTYPE>
<html>
    <head><link rel="stylesheet" href="style.css"></head>
    <body>

<?php
session_start();
include 'dbConnect.php';



$query = "SELECT * FROM info WHERE is_deleted = 0 LIMIT 20";
$result = mysqli_query($conn, $query);

echo "<table>
<tr>
<th>ID</th><th>Name</th><th>Photo</th><th>Gender</th><th>Address</th>
<th>City</th><th>State</th><th>Country</th><th>Status</th><th>Action</th>
</tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
    <td>{$row['student_id']}</td>
    <td>{$row['name']}</td>
    <td><img src='uploads/{$row['photo']}' width='50'></td>
    <td>{$row['gender']}</td>
    <td>{$row['address']}</td>
    <td>{$row['city']}</td>
    <td>{$row['state']}</td>
    <td>{$row['country']}</td>
    <td>{$row['status']}</td>
    <td>
        <a href='edit.php?student_id={$row['student_id']}'>Edit</a> | 
        <a href='delete.php?student_id={$row['student_id']}' onclick='return confirm(\"Are you sure you want to delete?\");'>Delete</a> | 
        <a href='status.php?student_id={$row['student_id']}&status=" . ($row['status'] == 'Active' ? 'Inactive' : 'Active') . "'>"
        . ($row['status'] == 'Active' ? 'Inactivate' : 'Activate') . "</a>
    </td>
    </tr>";
}
echo "</table>";


echo "<br><br><center>
    <a href='add.php' class='add-button'>Add Student</a>
</center>";
?>
</body>
</html>

