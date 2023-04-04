<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Validate the form data (you can add your own validation rules)
    $errors = [];
    if (empty($name)) {
        $errors[] = 'Name is required.';
    }
    if (empty($email)) {
        $errors[] = 'Email is required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Invalid email format.';
    }
    if (empty($subject)) {
        $errors[] = 'Subject is required.';
    }
    if (empty($message)) {
        $errors[] = 'Message is required.';
    }

    // If there are no errors, send the email and show a success message
    if (empty($errors)) {
        echo "<h1>Message Sent Successfully </h1>";
    }
} else {
    // If the request method is not POST, redirect to the contact page
    header("contact.php");
    exit;
}
