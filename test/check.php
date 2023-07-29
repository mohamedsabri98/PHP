<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle file upload
    if (isset($_FILES['file'])) {
        // Check if there was an error uploading the file
        if ($_FILES['file']['error'] == UPLOAD_ERR_OK) {
        // Upload file to server
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
        move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
        echo "The file ". htmlspecialchars(basename($_FILES["file"]["name"])) . " has been uploaded.";
        } else {
        echo "Sorry, there was an error uploading your file.";
        }
    }
    }
    ?>
<html>
    <form method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit">Upload</button>
    </form>
</html>