<?php
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $full_name = htmlspecialchars(trim($_POST["full_name"] ?? ""));
    $email     = htmlspecialchars(trim($_POST["email"] ?? ""));
    $phone     = htmlspecialchars(trim($_POST["phone"] ?? ""));
    $company     = htmlspecialchars(trim($_POST["company"] ?? ""));
    $service   = htmlspecialchars(trim($_POST["service"] ?? ""));
    $message   = htmlspecialchars(trim($_POST["message"] ?? ""));

    if (!$full_name || !$email || !$phone || !$company || !$service || !$message) {
        echo json_encode([
            "status" => "error",
            "message" => "All fields are required"
        ]);
        exit;
    }

    // Receiver email
    $to = "info@theeuphoriagroup.com";

    // Subject
    $subject = "New Contact Form Message";

    // Email content
    $body  = "You have received a new message From Euphoria Website:\n\n";
    $body .= "Name: $full_name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Phone: $company\n";
    $body .= "Service: $service\n";
    $body .= "Message:\n$message\n";

    // Headers
    $headers = "From: no-reply@theeuphoriagroup.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

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