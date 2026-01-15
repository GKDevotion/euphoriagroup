<?php

header('Content-Type: application/json');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


try {

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception('Invalid request method.');
    }

    $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception('Please enter a valid email.');
    }

    // $mail = new PHPMailer(true);
    // $mail->isSMTP();
    // $mail->Host       = 'smtp.gmail.com';
    // $mail->SMTPAuth   = true;
    // $mail->Username   = 'info@theeuphoriagroup.com';   // your gmail
    // $mail->Password   = 'sbwyvvuallyskhug';           // gmail app password
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    // $mail->Port       = 465;
    // $mail->SMTPDebug = 2; // remove after testing
    // $mail->Debugoutput = 'error_log';

    // $mail->setFrom('no-reply@theeuphoriagroup.com', 'theeuphoriagroup');
    // $mail->addAddress('info@theeuphoriagroup.com');
    // $mail->addCC('gk@devotiontech.io');
    // $mail->addReplyTo($email);

    // $mail->isHTML(false);
    // $mail->Subject = 'New User Request Received';
    // $mail->Body    = "Hello Admin,
    //                 A new user has submitted a request.
    //                 User Email: {$email}
    //                 Regards,
    //                 theeuphoriagroup";

    // $mail->send();

    echo json_encode([
        'status' => true,
        'message' => "Thank you! We'll notify you soon."
    ]);

} catch (Exception $e) {

    http_response_code(500);
    echo json_encode([
        'status' => false,
        'message' => $e->getMessage()
    ]);
}