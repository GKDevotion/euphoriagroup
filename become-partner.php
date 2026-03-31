<?php
include_once('elements/header.php');
?>

<style>
    :root {
        --bg-section: #ffffff;
        --dark-navy: #1a2340;
        --text-body: #4a4a5a;
        --accent: #c9a96e;
        --pink-light: #f0c0c8; 
        --navy: #1a2456;
        --red: #c0392b;
        --light-gray: #f7f8fc;
        --border: #e2e5f0;
        --text-muted: #7a7f9a;
    }

    /* ── HERO ── */
    .become-partner {
        position: relative;
        top: 88px;
        min-height: 700px;
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

    .content-col .brand-name { 
        font-weight: 600;
        color: #1a2340;
    }

    .content-col p {
        color: #4a4a5a;
        font-size: 0.97rem;
        line-height: 1.85;
        font-weight: 300;
        margin-bottom: 1.4rem;
    }

    .content-col p strong {
        font-weight: 700;
        color: #1a2340;
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
    @media (max-width: 991.98px) {
        .map-bg {
            width: 100%;
        }

        .content-col {
            padding-left: 1rem;
            padding-top: 2rem;
        }

        .content-col::before {
            margin: 0 auto 1.4rem;
        }

        .content-col {
            align-items: center;
            text-align: center;
        }
    }

    /* Section */
    .revenue-strategy {
        position: relative;
        padding: 100px 0 0px;
        overflow: hidden;
        background: #fff;
    }

    /* Watermark */
    .revenue-strategy::before {
        content: "Revenue Strategy";
        position: absolute;
        top: 0px;
        left: 50%;
        transform: translateX(-50%); 
        font-size: clamp(60px, 10vw, 145px);
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

    .card-title {
        font-size: 1.05rem;
        font-weight: 700;
        color: #25356F;
        margin-bottom: 12px;
    }

    .card-text {
        font-size: 0.75rem;
        color: #4b5563;
        line-height: 1.7;
    }

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
        top: 0px;
        left: 50%;
        transform: translateX(-50%); 
        font-size: clamp(60px, 10vw, 145px);
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
    align-items: stretch; /* IMPORTANT */
    gap: 10px;
    min-height: 380px;
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
    background: #fff;
    transition: flex 0.55s cubic-bezier(.77, 0, .175, 1),
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
    transform: translate(-50%, -50%) rotate(180deg); /* FIX */
    font-size: 0.84rem;
    font-weight: 600;

    position: absolute;
    top: 50%;       /* center vertically */
    left: 50%;      /* center horizontally inside tab */
    
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
    height: 100px;
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
    color: #1a2456;
    font-size: 1.25rem;
    font-weight: 700;
    margin-bottom: 0.4rem;
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
    font-size: 0.77rem;
    font-weight: 600;
    color: #1a2456;
}

/* CTA */
.btn-meeting {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #1a2456;
    color: #fff !important;
    border-radius: 8px;
    font-size: 0.82rem;
    font-weight: 600;
    padding: 8px 14px;
    text-decoration: none;
    margin-top: auto; /* PUSH TO BOTTOM */
}
   
</style>

<!-- HERO -->
<section class="become-partner">
    <div>
        <h1 class="mb-0">Become A Partner</h1>
        <div class="gold-divider mx-auto mt-3"></div>
        <p class="text-white-50 mt-2" style="font-size:.9rem;letter-spacing:2px;">Join Hands With us to unlock new business opportunities and mutual growth.</p>
    </div>
</section>

<section class="partnership-section">

    <div class="container position-relative" style="z-index:2">
        <div class="row align-items-center g-0">

            <!-- LEFT — Illustration -->
            <div class="col-lg-6">
                <div class="illustration-wrap">
                    <img
                        src="https://picsum.photos/520/400"
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

<section class="revenue-strategy">

    <div class="container position-relative" style="z-index:1;">

        <h2 class="revenue-heading">Why Partner With Us</h2>

        <div class="container py-5">
            <div class="row g-4">

                <!-- Card 1: Transparent Business Model -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="feature-card h-100">
                        <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=600&q=80"
                            class="card-img-top" alt="Transparent Business Model">
                        <div class="card-body">
                            <h5 class="card-title">Transparent business model</h5>
                            <p class="card-text">
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
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&q=80"
                            class="card-img-top" alt="High-growth Prospects">
                        <div class="card-body">
                            <h5 class="card-title">High-growth prospects</h5>
                            <p class="card-text">
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
                        <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?w=600&q=80"
                            class="card-img-top" alt="Dedicated Partner Support">
                        <div class="card-body">
                            <h5 class="card-title">Dedicated Partner Support</h5>
                            <p class="card-text">
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
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&q=80"
                            class="card-img-top" alt="Advantages">
                        <div class="card-body">
                            <h5 class="card-title">Advantages</h5>
                            <p class="card-text">
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

<section class="our-partner">

    <div class="container position-relative" style="z-index:1;">

        <h2 class="partner-heading">Who Can Partner With uS?</h2>

        <!-- Partners Accordion Tabs -->
        <div class="partners-wrapper py-5" id="partnersWrapper">

            <!-- Tab 1: Corporate Consultants -->
            <div class="partner-tab" data-tab="corporate">
                <span class="tab-label">Corporate Consultants</span>
                <div class="tab-content-inner">
                    <div class="tab-inner-grid">
                        <div class="tab-img-col">
                            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=400&q=80" alt="Corporate Consultants" />
                        </div>
                        <div class="tab-text-col">
                            <h4>Corporate Consultants</h4>
                            <hr class="tab-divider" />
                            <p>The Euphoria Group collaborates with corporate consultants who advise businesses on international expansion and cross-border structuring. Our expertise in overseas business setup enables consultants to deliver structured, compliant solutions for their clients.</p>
                            <p>We support consultants in navigating complex regulatory landscapes across key markets like Dubai and Mauritius, ensuring clients receive end-to-end advisory services combining local compliance with global strategy.</p>
                            <div class="tab-badges">
                                <span class="tab-badge"><span class="chk"><svg viewBox="0 0 12 12">
                                            <polyline points="2,6 5,9 10,3" />
                                        </svg></span>Business structuring support</span>
                                <span class="tab-badge"><span class="chk"><svg viewBox="0 0 12 12">
                                            <polyline points="2,6 5,9 10,3" />
                                        </svg></span>Compliance advisory</span>
                            </div>
                            <p class="tab-cta-text">Let us grow together. Join our network of successful partners and discover</p>
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
                        <div class="tab-img-col">
                            <img src="https://images.unsplash.com/photo-1530521954074-e64f6810b32d?w=400&q=80" alt="Travel and Tourism" />
                        </div>
                        <div class="tab-text-col">
                            <h4>Travel &amp; Tourism Agencies</h4>
                            <hr class="tab-divider" />
                            <p>We partner with travel and tourism agencies to offer clients residency-linked travel programs and global mobility solutions. Our corporate setup expertise enhances agencies' service portfolios with international structuring options.</p>
                            <p>From Mauritius golden visa pathways to Dubai residency programs, we equip agencies with compliant, attractive offerings tailored for high-net-worth travelers seeking global presence.</p>
                            <div class="tab-badges">
                                <span class="tab-badge"><span class="chk"><svg viewBox="0 0 12 12">
                                            <polyline points="2,6 5,9 10,3" />
                                        </svg></span>Residency program support</span>
                                <span class="tab-badge"><span class="chk"><svg viewBox="0 0 12 12">
                                            <polyline points="2,6 5,9 10,3" />
                                        </svg></span>Global mobility solutions</span>
                            </div>
                            <p class="tab-cta-text">Let us grow together. Join our network of successful partners and discover</p>
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
                        <div class="tab-img-col">
                            <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=400&q=80" alt="Real Estate Professionals" />
                        </div>
                        <div class="tab-text-col">
                            <h4>Real Estate Professionals</h4>
                            <hr class="tab-divider" />
                            <p>The Euphoria Group works with real estate professionals who help clients explore international property investments and global residency-linked opportunities. Our overseas business setup expertise contributes to their service ecosystem by providing structured corporate solutions for property holding, international asset structuring, and global business presence.</p>
                            <p>With a deep operational understanding of markets such as Dubai and Mauritius, we ensure that business entities are formed in accordance with local regulations while also aligning with long-term investment strategies, enabling a comprehensive advisory service.</p>
                            <div class="tab-badges">
                                <span class="tab-badge"><span class="chk"><svg viewBox="0 0 12 12">
                                            <polyline points="2,6 5,9 10,3" />
                                        </svg></span>Global setup for real estate partners</span>
                                <span class="tab-badge"><span class="chk"><svg viewBox="0 0 12 12">
                                            <polyline points="2,6 5,9 10,3" />
                                        </svg></span>Property investment support</span>
                            </div>
                            <p class="tab-cta-text">Let us grow together. Join our network of successful partners and discover</p>
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
                        <div class="tab-img-col">
                            <img src="https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?w=400&q=80" alt="Investment Advisors" />
                        </div>
                        <div class="tab-text-col">
                            <h4>Investment Advisors</h4>
                            <hr class="tab-divider" />
                            <p>Investment advisors partnering with Euphoria Group gain access to structured offshore and onshore corporate solutions that complement wealth management and portfolio diversification strategies for their clients.</p>
                            <p>We provide compliant business formation across key financial hubs, enabling advisors to offer holistic investment strategies that integrate corporate structuring with asset protection and international tax planning.</p>
                            <div class="tab-badges">
                                <span class="tab-badge"><span class="chk"><svg viewBox="0 0 12 12">
                                            <polyline points="2,6 5,9 10,3" />
                                        </svg></span>Portfolio structuring</span>
                                <span class="tab-badge"><span class="chk"><svg viewBox="0 0 12 12">
                                            <polyline points="2,6 5,9 10,3" />
                                        </svg></span>Wealth protection solutions</span>
                            </div>
                            <p class="tab-cta-text">Let us grow together. Join our network of successful partners and discover</p>
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