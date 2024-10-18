<?php

// Include the config.php to load the .env file
require_once __DIR__ . '/config.php';

// Use the environment variables for sending an email
$emailUsername = getenv('MAIL_USERNAME');
$emailPassword = getenv('MAIL_PASSWORD');
$emailHost = getenv('MAIL_HOST');
$emailPort = getenv('MAIL_PORT');
$emailEncryption = getenv('MAIL_ENCRYPTION');

// Include the composer autoload file
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

// Load the .env file (make sure the .env file is correctly set up)
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get values from the form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set up PHPMailer
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    
    // Use credentials from the .env file
    $mail->Username = $_ENV['EMAIL_USERNAME'];
    $mail->Password = $_ENV['EMAIL_PASSWORD'];
    
    // Set the sender and recipient
    $mail->setFrom($email, $name);
    $mail->addAddress("abhishek.das0023@gmail.com", "Abhishek Das");
    
    // Email subject and body
    $mail->Subject = 'Contact Form Submission';
    $mail->Body = $message;

    try {
        $mail->send();
        echo "Email has been sent!";
    } catch (Exception $e) {
        echo "Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Invalid request method.";
}
?>
