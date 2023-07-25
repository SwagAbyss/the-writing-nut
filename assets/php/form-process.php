<?php
// Define the recipient email address
$recipient_email = "sathish8608855@gmail.com";

// Check if the form is submitted using POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $msg_subject = $_POST["msg_subject"];
    $phone_number = $_POST["phone_number"];
    $message = $_POST["message"];

    // Compose the email content
    $subject = "Contact Form Submission - " . $msg_subject;
    $body = "Name: " . $name . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Phone Number: " . $phone_number . "\n";
    $body .= "Message: " . $message . "\n";

    // Set the additional headers
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";

    // Send the email using the mail() function
    $mail_sent = mail($recipient_email, $subject, $body, $headers);

    // Check if the email was sent successfully
    if ($mail_sent) {
        // Email sent successfully
        echo "Email sent to sathish8608855@gmail.com";
    } else {
        // Email sending failed
        echo "Failed to send the email. Please try again later.";
    }
} else {
    // If the form is not submitted using POST method
    echo "Invalid request. Please submit the form first.";
}
?>



