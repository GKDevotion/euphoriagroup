<?php
include_once('elements/header.php');
?>

<!-- Hero Section -->
<section class="top-banner-background text-center" style="background-image: url('assets/img/background/wealth-asset-bg.png');">
  <div>
    <h1 class="mb-0">
      Wealth & Asset Solutions
    </h1>
    <p class="text-black mt-2">
      Smart Strategies for growing and protecting your wealth
    </p>
  </div>
</section>

<style>
  .custom-tabs {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    justify-content: center;
    margin-bottom: 40px;
  }

  .custom-tabs button {
    border: none;
    padding: 10px 10px;
    border-radius: 10px;
    background: #eee;
    color: #333;
    font-size: 14px;
    transition: 0.3s;
  }

  .custom-tabs button.active {
    background: var(--euphoria-blue);
    color: #fff;
  }

  .custom-tabs button:hover {
    background: var(--euphoria-blue);
    color: #fff;
  }

  /* Content Section */
  .content-section {
    padding: 40px 0;
  }

  .corporate-content-box {
    display: none;
  }

  .corporate-content-box.active {
    display: block;
  }

  .illustration {
    max-width: 100%;
  }

  .text-content {
    color: var(--text-dark);
    font-size: 15px;
    line-height: 1.8;
  }
</style>

<div class="container content-section">

  <!-- Tabs -->
  <div class="custom-tabs">
    <a href="#stock_market_section" class="tab-btn active" data-tab="tab1">Stick market</a>
    <a href="#insuarance_section" class="tab-btn" data-tab="tab2">Insuarance</a>
    <a href="#section" class="tab-btn" data-tab="tab1">Real Estate</a>
    <a href="#section" class="tab-btn" data-tab="tab2">FAQ</a>
  </div>

  <!-- Tab Content -->
  <div id="tab1" class="corporate-content-box active">
    <div class="row align-items-center">
      <div class="col-md-5">
        <img src="assets/img/stock-coin.png" class="illustration">
      </div>
      <div class="col-md-7 text-content">
        <p>
          Entering the Indian market requires more than just registration—it demands strategic planning, regulatory clarity, and structured execution.
        </p>
        <p>
          Our inbound corporate services cover business setup, compliance, approvals, and legal structuring aligned with Indian laws.
        </p>
        <p>
          Entering the Indian market requires more than just registration—it demands strategic planning, regulatory clarity, and structured execution.
        </p>
        <p>
          Our inbound corporate services cover business setup, compliance, approvals, and legal structuring aligned with Indian laws.
        </p>
      </div>
    </div>
  </div>

</div>

<!-- ══ Stock Market Oppurtunities- ══ -->
<style>
  .stock-section {
    padding: 80px 0;
  }

  .stock-img {
    border-radius: 20px;
    overflow: hidden;
  }

  .stock-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .stock-card {
    background: #f5f6f8;
    border-radius: 20px;
    padding: 40px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    height: 100%;
  }

  .stock-title {
    font-size: 40px;
    font-weight: 600;
    color: #1e2a55;
  }

  .stock-card p {
    color: #6c757d;
    font-size: 16px;
  }

  .stock-list li {
    margin-bottom: 10px;
    font-weight: 500;
  }

  .check-icon {
    color: #e63946;
    margin-right: 8px;
  }

  @media (max-width: 991px) {
    .stock-card {
      margin-top: 30px;
    }
  }
</style>

<section class="stock-section">
  <div class="container-fluid">
    <div class="row align-items-center g-4">

      <!-- Left Image -->
      <div class="col-lg-6 py-5">
        <div class="stock-img">
          <img src="assets/img/stock-graph.png" alt="Stock Market">
        </div>
      </div>

      <!-- Right Content -->
      <div class="col-lg-6 px-5">
        <div class="stock-card">
          <h3 class="stock-title mb-3">Stock Market Opportunities</h3>
          <p>
            India is one of the fastest-growing capital markets in the world, offering significant opportunities for wealth creation through equities, IPOs, derivatives, and diversified investment instruments. Our Indian Stock Broker Services provide seamless access to the Indian Stock Market, enabling resident investors, NRIs, and global clients to participate confidently in India's dynamic financial ecosystem.
          </p>
          <p>
            We offer strategic stock market investment advisory in India, portfolio diversification strategies, and risk-managed trading solutions aligned with your financial goals. From account opening and regulatory compliance to market research and transaction support, we ensure a structured and transparent investment experience.
          </p>

          <ul class="list-unstyled stock-list mt-4">
            <li><span class="check-icon">✔</span>Expert Stock Market Advisory</li>
            <li><span class="check-icon">✔</span>Real-Time Market Insights</li>
            <li><span class="check-icon">✔</span>Diversified Investment Strategies</li>
            <li><span class="check-icon">✔</span>Secure & Transparent Trading</li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Capital market Section -->
