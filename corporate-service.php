<?php
include_once('elements/header.php');
?>

<!-- Hero Section -->
<section class="top-banner-background" style="background-image: url('assets/img/background/corporate-services.png');">
  <div>
    <h1 class="mb-0">Corporate Service</h1>
    <p class="text-black text-center mt-2">
      Expert Corporate Solutions for Modern Businesses
    </p>
  </div>
</section>

<section class="corporate-tab-section india-section">

    <div class="container position-relative" style="z-index:2">

        <div class="formation-nav-wrapper" data-aos="fade-up" data-aos-duration="800">

            <a href="#legal-compliance" class="nav-link-pill nav-link-item nav-active-pill">Legal & Compliance Services</a>
            <div class="nav-sep"></div>

            <a href="#account-taxation" class="nav-link-pill nav-link-item">Accounting & Taxation</a>
            <div class="nav-sep"></div>
            
            <a href="#licensing-regulatory" class="nav-link-pill nav-link-item">Licensing & Regulatory</a>
            <div class="nav-sep"></div>
            
            <a href="#corporate-restructuring" class="nav-link-pill nav-link-item">Corporate Restructuring</a>
            <div class="nav-sep"></div>
            
            <a href="#advisory-consultancy" class="nav-link-pill nav-link-item">Advisory & Consultancy</a>
            <div class="nav-sep"></div>
            
            <a href="#additional-service" class="nav-link-pill nav-link-item">Additional Services</a>
            <div class="nav-sep"></div>
            
            <a href="#faqs" class="nav-link-pill nav-link-item">FAQ</a>

        </div>

    </div><!-- /container -->

    <div class="container-xl pt-5">
        <div class="row align-items-center">

            <!-- Left: Image -->
            <div class="col-12 col-md-4 img-col" data-aos="fade-up" data-aos-duration="1000">
                <img src="assets/img/corporate-market.png" alt="Business professionals with city skyline" />
            </div>

            <!-- Right: Text -->
            <div class="col-12 col-md-8 text-col">
                <p data-aos="fade-up" data-aos-duration="1200">
                    Entering the Indian market requires more than just registration—it demands strategic planning, regulatory clarity, and structured execution.
                </p>
                <p data-aos="fade-up" data-aos-duration="1200">
                    Our inbound corporate services cover business setup, compliance, approvals, and legal structuring aligned with Indian laws.
                </p>
                <p data-aos="fade-up" data-aos-duration="1200">
                    Entering the Indian market requires more than just registration—it demands strategic planning, regulatory clarity, and structured execution.
                </p>
                <p data-aos="fade-up" data-aos-duration="1200">
                    Our inbound corporate services cover business setup, compliance, approvals, and legal structuring aligned with Indian laws.
                </p>
            </div>

        </div>
    </div>

</section>

