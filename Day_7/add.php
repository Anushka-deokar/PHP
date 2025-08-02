<?php
session_start();
include 'dbConnect.php';

$errors = [];
$success = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $gender = $_POST['gender'];
    $address = trim($_POST['address']);
    // $country = $_POST['country'];
    // $state = $_POST['state'];
    // $city = $_POST['city'];
    $status = 'Active';
    $country_id = $_POST['country'];
    $state_id = $_POST['state'];
    $city_id = $_POST['city'];
    $photoName = '';

   
    if (empty($name)) $errors[] = "Name is required.";
    if (empty($gender)) $errors[] = "Gender is required.";
    if (strlen($address) > 255) $errors[] = "Address must be within 255 characters.";

    echo "<br>";
   

    if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
        $allowedTypes = ['image/png', 'image/jpg', 'image/jpeg'];
        if (!in_array($_FILES['photo']['type'], $allowedTypes)) {
            $errors[] = "Only PNG, JPG, JPEG files are allowed.";
        }
        if ($_FILES['photo']['size'] > 1048576) {
            $errors[] = "File size should not exceed 1MB.";
        }

        $uploadDir = 'uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $originalName = pathinfo($_FILES['photo']['name'], PATHINFO_FILENAME);
        $extension = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
        $photoName = $originalName . '.' . $extension;
        $i = 1;
        while (file_exists($uploadDir . $photoName)) {
            $photoName = $originalName . '_' . $i . '.' . $extension;
            $i++;
        }
        move_uploaded_file($_FILES['photo']['tmp_name'], $uploadDir . $photoName);
    }
   
    $countryResult = $conn->query("SELECT country_name FROM countries WHERE country_id = $country_id");
    $countryRow = $countryResult->fetch_assoc();
    $country = $countryRow['country_name'];  
    
    $stateResult = $conn->query("SELECT name FROM states WHERE state_id = $state_id");
    $stateRow = $stateResult->fetch_assoc();
    $state = $stateRow['name'];  
    
    $cityResult = $conn->query("SELECT city_name FROM cities WHERE city_id = $city_id");
    $cityRow = $cityResult->fetch_assoc();
    $city = $cityRow['city_name'];  

    if (empty($errors)) {
        $stmt = $conn->prepare("INSERT INTO info (name, photo, gender, address, country, state, city, status, is_deleted) VALUES (?, ?, ?, ?, ?, ?, ?, ?, 0)");
        $stmt->bind_param("ssssssss", $name, $photoName, $gender, $address, $country, $state, $city, $status);

        if ($stmt->execute()) {
            $success = "Student created successfully!";

          
            $logFolder = 'logs/';
            if (!file_exists($logFolder)) {
                mkdir($logFolder, 0777, true);
            }
            $logFile = $logFolder . 'log_' . date('dFY') . '.txt';
            $userId = $_SESSION['user_id'] ?? 1;
            $logMsg = "[" . date('d-M-Y') . "][$userId] Student created successfully" . PHP_EOL;
            file_put_contents($logFile, $logMsg, FILE_APPEND);
        } else {
            $errors[] = "Error saving data.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Student</title>
    <script src="validate.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2 style="text-align: center;">Add Student</h2>

    <?php if (!empty($errors)): ?>
        <div style="color:red;">
            <?php foreach ($errors as $error) echo "<p>$error</p>"; ?>
        </div>
    <?php endif; ?>

    <?php if ($success): ?>
        <div style="color:green;"><?php echo $success; ?></div>
    <?php endif; ?>

    <form action="" method="POST" enctype="multipart/form-data" class="add-form" onsubmit="return validateForm();">
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Photo:</label><br>
        <input type="file" name="photo" required><br><br>

        <label for="gender">Gender:</label><br>

        <input type="radio" id="male" name="gender" value="M" required>
        <label for="male">Male</label>

          <input type="radio" id="female" name="gender" value="F" required>
          <label for="female">Female</label>


        <label>Address:</label><br>
        <textarea name="address" maxlength="255"></textarea><br><br>

        <label>Country:</label>
        <select name="country" id="country" onchange="ajax_state()" required>
            <option value=""> Select Country </option>
            <?php
                $countries = $conn->query("SELECT * FROM countries");
                while ($row = $countries->fetch_assoc()) {
                    echo "<option value='{$row['country_id']}'>{$row['country_name']}</option>";
                }
            ?>
            </select>

             <label>State:</label><br>
            <select name="state" id="state" onchange="ajax_city()" required>
               <option value="">Select State</option>
             </select><br><br>


        <label>City:</label><br>
       <select name="city" id="city" required>
       <option value="">Select City</option>
       </select><br><br>

        <button type="submit">Add Student</button>
    </form>

    <script>

function ajax_state() {

var countryselect = document.getElementById('country').value;

console.log(countryselect);  

var xhttp = new XMLHttpRequest(); 

xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       
        document.getElementById("state").innerHTML = this.responseText;
      
    }
};


xhttp.open("GET", "ajaxfunc.php?country_id=" + countryselect, true);
xhttp.send();
}


function ajax_city() {

var stateselect = document.getElementById('state').value;

console.log(stateselect);  

var xhttp = new XMLHttpRequest();  

xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("city").innerHTML = this.responseText;
        
    }
};


xhttp.open("GET", "ajaxfunc2.php?state_id=" + stateselect, true);
xhttp.send();
}

        </script>

    <br>
    <div style="text-align: center;">
  <a href="list.php" style="color: black; text-decoration: none;">View Students</a>
</div>


</body>
</html>
