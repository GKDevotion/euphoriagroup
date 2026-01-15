<?php
header('Content-Type: application/json');

try {

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception('Invalid request method.');
    }

    if (!isset($_POST['email'])) {
        throw new Exception('Email is required.');
    }

    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception('Please enter a valid email.');
    }

    // Admin email
    $to = "info@theeuphoriagroup.com";

    // CC email
    $cc = "gk@devotiontech.io";

    // Subject
    $subject = "New User Request Received";

    // Message
    $message = "Hello Admin,
                A new user has submitted a request on the platform.
                User Email: {$email}
                Please review the request and take the necessary action.
                Regards,
                theeuphoriagroup";

    // Headers
    $headers  = "From: theeuphoriagroup <no-reply@" . $_SERVER['SERVER_NAME'] . ">\r\n";
    $headers .= "Reply-To: {$email}\r\n";
    $headers .= "Cc: {$cc}\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send email
    if (!mail($to, $subject, $message, $headers)) {
        throw new Exception('Mail sending failed.');
    }

    echo json_encode([
        'status' => true,
        'message' => "Thank you! We'll notify you soon."
    ]);

} catch (Exception $e) {

    http_response_code(400);
    echo json_encode([
        'status' => false,
        'message' => $e->getMessage()
    ]);
}