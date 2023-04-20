<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'futurehugeradio@gmail.com'; // Replace with your email address
    $subject = 'New message from FutureHugeRadio website';
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    mail($to, $subject, $body, $headers);

    // Redirect the user to a thank you page
    header("Location: thank_you.html");
    exit;
}
?>