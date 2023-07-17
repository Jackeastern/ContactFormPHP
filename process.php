<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validate form data (you can add more validation rules as needed)
    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill out all fields!";
    } else {
        // Send email
        $to = "oostenjac+pho@gmail.com"; // Replace with your email address
        $subject = "New Contact Form Submission";
        $body = "Name: $name\nEmail: $email\nMessage: $message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            echo "Thank you for contacting us!";
        } else {
            echo "Oops! Something went wrong.";
        }
    }
}
?>