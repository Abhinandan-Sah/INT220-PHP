<?php
// Check if a file was uploaded
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {
    $uploadDir = 'uploads/';
    $file = $_FILES['image'];
    $fileName = basename($file['name']);
    $targetFilePath = $uploadDir . $fileName;
    $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
    $fileSize = $file['size'];

    // Validate file type
    $allowedTypes = ['jpeg', 'jpg', 'png', 'gif'];
    if (!in_array($fileType, $allowedTypes)) {
        echo "<p>Invalid file type. Only JPEG, PNG, and GIF files are allowed.</p>";
        exit;
    }

    // Validate file size (max 3MB)
    if ($fileSize > 3 * 1024 * 1024) {
        echo "<p>File size exceeds the 3MB limit.</p>";
        exit;
    }

    // Move the uploaded file to the 'uploads' directory
    if (move_uploaded_file($file['tmp_name'], $targetFilePath)) {
        echo "<p>Image uploaded successfully.</p>";
    } else {
        echo "<p>Failed to upload the image. Please try again.</p>";
    }

    // Redirect to the index page after upload
    header("Location: index.php");
} else {
    echo "<p>No file uploaded.</p>";
}
?>
