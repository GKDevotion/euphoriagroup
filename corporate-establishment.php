<?php
include_once('elements/header.php');
?>

<!-- HERO -->
<section class="top-banner-background" style="background-image: url('assets/img/background/Corporate-establishment.png');">
    <div>
        <h1 class="mb-0 text-center">Corporate Establishment</h1>
        <p class="text-black text-center mt-2">End-to-end support support for setting up legally compliant business entities.</p>
    </div>
</section>

<style>
    /* ── Partnership Section ── */
    .corporate-tab-section {
        background: #ffffff;
        padding: 80px 0;
        overflow: hidden;
        position: relative;
    }

    /* ── Nav Wrapper ── */
    .formation-nav-wrapper {
        display: flex;
        align-items: center;
        border: 1.5px solid #e2e5f0;
        border-radius: 50px;
        padding: 5px;
        background: #fff;
        width: fit-content;
        overflow-x: auto;
        white-space: nowrap;
        scrollbar-width: none;
    }

    .formation-nav-wrapper::-webkit-scrollbar {
        display: none;
    }

    /* ── Active Label Pill ── */
    .nav-active-pill {
        display: inline-flex;
        align-items: center;
        background: #25356F;
        color: #fff;
        font-weight: 700;
        font-size: 0.88rem;
        border-radius: 50px;
        padding: 0.55rem 1.35rem;
        white-space: nowrap;
        flex-shrink: 0;
        user-select: none;
    }

    /* ── Divider ── */
    .nav-sep {
        width: 1.5px;
        min-width: 1.5px;
        height: 18px;
        background: #e2e5f0;
        flex-shrink: 0;
        margin: 0 2px;
    }

    /* ── Nav Links ── */
    .nav-link-item {
        display: inline-flex;
        align-items: center;
        color: #2c2f4a;
        font-size: 0.84rem;
        font-weight: 500;
        padding: 0.45rem 0.9rem;
        white-space: nowrap;
        text-decoration: none;
        border-radius: 50px;
        flex-shrink: 0;
        cursor: pointer;
    }

    .nav-link-item:hover {
        color: #25356F;
        background: #f0f2fa;
    }

    .nav-link-item.active-link {
        color: #25356F;
        font-weight: 700;
    }

    /* ── Section ── */
    .india-section {
        padding: 60px 0;
    }

    /* ── Image Column ── */
    .img-col {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .img-col img {
        width: 100%;
        max-width: 480px;
        height: auto;
        object-fit: cover;
        display: block;
        /* fade out right edge into white */
        -webkit-mask-image: linear-gradient(to right, black 55%, transparent 100%);
        mask-image: linear-gradient(to right, black 55%, transparent 100%);
    }

    /* ── Text Column ── */
    .text-col {
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding-left: 1.5rem;
    }

    .text-col p {
        font-size: 0.97rem;
        color: #3a3d52;
        line-height: 1.8;
        margin-bottom: 1.2rem;
        font-weight: 400;
    }

    .text-col p:last-child {
        margin-bottom: 0;
    }

    /* ── Responsive ── */
    @media (max-width: 768px) {

        /* 1. Adjust main section padding */
        .corporate-tab-section {
            padding: 40px 0;
        }

        /* 2. Force the nav wrapper to allow horizontal scrolling */
        .formation-nav-wrapper {
            width: 100%;
            /* Take full width of screen */
            border-radius: 25px;
            /* Slightly tighter radius for mobile */
            padding: 4px;
            -webkit-overflow-scrolling: touch;
            /* Smooth scrolling for iOS */
        }

        /* 3. Scale down navigation elements */
        .nav-active-pill {
            font-size: 0.75rem;
            padding: 0.45rem 1rem;
        }

        .nav-link-item {
            font-size: 0.72rem;
            padding: 0.4rem 0.7rem;
        }

        .nav-sep {
            height: 14px;
            margin: 0 1px;
        }

        /* 4. Fix Image Column for Mobile */
        .img-col {
            margin-bottom: 20px;
        }

        .img-col img {
            /* Change mask from right-side fade to bottom-side fade for vertical layout */
            -webkit-mask-image: linear-gradient(to bottom, black 70%, transparent 100%);
            mask-image: linear-gradient(to bottom, black 70%, transparent 100%);
            max-width: 80%;
            /* Don't let the corporate image overwhelm the text */
        }

        /* 5. Adjust Text Column for Readability */
        .text-col {
            text-align: center;
            /* Center text for better mobile balance */
        }

        .text-col p {
            font-size: 0.9rem;
            line-height: 1.6;
            margin-bottom: 1rem;
        }
    }

    /* Extra small screens fix for the nav bar */
    @media (max-width: 480px) {
        .formation-nav-wrapper {
            /* Ensure the "swipe to see more" feel by showing a peek of the next item */
            margin-left: -10px;
            margin-right: -10px;
            width: calc(100% + 20px);
            border-radius: 0;
            /* Full bleed looks cleaner on tiny screens */
            border-left: none;
            border-right: none;
        }
    }
</style>

<section class="corporate-tab-section india-section">

    <div class="container position-relative" style="z-index:2">

        <div class="formation-nav-wrapper">

            <span class="nav-active-pill">Business Formation</span>

            <div class="nav-sep"></div>
            <a href="#" class="nav-link-item">Private Limited Company Setup</a>
            <div class="nav-sep"></div>
            <a href="#" class="nav-link-item">LLP</a>
            <div class="nav-sep"></div>
            <a href="#" class="nav-link-item">OPC</a>
            <div class="nav-sep"></div>
            <a href="#" class="nav-link-item">Partnership Firm</a>
            <div class="nav-sep"></div>
            <a href="#" class="nav-link-item">PAN, TAN, GST</a>
            <div class="nav-sep"></div>
            <a href="#" class="nav-link-item">NGO / Trust / Section 8 Company</a>
            <div class="nav-sep"></div>
            <a href="#" class="nav-link-item">Start-up India Registration</a>
            <div class="nav-sep"></div>
            <a href="#" class="nav-link-item">FAQ</a>


        </div>

    </div><!-- /container -->

    <div class="container-xl pt-5">
        <div class="row align-items-center">

            <!-- Left: Image -->
            <div class="col-12 col-md-4 img-col">
                <img
                    src="assets/img/corporate-establishment/img-2.png" alt="Business professionals with city skyline" />
            </div>

            <!-- Right: Text -->
            <div class="col-12 col-md-8 text-col">
                <p>
                    Expanding into India represents a significant opportunity, but entering a new market necessitates the proper structure, regulatory clarity, and strategic execution.
                </p>
                <p>
                    The Euphoria Group specialises in inbound corporate establishment services, assisting foreign investors, multinational corporations, and international entrepreneurs to establish a strong and compliant presence in India.
                </p>
                <p>
                    Beyond incorporation, we provide comprehensive support across regulatory approvals, tax registrations, banking setup, and ongoing compliance management. Our team ensures a seamless entry into the Indian market by aligning your business structure with local laws, industry requirements, and long-term growth objectives—allowing you to focus on scaling your operations with confidence.
                </p>
            </div>

        </div>
    </div>

</section>

<style>
    /* Section */
    .incorporation {
        position: relative;
        padding: 100px 0 0px;
        overflow: hidden;
        background: #fff;
    }

    /* Watermark */
    .incorporation::before {
        content: "Incorporation";
        position: absolute;
        top: 24px;
        left: 50%;
        transform: translateX(-50%);
        font-size: clamp(60px, 10vw, 115px);
        font-weight: 700;
        color: #f0c0c8;
        white-space: nowrap;
        pointer-events: none;
        z-index: 0;
        opacity: 0.2;
        letter-spacing: 2px;
    }

    /* ── Heading ── */
    .incorporation-heading {
        position: relative;
        z-index: 1;
        color: #25356F;
        font-size: clamp(1.6rem, 3vw, 2.2rem);
        font-weight: 700;
        text-align: center;
        margin-bottom: 50px;
    }


    /* ── Card ── */
    .service-card-incorporation {
        border: 1.5px solid #e2e5f0;
        border-radius: 18px;
        padding: 2rem 1.4rem 1.6rem;
        text-align: center;
        background: #fff;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        transition: box-shadow 0.25s, transform 0.25s, border-color 0.25s;
    }

    .service-card-incorporation:hover {
        box-shadow: 0 8px 32px rgba(26, 36, 86, 0.10);
        transform: translateY(-4px);
        border-color: #c8cce0;
    }

    /* ── Icon Circle ── */
    .icon-wrap-incorporation {

        width: 68px;
        height: 68px;
        background: #fbf0f1;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        transition: background 0.28s ease, transform 0.28s ease;
    }

    .icon-wrap-incorporation svg {
        width: 48px;
        height: 48px;
    }

    /* ── Title ── */
    .service-card-incorporation h5 {
        font-size: 17.5px;
        font-weight: 700;
        color: #25356F;
        margin-bottom: 0.75rem;
        line-height: 1.35;
    }

    /* ── Description ── */
    .service-card-incorporation p {
        font-size: 12px;
        color: #5a5e78;
        line-height: 1.7;
        margin: 0;
    }

    /* ── Row gap ── */
    .services-grid {
        row-gap: 24px;
    }

    /* ── Responsive Adjustments ── */

    @media (max-width: 991px) {
        .incorporation {
            padding: 60px 0 20px;
        }

        /* Adjust watermark size for tablets */
        .incorporation::before {
            top: 8px;
            font-size: 80px;
        }
    }

    @media (max-width: 767px) {
        .incorporation-heading {
            margin-bottom: 30px;
            font-size: 12px;
        }

        /* Reduce card padding to save vertical space */
        .service-card-incorporation {
            padding: 1.5rem 1rem;
        }

        .icon-wrap-incorporation {
            width: 55px;
            height: 55px;
            margin-bottom: 15px;
        }

        .icon-wrap-incorporation svg {
            width: 38px;
            height: 38px;
        }

        .service-card-incorporation h5 {
            font-size: 15px;
        }

        /* Adjust watermark size for mobile */
        .incorporation::before {
            top: 25px;
            font-size: 50px;
            letter-spacing: 1px;
        }
    }

    @media (max-width: 480px) {

        /* On very small screens, use a single column to prevent cramped text */
        .row-cols-2 {
            row-gap: 15px;
        }

        /* Optional: If 2 columns feel too tight for the long titles, 
        uncomment the line below to switch to 1 column */
        /* .services-grid > .col { width: 100%; } */

        .service-card-incorporation h5 {
            font-size: 14px;
        }

        .service-card-incorporation p {
            font-size: 11px;
            line-height: 1.5;
        }
    }
</style>

<section class="container">

    <div class="incorporation position-relative" style="z-index:1;">

        <h2 class="incorporation-heading">Bussiness Formation & Registration</h2>

        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-3 services-grid py-5">

            <!-- 1. Business Structure Advisory -->
            <div class="col">
                <div class="service-card-incorporation ">
                    <div class="icon-wrap-incorporation ">
                        <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="24" cy="10" r="5" stroke="#c0392b" stroke-width="2" />
                            <circle cx="10" cy="36" r="5" stroke="#c0392b" stroke-width="2" />
                            <circle cx="38" cy="36" r="5" stroke="#c0392b" stroke-width="2" />
                            <line x1="24" y1="15" x2="24" y2="24" stroke="#c0392b" stroke-width="2" />
                            <line x1="24" y1="24" x2="10" y2="31" stroke="#c0392b" stroke-width="2" />
                            <line x1="24" y1="24" x2="38" y2="31" stroke="#c0392b" stroke-width="2" />
                        </svg>
                    </div>
                    <h5>Business Structure Advisory</h5>
                    <p>Expert guidance to choose the right business structure based on your goals and tax planning.</p>
                </div>
            </div>

            <!-- 2. Company Name Reservation -->
            <div class="col">
                <div class="service-card-incorporation">
                    <div class="icon-wrap-incorporation">
                        <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="10" y="14" width="28" height="20" rx="4" stroke="#c0392b" stroke-width="2" />
                            <path d="M16 22h6M16 27h10" stroke="#c0392b" stroke-width="2" stroke-linecap="round" />
                            <path d="M30 18v-4a2 2 0 0 0-2-2H20a2 2 0 0 0-2 2v4" stroke="#c0392b" stroke-width="2" />
                            <circle cx="34" cy="34" r="7" fill="#fdf0f0" stroke="#c0392b" stroke-width="2" />
                            <path d="M31 34l2 2 4-4" stroke="#c0392b" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h5>Company Name Reservation</h5>
                    <p>Support in selecting and reserving a unique company name with MCA as per Indian naming guidelines.</p>
                </div>
            </div>

            <!-- 3. Incorporation Documentation -->
            <div class="col">
                <div class="service-card-incorporation">
                    <div class="icon-wrap-incorporation">
                        <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="12" y="8" width="24" height="32" rx="3" stroke="#c0392b" stroke-width="2" />
                            <path d="M18 16h12M18 21h12M18 26h8" stroke="#c0392b" stroke-width="2" stroke-linecap="round" />
                            <path d="M30 30l3 3-3 3" stroke="#c0392b" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M28 34h5" stroke="#c0392b" stroke-width="1.8" stroke-linecap="round" />
                        </svg>
                    </div>
                    <h5>Incorporation Documentation</h5>
                    <p>Preparation of essential incorporation documents, including MOA and AOA for company registration.</p>
                </div>
            </div>

            <!-- 4. Government Registration Process -->
            <div class="col">
                <div class="service-card-incorporation">
                    <div class="icon-wrap-incorporation">
                        <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 38h32M12 38V22M36 38V22" stroke="#c0392b" stroke-width="2" stroke-linecap="round" />
                            <path d="M18 38V30h12v8" stroke="#c0392b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8 22l16-12 16 12" stroke="#c0392b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M28 16l3 3-6 6" stroke="#c0392b" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h5>Government Registration Process</h5>
                    <p>Complete handling of company registration with MCA to legally establish your business.</p>
                </div>
            </div>

            <!-- 5. Digital Signature and DIN -->
            <div class="col">
                <div class="service-card-incorporation">
                    <div class="icon-wrap-incorporation">
                        <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="10" y="10" width="20" height="28" rx="3" stroke="#c0392b" stroke-width="2" />
                            <path d="M14 18h12M14 23h8" stroke="#c0392b" stroke-width="2" stroke-linecap="round" />
                            <path d="M26 32c0 0 4-2 8-1" stroke="#c0392b" stroke-width="1.8" stroke-linecap="round" />
                            <path d="M28 28l6 2-2 6" stroke="#c0392b" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h5>Digital Signature and DIN Registration Assistance</h5>
                    <p>Assistance in obtaining DSC and DIN required for directors during company incorporation.</p>
                </div>
            </div>

            <!-- 6. PAN & TAN Registration -->
            <div class="col">
                <div class="service-card-incorporation">
                    <div class="icon-wrap-incorporation">
                        <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="8" y="14" width="32" height="22" rx="4" stroke="#c0392b" stroke-width="2" />
                            <circle cx="18" cy="22" r="4" stroke="#c0392b" stroke-width="2" />
                            <path d="M26 20h8M26 25h6" stroke="#c0392b" stroke-width="2" stroke-linecap="round" />
                            <path d="M12 30h6" stroke="#c0392b" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </div>
                    <h5>PAN &amp; TAN Registration</h5>
                    <p>Assistance in obtaining PAN and TAN for smooth financial and tax operations.</p>
                </div>
            </div>

            <!-- 7. Regulatory Compliance Setup -->
            <div class="col">
                <div class="service-card-incorporation">
                    <div class="icon-wrap-incorporation">
                        <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 6L10 12v10c0 9 6 17 14 20 8-3 14-11 14-20V12L24 6z" stroke="#c0392b" stroke-width="2" stroke-linejoin="round" />
                            <path d="M17 24l4 4 10-10" stroke="#c0392b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h5>Regulatory Compliance Setup</h5>
                    <p>Ensuring full compliance with legal and regulatory requirements under the Companies Act, 2013.</p>
                </div>
            </div>

            <!-- 8. Startup & Entrepreneur Support -->
            <div class="col">
                <div class="service-card-incorporation">
                    <div class="icon-wrap-incorporation">
                        <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 8C24 8 14 14 14 26c0 5.5 4.5 10 10 10s10-4.5 10-10c0-12-10-18-10-18z" stroke="#c0392b" stroke-width="2" stroke-linejoin="round" />
                            <path d="M24 36v4M20 40h8" stroke="#c0392b" stroke-width="2" stroke-linecap="round" />
                            <circle cx="24" cy="25" r="3" stroke="#c0392b" stroke-width="2" />
                        </svg>
                    </div>
                    <h5>Startup &amp; Entrepreneur Support</h5>
                    <p>Tailored solutions for startups and businesses to build a strong legal foundation.</p>
                </div>
            </div>

            <!-- 9. Business Legitimacy & Credibility -->
            <div class="col">
                <div class="service-card-incorporation">
                    <div class="icon-wrap-incorporation">
                        <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="10" y="10" width="28" height="28" rx="4" stroke="#c0392b" stroke-width="2" />
                            <circle cx="24" cy="20" r="5" stroke="#c0392b" stroke-width="2" />
                            <path d="M14 36c0-5.5 4.5-10 10-10s10 4.5 10 10" stroke="#c0392b" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </div>
                    <h5>Business Legitimacy &amp; Credibility</h5>
                    <p>Company registration enhances credibility, investor trust, and long-term business stability.</p>
                </div>
            </div>

            <!-- 10. Seamless End-to-End Incorporation -->
            <div class="col">
                <div class="service-card-incorporation">
                    <div class="icon-wrap-incorporation">
                        <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="24" cy="24" r="14" stroke="#c0392b" stroke-width="2" />
                            <path d="M24 10v4M24 34v4M10 24h4M34 24h4" stroke="#c0392b" stroke-width="2" stroke-linecap="round" />
                            <path d="M17 17l3 3M28 28l3 3M17 31l3-3M28 20l3-3" stroke="#c0392b" stroke-width="1.8" stroke-linecap="round" />
                            <circle cx="24" cy="24" r="4" stroke="#c0392b" stroke-width="2" />
                        </svg>
                    </div>
                    <h5>Seamless End-to-End Incorporation</h5>
                    <p>A streamlined incorporation process ensuring smooth and legally compliant business setup.</p>
                </div>
            </div>

        </div>

    </div>

</section>

<style>
    /* Section */
    .register {
        position: relative;
        padding: 100px 0 0px;
        overflow: hidden;
        background: #fff;
    }

    /* Watermark */
    .register::before {
        content: "Register";
        position: absolute;
        top: 25px;
        left: 19%;
        transform: translateX(-50%);
        font-size: clamp(60px, 10vw, 115px);
        font-weight: 700;
        color: #f0c0c8;
        white-space: nowrap;
        pointer-events: none;
        z-index: 0;
        opacity: 0.2;
        letter-spacing: 2px;
    }

    /* ── Heading ── */
    .register-heading {
        position: relative;
        z-index: 1;
        color: #25356F;
        font-size: clamp(1.6rem, 3vw, 2.2rem);
        font-weight: 700;
        text-align: start;
        margin-bottom: 50px;
    }

    .section-text {
        font-size: 0.95rem;
        line-height: 1.8;
        margin-bottom: 1rem;
    }

    /* Feature Circles */
    .feature-circle {
        width: 160px;
        height: 160px;
        border-radius: 50%;
        background: #25356F;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 20px;
        margin: 10px auto;
        /* transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s ease; */
        cursor: default;
        position: relative;
        box-shadow: 0 8px 30px rgba(26, 45, 107, 0.25);
        opacity: 0;
        transform: translateY(-80px) scale(0.9);
    }

    /* .feature-circle:hover {
        transform: translateY(-6px) scale(1.05);
    } */

    .feature-circle .icon {
        font-size: 2rem;
        margin-bottom: 10px;
        color: #fff;
        opacity: 0.9;
    }

    .feature-circle .label {
        font-size: 0.78rem;
        font-weight: 600;
        color: #fff;
        line-height: 1.4;
    }

    /* SVG Icons */
    .feature-circle svg {
        width: 44px;
        height: 44px;
        margin-bottom: 10px;
        stroke: rgba(255, 255, 255, 0.9);
        fill: none;
        stroke-width: 1.5;
        stroke-linecap: round;
        stroke-linejoin: round;
    }

    .circles-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: auto auto;
        align-items: center;
    }

    /* When visible */
    .register.animate .feature-circle {
        animation: dropTop 1s ease forwards;
    }

    /* Stagger delays */
    .register.animate .circles-grid > div:nth-child(1) .feature-circle { animation-delay: 0.1s; }
    .register.animate .circles-grid > div:nth-child(2) .feature-circle { animation-delay: 0.2s; }
    .register.animate .circles-grid > div:nth-child(3) .feature-circle { animation-delay: 0.3s; }
    .register.animate .circles-grid > div:nth-child(4) .feature-circle { animation-delay: 0.4s; }
    .register.animate .circles-grid > div:nth-child(5) .feature-circle { animation-delay: 0.5s; }
    .register.animate .circles-grid > div:nth-child(6) .feature-circle { animation-delay: 0.6s; }
    .register.animate .circles-grid > div:nth-child(7) .feature-circle { animation-delay: 0.7s; }
    .register.animate .circles-grid > div:nth-child(8) .feature-circle { animation-delay: 0.8s; }

    /* Animation */
    @keyframes dropTop {
        0% {
        transform: translateY(-80px) scale(0.9);
        opacity: 0;
    }
    60% {
        transform: translateY(10px) scale(1.02);
        opacity: 1;
    }
    100% {
        transform: translateY(0) scale(1);
        opacity: 1;
    }
}

    /* --- Add/Update these rules in your <style> block --- */

    @media (max-width: 991px) {
        .register {
            padding: 60px 0;
            /* Reduce padding for tablet/mobile */
        }

        .register::before {
            left: 50%;
            /* Center the watermark on smaller screens */
            top: 10px;
            font-size: 80px;
        }

        .register-heading {
            text-align: center;
            /* Center heading for better mobile flow */
            margin-bottom: 30px;
        }

        .circles-grid {
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
        }
    }

    @media (max-width: 768px) {

        /* Make circles smaller so they fit side-by-side on mobile */
        .feature-circle.large {
            width: 140px;
            height: 140px;
            padding: 15px;
        }

        .feature-circle .icon,
        .feature-circle svg {
            width: 32px;
            height: 32px;
        }

        .feature-circle .label {
            font-size: 0.7rem;
        }

        .circles-grid {
            grid-template-columns: repeat(2, 1fr);
            /* 2 columns on small mobile */
        }
    }

    @media (max-width: 480px) {

        /* Extra small screens adjustment */
        .feature-circle.large {
            width: 130px;
            height: 130px;
        }

        .section-text {
            text-align: center;
            /* Optional: centers text for single-column mobile view */
        }
    }