<style>
  /* ─── SCROLL ANIMATIONS ─── */
  .reveal {
    opacity: 0;
    transform: translateY(40px);
    transition: opacity .7s ease, transform .7s ease;
  }

  .reveal.visible {
    opacity: 1;
    transform: none;
  }

  .reveal-left {
    opacity: 0;
    transform: translateX(-50px);
    transition: opacity .7s ease, transform .7s ease;
  }

  .reveal-right {
    opacity: 0;
    transform: translateX(50px);
    transition: opacity .7s ease, transform .7s ease;
  }

  .reveal-left.visible,
  .reveal-right.visible {
    opacity: 1;
    transform: none;
  }

  /* ─── HERO SLIDER ─── */
  .hero-swiper {
    height: 520px;
  }

  .hero-swiper .swiper-slide {
    position: relative;
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
  }

  .hero-swiper .swiper-slide::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(90deg, rgba(37, 53, 111, .88) 40%, rgba(37, 53, 111, .30));
  }

  .hero-content {
    position: relative;
    z-index: 2;
    color: #fff;
  }

  .hero-content .badge-tag {
    display: inline-block;
    background: var(--euphoria-red);
    color: #fff;
    font-size: .75rem;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    padding: 5px 14px;
    border-radius: 2px;
    margin-bottom: 16px;
  }

  .hero-content h1 {
    font-size: 2.8rem;
    line-height: 1.18;
    margin-bottom: 18px;
  }

  .hero-content p {
    font-size: 1.05rem;
    opacity: .88;
    max-width: 520px;
    margin-bottom: 28px;
  }

  .hero-btn {
    background: var(--euphoria-red);
    color: #fff;
    border: none;
    padding: 12px 30px;
    font-weight: 700;
    font-size: .95rem;
    border-radius: 4px;
    text-decoration: none;
    transition: background .3s, transform .2s;
    display: inline-block;
    margin-right: 10px;
  }

  .hero-btn:hover {
    background: #b91419;
    color: #fff;
    transform: scale(1.04);
  }

  .hero-btn-outline {
    border: 2px solid #fff;
    color: #fff;
    background: transparent;
    padding: 10px 28px;
    font-weight: 700;
    border-radius: 4px;
    text-decoration: none;
    transition: all .3s;
    display: inline-block;
  }

  .hero-btn-outline:hover {
    background: #fff;
    color: var(--euphoria-blue);
  }

  .swiper-pagination-bullet {
    width: 12px;
    height: 12px;
    background: #b0bdd4;
    opacity: 1;
    transition: all 0.3s ease;
  }

  .swiper-pagination-bullet-active {
    background: #25356F;
    width: 12px;
    height: 12px;
    border-radius: 100%;
  }

  /* ─── SECTION TITLE ─── */
  .section-label {
    display: inline-block;
    font-size: .75rem;
    font-weight: 700;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: var(--euphoria-red);
    margin-bottom: 8px;
  }

  .section-title {
    font-size: 2rem;
    color: var(--euphoria-blue);
    font-weight: 700;
    line-height: 1.2;
  }

  .section-divider {
    width: 52px;
    height: 3px;
    background: var(--euphoria-red);
    border-radius: 2px;
    margin: 12px 0 20px;
  }

  .section-bg-text {
    position: absolute;
    font-size: 6rem;
    font-family: 'Playfair Display', serif;
    color: var(--euphoria-blue);
    opacity: .04;
    font-weight: 700;
    top: -20px;
    left: 50%;
    transform: translateX(-50%);
    white-space: nowrap;
    pointer-events: none;
  }

  /* ─── STATS BAR ─── */
  .stats-bar {
    background: var(--euphoria-blue);
    padding: 28px 0;
  }

  .stat-item {
    text-align: center;
    color: #fff;
  }

  .stat-item .num {
    font-size: 2.3rem;
    font-family: 'Playfair Display', serif;
    font-weight: 700;
    color: #fff;
  }

  .stat-item .num span {
    color: #ffc107;
  }

  .stat-item p {
    margin: 0;
    font-size: .85rem;
    opacity: .8;
  }

  /* ─── LEGAL & COMPLIANCE ─── */

  .service-card {
    background: #fff;
    border: 1px solid var(--card-border);
    border-radius: 10px;
    padding: 10px;
    text-align: center;
    transition: box-shadow .3s, transform .3s;
    height: 100%;
  }

  .service-card:hover {
    box-shadow: 0 8px 32px rgba(37, 53, 111, .14);
    transform: translateY(-6px);
  }

  .service-card .icon-wrap {
    border-radius: 50%;
    background: var(--red-blur);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 10px;
    transition: background .3s;
  }

  .service-card:hover .icon-wrap {
    background: var(--euphoria-red);
  }

  .service-card:hover .icon-wrap i {
    color: #fff !important;
  }

  .service-card .icon-wrap img {
    width: 100%;
  }

  .service-card h6 {
    font-size: 20px;
    font-family: "Anek Kannada", "Poppins", sans-serif;
    font-weight: 700;
    color: var(--euphoria-blue);
    margin-bottom: 8px;
  }

  .service-card p {
    font-size: 16px;
    color: #666;
    font-family: "Anek Kannada", "Poppins", sans-serif;
    margin: 0;
  }

  /* Swiper service slider */
  .service-swiper {
    padding-bottom: 38px !important;
  }

  /* ─── RESPONSIVE ─── */
  @media(max-width:768px) {
    .hero-swiper {
      height: 380px;
    }

    .hero-content h1 {
      font-size: 1.7rem;
    }

    .section-bg-text {
      font-size: 3.5rem;
    }

    .adv-img-wrap img {
      height: 260px;
    }
  }

  /* ─── COUNTER ANIMATION ─── */
  .num[data-target] {
    transition: all .1s;
  }

  /* ─── PULSE DOT ─── */
  @keyframes pulse {

    0%,
    100% {
      transform: scale(1);
      opacity: 1
    }

    50% {
      transform: scale(1.5);
      opacity: .5
    }
  }

  .pulse-dot {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: var(--euphoria-red);
    display: inline-block;
    animation: pulse 1.4s infinite;
    margin-right: 8px;
  }

  .about-title-bg {
    top: -40px;
    font-size: 11.4rem !important;
  }
</style>

