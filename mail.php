<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Compose the email message
    $mailMessage = "Name: $name\n";
    $mailMessage .= "Phone: $phone\n";
    $mailMessage .= "Email: $email\n";
    $mailMessage .= "Message: $message\n";

    // Replace this email address with the desired recipient email
    $to = "admin@financeguild.com";
    $subject = "New Enquiry";

    // Additional headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Attempt to send the email
    if (mail($to, $subject, $mailMessage, $headers)) {
        echo "Your enquiry has been sent successfully.";
    } else {
        echo "Oops! Something went wrong and we couldn't send your enquiry.";
    }
} else {
    // If the form wasn't submitted, redirect to an error page or handle accordingly
    header("Location: index.html");
    exit();
}

?>
