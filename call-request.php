<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $phone = $_POST["phone"];

    // Compose the email message
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Subject: $subject\n";
    $message .= "Phone: $phone\n";

    // Replace this email address with the desired recipient email
    $to = "admin@thefinanceguild.com";
    $subject = "New Call Request";

    // Additional headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Attempt to send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Your request has been sent successfully.";
    } else {
        echo "Oops! Something went wrong and we couldn't send your request.";
    }
} else {
    // If the form wasn't submitted, redirect to an error page or handle accordingly
    header("Location: index.html");
    exit();
}

?>
