<?php
$to = 'jefferyemuodafevware7@gmail.com';  // Recipient's email
$subject = 'Inquiry About My Portfolio';   // Subject of the email
$message = 'Hello, I would love to share my portfolio with you and hear your thoughts!';  // Body of the email
$headers = 'From: jeffemuodafe124@gmail.com' . "\r\n" .  // Your email address
           'Reply-To: jeffemuodafe124@gmail.com';  // Your email address

// Send the email
mail($to, $subject, $message, $headers);
?>