</style>

<section class="container">

    <div class="register position-relative" style="z-index:1;">

        <div class="row align-items-center g-5">

            <!-- Left: Text Content -->
            <div class="col-lg-5">
                <h2 class="register-heading">Private Limited Company Setup</h2>
                <p class="section-text">
                    A Private Limited Company is one of the most preferred business structures in India
                    for startups, entrepreneurs, and growing businesses. It offers a strong legal identity,
                    limited liability protection for shareholders, and greater credibility with investors,
                    clients, and financial institutions.
                </p>
                <p class="section-text">
                    Registering a Private Limited Company under the Companies Act, 2013 ensures a
                    structured framework for ownership, management, and compliance. It also
                    provides better opportunities for funding, business expansion, and long-term
                    scalability.
                </p>
                <p class="section-text">
                    At The Euphoria Group, we provide complete support for Private Limited Company
                    Registration, including name approval, DSC & DIN application, incorporation filing with
                    the Ministry of Corporate Affairs (MCA), and post-registration compliance—ensuring a
                    smooth and hassle-free setup process.
                </p>
            </div>

            <!-- Right: Circle Grid -->
            <div class="col-lg-7">
                <div class="circles-grid">

                    <!-- Row 1 -->
                    <div class="d-flex justify-content-center">
                        <style>
                            .feature-icon {
                                width: 50px;
                                height: 50px;
                                margin-bottom: 10px;
                            }
                        </style>
                        <div class="feature-circle large">
                            <img src="assets/img/icon/register-1.png" alt="Startup-Friendly Structure" class="feature-icon">
                            <span class="label">Startup-Friendly Structure</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="feature-circle large">
                            <img src="assets/img/icon/register-2.png" alt="Limited Liability Protection" class="feature-icon">
                            <span class="label">Limited Liability Protection</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="feature-circle large">
                            <img src="assets/img/icon/register-3.png" alt="Strong Investor Credibility" class="feature-icon">
                            <span class="label">Strong Investor Credibility</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="feature-circle large">
                            <img src="assets/img/icon/register-4.png" alt="MCA Regulatory Compliance" class="feature-icon">
                            <span class="label">MCA Regulatory Compliance</span>
                        </div>
                    </div>

                    <!-- Row 2 -->
                    <div class="d-flex justify-content-center">
                        <div class="feature-circle large">
                            <img src="assets/img/icon/register-5.png" alt="Strong Investor Credibility" class="feature-icon">
                            <span class="label">Corporate Governance</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="feature-circle large">
                            <img src="assets/img/icon/register-6.png" alt="Strong Investor Credibility" class="feature-icon">
                            <span class="label">Better Funding Opportunities</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="feature-circle large">
                            <img src="assets/img/icon/register-7.png" alt="Strong Investor Credibility" class="feature-icon">
                            <span class="label">Scalable Business Model</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="feature-circle large">
                            <img src="assets/img/icon/register-8.png" alt="Strong Investor Credibility" class="feature-icon">
                            <span class="label">Enhanced Business Credibility</span>
                        </div>
                    </div>

                </div>
            </div>
            <!-- End Right -->

        </div>


    </div>


