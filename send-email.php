<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "abhishek.das0023@gmail.com";
$mail->Password = "password";

$mail->setFrom($email, $name);
$mail->addAddress("abhishek.das0023@gmail.com", "Abhishek Das");

// $mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

echo "Email has been sent!";

?>