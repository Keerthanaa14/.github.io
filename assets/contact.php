<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = 'conveykeerthi@gmail.com'; // Replace with your email address
    $headers = "From: $name <$email>";
    $body = "Subject: $subject\n\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo 'Message sent successfully!';
    } else {
        echo 'An error occurred. Please try again later.';
    }
}
?>