</section>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const sectionDropAnimation = document.querySelector(".register");

        const observerDropAnimation = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    sectionDropAnimation.classList.add("animate");

                    // OPTIONAL: run only once
                    observerDropAnimation.unobserve(sectionDropAnimation);
                }
            });
        }, {
            threshold: 0.3 // trigger when 30% visible
        });

        observerDropAnimation.observe(sectionDropAnimation);
    });
</script>

<style>
    /* Section */
    .alliance {
        position: relative;
        padding: 100px 0 0px;
        overflow: hidden;
        background: #fff;
    }

    /* Watermark */
    .alliance::before {
        content: "Alliance";
        position: absolute;
        top: 76px;
        left: 50%;
        transform: translateX(-50%);
        font-size: clamp(60px, 10vw, 115px);
        font-weight: 700;
        color: #f0c0c8;
        white-space: nowrap;
        pointer-events: none;
        z-index: 0;
        opacity: 0.2;
        letter-spacing: 2px;
    }

    /* ── Heading ── */
    .alliance-heading {
        position: relative;
        z-index: 1;
        color: #25356F;
        font-size: clamp(1.6rem, 3vw, 2.3rem);
        font-weight: 700;
        text-align: center;
        margin-bottom: 50px;
    }


    /* ── Section wrapper ── */
    .benefits-section {
        padding: 80px 0 90px;
        background: linear-gradient(135deg, #f0f4fb 0%, #e8edf8 100%);
    }

    .section-eyebrow {
        font-size: 0.78rem;
        font-weight: 600;
        letter-spacing: 0.18em;
        text-transform: uppercase;
        color: #c9a84c;
        margin-bottom: 10px;
    }

    .section-subtitle {
        font-size: 1rem;
        color: #4a5568;
        max-width: 560px;
        margin: 0 auto 50px;
        line-height: 1.65;
    }

    /* ── Card ── */
    .benefit-card-alliance {
        position: relative;
        border-radius: 18px;
        overflow: hidden;
        height: 330px;
        cursor: pointer;
        box-shadow: 0 8px 32px rgba(13, 27, 62, 0.13);
        transition: transform 0.38s cubic-bezier(.25, .8, .25, 1),
            box-shadow 0.38s cubic-bezier(.25, .8, .25, 1);
    }

    .benefit-card-alliance:hover {
        transform: translateY(-6px) scale(1.015);
        box-shadow: 0 20px 48px rgba(13, 27, 62, 0.22);
    }

    /* Background image */
    .card-bg {
        position: absolute;
        inset: 0;
        background-size: cover;
        background-position: center;
        transition: transform 0.55s ease;
    }

    .benefit-card-alliance:hover .card-bg {
        transform: scale(1.06);
    }

    /* Gradient overlay */
    .card-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to bottom,
                rgba(13, 27, 62, 0.08) 0%,
                rgba(13, 27, 62, 0.35) 40%,
                rgba(13, 27, 62, 0.88) 100%);
        transition: background 0.38s ease;
    }

    .benefit-card-alliance:hover .card-overlay {
        background: linear-gradient(to bottom,
                rgba(13, 27, 62, 0.10) 0%,
                rgba(13, 27, 62, 0.45) 40%,
                rgba(13, 27, 62, 0.95) 100%);
    }

    /* Content inside card */
    .card-content {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        text-align: center;
        padding: 28px 24px 26px;
    }

    .card-icon {
        width: 44px;
        height: 44px;
        background: linear-gradient(135deg, var(--gold), var(--gold-light));
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 12px;
        box-shadow: 0 4px 14px rgba(201, 168, 76, 0.4);
        transition: transform 0.3s ease;
    }

    .benefit-card-alliance:hover .card-icon {
        transform: scale(1.1) rotate(-4deg);
    }

    .card-icon svg {
        width: 22px;
        height: 22px;
        color: #fff;
    }

    .card-title-alliance {
        font-size: 17px;
        font-family: "Anek Kannada", "Poppins", sans-serif;
        font-weight: 400;
        color: #ffffff;
        margin-bottom: 8px;
        line-height: 1.3;
    }

    .card-desc-alliance {
        font-size: 11px;
        color: #fff;
        font-family: "Anek Kannada", "Poppins", sans-serif;
        line-height: 1.4;
        margin: 0;
    }

    /* ── Swiper overrides ── */
    .swiper {
        padding: 12px 6px 54px !important;
    }

    .swiper-slide {
        height: auto;
    }

    /* Pagination bullets */
    .swiper-pagination-bullet {
        width: 10px;
        height: 10px;
        background: #b0bdd4;
        opacity: 1;
        transition: all 0.3s ease;
    }

    .swiper-pagination-bullet-active {
        background: #25356F;
        width: 28px;
        border-radius: 5px;
    }

    /* Nav buttons */
    .swiper-nav-btn {
        width: 46px;
        height: 46px;
        border-radius: 50%;
        border: 2px solid #25356F;
        background: #ffffff;
        color: #25356F;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.28s ease;
        box-shadow: 0 4px 14px rgba(13, 27, 62, 0.12);
    }

    .swiper-nav-btn:hover {
        background: #25356F;
        color: #ffffff;
        transform: scale(1.08);
    }

    .swiper-nav-btn svg {
        width: 18px;
        height: 18px;
    }

    .swiper-nav-btn.swiper-button-disabled {
        opacity: 0.35;
        pointer-events: none;
    }

    /* --- Mobile Responsive Adjustments --- */

    @media (max-width: 991px) {
        .alliance {
            padding: 0px 0 40px;
            /* Tighter padding for tablets */
        }

        .alliance::before {
            top: 40px;
            font-size: 80px;
            /* Smaller watermark */
        }
    }

    @media (max-width: 767px) {
        .alliance-heading {
            margin-bottom: 30px;
            font-size: 1.8rem;
            /* Scale down heading */
        }

        /* Reduce card height so it doesn't take up the whole screen */
        .benefit-card-alliance {
            height: 280px;
        }

        /* Adjust padding inside cards for small screens */
        .card-content {
            padding: 20px 15px;
        }

        .card-title-alliance {
            font-size: 0.95rem;
        }

        .card-desc-alliance {
            font-size: 0.7rem;
            line-height: 1.5;
        }

        /* Shrink the watermark further */
        .alliance::before {
            top: 5px;
            font-size: 70px;
        }

        /* Adjust Navigation buttons size for thumbs */
        .swiper-nav-btn {
            width: 40px;
            height: 40px;
        }
    }

    @media (max-width: 480px) {
        .benefit-card-alliance {
            height: 260px;
            /* Even shorter for very small phones */
        }

        .alliance-heading {
            font-size: 1.5rem;
        }
    }