<style>
  .capital-market-section {
    position: relative;
    padding: 64px 0 80px;
    background: var(--bg-light);
    overflow: hidden;
  }

  /* ── HEADER ── */
  .section-header {
    position: relative;
    z-index: 1;
    text-align: center;
    margin-bottom: 44px;
    padding-top: 10px;
  }

  .plane-img {
    position: absolute;
    left: -10px;
    top: -18px;
    width: clamp(110px, 16vw, 210px);
    filter: drop-shadow(4px 8px 18px rgba(37, 53, 111, 0.18));
    animation: floatPlane 4s ease-in-out infinite;
    opacity: 0.4;
  }

  .plane-img-right {
    position: absolute;
    right: 50px;
    bottom: -89px;
    width: clamp(110px, 16vw, 600px);
    filter: drop-shadow(4px 8px 18px rgba(37, 53, 111, 0.18));
    animation: floatPlane 4s ease-in-out infinite;
    opacity: 0.4;
  }

  @keyframes floatPlane {

    0%,
    100% {
      transform: translateY(0) rotate(-2deg);
    }

    50% {
      transform: translateY(-10px) rotate(0deg);
    }
  }

  .section-title {

    font-size: clamp(26px, 4vw, 42px);
    color: var(--euphoria-blue);
    margin-bottom: 10px;
  }

  .section-subtitle {
    font-size: clamp(13px, 1.4vw, 16px);
    color: #666;
    max-width: 580px;
    margin: 0 auto;
    line-height: 1.6;
  }

  /* ── CAROUSEL OUTER clips overflow ── */
  .carousel-outer {
    position: relative;
    z-index: 1;
    overflow: hidden;
  }

  /* ── TRACK slides left/right ── */
  .cards-track {
    display: flex;
    gap: 20px;
    transition: transform 0.5s cubic-bezier(.4, 0, .2, 1);
    will-change: transform;
  }

  /* ── CARD ── */
  .capital-market-card {
    position: relative;
    flex-shrink: 0;
    height: 300px;
    border-radius: 16px;
    overflow: hidden;
    cursor: pointer;
    border: 1.5px solid var(--card-border);
    box-shadow: 0 4px 20px rgba(37, 53, 111, 0.08);
    background: #111;
    transition: transform .35s ease, box-shadow .35s ease;
    animation: cardReveal .6s ease both;
  }

  .capital-market-card:nth-child(1) {
    animation-delay: .05s;
  }

  .capital-market-card:nth-child(2) {
    animation-delay: .14s;
  }

  .capital-market-card:nth-child(3) {
    animation-delay: .23s;
  }

  .capital-market-card:nth-child(4) {
    animation-delay: .32s;
  }

  .capital-market-card:nth-child(5) {
    animation-delay: .41s;
  }

  .capital-market-card:nth-child(6) {
    animation-delay: .50s;
  }

  @keyframes cardReveal {
    from {
      opacity: 0;
      transform: translateY(28px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .capital-market-card:hover {
    transform: translateY(-6px) scale(1.02);
    box-shadow: 0 16px 40px rgba(37, 53, 111, 0.20);
  }

  .capital-market-card img.card-bg {
    width: 100%;
    display: block;
    transition: transform .5s ease;
    justify-content: center;
    overflow: hidden;
    background-size: cover;
    background-repeat: no-repeat;
  }

  .capital-market-card:hover img.card-bg {
    transform: scale(1.07);
  }

  .card-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to bottom,
        transparent 25%,
        rgba(37, 53, 111, .68) 68%,
        rgba(37, 53, 111, .93) 100%);
  }

  .card-body-content {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 15px 15px 15px;
    color: #000;
    background-color: #fff;
  }

  .card-body-content h5 {

    font-size: clamp(14px, 1.6vw, 18px);
    font-weight: 600;
    margin-bottom: 7px;
    line-height: 1.25;
  }

  .card-body-content p {
    font-size: clamp(11px, 1.1vw, 15px);
    color: #000;
    line-height: 1.5;
  }

  /* hover badge */
  .card-accent {
    position: absolute;
    top: 14px;
    right: 14px;
    width: 34px;
    height: 34px;
    background: var(--euphoria-red);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transform: scale(.6);
    transition: opacity .3s, transform .3s;
  }

  .capital-market-card:hover .card-accent {
    opacity: 1;
    transform: scale(1);
  }

  .card-accent svg {
    width: 16px;
    height: 16px;
    fill: #fff;
  }

  /* ── ARROWS ── */
  .carousel-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 10;
    width: 44px;
    height: 44px;
    border-radius: 50%;
    border: none;
    background: var(--euphoria-blue);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    box-shadow: 0 4px 16px rgba(37, 53, 111, 0.28);
    transition: background .25s, transform .25s;
  }

  .carousel-btn:hover:not(:disabled) {
    background: var(--euphoria-red);
    transform: translateY(-50%) scale(1.1);
  }

  .carousel-btn:disabled {
    opacity: .3;
    cursor: default;
  }

  .carousel-btn.prev {
    left: -22px;
  }

  .carousel-btn.next {
    right: -22px;
  }

  @media (max-width:767px) {
    .plane-img {
      display: none;
    }

    .carousel-btn.prev {
      left: -8px;
    }

    .carousel-btn.next {
      right: -8px;
    }
  }

  /* ── DOTS ── */
  .carousel-dots {
    display: flex;
    justify-content: center;
    gap: 8px;
  }

  .dot {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: rgba(37, 53, 111, .22);
    border: none;
    cursor: pointer;
    padding: 0;
    transition: background .3s, transform .3s;
  }

  .dot.active {
    background: var(--euphoria-blue);
    transform: scale(1.35);
  }

  .dot:hover:not(.active) {
    background: var(--euphoria-red);
  }

  .capital-market-section .about-title-bg {
    top: -80px !important;
    font-size: 10rem !important;
  }

  /* --- Capital Market Carousel Mobile Styles --- */

  @media (max-width: 991px) {
    .capital-market-section {
      padding: 40px 0 60px;
    }

    /* Reset the background watermark size for tablets */
    .capital-market-section .about-title-bg {
      font-size: 6rem !important;
      top: -40px !important;
    }

    /* Ensure cards have a consistent width on mobile so the track works */
    .capital-market-card {
      flex: 0 0 280px;
      /* Force each card to be 280px wide on mobile */
      height: 280px;
    }

    /* Adjust Arrows to be slightly inside so they don't cause horizontal scroll */
    .carousel-btn.prev {
      left: 5px;
    }

    .carousel-btn.next {
      right: 5px;
    }
  }

  @media (max-width: 767px) {
    .section-title {
      font-size: 1.8rem;
      margin-bottom: 5px;
    }

    /* Hide decorative floating images to save space */
    .plane-img,
    .plane-img-right {
      display: none !important;
    }

    /* Make the carousel outer container ignore parent padding to show "peek" of next card */
    .carousel-outer {
      overflow: visible;
      padding-bottom: 20px !important;
    }

    /* Container for the carousel needs overflow hidden to keep page clean */
    .position-relative.px-3 {
      overflow: hidden;
    }

    .capital-market-card {
      flex: 0 0 85vw;
      /* Each card takes up 85% of the screen width */
      height: 320px;
    }

    .card-body-content {
      padding: 15px;
    }


  }

  @media (max-width: 480px) {
    .capital-market-section .about-title-bg {
      font-size: 4.5rem !important;
      top: -20px !important;
    }

    .capital-market-card {
      flex: 0 0 90vw;
    }
  }
