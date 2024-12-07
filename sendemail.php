<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate the data
    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill out all fields.";
    } else {
        // Email details
        $to = "tasnim.chiboub@ieee.org";
        $subject = "New message from " . $name;
        $body = "You have received a new message from your website contact form.\n\n" .
                "Name: " . $name . "\n" .
                "Email: " . $email . "\n" .
                "Message:\n" . $message;

        // Send email
        $headers = "From: " . $email . "\r\n" .
                   "Reply-To: " . $email . "\r\n" .
                   "Content-Type: text/plain; charset=UTF-8";

        if (mail($to, $subject, $body, $headers)) {
            echo "Thank you for your message!";
        } else {
            echo "Sorry, something went wrong. Please try again later.";
        }
    }
}
?>