</style>

<section class="alliance">

    <div class="container position-relative py-5" style="z-index:1;">
        <h2 class="alliance-heading">LLP Registration</h2>

        <!-- Swiper -->
        <div class="swiper benefitsSwiper">
            <div class="swiper-wrapper">

                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="benefit-card-alliance">
                        <div class="card-bg" style="background-image:url('assets/img/corporate-establishment/llp-reg-1.png');"></div>
                        <div class="card-overlay"></div>
                        <div class="card-content">
                            <h3 class="card-title-alliance">Limited Liability Protection</h3>
                            <p class="card-desc-alliance">Protects partners' personal assets by limiting liability to their agreed contribution in the LLP.</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="benefit-card-alliance">
                        <div class="card-bg" style="background-image:url('assets/img/corporate-establishment/llp-reg-2.png');"></div>
                        <div class="card-overlay"></div>
                        <div class="card-content">

                            <h3 class="card-title-alliance">Flexible Business Structure</h3>
                            <p class="card-desc-alliance">Combines partnership flexibility with the legal protection offered by a corporate entity.</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div class="benefit-card-alliance">
                        <div class="card-bg" style="background-image:url('assets/img/corporate-establishment/llp-reg-3.png');"></div>
                        <div class="card-overlay"></div>
                        <div class="card-content">

                            <h3 class="card-title-alliance">Lower Compliance Requirements</h3>
                            <p class="card-desc-alliance">LLPs have fewer regulatory requirements than companies, making management simpler.</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="swiper-slide">
                    <div class="benefit-card-alliance">
                        <div class="card-bg" style="background-image:url('assets/img/corporate-establishment/llp-reg-4.png');"></div>
                        <div class="card-overlay"></div>
                        <div class="card-content">

                            <h3 class="card-title-alliance">For Experts & Small Businesses</h3>
                            <p class="card-desc-alliance">Ideal for consultants, startups, and professionals seeking a flexible business structure.</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 5 -->
                <div class="swiper-slide">
                    <div class="benefit-card-alliance">
                        <div class="card-bg" style="background-image:url('assets/img/corporate-establishment/llp-reg-5.png');"></div>
                        <div class="card-overlay"></div>
                        <div class="card-content">

                            <h3 class="card-title-alliance">Tax Efficiency</h3>
                            <p class="card-desc-alliance">Partners are taxed individually on their share of profits, avoiding double taxation common in corporations.</p>
                        </div>
                    </div>
                </div>


            </div><!-- /.swiper-wrapper -->

            <!-- Pagination -->
            <div class="swiper-pagination mt-3"></div>
        </div><!-- /.swiper -->

        <!-- Custom Navigation -->
        <div class="d-flex d-none justify-content-center align-items-center gap-3 mt-3">
            <button class="swiper-nav-btn" id="prevBtn" aria-label="Previous">
                <svg fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
            </button>
            <button class="swiper-nav-btn d-none" id="nextBtn" aria-label="Next">
                <svg fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </button>
        </div>
    </div>

</section>

<style>
    /* Section */
    .individual {
        position: relative;
        padding: 100px 0 0px;
        overflow: hidden;
        background: #f9fafb;
    }

    /* Watermark */
    .individual::before {
        content: "Individual";
        position: absolute;
        top: 23px;
        left: 50%;
        transform: translateX(-50%);
        font-size: clamp(60px, 10vw, 115px);
        font-weight: 700;
        color: #f0c0c8;
        white-space: nowrap;
        pointer-events: none;
        z-index: 0;
        opacity: 0.2;
        letter-spacing: 2px;
    }

    /* ── Heading ── */
    .individual-heading {
        position: relative;
        z-index: 1;
        color: #25356F;
        font-size: clamp(1.6rem, 3vw, 2.2rem);
        font-weight: 700;
        text-align: center;
        margin-bottom: 50px;
    }


    .benefits-section {
        padding: 70px 0;
        background: #fff;
    }

    /* ── Left: accordion list ── */
    .benefit-item {
        border-bottom: 1.5px solid #ddd;
        padding: 22px 10px;
        cursor: pointer;
        border-radius: 6px;
        transition: background 0.22s;
    }


    .benefit-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
    }

    .benefit-title {
        font-size: 1.3rem;
        font-weight: 600;
        color: #333;
        margin: 0;
        transition: color 0.22s;
    }

    .benefit-item.active .benefit-title,
    .benefit-item:hover .benefit-title {
        color: #e73f3f;
    }

    /* Arrow icon */
    .arrow-icon {
        flex-shrink: 0;
        width: 34px;
        height: 34px;
        border-radius: 50%;
        border: 1.8px solid #ccc;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: border-color 0.22s, background 0.22s;
    }

    .arrow-icon svg {
        width: 16px;
        height: 16px;
        color: #aaa;
        transition: color 0.22s, transform 0.28s;
    }

    .benefit-item.active .arrow-icon,
    .benefit-item:hover .arrow-icon {
        border-color: #c0392b;
        background: #c0392b;
    }

    .benefit-item.active .arrow-icon svg,
    .benefit-item:hover .arrow-icon svg {
        color: #fff;
        transform: translateX(2px);
    }

    /* Description */
    .benefit-desc {
        font-size: 0.85rem;
        line-height: 1.7;
        width: 90%;
        overflow: hidden;
        margin-bottom: 0px;
        transition: max-height 0.38s ease, opacity 0.3s ease, margin 0.3s ease;
    }

    .benefit-item.active .benefit-desc {
        max-height: 120px;
        margin-bottom: 0px;
        opacity: 1;
    }

    /* ── Right: image ── */
    .img-wrapper {
        border-radius: 16px;
        overflow: hidden;
        height: 100%;
        min-height: 420px;
    }

    .img-wrapper img {
        width: 100%;
        height: 700px;
        object-fit: cover;
        display: block;
        transition: transform 0.6s ease;
    }

    .img-wrapper:hover img {
        transform: scale(1.03);
    }

    /* --- Mobile Responsive Adjustments --- */

    @media (max-width: 991px) {
        .individual {
            padding: 60px 0 20px;
        }

        .individual::before {
            top: 15px;
            font-size: 70px;
            /* Shrink watermark */
        }

        .individual-heading {
            margin-bottom: 20px;
            font-size: 17px;
        }

        /* Adjust the grid spacing for the rows */
        .row.py-5 {
            padding-top: 1rem !important;
            padding-bottom: 2rem !important;
        }

        /* Make the image height reasonable for mobile */
        .img-wrapper img {
            height: 350px;
            margin-top: 10px;
        }
    }

    @media (max-width: 767px) {
        .benefit-title {
            font-size: 1.1rem;
            /* Smaller titles so they don't wrap too much */
        }

        .benefit-item {
            padding: 15px 5px;
            /* Tighter padding */
        }

        .arrow-icon {
            width: 28px;
            height: 28px;
        }

        .arrow-icon svg {
            width: 14px;
            height: 14px;
        }

        .benefit-desc {
            width: 100%;
            /* Use full width on small screens */
            font-size: 0.8rem;
        }

        /* Ensure the image doesn't look squashed */
        .img-wrapper {
            min-height: auto;
        }
    }

    @media (max-width: 480px) {
        .individual-heading {
            font-size: 1.4rem;
        }

        .img-wrapper img {
            height: 280px;
        }
    }

    .remove-bottom-border {
        border-bottom: 0px;
    }