<!-- LEGAL & COMPLIANCE -->
<section id="legal" class="about-section legal-section py-5">

  <div class="about-title-bg">Reliable Support</div>

  <div class="container">
    <div class="row align-items-center">

      <h2 class="about-title h1">Legal & Compliance Services</h2>
      <p class="text-muted mx-auto text-center">We provide end-to-end legal and regulatory compliance solutions to protect and grow your business efficiently.</p>

      <!-- Service Swiper Slider -->
      <div class="swiper service-swiper reveal">
        <div class="swiper-wrapper pb-2">

          <div class="swiper-slide">
            <div class="service-card">
              <div class="icon-wrap">
                <img src="assets/img/legal-annual-filling.png">
              </div>
              <h6>ROC Compliance Services MCA Filings in India</h6>
              <p>We provide complete ROC compliance and MCA filing services to ensure your company remains legally compliant and active under the Companies Act, 2013.</p>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="service-card">
              <div class="icon-wrap">
                <img src="assets/img/legal-moa-drafting.png">
              </div>
              <h6>Annual Statutory Filing & Regulatory Returns</h6>
              <p>Preparation and submission of annual financial statements and returns to ensure statutory compliance and corporate transparency.</p>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="service-card">
              <div class="icon-wrap">
                <img src="assets/img/legal-mca.png">
              </div>
              <h6>MOA & AOA Drafting and Amendment Services</h6>
              <p>Professional drafting of Memorandum of Association (MOA) and Articles of Association (AOA) to establish your company's goals and internal governance structure.</p>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="service-card">
              <div class="icon-wrap">
                <img src="assets/img/legal-moa-drafting.png">
              </div>
              <h6>Shareholder Rights & Governance Services</h6>
              <p>Legally structured shareholder agreements covering ownership structure, rights and responsibilities, profit sharing, voting rights, and exit clauses.</p>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="service-card">
              <div class="icon-wrap">
                <img src="assets/img/legal-roc-service.png">
              </div>
              <h6>Compliance under the Ministry of Corporate Affairs</h6>
              <p>Comprehensive regulatory compliance support in accordance with the Ministry of Corporate Affairs' rules and regulations.</p>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="service-card">
              <div class="icon-wrap">
                <img src="assets/img/legal-shareholder.png">
              </div>
              <h6>Drafting and Documentation of Board Resolutions</h6>
              <p>Drafting formal board resolutions for important corporate decisions, ensuring proper documentation and legality.</p>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="service-card">
              <div class="icon-wrap">
                <img src="assets/img/legal-annual-filling.png">
              </div>
              <h6>FSSAI, MSME, Import Export Code (IEC)</h6>
              <p>Comprehensive assistance with:
                <li>FSSAI License Registration</li>
                <li>MSME (Udyam) Registration</li>
                <li>Import Export Code (IEC) from DGFT</li>
              </p>
            </div>
          </div>


        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>
</section>

