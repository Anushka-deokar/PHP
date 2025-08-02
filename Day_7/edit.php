<?php
include 'dbConnect.php';
session_start();

$id = intval($_GET['student_id']); 
$sql = "SELECT * FROM info WHERE student_id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

$errors = []; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $gender = htmlspecialchars($_POST['gender']);
    $address = htmlspecialchars($_POST['address']);
    $country = htmlspecialchars($_POST['country']);
    $state = htmlspecialchars($_POST['state']);
    $city = htmlspecialchars($_POST['city']);
    
    $photoName = $row['photo']; 
    
   
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
        $allowedTypes = ['image/png', 'image/jpg', 'image/jpeg'];
        
        if (!in_array($_FILES['photo']['type'], $allowedTypes)) {
            $errors[] = "Only PNG, JPG, JPEG files are allowed.";
        }
        
        if ($_FILES['photo']['size'] > 1048576) {
            $errors[] = "File size should not exceed 1MB.";
        }

        if (empty($errors)) {
            $uploadDir = 'uploads/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }
            
           
            $originalName = preg_replace("/[^A-Za-z0-9_-]/", "", pathinfo($_FILES['photo']['name'], PATHINFO_FILENAME));
            $extension = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
            $newPhotoName = $originalName . '.' . $extension;
            
      
            $i = 1;
            while (file_exists($uploadDir . $newPhotoName)) {
                $newPhotoName = $originalName . '_' . $i . '.' . $extension;
                $i++;
            }

           
            move_uploaded_file($_FILES['photo']['tmp_name'], $uploadDir . $newPhotoName);

            
            if (!empty($row['photo']) && file_exists($uploadDir . $row['photo'])) {
                unlink($uploadDir . $row['photo']);
            }

            $photoName = $newPhotoName; 
        }
    }

   
    if (empty($errors)) {
        $updateSql = "UPDATE info SET name=?, gender=?, address=?, country=?, state=?, city=?, photo=? WHERE student_id=?";
        $stmt = $conn->prepare($updateSql);
        $stmt->bind_param("sssssssi", $name, $gender, $address, $country, $state, $city, $photoName, $id);
        
        if ($stmt->execute()) {
            header("Location: list.php"); 
            exit();
        } else {
            $errors[] = "Error updating student information.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Student</title>
    
      <link rel="stylesheet" href="edit.css">
</head>
<body>

<h2>Edit Student</h2>

<?php if (!empty($errors)): ?>
    <div class="error">
        <?php foreach ($errors as $error): ?>
            <p><?php echo htmlspecialchars($error); ?></p>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label>Name:</label><br>
        <input type="text" name="name" value="<?php echo htmlspecialchars($row['name']); ?>" required>
    </div>
    <div class="form-group">
        <label>Gender:</label><br>
        <input type="text" name="gender" value="<?php echo htmlspecialchars($row['gender']); ?>" required>
    </div>
    <div class="form-group">
        <label>Address:</label><br>
        <input type="text" name="address" value="<?php echo htmlspecialchars($row['address']); ?>">
    </div>
    <div class="form-group">
        <label>Country:</label><br>
        <input type="text" name="country" value="<?php echo htmlspecialchars($row['country']); ?>" required>
    </div>
    <div class="form-group">
        <label>State:</label><br>
        <input type="text" name="state" value="<?php echo htmlspecialchars($row['state']); ?>" required>
    </div>
    <div class="form-group">
        <label>City:</label><br>
        <input type="text" name="city" value="<?php echo htmlspecialchars($row['city']); ?>" required>
    </div>

    <div class="form-group">
        <label>Photo:</label><br>
        <input type="file" name="photo">
        <?php if (!empty($row['photo'])): ?>
            <br><img src="uploads/<?php echo htmlspecialchars($row['photo']); ?>" alt="Student Photo">
        <?php endif; ?>
    </div>

    <button type="submit">Update</button>
</form>

</body>
</html>
