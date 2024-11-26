<?php
// Include the database connection
include 'config.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch content and image for the About Us section
$sql = "SELECT title, content, image_path FROM about_us WHERE id = 1"; // Update ID as needed
$result = $conn->query($sql);

$title = '';
$content = '';
$image_path = '';

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $title = $row['title'];
    $content = $row['content'];
    $image_path = $row['image_path'];
} else {
    echo "No content found.";
}

$conn->close();
?>
