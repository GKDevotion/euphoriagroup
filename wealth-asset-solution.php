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

  <?php
  if( false ){
    ?>
    <div class="d-flex justify-content-center mb-3 container position-relative" style="z-index:2">

      <div class="formation-nav-wrapper" data-aos="fade-up" data-aos-duration="800">

          <a href="#stock-market-section" class="nav-link-pill nav-link-item nav-active-pill">Stick market</a>
          <div class="nav-sep"></div>

          <a href="#insuarance-section" class="nav-link-pill nav-link-item">Insuarance</a>
          <div class="nav-sep"></div>
          
          <a href="#real-estate-section" class="nav-link-pill nav-link-item">Real Estate</a>
          <div class="nav-sep"></div>
          
          <a href="#section" class="nav-link-pill nav-link-item">FAQ</a>  

      </div>
      <?php
  } ?>

  </div> 

  <!-- Tab Content -->
  <div id="tab1" class="corporate-content-box container-fluid active">
    <div class="row align-items-center">
      <div class="col-md-5">
        <img src="assets/img/stock-coin.png" class="illustration">
      </div>
      <div class="col-md-7 text-content">
        <p style="font-size: 18px; font-family: 'Poppins', sans-serif;">
          Wealth & Asset Solutions are designed to help individuals, families, and business owners grow, protect, and strategically manage their financial assets. Our comprehensive advisory approach focuses on wealth creation, capital preservation, risk management, and long-term financial security.
        </p>
        <p style="font-size: 18px; font-family: 'Poppins', sans-serif;">
          We provide tailored strategies across multiple asset classes and financial instruments to ensure diversified growth and structured wealth planning aligned with your financial goals.
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
    font-family: "Poppins", sans-serif;
    font-size: 16px;
  }

  .stock-list li {
    margin-bottom: 10px;
    font-family: "Poppins", sans-serif;
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

<section class="stock-section" id="stock-market-section">
  <div class="container-fluid">
    <div class="row align-items-center g-4">

      <!-- Left Image -->
      <div class="col-lg-6 py-5">
        <div class="stock-img">
          <img src="assets/img/stock-graph.png" alt="Stock Market">
        </div>
      </div>
      <style>
          /* Watermark ghost text */
            /* ── Card ── */
          .stock-card {
            position: relative;
            background: #ffffff;
            border-radius: 18px;
            padding: 61px 48px 48px;
            box-shadow: 0 6px 40px rgba(13, 34, 73, 0.08);
            overflow: hidden;
          }
      
      
          /* Watermark ghost text */
          .stock-card::before {
          content: "Trading";
          position: absolute;
          top: 20px;
          left: 35px;
          font-family: "Anek Kannada", "Poppins", sans-serif;
          font-size: 156px;
          font-weight: 700;
          color: #CC2831;
          opacity: 0.2;
          letter-spacing: -2px;
          pointer-events: none;
          user-select: none;
          line-height: 1;
          }
      
          /* ── Title ── */
          .stock-title {
          font-family: "Anek Kannada", "Poppins", sans-serif;
          font-size: clamp(1.6rem, 3vw, 2.6rem);
          font-weight: 700; 
          line-height: 1.25;
          margin-bottom: 5.25rem;
          position: relative; 
          color: #25356F;
          }

          .stock-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 14px 24px;
          }
      
        
      
          .btn-invest {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #25356F;
            color: #fff;
            font-family: 'DM Sans', sans-serif;
            font-weight: 600;
            font-size: 0.95rem;
            padding: 14px 28px;
            border-radius: 8px;
            border: none;
            text-decoration: none;
            transition: background 0.25s, transform 0.2s;
            margin-top: 36px;
          }
      
          .btn-invest:hover {
            background: #25356F;
            transform: translateY(-2px);
            color: #fff;
          }
      
          .btn-invest svg {
            width: 16px;
            height: 16px;
            stroke: currentColor;
            fill: none;
            stroke-width: 2.5;
            stroke-linecap: round;
            stroke-linejoin: round;
          }
      
          /* ── Responsive tweaks ── */
          @media (max-width: 575px) {
            .stock-card {
              padding: 36px 24px 32px;
            }
            .stock-card::before {
              font-size: 72px;
            }
            .stock-list {
              grid-template-columns: 1fr;
            }
          }

          @media (max-width: 991px) {
            /* Re-adjust watermark position for tablet */
              .stock-card::before {  
                top: 15px;
                font-size: 80px;
              }

              .stock-title{
                font-size: 1.2rem;
              }

          }

      </style>
      <!-- Right Content -->
      <div class="col-lg-6 px-md-5 px-3">
        <div class="stock-card">
          <h3 class="stock-title">Stock Market Opportunities</h3>
          <p>
            India is one of the fastest-growing capital markets in the world, offering significant opportunities for wealth creation through equities, IPOs, derivatives, and diversified investment instruments. Our Indian Stock Broker Services provide seamless access to the Indian Stock Market, enabling resident investors, NRIs, and global clients to participate confidently in India's dynamic financial ecosystem.
          </p>
          <p>
            We offer strategic stock market investment advisory in India, portfolio diversification strategies, and risk-managed trading solutions aligned with your financial goals. From account opening and regulatory compliance to market research and transaction support, we ensure a structured and transparent investment experience.
          </p>

          <ul class="stock-list mt-4">
            <li>
              <img src="assets/img/icon/Checke.png" alt="">
              Expert Stock Market Advisory
            </li>
            <li>
              <img src="assets/img/icon/Checke.png" alt="">
              Real-Time Market Insights
            </li>
            <li>
              <img src="assets/img/icon/Checke.png" alt="">
              Diversified Investment Strategies
            </li>
            <li>
              <img src="assets/img/icon/Checke.png" alt="">
              Secure &amp; Transparent Trading
            </li>
          </ul>

            <!-- CTA -->
          <a href="#" class="btn-invest">
            Start Investing
            <!-- Arrow-up-right icon -->
            <svg viewBox="0 0 24 24">
              <line x1="7" y1="17" x2="17" y2="7"/>
              <polyline points="7 7 17 7 17 17"/>
            </svg>
          </a>
 
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

  /* ── CARD ── */
  .capital-market-card {
    position: relative;
    flex-shrink: 0;
    border-radius: 16px;
    overflow: hidden;
    cursor: pointer;
    border: 1.5px solid var(--card-border);
    box-shadow: 0 4px 20px rgba(37, 53, 111, 0.08);
    background: #fff;
    transition: transform .35s ease, box-shadow .35s ease;
    animation: cardReveal .6s ease both;
    display: flex;
    flex-direction: column;
    height: auto; /* Remove fixed height */
  }

  .capital-market-card img.card-bg {
    width: 100%;
    height: 200px;        /* Fixed image height */
    object-fit: cover;
    display: block;
    transition: transform .5s ease;
    flex-shrink: 0;
  }

  .capital-market-card:hover img.card-bg {
    transform: scale(1.07);
  }

  /* Remove the overlay since we no longer need gradient over image */
  .card-overlay {
    display: none;
  }

  .card-body-content {
    padding: 16px;
    background: #fff;
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .card-body-content h5 {
    font-size: clamp(14px, 1.6vw, 17px);
    font-family: "Anek Kannada", "Poppins", sans-serif;
    font-weight: 700;
    text-align: center;
    margin-bottom: 8px;
    line-height: 1.25;
    color: var(--euphoria-blue);
  }

  .card-body-content p {
    font-size: 12.5px;
    text-align: center;
    font-family: "Poppins", sans-serif;
    color: #444;
    line-height: 1.55;
    margin: 0;
  }

  /* ── RESPONSIVE CARD WIDTHS ── */
  @media (max-width: 991px) {
    .capital-market-card {
      flex: 0 0 280px;
    }
    .capital-market-card img.card-bg {
      height: 170px;
    }
  }

  @media (max-width: 767px) {
    .capital-market-card {
      flex: 0 0 85vw;
    }
    .capital-market-card img.card-bg {
      height: 180px;
    }
  }

  @media (max-width: 480px) {
    .capital-market-card {
      flex: 0 0 90vw;
    }
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
      top: -31px !important;
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
      font-size: 1.2rem;
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
             
            <div class="card-body-content">
              <h5>Equity (Share) Investment</h5>
              <p>Strategic equity investment services in the Indian stock market are designed for long-term wealth creation and capital appreciation. We provide research-backed stock selection, market insights, and disciplined investment strategies aligned with your financial objectives.</p>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="capital-market-card">
            <img class="card-bg" src="assets/img/capital-intraday.png" alt="Competitive Airfare Deals" />
             
            <div class="card-body-content">
              <h5>Portfolio Management (PMS)</h5>
              <p>Customised Portfolio Management Services (PMS) offering professionally managed, diversified investment portfolios tailored to your risk profile and return expectations. Our PMS solutions focus on structured asset allocation and consistent performance monitoring.</p>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="capital-market-card">
            <img class="card-bg" src="assets/img/capital-ipo.png" alt="Wide Airline Network" />
             
            <div class="card-body-content">
              <h5>Intraday & Swing Trading Support</h5>
              <p>Expert intraday and swing trading support with technical analysis, market trend insights, and risk-controlled trading strategies. We help traders capitalise on short-term price movements in the Indian equity markets.</p>
            </div>
          </div>

          <!-- Card 4 -->
          <div class="capital-market-card">
            <img class="card-bg" src="assets/img/capital-portfolio.png" alt="Corporate Travel Management" />
             
            <div class="card-body-content">
              <h5>IPO & OFS Investment Guidance</h5>
              <p>Comprehensive guidance for investing in IPOs (Initial Public Offerings) and OFS (Offer for Sale) opportunities in India. We assist in identifying high-potential listings and managing subscription processes efficiently.</p>
            </div>
          </div>

          <!-- Card 5 -->
          <div class="capital-market-card">
            <img class="card-bg" src="assets/img/capital-equity.png" alt="Easy Rescheduling" />
             
            <div class="card-body-content">
              <h5>Mutual Fund Advisory</h5>
              <p>Professional mutual fund advisory services focused on diversified investment planning, fund selection, and long-term portfolio growth across equity, debt, and hybrid schemes.</p>
            </div>
          </div>

          <!-- Card 6 -->
          <div class="capital-market-card">
            <img class="card-bg" src="assets/img/capital-intraday.png" alt="24/7 Support" />
            
            <div class="card-body-content">
              <h5>SIP (Systematic Investment Plan)</h5>
              <p>Structured SIP investment planning to build wealth consistently through disciplined, periodic investments in mutual funds. Ideal for long-term financial planning and goal-based investment strategies.</p>
            </div>
          </div>

          <!-- Card 7 -->
          <div class="capital-market-card">
            <img class="card-bg" src="assets/img/capital-intraday.png" alt="24/7 Support" />
            
            <div class="card-body-content">
              <h5>Derivatives Trading (F&O)</h5>
              <p>Specialised advisory in Futures & Options (F&O) trading with structured strategies designed for hedging, speculation, and portfolio risk management in volatile market conditions.</p>
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
    background: #25356F;
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
    font-size: 16px;
    font-family:  "Poppins";
    text-align: center;
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
      font-size: 62px;
      top: 18px;
    }

    .elite-insurance-title {
      font-size: 1.2rem;
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

<section class="elite-insurance-section" id="insuarance-section">

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
            We provide access to premium life and general insurance products from IRDAI-approved insurers, ensuring regulatory compliance, transparency, and reliability. From high-value life insurance coverage and estate planning solutions to asset protection, health coverage, and business risk management, our elite insurance advisory focuses on safeguarding both personal and corporate wealth.
          </p>
          <p>
            Enhance your financial security with tailored insurance solutions designed to protect what matters most. From life and health coverage to asset and business protection, we ensure comprehensive risk management with trusted advisory and reliable support. 
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
            Elite Insurance Solutions in India are designed for high-net-worth individuals, business owners, and families seeking comprehensive financial protection and wealth preservation. Our approach goes beyond basic coverage by offering customised insurance planning strategies aligned with your lifestyle, assets, liabilities, and long-term financial objectives.
          </p>
          <p>
            Our elite insurance services go beyond basic coverage by offering personalized plans aligned with your financial goals. We help you safeguard your wealth, protect your family, and ensure long-term peace of mind with strategic insurance planning.
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

  .security-title {
    color: var(--euphoria-blue);
    font-weight: 600;
    margin-bottom: 50px; 
    position: relative;
    z-index: 1;
    text-align: center;
    width: 100%;
  }

    .btn-real-estate {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: #25356F;
      color: #fff;
      font-family: "Anek Kannada", "Poppins";
      font-weight: 400;
      font-size: 1rem; 
      padding: 14px 28px;
      border-radius: 8px;
      border: none;
      text-decoration: none;
      transition: background 0.25s, transform 0.2s; 
    }
 
    .btn-real-estate:hover {
      background: #25356F;
      transform: translateY(-2px);
      color: #fff;
    }
 
    .btn-real-estate svg {
      width: 16px;
      height: 16px;
      stroke: currentColor;
      fill: none;
      stroke-width: 2.5;
      stroke-linecap: round;
      stroke-linejoin: round;
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

<section class="insurance-split-section d-none about-section">
  <div class="about-title-bg">Security</div>

  <div class="container">
    <div class="row align-items-center">
      <h2 class="security-title h1">Insurance Solution</h2>
    </div>
  </div>

  <div class="container">

    <div class="row g-0   insurance-split-wrapper">

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

      <style>
    
        /* ── FADE-UP ─────────────────────────────────── */
        .fade-up {
          opacity   : 0;
          transform : translateY(24px);
          transition: opacity .7s ease, transform .7s ease;
        }
        .fade-up.visible { opacity: 1; transform: none; }

        /* ── SCROLL SECTION ──────────────────────────── */
        .scroll-section {
          position: relative;
          height  : 200vh;
        }

        .sticky-stage {
          position       : sticky;
          top            : 0;
          height         : 100vh;
          display        : flex;
          align-items    : center;
          justify-content: center;
          overflow       : hidden;
          padding        : 1.5rem 3rem;
        }
 

        /* ── CARD STACK ──────────────────────────────── */
        .card-stack {
          position : relative;
          width    : 100%;
          max-width: 1320px;
          height   : min(600px, 80vh);
        }

        /* ── SINGLE STACK CARD ───────────────────────── */
        .stack-card {
          position     : absolute;
          inset        : 0;
          border-radius: 32px;
          padding      : clamp(1.5rem, 5vw, 1rem); 
          border       : 1px solid #666666;
          display      : flex;
          align-items  : center;
          overflow     : hidden;
          will-change  : transform, opacity;
        }

        /* colour themes */
        .card-white  { background: #ffffff; color: #000000; } 

        /* ── card-inner: just a full-size flex wrapper now ── */
        .stack-card .card-inner {
          display    : flex;
          align-items: center;
          width      : 100%;
          height     : 100%;
        }

        /* ── row fills full width ────────────────────── */
        .stack-card .row {
          width: 100%;
        }

        /* ── IMAGE WRAP ──────────────────────────────── */
        .card-img-wrap {
          width        : 100%;
          height       : 100%;
          border-radius: 24px; 
          overflow     : hidden;
        }

        .card-img-wrap img {
          width     : 100%;
          height    : 100%;
          object-fit: cover;
          display   : block;
        }

        /* ── CONTENT COL ─────────────────────────────── */
        .card-content-col,
        .col-md-8 {
          min-width: 0;
        }

        .card-headline {
          font-size     : 55px;
          font-family: "Anek Kannada", "Poppins", sans-serif;
          font-weight   : 700;
          letter-spacing: 0%;
          line-height   : 1.2;
          margin        : 0 0 .75rem;
        }

        .card-desc {
          font-size : 16px; 
          font-weight: 400;
          color: #666666;
          font-family: "Poppins", sans-serif;
          line-height: 1.6;
          margin    : 0 0 .4rem;
        }

        /* ── 3-COL FEATURE GRID ──────────────────────── */
        .card-features-grid {
          list-style           : none;
          padding              : 0;
          margin               : .75rem 0 1rem;
          display              : grid;
          grid-template-columns: repeat(3, 1fr);
          gap                  : 5px 10px;
        }

        .card-features-grid li {
          display      : flex;
          align-items  : center;
          font-family:  "Poppins", sans-serif;
          gap          : 5px;
          font-size    : 16px;
          font-weight  : 500;
          white-space  : nowrap;
          overflow     : hidden;
          text-overflow: ellipsis;
        }

        .card-features-grid li i {
          color      : #e879a0;
          flex-shrink: 0;
        }

        /* ── CTA BUTTON ──────────────────────────────── */
        .card-cta-solid {
          display      : inline-flex;
          align-items  : center;
          gap          : 6px;
          padding      : .65rem 1.4rem;
          border-radius: 6px;
          background   : #25356F;
          color        : #fff;
          font-weight  : 700;
          font-size    : .875rem;
          border       : none;
          cursor       : pointer;
          transition   : opacity .2s;
          white-space  : nowrap;
        }
        .card-cta-solid:hover { opacity: .85; }
        @media (min-width: 768px) {
          .card-icon-col {
            display        : flex;
            justify-content: center;
            align-items    : center;
          }
        }
        .icon-box {
          width          : 280px;
          height         : 280px;
          border-radius  : 48px;
          background     : rgba(0,0,0,.07);
          display        : flex;
          align-items    : center;
          justify-content: center;
          font-size      : 5rem;
        }
        .icon-box i { opacity: .8; }
 
      </style>

      <section class="scroll-section security-insurance" id="cardSection">

          <div class="security-insurance-heading">
            <span class="bg-text">Security</span>
            <h2>Insurance Solution</h2>
          </div>
          <style>
                .security-insurance-heading {
                    position: relative;
                    text-align: center;
                    padding: 60px 0 0px;
                    overflow: hidden;
                  }
                  .security-insurance-heading .bg-text {
                    position: absolute;
                    top: 70%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    font-size: clamp(48px, 8vw, 100px);
                    font-family: "Anek Kannada", "Poppins", sans-serif;
                    font-weight: 800;
                    color: rgba(230, 57, 70, 0.07);
                    white-space: nowrap;
                    pointer-events: none;
                    letter-spacing: 2px;
                    z-index: 0;
                  }
                  .security-insurance-heading h2 {
                    position: relative;
                    z-index: 1;
                    font-family: "Anek Kannada", "Poppins", sans-serif;
                    font-weight: 700;
                    font-size: 2rem;
                    color: #25356F;
                  }

                  @media (max-width: 991px) {
                    .security-insurance-heading .bg-text {
                        font-size: 100px !important; 
                        top: 65%; 
                    }

                  .security-insurance-heading h2{
                    font-size: 1.2rem;
                    margin-bottom: 40px;                  
                  }
                }

          </style>
          <div class="sticky-stage">
             
            <!-- ── CARD STACK ────────────────────────── -->
            <div class="card-stack" id="cardStack">
     
              <!-- CARD 1 — Insurance -->
              <div class="stack-card card-white">
                
                <div class="card-inner">
                  <div class="row g-4 w-100 m-0">

                    <!-- LEFT: Image col-4 -->
                    <div class="col-md-4 p-0">
                      <div class="card-img-wrap">
                        <img src="assets/img/life-insurance-bg.jpeg" alt="Life Insurance" />
                      </div>
                    </div>

                   
                    <div class="col-md-8">
                        <h2 class="card-headline">Life Insurance</h2>
                        <p class="card-desc">
                              Secure your family’s future with a wide range of life insurance solutions including term plans, whole life policies, endowment plans, money-back plans, child plans, retirement plans, and ULIPs. These plans offer comprehensive protection, long-term savings, and wealth creation with flexible options tailored to your financial goals.
                        </p>
                        <p class="card-desc mt-2">
                              Choose from IRDAI-approved insurers and benefit from high coverage at competitive premiums along with tax advantages under Sections 80C and 10(10D) of the Income Tax Act. Ensure financial stability, future security, and peace of mind with smart and reliable life insurance planning.
                        </p>
                        <ul class="card-features-grid">
                              <li>
                                <img src="assets/img/icon/Checke.png" alt="">
                                 Term Life Insurance
                              </li>
                              <li>
                                <img src="assets/img/icon/Checke.png" alt="">
                                 Whole Life Insurance Plans
                              </li>
                              <li>
                                <img src="assets/img/icon/Checke.png" alt="">
                                 Endowment Plans
                              </li>
                              <li>
                                <img src="assets/img/icon/Checke.png" alt="">
                                 Money-Back Policy
                              </li>
                              <li>
                                <img src="assets/img/icon/Checke.png" alt="">
                                 Retirement &amp; Pension Plans
                              </li>
                              <li>
                                <img src="assets/img/icon/Checke.png" alt="">
                                 Child Education Insurance Plans
                              </li>
                              <li>
                                <img src="assets/img/icon/Checke.png" alt="">
                                 Unit Linked Insurance Plan
                              </li>
                        </ul>
                        <button class="card-cta-solid">
                              Secure Your Future <i class="bi bi-arrow-up-right"></i>
                        </button>
                      </div>

                  </div>
                </div>
              </div>

              <!-- CARD 2 — Transfer Funds -->
              <div class="stack-card card-white">
                <div class="card-inner">
                  <div class="row g-4 w-100 m-0">

                    <!-- LEFT: Image col-4 -->
                    <div class="col-md-4 p-0">
                      <div class="card-img-wrap">
                        <img src="assets/img/general-insurance-bg.png" alt="Life Insurance" />
                      </div>
                    </div>

                   
                    <div class="col-md-8">
                        <h2 class="card-headline">General Insurance</h2>
                        <p class="card-desc">
                              Protect your health, vehicles, property, and business with comprehensive general insurance solutions including health plans (individual, family floater, senior citizen, critical illness, maternity, OPD, and top-up), motor insurance (private, commercial, and third-party), and asset protection like fire and marine insurance. These plans are designed to cover medical expenses, accidents, damages, and unforeseen risks, ensuring complete financial security in every aspect of life.
                        </p>
                        <p class="card-desc mt-2">
                              Choose from trusted insurers offering wide coverage, flexible options, and efficient claim support at competitive premiums. From safeguarding your family’s health to protecting business operations and digital risks like cyber threats, general insurance provides reliable and essential protection for a secure future.
                        </p>
                        <ul class="card-features-grid">
                              <li>
                                <img src="assets/img/icon/Checke.png" alt="">
                                 Individual Health Insurance
                              </li>
                              <li>
                                <img src="assets/img/icon/Checke.png" alt="">
                                 Family Floater Health Insurance
                              </li>
                              <li>
                                <img src="assets/img/icon/Checke.png" alt="">
                                 Senior Citizen Health Insurance
                              </li>
                              <li>
                                <img src="assets/img/icon/Checke.png" alt="">
                                 Critical Illness Insurance
                              </li>
                              <li>
                                <img src="assets/img/icon/Checke.png" alt="">
                                 Top-Up & Super Top-Up Plans
                              </li>
                              <li>
                                <img src="assets/img/icon/Checke.png" alt="">
                                 Maternity Insurance
                              </li>
                              <li>
                                <img src="assets/img/icon/Checke.png" alt="">
                                 OPD Coverage Plans
                              </li>
                              <li>
                                <img src="assets/img/icon/Checke.png" alt="">
                                 Vehicle Insurance
                              </li>
                              <li>
                                <img src="assets/img/icon/Checke.png" alt="">
                                 Commercial Vehicle Insurance
                              </li>
                              <li>
                                <img src="assets/img/icon/Checke.png" alt="">
                                 Third-Party Insurance
                              </li>
                              <li>
                                <img src="assets/img/icon/Checke.png" alt="">
                                 Fire Insurance
                              </li>
                              <li>
                                <img src="assets/img/icon/Checke.png" alt="">
                                 Marine Insurance
                              </li> 
                        </ul>
                        <button class="card-cta-solid">
                              View Policies <i class="bi bi-arrow-up-right"></i>
                        </button>
                      </div>

                  </div>
                </div>
              </div>
      
            </div><!-- /card-stack -->
            
          </div><!-- /sticky-stage -->
          
      </section>

      <script>
                /* ── References ──────────────────────────────────────── */
                const section = document.getElementById('cardSection');
                const cardEls = [...document.querySelectorAll('.stack-card')];
                const dotEls  = [...document.querySelectorAll('.nav-dot')];
                const total   = cardEls.length;

                /* ── Helpers ─────────────────────────────────────────── */
                const clamp = (v, lo, hi) => Math.max(lo, Math.min(hi, v));
                const lerp  = (a, b, t)   => a + (b - a) * t;
                const remap = (v, inLo, inHi, outLo, outHi) => {
                  if (inHi === inLo) return outLo;
                  return lerp(outLo, outHi, clamp((v - inLo) / (inHi - inLo), 0, 1));
                };

                /* ── Scroll handler ──────────────────────────────────── */
                function onScroll() {
                  const rect     = section.getBoundingClientRect();
                  const progress = clamp(-rect.top / (section.offsetHeight - window.innerHeight), 0, 1);

                  cardEls.forEach((el, i) => {

                    const start = i / total;
                    const end   = (i + 1) / total;
                    const prev  = (i - 1) / total;

                    let opacity, translateY, scale;

                    if (progress < prev) {
                      /* hidden below — not yet reached */
                      opacity = 0; translateY = 0; scale = 0;

                    } else if (progress < start) {
                      /* entering — rising from bottom */
                      opacity    = remap(progress, prev, start, 0, 1);
                      translateY = remap(progress, prev, start, 50, 0);
                      scale      = remap(progress, prev, start, 1, 1);

                    } else if (i === total - 1 || progress < end) {
                      /* active — fully visible */
                      opacity = 1; translateY = 0; scale = 1;

                    } else {
                      /* exiting — shrink and lift */
                      opacity    = remap(progress, start, end, 1, 0);
                      translateY = remap(progress, start, end, 0, -12);
                      scale      = remap(progress, start, end, 1, 0.1);
                    }

                    el.style.transform = `translateY(${translateY}%) scale(${scale})`;
                    el.style.opacity   = opacity;
                    el.style.zIndex    = (progress >= prev && progress < end) ? total + 1 : total - i;
                  });

                  /* update active dot */
                  const active = Math.min(Math.floor(progress * total), total - 1);
                  dotEls.forEach((d, i) => d.classList.toggle('active', i === active));
                }

                window.addEventListener('scroll', onScroll, { passive: true });
                onScroll();

                /* ── Dot click → scroll to card ──────────────────────── */
                dotEls.forEach((dot, i) => {
                  dot.addEventListener('click', () => {
                    const target = section.offsetTop + (i / total) * (section.offsetHeight - window.innerHeight);
                    window.scrollTo({ top: target, behavior: 'smooth' });
                  });
                });

                /* ── Intro fade-up ───────────────────────────────────── */
                const io = new IntersectionObserver(
                  entries => entries.forEach(e => e.isIntersecting && e.target.classList.add('visible')),
                  { threshold: 0.2 }
                );
                document.querySelectorAll('.fade-up').forEach(el => io.observe(el));
      </script>

<!-- ═══════════════════════════════
     Start Real Estate Property
  ═══════════════════════════════ -->
<style>
  .realestate-section {
    padding: 100px 0;
  }

  .section-title-bg {
    position: absolute;
    top: 0px;
    left: 50%;
    transform: translateX(-50%);
    font-size: 9rem;
    font-weight: 600;
    color: var(--red-blur);
    z-index: 0;
    font-family: "Anek Kannada", "Poppins", sans-serif;
    width: 100%;
    text-align: center;
    white-space: nowrap;
  }

  .section-title {
    color: var(--euphoria-blue);
    font-weight: 600;
    margin-bottom: 50px;
    margin-top: 15px;
    position: relative;
    z-index: 1;
    text-align: center;
    width: 100%;
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
    padding: 65px;
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
    font-family: "Poppins";
    color: #666666;
    line-height: 1.6;
  }

  /* --- Real Estate Mobile Styles --- */

  @media (max-width: 991px) {
    .realestate-section {
      padding: 60px 0;
    }

    .section-title-bg{
        font-size: 5rem;
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

<section class="realestate-section about-section" id="real-estate-section">

  <div class="container">
    <div class="image-wrapper">

      <!-- Image -->
      <img src="assets/img/real-estate.png" alt="Real Estate">

      <!-- Content Card -->
      <div class="content-card">
        <div class="section-title-bg">Properties</div>

        <div class="container">
          <div class="row align-items-center">
            <h2 class="section-title">Real Estate</h2>
          </div>
        </div>
        <p>
          Real Estate Investment Advisory focuses on helping individuals and investors build stable, high-value property portfolios through strategic planning and market-driven insights.
        </p>
        <p>
          We provide expert guidance across residential, commercial, and investment properties, ensuring every acquisition aligns with your financial goals, risk appetite, and long-term strategy.
        </p>
        <p>
          Whether you are looking for rental income, capital growth, or portfolio diversification, our solutions are designed to deliver sustainable and secure investment outcomes.
        </p>

           <!-- CTA -->
          <a href="#" class="btn-real-estate">
            Explore Properties
            <!-- Arrow-up-right icon -->
            <svg viewBox="0 0 24 24">
              <line x1="7" y1="17" x2="17" y2="7"/>
              <polyline points="7 7 17 7 17 17"/>
            </svg>
          </a>
      </div>


    </div>
  </div>
</section>

<style>
 
      /* ── Section Heading ── */
    .section-heading {
      position: relative;
      text-align: center;
      padding: 60px 0 50px;
      overflow: hidden;
    }
    .section-heading .bg-text {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: clamp(48px, 8vw, 96px);
      font-family: "Anek Kannada", "Poppins", sans-serif;
      font-weight: 800;
      color: rgba(230, 57, 70, 0.07);
      white-space: nowrap;
      pointer-events: none;
      letter-spacing: 2px;
      z-index: 0;
    }
    .section-heading h2 {
      position: relative;
      z-index: 1;
      font-family: "Anek Kannada", "Poppins", sans-serif;
      font-weight: 700;
      font-size: 2rem;
      color: #25356F;
    }

    /* ── Grid Wrapper ── */
    .services-grid-wrapper {
      padding: 0 40px 60px;
    }

    /* ── The 5-column grid with cross borders ── */
    .services-table {
      width: 100%;
      border-collapse: collapse;
    }

    .services-table td {
      width: 20%;
      padding: 36px 24px 36px;
      text-align: center;
      vertical-align: top;
      /* right border for columns 2, 3, 4 (between cells) */
    }

    /* Vertical dividers: after col 1, 2, 3, 4 */
    .services-table td:not(:last-child) {
      border-right: 1px solid #d0d0d0;
    }

    /* Horizontal divider between row 1 and row 2 */
    .services-table tr:first-child td {
      border-bottom: 1px solid #d0d0d0;
    }

    /* ── Card Content ── */
    

    .service-title {
      font-weight: 600;
      font-size: 20px;
      color:  #25356F;
      margin-bottom: 10px;
    }

    .service-desc {
      font-size: 16px;
      color: #666666;
      line-height: 1.5;
      margin: 0;
    }

    /* 📱 Mobile & Tablet Fix */
@media (max-width: 992px) {

  .services-table,
  .services-table tbody,
  .services-table tr,
  .services-table td {
    display: block;
    width: 100%;
  }

  .services-table tr {
    display: flex;
    flex-wrap: wrap;
    border-bottom: 1px solid #e0e0e0;
  }

  .services-table td {
    width: 50%; /* 2 columns on tablet */
    padding: 20px 12px;
    border: none !important;
    border-bottom: 1px solid #eee;
  }
}

/* 📱 Small Mobile */
@media (max-width: 576px) {

  .services-table td {
    width: 100%; /* 1 column on mobile */
    text-align: center;
  }

  .services-grid-wrapper {
    padding: 0 15px 40px;
  }

  .section-heading {
    padding: 40px 0 30px;
  }

  .section-heading .bg-text {
    font-size: 40px;
  }
}
</style>

<section class="infrastructure-section">
  <div class="container">

    <div class="section-heading">
      <span class="bg-text">Infrastructure</span>
      <h2>Real Estate Services</h2>
    </div>

    <div class="services-grid-wrapper">
        <table class="services-table">
            <tbody>

              <!-- ROW 1 -->
              <tr>
                <!-- Property Buying -->
                <td>
                  <div class="mb-3">
                    <img src="assets/img/icon/infrastructure-1.png" alt="">
                  </div>
                  <div class="service-title">Property Buying</div>
                  <p class="service-desc">Complete assistance in identifying, evaluating, negotiating, and acquiring residential, commercial, and investment properties with complete due diligence support.</p>
                </td>

                <!-- Property Selling -->
                <td>
                  <div class="mb-3">
                    <img src="assets/img/icon/infrastructure-2.png" alt="">
                  </div>
                  <div class="service-title">Property Selling</div>
                  <p class="service-desc">Strategic marketing, buyer sourcing, pricing advisory, and negotiation support to ensure maximum value and smooth property transactions.</p>
                </td>

                <!-- Property Rental -->
                <td>
                  <div class="mb-3">
                    <img src="assets/img/icon/infrastructure-3.png" alt="">
                  </div>
                  <div class="service-title">Property Rental</div>
                  <p class="service-desc">Comprehensive rental solutions connecting property owners with verified tenants while ensuring secure agreements and timely occupancy.</p>
                </td>

                <!-- Residential Leasing -->
                <td>
                  <div class="mb-3">
                    <img src="assets/img/icon/infrastructure-4.png" alt="">
                  </div>
                  <div class="service-title">Residential Leasing</div>
                  <p class="service-desc">Expert leasing solutions for apartments, villas, and residential properties with structured agreements and tenant screening support.</p>
                </td>

                <!-- Commercial Leasing -->
                <td>
                  <div class="mb-3">
                    <img src="assets/img/icon/infrastructure-5.png" alt="">
                  </div>
                  <div class="service-title">Commercial Leasing</div>
                  <p class="service-desc">Professional leasing services for offices, retail spaces, and commercial properties with market-driven pricing and contract management.</p>
                </td>
              </tr>

              <!-- ROW 2 -->
              <tr>
                <!-- Property Management -->
                <td>
                  <div class="mb-3">
                    <img src="assets/img/icon/infrastructure-6.png" alt="">
                  </div>
                  <div class="service-title">Property Management</div>
                  <p class="service-desc">Complete property management, including tenant coordination, rent collection, maintenance supervision, and asset performance monitoring.</p>
                </td>

                <!-- Property Marketing -->
                <td>
                  <div class="mb-3">
                    <img src="assets/img/icon/infrastructure-7.png" alt="">
                  </div>
                  <div class="service-title">Property Marketing</div>
                  <p class="service-desc">Targeted marketing strategies using digital platforms, listings, and network outreach to attract qualified buyers and tenants.</p>
                </td>

                <!-- Property Valuation -->
                <td>
                  <div class="mb-3">
                    <img src="assets/img/icon/infrastructure-8.png" alt="">
                  </div>
                  <div class="service-title">Property Valuation</div>
                  <p class="service-desc">Accurate property assessment and valuation reports based on market trends, location analysis, and asset condition.</p>
                </td>

                <!-- Real Estate Advisory -->
                <td>
                  <div class="mb-3">
                    <img src="assets/img/icon/infrastructure-9.png" alt="">
                  </div>
                  <div class="service-title">Real Estate Advisory</div>
                  <p class="service-desc">Strategic real estate guidance to help clients make informed decisions based on market insights and investment objectives.</p>
                </td>

                <!-- Investment Consulting -->
                <td>
                  <div class="mb-3">
                    <img src="assets/img/icon/infrastructure-10.png" alt="">
                  </div>
                  <div class="service-title">Investment Consulting</div>
                  <p class="service-desc">Customised investment strategies focused on maximising returns, capital appreciation, and portfolio diversification.</p>
                </td>
              </tr>

            </tbody>
        </table>
    </div>

  </div>

</section>

<?php
$sideStickyMenu = [
  [
    'url' => 'stock-market-section',
    'img' => '',
    'title' => 'Stock Market'
  ],
  [
    'url' => 'insuarance-section',
    'img' => '',
    'title' => 'Insuarance'
  ],
  [
    'url' => 'real-estate-section',
    'img' => '',
    'title' => 'Real Estate'
  ],
  [
    'url' => 'faqs',
    'img' => '',
    'title' => 'FAQs'
  ],
];
include_once('elements/side-sticky-menu.php');
include_once('elements/faqs.php');
include_once('elements/footer.php');
?>