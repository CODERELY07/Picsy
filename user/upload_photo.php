<?php
session_start();
include('../includes/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['photo'])) {
    $user_id = $_SESSION['user_id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    // Handling file upload
    $targetDir = "../uploads/";
    $targetFile = $targetDir . basename($_FILES["photo"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if image file is a real image or fake image
    if (getimagesize($_FILES["photo"]["tmp_name"]) === false) {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size (Limit to 5MB)
    if ($_FILES["photo"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats (jpeg, png, jpg, gif)
    if (!in_array($imageFileType, ['jpg', 'jpeg', 'png', 'gif'])) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if uploadOk is set to 0 due to an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)) {
            $stmt = $pdo->prepare("INSERT INTO photos (user_id, title, description, file_path, price) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$user_id, $title, $description, $targetFile, $price]);
            echo "The file " . htmlspecialchars(basename($_FILES["photo"]["name"])) . " has been uploaded successfully.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="uploadForm" enctype="multipart/form-data">
        Title: <input type="text" name="title" required><br>
        Description: <textarea name="description" required></textarea><br>
        Price: <input type="text" name="price" required><br>
        Photo: <input type="file" name="photo" required><br>
        <button type="submit">Upload Photo</button>
    </form>

    <div id="uploadStatus"></div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src=""></script>
<script src="./../assets/js/main.js"></script>

</body>
</html>