</style>

<section class="individual">

    <div class="container position-relative" style="z-index:1;">

        <h2 class="individual-heading">OPC ( One Person Company )</h2>

        <div class="row align-items-center g-5 py-5">

            <!-- LEFT: Benefit Items -->
            <div class="col-lg-8">

                <div class="benefit-item active" onclick="toggleItem(this)">
                    <div class="benefit-header">
                        <h3 class="benefit-title">Ideal for Solo Entrepreneurs</h3>
                        <span class="arrow-icon">
                            <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </span>
                    </div>
                    <p class="benefit-desc">Designed specifically for individual founders who want to start and operate a business independently with full ownership.</p>
                </div>

                <div class="benefit-item" onclick="toggleItem(this)">
                    <div class="benefit-header">
                        <h3 class="benefit-title">Complete Business Control</h3>
                        <span class="arrow-icon">
                            <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </span>
                    </div>
                    <p class="benefit-desc">Allows a single entrepreneur to manage decision-making, strategy, and operations without the need for partners.</p>
                </div>

                <div class="benefit-item" onclick="toggleItem(this)">
                    <div class="benefit-header">
                        <h3 class="benefit-title">Limited Liability Protection</h3>
                        <span class="arrow-icon">
                            <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </span>
                    </div>
                    <p class="benefit-desc">Protects the personal assets of the owner by limiting liability to the company's financial obligations.</p>
                </div>

                <div class="benefit-item" onclick="toggleItem(this)">
                    <div class="benefit-header">
                        <h3 class="benefit-title">Separate Legal Identity</h3>
                        <span class="arrow-icon">
                            <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </span>
                    </div>
                    <p class="benefit-desc">The business operates as a separate legal entity, enabling it to own assets, sign contracts, and conduct business independently.</p>
                </div>

                <div class="benefit-item" onclick="toggleItem(this)">
                    <div class="benefit-header">
                        <h3 class="benefit-title">Corporate Recognition & Credibility</h3>
                        <span class="arrow-icon">
                            <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </span>
                    </div>
                    <p class="benefit-desc">Registration under the Companies Act enhances professional credibility with clients, vendors, and financial institutions.</p>
                </div>

                <div class="benefit-item remove-bottom-border" onclick="toggleItem(this)">
                    <div class="benefit-header">
                        <h3 class="benefit-title">Simplified Compliance Structure</h3>
                        <span class="arrow-icon">
                            <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </span>
                    </div>
                    <p class="benefit-desc">Compared to larger companies, OPCs have relatively simpler regulatory and compliance requirements.</p>
                </div>

            </div><!-- /col-lg-7 -->

            <!-- RIGHT: Image -->
            <div class="col-lg-4">
                <div class="img-wrapper">
                    <img
                        src="assets/img/corporate-establishment/opc.png" alt="Solo Entrepreneur" />
                </div>
            </div>

        </div>

    </div>

</section>

<style>
    /* Section */
    .setup {
        position: relative;
        padding: 100px 0 0px;
        overflow: hidden;
        background: #fff;
    }

    /* Watermark */
    .setup::before {
        content: "Setup";
        position: absolute;
        top: 27px;
        left: 50%;
        transform: translateX(-50%);
        font-size: clamp(60px, 10vw, 115px);
        font-weight: 700;
        color: #f0c0c8;
        white-space: nowrap;
        pointer-events: none;
        z-index: 0;
        opacity: 0.2;
        letter-spacing: 2px;
    }

    /* ── Heading ── */
    .setup-heading {
        position: relative;
        z-index: 1;
        color: #25356F;
        font-size: clamp(1.6rem, 3vw, 2.2rem);
        font-weight: 700;
        text-align: center;
        margin-bottom: 50px;
    }


    /* ── Card ── */
    .benefit-card {

        padding: 32px 28px 28px;
        height: 100%;
        position: relative;
        overflow: hidden;
        border-left: 1px solid lightgrey;
    }

    .benefit-card::before {
        content: '';
        position: absolute;
        left: 0;
        top: 40px;
        bottom: 160px;
        width: 1.5px;
        background: #ff0000;
        opacity: 0;
        transform: scaleY(0.4);
        transition: opacity 0.28s ease, transform 0.28s ease;
    }

    .benefit-card:hover {
        transform: translateY(-4px);
        border-left: 1px solid lightgrey;
    }

    .benefit-card:hover::before {
        opacity: 1;
        transform: scaleY(1);
    }

    /* Icon circle */
    /* .icon-wrap {
        width: 68px;
        height: 68px;
        background: #fbf0f1;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        transition: background 0.28s ease, transform 0.28s ease;
    } */


    .setup-icon {
        width: 76px;
        height: 76px;
    }

    /* Text */
    .card-title {
        font-size: 19px;
        font-family: "Anek Kannada", "Poppins", sans-serif;
        font-weight: 600;
        color: #000;
        width: 260px;
        margin-bottom: 10px;
        letter-spacing: 0%;
        text-align: start;
        line-height: 100%;
    }

    .card-desc {
        font-size: 14px; 
        font-family: "Anek Kannada", "Poppins", sans-serif;
        color: #666666;
        line-height: 1.7;
        margin: 0;
        text-align: start;
    }

    /* Vertical divider between cols on desktop */
    /* --- Mobile & Tablet Responsive Adjustments --- */

    @media (max-width: 991px) {
        .setup {
            padding: 60px 0 30px;
        }

        .setup::before {
            top: 15px;
            font-size: 75px;
            /* Smaller watermark for tablets */
        }

        /* Remove the left border on tablets/mobile and use a subtle bottom border instead */
        .benefit-card {
            border-left: none;
            border-bottom: 1px solid #eee;
            padding: 25px 15px;
        }

        /* Hide the red hover line on mobile to keep it clean */
        .benefit-card::before {
            display: none;
        }

        .card-title {
            width: 100%;
            /* Title takes full width of the card */
            font-size: 1.1rem;
        }
    }

    @media (max-width: 767px) {
        .setup-heading {
            font-size: 1.4rem;
            margin-bottom: 20px;
        }

        .icon-wrap {
            width: 55px;
            height: 55px;
            margin-bottom: 15px;
        }

        .icon-wrap svg {
            width: 26px;
            height: 26px;
        }

        /* Remove border from the very last card to keep the bottom of the section clean */
        .col-divider:last-child .benefit-card {
            border-bottom: none;
        }
    }

    @media (max-width: 480px) {
        .setup-heading {
            font-size: 1.5rem;
        }

        .card-title {
            font-size: 1rem;
        }

        .card-desc {
            font-size: 0.75rem;
            line-height: 1.6;
        }
    }
</style>

<section class="setup">

    <div class="container position-relative" style="z-index:1;">

        <h2 class="setup-heading">Partnership Firm Registration</h2>

        <div class="row g-4 py-5">

            <!-- Row 1 -->
            <div class="col-12 col-sm-6 col-lg-3 col-divider">
                <div class="benefit-card">
                    <div class="mb-3">
                        <!-- Partners icon -->
                        <img src="assets/img/icon/setup-1.png" alt="Ideal for Two or More Partners" class="setup-icon">
                    </div>
                    <h3 class="card-title">Ideal for Two or More Partners</h3>
                    <p class="card-desc">A suitable business structure for entrepreneurs who want to start and manage a business together with shared responsibilities.</p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 col-divider">
                <div class="benefit-card">
                    <div class="mb-3">
                        <!-- Setup / gear icon -->
                        <img src="assets/img/icon/setup-2.png" alt="Simple Business Setup" class="setup-icon">
                    </div>
                    <h3 class="card-title">Simple Business Setup</h3>
                    <p class="card-desc">Partnership firm registration involves a straightforward formation process with minimal legal formalities.</p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 col-divider">
                <div class="benefit-card">
                    <div class="mb-3">
                        <!-- Cost / money icon -->
                        <img src="assets/img/icon/setup-3.png" alt="Cost-Effective Structure" class="setup-icon">
                    </div>
                    <h3 class="card-title">Cost-Effective Structure</h3>
                    <p class="card-desc">Compared to corporate entities, partnership firms generally involve lower setup and operational costs.</p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 col-divider">
                <div class="benefit-card">
                    <div class="mb-3">
                        <!-- Flexible / arrows icon -->
                        <img src="assets/img/icon/setup-4.png" alt="Flexible Business Operations" class="setup-icon">
                    </div>
                    <h3 class="card-title">Flexible Business Operations</h3>
                    <p class="card-desc">The partnership agreement allows partners to define roles, responsibilities, and profit-sharing arrangements.</p>
                </div>
            </div>

            <!-- Row 2 -->
            <div class="col-12 col-sm-6 col-lg-3 col-divider">
                <div class="benefit-card">
                    <div class="mb-3">
                        <!-- Distribution / pie icon -->
                        <img src="assets/img/icon/setup-5.png" alt="Profit Distribution Among Partners" class="setup-icon">
                    </div>
                    <h3 class="card-title">Profit Distribution Among Partners</h3>
                    <p class="card-desc">Business profits are distributed among partners based on mutually agreed terms in the partnership deed.</p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 col-divider">
                <div class="benefit-card">
                    <div class="mb-3">
                        <!-- SMB / briefcase icon -->
                        <img src="assets/img/icon/setup-6.png" alt="Strong Investor Credibility" class="setup-icon">
                    </div>
                    <h3 class="card-title">Ideal for Small & Medium Businesses</h3>
                    <p class="card-desc">Ideal for family businesses, professional firms, and small enterprises seeking a flexible operational structure.</p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 col-divider">
                <div class="benefit-card">
                    <div class="mb-3">
                        <!-- Quick / clock icon -->
                        <!-- Partners icon -->
                        <img src="assets/img/icon/setup-7.png" alt="Strong Investor Credibility" class="setup-icon">
                    </div>
                    <h3 class="card-title">Quick Registration Process</h3>
                    <p class="card-desc">The formation process is relatively faster, allowing businesses to begin operations quickly.</p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 col-divider">
                <div class="benefit-card">
                    <div class="mb-3">
                        <!-- Credibility / badge icon -->
                        <!-- Partners icon -->
                        <img src="assets/img/icon/setup-8.png" alt="Strong Investor Credibility" class="setup-icon">
                    </div>
                    <h3 class="card-title">Improved Business Credibility</h3>
                    <p class="card-desc">A registered partnership firm enhances trust with clients, vendors, and financial institutions.</p>
                </div>
            </div>

        </div><!-- /.row -->

    </div>

