<?php
include_once('elements/header.php');
?>

<!-- HERO -->
<section class="top-banner-background" style="background-image: url('assets/img/background/Become-a-partner.png');">
    <div>
        <h1 class="mb-0 text-center">Become A Partner</h1>
        <p class="text-black text-center mt-2">Join Hands With us to unlock new business opportunities and mutual growth.</p>
    </div>
</section>

<style>
    /* ── HERO ── */
    .become-partner {
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

    .become-partner h1 {
        font-size: clamp(2rem, 5vw, 3.2rem);
        letter-spacing: 1px;
    }

    .hero-breadcrumb {
        color: #e8d5a3;
        font-size: 0.9rem;
        letter-spacing: 2px;
    }

    /* ── Partnership Section ── */
    .partnership-section {
        background: #ffffff;
        padding: 80px 0;
        overflow: hidden;
        position: relative;
    }

    /* Text side */
    .content-col {
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding-left: 3rem;
    }

    .content-col p {
        color: #666666;
        font-size: 17px;
        font-family:  "Poppins";
        line-height: 1.85;
        font-weight: 300;
        margin-bottom: 1.4rem;
    }

    .content-col p strong {
        font-weight: 500;
        color: #666666;
    }

    .illustration-wrap {
        position: relative;
        z-index: 2;
        display: flex;
        align-items: stretch;
        justify-content: center;
        min-height: 380px;
        padding: 0;
        overflow: hidden;
    }

    .illustration-wrap img {
        width: 100%;
        height: 400px;
        object-fit: cover;
        display: block;
    }

    /* ── Responsive tweaks ── */
    @media (max-width: 576px) {

        .partnership-section {
            padding: 50px 0;
        }

        /* Stack properly */
        .partnership-section .row {
            flex-direction: column;
        }

        /* Image fix */
        .illustration-wrap {
            min-height: auto;
        }

        .illustration-wrap img {
            height: auto;
            max-height: 260px;
            object-fit: contain;
            /* IMPORTANT */
        }

        /* Text section */
        .content-col {
            padding: 25px 15px 0;
            text-align: center;
        }

        .content-col p {
            font-size: 0.9rem;
            line-height: 1.7;
            margin-bottom: 1rem;
        }
    }
</style>

<section class="partnership-section">

    <div class="container position-relative" style="z-index:2">
        <div class="row align-items-center g-0">

            <!-- LEFT — Illustration -->
            <div class="col-lg-6">
                <div class="illustration-wrap">
                    <img
                        src="assets/img/become-partner/become-partner.png"
                        alt="Two business professionals shaking hands"
                        class="img-fluid" />
                </div>
            </div>

            <!-- RIGHT — Text content -->
            <div class="col-lg-6">
                <div class="content-col">
                    <p>
                        At <strong class="brand-name">Euphoria Group</strong>, we believe in forming strong,
                        long-term partnerships that foster mutual growth and success.
                    </p>
                    <p>
                        We collaborate with companies, consultants, investors, and service providers
                        who share our commitment to excellence and innovation. By partnering with us,
                        you gain access to new markets, premium clients, and structured support as you
                        grow your business.
                    </p>
                    <p class="mb-0">
                        We work closely with forward-thinking businesses, consultants, and investors to create
                        meaningful partnerships. Our approach is built on trust, innovation, and shared
                        success—helping you unlock new opportunities, reach premium clients, and scale
                        with confidence.
                    </p>
                </div>
            </div>

        </div><!-- /row -->
    </div><!-- /container -->

</section>

<style>
    /* Section */
    .revenue-strategy {
        position: relative;
        padding: 100px 0 0px;
        overflow: hidden;
        background: #f9fafb;
    }

    /* Watermark */
    .revenue-strategy::before {
        content: "Revenue Strategy";
        position: absolute;
        top: 27px;
        left: 50%;
        transform: translateX(-50%);
        font-size: clamp(60px, 10vw, 107px);
        font-weight: 700;
        color: #f0c0c8;
        white-space: nowrap;
        pointer-events: none;
        z-index: 0;
        opacity: 0.2;
        letter-spacing: 2px;
    }

    /* ── Heading ── */
    .revenue-heading {
        position: relative;
        z-index: 1;
        color: #1a2456;
        font-size: clamp(1.6rem, 3vw, 2.2rem);
        font-weight: 700;
        text-align: center;
        margin-bottom: 50px;
    }

    .feature-card {
        border: 1.5px solid #dde3ef;
        border-radius: 16px;
        overflow: hidden;
        background: #fff;
        transition: box-shadow 0.3s ease, transform 0.3s ease;
    }

    .feature-card:hover {
        box-shadow: 0 12px 32px rgba(30, 80, 200, 0.12);
        transform: translateY(-4px);
    }

    .feature-card .card-img-top {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .card-body {
        padding: 24px 22px 28px;
        text-align: center;
    }

 

    .partner-card-text {
        font-size: 12px;
        color: #666666;
        line-height: 1.7;
        font-family: "Poppins", sans-serif;
        text-align: center;
    }

    /* Mobile (≤576px) */
    @media (max-width: 576px) {

        .revenue-strategy {
            padding: 60px 0 20px;
        }

        /* Watermark fix */
        .revenue-strategy::before {
            font-size: 40px;
            top: 34px;
            opacity: 0.2;
        }

        /* Heading */
        .revenue-heading {
            font-size: 1rem;
            margin-bottom: 30px;
            padding: 0 10px;
        }

        /* Card spacing */
        .row.g-4 {
            gap: 16px;
        }

        /* Card */
        .feature-card {
            border-radius: 12px;
        }

        /* Image fix */
        .feature-card .card-img-top {
            height: 160px;
            /* smaller */
            object-fit: cover;
        }

        /* Body */
        .card-body {
            padding: 18px 16px 20px;
        }

        .card-title {
            font-size: 0.95rem;
            margin-bottom: 8px;
        }

        .card-text {
            font-size: 0.85rem;
            /* FIX (was too small) */
            line-height: 1.6;
        }
    }
</style>

<section class="revenue-strategy">

    <div class="container position-relative" style="z-index:1;">

        <h2 class="revenue-heading">Why Partner With Us?</h2>

        <div class="container py-5">
            <div class="row g-4">

                <!-- Card 1: Transparent Business Model -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="feature-card h-100">
                        <img src="assets/img/become-partner/business-model.png"
                            class="card-img-top" alt="Transparent Business Model">
                        <div class="card-body">
                            <h5 class="card-title">Transparent business model</h5>
                            <p class="partner-card-text">
                                We are completely clear about our processes, pricing structure, and strategic approach.
                                Each partnership is built on open communication, clear expectations, and ethical business
                                practices to ensure long-term trust and accountability.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 2: High-growth Prospects -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="feature-card h-100">
                        <img src="assets/img/become-partner/hight-risk.png"
                            class="card-img-top" alt="High-growth Prospects">
                        <div class="card-body">
                            <h5 class="card-title">High-growth prospects</h5>
                            <p class="partner-card-text">
                                Our strategies aim to create scalable opportunities across markets. By identifying
                                emerging trends and structured expansion pathways, we help partners capitalize on
                                long term growth opportunities.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Dedicated Partner Support -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="feature-card h-100">
                        <img src="assets/img/become-partner/support.png"
                            class="card-img-top" alt="Dedicated Partner Support">
                        <div class="card-body">
                            <h5 class="card-title">Dedicated Partner Support</h5>
                            <p class="partner-card-text">
                                Each partner is given personalised attention and ongoing advisory support. From
                                operational guidance to strategic decision-making, our team plays an active role in
                                ensuring smooth execution and consistent performance.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 4: Advantages -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="feature-card h-100">
                        <img src="assets/img/become-partner/advantage.png"
                            class="card-img-top" alt="Advantages">
                        <div class="card-body">
                            <h5 class="card-title">Advantages</h5>
                            <p class="partner-card-text">
                                Our revenue model is intended to create mutual value. We prioritise win-win scenarios,
                                ensuring profitability, fairness, and long-term financial stability for all stakeholders
                                in the partnership ecosystem.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

</section>

<style>
    /* Section */
    .our-partner {
        position: relative;
        padding: 100px 0 0px;
        overflow: hidden;
        background: #fff;
    }

    /* Watermark */
    .our-partner::before {
        content: "Our Partners";
        position: absolute;
        top: 21px;
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
    .partner-heading {
        position: relative;
        z-index: 1;
        color: #1a2456;
        font-size: clamp(1.6rem, 3vw, 2.2rem);
        font-weight: 700;
        text-align: center;
        margin-bottom: 50px;
    }

    /* ── Partner Cards Wrapper ── */
    .partners-wrapper {
        display: flex;
        align-items: stretch;
        /* IMPORTANT */
        gap: 10px;
        min-height: 380px;
    }

    .tab-divider{
        color: #CC2831;
    }

    /* ── Side Tab Cards ── */
    .partner-tab {
        flex: 0 0 62px;
        display: flex;
        align-items: stretch;
        justify-content: center;
        border: 1.5px solid #e2e5f0;
        border-radius: 18px;
        cursor: pointer;
        color: #25356F;
        background: #f9fafb;
        transition: flex 0.15s cubic-bezier(.77, 0, .175, 1),
            background 0.3s,
            border-color 0.3s,
            box-shadow 0.3s;
        overflow: hidden;
        position: relative;
        min-width: 62px;
        height: 500px;
    }

    /* ACTIVE TAB */
    .partner-tab.active {
        flex: 3 1 0;
        background: #f4f5fb;
        border-color: #1a2456;
        box-shadow: 0 8px 36px rgba(26, 36, 86, 0.10);
        z-index: 2;
    }

    /* Label (collapsed) */
    .tab-label {
        writing-mode: vertical-rl;
        transform: translate(-50%, -50%) rotate(180deg);
        /* FIX */
        font-size: 1rem;
        font-weight: 600;

        position: absolute;
        top: 50%;
        /* center vertically */
        left: 50%;
        /* center horizontally inside tab */

        opacity: 1;
        transition: opacity 0.25s;
        pointer-events: none;
    }

    .partner-tab.active .tab-label {
        opacity: 0;
    }

    /* CONTENT */
    .tab-content-inner {
        opacity: 0;
        pointer-events: none;
        width: 100%;
        transition: opacity 0.35s ease;
        padding: 1.6rem 1.4rem;
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .partner-tab.active .tab-content-inner {
        opacity: 1;
        pointer-events: auto;
    }

    /* INNER GRID */
    .tab-inner-grid {
        display: flex;
        gap: 1.4rem;
        flex: 1;
        height: 100%;
    }

    /* IMAGE */
    .tab-img-col {
        flex: 0 0 200px;
    }

    .tab-img-col img {
        width: 100%;
        height: 50vh;
        object-fit: cover;
        border-radius: 14px;
    }

    /* TEXT */
    .tab-text-col {
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .tab-text-col h4 {
        color: #25356F;
        font-size: 30px;
        font-family: "Anek Kannada", "Poppins";
        font-weight: 600; 
        margin-bottom: 0px;
    }

    .tab-text-col p{
         font-family: "Poppins";
         font-size: 16px;
         font-weight: 400;
    }

    /* BADGES */
    .tab-badges {
        display: flex;
        flex-wrap: wrap;
        gap: 0.6rem;
        margin: 0.7rem 0 0.9rem;
    }

    .tab-badge {
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 18px;
         font-family: "Anek Kannada", "Poppins";
        font-weight: 500;
        color: #1a2456;
    }

    .tab-cta-text p{
         font-family: "Anek Kannada", "Poppins";
         font-size: 20px;
         font-weight: 600;
         color: #25356F;
    }

    /* CTA */
    .btn-meeting {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: #25356F;
        color: #fff !important;
        border-radius: 8px;
        font-size: 20px;
        font-family: "Anek Kannada", "Poppins";
        font-weight: 600;
        padding: 10px 14px;
        text-decoration: none;
        width: 27%;
        /* PUSH TO BOTTOM */
    }

    /* Mobile (≤576px) */
    @media (max-width: 576px) {

        .our-partner {
            padding: 60px 0 20px;
        }

        /* Watermark */
        .our-partner::before {
            font-size: 55px;
            top: 27px;
            opacity: 0.2;
        }

        .partner-heading {
            font-size: 1.4rem;
            margin-bottom: 30px;
        }

        /* Force ALL tabs open */
        .partner-tab {
            flex: 1 1 100% !important;
        }

        .partner-tab .tab-content-inner {
            opacity: 1 !important;
            pointer-events: auto !important;
            display: block !important;
        }

        /* Remove active dependency */
        .partner-tab.active {
            flex: 1 1 100% !important;
        }

        /* Wrapper becomes vertical */
        .partners-wrapper {
            flex-direction: column;
            gap: 16px;
            min-height: auto;
        }

        /* Tabs become full cards */
        .partner-tab {
            flex: 1 1 100%;
            height: auto;
            border-radius: 14px;
            padding: 15px;
        }

        /* REMOVE vertical label */
        .tab-label {
            display: none;
        }

        /* Always show content */
        .tab-content-inner {
            opacity: 1 !important;
            pointer-events: auto;
            padding: 0;
        }

        /* Inner layout becomes vertical */
        .tab-inner-grid {
            flex-direction: column;
            gap: 15px;
        }

        /* Image fix */
        .tab-img-col {
            flex: 100%;
        }

        .tab-img-col img {
            height: 200px;
            width: 100%;
            object-fit: cover;
            border-radius: 10px;
        }

        /* Text */
        .tab-text-col h4 {
            font-size: 1rem;
        }

        .tab-text-col p {
            font-size: 0.85rem;
            line-height: 1.6;
        }

        /* Button full width */
        .btn-meeting {
            width: 100%;
            justify-content: center;
            margin-top: 10px;
        }
    }
</style>

<section class="our-partner">

    <div class="container position-relative" style="z-index:1;">

        <h2 class="partner-heading">Who Can Partner With Us?</h2>

        <!-- Partners Accordion Tabs -->
        <div class="partners-wrapper py-5" id="partnersWrapper">

            <!-- Tab 1: Corporate Consultants -->
            <div class="partner-tab" data-tab="corporate">
                <span class="tab-label">Corporate Consultants</span>
                <div class="tab-content-inner">
                    <div class="tab-inner-grid">

                        <div class="col-md-3">
                            <div class="tab-img-col">
                                <img src="assets/img/become-partner/real-estate.png" alt="Corporate Consultants" />
                            </div>
                        </div>

                        <div class="tab-text-col">
                            <h4>Corporate Consultants</h4>
                            <hr class="tab-divider" />
                            <p>The Euphoria Group collaborates with corporate consultants who advise businesses on international expansion and cross-border structuring. Our expertise in overseas business setup enables consultants to deliver structured, compliant solutions for their clients.</p>
                            <p>We support consultants in navigating complex regulatory landscapes across key markets like Dubai and Mauritius, ensuring clients receive end-to-end advisory services combining local compliance with global strategy.</p>
                            <div class="tab-badges">
                                <span class="tab-badge">
                                    <span class="chk">
                                        <img src="assets/img/icon/Checke.png" alt="check Icon">
                                    </span>
                                    Business structuring support
                                </span>
                                <span class="tab-badge">
                                    <span class="chk">
                                        <img src="assets/img/icon/Checke.png" alt="check Icon">
                                    </span>
                                    Compliance advisory
                                </span>
                            </div>
                            <div class="tab-cta-text">
                                <p>Let us grow together. Join our network of successful partners and discover</p>
                            </div>
                            <a href="#" class="btn-meeting">Set Up a Meeting →</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tab 2: Travel & Tourism -->
            <div class="partner-tab" data-tab="travel">
                <span class="tab-label">Travel &amp; tourism agencies</span>
                <div class="tab-content-inner">
                    <div class="tab-inner-grid">
                        <div class="col-md-3">
                            <div class="tab-img-col">
                                <img src="assets/img/become-partner/real-estate.png" alt="Travel and Tourism" />
                            </div>
                        </div>
                        <div class="tab-text-col">
                            <h4>Travel &amp; Tourism Agencies</h4>
                            <hr class="tab-divider" />
                            <p>We partner with travel and tourism agencies to offer clients residency-linked travel programs and global mobility solutions. Our corporate setup expertise enhances agencies' service portfolios with international structuring options.</p>
                            <p>From Mauritius golden visa pathways to Dubai residency programs, we equip agencies with compliant, attractive offerings tailored for high-net-worth travelers seeking global presence.</p>
                            <div class="tab-badges">
                                <span class="tab-badge">
                                    <span class="chk">
                                        <img src="assets/img/icon/Checke.png" alt="check Icon">
                                    </span>
                                    Residency program support
                                </span>
                                <span class="tab-badge">
                                    <span class="chk">
                                        <img src="assets/img/icon/Checke.png" alt="check Icon">
                                    </span>
                                    Global mobility solutions
                                </span>
                            </div>
                            <div class="tab-cta-text">
                                    <p>Let us grow together. Join our network of successful partners and discover</p>
                            </div>
                            <a href="#" class="btn-meeting">Set Up a Meeting →</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tab 3: Real Estate Professionals (default active) -->
            <div class="partner-tab active" data-tab="realestate" data-active="true">
                <span class="tab-label">Real Estate Professionals</span>
                <div class="tab-content-inner">
                    <div class="tab-inner-grid">
                        <div class="col-md-3">
                            <div class="tab-img-col">
                                <img src="assets/img/become-partner/real-estate.png" alt="Real Estate Professionals" />
                            </div>
                        </div>
                        <div class="tab-text-col">
                            <h4>Real Estate Professionals</h4>
                            <hr class="tab-divider" />
                            <p>The Euphoria Group works with real estate professionals who help clients explore international property investments and global residency-linked opportunities. Our overseas business setup expertise contributes to their service ecosystem by providing structured corporate solutions for property holding, international asset structuring, and global business presence.</p>
                            <p>With a deep operational understanding of markets such as Dubai and Mauritius, we ensure that business entities are formed in accordance with local regulations while also aligning with long-term investment strategies, enabling a comprehensive advisory service.</p>
                            <div class="tab-badges">
                                <span class="tab-badge">
                                    <span class="chk">
                                        <img src="assets/img/icon/Checke.png" alt="check Icon">
                                    </span>
                                    Global setup for real estate partners
                                </span>
                                <span class="tab-badge">
                                    <span class="chk">
                                        <img src="assets/img/icon/Checke.png" alt="check Icon">
                                    </span>
                                    Property investment support
                                </span>
                            </div>
                            <div class="tab-cta-text">
                                    <p>Let us grow together. Join our network of successful partners and discover</p>
                            </div>
                            <a href="#" class="btn-meeting">Set Up a Meeting →</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tab 4: Investment Advisors -->
            <div class="partner-tab" data-tab="investment">
                <span class="tab-label">Investment Advisors</span>
                <div class="tab-content-inner">
                    <div class="tab-inner-grid">
                        <div class="col-md-3">
                            <div class="tab-img-col">
                                <img src="assets/img/become-partner/real-estate.png" alt="Investment Advisors" />
                            </div>
                        </div>
                        <div class="tab-text-col">
                            <h4>Investment Advisors</h4>
                            <hr class="tab-divider" />
                            <p>Investment advisors partnering with Euphoria Group gain access to structured offshore and onshore corporate solutions that complement wealth management and portfolio diversification strategies for their clients.</p>
                            <p>We provide compliant business formation across key financial hubs, enabling advisors to offer holistic investment strategies that integrate corporate structuring with asset protection and international tax planning.</p>
                            <div class="tab-badges">
                                <span class="tab-badge">
                                    <span class="chk">
                                        <img src="assets/img/icon/Checke.png" alt="check Icon">
                                    </span>
                                    Portfolio structuring
                                </span>
                                <span class="tab-badge">
                                    <span class="chk">
                                        <img src="assets/img/icon/Checke.png" alt="check Icon">
                                    </span>
                                    Wealth protection solutions
                                </span>
                            </div>
                            <div class="tab-cta-text">
                                    <p>Let us grow together. Join our network of successful partners and discover</p>
                            </div>
                            <a href="#" class="btn-meeting">Set Up a Meeting →</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<script>
    const tabs = document.querySelectorAll('.partner-tab');

    function setActive(tab) {
        tabs.forEach(t => {
            t.classList.remove('active');
            t.removeAttribute('data-active');
        });
        tab.classList.add('active');
        tab.setAttribute('data-active', 'true');
    }

    tabs.forEach(tab => {
        // Hover: expand on enter
        tab.addEventListener('mouseenter', () => {
            tabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');
        });

        // Hover: restore pinned active on leave
        tab.addEventListener('mouseleave', () => {
            tabs.forEach(t => t.classList.remove('active'));
            const pinned = document.querySelector('.partner-tab[data-active="true"]');
            if (pinned) pinned.classList.add('active');
        });

        // Click: pin this as the active tab
        tab.addEventListener('click', () => setActive(tab));
    });
</script>
<?php
include_once('elements/faqs.php');
include_once('elements/footer.php');
?>