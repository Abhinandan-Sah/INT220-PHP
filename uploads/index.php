<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Image Gallery</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 10px;
            padding: 20px;
        }
        .gallery img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<h1>Simple Image Gallery</h1>

<!-- Upload Form -->
<form action="upload.php" method="POST" enctype="multipart/form-data">
    <label for="image">Select an image to upload (JPEG, PNG, GIF only):</label><br>
    <input type="file" name="image" id="image" accept="image/jpeg, image/png, image/gif" required><br><br>
    <button type="submit">Upload Image</button>
</form>

<!-- Display Uploaded Images -->
<h2>Image Gallery</h2>
<div class="gallery">
    <?php
    $imageDir = 'uploads/';
    $images = array_diff(scandir($imageDir), array('.', '..'));

    if (empty($images)) {
        echo "<p>No images uploaded yet.</p>";
    } else {
        foreach ($images as $image) {
            echo "<div><img src='$imageDir$image' alt='Image'></div>";
        }
    }
    ?>
</div>

</body>
</html>