</style>

<section id="capital_market_section" class="capital-market-section about-section">
  <div class="container position-relative">
    <div class="about-title-bg">Equities</div>
    <!-- HEADER -->
    <div class="section-header">
      <img src="assets/img/equity-left-chart.png" alt="Airplane" class="plane-img d-none d-md-block" />
      <h2 class="section-title">Capital Market</h2>
    </div>

    <!-- CAROUSEL -->
    <div class="position-relative px-3">
      <button class="carousel-btn prev d-none" id="prevBtn" aria-label="Previous">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <polyline points="15 18 9 12 15 6" />
        </svg>
      </button>

      <div class="carousel-outer py-5" id="carouselOuter">
        <div class="cards-track" id="cardsTrack">

          <!-- Card 1 -->
          <div class="capital-market-card">
            <img class="card-bg" src="assets/img/capital-equity.png" alt="Domestic Flights" />
            <div class="card-accent"><svg viewBox="0 0 24 24">
                <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z" />
              </svg></div>
            <div class="card-body-content">
              <h5>Domestic Flights</h5>
              <p>We provide seamless booking for domestic flights, connecting you to major destinations in India with trusted airline partners.</p>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="capital-market-card">
            <img class="card-bg" src="assets/img/capital-intraday.png" alt="Competitive Airfare Deals" />
            <div class="card-accent"><svg viewBox="0 0 24 24">
                <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z" />
              </svg></div>
            <div class="card-body-content">
              <h5>Competitive Airfare Deals</h5>
              <p>Our platform helps you access competitive flight fares and special travel deals, ensuring low-cost travel planning for all.</p>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="capital-market-card">
            <img class="card-bg" src="assets/img/capital-ipo.png" alt="Wide Airline Network" />
            <div class="card-accent"><svg viewBox="0 0 24 24">
                <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z" />
              </svg></div>
            <div class="card-body-content">
              <h5>Wide Airline Network</h5>
              <p>We collaborate with leading global airlines to offer a wide selection of flight options, schedules, and routes for convenient planning.</p>
            </div>
          </div>

          <!-- Card 4 -->
          <div class="capital-market-card">
            <img class="card-bg" src="assets/img/capital-portfolio.png" alt="Corporate Travel Management" />
            <div class="card-accent"><svg viewBox="0 0 24 24">
                <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z" />
              </svg></div>
            <div class="card-body-content">
              <h5>Corporate Travel Management</h5>
              <p>Our services support corporate travel needs with efficient booking management, travel policy compliance, and cost control.</p>
            </div>
          </div>

          <!-- Card 5 -->
          <div class="capital-market-card">
            <img class="card-bg" src="assets/img/capital-equity.png" alt="Easy Rescheduling" />
            <div class="card-accent"><svg viewBox="0 0 24 24">
                <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z" />
              </svg></div>
            <div class="card-body-content">
              <h5>Easy Rescheduling</h5>
              <p>We offer hassle-free flight rescheduling and cancellation options to ensure a smooth travel experience whenever plans change.</p>
            </div>
          </div>

          <!-- Card 6 -->
          <div class="capital-market-card">
            <img class="card-bg" src="assets/img/capital-intraday.png" alt="24/7 Support" />
            <div class="card-accent"><svg viewBox="0 0 24 24">
                <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z" />
              </svg></div>
            <div class="card-body-content">
              <h5>24/7 Customer Support</h5>
              <p>Our dedicated support team is available round the clock to assist with bookings, queries, and any travel emergencies.</p>
            </div>
          </div>

        </div><!-- /cards-track -->
      </div><!-- /carousel-outer -->

      <button class="carousel-btn next d-none" id="nextBtn" aria-label="Next">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <polyline points="9 18 15 12 9 6" />
        </svg>
      </button>
    </div>
    <img src="assets/img/equity-left-chart.png" alt="Airplane" class="plane-img-right d-none d-md-block" />

    <!-- DOTS -->
    <div class="carousel-dots" id="dotsContainer"></div>

  </div>