<!-- ACCOUNTING & TAXATION -->
<style>
  .acc-section {
    position: relative;
    overflow: hidden;
    background: linear-gradient(135deg, #0b1633 0%, #122252 45%, #0f1d44 100%);
    padding: 72px 0 80px;
  }

  /* Watermark "Prosper" */
  .acc-section::before {
    content: 'Prosper';
    position: absolute;
    top: -10px;
    left: -8px;
    font-family: 'Playfair Display', serif;
    font-size: clamp(80px, 14vw, 160px);
    font-weight: 700;
    color: rgba(255, 255, 255, 0.042);
    letter-spacing: -4px;
    pointer-events: none;
    white-space: nowrap;
    line-height: 1;
    z-index: 0;
  }

  /* Watermark "%" symbol bottom-right */
  .acc-section::after {
    content: '%';
    position: absolute;
    bottom: -30px;
    right: 40px;
    font-size: clamp(160px, 28vw, 280px);
    font-weight: 900;
    color: rgba(255, 255, 255, 0.022);
    pointer-events: none;
    line-height: 1;
    z-index: 0;
  }

  .acc-section .container {
    position: relative;
    z-index: 1;
  }

  /* ── LEFT COLUMN ── */
  .acc-heading {
    font-family: "Anek Kannada", "Poppins", sans-serif;
    font-size: clamp(1.8rem, 3.5vw, 2.4rem);
    font-weight: 700;
    color: #fff;
    line-height: 1.18;
    margin-bottom: 22px;
  }

  .acc-desc {
    font-size: 16px;
    font-family: "Anek Kannada", "Poppins", sans-serif;
    color: rgba(255, 255, 255, 0.72);
    line-height: 1.8;
    margin-bottom: 14px;
  }

  /* ── WHITE HIGHLIGHT CARD ── */
  .card-white {
    background: #fff;
    border-radius: 14px;
    padding: 28px 22px 24px;
    height: 100%;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.22);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .card-white:hover {
    transform: translateY(-5px);
    box-shadow: 0 16px 48px rgba(0, 0, 0, 0.28);
  }

  .card-white .icon-circle {
    width: 58px;
    height: 58px;
    border-radius: 50%;
    background: rgba(37, 53, 111, 0.09);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 14px;
  }

  .card-white .icon-circle i {
    font-size: 1.5rem;
    color: var(--euphoria-blue);
  }

  .card-white h5 {
    font-family: 'Playfair Display', serif;
    font-size: 1.05rem;
    font-weight: 700;
    color: var(--euphoria-blue);
    margin-bottom: 10px;
  }

  .card-white p {
    font-size: 0.82rem;
    color: #666;
    line-height: 1.7;
    margin: 0;
  }

  /* ── DASHED DARK CARDS ── */
  .card-dashed {
    background: rgba(255, 255, 255, 0.04);
    border: 1px dashed var(--dashed-color);
    border-radius: 14px;
    padding: 14px;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    cursor: pointer;
    position: relative;
    overflow: hidden;
    transition: background 0.3s ease, border-color 0.3s ease, transform 0.25s ease;
  }

  .card-dashed:hover {
    background: var(--card-hover-bg);
    border-color: rgba(255, 255, 255, 0.55);
    transform: translateY(-5px);
  }

 
  .card-dashed h6 {
    font-size: 0.92rem;
    font-weight: 700;
    color: #fff;
    margin: 0;
    letter-spacing: 0.01em;
  }

  /* ── ANIMATE ON SCROLL ── */
  .reveal {
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.65s ease, transform 0.65s ease;
  }

  .reveal.visible {
    opacity: 1;
    transform: none;
  }

  /* delay helpers */
  .delay-1 {
    transition-delay: 0.10s;
  }

  .delay-2 {
    transition-delay: 0.18s;
  }

  .delay-3 {
    transition-delay: 0.26s;
  }

  .delay-4 {
    transition-delay: 0.34s;
  }

  .delay-5 {
    transition-delay: 0.42s;
  }

  .delay-6 {
    transition-delay: 0.50s;
  }

  .delay-7 {
    transition-delay: 0.58s;
  }

  /* ── EQUAL HEIGHT ROWS ── */
  .acc-top-row {
    --bs-gutter-x: 1rem;
    --bs-gutter-y: 1rem;
  }

  .acc-bottom-row {
    --bs-gutter-x: 1rem;
    --bs-gutter-y: 1rem;
  }

  /* bottom row: 4 cards smaller */
  .acc-bottom-row .card-dashed {
    min-height: 150px;
  }

  /* top row cards */
  .acc-top-row .card-dashed,
  .acc-top-row .card-white {
    min-height: 170px;
  }

  /* ── RESPONSIVE ── */
  @media (max-width: 576px) {

    .card-white,
    .card-dashed {
      min-height: auto !important;
    }
  }
</style>

<section class="acc-section" id="account-taxation">
  <div class="container">
    <div class="row g-5 align-items-start">

      <!-- ── LEFT COLUMN ── -->
      <div class="col-lg-5 col-xl-6 reveal">
        <h2 class="acc-heading" data-aos="fade-up" data-aos-duration="500">Accounting & Taxation</h2>
        <p class="acc-desc" data-aos="fade-up" data-aos-duration="800">
          Strong financial management is the foundation of any successful business.
          Our accounting and taxation services are intended to ensure accuracy, compliance,
          and financial clarity, allowing you to confidently focus on growth.
        </p>
        <p class="acc-desc mb-0" data-aos="fade-up" data-aos-duration="800">
          The Euphoria Corporate Service combines regulatory expertise and strategic
          insight to ensure your company's financial stability and legal compliance.
        </p>
      </div>
      <style>
        .prosper-icon {
          width: 90px;
          height: 90px;
        }
 
        .card-dashed .card-front {
          transition: all 0.3s ease;
          opacity: 1;
          transform: translateY(0);
        }

        .card-dashed .card-hover-text {
          position: absolute;

          color: #000;
          background-color: #fff;
          font-family: "Anek Kannada", "Poppins", sans-serif;
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
          padding: 20px;
          opacity: 0;
          transform: translateY(20px);
          transition: all 0.3s ease;
        }

        .card-hover-text h6 {
          color: #25356f;
          font-size: 17px;
          margin-top: 25px;
          margin-bottom: 9px;
        }

        .card-hover-text p {
          font-size: 13px;
        }

        .card-dashed:hover .card-front {
          opacity: 0;
          transform: translateY(-20px);
        }

        .card-dashed:hover .card-hover-text {
          opacity: 1;
          transform: translateY(0);
        }
      </style>
      <!-- ── RIGHT GRID ── -->
      <div class="col-lg-7 col-xl-6">

        <!-- TOP ROW: White card + GST + Income Tax -->
        <div class="row acc-top-row g-3 mb-3">

          <!-- White highlight card -->
          <div class="col-sm-4 reveal delay-3">
            <div class="card-dashed">
              <div class="card-front text-center">
                <div class=" mb-3">
                  <img src="assets/img/icon/prosper-1.png" alt="Accounting Service" class="prosper-icon">
                </div>
                <h6>Accounting Service</h6>
              </div>

              <!-- Hover: title + description (visible on hover) -->
              <div class="card-hover-text text-center">
                <h6>Accounting Services</h6>
                <p>Maintaining accurate business accounts by recording daily financial transactions.</p>
              </div>


            </div>

          </div>

          <!-- GST Filing -->
          <div class="col-sm-4 reveal delay-2">
            <div class="card-dashed">

              <div class="card-front text-center">
                <div class="mb-3">
                  <!-- Custom GST icon using Bootstrap Icons + text overlay -->
                  <img src="assets/img/icon/prosper-1.png" alt="GST Filing" class="prosper-icon">
                </div>
                <h6>GST Filing</h6>
              </div>

               <!-- Hover: title + description (visible on hover) -->
              <div class="card-hover-text text-center">
                <h6>GST Filing</h6>
                <p> Prepare and file GST returns on time, in accordance with government regulations.</p>
              </div>

            </div>
          </div>

          <!-- Income Tax Filing -->
          <div class="col-sm-4 reveal delay-3">
            <div class="card-dashed">

              <div class="card-front text-center">
                <div class="mb-3">
                  <img src="assets/img/icon/prosper-2.png" alt="Income Tax Filing" class="prosper-icon">
                </div>
                <h6>Income Tax Filing</h6>
              </div>

              <div class="card-hover-text text-center">
                <h6>Income Tax Filing</h6>
                <p>Maintaining accurate business accounts by recording daily financial transactions.</p>
                <!-- <p> Calculating and filing annual income tax returns accurately.</p> -->
              </div>

            </div>
          </div>
        </div><!-- /top row -->
      </div><!-- /right grid -->

      <!-- BOTTOM ROW: 4 equal dashed cards -->
      <div class="row acc-bottom-row g-3">

        <!-- Payroll Processing -->
        <div class="col-6 col-sm-3 reveal delay-4">
          <div class="card-dashed">

          <div class="card-front text-center">
            <div class="mb-3">
              <img src="assets/img/icon/prosper-3.png" alt="Payroll Processing" class="prosper-icon">
            </div>
            <h6>Payroll Processing</h6>
          </div>

          <div class="card-hover-text text-center">
              <h6>Payroll Processing</h6>
              <p>Maintaining accurate business accounts by recording daily financial transactions.</p>
            </div>

          </div>
        </div>

        <!-- TDS Filing -->
        <div class="col-6 col-sm-3 reveal delay-5">
          <div class="card-dashed">
            <div class="card-front text-center">
              <div class="mb-3">
                <img src="assets/img/icon/prosper-4.png" alt="TDS Filing" class="prosper-icon">
              </div>
              <h6>TDS Filing</h6>
            </div>

            <div class="card-hover-text text-center">
              <h6>TDS Filing</h6>
              <p>Deducting tax at the source and filing TDS returns as required.</p>
            </div>

          </div>
        </div>

        <!-- Audit Coordination -->
        <div class="col-6 col-sm-3 reveal delay-6">
          <div class="card-dashed">
          <div class="card-front text-center">
            <div class="mb-3">
              <img src="assets/img/icon/prosper-5.png" alt="Audit Coordination" class="prosper-icon">
            </div>
            <h6>Audit Coordination</h6>
          </div>

          <div class="card-hover-text text-center">
              <h6>Audit Coordination</h6>
              <p>Supporting and coordinating with auditors to ensure a smooth audit completion.</p>
          </div>


          </div>
        </div>

        <!-- Financial Reporting -->
        <div class="col-6 col-sm-3 reveal delay-7">
          <div class="card-dashed">
              <div class="card-front text-center">
                <div class="mb-3">
                  <img src="assets/img/icon/prosper-6.png" alt="Financial Reporting" class="prosper-icon">
                </div>
                <h6>Financial Reporting</h6>
              </div>

              <div class="card-hover-text text-center">
                <h6>Financial Reporting</h6>
                <p> Creating profit and loss, balance sheet, and cash flow statements.</p>
              </div>
          </div>
        </div>

      </div><!-- /bottom row -->
    </div><!-- /main row -->
  </div><!-- /container -->
</section>

<!-- CORPORATE RESTRUCTURING -->
<style>
  .step-card {
      padding:28px;
      margin-bottom:40px;
      border-left:2px solid var(--euphoria-red);
      align-items:flex-start;
      gap:20px;
      transition:box-shadow .3s, transform .3s;
  }
  .step-card:hover { 
      box-shadow:0 8px 30px rgba(37,53,111,.14); 
      transform:translateX(6px); 
  }
  .step-num {
      font-size:6rem;
      font-weight:700;
      color:var(--euphoria-blue);
      line-height:1;
      min-width:60px;
  }
  .step-card h5 { 
      font-size:1.05rem; 
      color:var(--euphoria-blue); 
      font-weight:700; 
      margin-bottom:8px; 
  }
  .step-card p { 
      font-size:.86rem; 
      color:#666; 
      margin:0; 
  }
  .step-img { 
      border-radius:15px; 
      width:100%; 
      height:240px; 
      object-fit:cover; 
  }

  .step-card:hover {
    box-shadow: 0 8px 30px rgba(37, 53, 111, .14);
    transform: translateX(6px);
  }

  .step-num {
    font-size: 6rem;
    font-weight: 700;
    color: var(--euphoria-blue);
    line-height: 1;
    min-width: 60px;
  }

  .step-card h5 {
    font-size: 1.05rem;
    color: var(--euphoria-blue);
    font-weight: 700;
    margin-bottom: 8px;
  }

  .step-card p {
    font-size: .86rem;
    color: #666;
    margin: 0;
  }

  .step-img {
    border-radius: 15px;
    width: 100%;
    height: 240px;
    object-fit: cover;
  }

  #restructuring .about-title-bg {
    top: 0 !important;
  }
