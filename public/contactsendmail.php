<?php
// Fetch values from URL parameters
$name = $_GET['name'] ?? '';
$email = $_GET['email'] ?? '';
$msg = $_GET['msg'] ?? '';

// Check if parameters exist
if ($name && $email && $msg) {
    $to = "mahalerang@gmail.com";  // Your email
    $subject = "Contact Form Message from $name from QuickDrop";
    $message = "Name: $name\nEmail: $email\nMessage: $msg";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "<script> 
                alert('Email Send Successfuly!');
                window.location.href = 'index.php'; 
              </script>";
    } else {
        echo "<script> 
                alert('Email not Send Try Again!');
                window.location.href = 'contact.php'; 
              </script>";
    }
}
?>
