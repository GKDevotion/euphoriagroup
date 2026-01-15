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

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
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
                    <form id="emailNotifyForm" class="subscribe-form d-flex flex-column flex-sm-row gap-2 ">
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email Address">
                        <button type="submit" class="btn btn-primary px-4">Notify Me!</button>
                    </form>

                    <div id="responseMsg"></div>
 
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

    <script>
        $(document).ready(function () {
            $('#emailNotifyForm').on('submit', function (e) {
                e.preventDefault();

                let email = $('#email').val().trim();
                let responseBox = $('#responseMsg');

                responseBox.html('');

                if (email === '') {
                    responseBox.html("<div class='alert alert-danger mt-3'>Email is required.</div>");
                    return;
                }

                $.ajax({
                    url: "php/notify-mail.php",
                    type: "POST",
                    dataType: "json",
                    data: { email: email },
                    beforeSend: function () {
                        responseBox.html("<div class='alert mt-3'>Processing...</div>");
                    },
                    success: function (res) {
                        if (res.status === true) {
                            responseBox.html("<div class='alert mt-3' style='color:#1f2b6c;'>" + res.message + "</div>");
                            $('#emailForm')[0].reset();
                        } else {
                            responseBox.html("<div class='alert alert-danger mt-3'>" + res.message + "</div>");
                        }
                    },
                    error: function (xhr, status, error) {
                        responseBox.html(
                            "<div class='alert alert-danger mt-3'>Server error. Please try again later.</div>"
                        );
                        console.error(error);
                    }
                });
            });
        });
        </script>
</body>

</html>