</style>

<section id="restructuring" class="about-section restructure-section py-5 mt-5">

  <div class="about-title-bg">Transformation</div>
  <div class="container">

    <div class="row align-items-center">

      <h2 class="about-title h1" style="margin-top: 50px;">Corporate Restructuring</h2>
      <p class="text-muted mx-auto text-center">Strategic corporate restructuring solutions to help businesses adapt, grow, and thrive in changing market conditions.</p>
    </div>

    <div class="row">
      <!-- Step 01 -->
      <div class="col-lg-4 reveal-left">
        <div class="step-card">
          <div class="step-num">01</div>
          <div>
            <h5>Company Conversion (Pvt Ltd / LLP / etc.)</h5>
            <p>Seamless conversion between company structures — Pvt Ltd to LLP, LLP to Pvt Ltd, and more — with complete legal support and documentation.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-8 reveal-right">
        <img src="assets/img/corporate-service/company-conversion.png" alt="Company Conversion" class="step-img reveal">
      </div>
    </div>

    <div class="row">
      <!-- Step 01 -->
      <div class="col-lg-8 reveal-left">
        <img src="assets/img/corporate-service/marger-support.png" alt="Company Conversion" class="step-img reveal">
      </div>

      <div class="col-lg-4 reveal-right">
        <div class="step-card">
          <div class="step-num">02</div>
          <div>
            <h5>Merger & Acquisition Support</h5>
            <p>End-to-end M&A advisory, due diligence, valuation, and post-merger integration support to ensure smooth and compliant transactions.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <!-- Step 03 -->
      <div class="col-lg-4 reveal-left">
        <div class="step-card">
          <div class="step-num">03</div>
          <div>
            <h5>Company Conversion (Pvt Ltd / LLP / etc.)</h5>
            <p>Seamless conversion between company structures — Pvt Ltd to LLP, LLP to Pvt Ltd, and more — with complete legal support and documentation.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-8 reveal-right">
        <img src="assets/img/corporate-service/share-transfer.png" alt="Company Conversion" class="step-img reveal">
      </div>
    </div>

    <div class="row">
      <!-- Step 04 -->
      <div class="col-lg-8 reveal-left">
        <img src="assets/img/corporate-service/capital-increase.png" alt="Company Conversion" class="step-img reveal">
      </div>

      <div class="col-lg-4 reveal-right">
        <div class="step-card">
          <div class="step-num">04</div>
          <div>
            <h5>Merger & Acquisition Support</h5>
            <p>End-to-end M&A advisory, due diligence, valuation, and post-merger integration support to ensure smooth and compliant transactions.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

