<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

// Database connection
$host = 'localhost';
$user = 'root'; // Replace with your MySQL username
$password = ''; // Replace with your MySQL password
$dbname = 'abir_printers'; // Your database name

// Connect to the database
$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(["error" => "Database connection failed: " . $conn->connect_error]));
}

// Fetch data from the partners_img table
$query = "SELECT * FROM partners_img";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $partners = [];
    while ($row = $result->fetch_assoc()) {
        $partners[] = $row;
    }
    echo json_encode($partners);
} else {
    echo json_encode(["message" => "No data found"]);
}

$conn->close();
?>
