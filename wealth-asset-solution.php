<?php
include_once ('elements/header.php');
?>

<style>
    .hero-section {
        position: relative;
        height: 70vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        overflow: hidden;
        margin-top: 120px;
    }

    .hero-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: brightness(0.75);
    }

    img, svg {
        vertical-align: middle;
    }

    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.6));
        backdrop-filter: blur(2px);
    }

    .hero-blur {
        position: absolute;
        width: 250px;
        height: 250px;
        background: var(--red-blur);
        filter: blur(90px);
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1;
    }

    .hero-content {
        position: relative;
        z-index: 2;
    }

    .hero-title {
        font-size: clamp(28px, 5vw, 48px);
        font-weight: 700;
        color: var(--euphoria-blue);
    }

    .hero-subtitle {
        font-size: 16px;
        color: var(--text-dark);
        margin-top: 10px;
    }

    @media(max-width:768px){
        .hero-section{
            height:60vh;
        }
        .hero-subtitle{
            font-size:14px;
        }
    }
</style>
<!-- Hero Section -->
<section class="hero-section">

    <!-- Background Image -->
    <img src="https://picsum.photos/1920/800?business" class="hero-bg" alt="Corporate">

    <!-- Overlay -->
    <div class="hero-overlay"></div>

    <!-- Blur effect -->
    <div class="hero-blur"></div>

    <!-- Content -->
    <div class="hero-content container">
        <h1 class="hero-title animate__animated animate__fadeInDown">
            Wealth & Asset Solutions
        </h1>
        <p class="hero-subtitle animate__animated animate__fadeInUp">
            Smart Strategies for growing and protecting your wealth
        </p>
    </div>

</section>

<style>
  .custom-tabs{
      display:flex;
      flex-wrap:wrap;
      gap:10px;
      justify-content:center;
      margin-bottom:40px;
  }

  .custom-tabs button{
      border:none;
      padding:10px 10px;
      border-radius:10px;
      background:#eee;
      color:#333;
      font-size:14px;
      transition:0.3s;
  }

  .custom-tabs button.active{
      background:var(--euphoria-blue);
      color:#fff;
  }

  .custom-tabs button:hover{
      background:var(--euphoria-blue);
      color:#fff;
  }

  /* Content Section */
  .content-section{
      padding:40px 0;
  }

  .corporate-content-box{
      display:none;
  }

  .corporate-content-box.active{
      display:block;
  }

  .illustration{
      max-width:100%;
  }

  .text-content{
      color:var(--text-dark);
      font-size:15px;
      line-height:1.8;
  }
</style>

