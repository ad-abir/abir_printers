<?php
// Include the database connection
include 'config.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch video metadata
$sql = "SELECT video_src, video_type FROM videos WHERE id = 1"; // Update ID as per your requirement
$result = $conn->query($sql);

$video_src = '';
$video_type = '';

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $video_src = $row['video_src'];
    $video_type = $row['video_type'];
} else {
    echo "No video found.";
}

$conn->close();
?>
