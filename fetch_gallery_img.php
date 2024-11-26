<?php
// Include your database connection file
include 'config.php'; 

// Query to fetch the images from the database
$query = "SELECT * FROM gallery_images";
$result = mysqli_query($conn, $query);

// Check if the query returns results
if ($result) {
    // Loop through each image record and generate HTML for each image
    while ($row = mysqli_fetch_assoc($result)) {
        $image_url = $row['image_url'];  // Image URL
        $alt_text = $row['alt_text'];  // Image Alt Text
        // Output each image as a swiper-slide
        echo '<div class="swiper-slide"><img src="' . $image_url . '" alt="' . $alt_text . '"></div>';
    }
} else {
    echo "<p>No images found.</p>";
}
?>
