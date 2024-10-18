<?php
// Load .env variables
require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Access environment variables
$appName = getenv('APP_NAME');
$dbHost = getenv('DB_HOST');
$mailUsername = getenv('MAIL_USERNAME');
?>
