<?php
ob_start();
header('Content-Type: application/json');

// Allow only POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo json_encode(["status" => "error", "message" => "Invalid request"]);
    exit;
}

// Clean function
function clean($data) {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

// Get values
$full_name = clean($_POST["full_name"] ?? '');
$email     = clean($_POST["email"] ?? '');
$phone     = clean($_POST["phone"] ?? '');
$company   = clean($_POST["company"] ?? '');
$service   = clean($_POST["service"] ?? '');
$message   = clean($_POST["message"] ?? '');

// Validation
$errors = [];

if (!$full_name) $errors[] = "Full name is required";
if (!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Valid email required";
if (!$phone || !preg_match('/^[0-9]{10}$/', $phone)) $errors[] = "Valid 10-digit phone required";
if (!$company) $errors[] = "Company name required";
if (!$service) $errors[] = "Service required";
if (!$message) $errors[] = "Message required";

// Return errors
if (!empty($errors)) {
    ob_clean();
    echo json_encode([
        "status" => "error",
        "message" => implode(", ", $errors)
    ]);
    exit;
}

// Email setup
$to = "gk@devotiontech.io";
$subject = "New Contact Enquiry";

$body = "New Contact Form Submission:\n\n";
$body .= "Name: $full_name\n";
$body .= "Email: $email\n";
$body .= "Phone: $phone\n";
$body .= "Company: $company\n";
$body .= "Service: $service\n";
$body .= "Message:\n$message\n";

$headers  = "From: no-reply@devotiontech.io\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Send mail
if (mail($to, $subject, $body, $headers)) {
    ob_clean();
    echo json_encode([
        "status" => "success",
        "message" => "Message sent successfully!"
    ]);
} else {
    ob_clean();
    echo json_encode([
        "status" => "error",
        "message" => "Mail failed. Contact admin."
    ]);
}
exit;