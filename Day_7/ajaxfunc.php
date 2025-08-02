<?php
include 'dbConnect.php';

if (isset($_GET['country_id'])) {
    $country_id = $_GET['country_id'];
    $result = mysqli_query($conn, "SELECT state_id, name FROM states WHERE country_id = $country_id");

    echo "<option value=''>Select State</option>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value='{$row['state_id']}'>{$row['name']}</option>";
    }
}
?>
