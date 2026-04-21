<?php
include_once('elements/header.php');
?>
 
 
<!-- HERO -->
 <section class="top-banner-background" style="background-image: url('assets/img/background/Career.png');">
   <div>
     <h1 class="mb-0">Careers at Euphoria Goup</h1>
     <p class="text-black text-center mt-2">Build a Carrer That Grows With Purpose And Global Opportunities.</p>
   </div>
 </section>

<style>
    /* ── SECTION ── */
    .about-section {
        padding: 60px 0;
    }

    /* ── VIDEO WRAPPER ── */
    .video-wrap {
        position: relative;
        border-radius: 14px;
        overflow: hidden;
        cursor: pointer;
        line-height: 0;
    }

    .video-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        border-radius: 14px;
        transition: transform 0.4s ease;
    }

    .video-wrap:hover img {
        transform: scale(1.03);
    }

    /* dark overlay */
    .video-wrap::after {
        content: '';
        position: absolute;
        inset: 0;
        background: rgba(15, 20, 50, 0.38);
        border-radius: 14px;
        transition: background 0.3s;
    }

    .video-wrap:hover::after {
        background: rgba(15, 20, 50, 0.28);
    }

    /* play button */
    .play-btn {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 2;
        width: 68px;
        height: 68px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.92);
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 6px 24px rgba(0, 0, 0, 0.22);
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .video-wrap:hover .play-btn {
        transform: translate(-50%, -50%) scale(1.1);
        box-shadow: 0 10px 32px rgba(0, 0, 0, 0.28);
    }

    .play-btn svg {
        margin-left: 4px;
        /* optical centering */
    }

    /* ── TEXT COLUMN ── */
    .about-text {
        display: flex;
        flex-direction: column;
        justify-content: center;
        height: 100%;
        padding-left: 12px;
    }

    .about-text p {
        font-size: 1rem;
        line-height: 1.8;
        color: #4b5563;
        margin-bottom: 20px;
    }

    .about-text p:last-child {
        margin-bottom: 0;
    }

    /* ── MODAL VIDEO ── */
    .modal-content {
        background: #000;
        border: none;
        border-radius: 14px;
    }

    .modal-body {
        padding: 0;
    }

    .modal-body video,
    .modal-body iframe {
        width: 100%;
        border-radius: 14px;
        display: block;
    }

    .btn-close-white {
        position: absolute;
        top: -36px;
        right: 0;
        filter: invert(1);
        opacity: 0.8;
    }

    @media (max-width: 767px) {
        .about-text {
            padding-left: 0;
            padding-top: 28px;
        }
    }
</style>

<section class="about-section">
    <div class="container">
        <div class="row align-items-start g-4">

            <!-- Video Column -->
            <div class="col-12 col-md-6">
                <div class="video-wrap" data-bs-toggle="modal" data-bs-target="#videoModal">
                    <img
                        src="assets/img/career/career.png"
                        alt="Euphoria Group team walking in a modern corridor" />
                    <div class="play-btn">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="var(--navy)">
                            <polygon points="5,3 19,12 5,21" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Text Column -->
            <div class="col-12 col-md-6">
                <div class="about-text">
                    <p>
                        Founded in 2025, Euphoria Group is a fast-growing multi-service global consultancy
                        operating across corporate &amp; overseas business services, wealth &amp; asset advisory, real
                        estate, insurance, and global travel &amp; visa assistance. As we expand across India, Dubai
                        (UAE), and global markets, we are building a team of passionate professionals who want to
                        grow with us.
                    </p>
                    <p>
                        At Euphoria Group, we don't just offer jobs—we offer long-term careers built
                        on trust, learning, and opportunity.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Video Modal -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content position-relative">
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <!-- Replace src with your actual video URL -->
                <video controls autoplay style="max-height:480px; border-radius:14px;">
                    <source src="https://www.youtube.com/watch?v=V1luf7Bfjj0" type="video/mp4" />
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
</div>

