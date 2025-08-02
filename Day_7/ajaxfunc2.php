<?php
include 'dbConnect.php';

if (isset($_GET['state_id'])) {
    $state_id = $_GET['state_id'];
    $result = mysqli_query($conn, "SELECT city_id, city_name FROM cities WHERE state_id = $state_id");

    echo "<option value=''>Select City</option>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value='{$row['city_id']}'>{$row['city_name']}</option>";
    }
}
?>
