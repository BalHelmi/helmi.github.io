<?php
$receiving_email_address = 'balhoudihelmi@gmail.com';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $headers = "From: $email";

    $success = mail($receiving_email_address, $subject, $message, $headers);

    if ($success) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send the message.";
    }
}
?>

