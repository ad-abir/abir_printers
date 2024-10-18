<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo 'POST request received!';
    echo 'Name: ' . $_POST['name'];
    echo 'Email: ' . $_POST['email'];
    echo 'Message: ' . $_POST['message'];
} else {
    echo 'Please use POST method.';
}
