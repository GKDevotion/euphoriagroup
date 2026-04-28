<?php
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // ─── Sanitize Inputs ─────────────────────────────
    function clean(string $data): string {
        return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
    }

    $first_name = clean($_POST["first_name"] ?? "");
    $last_name  = clean($_POST["last_name"] ?? "");
    $email      = clean($_POST["email"] ?? "");
    $phone      = clean($_POST["phone"] ?? "");
    $service    = clean($_POST["service"] ?? "");
    $message    = clean($_POST["message"] ?? "");

    // ─── Validation ──────────────────────────────────
    if (!$first_name || !$last_name || !$email || !$phone || !$service || !$message) {
        echo json_encode(["status" => "error", "message" => "All fields are required"]);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(["status" => "error", "message" => "Invalid email format"]);
        exit;
    }

    $full_name = "$first_name $last_name";

    // ─── PDF Upload Only ─────────────────────────────
    if (!isset($_FILES["resume"]) || $_FILES["resume"]["error"] !== UPLOAD_ERR_OK) {
        echo json_encode(["status" => "error", "message" => "PDF file is required"]);
        exit;
    }

    $file_tmp  = $_FILES["resume"]["tmp_name"];
    $file_name = basename($_FILES["resume"]["name"]);
    $file_size = $_FILES["resume"]["size"];
    $file_ext  = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    $file_type = mime_content_type($file_tmp);

    $max_size = 5 * 1024 * 1024; // 5MB

    // ✅ Only PDF allowed
    if ($file_ext !== "pdf" || $file_type !== "application/pdf") {
        echo json_encode([
            "status" => "error",
            "message" => "Only PDF files are allowed"
        ]);
        exit;
    }

    if ($file_size > $max_size) {
        echo json_encode([
            "status" => "error",
            "message" => "File size must be less than 5MB"
        ]);
        exit;
    }

    // ─── Prepare Email ───────────────────────────────
    $to      = "hr@theeuphoriagroup.com";
    $subject = "New Job Application From Euphoria Website";

    $boundary = md5(time());

    $headers  = "From: Website <no-reply@theeuphoriagroup.com>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";

    // ─── Email Body ──────────────────────────────────
    $body  = "--$boundary\r\n";
    $body .= "Content-Type: text/plain; charset=UTF-8\r\n\r\n";

    $body .= "New Job Application:\n\n";
    $body .= "Name: $full_name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Service: $service\n\n";
    $body .= "Message:\n$message\n";

    // ─── Attach PDF ──────────────────────────────────
    $file_content = chunk_split(base64_encode(file_get_contents($file_tmp)));

    $body .= "\r\n--$boundary\r\n";
    $body .= "Content-Type: application/pdf; name=\"$file_name\"\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n";
    $body .= "Content-Disposition: attachment; filename=\"$file_name\"\r\n\r\n";
    $body .= $file_content;
    $body .= "\r\n--$boundary--";

    // ─── Send Mail ───────────────────────────────────
    if (mail($to, $subject, $body, $headers)) {
        echo json_encode([
            "status" => "success",
            "message" => "Application sent successfully!"
        ]);
    } else {
        echo json_encode([
            "status" => "error",
            "message" => "Failed to send email"
        ]);
    }
}
?>