<!-- LICENSING & REGULATORY APPROVALS -->
<style>
  .licensing-section {
    background: var(--bg-light);
    padding-bottom: 250px !important
  }

  .lic-card {
    background: var(--bg-light);
    border: 1px solid var(--card-border);
    border-radius: 10px;
    padding: 22px;
    height: 100%;
    transition: all .3s;
  }

  .lic-card:hover {
    background: var(--euphoria-blue);
    border-color: var(--euphoria-blue);
    transform: translateY(-5px);
  }

  .lic-card:hover h6,
  .lic-card:hover p,
  .lic-card:hover i {
    color: #fff !important;
  }

  .lic-card i {
    font-size: 1.8rem;
    color: var(--euphoria-red);
    margin-bottom: 12px;
    display: block;
    transition: color .3s;
  }

  .lic-card h6 {
    font-size: .95rem;
    font-weight: 700;
    color: var(--euphoria-blue);
    transition: color .3s;
  }

  .lic-card p {
    font-size: .82rem;
    color: #666;
    margin: 0;
    transition: color .3s;
  }

  .lic-sidebar {
    background: linear-gradient(135deg, var(--euphoria-blue), #1a2e66);
    border-radius: 12px;
    padding: 32px 26px;
    color: #fff;
  }

  .lic-sidebar h5 {
    color: #ffc107;
    margin-bottom: 16px;
  }

  .lic-sidebar .lic-item {
    border-bottom: 1px solid rgba(255, 255, 255, .12);
    padding: 10px 0;
    font-size: .88rem;
    display: flex;
    align-items: center;
    gap: 10px;
  }

  .lic-sidebar .lic-item:last-child {
    border: none;
  }

  .lic-sidebar .lic-item i {
    color: #ffc107;
  }
</style>

<section id="licensing-regulatory" class="account-section licensing-section py-5">
  <div class="container position-relative">

    <div class="about-title-bg">Permits</div>
    <div class="container">

      <div class="row align-items-center">

        <h2 class="about-title h1" style="margin-top: 50px;">Licensing & Regulatory Approvals</h2>
        <p class="text-muted mx-auto text-center">
          We streamline licensing processes across industries, helping you obtain and maintain all necessary approvals without hassle.
        </p>
      </div>
    </div>

    <div class="row g-4">
      <div class="col-lg-8">
        <div class="row g-3">
          <div class="col-sm-6 reveal">
            <div class="lic-card">
              <i class="bi bi-building-gear"></i>
              <h6>Shop & Establishment License</h6>
              <p>Registration and renewal of Shop Act license for all types of businesses and establishments.</p>
            </div>
          </div>
          <div class="col-sm-6 reveal">
            <div class="lic-card">
              <i class="bi bi-geo-alt"></i>
              <h6>MSME / Udyam Registration</h6>
              <p>Quick Udyam registration to access government schemes and benefits for MSMEs.</p>
            </div>
          </div>
          <div class="col-sm-6 reveal">
            <div class="lic-card">
              <i class="bi bi-truck"></i>
              <h6>Import Export Code (IEC)</h6>
              <p>IEC registration for businesses engaged in international trade and commerce.</p>
            </div>
          </div>
          <div class="col-sm-6 reveal">
            <div class="lic-card">
              <i class="bi bi-bank2"></i>
              <h6>Legal Asset Fund (LAS)</h6>
              <p>Advisory and documentation support for loan against shares and securities.</p>
            </div>
          </div>
          <div class="col-sm-6 reveal">
            <div class="lic-card">
              <i class="bi bi-recycle"></i>
              <h6>Pollution Control Certificate</h6>
              <p>Obtaining NOC and consent from State Pollution Control Boards for industrial units.</p>
            </div>
          </div>
          <div class="col-sm-6 reveal">
            <div class="lic-card">
              <i class="bi bi-shield-lock"></i>
              <h6>Trade Mark Registration</h6>
              <p>Brand protection through trademark search, filing, and registration services.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 reveal-right">
        <div class="lic-sidebar">
          <h5><i class="bi bi-list-check me-2"></i>Quick Checklist</h5>
          <div class="lic-item"><i class="bi bi-check-circle-fill"></i> GST Registration</div>
          <div class="lic-item"><i class="bi bi-check-circle-fill"></i> PAN / TAN Registration</div>
          <div class="lic-item"><i class="bi bi-check-circle-fill"></i> Professional Tax</div>
          <div class="lic-item"><i class="bi bi-check-circle-fill"></i> PF / ESI Registration</div>
          <div class="lic-item"><i class="bi bi-check-circle-fill"></i> FSSAI License</div>
          <div class="lic-item"><i class="bi bi-check-circle-fill"></i> ISO Certification</div>
          <div class="lic-item"><i class="bi bi-check-circle-fill"></i> Drug License</div>
          <div class="lic-item"><i class="bi bi-check-circle-fill"></i> Environmental Clearance</div>
          <div class="mt-4 text-center">
            <a href="#" class="hero-btn" style="font-size:.85rem;padding:10px 22px;">Get Started <i class="bi bi-arrow-right ms-1"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ADVISORY & CONSULTANCY -->
<style>
  .adv-list-item {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    padding: 16px 0;
    border-bottom: 1px solid var(--card-border);
  }

  .adv-list-item:last-child {
    border: none;
  }
  .guidance-section {
    padding: 80px 0 60px;
    position: relative;
    background-color: #fff;
    /* overflow: hidden; */
}

  .adv-icon {
    min-width: 42px;
    height: 42px;
    border-radius: 8px;
    background: var(--red-blur);
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .adv-icon i {
    color: var(--euphoria-red);
    font-size: 1.2rem;
  }

  .adv-list-item h6 {
    font-size: 23px;
    font-weight: 700;
    color: var(--euphoria-blue);
    margin-bottom: 4px;
  }

  .adv-list-item p {
    font-size: 16px;
    color: #666;
    margin: 0;
  }

  .adv-img-wrap {
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 8px 32px rgba(37, 53, 111, .15);
  }

  .adv-img-wrap img {
    width: 100%;
    height: 480px;
    object-fit: cover;
  }

  .advisory-border {
    margin-top: -200px;
    background-color: #fff;
    padding: 20px;
    border-radius: 25px;
    border: 1px solid var(--card-border);
  }

  .advisory-border .about-title-bg {
    top: 5px;
  }
</style>

<section id="advisory-consultancy" class="about-section advisory-section py-5" style="overflow: unset;">
  
  <div class="">
    <div class="advisory-border container position-relative">

      <div class="about-title-bg">Guidance</div>
      <div class="container ">

        <div class="row align-items-center">

          <h2 class="about-title h1" style="margin-top: 80px;">Advisory &Consultancy</h2>
          <p class="text-muted mx-auto text-center">
            Our advisory team brings decades of cross-industry experience to help your business make informed, strategic decisions.
          </p>
        </div>
      </div>

      <div class="row align-items-center g-5">
        <div class="col-lg-8 reveal-left">
          <div class="adv-list-item" data-aos="fade-up" data-aos-duration="800">
            <div class="adv-icon"><i class="bi bi-briefcase"></i></div>
            <div>
              <h6 data-aos="fade-up" data-aos-duration="800">Business Strategy Solutions</h6>
              <p data-aos="fade-up" data-aos-duration="800">Market entry, expansion strategies and business model optimization for sustainable growth.</p>
            </div>
          </div>

          <div class="adv-list-item" data-aos="fade-up" data-aos-duration="800">
            <div class="adv-icon"><i class="bi bi-globe"></i></div>
            <div>
              <h6 data-aos="fade-up" data-aos-duration="800">Foreign Investment (FDI) Advisory</h6>
              <p data-aos="fade-up" data-aos-duration="800">FDI structuring, RBI compliance, FIPB approvals and cross-border investment advisory.</p>
            </div>
          </div>

          <div class="adv-list-item" data-aos="fade-up" data-aos-duration="800">
            <div class="adv-icon"><i class="bi bi-currency-exchange"></i></div>
            <div>
              <h6 data-aos="fade-up" data-aos-duration="800">FEMA Compliance (Foreign Exchange Management Act)</h6>
              <p data-aos="fade-up" data-aos-duration="800">End-to-end FEMA compliance management for inbound and outbound foreign investments.</p>
            </div>
          </div>

          <div class="adv-list-item" data-aos="fade-up" data-aos-duration="800">
            <div class="adv-icon"><i class="bi bi-house-gear"></i></div>
            <div>
              <h6 data-aos="fade-up" data-aos-duration="800">Virtual Office Solutions</h6>
              <p data-aos="fade-up" data-aos-duration="800">Professional virtual office addresses for company registration and business correspondence.</p>
            </div>
          </div>

          <div class="adv-list-item" data-aos="fade-up" data-aos-duration="800">
            <div class="adv-icon"><i class="bi bi-file-earmark-medical"></i></div>
            <div>
              <h6 data-aos="fade-up" data-aos-duration="800">Corporate Document Solutions</h6>
              <p data-aos="fade-up" data-aos-duration="800">Comprehensive document drafting, apostille, notarization and legalization services.</p>
            </div>
          </div>

        </div>

        <div class="col-lg-4 reveal-right">
          <div class="adv-img-wrap" data-aos="fade-left" data-aos-duration="800">
            <img src="assets/img/corporate-service/advisory-service.png" alt="Advisory" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ADDITIONAL SERVICES -->
<style>
  .additional-section {
    background: #fff;
  }

  .add-card {
    border: 1px solid var(--card-border);
    border-radius: 12px;
    overflow: hidden;
    transition: box-shadow .3s, transform .3s;
    height: 100%;
  }

  .add-card:hover {
    box-shadow: 0 10px 36px rgba(37, 53, 111, .16);
    transform: translateY(-6px);
  }

  .add-card img {
    width: 100%;
    height: 180px;
    object-fit: cover;
    border-radius: 15px;
  }

  .add-card-body {
    padding: 20px;
    background-color: var(--bg-light);
  }

  .add-card-body h6 {
    font-size: .97rem;
    font-weight: 700;
    color: var(--euphoria-blue);
    margin-bottom: 8px;
    text-align: center;
    border-bottom: 1px solid;
    padding-bottom: 15px;
  }

  .add-card-body p {
    font-size: .82rem;
    color: #666;
    margin: 0;
  }

  #additional .about-title-bg {
    top: -25px;
  }

  #additional p {
    font-size: 15px;
  }