<style>
    .carrier-benefits {
        position: relative;
        padding: 100px 0 0px;
        overflow: hidden;
        background: #fff;
    }

    /* Watermark */
    .carrier-benefits::before {
        content: "Let's Discuss";
        position: absolute;
        top: 21px;
        left: 51%;
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
    .carrier-heading {
        position: relative;
        z-index: 1;
        color: #1a2456;
        font-size: clamp(1.6rem, 3vw, 2.2rem);
        font-weight: 600;
        text-align: center;
        margin-bottom: 50px;
    }

    /* ── ACCORDION ITEM ── */
    .job-item {
        background: #fff;
        border: 1px solid #e5e7eb;
        border-radius: 12px;
        margin-bottom: 14px;
        overflow: hidden;
        transition: box-shadow 0.2s;
    }

    .job-item:has(.collapse.show) {
        box-shadow: 0 4px 20px rgba(26, 42, 94, 0.10);
    }

    /* ── HEADER (always visible) ── */
    .job-header {
        padding: 20px 24px;
        cursor: pointer;
        user-select: none;
        display: flex;
        flex-direction: column;
        gap: 14px;
    }

    .job-title-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
    }

    .job-title {
        font-size: 1.1rem;
        font-weight: 700;
        color: #25356f;
        margin: 0;
    }

    /* chevron icon */
    .chevron {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background: #f0f3fa;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        transition: transform 0.3s, background 0.2s;
    }

    .job-item:has(.collapse.show) .chevron {
        transform: rotate(180deg);
        background: #25356f;
    }

    .job-item:has(.collapse.show) .chevron svg {
        stroke: #fff;
    }

    /* meta row */
    .job-meta {
        display: flex;
        flex-wrap: wrap;
        gap: 0;
    }

    .meta-cell {
        display: flex;
        align-items: center;
        gap: 8px;
        padding-right: 24px;
        margin-right: 0;
        font-size: 0.85rem;
        color: #4b5563;
        font-weight: 400;
    }

    .meta-cell+.meta-cell {
        border-left: 1.5px solid #c8d0e0;
        padding-left: 24px;
    }

    .meta-cell strong {
        color: #1e1e2e;
        font-weight: 600;
    }

    /* ── BODY ── */
    .job-body {
        padding: 0 24px 24px;
        border-top: 1px solid #e5e7eb;
    }

    .job-body .intro {
        font-size: 0.92rem;
        line-height: 1.75;
        color: #4b5563;
        margin: 20px 0 22px;
    }

    .job-body h6 {
        font-size: 0.95rem;
        font-weight: 700;
        color: #1e1e2e;
        margin-bottom: 12px;
    }

    .job-body ul {
        list-style: none;
        padding: 0;
        margin: 0 0 22px;
    }

    .job-body ul li {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        font-size: 0.88rem;
        color: #4b5563;
        line-height: 1.65;
        padding: 4px 0;
    }

    .job-body ul li::before {
        content: '';
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: #25356f;
        flex-shrink: 0;
        margin-top: 6px;
    }

    /* Apply button */
    .btn-apply {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: #25356f;
        color: #fff;
        border: none;
        border-radius: 8px;
        padding: 10px 22px;
        font-size: 0.9rem;
        font-weight: 600;
        text-decoration: none;
        transition: background 0.2s, transform 0.2s;
        float: right;
    }

    .btn-apply:hover {
        background: #0f1d4a;
        color: #fff;
        transform: translateY(-1px);
    }

    .btn-apply svg {
        flex-shrink: 0;
    }

    .apply-row {
        display: flex;
        justify-content: flex-end;
        padding-top: 8px;
    }

    @media (max-width: 600px) {
    /* 1. Adjust the watermark for smaller screens */
    .carrier-benefits::before {
        top: 62px;
        letter-spacing: 1px;
    }

    /* 2. Add more breathing room to the header */
    .job-header {
        padding: 16px;
        gap: 10px;
    }

    /* 3. Stack meta-cells vertically */
    .job-meta {
        flex-direction: column;
        align-items: flex-start;
        gap: 6px;
    }

    /* 4. Remove the vertical dividers (border-left) on mobile */
    .meta-cell, 
    .meta-cell + .meta-cell {
        border-left: none;
        padding-left: 0;
        padding-right: 0;
        font-size: 0.8rem; /* Slightly smaller text for mobile */
    }

    /* 5. Adjust the body padding and button layout */
    .job-body {
        padding: 0 16px 20px;
    }

    .apply-row {
        justify-content: stretch; /* Make button full width if desired */
    }

    .btn-apply {
        width: 100%; /* Full width button is easier to tap on mobile */
        justify-content: center;
        float: none;
    }
    }
</style>