</section>

<style>
    /* Section */
    .ownership {
        position: relative;
        padding: 100px 0 0px;
        overflow: hidden;
        background: #fff;
    }

    /* Watermark */
    .ownership::before {
        content: "Ownership";
        position: absolute;
        top: 40px;
        left: 68%;
        transform: translateX(-50%);
        font-size: clamp(60px, 10vw, 115px);
        font-weight: 700;
        color: #f0c0c8;
        white-space: nowrap;
        pointer-events: none;
        z-index: 0;
        opacity: 0.2;
        letter-spacing: 2px;
    }

    /* ── Heading ── */
    .ownership-heading {
        position: relative;
        z-index: 1;
        color: #25356F;
        font-size: clamp(1.6rem, 3vw, 2.2rem);
        font-weight: 700;
        text-align: center;
        margin-bottom: 50px;
    }

    .setup-section {
        padding: 70px 0;
        background: #fff;
        overflow: hidden;
    }

    /* ── Left Image ── */
    .img-wrapper-ownership {
        overflow: hidden;
        height: 100%;
        min-height: 580px;
    }

    .img-wrapper-ownership img {
        width: 100%;
        height: 560px;
        border-radius: 20px;
        max-height: 100%;
        object-fit: cover;
        display: block;
    }

    /* ── Right Content ── */
    .content-side {
        position: relative;
    }


    .section-desc {
        font-size: 14px;
        font-family: "Anek Kannada", "Poppins", sans-serif;
        color: #333333;
        line-height: 1.8;
        margin-bottom: 32px;
    }

    /* ── Checklist grid ── */
    .checklist {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 18px 24px;
    }

    @media (max-width: 480px) {
        .checklist {
            grid-template-columns: 1fr;
        }
    }

    .check-item {
        display: flex;
        align-items: flex-start;
        gap: 10px;
    }

    /* Red checkmark icon */
    .check-icon {
        flex-shrink: 0;
        width: 26px;
        height: 26px;
        margin-top: 1px;
    }

    .check-icon svg {
        width: 26px;
        height: 26px;
    }

    .check-label {
        font-size: 0.92rem;
        font-weight: 600;
        color: #25356F;
        line-height: 1.4;
        padding-top: 3px;
    }

    .checklist-icon{
        width: 27px;
        height: 24px;
    }
    /* --- Proprietorship Setup Mobile Styles --- */

    @media (max-width: 991px) {
        .ownership {
            padding: 60px 0 40px;
        }

        /* Fix watermark positioning for mobile to prevent overflow */
        .ownership::before {
            top: -15px;
            left: 50%;
            font-size: 52px;
            opacity: 0.2;
        }

        .ownership-heading {
            text-align: center;
            /* Better for mobile balance */
            margin-bottom: 25px;
        }

        /* Adjust image height so it doesn't dominate the screen */
        .img-wrapper-ownership {
            min-height: auto;
            margin-bottom: 30px;
        }

        .img-wrapper-ownership img {
            height: 300px;
            /* Reduced from 560px */
            border-radius: 15px;
        }

        .section-desc {
            text-align: center;
            font-size: 0.85rem;
            margin-bottom: 25px;
        }

        .checklist {
            gap: 15px;
        }
    }

    @media (max-width: 767px) {

        /* Stack the checklist into a single column earlier for readability */
        .checklist {
            grid-template-columns: 1fr;
            max-width: 320px;
        }

        .check-label {
            font-size: 0.88rem;
        }

        .check-icon,
        .check-icon svg {
            width: 22px;
            height: 22px;
        }
    }

    @media (max-width: 480px) {
        .ownership-heading {
            font-size: 1.5rem;
        }

        .img-wrapper-ownership img {
            height: 250px;
        }
    }
</style>

<section class="ownership">
    <div class="container position-relative" style="z-index:1;">

        <div class="row align-items-center g-5">

            <!-- LEFT: Image -->
            <div class="col-lg-6">
                <div class="img-wrapper-ownership">
                    <img
                        src="assets/img/corporate-establishment/pro-setup.png"
                        alt="Proprietorship Setup" />
                </div>
            </div>

            <!-- RIGHT: Content -->
            <div class="col-lg-6">
                <div class="content-side">

                    <h2 class="ownership-heading">Proprietorship Setup</h2>
                    <!-- Description -->
                    <p class="section-desc">
                        A Partnership Firm is an ideal business structure for entrepreneurs who want to manage a business together with shared responsibilities and flexibility. It offers a simple and quick registration process with minimal legal formalities and lower setup costs compared to corporate entities. Partners can define their roles, responsibilities, and profit-sharing terms through a partnership deed, ensuring smooth operations and mutual understanding. With collective decision-making, shared expertise, and combined resources, it supports better growth and teamwork. This structure is especially suitable for family businesses, professional firms, and small enterprises looking for an easy-to-manage and cost-effective setup.
                    </p>

                    <!-- Checklist -->
                    <div class="checklist">

                        <div class="check-item">
                            <span class="check-icon">
                                <img src="assets/img/icon/Checke.png" alt="Checklist Icon" class="checklist-icon">
                            </span>
                            <span class="check-label">Ideal for Individual Entrepreneurs</span>
                        </div>

                        <div class="check-item">
                            <span class="check-icon">
                                <img src="assets/img/icon/Checke.png" alt="Checklist Icon" class="checklist-icon">
                            </span>
                            <span class="check-label">Quick &amp; Simple Business Setup</span>
                        </div>

                        <div class="check-item">
                            <span class="check-icon">
                                <img src="assets/img/icon/Checke.png" alt="Checklist Icon" class="checklist-icon">
                            </span>
                            <span class="check-label">Complete Operational Control</span>
                        </div>

                        <div class="check-item">
                            <span class="check-icon">
                                <img src="assets/img/icon/Checke.png" alt="Checklist Icon" class="checklist-icon">
                            </span>
                            <span class="check-label">Minimal Compliance Requirements</span>
                        </div>

                        <div class="check-item">
                            <span class="check-icon">
                                <img src="assets/img/icon/Checke.png" alt="Checklist Icon" class="checklist-icon">
                            </span>
                            <span class="check-label">Easy Taxation Process</span>
                        </div>

                        <div class="check-item">
                            <span class="check-icon">
                                <img src="assets/img/icon/Checke.png" alt="Checklist Icon" class="checklist-icon">
                            </span>
                            <span class="check-label">Cost-Effective Business Structure</span>
                        </div>

                        <div class="check-item">
                            <span class="check-icon">
                                <img src="assets/img/icon/Checke.png" alt="Checklist Icon" class="checklist-icon">
                            </span>
                            <span class="check-label">Flexible Business Operations</span>
                        </div>

                        <div class="check-item">
                            <span class="check-icon">
                                <img src="assets/img/icon/Checke.png" alt="Checklist Icon" class="checklist-icon">
                            </span>
                            <span class="check-label">Ideal for Small Businesses &amp; Freelancers</span>
                        </div>

                        <div class="check-item">
                            <span class="check-icon">
                                <img src="assets/img/icon/Checke.png" alt="Checklist Icon" class="checklist-icon">
                            </span>
                            <span class="check-label">Full Profit Ownership</span>
                        </div>

                        <div class="check-item">
                            <span class="check-icon">
                                <img src="assets/img/icon/Checke.png" alt="Checklist Icon" class="checklist-icon">
                            </span>
                            <span class="check-label">Foundation for Future Expansion</span>
                        </div>

                    </div><!-- /.checklist -->
                </div>
            </div>

        </div>

    </div>

</section>

