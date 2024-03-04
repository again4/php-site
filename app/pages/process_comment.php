<?php
// Process the submitted form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comment = $_POST["comment"]; // Get comment text
    $photo = $_FILES["photo"]["name"]; // Get photo filename
    $targetDir = "uploads/"; // Directory to upload photos
    $targetFile = $targetDir . basename($photo); // Path to upload photo
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)) {
        // Photo uploaded successfully
        echo "Comment submitted successfully with photo: " . $comment;
    } else {
        // Error uploading photo
        echo "Error uploading photo.";
    }
} else {
    // Invalid request method
    echo "Invalid request method.";
}
?>
