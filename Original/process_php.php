<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $msg_subject = $_POST["msg_subject"];
    $message = $_POST["message"];

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    // Compose the email message
    $to = "sathish8608855@gmail.com"; // Replace with the recipient's email address
    $subject = "New Message: $msg_subject";
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Phone Number: $phone_number\n";
    $email_body .= "Message: $message\n";

    // Send the email
    if (mail($to, $subject, $email_body)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send the message. Please try again later.";
    }
}
?>
