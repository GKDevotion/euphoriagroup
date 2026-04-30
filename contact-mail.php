<?php
header('Content-Type: application/json');

// Only allow POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo json_encode([
        "status" => "error",
        "message" => "Invalid request method"
    ]);
    exit;
}

// Helper function
function clean($data) {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

// Get & sanitize input
$full_name = clean($_POST["full_name"] ?? '');
$email     = clean($_POST["email"] ?? '');
$phone     = clean($_POST["phone"] ?? '');
$company   = clean($_POST["company"] ?? '');
$service   = clean($_POST["service"] ?? '');
$message   = clean($_POST["message"] ?? '');

// ✅ Validation
$errors = [];

if (empty($full_name)) {
    $errors[] = "Full name is required";
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Valid email is required";
}

if (empty($phone) || !preg_match('/^[0-9]{10}$/', $phone)) {
    $errors[] = "Valid 10-digit phone number required";
}

if (empty($company)) {
    $errors[] = "Company name is required";
}

if (empty($service)) {
    $errors[] = "Please select a service";
}

if (empty($message)) {
    $errors[] = "Message cannot be empty";
}

// ❌ If validation fails
if (!empty($errors)) {
    echo json_encode([
        "status" => "error",
        "message" => implode(", ", $errors)
    ]);
    exit;
}

// ✅ Email config
$to = "info@theeuphoriagroup.com";
$subject = "New Contact Form Message";

$body = "New Enquiry:\n\n";
$body .= "Name: $full_name\n";
$body .= "Email: $email\n";
$body .= "Phone: $phone\n";
$body .= "Company: $company\n";
$body .= "Service: $service\n";
$body .= "Message:\n$message\n";

$headers  = "From: no-reply@theeuphoriagroup.com\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// ✅ Send mail
if (mail($to, $subject, $body, $headers)) {
    echo json_encode([
        "status" => "success",
        "message" => "✅ Message sent successfully!"
    ]);
} else {
    echo json_encode([
        "status" => "error",
        "message" => "❌ Failed to send email. Try again later."
    ]);
}
exit;