</section>

<script>
  (() => {
    const GAP = 20;
    const track = document.getElementById('cardsTrack');
    const outer = document.getElementById('carouselOuter');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const dotsWrap = document.getElementById('dotsContainer');
    const cards = Array.from(track.querySelectorAll('.capital-market-card'));
    const total = cards.length;

    let perView = 4;
    let currentIdx = 0;
    let autoTimer = null;

    /* cards visible at this viewport width */
    function getPerView() {
      const w = window.innerWidth;
      if (w <= 480) return 1;
      if (w <= 767) return 2;
      if (w <= 1199) return 3;
      return 4;
    }

    /* last valid index */
    function maxIdx() {
      return Math.max(0, total - perView);
    }

    function startAuto() {
      autoTimer = setInterval(() => {
        goTo(currentIdx < maxIdx() ? currentIdx + 1 : 0);
      }, 3500);
    }

    /* set each card's pixel width so they fill the outer div exactly */
    function applyWidths() {
      const outerW = outer.offsetWidth;
      const cardW = (outerW - GAP * (perView - 1)) / perView;
      cards.forEach(c => {
        c.style.width = cardW + 'px';
      });
    }

    /* move track */
    function goTo(idx) {
      idx = Math.max(0, Math.min(idx, maxIdx()));
      currentIdx = idx;
      const cardW = cards[0].offsetWidth;
      const offset = (cardW + GAP) * currentIdx;
      track.style.transform = `translateX(-${offset}px)`;
      syncDots();
      syncBtns();
    }

    /* build dot buttons */
    function buildDots() {
      dotsWrap.innerHTML = '';
      const count = maxIdx() + 1;
      for (let i = 0; i < count; i++) {
        const b = document.createElement('button');
        b.className = 'dot' + (i === currentIdx ? ' active' : '');
        b.setAttribute('aria-label', 'Slide ' + (i + 1));
        b.addEventListener('click', () => {
          goTo(i);
          resetAuto();
        });
        dotsWrap.appendChild(b);
      }
    }

    function syncDots() {
      dotsWrap.querySelectorAll('.dot')
        .forEach((d, i) => d.classList.toggle('active', i === currentIdx));
    }

    function syncBtns() {
      prevBtn.disabled = currentIdx === 0;
      nextBtn.disabled = currentIdx >= maxIdx();
    }

    /* auto-play */
    function startAuto() {
      autoTimer = setInterval(() => {
        goTo(currentIdx < maxIdx() ? currentIdx + 1 : 0);
      }, 3500);
    }

    function resetAuto() {
      clearInterval(autoTimer);
      startAuto();
    }

    /* full initialise */
    function init() {
      perView = getPerView();
      currentIdx = Math.min(currentIdx, maxIdx());
      applyWidths();
      buildDots();
      goTo(currentIdx);
    }

    /* button events */
    prevBtn.addEventListener('click', () => {
      goTo(currentIdx - 1);
      resetAuto();
    });
    nextBtn.addEventListener('click', () => {
      goTo(currentIdx + 1);
      resetAuto();
    });

    /* touch / swipe */
    let tx = 0;
    outer.addEventListener('touchstart', e => {
      tx = e.touches[0].clientX;
    }, {
      passive: true
    });
    outer.addEventListener('touchend', e => {
      const diff = tx - e.changedTouches[0].clientX;
      if (Math.abs(diff) > 40) {
        goTo(diff > 0 ? currentIdx + 1 : currentIdx - 1);
        resetAuto();
      }
    }, {
      passive: true
    });

    /* resize */
    let rt;
    window.addEventListener('resize', () => {
      clearTimeout(rt);
      rt = setTimeout(init, 120);
    });

    init();
    startAuto();
  })();