<section class="container">

    <div class="carrier-benefits position-relative" style="z-index:1;">

        <h2 class="carrier-heading">Our Vacancies</h2>

        <!-- ── JOB 1 – Telecalling Executive (open by default) ── -->
        <div class="job-item">
            <div class="job-header" onclick="toggleJob('job1')">
                <div class="job-title-row">
                    <h2 class="job-title">Telecalling Executive</h2>
                    <div class="chevron">
                        <svg width="16" height="16" fill="" stroke="var(--navy)" stroke-width="2.5" viewBox="0 0 24 24">
                            <polyline points="6 9 12 15 18 9" />
                        </svg>
                    </div>
                </div>
                <div class="job-meta">
                    <div class="meta-cell"><span>Job Type :</span><strong>At Company Location</strong></div>
                    <div class="meta-cell"><span>Employment Type :</span><strong>Full-Time &amp; Part-Time</strong></div>
                    <div class="meta-cell"><span>No. of Openings :</span><strong>15</strong></div>
                </div>
            </div>
            <div class="collapse show" id="job1">
                <div class="job-body">
                    <p class="intro">We are hiring Telecalling Executives to handle inbound and outbound calls, generate leads, and provide accurate information about our services. This role is ideal for candidates with good communication skills and a positive, customer-focused approach.</p>

                    <h6>Key Responsibilities</h6>
                    <ul>
                        <li>Make outbound calls and handle inbound customer inquiries</li>
                        <li>Explain company products and services clearly to clients</li>
                        <li>Generate and follow up on leads</li>
                        <li>Maintain call records and customer details</li>
                    </ul>

                    <h6>Eligibility &amp; Requirements</h6>
                    <ul>
                        <li>Minimum qualification: 10+12 / Any Graduate</li>
                        <li>Good verbal communication skills (Hindi/English; regional language preferred)</li>
                        <li>Basic knowledge of calling processes</li>
                    </ul>

                    <div class="apply-row">
                        <a href="#" class="btn-apply">
                            Apply Now
                            <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <line x1="7" y1="17" x2="17" y2="7" />
                                <polyline points="7 7 17 7 17 17" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- ── JOB 2 – Graphic Designer ── -->
        <div class="job-item">
            <div class="job-header" onclick="toggleJob('job2')">
                <div class="job-title-row">
                    <h2 class="job-title">Graphic Designer</h2>
                    <div class="chevron">
                        <svg width="16" height="16" fill="" stroke="var(--navy)" stroke-width="2.5" viewBox="0 0 24 24">
                            <polyline points="6 9 12 15 18 9" />
                        </svg>
                    </div>
                </div>
                <div class="job-meta">
                    <div class="meta-cell"><span>Job Type :</span><strong>At Company Location</strong></div>
                    <div class="meta-cell"><span>Employment Type :</span><strong>Full-Time</strong></div>
                    <div class="meta-cell"><span>No. of Openings :</span><strong>1</strong></div>
                </div>
            </div>
            <div class="collapse" id="job2">
                <div class="job-body">
                    <p class="intro">We are looking for a creative Graphic Designer to join our team. The ideal candidate will have a strong eye for visual design and the ability to communicate ideas through compelling visuals across digital and print media.</p>

                    <h6>Key Responsibilities</h6>
                    <ul>
                        <li>Design marketing materials including brochures, banners, and social media graphics</li>
                        <li>Create brand-consistent visual content for digital platforms</li>
                        <li>Collaborate with the marketing team on campaigns</li>
                        <li>Maintain and evolve brand identity guidelines</li>
                    </ul>

                    <h6>Eligibility &amp; Requirements</h6>
                    <ul>
                        <li>Degree/Diploma in Graphic Design or related field</li>
                        <li>Proficiency in Adobe Creative Suite (Photoshop, Illustrator, InDesign)</li>
                        <li>Strong portfolio demonstrating design skills</li>
                    </ul>

                    <div class="apply-row">
                        <a href="#" class="btn-apply">
                            Apply Now
                            <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <line x1="7" y1="17" x2="17" y2="7" />
                                <polyline points="7 7 17 7 17 17" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- ── JOB 3 – Digital Media Executive ── -->
        <div class="job-item">
            <div class="job-header" onclick="toggleJob('job3')">
                <div class="job-title-row">
                    <h2 class="job-title">Digital Media Executive</h2>
                    <div class="chevron">
                        <svg width="16" height="16" fill="" stroke="var(--navy)" stroke-width="2.5" viewBox="0 0 24 24">
                            <polyline points="6 9 12 15 18 9" />
                        </svg>
                    </div>
                </div>
                <div class="job-meta">
                    <div class="meta-cell"><span>Job Type :</span><strong>At Company Location</strong></div>
                    <div class="meta-cell"><span>Employment Type :</span><strong>Full-Time</strong></div>
                    <div class="meta-cell"><span>No. of Openings :</span><strong>1</strong></div>
                </div>
            </div>
            <div class="collapse" id="job3">
                <div class="job-body">
                    <p class="intro">We are seeking a Digital Media Executive to manage and grow our online presence. You will be responsible for creating engaging content, managing social media channels, and driving digital marketing campaigns.</p>

                    <h6>Key Responsibilities</h6>
                    <ul>
                        <li>Plan and execute social media content calendars</li>
                        <li>Manage company profiles across Instagram, LinkedIn, Facebook, and YouTube</li>
                        <li>Analyse performance metrics and optimise campaigns</li>
                        <li>Coordinate with designers for visual content creation</li>
                    </ul>

                    <h6>Eligibility &amp; Requirements</h6>
                    <ul>
                        <li>Bachelor's degree in Marketing, Mass Communication, or related field</li>
                        <li>Experience with Meta Ads, Google Ads, and social media tools</li>
                        <li>Strong written and verbal communication skills</li>
                    </ul>

                    <div class="apply-row">
                        <a href="#" class="btn-apply">
                            Apply Now
                            <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <line x1="7" y1="17" x2="17" y2="7" />
                                <polyline points="7 7 17 7 17 17" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>