</style>

<section id="additional-service" class="additional-section py-5">
  
  <div class="container position-relative">

    <div class="about-title-bg">Extensions</div>
    <div class="container ">

      <div class="row align-items-center">
          
        <h2 class="about-title h1" style="margin-top: 80px;" data-aos="fade-up" data-aos-duration="500">Additional Services</h2>
        <p class="text-muted mx-auto text-center" data-aos="fade-up" data-aos-duration="800">
          In addition to our core compliance and advisory offerings, we provide a range of additional business support services designed to simplify operations and ensure complete regulatory compliance. Our value-added services help startups, SMEs, and established companies efficiently manage essential registrations, certifications, and corporate requirements.
        </p>

        <p class="text-muted mx-auto text-center" data-aos="fade-up" data-aos-duration="800">
          From business licenses and statutory registrations to certification support and documentation assistance, we ensure your business complies with all legal and operational requirements under Indian law. Our team delivers reliable, timely, and professional support to help your business operate smoothly and grow with confidence.
        </p>
      </div>
    </div>

    <div class="row g-4 pt-4">
      <div class="col-sm-6 col-lg-4 reveal">
        <div class="add-card">
          <div class="add-card-body text-center" data-aos="fade-up" data-aos-duration="800">
            <h6 data-aos="fade-left" data-aos-duration="1000">Trade Mark Registration</h6>
            <p data-aos="fade-right" data-aos-duration="1200">Complete trademark search, filing, opposition handling, and brand protection services.</p>
            <img data-aos="fade-down" data-aos-duration="1400" src="assets/img/trademark-registration.png" alt="Trademark" class="mt-4">
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 reveal">
        <div class="add-card">
          <div class="add-card-body text-center" data-aos="fade-up" data-aos-duration="800">
            <h6 data-aos="fade-left" data-aos-duration="1000">ISO Certification</h6>
            <p data-aos="fade-right" data-aos-duration="1200">ISO 9001, 14001, 45001 and industry-specific certifications with full documentation support.</p>
            <img data-aos="fade-down" data-aos-duration="1400" src="assets/img/iso-certificate.png" alt="ISO" class="mt-4">
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 reveal">
        <div class="add-card">
          <div class="add-card-body text-center" data-aos="fade-up" data-aos-duration="800">
            <h6 data-aos="fade-left" data-aos-duration="1000">Business Consulting Services</h6>
            <p data-aos="fade-right" data-aos-duration="1200">Strategic planning, process optimization and management consulting for growth-focused businesses.</p>
            <img data-aos="fade-down" data-aos-duration="1400" src="assets/img/business-volume.png" alt="Business Consulting" class="mt-4">
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<?php
include_once('elements/faqs.php');
include_once('elements/footer.php');
?>