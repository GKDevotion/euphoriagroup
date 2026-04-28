<?php
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $full_name = trim($_POST["full_name"] ?? "");
    $email     = trim($_POST["email"] ?? "");
    $phone     = trim($_POST["phone"] ?? "");
    $service   = trim($_POST["service"] ?? "");
    $message   = trim($_POST["message"] ?? "");

    if (!$full_name || !$email || !$phone || !$service || !$message) {
        echo json_encode([
            "status" => "error",
            "message" => "All fields are required"
        ]);
        exit;
    }

    // Receiver email
    $to = "info@theeuphoriagroup.com";

    // Subject
    $subject = "New Contact Form Message From Euphoria Website";

    // Email content
    $body = "You have received a new message:\n\n";
    $body .= "Name: $full_name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Service: $service\n\n";
    $body .= "Message:\n$message\n";

    // Headers
    $headers = "From: Website <no-reply@theeuphoriagroup.com>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send mail
    if (mail($to, $subject, $body, $headers)) {
        echo json_encode([
            "status" => "success",
            "message" => "Message sent successfully!"
        ]);
    } else {
        echo json_encode([
            "status" => "error",
            "message" => "Mail function failed!"
        ]);
    }
}
?>