</script>

<!-- Start Elite Insurance -->
<style>
  .elite-insurance-section {
    padding: 100px 0;
    position: relative;
    overflow: hidden;
  }

  /* Background Big Text */
  .elite-insurance-bg-text {
    position: absolute;
    top: 20px;
    left: 50%;
    transform: translateX(-50%);
    font-size: 120px;
    font-weight: 800;
    color: rgba(227, 30, 36, 0.06);
    pointer-events: none;
    white-space: nowrap;
  }

  /* Heading */
  .elite-insurance-title {
    text-align: center;
    font-size: 40px;
    font-weight: 600;
    color: var(--euphoria-blue);
    margin-bottom: 60px;
  }

  /* Cards */
  .elite-insurance-card {
    background: #2f3f7f;
    color: #fff;
    border-radius: 20px;
    padding: 35px 30px;
    height: 100%;
    position: relative;
    overflow: hidden;
  }

  /* Subtle line pattern (optional effect) */
  .elite-insurance-card::after {
    content: "";
    position: absolute;
    inset: 0;
    background-image: linear-gradient(rgba(255, 255, 255, 0.05) 1px, transparent 1px),
      linear-gradient(90deg, rgba(255, 255, 255, 0.05) 1px, transparent 1px);
    background-size: 40px 40px;
    opacity: 0.2;
  }

  /* Card Text */
  .elite-insurance-card p {
    font-size: 18px;
    margin-bottom: 15px;
    position: relative;
    z-index: 2;
  }

  /* Image Card */
  .elite-insurance-image-card {
    border-radius: 20px;
    overflow: hidden;
    height: 100%;
    background: #fff;
  }

  .elite-insurance-image-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  /* Responsive */
  /* --- Elite Insurance Mobile Styles --- */

  @media (max-width: 991px) {
    .elite-insurance-section {
      padding: 60px 0;
      /* Reduced padding for mobile */
    }

    .elite-insurance-bg-text {
      font-size: 60px;
      /* Scaled background text */
      top: 40px;
    }

    .elite-insurance-title {
      font-size: 32px;
      margin-bottom: 40px;
    }

    /* Adjust the center image card height for tablets */
    .elite-insurance-image-card {
      height: 350px;
      order: -1;
      /* Move the image to the top of the stack on mobile/tablet */
    }

    .elite-insurance-card {
      padding: 25px;
    }
  }

  @media (max-width: 767px) {
    .elite-insurance-bg-text {
      font-size: 45px;
      top: 25px;
    }

    .elite-insurance-title {
      font-size: 26px;
    }

    .elite-insurance-card p {
      font-size: 15px;
      /* Better readability on small screens */
      line-height: 1.6;
      text-align: center;
      /* Centered text often looks cleaner in single column */
    }

    .elite-insurance-image-card {
      height: 280px;
      margin-bottom: 10px;
    }

    /* Ensure the row is flex to use the 'order' property */
    .elite-insurance-section .row {
      display: flex;
      flex-direction: column;
    }

    /* Specific stacking order: Image -> Left Card -> Right Card */
    .col-lg-4:nth-child(2) {
      order: 1;
    }

    /* Image first */
    .col-lg-4:nth-child(1) {
      order: 2;
    }

    /* Left content second */
    .col-lg-4:nth-child(3) {
      order: 3;
    }

    /* Right content last */
  }

  @media (max-width: 480px) {
    .elite-insurance-bg-text {
      letter-spacing: 2px;
      font-size: 60px;
    }
  }
