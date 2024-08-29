<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "mirmd.mabrur@gmail.com";
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    // Additional headers
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        alert ("Message sent successfully!");
    } else {
        alert("Failed to send message.");
    }
}
?>
