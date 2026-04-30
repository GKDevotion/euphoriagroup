<?php
include_once('elements/header.php');
?>
 
<!-- HERO -->
 <section class="top-banner-background" style="background-image: url('assets/img/background/about-us-bg.png');">
   <div>
     <h1 class="mb-0 text-center">Let's Connect</h1>
     <p class="text-black text-center mt-2">Connect with us to explore opportunities and grow your business globally.</p>
   </div>
 </section>

<style>
    .content-section {
        padding: 70px 0 0;
    }

    .contact-card {
        background: #f9fafb;
        border-radius: 16px;
        border: 1px solid lightgray;
        padding: 2.2rem 1.8rem;
        text-align: center;
        height: 100%;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.05);
    }

    .icon-circle {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        border: 2px dashed #c5cbe8;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.4rem auto;
    }

    .icon-circle i {
        font-size: 1.8rem;
        color: #25356F;
    }

    .contact-card h5 {
        font-size: 1.75rem;
        font-weight: 500;
        font-family: "Anek Kannada", "Poppins";
        color: #000;
        margin-bottom: 0.5rem;
    }

    .contact-card .subtitle {
        font-size: 16px;
        color: #666666;
        font-family: "Poppins";
        margin-bottom: 1rem;
    }

    .contact-card .info {
        font-size: 0.9rem;
        color: #374151;
        line-height: 1.9;
    }
    .contact-us-card{
        text-decoration: none;
        font-family: "Poppins";
        font-size: 16px;
        font-weight: 400;
        color: #000;
    }
    /* Mobile devices (up to 576px) */
    @media (max-width: 576px) {

        .content-section {
            padding: 40px 10px 0;
        }

        .contact-card {
            padding: 1.5rem 1rem;
            border-radius: 12px;
        }

        .icon-circle {
            width: 70px;
            height: 70px;
            margin-bottom: 1rem;
        }

        .icon-circle i {
            font-size: 1.4rem;
        }

        .contact-card h5 {
            font-size: 1.3rem;
        }

        .contact-card .subtitle {
            font-size: 0.7rem;
        }

        .contact-card .info {
            font-size: 0.85rem;
            line-height: 1.6;
        }

        .col-md-4 {
            margin-bottom: 15px;
        }
    }
</style>

<section class="container py-5">

    <div class=" content-section row g-4">

        <!-- Phone -->
        <div class="col-md-4">
            <div class="contact-card">
                <div class="icon-circle">
                    <i class="bi bi-telephone-fill"></i>
                </div>
                <h5>Phone</h5>
                <p class="subtitle">Reach out to us for immediate assistance.</p>
                <div class="info">
                    <p class="p-0 m-0">
                        <a href="tel:+91XXXXXXXXXX" class="contact-us-card">
                            +91 XXXXX XXXXX
                        </a>
                    </p>
                    <p class="p-0 m-0">
                        <a href="tel:+91XXXXXXXXXX" class="contact-us-card">
                            +91 XXXXX XXXXX
                        </a>
                    </p>
                    
                </div>
            </div>
        </div>

        <!-- Email -->
        <div class="col-md-4">
            <div class="contact-card">
                <div class="icon-circle">
                    <i class="bi bi-envelope-fill"></i>
                </div>
                <h5>Email</h5>
                <p class="subtitle">We're here to help you with any inquiries.</p>
                <div class="info">
                    <p class="p-0 m-0">
                        <a href="mail:info@euphoriagroup.com" class="contact-us-card">
                            info@euphoriagroup.com
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <!-- Office Address -->
        <div class="col-md-4">
            <div class="contact-card">
                <div class="icon-circle">
                    <i class="bi bi-geo-alt-fill"></i>
                </div>
                <h5>Office Address</h5>
                <p class="subtitle">Reach out to us for immediate assistance.</p>
                <div class="info">
                    <a href="https://maps.app.goo.gl/V4vLAKLZDhNMJqmV9" class="contact-us-card">
                        B-907/908, Pragati IT Park, Near AR mall,<br />
                        Mota Varachha, Surat - 394101
                    </a>
                </div>
            </div>
        </div>

    </div>

