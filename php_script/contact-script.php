<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $firstname = htmlspecialchars($_POST['firstname'] ?? '');
    $lastname = htmlspecialchars($_POST['lastname'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $mobile = htmlspecialchars($_POST['mobile'] ?? '');
    $comments = htmlspecialchars($_POST['comment'] ?? '');

    // Validate data
    if (empty($firstname) || empty($lastname) || empty($email) || empty($mobile) || empty($comments)) {
        echo "All fields are required.";
        exit;
    }

    // Simulate saving to a database or processing the data
    // In a real scenario, insert into a database here

    echo "Thank you, $firstname! Your Message  has been submitted.";
} else {
    echo "Invalid request.";
}
?>