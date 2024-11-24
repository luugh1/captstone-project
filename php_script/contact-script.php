<?php
include_once("php_functions.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $firstname = ucfirst(htmlspecialchars($_POST['firstname'] ?? ''));
    $lastname = htmlspecialchars($_POST['lastname'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $mobile = htmlspecialchars($_POST['mobile'] ?? '');
    $comments = htmlspecialchars($_POST['comment'] ?? '');
    $messageId = str_pad(random_int(1, 999999999999), 12, '0', STR_PAD_LEFT);
    // Validate data
    if (empty($firstname) || empty($lastname) || empty($email) || empty($mobile) || empty($comments)) {
        echo "All fields are required.";
        exit;
    } else {
        $check_dup = $connection->prepare("SELECT email,mobile FROM contact_us WHERE email=:email AND mobile=:mobile");
        $result = $check_dup->execute([':email' => $email, ':mobile' => $mobile]);
        if ($check_dup->rowCount() < 1) {
            $send_details = "INSERT INTO `contact_us`(`supportID`, `firstname`, `lastname`, `email`, `mobile`, `comment`, `sent_date`, `status`) 
        VALUES (:supportID,:firstname,:lastname,:email,:mobile,:comment,:curdate,:status)";
            $send_comment = $connection->prepare($send_details);
            $send_comment->execute([
                ':supportID' => $messageId,
                ':firstname' => ucwords($firstname),
                ':lastname' => ucfirst($lastname),
                ':email' => $email,
                ':mobile' => $mobile,
                ':comment' => $comments,
                ':curdate' => date("Y-m-d H:i:s"),
                ':status' => "Unread"
            ]);

            if ($send_comment) {
                echo "Thank you, " . ucwords($firstname) . "! Your Message  has been submitted.";
            }
        } else {
            echo "Hi, " . ucwords($firstname) . " ! Your message has already been sent, a reply will be sent to you as soon as possible";
        }
    }
} else {
    echo "Invalid request.";
}
