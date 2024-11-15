<?php

// Include the composer autoload file
require 'vendor/autoload.php';

use Dotenv\Dotenv;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load the .env file
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Retrieve email settings from environment variables
$emailUsername = $_ENV['MAIL_USERNAME'] ?? null;
$emailPassword = $_ENV['MAIL_PASSWORD'] ?? null;
$emailHost = $_ENV['MAIL_HOST'] ?? 'smtp.gmail.com';
$emailPort = $_ENV['MAIL_PORT'] ?? 587;

// Check if the environment variables are set
if (!$emailUsername || !$emailPassword) {
    die("Environment variables are not set. Check your .env file.");
}

// Check if the form was submitted and POST variables exist
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'], $_POST['email'], $_POST['message'])) {
    // Sanitize and get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->SMTPAuth = true;

    $mail->Host = $emailHost;
    $mail->Port = $emailPort;

    $mail->Username = $emailUsername;
    $mail->Password = $emailPassword;

    $mail->setFrom($emailUsername, $_ENV['MAIL_FROM_NAME']);
    $mail->addAddress($_ENV['MAIL_FROM_ADDRESS'], $_ENV['MAIL_FROM_NAME']);
    $mail->Subject = "New Message from " . $name;
    $mail->Body = $message;

    // send the message
    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }

} else {
    echo "Error: Missing form data.";
}