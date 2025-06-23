<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name    = strip_tags(trim($_POST["name"] ?? ''));
    $email   = filter_var(trim($_POST["email"] ?? ''), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"] ?? '');

    if ($name && $email && $message) {
        // Example mail logic (update these variables for your own use)
        $to = "segepeter71@email.com";
        $subject = "Contact Form Message from $name";
        $body = "Name: $name\nEmail: $email\nMessage:\n$message";
        $headers = "From: $email\r\nReply-To: $email";

        // Uncomment to enable real sending:
        // mail($to, $subject, $body, $headers);

        // For demo: always return OK
        echo "OK";
        exit;
    } else {
        echo "Please fill in all fields.";
        exit;
    }
}
echo "Invalid request.";
?>