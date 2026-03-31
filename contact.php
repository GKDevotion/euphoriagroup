<?php
include_once('elements/header.php');
?>

<style>
    .contact-hero {
        position: relative;
        top: 88px;
        min-height: 500px;
        background: linear-gradient(rgba(13, 27, 62, 0.72), rgba(13, 27, 62, 0.72)),
            url('https://images.unsplash.com/photo-1524492412937-b28074a5d7da?w=1400&q=80') center/cover no-repeat;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: #fff;
    }

    .contact-hero h1 {
        font-size: clamp(2rem, 5vw, 3.2rem);
        letter-spacing: 1px;
    }

    .content-section {
        padding: 130px 0;
    }

    .contact-card {
        background: #fff;
        border-radius: 16px;
        border: 1px solid #e8eaed;
        padding: 2.2rem 1.8rem;
        text-align: center;
        height: 100%;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.05);
    }

    .icon-circle {
        width: 72px;
        height: 72px;
        border-radius: 50%;
        border: 2px dashed #c5cbe8;
        background-color: #f3f5fb;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.4rem auto;
    }

    .icon-circle i {
        font-size: 1.6rem;
        color: #1a2b5e;
    }

    .contact-card h5 {
        font-size: 1.25rem;
        font-weight: 700;
        color: #1a2b5e;
        margin-bottom: 0.5rem;
    }

    .contact-card .subtitle {
        font-size: 0.85rem;
        color: #9ca3af;
        margin-bottom: 1rem;
    }

    .contact-card .info {
        font-size: 0.9rem;
        color: #374151;
        line-height: 1.9;
    }

    /* ── Left image panel ── */
    .image-panel {
        border-radius: 16px;
        overflow: hidden;
        position: relative;
        min-height: 480px;
        background: url('https://images.unsplash.com/photo-1497366216548-37526070297c?w=600&q=80') center/cover no-repeat;
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

    /* Contact Us circular diagram */
    .circle-diagram {
        position: relative;
        width: 220px;
        height: 220px;
    }

    .center-circle {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 110px;
        height: 110px;
        border-radius: 50%;
        border: 2px solid rgba(255, 255, 255, 0.6);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-weight: 700;
        font-size: 1rem;
        text-align: center;
        line-height: 1.3;
        z-index: 2;
    }

    .orbit-ring {
        position: absolute;
        inset: 0;
        border-radius: 50%;
        border: 1.5px solid rgba(255, 255, 255, 0.3);
    }

    .orbit-icon {
        position: absolute;
        width: 38px;
        height: 38px;
        background: rgba(255, 255, 255, 0.15);
        border: 1.5px solid rgba(255, 255, 255, 0.5);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 0.95rem;
    }

    .orbit-icon:nth-child(2) {
        top: -19px;
        left: 50%;
        transform: translateX(-50%);
    }

    .orbit-icon:nth-child(3) {
        top: 18px;
        right: -6px;
    }

    .orbit-icon:nth-child(4) {
        bottom: 18px;
        right: -6px;
    }

    .orbit-icon:nth-child(5) {
        bottom: -19px;
        left: 50%;
        transform: translateX(-50%);
    }

    .orbit-icon:nth-child(6) {
        bottom: 18px;
        left: -6px;
    }

    .orbit-icon:nth-child(7) {
        top: 18px;
        left: -6px;
    }

    /* ── Right form panel ── */
    .form-panel {
        padding: 1rem 2rem;
        position: relative;
    }

    .bg-text {
        position: absolute;
        top: -10px;
        right: 420px;
        font-size: 4.5rem;
        font-weight: 900;
        color: rgba(180, 185, 210, 0.25);
        white-space: nowrap;
        user-select: none;
        line-height: 1;
        letter-spacing: -2px;
    }

    .form-panel h2 {
        font-size: 1.6rem;
        font-weight: 700;
        color: #1a2b5e;
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
        color: #374151;
        background-color: #fff;
        box-shadow: none;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: #1a2b5e;
    }

    .form-control::placeholder {
        color: #9ca3af;
    }

    .form-label {
        font-size: 0.78rem;
        color: #9ca3af;
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
        accent-color: #1a2b5e;
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
        background-color: #1a2b5e;
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

<section class="contact-hero">
    <div>
        <h1 class="mb-0">Let's Connect</h1>
        <div class="gold-divider mx-auto mt-3"></div>
        <p class="text-white-50 mt-2" style="font-size:.9rem;letter-spacing:2px;">Connect with us to explore opportunities and grow your business globally.</p>
    </div>
</section>

<section class="container content-section">

    <div class="row g-4">

        <!-- Phone -->
        <div class="col-md-4">
            <div class="contact-card">
                <div class="icon-circle">
                    <i class="bi bi-telephone-fill"></i>
                </div>
                <h5>Phone</h5>
                <p class="subtitle">Reach out to us for immediate assistance.</p>
                <div class="info">
                    +91 XXXXX XXXXX<br />
                    +91 XXXXX XXXXX
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
                    info@euphoriagroup.com<br />
                    info@euphoriagroup.com
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
                    B-907/908, Pragati IT Park, Near AR mall,<br />
                    Mota Varachha, Surat – 394101
                </div>
            </div>
        </div>

    </div>

</section>

<div class="container py-5">
    <div class="row g-4 align-items-center">

        <!-- Left: Image Panel -->
        <div class="col-md-5">
            <div class="image-panel">

                <div class="center-circle">Contact Us</div>

            </div>
        </div>

        <!-- Right: Form Panel -->
        <div class="col-md-7">
            <div class="form-panel">
                <div class="bg-text">Let's Talk</div>
                <h2>Send us a Message</h2>

                <div class="row g-3">

                    <!-- Full Name & Email -->
                    <div class="col-md-6">
                        <label class="form-label">Full Name*</label>
                        <input type="text" class="form-control" placeholder="Jason Russell" value="Jason Russell" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Email Address*</label>
                        <input type="email" class="form-control" placeholder="Email Address*" />
                    </div>

                    <!-- Phone & Company -->
                    <div class="col-md-6">
                        <label class="form-label">Phone Number*</label>
                        <input type="tel" class="form-control" placeholder="Phone Number*" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Company Name</label>
                        <input type="text" class="form-control" placeholder="Company Name" />
                    </div>

                    <!-- Service Dropdown -->
                    <div class="col-12">
                        <label class="form-label">Service Interested In*</label>
                        <select class="form-select">
                            <option value="" disabled selected>Service Interested In*</option>
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
                        <textarea class="form-control" placeholder="Message*"></textarea>
                    </div>

                    <!-- reCAPTCHA -->
                    <div class="col-12">
                        <div class="recaptcha-box">
                            <input type="checkbox" id="robot" />
                            <label for="robot" class="rc-label">I'm not a robot</label>
                            <div class="recaptcha-logo">
                                <i class="bi bi-shield-check logo-icon"></i>
                                reCAPTCHA<br />Privacy · Terms
                            </div>
                        </div>
                    </div>

                    <!-- Submit -->
                    <div class="col-12">
                        <button class="btn-submit">Submit</button>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

<!-- Map Section -->
<section class="w-100">
    <div class="map-wrapper">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19869.42883864564!2d-0.13600!3d51.46500!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760545d90f2a4b%3A0x2a8f6c6a5a8f6c6a!2sBrixton%2C%20London%2C%20UK!5e0!3m2!1sen!2sin!4v1680000000000!5m2!1sen!2sin"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</section>


<?php
include_once('elements/faqs.php');
include_once('elements/footer.php');
?>