<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['msg'] = "<div class='alert alert-danger mt-3'>Please enter a valid email.</div>";
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }

    // Your email (where you receive notifications)
    $to = "hardikprajapati8104@gmail.com";   // 🔴 change this
    $subject = "New Notify Request";

    $message = "
    New user requested notification.

    Email: $email
    ";

    $headers  = "From: Notify <no-reply@" . $_SERVER['SERVER_NAME'] . ">\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";


    if ($_SERVER['SERVER_NAME'] === '127.0.0.1' || $_SERVER['SERVER_NAME'] === 'localhost') {
        $_SESSION['msg'] = "<div class='alert mt-3' style='color:#1f2b6c;'>Thank you! We’ll notify you soon.</div>";
    } else {
        if (mail($to, $subject, $message, $headers)) {
            $_SESSION['msg'] = "<div class='alert mt-3' style='color:#1f2b6c;'>Thank you! We’ll notify you soon.</div>";
        } else {
            $_SESSION['msg'] = "<div class='alert alert-danger mt-3'>Something went wrong.</div>";
        }
    }
     // 🔁 Redirect to avoid resubmission
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <section class="coming-soon-section d-flex align-items-center min-vh-100">
        <div class="container">
            <div class="row align-items-center gy-5">

                <!-- LEFT CONTENT -->
                <div class="col-lg-6 text-center">

                    <!-- Logo -->
                    <img src="assets/images/logo.png" class="mb-4 logo" alt="Logo">

                    <!-- Countdown -->
                    <div class="countdown d-flex justify-content-center gap-3 mb-4">
                        <div class="time-box text-center">
                            <h3 id="days">00</h3>
                            <span>Days</span>
                        </div>
                        <div class="time-box text-center">
                            <h3 id="hours">00</h3>
                            <span>Hours</span>
                        </div>
                        <div class="time-box text-center">
                            <h3 id="minutes">00</h3>
                            <span>Minutes</span>
                        </div>
                        <div class="time-box text-center">
                            <h3 id="seconds">00</h3>
                            <span>Seconds</span>
                        </div>
                    </div>


                    <!-- Title -->
                    <h1 class="fw-bold mb-3">We are coming soon</h1>

                    <!-- Description -->
                    <p class="mb-4">
                        We are almost there! If you want to get notified when the website goes live,
                        subscribe to our mailing list!
                    </p>

                    <!-- Subscribe Form -->
                    <form method="post" class="subscribe-form d-flex flex-column flex-sm-row gap-2 ">
                        <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                        <button type="submit" class="btn btn-primary px-4">Notify Me!</button>
                    </form>
                    <?php
                    if (!empty($_SESSION['msg'])) {
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                    ?>
 
                    <!-- Social Icons -->
                    <div class="social-icons mt-5">
                        <a href="https://www.instagram.com/euphoriagroup.official/"><i class="bi bi-instagram"></i></a>
                        <a href="https://www.facebook.com/share/1FvNRPxKzp/"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-youtube"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                    </div>
                </div>

                <!-- RIGHT IMAGE -->
                <div class="col-lg-6 text-center">
                    <img src="assets/images/welcome.png"
                        class="img-fluid coming-img"
                        alt="Welcome Page Image">
                </div>

            </div>
        </div>
    </section>
    <script src="assets/js/index.js"></script>
</body>

</html>