<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $to = 'jefferyemuodafevware7@gmail.com';  // Recipient's email
    $subject = 'Inquiry About My Portfolio';   // Subject
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $headers = 'From: jeffemuodafe124@gmail.com' . "\r\n" .
               'Reply-To: jeffemuodafe124@gmail.com';  // Your email

    // Construct the message
    $fullMessage = "Name: $name\nEmail: $email\nMessage: $message";

    // Send the email
    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "Message sent successfully.";
    } else {
        echo "Message could not be sent.";
    }
}
?>
