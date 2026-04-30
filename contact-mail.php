<?php

error_reporting(0);
ini_set('display_errors', 0);

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $full_name = htmlspecialchars(trim($_POST["full_name"] ?? ""));
    $email     = htmlspecialchars(trim($_POST["email"] ?? ""));
    $phone     = htmlspecialchars(trim($_POST["phone"] ?? ""));
    $company   = htmlspecialchars(trim($_POST["company"] ?? ""));
    $service   = htmlspecialchars(trim($_POST["service"] ?? ""));
    $message   = htmlspecialchars(trim($_POST["message"] ?? ""));

    // Validation
    if (
        empty($full_name) ||
        empty($email) ||
        empty($phone) ||
        empty($company) ||
        empty($service) ||
        empty($message)
    ) {

        echo json_encode([
            "status" => "error",
            "message" => "All fields are required"
        ]);
        exit;
    }

    // Receiver Email
    $to = "info@theeuphoriagroup.com";

    // Subject
    $subject = "New Contact Form Message";

    // Email Body
    $body  = "You have received a new message From Euphoria Website:\n\n";
    $body .= "Name: $full_name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Company: $company\n";
    $body .= "Service: $service\n";
    $body .= "Message:\n$message\n";

    // Headers
    $headers  = "From: no-reply@theeuphoriagroup.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send Mail
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

} else {

    echo json_encode([
        "status" => "error",
        "message" => "Invalid request"
    ]);
}
?>