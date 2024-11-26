<?php
// Include the database connection
include 'config.php';

// Query to fetch data
$sql = "SELECT * FROM partners_img";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='partner-item'>";
        echo "<a href='" . $row['link'] . "' target='_blank'>";
        echo "<img src='" . $row['image'] . "' alt='" . $row['alt'] . "'>";
        // echo "<p>" . $row['name'] . "</p>";
        echo "</a>";
        echo "</div>";
    }
} else {
    echo "<p>No partners found.</p>";
}

// Close connection
$conn->close();
?>