</section>

<style>
      .lets-talk {
        background: #f9fafb;
        border-radius: 16px;
        padding: 2.5rem;
    }

    /* ── Left image panel ── */
    .image-panel {
        border-radius: 25px;
        overflow: hidden;
        position: relative;
        min-height: 700px;
        background: url('assets/img//background/Contact-us.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-color: #fff;
        border: 1px solid #ccc;
    }

    .image-overlay {
        position: absolute;
        inset: 0;
        background: rgba(10, 20, 60, 0.55);
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* ── Right form panel ── */
    .form-panel {
        padding: 2rem 3rem;
        position: relative;
    }

    .bg-text {
        position: absolute;
        top: 0px;
        right: 150px;
        font-family: "Anek Kannada", "Poppins";
        font-size: 6rem;
        font-weight: 900;
        color: #f0c0c8;
        white-space: nowrap;
        opacity: 0.2;
        user-select: none;
        line-height: 1;
        letter-spacing: -2px;
    }

    .form-panel h2 {
        font-size: 1.6rem;
        font-weight: 700;
        text-align: center;
        color: #25356F;
        margin-bottom: 1.5rem;
        position: relative;
        z-index: 1;
    }

    .form-control,
    .form-select,
    .form-control:focus,
    .form-select:focus {
        border: 1.5px solid #d1d5db;
        border-radius: 8px;
        font-size: 0.88rem;
        color: #666666;
        font-family: "Poppins";
        background-color: #fff;
        box-shadow: none;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: #25356F;
    }

    .form-control::placeholder {
        color: #9ca3af;
    }

    .form-label {
        font-size: 0.78rem;
        color: #25356F;
        margin-bottom: 2px;
    }

    textarea.form-control {
        resize: none;
        min-height: 100px;
    }

    /* Fake reCAPTCHA */
    .recaptcha-box {
        display: flex;
        align-items: center;
        gap: 12px;
        border: 1.5px solid #d1d5db;
        border-radius: 8px;
        padding: 12px 16px;
        background: #f9fafb;
        max-width: 300px;
    }

    .recaptcha-box input[type="checkbox"] {
        width: 18px;
        height: 18px;
        cursor: pointer;
        accent-color: #25356F;
        flex-shrink: 0;
    }

    .recaptcha-box .rc-label {
        font-size: 0.88rem;
        color: #374151;
        margin: 0;
    }

    .recaptcha-logo {
        margin-left: auto;
        text-align: center;
        font-size: 0.6rem;
        color: #9ca3af;
        line-height: 1.3;
        flex-shrink: 0;
    }

    .recaptcha-logo .logo-icon {
        font-size: 1.2rem;
        color: #4a90d9;
        display: block;
    }

    .btn-submit {
        background-color: #25356F;
        color: #fff;
        border: none;
        border-radius: 8px;
        padding: 0.65rem 2.4rem;
        font-size: 0.95rem;
        font-weight: 600;
        transition: background 0.2s;
    }

    .btn-submit:hover {
        background-color: #142049;
        color: #fff;
    }

    /* Mobile devices (up to 576px) */
    @media (max-width: 576px) {

        .lets-talk {
            padding: 1.5rem 1rem;
            border-radius: 12px;
        }

        /* Image panel adjustments */
        .image-panel {
            min-height: 220px;
            background-size: contain;
            background-position: center;
            margin-bottom: 10px;
        }

        /* Stack spacing fix */
        .row.g-4 {
            gap: 1rem !important;
        }

        /* Form panel */
        .form-panel {
            padding: 1rem;
        }

        /* Background text FIX */
        .bg-text {
            font-size: 4.5rem;
            top: -5px;
            right: 0;
            left: 0;
            text-align: center;
            opacity: 0.2;
        }

        /* Heading */
        .form-panel h2 {
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        /* Inputs */
        .form-control,
        .form-select {
            font-size: 0.85rem;
            padding: 0.55rem 0.6rem;
        }

        .form-label {
            font-size: 0.7rem;
        }

        textarea.form-control {
            min-height: 80px;
        }

        /* reCAPTCHA box */
        .recaptcha-box {
            max-width: 100%;
            padding: 10px;
            gap: 8px;
        }

        .recaptcha-logo {
            font-size: 0.55rem;
        }

        /* Button full width */
        .btn-submit {
            width: 100%;
            padding: 0.6rem;
            font-size: 0.9rem;
        }
    }

</style>

<section class="container py-5">
    <div class="lets-talk">
        <div class="row g-4 align-items-center">

            <!-- Left: Image Panel -->
            <div class="col-md-5">
                <div class="image-panel"></div>
            </div>

            <!-- Right: Form Panel -->
            <div class="col-md-7">
                <div class="form-panel">
                    <div class="bg-text">Let's Talk</div>
                    <h2>Send us a Message</h2>
                    <form id="contactForm">

                        <div class="row g-3">

                            <!-- Full Name & Email -->
                            <div class="col-md-6">
                                <label class="form-label">Full Name*</label>
                                <input type="text" name="full_name" class="form-control" placeholder="Jason Russell">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Email Address*</label>
                                <input type="email" name="email" class="form-control" placeholder="Email Address">
                            </div>

                            <!-- Phone & Company -->
                            <div class="col-md-6">
                                <label class="form-label">Phone Number*</label>
                                <input type="tel" name="phone" class="form-control" placeholder="Phone Number">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Company Name</label>
                                <input type="text" name="company" class="form-control" placeholder="Company Name" />
                            </div>

                            <!-- Service Dropdown -->
                            <div class="col-12">
                                <label class="form-label">Service Interested In*</label>
                                <select name="service" class="form-select">
                                    <option disabled>Service Interested In</option>
                                    <option>Web Development</option>
                                    <option>Mobile App Development</option>
                                    <option>UI/UX Design</option>
                                    <option>Digital Marketing</option>
                                    <option>Other</option>
                                </select>
                            </div>

                            <!-- Message -->
                            <div class="col-12">
                                <label class="form-label">Message*</label>
                                <textarea class="form-control" name="message" placeholder="Message*"></textarea>
                            </div>

                            <!-- reCAPTCHA -->
                            <div class="col-12">
                                <div class="recaptcha-box">
                                    <input type="checkbox" id="robot">
                                    <label for="robot" class="rc-label">I'm not a robot</label>
                                    <div class="recaptcha-logo">
                                        <i class="bi bi-shield-check logo-icon"></i>
                                        reCAPTCHA<br />Privacy · Terms
                                    </div>
                                </div>
                            </div>
 
                            <!-- Submit -->
                            <div class="col-12">
                                <button type="submit" class="btn-submit">Submit</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    .map-wrapper {
        width: 100%;
        height: 400px;
        overflow: hidden;
        border-radius: 0;
    }

    .map-wrapper iframe {
        width: 100%;
        height: 100%;
        border: none;
        display: block;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function () {

        const form = document.getElementById("contactForm");
        const btn = document.querySelector(".btn-submit");

        const msgBox = document.createElement("div");
        form.prepend(msgBox);

        form.addEventListener("submit", function (e) {
            e.preventDefault();

            btn.disabled = true;
            btn.innerHTML = "Sending...";

            const formData = new FormData(form);

            fetch("contact-mail.php", {
                method: "POST",
                body: formData
            })
            .then(response => response.json()) // ✅ proper JSON
            .then(data => {

                if (data.status === "success") {

                    msgBox.innerHTML = `
                        <div class="alert alert-success">${data.message}</div>
                    `;

                    form.reset();

                    const checkbox = document.getElementById("robot");
                    if (checkbox) checkbox.checked = false;

                } else {
                    msgBox.innerHTML = `
                        <div class="alert alert-danger">${data.message}</div>
                    `;
                }

                btn.disabled = false;
                btn.innerHTML = "Send Message";
            })
            .catch(error => {

                msgBox.innerHTML = `
                    <div class="alert alert-danger">
                        Something went wrong! Please try again.
                    </div>
                `;

                btn.disabled = false;
                btn.innerHTML = "Send Message";
            });
        });

    });
</script>
<?php
include_once('elements/faqs.php');
include_once('elements/footer.php');
?>