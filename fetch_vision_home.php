<?php
// Include the database connection
include 'config.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch future planning data
$sql = "SELECT title, content, image_paths FROM future_planning WHERE id = 1";
$result = $conn->query($sql);

$title = '';
$content = '';
$image_paths = [];

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $title = $row['title'];
    $content = $row['content'];
    $image_paths = explode(',', $row['image_paths']);
} else {
    echo "No data found.";
}

$conn->close();
?>