<style>
    /* Section */
    .compliance {
        position: relative;
        padding: 100px 0 0px;
        overflow: hidden;
        background: #fff;
    }

    /* Watermark */
    .compliance::before {
        content: "Compliance";
        position: absolute;
        top: 75px;
        left: 50%;
        transform: translateX(-50%);
        font-size: clamp(60px, 10vw, 115px);
        font-weight: 700;
        color: #f0c0c8;
        white-space: nowrap;
        pointer-events: none;
        z-index: 0;
        opacity: 0.2;
        letter-spacing: 2px;
    }

    /* ── Heading ── */
    .compliance-heading {
        position: relative;
        z-index: 1;
        color: #25356F;
        font-size: clamp(1.6rem, 3vw, 2.5rem);
        font-weight: 700;
        margin-bottom: 100px;
        text-align: center;
    }


    /* ── Section wrapper ── */
    .tax-section {
        padding: 60px 0 70px;
    }

    .tax-section .section-tag {
        display: inline-block;
        background: #f0c0c8;
        color: #c0392b;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        border-radius: 20px;
        padding: 5px 16px;
        margin-bottom: 12px;
    }

    .tax-section h2 {
        font-size: clamp(1.6rem, 3vw, 2.2rem);
        font-weight: 800;
        color: #25356F;
        line-height: 1.25;
    }

    .tax-section h2 span {
        color: #c0392b;
    }

    .tax-section .lead {
        font-size: 1rem;
        max-width: 560px;
        margin: 0 auto;
        color: #a0aec0;
    }

    /* ── Card ── */
    .tax-card {
        background: #ffffff;
        border: 1.5px solid #cbd5e0;
        border-radius: 18px;
        padding: 36px 28px 32px;
        text-align: center;
        transition: transform .28s ease, box-shadow .28s ease, border-color .28s ease;
        height: 100%;
        user-select: none;
    }

    .tax-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 18px 40px rgba(192, 57, 43, .12);
        border-color: rgba(192, 57, 43, .35);
    }

    /* Icon circle */
    .tax-card .mb-2 {
        width: 80px;
        height: 80px;
        background: #fbf0f1;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 22px;
        transition: background .28s;
    } 

    .tax-card h5 {
        font-size: 14px;
         font-family: "Anek Kannada", "Poppins", sans-serif;
        font-weight: 700;
        color: #25356F;
        margin-bottom: 12px;
        line-height: 1.3;
    }

    .tax-card p {
        font-size: 13px;
        font-family: "Anek Kannada", "Poppins", sans-serif;
        line-height: 1.7;
        margin: 0;
        color: #666666;
    }

    /* ── Swiper overrides ── */
    .swiper {
        padding-bottom: 52px !important;
    }

    .swiper-slide {
        height: auto;
    }

    /* Pagination bullets */
    .swiper-pagination-bullet {
        width: 10px;
        height: 10px;
        background: #cbd5e0;
        opacity: 1;
        transition: all .25s;
    }

    .swiper-pagination-bullet-active {
        background: #25356F;
        width: 10px;
        height: 10px;
        outline: 2px solid #25356F;
        outline-offset: 3px;
        border-radius: 100%;
    }

    /* Nav buttons */
    .swiper-nav {
        display: flex;
        gap: 10px;
        justify-content: center;
        margin-top: 4px;
    }

    .swiper-btn {
        width: 42px;
        height: 42px;
        border-radius: 50%;
        border: 1.5px solid #cbd5e0;
        background: #fff;
        color: #25356F;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all .22s;
        font-size: 1rem;
    }

    .swiper-btn:hover {
        background: #c0392b;
        border-color: #c0392b;
        color: #fff;
    }

    /* hide default arrows */
    .swiper-button-next,
    .swiper-button-prev {
        display: none;
    }

    .swiper-pagination-lock {
        display: block;
    }

    .compliance-icon{
        width: 70px;
        height: 70px;
    }

    /* ── Responsive: stack on mobile ── */
    /* --- Compliance Swiper Mobile Styles --- */

    @media (max-width: 991px) {
        .compliance {
            padding: 60px 0 30px;
        }

        /* Adjust watermark positioning for mobile */
        .compliance::before {
            top: 68px;
            font-size: 63px;
            /* Scaled down for tablet/mobile */
            opacity: 0.2;
        }

        .compliance-heading {
            margin-bottom: 40px;
            /* Reduced gap for smaller screens */
        }

        .tax-card {
            padding: 30px 20px;
            /* Slimmer padding */
        }

        .tax-card .icon-wrap {
            width: 65px;
            height: 65px;
            margin-bottom: 15px;
        }

        .tax-card .icon-wrap img {
            width: 30px;
            height: 30px;
        }
    }

    @media (max-width: 767px) {
        .compliance-heading {
            font-size: 1.2rem;
            padding: 0 15px;
        }

        .tax-card h5 {
            font-size: 0.95rem;
        }

        .tax-card p {
            font-size: 0.75rem;
            /* Slightly larger text for mobile readability */
            line-height: 1.6;
        }

        /* Ensure navigation buttons are easy to tap */
        .swiper-btn {
            width: 45px;
            height: 45px;
        }
    }

    @media (max-width: 480px) {
        .compliance-heading {
            font-size: 1.4rem;
            margin-bottom: 30px;
        }

        /* Pagination bullets adjustment */
        .swiper-pagination-bullet {
            width: 8px;
            height: 8px;
        }

        .swiper-pagination-bullet-active {
            outline-width: 1.5px;
            outline-offset: 2px;
        }
    }
</style>

<section class="container compliance ">

    <div class=" position-relative py-5 " style="z-index:1;">
        <h2 class="compliance-heading">PAN, TAN, GST Registration</h2>

        <!-- Swiper -->
        <div class="swiper taxSwiper">
            <div class="swiper-wrapper">

                <!-- Card 1 -->
                <div class="swiper-slide">
                    <div class="tax-card">
                        <div class="mb-3">
                            <!-- clipboard / legal icon -->
                           <!-- Partners icon -->
                        <img src="assets/img/icon/compliance-1.png" alt="Essential for Legal Business Operations" class="compliance-icon">
                        </div>
                        <h5>Essential for Legal Business Operations</h5>
                        <p>PAN, TAN, and GST registrations are fundamental tax registrations required for legally operating and managing financial transactions in India.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="swiper-slide">
                    <div class="tax-card">
                        <div class="mb-3">
                            <!-- ID / PAN card icon -->
                           <img src="assets/img/icon/compliance-1.png" alt="Permanent Account Number" class="compliance-icon">
                        </div>
                        <h5>Permanent Account Number (PAN) for Tax Identity</h5>
                        <p>PAN acts as a unique financial identification number for businesses, enabling them to file taxes and conduct official financial activities.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="swiper-slide">
                    <div class="tax-card">
                        <div class="mb-3">
                            <!-- Receipt / TAN icon -->
                            <img src="assets/img/icon/compliance-3.png" alt="Tax Deduction" class="compliance-icon">
                        </div>
                        <h5>Tax Deduction &amp; Collection Compliance (TAN)</h5>
                        <p>TAN registration is required for businesses responsible for deducting or collecting tax at source under Indian tax regulations.</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="swiper-slide">
                    <div class="tax-card">
                        <div class="mb-3">
                            <!-- GST % icon -->
                            <img src="assets/img/icon/compliance-4.png" alt="GST Registration" class="compliance-icon">
                        </div>
                        <h5>GST Registration for Goods &amp; Services Tax Compliance</h5>
                        <p>GST registration allows businesses to legally collect and remit Goods and Services Tax on the supply of goods and services.</p>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="swiper-slide">
                    <div class="tax-card">
                        <div class="mb-3">
                            <!-- Handshake / transaction icon -->
                            <img src="assets/img/icon/compliance-5.png" alt="Strong Investor Credibility" class="compliance-icon">
                        </div>
                        <h5>Smooth Business Transactions</h5>
                        <p>Proper tax registrations enable seamless invoicing, billing, and financial transactions with clients, vendors, and government authorities.</p>
                    </div>
                </div>

            </div><!-- /.swiper-wrapper -->

            <div class="swiper-pagination"></div>
        </div><!-- /.swiper -->

        <!-- Custom nav -->
        <div class="swiper-nav d-none">
            <button class="swiper-btn" id="taxPrev" aria-label="Previous">&#8592;</button>
            <button class="swiper-btn" id="taxNext" aria-label="Next">&#8594;</button>
        </div>

    </div>

</section>

<style>
    /* Section */
    .non-profit {
        position: relative;
        padding: 100px 0 0px;
        overflow: hidden;
        background: #fff;
    }

    /* Watermark */
    .non-profit::before {
        content: "Non Profit Setup";
        position: absolute;
        top: 25px;
        left: 50%;
        transform: translateX(-50%);
        font-size: clamp(60px, 10vw, 115px);
        font-weight: 700;
        color: #f0c0c8;
        white-space: nowrap;
        pointer-events: none;
        z-index: 0;
        opacity: 0.2;
        letter-spacing: 2px;
    }

    /* ── Heading ── */
    .non-profit-heading {
        position: relative;
        z-index: 1;
        color: #25356F;
        font-size: clamp(1.6rem, 3vw, 2.1rem);
        font-weight: 700;
        text-align: center;
    }


    /* ── Feature item ── */
    .np-feature {
        padding-bottom: 10px;
        margin-bottom: 24px;
        border-bottom: 1.5px solid #cbd5e0;
    }

    .np-feature:last-child {
        border-bottom: none;
        margin-bottom: 0;
        padding-bottom: 0;
    }

    .np-feature__title {
        font-size: 20px;
        font-family: "Anek Kannada", "Poppins", sans-serif;
        font-weight: 700;
        color: #25356F;
        margin-bottom: 7px;
        line-height: 1.35;
    }

    .np-feature__desc {
        font-size: 18px;
        font-family: "Anek Kannada", "Poppins", sans-serif;
        line-height: 1.75;
        margin: 0;
        color: #666666;
    }

    /* right-side titles align right on desktop */
    .np-col-right .np-feature__title,
    .np-col-right .np-feature__desc {
        text-align: left;
    }

    /* ── Center image ── */
    .np-img-wrap {
        border-radius: 18px;
        overflow: hidden;
        height: 100%;
        min-height: 420px;
    }

    .np-img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    /* --- Non-Profit Setup Mobile Styles --- */

    @media (max-width: 991px) {
        .non-profit {
            padding: 60px 0 40px;
        }

        /* Adjust watermark for smaller screens */
        .non-profit::before {
            top: 20px;
            font-size: clamp(40px, 10vw, 60px);
            opacity: 0.2;
        }

        .non-profit-heading {
            font-size: 1.5rem;
            margin-bottom: 40px;
            padding: 0 15px;
        }

        /* Remove the 'justify-content-between' height on mobile to prevent huge gaps */
        .np-col-left,
        .np-col-right {
            display: block !important;
        }

        .np-feature {
            margin-bottom: 20px;
            text-align: center;
            /* Center align for better mobile flow */
        }

        .np-feature__title,
        .np-col-right .np-feature__title {
            text-align: center;
            font-size: 1.1rem;
        }

        .np-feature__desc,
        .np-col-right .np-feature__desc {
            text-align: center;
            font-size: 0.85rem;
        }

        /* Show image on mobile but smaller and centered if desired */
        /* If you want to keep the image, uncomment the lines below: */
        /*
        .d-none.d-lg-flex {
            display: block !important;
            margin-bottom: 30px;
        }
        .np-img-wrap {
            min-height: 250px;
            max-width: 300px;
            margin: 0 auto;
        }
        */
    }

    @media (max-width: 767px) {
        .non-profit-heading {
            font-size: 1rem;
        }

        .np-feature {
            border-bottom: 1px solid #edf2f7;
            padding-bottom: 20px;
        }

        .np-feature:last-child {
            border-bottom: none;
        }
    }

    @media (max-width: 480px) {
        .non-profit {
            padding: 50px 10px 30px;
        }
    }
