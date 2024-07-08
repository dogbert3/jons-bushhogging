<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Recipient email address
    $to = 'kazuma.ervin@gmail.com';

    // Email subject
    $email_subject = 'Project Inquiry from Jon\'s Bushhogging Website: ' . $subject;

    // Email content
    $email_body = "You have received a new project inquiry:\n\n";
    $email_body .= "Name: $first_name $last_name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Subject: $subject\n";
    $email_body .= "Message:\n$message\n";

    // Email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Attempt to send email
    if (mail($to, $email_subject, $email_body, $headers)) {
        // Email sent successfully
        echo '<script>alert("Thank you for your inquiry. We will get back to you shortly.");';
        echo 'window.location.href = "index.php";</script>';
    } else {
        // Error sending email
        echo '<script>alert("Oops! Something went wrong. Please try again later.");';
        echo 'window.location.href = "quote.php";</script>';
    }
} else {
    // Redirect if accessed directly
    header("Location: quote.php");
    exit();
}
?>