</style>

<section class="elite-insurance-section">

  <!-- Background Text -->
  <div class="elite-insurance-bg-text">Protection</div>

  <div class="container">

    <!-- Title -->
    <h2 class="elite-insurance-title">Elite Insurance</h2>

    <div class="row g-4 align-items-stretch">

      <!-- Left Card -->
      <div class="col-lg-4">
        <div class="elite-insurance-card">
          <p>
            We provide access to premium life and general insurance products from IRDAI-approved insurers,
            ensuring regulatory compliance, transparency, and reliability.
          </p>
          <p>
            From high-value life insurance coverage and estate planning solutions to asset protection,
            health coverage, and business risk management, our elite insurance advisory focuses on safeguarding
            both personal and corporate wealth.
          </p>
          <p>
            Enhance your financial security with tailored insurance solutions designed to protect what matters most.
          </p>
        </div>
      </div>

      <!-- Center Image -->
      <div class="col-lg-4">
        <div class="elite-insurance-image-card">
          <img src="assets/img/elite-insurance.png" alt="">
        </div>
      </div>

      <!-- Right Card -->
      <div class="col-lg-4">
        <div class="elite-insurance-card">
          <p>
            Elite Insurance Solutions in India are designed for high-net-worth individuals, business owners,
            and families seeking comprehensive financial protection and wealth preservation.
          </p>
          <p>
            Our approach goes beyond basic coverage by offering customised insurance planning strategies aligned
            with your lifestyle, assets, liabilities, and long-term financial objectives.
          </p>
          <p>
            We help you safeguard your wealth, protect your family, and ensure long-term peace of mind
            with strategic insurance planning.
          </p>
        </div>
      </div>

    </div>

  </div>