</style>

<section class="non-profit">

    <div class="container position-relative" style="z-index:1;">

        <h2 class="non-profit-heading">NGO / Trust / Section 8 Company Registration</h2>

        <div class="row g-4 align-items-stretch py-5">

            <!-- LEFT column -->
            <div class="col-lg-4 np-col-left d-flex flex-column justify-content-between">

                <div class="np-feature">
                    <h5 class="np-feature__title">Legal Recognition for Non-profit Activities</h5>
                    <p class="np-feature__desc">Provides official legal status for organisations working in social, charitable, educational, and community development sectors.</p>
                </div>

                <div class="np-feature">
                    <h5 class="np-feature__title">Structured Non-profit Governance</h5>
                    <p class="np-feature__desc">Establishes a transparent management framework for trustees, members, or directors to manage the organisation responsibly.</p>
                </div>

                <div class="np-feature">
                    <h5 class="np-feature__title">Eligibility for Grants &amp; Funding</h5>
                    <p class="np-feature__desc">Registered nonprofit organisations can apply for government grants, CSR funding, and donations from institutions and individuals.</p>
                </div>

                <div class="np-feature">
                    <h5 class="np-feature__title">Enhanced Public Trust &amp; Credibility</h5>
                    <p class="np-feature__desc">Legal registration builds confidence among donors, volunteers, partners, and beneficiaries.</p>
                </div>

                <div class="np-feature">
                    <h5 class="np-feature__title">Regulatory Compliance &amp; Transparency</h5>
                    <p class="np-feature__desc">Ensures the organisation operates in accordance with applicable laws and regulatory guidelines.</p>
                </div>

            </div><!-- /LEFT -->

            <!-- CENTER image -->
            <div class="col-lg-4 d-lg-flex">
                <div class="np-img-wrap w-100">
                    <img
                        src="assets/img/corporate-establishment/ngo-trust.png"
                        alt="Hands holding a seedling — symbol of non-profit growth" />
                </div>
            </div><!-- /CENTER -->

            <!-- RIGHT column -->
            <div class="col-lg-4 np-col-right d-flex flex-column justify-content-between">

                <div class="np-feature">
                    <h5 class="np-feature__title">Tax Benefits &amp; Exemptions</h5>
                    <p class="np-feature__desc">Registered NGOs and charitable organisations may qualify for tax exemptions and donor benefits under applicable tax provisions.</p>
                </div>

                <div class="np-feature">
                    <h5 class="np-feature__title">Strong Foundation for Social Change</h5>
                    <p class="np-feature__desc">Establishes a reliable and legally compliant framework to drive meaningful impact, expand charitable initiatives, and support community development.</p>
                </div>

                <div class="np-feature">
                    <h5 class="np-feature__title">Long-Term Social Impact</h5>
                    <p class="np-feature__desc">Provides a structured platform to create sustainable programs that support education, healthcare, social welfare, and community empowerment.</p>
                </div>

                <div class="np-feature">
                    <h5 class="np-feature__title">Legal Recognition for Non-profit Activities</h5>
                    <p class="np-feature__desc">Corporate Social Responsibility (CSR) collaborations become easier with a registered nonprofit entity.</p>
                </div>

                <div class="np-feature">
                    <h5 class="np-feature__title">Separate Legal Identity</h5>
                    <p class="np-feature__desc">Enables the organisation to hold property, open bank accounts, and enter into agreements in its own name.</p>
                </div>

            </div><!-- /RIGHT -->

        </div>

    </div>

</section>

<style>
    /* ── Banner ── */
    .si-banner {
        position: relative;
        overflow: hidden;
        height: 450px;
        background-size: cover;
        background-repeat: no-repeat;
        padding: 80px 0;
        background-image: url('assets/img/background/startup-india.png');
    }

    /* Bracket / L-shape decorative marks */
    .si-banner__bracket {
        position: absolute;
        width: 28px;
        height: 28px;
        pointer-events: none;
        opacity: 0.25;
    }

    .si-banner__bracket--tl {
        top: 30px;
        left: 220px;
        border-top: 3px solid #138808;
        border-left: 3px solid #138808;
    }

    .si-banner__bracket--br {
        bottom: 30px;
        left: 260px;
        border-bottom: 3px solid #138808;
        border-right: 3px solid #138808;
    }

    /* ── Content ── */
    .si-banner__inner {
        position: relative;
        z-index: 2;
        text-align: center;
    }

    .si-banner__title {
        font-size: 48px;
        font-family: "Anek Kannada", "Poppins", sans-serif;
        font-weight: 800;
        color: #25356F;
        margin-bottom: 20px;
        line-height: 1.2;
    }

    .si-banner__desc {
        font-size: 18px;
        line-height: 1.85;
        font-family: "Anek Kannada", "Poppins", sans-serif;
        margin: 0 auto;
    }

    /* --- Start-up India Banner Mobile Styles --- */

    @media (max-width: 991px) {
        .si-banner {
            padding: 60px 0;
            background-position: center;
            /* Keeps the main part of the image visible */
        }

        /* Adjust brackets to be relative to the viewport edges */
        .si-banner__bracket--tl {
            left: 5%;
            top: 20px;
        }

        .si-banner__bracket--br {
            left: auto;
            right: 5%;
            bottom: 20px;
        }
    }

    @media (max-width: 767px) {
        .si-banner {
            padding: 45px 15px;
            /* Optional: Add a light tint if the image makes text hard to read on phones */
            background-color: rgba(255, 255, 255, 0.75);
            background-blend-mode: overlay;
        }

        .si-banner__title {
            font-size: 1.6rem;
            /* Slightly smaller for mobile */
            margin-bottom: 15px;
        }

        .si-banner__desc {
            font-size: 0.85rem;
            line-height: 1.6;
        }

        /* Hide brackets on very small screens to keep the layout clean */
        .si-banner__bracket {
            display: none;
        }
    }

    @media (max-width: 480px) {
        .si-banner {
            padding: 40px 10px;
        }

        .si-banner__title {
            font-size: 1.4rem;
        }
    }
</style>

<section class="si-banner mb-5">

    <div class="container">
        <div class="row justify-content-center align-items-center" style="min-height: 30vh;">
            <div class="col-lg-12 col-xl-10 si-banner__inner">

                <h1 class="si-banner__title">Start-up India Registration</h1>

                <p class="si-banner__desc">
                    Kickstart your entrepreneurial journey with hassle-free Start-up India
                    registration. We provide end-to-end support—from documentation to
                    approval—ensuring your business is recognised and ready to grow with
                    government benefits and compliance ease.
                </p>

            </div>
        </div>
    </div>

</section>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    const tax_swiper = new Swiper('.taxSwiper', {
        slidesPerView: 1,
        spaceBetween: 24,
        loop: true,
        grabCursor: true,
        autoplay: {
            delay: 2500, // time in ms (2.5 sec)
            disableOnInteraction: false, // keep autoplay after user swipe
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            576: {
                slidesPerView: 2
            },
            768: {
                slidesPerView: 3
            },
            992: {
                slidesPerView: 4
            },
            1200: {
                slidesPerView: 5
            },
        },
        navigation: {
            nextEl: '#taxNext',
            prevEl: '#taxPrev',
        },
    });

    document.getElementById('taxNext').addEventListener('click', () => swiper.slideNext());
    document.getElementById('taxPrev').addEventListener('click', () => swiper.slidePrev());
</script>
<script>
    function toggleItem(el) {
        const items = document.querySelectorAll('.benefit-item');
        items.forEach(item => {
            if (item !== el) item.classList.remove('active');
        });
        el.classList.toggle('active');
    }
</script>
<script>
    const swiper = new Swiper('.benefitsSwiper', {
        slidesPerView: 1.2,
        spaceBetween: 20,
        centeredSlides: false,
        grabCursor: true,
        loop: false,
        autoplay: {
            delay: 2500, // time in ms (2.5 sec)
            disableOnInteraction: false, // keep autoplay after user swipe
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '#nextBtn',
            prevEl: '#prevBtn',
            disabledClass: 'swiper-button-disabled',
        },
        breakpoints: {
            576: {
                slidesPerView: 1.8,
                spaceBetween: 22
            },
            768: {
                slidesPerView: 2.5,
                spaceBetween: 24
            },
            992: {
                slidesPerView: 3.3,
                spaceBetween: 26
            },
            1200: {
                slidesPerView: 4.1,
                spaceBetween: 28
            },
        },
    });
</script>
<?php
include_once('elements/faqs.php');
include_once('elements/footer.php');
?>