<div class="container content-section">

    <!-- Tabs -->
    <div class="custom-tabs">
        <button class="tab-btn active" data-tab="tab1">Stick market</button>
        <button class="tab-btn" data-tab="tab2">Insuarance</button>
        <button class="tab-btn" data-tab="tab1">Real Estate</button>
        <button class="tab-btn" data-tab="tab2">FAQ</button>
    </div>

    <!-- Tab Content -->
    <div id="tab1" class="corporate-content-box active">
        <div class="row align-items-center">
            <div class="col-md-5">
                <img src="https://picsum.photos/500/400?city" class="illustration">
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

    <div id="tab2" class="corporate-content-box">
        <div class="row align-items-center">
            <div class="col-md-5">
                <img src="https://picsum.photos/500/400?tour" class="illustration">
            </div>
            <div class="col-md-7 text-content">
                <p>
                    We provide complete accounting, bookkeeping, GST compliance, and taxation services tailored for growing businesses.
                </p>
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

  .stock-market-section {
    padding: 70px 0 80px;
    position: relative;
    overflow: hidden;
    color: var(--text-dark);
  }

  /* ── LEFT IMAGE ── */
  .stock-market-img-col {
    position: relative;
  }

  .stock-market-main-img {
    width: 100%;
    height: 100%;
    min-height: 420px;
    object-fit: cover;
    border-radius: 20px;
    display: block;
    box-shadow: 0 20px 60px rgba(37,53,111,0.14);
  }

  /* ── RIGHT CONTENT ── */
  .stock-market-content-col {
    position: relative;
    padding-left: 10px;
  }

  /* watermark */
  .stock-market-watermark {
    position: absolute;
    top: -10px; right: -10px;
    
    font-size: clamp(60px, 10vw, 120px);
    font-weight: 700;
    color: var(--euphoria-red);
    opacity: .07;
    letter-spacing: 4px;
    white-space: nowrap;
    pointer-events: none;
    user-select: none;
    z-index: 0;
    line-height: 1;
  }

  /* stock-market car image top-right */
  .stock-market-car-img {
    position: absolute;
    top: -18px; right: 0;
    width: clamp(120px, 16vw, 200px);
    filter: drop-shadow(4px 8px 16px rgba(37,53,111,0.18));
    animation: stock-marketFloat 4s ease-in-out infinite;
    z-index: 2;
  }
  @keyframes stock-marketFloat {
    0%,100% { transform: translateY(0); }
    50%      { transform: translateY(-8px); }
  }

  .stock-market-inner {
    position: relative;
    z-index: 1;
  }

  /* title */
  .stock-market-title {
    
    font-size: clamp(26px, 3.5vw, 40px);
    font-weight: 700;
    color: var(--euphoria-blue);
    margin-bottom: 16px;
    line-height: 1.15;
  }

  /* bold subtitle */
  .stock-market-bold-sub {
    font-size: clamp(14px, 1.5vw, 18px);
    font-weight: 600;
    color: var(--text-dark);
    margin-bottom: 14px;
    line-height: 1.5;
  }

  /* description paragraph */
  .stock-market-desc {
    font-size: clamp(12.5px, 1.15vw, 14px);
    color: #666;
    line-height: 1.8;
    margin-bottom: 28px;
  }

  /* ── FEATURES GRID ── */
  .stock-market-features {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 10px 16px;
  }

  /* each feature row */
  .stock-market-feat {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 10px 14px;
    border-radius: 10px;
    cursor: default;
    transition:
      background   .28s ease,
      box-shadow   .28s ease,
      transform    .28s ease;
    border: 1.5px solid transparent;
  }

  /* hover: highlight */
  .stock-market-feat:hover {
    background: #fff;
    border-color: var(--card-border);
    box-shadow:
      0 6px 22px rgba(37,53,111,0.10),
      0 1px 4px  rgba(37,53,111,0.06);
    transform: translateX(4px);
  }

  /* checkmark icon */
  .stock-market-check {
    flex-shrink: 0;
    width: 22px; height: 22px;
    border-radius: 50%;
    background: var(--red-blur);
    display: flex; align-items: center; justify-content: center;
    transition: background .28s ease, transform .28s ease;
  }
  .stock-market-feat:hover .stock-market-check {
    background: var(--euphoria-red);
    transform: scale(1.15);
  }
  .stock-market-check svg {
    width: 12px; height: 12px;
    stroke: var(--euphoria-red);
    fill: none;
    stroke-width: 2.5;
    stroke-linecap: round;
    stroke-linejoin: round;
    transition: stroke .28s ease;
  }
  .stock-market-feat:hover .stock-market-check svg { stroke: #fff; }

  /* feature label */
  .stock-market-feat-label {
    font-size: clamp(12px, 1.1vw, 14px);
    font-weight: 500;
    color: var(--text-dark);
    transition: color .28s ease;
  }
  .stock-market-feat:hover .stock-market-feat-label {
    color: var(--euphoria-blue);
    font-weight: 600;
  }

  /* ── RESPONSIVE ── */
  @media (max-width: 991px) {
    .stock-market-main-img   { min-height: 300px; }
    .stock-market-car-img    { width: 130px; top: -10px; }
    .stock-market-content-col { padding-left: 0; margin-top: 32px; }
  }
  @media (max-width: 576px) {
    .stock-market-features { grid-template-columns: 1fr; }
    .stock-market-car-img  { width: 110px; }
  }
</style>

<section class="stock-market-section bg-white">
  <div class="container">
    <div class="row align-items-center g-4">
 
      <!-- LEFT: Image -->
      <div class="col-lg-5 stock-market-img-col">
        <img
          src="https://images.unsplash.com/photo-1590736969596-f6a8c1e40b37?w=700&q=80"
          alt="stock-market Booking"
          class="stock-market-main-img"
        />
      </div>
 
      <!-- RIGHT: Content -->
      <div class="col-lg-7 stock-market-content-col">
 
        <!-- watermark -->
        <div class="stock-market-watermark">Trading</div>
 
        <!-- floating stock-market car -->
        <img
          src="https://www.pngmart.com/files/7/Yellow-stock-market-PNG-Pic.png"
          alt="stock-market Car"
          class="stock-market-car-img d-none d-md-block"
          onerror="this.style.display='none'"
        />
 
        <div class="stock-market-inner">
          <h2 class="stock-market-title">Stock Market Oppurtunities</h2>
 
          <p class="stock-market-bold-sub">
            Professional stock-market booking services for local and outstation travel
            with safe and timely transportation.
          </p>
 
          <p class="stock-market-desc">
            We make it easy to book reliable stock-markets for local and outstation travel with a quick and simple
            booking process. Customers can choose from a range of vehicles, including hatchbacks, sedans,
            SUVs, and luxury cars, based on their needs and budget. Our verified drivers ensure safe, comfortable
            journeys with punctual pickups and professional service. We offer transparent pricing with no hidden
            charges and 24/7 stock-market booking for airport transfers, business trips, and personal travel.
          </p>
 
          <!-- Feature points -->
          <div class="stock-market-features">
 
            <div class="stock-market-feat">
              <div class="stock-market-check">
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <span class="stock-market-feat-label">Easy Online stock market Booking</span>
            </div>
 
            <div class="stock-market-feat">
              <div class="stock-market-check">
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <span class="stock-market-feat-label">Affordable stock-market Fare Options</span>
            </div>
 
            <div class="stock-market-feat">
              <div class="stock-market-check">
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <span class="stock-market-feat-label">Local &amp; Outstation stock-market Services</span>
            </div>
 
            <div class="stock-market-feat">
              <div class="stock-market-check">
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <span class="stock-market-feat-label">24/7 stock-market Availability</span>
            </div>
 
          </div><!-- /stock-market-features -->
        </div><!-- /stock-market-inner -->
      </div><!-- /col -->
 
    </div><!-- /row -->
  </div><!-- /container -->
</section>

<!-- Capital market Section -->
<style>
  .capital-market-section {
    position: relative;
    padding: 64px 0 80px;
    background: var(--bg-light);
    overflow: hidden;
  }

  /* Watermark */
  .capital-market-section::before {
    content: "Destinations";
    position: absolute;
    top: 0; left: 50%;
    transform: translateX(-50%);
    
    font-size: clamp(60px, 12vw, 140px);
    font-weight: 700;
    color: rgba(37,53,111,0.06);
    letter-spacing: 6px;
    white-space: nowrap;
    pointer-events: none;
    user-select: none;
    z-index: 0;
    line-height: 1;
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
    left: -10px; top: -18px;
    width: clamp(110px, 16vw, 210px);
    filter: drop-shadow(4px 8px 18px rgba(37,53,111,0.18));
    animation: floatPlane 4s ease-in-out infinite;
  }
  @keyframes floatPlane {
    0%,100% { transform: translateY(0)    rotate(-2deg); }
    50%      { transform: translateY(-10px) rotate(0deg); }
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
    transition: transform 0.5s cubic-bezier(.4,0,.2,1);
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
    box-shadow: 0 4px 20px rgba(37,53,111,0.08);
    background: #111;
    transition: transform .35s ease, box-shadow .35s ease;
    animation: cardReveal .6s ease both;
  }
  .capital-market-card:nth-child(1) { animation-delay:.05s; }
  .capital-market-card:nth-child(2) { animation-delay:.14s; }
  .capital-market-card:nth-child(3) { animation-delay:.23s; }
  .capital-market-card:nth-child(4) { animation-delay:.32s; }
  .capital-market-card:nth-child(5) { animation-delay:.41s; }
  .capital-market-card:nth-child(6) { animation-delay:.50s; }
  @keyframes cardReveal {
    from { opacity:0; transform:translateY(28px); }
    to   { opacity:1; transform:translateY(0); }
  }
  .capital-market-card:hover {
    transform: translateY(-6px) scale(1.02);
    box-shadow: 0 16px 40px rgba(37,53,111,0.20);
  }

  .capital-market-card img.card-bg {
    width:100%; height:100%;
    object-fit:cover;
    display:block;
    opacity:.88;
    transition: transform .5s ease;
  }
  .capital-market-card:hover img.card-bg { transform:scale(1.07); }

  .card-overlay {
    position:absolute; inset:0;
    background: linear-gradient(
      to bottom,
      transparent 25%,
      rgba(37,53,111,.68) 68%,
      rgba(37,53,111,.93) 100%
    );
  }

  .card-body-content {
    position:absolute;
    bottom:0; left:0; right:0;
    padding:20px 18px 22px;
    color:#000;
    background-color: #fff;
  }
  .card-body-content h5 {
    
    font-size:clamp(14px,1.6vw,18px);
    font-weight:700;
    margin-bottom:7px;
    line-height:1.25;
  }
  .card-body-content p {
    font-size:clamp(11px,1.1vw,13px);
    color:#000
    line-height:1.5;
  }

  /* hover badge */
  .card-accent {
    position:absolute; top:14px; right:14px;
    width:34px; height:34px;
    background:var(--euphoria-red);
    border-radius:50%;
    display:flex; align-items:center; justify-content:center;
    opacity:0; transform:scale(.6);
    transition:opacity .3s, transform .3s;
  }
  .capital-market-card:hover .card-accent { opacity:1; transform:scale(1); }
  .card-accent svg { width:16px; height:16px; fill:#fff; }

  /* ── ARROWS ── */
  .carousel-btn {
    position:absolute;
    top:50%; transform:translateY(-50%);
    z-index:10;
    width:44px; height:44px;
    border-radius:50%;
    border:none;
    background:var(--euphoria-blue);
    color:#fff;
    display:flex; align-items:center; justify-content:center;
    cursor:pointer;
    box-shadow:0 4px 16px rgba(37,53,111,0.28);
    transition:background .25s, transform .25s;
  }
  .carousel-btn:hover:not(:disabled) {
    background:var(--euphoria-red);
    transform:translateY(-50%) scale(1.1);
  }
  .carousel-btn:disabled { opacity:.3; cursor:default; }
  .carousel-btn.prev { left:-22px; }
  .carousel-btn.next { right:-22px; }

  @media (max-width:767px) {
    .plane-img { display:none; }
    .carousel-btn.prev { left:-8px; }
    .carousel-btn.next { right:-8px; }
  }

  /* ── DOTS ── */
  .carousel-dots {
    display:flex;
    justify-content:center;
    gap:8px;
    margin-top:32px;
  }
  .dot {
    width:10px; height:10px;
    border-radius:50%;
    background:rgba(37,53,111,.22);
    border:none;
    cursor:pointer;
    padding:0;
    transition:background .3s, transform .3s;
  }
  .dot.active {
    background:var(--euphoria-blue);
    transform:scale(1.35);
  }
  .dot:hover:not(.active) { background:var(--euphoria-red); }
</style>

<section class="capital-market-section">
  <div class="container position-relative">
 
    <!-- HEADER -->
    <div class="section-header">
      <img
        src="https://png.pngtree.com/png-clipart/20230107/original/pngtree-blue-passenger-aircraft-png-image_8879803.png"
        alt="Airplane" class="plane-img d-none d-md-block"
      />
      <h2 class="section-title">Flight Booking</h2>
      <p class="section-subtitle">
        Affordable domestic flight booking services with flexible options and competitive fares.
      </p>
    </div>
 
    <!-- CAROUSEL -->
    <div class="position-relative px-3">
      <button class="carousel-btn prev" id="prevBtn" aria-label="Previous">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg>
      </button>
 
      <div class="carousel-outer" id="carouselOuter">
        <div class="cards-track" id="cardsTrack">
 
          <!-- Card 1 -->
          <div class="capital-market-card">
            <img class="card-bg" src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=700&q=80" alt="Domestic Flights"/>
            <div class="card-overlay"></div>
            <div class="card-accent"><svg viewBox="0 0 24 24"><path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/></svg></div>
            <div class="card-body-content">
              <h5>Domestic Flights</h5>
              <p>We provide seamless booking for domestic flights, connecting you to major destinations in India with trusted airline partners.</p>
            </div>
          </div>
 
          <!-- Card 2 -->
          <div class="capital-market-card">
            <img class="card-bg" src="https://images.unsplash.com/photo-1569154941061-e231b4725ef1?w=700&q=80" alt="Competitive Airfare Deals"/>
            <div class="card-overlay"></div>
            <div class="card-accent"><svg viewBox="0 0 24 24"><path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/></svg></div>
            <div class="card-body-content">
              <h5>Competitive Airfare Deals</h5>
              <p>Our platform helps you access competitive flight fares and special travel deals, ensuring low-cost travel planning for all.</p>
            </div>
          </div>
 
          <!-- Card 3 -->
          <div class="capital-market-card">
            <img class="card-bg" src="https://images.unsplash.com/photo-1488085061387-422e29b40080?w=700&q=80" alt="Wide Airline Network"/>
            <div class="card-overlay"></div>
            <div class="card-accent"><svg viewBox="0 0 24 24"><path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/></svg></div>
            <div class="card-body-content">
              <h5>Wide Airline Network</h5>
              <p>We collaborate with leading global airlines to offer a wide selection of flight options, schedules, and routes for convenient planning.</p>
            </div>
          </div>
 
          <!-- Card 4 -->
          <div class="capital-market-card">
            <img class="card-bg" src="https://images.unsplash.com/photo-1521791136064-7986c2920216?w=700&q=80" alt="Corporate Travel Management"/>
            <div class="card-overlay"></div>
            <div class="card-accent"><svg viewBox="0 0 24 24"><path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/></svg></div>
            <div class="card-body-content">
              <h5>Corporate Travel Management</h5>
              <p>Our services support corporate travel needs with efficient booking management, travel policy compliance, and cost control.</p>
            </div>
          </div>
 
          <!-- Card 5 -->
          <div class="capital-market-card">
            <img class="card-bg" src="https://images.unsplash.com/photo-1548574505-5e239809ee19?w=700&q=80" alt="Easy Rescheduling"/>
            <div class="card-overlay"></div>
            <div class="card-accent"><svg viewBox="0 0 24 24"><path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/></svg></div>
            <div class="card-body-content">
              <h5>Easy Rescheduling</h5>
              <p>We offer hassle-free flight rescheduling and cancellation options to ensure a smooth travel experience whenever plans change.</p>
            </div>
          </div>
 
          <!-- Card 6 -->
          <div class="capital-market-card">
            <img class="card-bg" src="https://images.unsplash.com/photo-1540339832862-474599807836?w=700&q=80" alt="24/7 Support"/>
            <div class="card-overlay"></div>
            <div class="card-accent"><svg viewBox="0 0 24 24"><path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/></svg></div>
            <div class="card-body-content">
              <h5>24/7 Customer Support</h5>
              <p>Our dedicated support team is available round the clock to assist with bookings, queries, and any travel emergencies.</p>
            </div>
          </div>
 
        </div><!-- /cards-track -->
      </div><!-- /carousel-outer -->
 
      <button class="carousel-btn next" id="nextBtn" aria-label="Next">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
      </button>
    </div>
 
    <!-- DOTS -->
    <div class="carousel-dots" id="dotsContainer"></div>
 
  </div>
</section>

<script>
  (() => {
    const GAP        = 20;
    const track      = document.getElementById('cardsTrack');
    const outer      = document.getElementById('carouselOuter');
    const prevBtn    = document.getElementById('prevBtn');
    const nextBtn    = document.getElementById('nextBtn');
    const dotsWrap   = document.getElementById('dotsContainer');
    const cards      = Array.from(track.querySelectorAll('.capital-market-card'));
    const total      = cards.length;
  
    let perView    = 4;
    let currentIdx = 0;
    let autoTimer  = null;
  
    /* cards visible at this viewport width */
    function getPerView() {
      const w = window.innerWidth;
      if (w <= 480)  return 1;
      if (w <= 767)  return 2;
      if (w <= 1199) return 3;
      return 4;
    }
  
    /* last valid index */
    function maxIdx() { return Math.max(0, total - perView); }
  
    /* set each card's pixel width so they fill the outer div exactly */
    function applyWidths() {
      const outerW = outer.offsetWidth;
      const cardW  = (outerW - GAP * (perView - 1)) / perView;
      cards.forEach(c => { c.style.width = cardW + 'px'; });
    }
  
    /* move track */
    function goTo(idx) {
      idx = Math.max(0, Math.min(idx, maxIdx()));
      currentIdx = idx;
      const cardW  = cards[0].offsetWidth;
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
        b.addEventListener('click', () => { goTo(i); resetAuto(); });
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
    function resetAuto() { clearInterval(autoTimer); startAuto(); }
  
    /* full initialise */
    function init() {
      perView    = getPerView();
      currentIdx = Math.min(currentIdx, maxIdx());
      applyWidths();
      buildDots();
      goTo(currentIdx);
    }
  
    /* button events */
    prevBtn.addEventListener('click', () => { goTo(currentIdx - 1); resetAuto(); });
    nextBtn.addEventListener('click', () => { goTo(currentIdx + 1); resetAuto(); });
  
    /* touch / swipe */
    let tx = 0;
    outer.addEventListener('touchstart', e => { tx = e.touches[0].clientX; }, { passive: true });
    outer.addEventListener('touchend',   e => {
      const diff = tx - e.changedTouches[0].clientX;
      if (Math.abs(diff) > 40) { goTo(diff > 0 ? currentIdx + 1 : currentIdx - 1); resetAuto(); }
    }, { passive: true });
  
    /* resize */
    let rt;
    window.addEventListener('resize', () => { clearTimeout(rt); rt = setTimeout(init, 120); });
  
    init();
    startAuto();
  })();
</script>

<!-- Start Elite Insurance -->
<style>
  .elite-insurance-section {
      background: #f3f6fb;
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
      font-size: 34px;
      font-weight: 700;
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
      background-image: linear-gradient(rgba(255,255,255,0.05) 1px, transparent 1px),
                        linear-gradient(90deg, rgba(255,255,255,0.05) 1px, transparent 1px);
      background-size: 40px 40px;
      opacity: 0.2;
  }

  /* Card Text */
  .elite-insurance-card p {
      font-size: 15px;
      line-height: 1.8;
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
  @media (max-width: 991px) {
      .elite-insurance-bg-text {
          font-size: 70px;
      }

      .elite-insurance-title {
          font-size: 28px;
      }
  }

  @media (max-width: 767px) {
      .elite-insurance-bg-text {
          font-size: 50px;
          top: 10px;
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
                    <img src="https://picsum.photos/500/500?insurance" alt="">
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
    padding: 90px 0;
    background: #ffffff;
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
      background: linear-gradient(
          90deg,
          rgba(37,53,111,0.75),
          rgba(37,53,111,0.2),
          transparent
      );
  }

  /* Content */
  .insurance-split-content {
      background: #fff;
      padding: 45px;
      height: 100%;
      box-shadow: 0 15px 40px rgba(0,0,0,0.08);
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
      box-shadow: 0 8px 20px rgba(0,0,0,0.08);
  }

  /* Responsive */
  @media (max-width: 991px) {
      .insurance-split-content {
          padding: 30px;
      }

      .insurance-split-title {
          font-size: 26px;
      }
  }

  @media (max-width: 576px) {
      .insurance-split-title {
          font-size: 22px;
      }

      .insurance-split-text {
          font-size: 14px;
      }
  }
</style>

<section class="insurance-split-section">
  <div class="container">

      <div class="row g-0 insurance-split-wrapper">

          <!-- Image -->
          <div class="col-lg-6">
              <div class="insurance-split-image">
                  <img src="https://picsum.photos/800/600?insurance" alt="">
              </div>
          </div>

          <!-- Content -->
          <div class="col-lg-6">
              <div class="insurance-split-content">

                  <h2 class="insurance-split-title">
                      General Insurance Solutions
                  </h2>

                  <p class="insurance-split-text">
                      Protect your health, vehicles, property, and business with our complete range of insurance solutions designed for total financial security.
                  </p>

                  <ul class="insurance-split-list">
                      <li>Health Insurance (Individual & Family Floater)</li>
                      <li>Senior Citizen & Critical Illness Plans</li>
                      <li>Maternity & OPD Coverage Options</li>
                      <li>Motor Insurance (Private & Commercial)</li>
                      <li>Fire & Marine Asset Protection</li>
                      <li>Business Risk & Property Insurance</li>
                      <li>Flexible Coverage with Claim Support</li>
                  </ul>

              </div>
          </div>

      </div>

  </div>
</section>

<!-- ═══════════════════════════════
     Start Real Estate Property
  ═══════════════════════════════ -->
<style>
  .re-section {
    padding: 64px 0 80px;
    background: var(--bg-light);
    overflow: hidden;
  }

  /* Inner container: constrained width with side padding */
  .re-inner {
    max-width: 1180px;
    margin: 0 auto;
    padding: 0 24px;
  }

  /* ═══════════════════════════════
      LAYOUT GRID
  ═══════════════════════════════ */
  .re-grid {
    display: grid;
    grid-template-columns: 1.05fr 1fr;
    align-items: center;
    gap: 0;
    position: relative;
  }

  @media (max-width: 991px) {
    .re-grid {
      grid-template-columns: 1fr;
      gap: 0;
    }
  }

  /* ═══════════════════════════════
      LEFT — PHOTO
  ═══════════════════════════════ */
  .re-photo-wrap {
    position: relative;
    z-index: 1;
    padding: 20px 0 20px 0;
  }

  .re-photo-frame {
    border-radius: 22px;
    overflow: hidden;
    box-shadow:
      0 24px 72px rgba(37,53,111,.13),
      0 4px 16px rgba(37,53,111,.08);
    position: relative;
    aspect-ratio: 4 / 3;
    background: #cdd5e8;
    animation: re-slideLeft .75s cubic-bezier(.22,.68,0,1.2) both;
  }

  .re-photo-frame img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    display: block;
    transition: transform .6s ease;
  }
  .re-photo-frame:hover img {
    transform: scale(1.03);
  }

  /* Corner accent tag */
  .re-photo-tag {
    position: absolute;
    bottom: 22px;
    left: 22px;
    background: var(--euphoria-blue);
    color: #fff;
    font-size: .72rem;
    font-weight: 600;
    letter-spacing: .08em;
    text-transform: uppercase;
    padding: 6px 14px;
    border-radius: 6px;
    z-index: 3;
    display: flex;
    align-items: center;
    gap: 7px;
  }
  .re-photo-tag::before {
    content: '';
    width: 7px; height: 7px;
    border-radius: 50%;
    background: #4ade80;
    flex-shrink: 0;
    animation: re-pulse 1.6s ease-in-out infinite;
  }
  @keyframes re-pulse {
    0%, 100% { opacity: 1; transform: scale(1); }
    50%       { opacity: .5; transform: scale(.7); }
  }

  /* Decorative shape behind photo */
  .re-photo-bg-shape {
    position: absolute;
    inset: 0;
    border-radius: 28px;
    background: linear-gradient(135deg, rgba(37,53,111,.07) 0%, rgba(227,30,36,.05) 100%);
    transform: translate(12px, 12px);
    z-index: 0;
  }

  @media (max-width: 991px) {
    .re-photo-wrap {
      padding: 0;
      margin-bottom: -30px; /* overlap with card below */
    }
    .re-photo-frame {
      border-radius: 18px;
      aspect-ratio: 16/9;
    }
  }
  @media (max-width: 575px) {
    .re-photo-frame { aspect-ratio: 4/3; border-radius: 14px; }
  }

  /* ═══════════════════════════════
      RIGHT — CONTENT CARD
  ═══════════════════════════════ */
  .re-card {
    position: relative;
    z-index: 2;
    background: var(--card-bg);
    border-radius: 20px;
    padding: 52px 52px 52px 64px;
    margin-left: -72px; /* overlap the photo */
    box-shadow:
      0 20px 60px rgba(37,53,111,.10),
      0 2px 8px rgba(37,53,111,.06);
    overflow: hidden;
    animation: re-slideRight .75s .1s cubic-bezier(.22,.68,0,1.2) both;
  }

  /* Watermark word */
  .re-card-watermark {
    position: absolute;
    top: 12px;
    left: -10px;
    font-family: 'Cormorant Garamond', serif;
    font-size: clamp(4rem, 8vw, 7.5rem);
    font-weight: 700;
    color: rgba(37,53,111,.06);
    line-height: 1;
    white-space: nowrap;
    user-select: none;
    pointer-events: none;
    letter-spacing: -.02em;
  }

  /* Heading */
  .re-card-title {
    font-family: 'Cormorant Garamond', serif;
    font-size: clamp(1.8rem, 3.5vw, 2.6rem);
    font-weight: 700;
    color: var(--euphoria-blue);
    line-height: 1.15;
    margin-bottom: 6px;
    position: relative;
    z-index: 1;
  }

  /* Red underline accent */
  .re-card-accent {
    width: 42px; height: 3px;
    background: var(--euphoria-red);
    border-radius: 2px;
    margin-bottom: 22px;
    position: relative;
    z-index: 1;
  }

  /* Body paragraphs */
  .re-card-body {
    position: relative;
    z-index: 1;
  }
  .re-card-body p {
    font-size: clamp(.84rem, 1.5vw, .94rem);
    color: var(--text-body);
    line-height: 1.8;
    margin-bottom: 16px;
  }
  .re-card-body p:last-child { margin-bottom: 0; }

  /* CTA button */
  .re-card-cta {
    display: inline-flex;
    align-items: center;
    gap: 9px;
    margin-top: 28px;
    background: var(--euphoria-blue);
    color: #fff;
    font-size: .82rem;
    font-weight: 600;
    letter-spacing: .04em;
    text-transform: uppercase;
    padding: 12px 26px;
    border-radius: 8px;
    border: none;
    cursor: pointer;
    text-decoration: none;
    transition: background .25s ease, transform .2s ease, box-shadow .25s ease;
    position: relative;
    z-index: 1;
  }
  .re-card-cta svg {
    width: 16px; height: 16px;
    stroke: currentColor; fill: none;
    stroke-width: 2.2; stroke-linecap: round; stroke-linejoin: round;
    transition: transform .25s ease;
  }
  .re-card-cta:hover {
    background: var(--euphoria-red);
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(227,30,36,.28);
    color: #fff;
  }
  .re-card-cta:hover svg { transform: translateX(4px); }

  /* Responsive card */
  @media (max-width: 991px) {
    .re-card {
      margin-left: 0;
      border-radius: 0 0 18px 18px;
      padding: 40px 32px 40px;
      box-shadow: 0 16px 48px rgba(37,53,111,.12);
    }
    .re-card-watermark { font-size: 4.5rem; }
  }
  @media (max-width: 575px) {
    .re-card {
      padding: 32px 22px 36px;
      border-radius: 0 0 14px 14px;
    }
    .re-card-watermark { font-size: 3.2rem; }
  }

  /* ═══════════════════════════════
      ANIMATIONS
  ═══════════════════════════════ */
  @keyframes re-slideLeft {
    from { opacity: 0; transform: translateX(-40px); }
    to   { opacity: 1; transform: translateX(0); }
  }
  @keyframes re-slideRight {
    from { opacity: 0; transform: translateX(40px); }
    to   { opacity: 1; transform: translateX(0); }
  }
</style>

<section class="re-section">
  <div class="re-inner">
    <div class="re-grid">
 
      <!-- LEFT: Photo -->
      <div class="re-photo-wrap">
        <div class="re-photo-bg-shape"></div>
        <div class="re-photo-frame">
          <img
            src="https://images.unsplash.com/photo-1486325212027-8081e485255e?w=900&q=85&fit=crop&crop=center"
            alt="Real Estate Properties – city skyline"
          />
          <div class="re-photo-tag">
            <span>Premium Properties</span>
          </div>
        </div>
      </div>
 
      <!-- RIGHT: Content Card -->
      <div class="re-card">
        <div class="re-card-watermark">Properties</div>
 
        <h2 class="re-card-title">Real Estate</h2>
        <div class="re-card-accent"></div>
 
        <div class="re-card-body">
          <p>
            Real Estate Investment Advisory focuses on helping individuals and investors build stable,
            high-value property portfolios through strategic planning and market-driven insights. Real estate
            remains one of the most reliable asset classes for long-term wealth creation, passive income
            generation, and capital appreciation.
          </p>
          <p>
            We provide expert guidance across residential, commercial, and investment properties, ensuring
            every acquisition aligns with your financial goals, risk appetite, and long-term strategy. From
            property evaluation and due diligence to investment structuring and portfolio diversification, our
            approach is focused on maximising returns while minimising risk.
          </p>
          <p>
            Whether you are looking for rental income, capital growth, or portfolio diversification,
            our real estate solutions are designed to deliver sustainable and secure investment outcomes.
          </p>
 
          <a href="#" class="re-card-cta">
            Explore Properties
            <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </a>
        </div>
      </div>
 
    </div>
  </div>
</section>

<!-- ══ Real Estate Services ══ -->
<style>

  .re-serrvice-section {
    
    background: var(--bg-light);
    padding: 64px 0 80px;
    position: relative;
    overflow: hidden;
    color: var(--text-dark);
  }

  /* ── HEADER ── */
  .re-service-header {
    position: relative;
    z-index: 2;
    text-align: center;
    margin-bottom: 48px;
  }

  .re-service-watermark {
    position: absolute;
    top: -10px; left: 50%;
    transform: translateX(-50%);
    
    font-size: clamp(60px, 12vw, 140px);
    font-weight: 700;
    color: var(--euphoria-red);
    opacity: .07;
    letter-spacing: 5px;
    white-space: nowrap;
    pointer-events: none;
    user-select: none;
    z-index: 0;
    line-height: 1;
  }

  .re-service-title {
    
    font-size: clamp(26px, 4vw, 44px);
    font-weight: 700;
    color: var(--euphoria-blue);
    position: relative;
    z-index: 1;
  }

  /* ── BODY: left image + right grid ── */
  .re-service-body {
    display: flex;
    gap: 32px;
    align-items: flex-start;
  }

  /* small plane top-left */
  .re-service-plane {
    position: absolute;
    top: -30px; left: -10px;
    width: clamp(60px, 8vw, 110px);
    filter: drop-shadow(2px 4px 10px rgba(37,53,111,0.18));
    animation: hpPlane 6s ease-in-out infinite;
  }
  @keyframes hpPlane {
    0%,100% { transform: translate(0,0) rotate(-5deg); }
    50%      { transform: translate(8px,-8px) rotate(0deg); }
  }

  /* ── RIGHT: 3×2 GRID ── */
  .re-service-right {
    flex: 1;
    min-width: 0;
  }

  .re-service-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    /* thin dividers via border on cells */
  }

  /* ── GRID CELL ── */
  .re-service-cell {
    padding: 28px 26px 26px;
    border: 1px solid var(--card-border);
    position: relative;
    cursor: default;
    transition:
      background  .3s ease,
      box-shadow  .3s ease,
      transform   .3s ease;
  }

  /* remove double borders */
  .re-service-cell:nth-child(-n+3)          { border-top: none; }
  .re-service-cell:nth-child(3n+1)          { border-left: none; }
  .re-service-cell:nth-child(3n)            { border-right: none; }
  .re-service-cell:nth-child(n+4)           { border-bottom: none; }

  /* top accent on hover */
  .re-service-cell::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 3px;
    background: linear-gradient(90deg, var(--euphoria-blue), var(--euphoria-red));
    transform: scaleX(0);
    transform-origin: left;
    transition: transform .38s cubic-bezier(.4,0,.2,1);
  }

  /* HOVER */
  .re-service-cell:hover {
    background: #fff;
    box-shadow:
      0 8px 30px rgba(37,53,111,0.11),
      0 2px 6px  rgba(37,53,111,0.06);
    transform: translateY(-4px);
    z-index: 1;
    border-radius: 4px;
  }
  .re-service-cell:hover::before { transform: scaleX(1); }

  /* cell title */
  .re-service-cell-title {
    
    font-size: clamp(13px, 1.3vw, 16px);
    font-weight: 700;
    color: var(--euphoria-blue);
    margin-bottom: 12px;
    line-height: 1.35;
    text-align: center;
    transition: color .28s ease;
  }
  .re-service-cell:hover .re-service-cell-title { color: var(--euphoria-red); }

  /* cell text */
  .re-service-cell-text {
    font-size: clamp(11px, 1vw, 13px);
    color: #777;
    line-height: 1.75;
    text-align: center;
  }

  /* ── RESPONSIVE ── */
  @media (max-width: 991px) {
    .re-service-body    { flex-direction: column; align-items: center; }
    .re-service-left    { flex: 0 0 auto; width: clamp(200px, 50%, 320px); }
    .re-service-grid    { grid-template-columns: repeat(3,1fr); }
  }
  @media (max-width: 767px) {
    .re-service-grid    { grid-template-columns: repeat(2,1fr); }
    /* re-fix borders for 2-col */
    .re-service-cell               { border: 1px solid var(--card-border); }
    .re-service-cell:nth-child(-n+2) { border-top: none; }
    .re-service-cell:nth-child(2n+1) { border-left: none; }
    .re-service-cell:nth-child(2n)   { border-right: none; }
    .re-service-cell:nth-child(n+5)  { border-bottom: none; }
  }
  @media (max-width: 480px) {
    .re-service-grid    { grid-template-columns: 1fr; }
    .re-service-cell    { border: none; border-bottom: 1px solid var(--card-border); }
    .re-service-cell:last-child { border-bottom: none; }
    .re-service-plane   { display: none; }
  }
</style>

<section class="re-serrvice-section">
  <div class="container">
 
    <!-- HEADER -->
    <div class="re-service-header">
      <div class="re-service-watermark">Gateway</div>
      <h2 class="re-service-title">Holiday Package</h2>
    </div>
 
    <!-- BODY -->
    <div class="re-service-body">
  
      <!-- RIGHT: 3×2 grid -->
      <div class="re-service-right">
        <div class="re-service-grid">
 
          <!-- R1C1 -->
          <div class="re-service-cell">
            <h3 class="re-service-cell-title">Customised Inbound Holiday Packages</h3>
            <p class="re-service-cell-text">We offer customised holiday packages for domestic destinations, designed to provide memorable travel experiences for families, couples, and leisure travellers.</p>
          </div>
 
          <!-- R1C2 -->
          <div class="re-service-cell">
            <h3 class="re-service-cell-title">Personalised Travel Itineraries</h3>
            <p class="re-service-cell-text">Our experts create tailor-made travel itineraries based on your preferences, budget, and travel goals, ensuring a well-planned and enjoyable vacation.</p>
          </div>
 
          <!-- R1C3 -->
          <div class="re-service-cell">
            <h3 class="re-service-cell-title">Complete Travel Planning Solutions</h3>
            <p class="re-service-cell-text">Our holiday packages include flights, hotel accommodations, local transportation, sightseeing tours, and travel assistance, providing a complete and hassle-free travel experience.</p>
          </div>
 
          <!-- R2C4 -->
          <div class="re-service-cell">
            <h3 class="re-service-cell-title">Popular Tourist Destinations</h3>
            <p class="re-service-cell-text">Explore top domestic and international tourist destinations with carefully curated travel packages that cover famous attractions, cultural experiences, and local highlights.</p>
          </div>
 
          <!-- R2C5 -->
          <div class="re-service-cell">
            <h3 class="re-service-cell-title">Family, Couple &amp; Group Holiday Packages</h3>
            <p class="re-service-cell-text">We design special holiday packages for families, honeymoon couples, and group travellers, ensuring comfortable stays, exciting activities, and unforgettable memories.</p>
          </div>
 
          <!-- R2C1 -->
          <div class="re-service-cell">
            <h3 class="re-service-cell-title">Expert Travel Support &amp; Assistance</h3>
            <p class="re-service-cell-text">Our travel specialists provide end-to-end support, helping with itinerary planning, travel bookings, and on-trip assistance to ensure a smooth and enjoyable holiday.</p>
          </div>

          <!-- R1C2 -->
          <div class="re-service-cell">
            <h3 class="re-service-cell-title">Customised Inbound Holiday Packages</h3>
            <p class="re-service-cell-text">We offer customised holiday packages for domestic destinations, designed to provide memorable travel experiences for families, couples, and leisure travellers.</p>
          </div>
 
          <!-- R1C3 -->
          <div class="re-service-cell">
            <h3 class="re-service-cell-title">Personalised Travel Itineraries</h3>
            <p class="re-service-cell-text">Our experts create tailor-made travel itineraries based on your preferences, budget, and travel goals, ensuring a well-planned and enjoyable vacation.</p>
          </div>
 
          <!-- R1C4 -->
          <div class="re-service-cell">
            <h3 class="re-service-cell-title">Complete Travel Planning Solutions</h3>
            <p class="re-service-cell-text">Our holiday packages include flights, hotel accommodations, local transportation, sightseeing tours, and travel assistance, providing a complete and hassle-free travel experience.</p>
          </div>
 
          <!-- R2C5 -->
          <div class="re-service-cell">
            <h3 class="re-service-cell-title">Popular Tourist Destinations</h3>
            <p class="re-service-cell-text">Explore top domestic and international tourist destinations with carefully curated travel packages that cover famous attractions, cultural experiences, and local highlights.</p>
          </div>
 
        </div><!-- /re-service-grid -->
      </div><!-- /re-service-right -->
 
    </div><!-- /re-service-body -->
  </div><!-- /container -->
</section>

<?php
include_once ('elements/faqs.php');
include_once ('elements/footer.php');
?>