</section>

<!-- Start insurance swipe section -->
<style>
  .insurance-split-section {
    padding: 100px 0;
    background: #f3f6fb;
  }

  /* Wrapper */
  .insurance-split-wrapper {
    border-radius: 20px;
    overflow: hidden;
  }

  /* Image */
  .insurance-split-image {
    position: relative;
    height: 100%;
    min-height: 420px;
  }

  .insurance-split-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  /* Gradient Overlay */
  .insurance-split-image::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(90deg,
        rgba(37, 53, 111, 0.75),
        rgba(37, 53, 111, 0.2),
        transparent);
  }

  /* Content */
  .insurance-split-content {
    background: #fff;
    padding: 45px;
    height: 100%;
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
  }

  /* Title */
  .insurance-split-title {
    font-size: 30px;
    font-weight: 700;
    color: var(--euphoria-blue);
    margin-bottom: 20px;
  }

  /* Intro Text */
  .insurance-split-text {
    font-size: 15px;
    line-height: 1.8;
    color: var(--text-dark);
    margin-bottom: 20px;
  }

  /* Points List */
  .insurance-split-list {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  /* Each Point */
  .insurance-split-list li {
    background: #f8faff;
    padding: 14px 18px;
    border-radius: 10px;
    margin-bottom: 12px;
    font-size: 14px;
    color: var(--text-dark);
    display: flex;
    align-items: center;
    transition: all 0.3s ease;
    border: 1px solid transparent;
  }

  /* Icon */
  .insurance-split-list li::before {
    content: "✔";
    color: var(--euphoria-red);
    font-weight: bold;
    margin-right: 10px;
  }

  /* Hover Effect */
  .insurance-split-list li:hover {
    background: #ffffff;
    border-color: var(--euphoria-blue);
    transform: translateX(6px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
  }

  /* Responsive */
  /* --- Insurance Solutions Mobile Styles --- */

  @media (max-width: 991px) {
    .insurance-split-section {
      padding: 60px 0;
    }

    /* Scale the background "Security" text */
    .insurance-split-section .about-title-bg {
      font-size: 6rem !important;
      top: -30px !important;
    }

    .insurance-split-image {
      min-height: 300px;
      height: 300px;
      margin-bottom: 0;
    }

    /* Ensure the wrapper handles the column stack correctly */
    .insurance-split-wrapper {
      display: flex;
      flex-direction: column;
    }

    /* Change the gradient overlay for top-to-bottom stack */
    .insurance-split-image::after {
      background: linear-gradient(to bottom,
          rgba(37, 53, 111, 0.4),
          transparent);
    }
  }

  @media (max-width: 767px) {
    .insurance-split-content {
      padding: 30px 20px;
    }

    /* Force the 2-column list to stack vertically on mobile */
    .insurance-split-content .row .col-6 {
      width: 100%;
      flex: 0 0 100%;
    }

    .insurance-split-title {
      font-size: 24px;
      text-align: center;
    }

    .insurance-split-text {
      text-align: center;
    }

    .insurance-split-list li {
      font-size: 13px;
      padding: 12px;
    }
  }

  @media (max-width: 480px) {
    .insurance-split-section .about-title-bg {
      font-size: 5rem !important;
      top: 29px !important;
    }

    .insurance-split-image {
      height: 220px;
      min-height: 220px;
    }

    .insurance-split-list li:hover {
      transform: none;
      /* Disable horizontal hover shift on tiny screens to avoid overflow */
    }
  }
</style>

<section class="insurance-split-section about-section">
  <div class="about-title-bg">Security</div>

  <div class="container">
    <div class="row align-items-center">
      <h2 class="about-title h1">Insurance Solution</h2>
    </div>
  </div>

  <div class="container">

    <div class="row g-0 insurance-split-wrapper">

      <!-- Image -->
      <div class="col-lg-6 px-3">
        <div class="insurance-split-image">
          <img src="assets/img/general-insurance.png" alt="">
        </div>
      </div>

      <!-- Content -->
      <div class="col-lg-6 px-3">
        <div class="insurance-split-content">

          <h2 class="insurance-split-title">
            General Insurance Solutions
          </h2>

          <p class="insurance-split-text">
            Protect your health, vehicles, property, and business with comprehensive general insurance solutions including health plans
            (individual, family floater, senior citizen, critical illness, maternity, OPD, and top-up), motor insurance (private, commercial, and
            third-party), and asset protection like fire and marine insurance. These plans are designed to cover medical expenses,
            accidents, damages, and unforeseen risks, ensuring complete financial security in every aspect of life.
          </p>

          <div class="row">
            <div class="col-6">
              <ul class="insurance-split-list">
                <li>Health Insurance (Individual & Family Floater)</li>
                <li>Senior Citizen & Critical Illness Plans</li>
                <li>Maternity & OPD Coverage Options</li>
                <li>Motor Insurance (Private & Commercial)</li>
              </ul>
            </div>
            <div class="col-6">
              <ul class="insurance-split-list">
                <li>Fire & Marine Asset Protection</li>
                <li>Business Risk & Property Insurance</li>
                <li>Flexible Coverage with Claim Support</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ═══════════════════════════════
     Start Real Estate Property
  ═══════════════════════════════ -->
<style>
  .realestate-section {
    padding: 100px 0;
  }

  .image-wrapper {
    position: relative;
    border-radius: 25px;
    overflow: hidden;
  }

  .image-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 25px;
  }

  .content-card {
    position: absolute;
    top: 50%;
    right: -50px;
    transform: translateY(-50%);
    background: rgba(255, 255, 255, 0.95);
    padding: 40px;
    border-radius: 20px;
    max-width: 800px;
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
  }

  .content-card h3 {
    font-weight: 600;
    color: #1e2a55;
  }

  .content-card p {
    font-size: 17px;
    color: #6c757d;
    line-height: 1.6;
  }

  /* --- Real Estate Mobile Styles --- */

  @media (max-width: 991px) {
    .realestate-section {
      padding: 60px 0;
    }

    /* Scale the background "Properties" text */
    .realestate-section .about-title-bg {
      font-size: 6rem !important;
      top: -30px !important;
    }

    /* Remove relative positioning constraints to let child cards stack */
    .image-wrapper {
      overflow: visible;
      border-radius: 20px;
      background: transparent;
      display: flex;
      flex-direction: column;
    }

    .image-wrapper img {
      height: 300px;
      /* Control image height on smaller screens */
      border-radius: 20px;
    }

    .content-card {
      position: relative;
      /* Break out of absolute positioning */
      top: 0;
      right: 0;
      transform: none;
      margin: -40px 15px 0;
      /* Pull the card UP to overlap the image slightly */
      padding: 30px 25px;
      background: #fff;
      z-index: 2;
      text-align: center;
      max-width: auto;
    }

    .content-card p {
      font-size: 15px;
    }
  }

  @media (max-width: 575px) {
    .realestate-section .about-title-bg {
      font-size: 4rem !important;
      top: 40px !important;
    }

    .image-wrapper img {
      height: 220px;
    }

    .content-card {
      margin: -30px 10px 0;
      /* Adjust overlap for tiny screens */
      padding: 25px 15px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .content-card p {
      font-size: 14px;
      line-height: 1.5;
      margin-bottom: 12px;
    }
  }
</style>

<section class="realestate-section about-section">

  <div class="about-title-bg">Properties</div>

  <div class="container">
    <div class="row align-items-center">
      <h2 class="about-title h1">Real Estate</h2>
    </div>
  </div>

  <div class="container">
    <div class="image-wrapper">

      <!-- Image -->
      <img src="assets/img/real-estate.png" alt="Real Estate">

      <!-- Content Card -->
      <div class="content-card">

        <p>
          Real Estate Investment Advisory focuses on helping individuals and investors build stable, high-value property portfolios through strategic planning and market-driven insights.
        </p>
        <p>
          We provide expert guidance across residential, commercial, and investment properties, ensuring every acquisition aligns with your financial goals, risk appetite, and long-term strategy.
        </p>
        <p>
          Whether you are looking for rental income, capital growth, or portfolio diversification, our solutions are designed to deliver sustainable and secure investment outcomes.
        </p>
      </div>
    </div>
  </div>
</section>

<?php
include_once('elements/faqs.php');
include_once('elements/footer.php');
?>