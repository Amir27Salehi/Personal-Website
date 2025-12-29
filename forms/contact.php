<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = $email;

    $to = 'amir27salehi@yahoo.com';
    $subject = "Message from $name";

    $body = "From: $name\nE-Mail: $email\nMessage:\n$message";

    // Check if all required fields are filled
    if ($name && $email && $message) {
        if (mail($to, $subject, $body, "From: $from")) {
            $result = '<div class="alert alert-success">Thank You! I will be in touch</div>';
        } else {
            $result = '<div class="alert alert-danger">Sorry, there was an error sending your message. Please try again later</div>';
        }
    } else {
        $result = '<div class="alert alert-danger">Please fill in all the required fields</div>';
    }
}
?>