<style>
    .why-euphoria {
        position: relative;
        padding: 100px 0 0px;
        overflow: hidden;
        background: #fff;
    }

    /* Watermark */
    .why-euphoria::before {
        content: "Why Euphoria";
        position: absolute;
        top: 20px;
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
    .why-euphoria-heading {
        position: relative;
        z-index: 1;
        color: #1a2456;
        font-size: clamp(1.6rem, 3vw, 2.2rem);
        font-weight: 700;
        text-align: center;
        margin-bottom: 50px;
    }

    /* ── OUTER CARD ── */
    .culture-card {
        position: relative;
        padding: 48px 56px;
        border-radius: 50px;
        background: #fff;
        background-image:
            linear-gradient(#fff, #fff),
            linear-gradient(to bottom,
                rgba(180, 30, 60, 1) 0%,
                rgba(180, 30, 60, 0.5) 10%,
                rgba(180, 30, 60, 0) 80%);

        background-origin: border-box;
        background-clip: padding-box, border-box;
        border: 1px solid transparent;
    }

    /* ── INTRO ── */
    .intro-text {
        text-align: center;
        font-size: 0.9rem;
        line-height: 1.9;
        color: #4b5563;
        max-width: 888px;
        margin: 0 auto 36px;
    }

    /* ── DIVIDER ── */
    .section-divider {
        border: none;
        border-top: 1.5px solid #e5e7eb;
        margin: 0 0 32px;
    }

    /* ── FEATURE ITEM ── */
    .feature-item {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 11px 60px;
    }

    /* Diamond-arrow icon */
    .feat-icon {
        flex-shrink: 0;
        width: 36px;
        height: 36px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .feat-label {
        font-size: 0.92rem;
        font-weight: 600;
        color: #25356f;
        line-height: 1.45;
    }

   @media (max-width: 767px) {
    /* 1. Reduce outer card padding for more text space */
    .culture-card {
        padding: 30px 15px;
        border-radius: 30px; /* Slightly smaller radius looks better on mobile */
    }

    /* 2. Adjust watermark size for smaller screens */
    .why-euphoria::before {
        font-size: 50px;
        top: 40px;
    }

    /* 3. Fix the feature items */
    .feature-item {
        padding: 12px 10px; /* Crucial: Remove the large 60px side padding */
        gap: 15px;
        border-bottom: 1px solid #f3f4f6; /* Optional: adds separation on mobile */
    }

    /* Remove border from the very last item */
    .col-12:last-child .feature-item:last-child {
        border-bottom: none;
    }

    /* 4. Ensure icons don't shrink */
    .feat-icon {
        width: 32px;
        height: 32px;
    }

    /* 5. Adjust text sizes */
    .why-euphoria-heading {
        margin-bottom: 30px;
        top: -30px;
    }

    .intro-text {
        line-height: 1.6;
        margin-bottom: 25px;
        text-align: left; /* Often easier to read long text on mobile */
    }
    }
</style>

<section class=" container">

    <div class="why-euphoria position-relative" style="z-index:1;">

        <h2 class="why-euphoria-heading">Why Work With Us</h2>


        <div class="culture-card">

            <!-- Intro paragraph -->
            <p class="intro-text">
                At Euphoria Group, our people are our greatest strength. We foster a culture where talent is nurtured, performance is
                recognised, and ideas are valued. Working with us means gaining exposure to global clients, international
                markets, and diverse industries, while building a meaningful and stable career.
            </p>

            <hr class="section-divider" />

            <!-- 2-column feature grid -->
            <div class="row g-0">

                <!-- Left -->
                <div class="col-12 col-sm-6">

                    <div class="feature-item">
                        <div class="feat-icon"><!-- diamond-arrow SVG -->
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="5.5" y="5.5" width="25" height="25" rx="5" transform="rotate(45 18 18)" fill="#25356f" fill-opacity="0.12" />
                                <polygon points="13,18 23,18 23,18" fill="none" />
                                <path d="M14 18h9m0 0-4-4m4 4-4 4" stroke="#25356f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <span class="feat-label">Inbound &amp; Outbound</span>
                    </div>

                    <div class="feature-item">
                        <div class="feat-icon">
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
                                <rect x="5.5" y="5.5" width="25" height="25" rx="5" transform="rotate(45 18 18)" fill="#25356f" fill-opacity="0.12" />
                                <path d="M14 18h9m0 0-4-4m4 4-4 4" stroke="#25356f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <span class="feat-label">Transparent, ethical, and professional culture</span>
                    </div>

                    <div class="feature-item">
                        <div class="feat-icon">
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
                                <rect x="5.5" y="5.5" width="25" height="25" rx="5" transform="rotate(45 18 18)" fill="#25356f" fill-opacity="0.12" />
                                <path d="M14 18h9m0 0-4-4m4 4-4 4" stroke="#25356f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <span class="feat-label">Inclusive workplace that values diverse perspectives</span>
                    </div>

                </div>

                <!-- Right -->
                <div class="col-12 col-sm-6">

                    <div class="feature-item">
                        <div class="feat-icon">
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
                                <rect x="5.5" y="5.5" width="25" height="25" rx="5" transform="rotate(45 18 18)" fill="#25356f" fill-opacity="0.12" />
                                <path d="M14 18h9m0 0-4-4m4 4-4 4" stroke="#25356f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <span class="feat-label">Multi-industry learning and career growth</span>
                    </div>

                    <div class="feature-item">
                        <div class="feat-icon">
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
                                <rect x="5.5" y="5.5" width="25" height="25" rx="5" transform="rotate(45 18 18)" fill="#25356f" fill-opacity="0.12" />
                                <path d="M14 18h9m0 0-4-4m4 4-4 4" stroke="#25356f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <span class="feat-label">Performance-driven rewards and recognition</span>
                    </div>

                    <div class="feature-item">
                        <div class="feat-icon">
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
                                <rect x="5.5" y="5.5" width="25" height="25" rx="5" transform="rotate(45 18 18)" fill="#25356f" fill-opacity="0.12" />
                                <path d="M14 18h9m0 0-4-4m4 4-4 4" stroke="#25356f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <span class="feat-label">Recognition and rewards based purely on performance</span>
                    </div>

                </div>

            </div><!-- /row -->
        </div><!-- /culture-card -->

    </div>

</section>

<style>
    /* ── HERO SECTION ── */
    .growth-section {
        position: relative;
        min-height: 620px;
        overflow: hidden;
        display: flex;
        align-items: center;
    }

    /* Split background: left navy, right office photo */
    .bg-left {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
    }

    /* Left navy panel */
    .bg-left::before {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(to right,
                #2a3e81 0%,
                #253b7c 10%,
                rgba(54, 66, 109, 0.52) 68%,
                rgba(55, 68, 110, 0.35) 82%,
                rgba(132, 137, 153, 0.1) 100%);
        z-index: 1;
    }

    /* Office photo fills right side */
    .bg-photo {
        position: absolute;
        inset: 0;
        background: url('https://images.unsplash.com/photo-1497366216548-37526070297c?w=1400&q=80') center/cover no-repeat;
        z-index: 0;
    }

    /* ── WATERMARK TEXT ── */
    .watermark-growth {
        position: absolute;
        top: 18px;
        left: 108px;
        width: 100%;
        font-weight: 900;
        font-size: clamp(60px, 10vw, 110px);
        color: rgba(255, 255, 255, 0.06);
        white-space: nowrap;
        letter-spacing: -2px;
        user-select: none;
        pointer-events: none;
        z-index: 2;
        line-height: 1;
    }

    /* ── CONTENT ── */
    .growth-content {
        position: relative;
        z-index: 3;
        padding: 60px 0 60px;
        width: 100%;
    }

    .section-heading {
        font-size: clamp(1.4rem, 3vw, 1.9rem);
        font-weight: 700;
        color: #fff;
        margin-bottom: 36px;
        letter-spacing: 0.3px;
    }

    /* ── FEATURE CARD ── */
    .feature-card {
        background: rgba(255, 255, 255, 0.97);
        border-radius: 10px;
        padding: 15px 15px 15px 15px;
        display: flex;
        position: relative;
        align-items: flex-start;
        gap: 20px;
        margin-bottom: 18px;
        max-width: 807px;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.10);
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .feature-card:hover {
        transform: translateX(5px);
        box-shadow: 0 6px 24px rgba(0, 0, 0, 0.15);
    }

    .feature-card:last-child {
        margin-bottom: 0;
    }

    /* icon box */
    .fc-icon {
        width: 56px;
        height: 56px;
        flex-shrink: 0;
        background: #eef0f8;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #d0d8f0;
    }

    .fc-icon svg {
        width: 30px;
        height: 30px;
    }

    /* left accent border */
    .fc-body {
        border-left: 2.5px solid #25356f;
        padding-left: 18px;
        flex: 1;
    }

    .fc-body h6 {
        font-size: 0.97rem;
        font-weight: 700;
        color: #1e1e2e;
        margin-bottom: 6px;
    }

    .fc-body p {
        font-size: 0.8rem;
        line-height: 1.65;
        color: #4b5563;
        margin: 0;
    }

    @media (max-width: 767px) {
    /* 1. Reset section height and layout */
    .growth-section {
        min-height: auto;
        display: block; /* Stack vertically */
    }

    /* 2. Adjust Background for Mobile */
    .bg-left::before {
        /* Change from horizontal gradient to vertical/solid for mobile readability */
        background: linear-gradient(to bottom, 
            #2a3e81 0%, 
            rgba(37, 59, 124, 0.9) 100%);
    }

    /* 3. Adjust Watermark for Mobile */
    .watermark-growth {
     
        font-size: 62px;
        top: 14px;
        left: 20px;
        width: auto;
    }

    /* 4. Content Spacing */
    .growth-content {
        padding: 40px 0;
    }

    .section-heading {
        text-align: center;
        font-size: 16px;
        margin-bottom: 30px;
        padding: 0 10px;
    }

    /* 5. Feature Cards - Reset width and offsets */
    .feature-card {
        max-width: 100%;
        margin-right: 0 !important; /* Remove the growth-card-2/4 offsets */
        right: auto !important;
        flex-direction: row; /* Keep icon side-by-side */
        gap: 15px;
        padding: 15px;
        background: rgba(255, 255, 255, 1); /* Solid white for better contrast */
    }

    /* 6. Adjust Icon and Text sizes for small screens */
    .fc-icon {
        width: 45px;
        height: 45px;
    }

    .fc-icon svg {
        width: 24px;
        height: 24px;
    }

    .fc-body {
        padding-left: 12px;
    }

    .fc-body h6 {
        font-size: 0.9rem;
    }

    .fc-body p {
        font-size: 0.75rem;
        line-height: 1.5;
    }
    }

/* Extra small screens fix */
    @media (max-width: 480px) {
        .feature-card {
            /* On very small phones, icon on top looks cleaner */
            flex-direction: column;
            align-items: flex-start;
        }
        
        .fc-body {
            border-left: none;
            border-top: 2px solid #25356f;
            padding-left: 0;
            padding-top: 10px;
        }
    }

    .growth-card-2 {
        right: 100px;
    }

    .growth-card-4 {
        right: 100px;
    }
</style>

<section class="growth-section">
    <!-- Background layers -->
    <div class="bg-photo"></div>
    <div class="bg-left"></div>

    <!-- Watermark -->
    <div class="watermark-growth">Grow With Us</div>

    <!-- Content -->
    <div class="growth-content">
        <div class="container" style="max-width:1300px;">

            <h2 class="section-heading">Your Growth Is Our Shared Success</h2>

            <!-- Card 1 -->
            <div class="feature-card growth-card-1" data-aos="fade-up" data-aos-duration="200">
                <div class="fc-icon">
                    <!-- Graduation cap -->
                    <svg viewBox="0 0 24 24" fill="none" stroke="#25356f" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 10L12 5 2 10l10 5 10-5z" />
                        <path d="M6 12v5c0 2 2.7 3 6 3s6-1 6-3v-5" />
                        <line x1="22" y1="10" x2="22" y2="15" />
                    </svg>
                </div>
                <div class="fc-body">
                    <h6>Continuous Learning &amp; Skill Development</h6>
                    <p>We provide ongoing training, practical exposure, and upskilling opportunities to help our team stay ahead in a competitive and evolving global market.</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="feature-card growth-card-2" data-aos="fade-left" data-aos-duration="400">
                <div class="fc-icon">
                    <!-- Handshake / mentorship -->
                    <svg viewBox="0 0 24 24" fill="none" stroke="#25356f" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 11l3 3L22 4" />
                        <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11" />
                        <path d="M3 9c2-1 4-1 6 1s4 2 6 1" />
                    </svg>
                </div>
                <div class="fc-body">
                    <h6>Mentorship &amp; Leadership Support</h6>
                    <p>Our employees benefit from experienced guidance, constructive feedback, and leadership mentoring that supports both professional excellence and personal growth.</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="feature-card growth-card-3" data-aos="fade-right" data-aos-duration="600">
                <div class="fc-icon">
                    <!-- Career / person climbing -->
                    <svg viewBox="0 0 24 24" fill="none" stroke="#25356f" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="5" r="2" />
                        <path d="M12 7v5l-3 3" />
                        <path d="M12 12l3 3" />
                        <polyline points="5 20 9 16 12 18 15 14 19 17" />
                    </svg>
                </div>
                <div class="fc-body">
                    <h6>Clear Career Progression Paths</h6>
                    <p>We offer transparent growth opportunities, performance-based advancement, and long-term career planning aligned with individual goals and company expansion.</p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="feature-card growth-card-4" data-aos="fade-down" data-aos-duration="800">
                <div class="fc-icon">
                    <!-- Globe -->
                    <svg viewBox="0 0 24 24" fill="none" stroke="#25356f" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10" />
                        <line x1="2" y1="12" x2="22" y2="12" />
                        <path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z" />
                    </svg>
                </div>
                <div class="fc-body">
                    <h6>Global Exposure &amp; Collaborative Culture</h6>
                    <p>As we expand internationally, our team gains exposure to diverse markets, cross-functional collaboration, and a professional culture that values teamwork and innovation.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    .card-contact-information {
        border: 1px solid lightgrey;
        border-radius: 16px;
        box-shadow: 0 4px 24px rgba(0, 0, 0, 0.08);
        overflow: hidden;
    }

    .left-panel {
        position: relative;
        padding: 2.5rem 2rem;
    }

    .left-panel::after {
        content: "";
        position: absolute;
        top: 20px;
        /* space from top */
        bottom: 20px;
        /* space from bottom */
        right: 0;
        width: 1px;
        background: #d7dce2;
    }

    .left-panel h2 {
        color: #1a2b5e;
        font-weight: 700;
        font-size: 2.19rem;
        margin-bottom: 0.75rem;
    }

    .left-panel p {
        color: #6b7280;
        font-size: 0.8rem;
        line-height: 1.6;
    }

    .contact-item {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 0.95rem;
        font-weight: 600;
        margin-top: 1.2rem;
    }

    .contact-item i {
        font-size: 1.2rem;
        color: #1a2b5e;
    }

    .right-panel {
        padding: 2.5rem 2rem;
        background: #ffffff;
    }

    .form-control,
    .form-control:focus {
        border: 1.5px solid #d1d5db;
        border-radius: 8px;
        background-color: #ffffff;
        font-size: 0.9rem;
        color: #374151;
        box-shadow: none;
    }

    .form-control:focus {
        border-color: #1a2b5e;
    }

    .form-control::placeholder {
        color: #9ca3af;
    }

    .required-star {
        color: #e53935;
    }

    .upload-area {
        display: flex;
        align-items: center;
        gap: 0;
        border: 1.5px solid #d1d5db;
        border-radius: 6px;
        overflow: hidden;
        background: #fff;
    }

    .btn-upload {
        background-color: #1a2b5e;
        color: #fff;
        border: none;
        border-radius: 0;
        padding: 0.65rem 1.2rem;
        font-size: 0.88rem;
        font-weight: 500;
        white-space: nowrap;
        cursor: pointer;
    }

    .btn-upload:hover {
        background-color: #142049;
        color: #fff;
    }

    .upload-label {
        flex: 1;
        padding: 0 1rem;
        font-size: 0.95rem;
    }

    .upload-hint {
        padding: 0 0.8rem;
        font-size: 0.5rem;
        color: #9ca3af;
        white-space: nowrap;
    }

    .btn-submit {
        background-color: #1a2b5e;
        color: #fff;
        border: none;
        border-radius: 6px;
        padding: 0.65rem 2.2rem;
        font-size: 0.95rem;
        font-weight: 600;
        letter-spacing: 0.02em;
        transition: background 0.2s;
    }

    .btn-submit:hover {
        background-color: #142049;
        color: #fff;
    }

    textarea.form-control {
        resize: none;
        min-height: 100px;
    }

    #file-input {
        display: none;
    }

    @media (max-width: 767px) {
    /* 1. Remove the vertical divider on mobile */
    .left-panel::after {
        display: none;
    }

    /* 2. Adjust panel padding for smaller screens */
    .left-panel, .right-panel {
        padding: 2rem 1.5rem;
    }

    /* 3. Adjust Heading size for mobile */
    .left-panel h2 {
        font-size: 1.75rem;
        text-align: center;
    }

    .left-panel p {
        text-align: center;
        margin-bottom: 1.5rem;
    }

    /* 4. Center contact items on mobile for better balance */
    .contact-item {
        justify-content: center;
        margin-top: 1rem;
    }

    /* 5. Fix the Upload Area overflow */
    .upload-area {
        flex-direction: column; /* Stack button and label */
        align-items: flex-start;
        padding-bottom: 10px;
    }

    .btn-upload {
        width: 100%; /* Full width button */
        border-radius: 0;
        text-align: center;
        margin-bottom: 10px;
    }

    .upload-label {
        padding: 0 1rem;
        margin-bottom: 5px;
    }

    .upload-hint {
        display: block;
        padding: 0 1rem;
        font-size: 0.7rem; /* Make it slightly more readable than 0.5rem */
    }

    /* 6. Make Submit button full width on mobile */
    .btn-submit {
        width: 100%;
    }
    }
</style>

<section class="container py-5">
    <div>
        <div class="card-contact-information">
            <div class="row g-0">

                <!-- Left Panel -->
                <div class="col-md-4 left-panel">
                    <h2>HR Contact Information</h2>
                    <p>Get in touch with our HR Recruitment Team and take the next step toward the right career opportunity.</p>

                    <div class="contact-item">
                        <i class="bi bi-whatsapp"></i>
                        <span>+91 721 119 0818</span>
                    </div>

                    <div class="contact-item">
                        <i class="bi bi-envelope"></i>
                        <span>hr@theeuphoriagroupl.com</span>
                    </div>
                </div>

                <!-- Right Panel -->
                <div class="col-md-8 right-panel">
                    <div class="row g-3">

                        <!-- First Name & Last Name -->
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="First Name *" />
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Last Name *" />
                        </div>

                        <!-- Email & Contact Number -->
                        <div class="col-md-6">
                            <input type="email" class="form-control" placeholder="Your Email *" />
                        </div>
                        <div class="col-md-6">
                            <input type="tel" class="form-control" placeholder="Contact Number *" />
                        </div>

                        <!-- Area of Expertise -->
                        <div class="col-12">
                            <input type="text" class="form-control" placeholder="Area of Expertise *" />
                        </div>

                        <!-- Message -->
                        <div class="col-12">
                            <textarea class="form-control" placeholder="Your Message *"></textarea>
                        </div>

                        <!-- Upload Resume -->
                        <div class="col-12">
                            <div class="upload-area">
                                <label for="file-input" class="btn-upload mb-0">Upload Resume / CV</label>
                                <input type="file" id="file-input" accept=".pdf,.doc,.docx"
                                    onchange="document.getElementById('file-name').textContent = this.files[0]?.name || 'No File Chosen'" />
                                <span class="upload-label" id="file-name">No File Chosen</span>
                                <span class="upload-hint">(Supported Formats: PDF, DOC, DOCX)</span>
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
</section>


<script>
    function toggleJob(id) {
        const el = document.getElementById(id);
        const bsCollapse = bootstrap.Collapse.getOrCreateInstance(el, {
            toggle: false
        });
        bsCollapse.toggle();
    }
</script>
<?php
include_once('elements/faqs.php');
include_once('elements/footer.php');
?>