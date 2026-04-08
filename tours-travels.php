<?php
include_once ('elements/header.php');
?>

<!-- Hero Section -->
<section class="top-banner-background text-center" style="background-image: url('assets/img/background/tour-travel.png');">
  <div>
    <h1 class="mb-0">
      Tours and Travels
    </h1>
    <p class="text-black mt-2">
      Discover India's Wonders with Seamless Travel Experience
    </p>
  </div>
</section>

<div class="container content-section">

    <!-- Tabs -->
    <div class="custom-tabs">
        <a href="#flight-section" class="tab-btn active" data-tab="tab1">Flight</a>
        <a href="#train-section" class="tab-btn" data-tab="tab2">Train</a>
        <a href="#bus-section" class="tab-btn" data-tab="tab1">Bus</a>
        <a href="#taxi-section" class="tab-btn" data-tab="tab2">Taxi</a>
        <a href="#local-section" class="tab-btn" data-tab="tab1">Local Transporatation</a>
        <a href="#hotel-section" class="tab-btn" data-tab="tab2">Hotel</a>
        <a href="#holiday-package-section" class="tab-btn" data-tab="tab1">Holiday Package</a>
        <a href="#tour-package-section" class="tab-btn" data-tab="tab2">Tour Package</a>
        <a href="#guide-tour-section" class="tab-btn" data-tab="tab1">Guided Tour</a>
        <a href="#faqs" class="tab-btn" data-tab="tab2">FAQ</a>
    </div>

    <!-- Tab Content -->
    <div id="tab1" class="corporate-content-box active">
        <div class="row align-items-center">
            <div class="col-md-5">
                <img src="assets/img/tour-travel/airplan-window.png" class="illustration">
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

<style>
  /* ── SECTION ── */
  .flight-section {
    position: relative;
    padding: 64px 0 80px;
    background: var(--bg-light);
    overflow: hidden;
  }

  /* Watermark */
  .flight-section::before {
    content: "Destinations";
    position: absolute;
    top: 10px;
    left: 50%;
    transform: translateX(-50%);
    font-size: 160px;
    font-weight: 600;
    color: var(--red-blur);
    letter-spacing: 0px;
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
  .flight-card {
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
  .flight-card:nth-child(1) { animation-delay:.05s; }
  .flight-card:nth-child(2) { animation-delay:.14s; }
  .flight-card:nth-child(3) { animation-delay:.23s; }
  .flight-card:nth-child(4) { animation-delay:.32s; }
  .flight-card:nth-child(5) { animation-delay:.41s; }
  .flight-card:nth-child(6) { animation-delay:.50s; }
  @keyframes cardReveal {
    from { opacity:0; transform:translateY(28px); }
    to   { opacity:1; transform:translateY(0); }
  }
  .flight-card:hover {
    transform: translateY(-6px) scale(1.02);
    box-shadow: 0 16px 40px rgba(37,53,111,0.20);
  }

  .flight-card img.card-bg {
    width:100%; height:100%;
    object-fit:cover;
    display:block;
    opacity:.88;
    transition: transform .5s ease;
  }
  .flight-card:hover img.card-bg { transform:scale(1.07); }

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
    color:#fff;
  }
  .card-body-content h5 {
    font-size:clamp(14px,1.6vw,18px);
    font-weight:600;
    margin-bottom:7px;
    line-height:1.25;
    text-align: center;
    color: #fff;
  }
  .card-body-content p {
    font-size:clamp(11px,1.1vw,15px);
    color:#fff;
    line-height:1.5;
    text-align: center;
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
  .flight-card:hover .card-accent { opacity:1; transform:scale(1); }
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

<section id="flight-section" class="flight-section">
  <div class="container position-relative">
 
    <!-- HEADER -->
    <div class="section-header">
      <img src="assets/img/tour-travel/flight-fly.png" alt="Airplane" class="plane-img d-none d-md-block" />
      <h2 class="section-title">Flight Booking</h2>
      <p class="section-subtitle mt-5 w-100">
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
          <div class="flight-card">
            <img class="card-bg" src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=700&q=80" alt="Domestic Flights"/>
            <div class="card-overlay"></div>
            <div class="card-accent"><svg viewBox="0 0 24 24"><path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/></svg></div>
            <div class="card-body-content">
              <h5>Domestic Flights</h5>
              <p>We provide seamless booking for domestic flights, connecting you to major destinations in India with trusted airline partners.</p>
            </div>
          </div>
 
          <!-- Card 2 -->
          <div class="flight-card">
            <img class="card-bg" src="https://images.unsplash.com/photo-1569154941061-e231b4725ef1?w=700&q=80" alt="Competitive Airfare Deals"/>
            <div class="card-overlay"></div>
            <div class="card-accent"><svg viewBox="0 0 24 24"><path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/></svg></div>
            <div class="card-body-content">
              <h5>Competitive Airfare Deals</h5>
              <p>Our platform helps you access competitive flight fares and special travel deals, ensuring low-cost travel planning for all.</p>
            </div>
          </div>
 
          <!-- Card 3 -->
          <div class="flight-card">
            <img class="card-bg" src="https://images.unsplash.com/photo-1488085061387-422e29b40080?w=700&q=80" alt="Wide Airline Network"/>
            <div class="card-overlay"></div>
            <div class="card-accent"><svg viewBox="0 0 24 24"><path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/></svg></div>
            <div class="card-body-content">
              <h5>Wide Airline Network</h5>
              <p>We collaborate with leading global airlines to offer a wide selection of flight options, schedules, and routes for convenient planning.</p>
            </div>
          </div>
 
          <!-- Card 4 -->
          <div class="flight-card">
            <img class="card-bg" src="https://images.unsplash.com/photo-1521791136064-7986c2920216?w=700&q=80" alt="Corporate Travel Management"/>
            <div class="card-overlay"></div>
            <div class="card-accent"><svg viewBox="0 0 24 24"><path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/></svg></div>
            <div class="card-body-content">
              <h5>Corporate Travel Management</h5>
              <p>Our services support corporate travel needs with efficient booking management, travel policy compliance, and cost control.</p>
            </div>
          </div>
 
          <!-- Card 5 -->
          <div class="flight-card">
            <img class="card-bg" src="https://images.unsplash.com/photo-1548574505-5e239809ee19?w=700&q=80" alt="Easy Rescheduling"/>
            <div class="card-overlay"></div>
            <div class="card-accent"><svg viewBox="0 0 24 24"><path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/></svg></div>
            <div class="card-body-content">
              <h5>Easy Rescheduling</h5>
              <p>We offer hassle-free flight rescheduling and cancellation options to ensure a smooth travel experience whenever plans change.</p>
            </div>
          </div>
 
          <!-- Card 6 -->
          <div class="flight-card">
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
    const cards      = Array.from(track.querySelectorAll('.flight-card'));
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

<!-- ══════════════════════════
      Tain SECTION
  ══════════════════════════ -->
<style>
  .train-section {
    position: relative;
    padding: 70px 0 90px;
    overflow: hidden;
    background: var(--bg-light);
  }

  /* subtle grid texture */
  .train-section::after {
    content:'';
    position:absolute; inset:0;
    background-image:
      linear-gradient(rgba(37,53,111,.03) 1px, transparent 1px),
      linear-gradient(90deg, rgba(37,53,111,.03) 1px, transparent 1px);
    background-size: 48px 48px;
    pointer-events:none; z-index:0;
  }

  /* ══════════════════════════
      WATERMARK
  ══════════════════════════ */
  .watermark {
    position: absolute;
    top: 15px; 
    left: 50%;
    transform: translateX(-50%);
    font-size: clamp(70px, 13vw, 150px);
    font-weight: 800;
    color: var(--euphoria-red);
    opacity: .07;
    letter-spacing: 8px;
    white-space: nowrap;
    pointer-events: none;
    user-select: none;
    z-index: 0;
    line-height: 1;
  }

  /* ══════════════════════════
      HEADER
  ══════════════════════════ */
  .section-header {
    position: relative;
    z-index: 2;
    text-align: center;
    margin-bottom: 52px;
  }

  .train-img {
    position: absolute;
    right: -20px; top: -30px;
    width: clamp(180px, 26vw, 340px);
    filter: drop-shadow(0 12px 30px rgba(37,53,111,0.18));
    animation: trainSlide 1s cubic-bezier(.22,1,.36,1) both, trainFloat 5s ease-in-out 1s infinite;
  }
  @keyframes trainSlide {
    from { transform: translateX(120px); opacity:0; }
    to   { transform: translateX(0);     opacity:1; }
  }
  @keyframes trainFloat {
    0%,100% { transform: translateY(0)    rotate(0deg); }
    50%      { transform: translateY(-8px) rotate(.4deg); }
  }

  .section-title {
    
    font-size: clamp(30px, 4.5vw, 48px);
    font-weight: 600;
    color: var(--euphoria-blue);
    line-height: 1.1;
    margin-bottom: 12px;
    animation: fadeUp .7s ease both;
  }
  .section-title span { color: var(--euphoria-red); }

  /* .section-subtitle {
    font-size: clamp(13px, 1.4vw, 16px);
    color: #666;
    max-width: 620px;
    margin: 0 auto;
    font-weight: 400;
    line-height: 1.7;
    animation: fadeUp .7s .15s ease both;
  } */

  @keyframes fadeUp {
    from { opacity:0; transform:translateY(20px); }
    to   { opacity:1; transform:translateY(0); }
  }

  /* ══════════════════════════
      GRID LAYOUT
  ══════════════════════════ */
  .cards-grid {
    position: relative;
    z-index: 2;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-template-rows: auto auto;
    gap: 24px;
    align-items: stretch;
  }

  /* centre tall card spans 2 rows */
  .card-center {
    grid-column: 2;
    grid-row: 1 / 3;
  }

  @media (max-width:991px) {
    .cards-grid {
      grid-template-columns: 1fr 1fr;
      grid-template-rows: auto;
    }
    .card-center {
      grid-column: 1 / 3;
      grid-row: auto;
    }
  }
  @media (max-width:576px) {
    .cards-grid { grid-template-columns: 1fr; }
    .card-center { grid-column: 1; }
  }

  /* ══════════════════════════
      3-D CARD WRAPPER  (perspective host)
  ══════════════════════════ */
  .card-wrap {
    perspective: 900px;
    /* staggered scroll-reveal */
    opacity: 0;
    transform: translateY(40px);
    transition: opacity .6s ease, transform .6s ease;
  }
  .card-wrap.visible {
    opacity: 1;
    transform: translateY(0);
  }

  /* ══════════════════════════
      THE CARD ITSELF
  ══════════════════════════ */
  .tcard {
    position: relative;
    border-radius: 20px;
    background: var(--card-bg);
    border: 1.5px solid var(--card-border);
    box-shadow: var(--card-shadow);
    overflow: hidden;
    cursor: pointer;
    transition: transform .08s linear, box-shadow .35s ease;
    transform-style: preserve-3d;
    will-change: transform;
    height: 100%;
  }

  /* Shine layer (moves on tilt) */
  .tcard::before {
    content: '';
    position: absolute; inset: 0;
    background: linear-gradient(
      135deg,
      var(--shine) 0%,
      transparent 50%,
      transparent 100%
    );
    opacity: 0;
    transition: opacity .35s;
    z-index: 4;
    border-radius: inherit;
    pointer-events: none;
  }
  .tcard:hover::before { opacity: 1; }

  /* Red accent stripe top */
  .tcard::after {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 3px;
    background: linear-gradient(90deg, var(--euphoria-blue), var(--euphoria-red));
    z-index: 5;
    transform: scaleX(0);
    transform-origin: left;
    transition: transform .4s cubic-bezier(.4,0,.2,1);
  }
  .tcard:hover::after { transform: scaleX(1); }

  /* ── CARD IMAGE BOX ── */
  .card-img-box {
    position: relative;
    width: 100%;
    height: 200px;
    overflow: hidden;
    background: linear-gradient(135deg, #e8eeff 0%, #dce8ff 100%);
  }
  .card-center .card-img-box { height: 280px; }

  .card-img-box img {
    width: 100%; height: 100%;
    object-fit: cover;
    display: block;
    transition: transform .5s ease;
  }
  .tcard:hover .card-img-box img { transform: scale(1.06); }

  /* icon badge */
  .card-badge {
    position: absolute;
    bottom: 12px; right: 12px;
    width: 42px; height: 42px;
    border-radius: 50%;
    background: var(--euphoria-red);
    display: flex; align-items: center; justify-content: center;
    box-shadow: 0 4px 14px rgba(227,30,36,.35);
    transform: translateY(10px) scale(.85);
    opacity: 0;
    transition: transform .35s, opacity .35s;
    z-index: 3;
  }
  .tcard:hover .card-badge { transform: translateY(0) scale(1); opacity:1; }
  .card-badge svg { width:18px; height:18px; fill:#fff; }

  /* ── CARD CONTENT ── */
  .card-content {
    padding: 22px 22px 26px;
    position: relative;
    z-index: 2;
  }

  .card-icon {
    width: 44px; height: 44px;
    border-radius: 12px;
    background: var(--red-blur);
    display: flex; align-items: center; justify-content: center;
    margin-bottom: 14px;
    transition: background .3s, transform .3s;
  }
  .tcard:hover .card-icon {
    background: var(--euphoria-red);
    transform: rotate(-6deg) scale(1.1);
  }
  .card-icon svg { width:22px; height:22px; fill:var(--euphoria-red); transition:fill .3s; }
  .tcard:hover .card-icon svg { fill:#fff; }

  .card-title {
    
    font-size: clamp(16px, 1.8vw, 20px);
    font-weight: 700;
    color: var(--euphoria-blue);
    margin-bottom: 10px;
    line-height: 1.25;
    transition: color .3s;
  }
  .tcard:hover .card-title { color: var(--euphoria-red); }

  .card-text {
    font-size: clamp(12px, 1.1vw, 13.5px);
    color: #666;
    line-height: 1.7;
    font-weight: 400;
  }

  /* center card — bigger text */
  .card-center .card-title { font-size: clamp(18px, 2vw, 24px); }
  .card-center .card-text  { font-size: clamp(13px, 1.2vw, 14.5px); }

  /* ── FLOATING PARTICLES ── */
  .particle {
    position: absolute;
    border-radius: 50%;
    pointer-events: none;
    animation: drift linear infinite;
    z-index: 1;
  }
  @keyframes drift {
    0%   { transform: translateY(0)    rotate(0deg);   opacity:.7; }
    100% { transform: translateY(-80px) rotate(360deg); opacity:0; }
  }

  /* ── STAGGER delays for cards ── */
  .card-wrap:nth-child(1) { transition-delay:.05s; }
  .card-wrap:nth-child(2) { transition-delay:.18s; }
  .card-wrap:nth-child(3) { transition-delay:.08s; }
  .card-wrap:nth-child(4) { transition-delay:.26s; }
  .card-wrap:nth-child(5) { transition-delay:.34s; }
</style>

<section id="train-section" class="train-section">
 
  <!-- watermark -->
  <div class="watermark">Rail</div>
 
  <!-- floating particles (JS spawned) -->
  <div id="particles"></div>
 
  <div class="container position-relative" style="z-index:2">
 
    <!-- ── HEADER ── -->
    <div class="section-header">
      <img src="assets/img/tour-travel/train-on.png" alt="Train" class="train-img d-none d-md-block" onerror="this.style.display='none'" />
      <h2 class="section-title">Train <span>Booking</span></h2>
      <p class="section-subtitle mt-5">
        Reliable train ticket booking assistance with confirmed reservations and smooth travel planning.
      </p>
    </div>
 
    <!-- ── 5-CARD GRID ── -->
    <div class="cards-grid">
 
      <!-- TOP-LEFT: Easy Online Booking -->
      <div class="card-wrap">
        <div class="tcard" data-tilt>
          <div class="card-img-box">
            <img src="assets/img/tour-travel/easy-online.png" alt="Online Booking"/>
            <div class="card-badge"><svg viewBox="0 0 24 24"><path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/></svg></div>
          </div>
          <div class="card-content">
            <div class="card-icon">
              <svg viewBox="0 0 24 24"><path d="M17 1H7C5.9 1 5 1.9 5 3v18c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V3c0-1.1-.9-2-2-2zm0 14H7V5h10v10z"/></svg>
            </div>
            <h3 class="card-title">Easy Online Train Ticket Booking</h3>
            <p class="card-text">We provide hassle-free train ticket booking services across India, helping travellers secure confirmed reservations quickly and conveniently, saving time and avoiding last-minute travel stress.</p>
          </div>
        </div>
      </div>
 
      <!-- CENTRE TALL: Pan-India Network -->
      <div class="card-wrap card-center">
        <div class="tcard" data-tilt>
          <div class="card-img-box">
            <img src="assets/img/tour-travel/pan-india.png" alt="Railway Network"/>
            <div class="card-badge"><svg viewBox="0 0 24 24"><path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/></svg></div>
          </div>
          <div class="card-content">
            <div class="card-icon">
              <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z"/></svg>
            </div>
            <h3 class="card-title">Pan-India Railway Network Coverage</h3>
            <p class="card-text">Book train tickets for all major routes across India with our comprehensive booking support. Whether it's business travel, family trips, or last-minute journeys, we help you access India's vast railway network with reliable and efficient booking services.</p>
          </div>
        </div>
      </div>
 
      <!-- TOP-RIGHT: Flexible Travel Options -->
      <div class="card-wrap">
        <div class="tcard" data-tilt>
          <div class="card-img-box">
            <img src="assets/img/tour-travel/flaxible-transport.png" alt="Flexible Travel"/>
            <div class="card-badge"><svg viewBox="0 0 24 24"><path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/></svg></div>
          </div>
          <div class="card-content">
            <div class="card-icon">
              <svg viewBox="0 0 24 24"><path d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-1 9H9V9h10v2zm-4 4H9v-2h6v2zm4-8H9V5h10v2z"/></svg>
            </div>
            <h3 class="card-title">Flexible Travel Options &amp; Seat Selection</h3>
            <p class="card-text">Choose from multiple classes — Sleeper, 3AC, 2AC, and First Class — based on your comfort and budget. We help travellers select the most suitable trains, routes, and seating options for a comfortable travel experience.</p>
          </div>
        </div>
      </div>
 
      <!-- BOTTOM-LEFT: Tatkal Reservation -->
      <div class="card-wrap">
        <div class="tcard" data-tilt>
          <div class="card-img-box">
            <img src="assets/img/tour-travel/confirm-ticket.png" alt="Tatkal Reservation"/>
            <div class="card-badge"><svg viewBox="0 0 24 24"><path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/></svg></div>
          </div>
          <div class="card-content">
            <div class="card-icon">
              <svg viewBox="0 0 24 24"><path d="M9 11H7v2h2v-2zm4 0h-2v2h2v-2zm4 0h-2v2h2v-2zm2-7h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z"/></svg>
            </div>
            <h3 class="card-title">Confirmed &amp; Tatkal Reservation Assistance</h3>
            <p class="card-text">Our expert team assists with confirmed train ticket bookings including Tatkal and emergency reservations, ensuring higher chances of seat availability and smooth reliable travel planning.</p>
          </div>
        </div>
      </div>
 
      <!-- BOTTOM-RIGHT: Complete Travel Assistance -->
      <div class="card-wrap">
        <div class="tcard" data-tilt>
          <div class="card-img-box">
            <img src="assets/img/tour-travel/complete-travel.png" alt="Travel Assistance"/>
            <div class="card-badge"><svg viewBox="0 0 24 24"><path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/></svg></div>
          </div>
          <div class="card-content">
            <div class="card-icon">
              <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
            </div>
            <h3 class="card-title">Complete Travel Assistance</h3>
            <p class="card-text">Beyond train ticket booking, we assist with journey planning, schedule guidance, route suggestions, and ticket updates. Our goal is to provide complete train travel support, ensuring a smooth and stress-free journey from booking to boarding.</p>
          </div>
        </div>
      </div>
 
    </div><!-- /cards-grid -->
  </div><!-- /container -->
</section>

<script>
  /* ══════════════════════════════════════
    1. SCROLL-REVEAL
  ══════════════════════════════════════ */
  const io = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) { e.target.classList.add('visible'); io.unobserve(e.target); }
    });
  }, { threshold: 0.12 });
  document.querySelectorAll('.card-wrap').forEach(el => io.observe(el));
  
  /* ══════════════════════════════════════
    2. TRUE 3-D TILT on mouse move
  ══════════════════════════════════════ */
  document.querySelectorAll('[data-tilt]').forEach(card => {
    const MAX = 12; // degrees
  
    card.addEventListener('mousemove', e => {
      const r   = card.getBoundingClientRect();
      const x   = e.clientX - r.left;
      const y   = e.clientY - r.top;
      const cx  = r.width  / 2;
      const cy  = r.height / 2;
      const rx  = ((y - cy) / cy) * -MAX;   // tilt X
      const ry  = ((x - cx) / cx) *  MAX;   // tilt Y
  
      card.style.transform =
        `perspective(900px) rotateX(${rx}deg) rotateY(${ry}deg) scale3d(1.03,1.03,1.03)`;
      card.style.boxShadow =
        `${-ry * 2}px ${rx * 2}px 50px rgba(37,53,111,0.22),
        0 20px 60px rgba(37,53,111,0.12)`;
  
      /* move shine highlight opposite to tilt */
      const px = ((x / r.width)  * 100).toFixed(1);
      const py = ((y / r.height) * 100).toFixed(1);
      card.style.setProperty('--shine-x', px + '%');
      card.style.setProperty('--shine-y', py + '%');
    });
  
    card.addEventListener('mouseleave', () => {
      card.style.transform  = '';
      card.style.boxShadow  = '';
      card.style.transition = 'transform .5s cubic-bezier(.4,0,.2,1), box-shadow .5s ease';
      setTimeout(() => { card.style.transition = ''; }, 500);
    });
  
    card.addEventListener('mouseenter', () => {
      card.style.transition = 'transform .08s linear, box-shadow .08s linear';
    });
  });
  
  /* ══════════════════════════════════════
    3. FLOATING PARTICLES
  ══════════════════════════════════════ */
  (function spawnParticles() {
    const container = document.getElementById('particles');
    const colours   = ['#25356F','#e31e24','#a0addb','#f0a0a2'];
  
    function create() {
      const p   = document.createElement('div');
      const sz  = Math.random() * 6 + 3;
      const dur = Math.random() * 8 + 6;
      const del = Math.random() * 10;
  
      Object.assign(p.style, {
        position:     'absolute',
        borderRadius: '50%',
        width:        sz + 'px',
        height:       sz + 'px',
        left:         Math.random() * 100 + '%',
        top:          (50 + Math.random() * 50) + '%',
        background:   colours[Math.floor(Math.random() * colours.length)],
        opacity:      (Math.random() * 0.3 + 0.1).toString(),
        animation:    `drift ${dur}s ${del}s linear infinite`,
        pointerEvents:'none',
        zIndex:       '1'
      });
      container.appendChild(p);
    }
  
    for (let i = 0; i < 18; i++) create();
  })();
</script>

<!-- ══════════════════════════════════
      ALL CLASSES PREFIXED WITH  bus-
  ══════════════════════════════════ -->
<style>

  .bus-section {
    position: relative;
    padding: 60px 0 80px;
    background: var(--bg-light);
    overflow: hidden;
    
  }

  /* watermark */
  .bus-watermark {
    position: absolute;
    top: 10px; left: 50%;
    transform: translateX(-50%);
    
    font-size: clamp(60px, 12vw, 140px);
    font-weight: 700;
    color: var(--euphoria-red);
    opacity: .07;
    letter-spacing: 6px;
    white-space: nowrap;
    pointer-events: none;
    user-select: none;
    z-index: 0;
    line-height: 1;
  }

  /* ── HEADER ── */
  .bus-header {
    position: relative;
    z-index: 2;
    text-align: center;
    margin-bottom: 44px;
  }

  .bus-img {
    position: absolute;
    left: -10px; top: -24px;
    width: clamp(130px, 20vw, 280px);
    filter: drop-shadow(6px 10px 20px rgba(37,53,111,0.18));
    animation: busFloat 4.5s ease-in-out infinite;
  }
  @keyframes busFloat {
    0%,100% { transform: translateY(0); }
    50%      { transform: translateY(-9px); }
  }

  .bus-title {
    
    font-size: clamp(26px, 4vw, 44px);
    font-weight: 700;
    color: var(--euphoria-blue);
    margin-bottom: 10px;
  }

  .bus-subtitle {
    font-size: clamp(13px, 1.4vw, 16px);
    color: #666;
    max-width: 640px;
    margin: 0 auto;
    line-height: 1.7;
  }

  /* ── CAROUSEL OUTER (clips) ── */
  .bus-carousel-outer {
    position: relative;
    z-index: 2;
    overflow: hidden;
  }

  /* ── TRACK (slides) ── */
  .bus-track {
    display: flex;
    gap: 22px;
    transition: transform 0.5s cubic-bezier(.4,0,.2,1);
    will-change: transform;
  }

  /* ── CARD ── */
  .bus-card {
    flex-shrink: 0;
    background: #fff;
    border: 1.5px solid var(--card-border);
    border-radius: 18px;
    padding: 32px 24px 28px;
    text-align: center;
    cursor: pointer;
    position: relative;
    overflow: hidden;

    /* entry animation */
    opacity: 0;
    transform: translateY(30px);
    animation: busCardReveal .6s ease forwards;

    /* hover transition */
    transition:
      box-shadow .35s ease,
      border-color .35s ease,
      transform .35s ease;
  }

  .bus-card:nth-child(1) { animation-delay:.05s; }
  .bus-card:nth-child(2) { animation-delay:.14s; }
  .bus-card:nth-child(3) { animation-delay:.23s; }
  .bus-card:nth-child(4) { animation-delay:.32s; }
  .bus-card:nth-child(5) { animation-delay:.41s; }
  .bus-card:nth-child(6) { animation-delay:.50s; }

  @keyframes busCardReveal {
    to { opacity:1; transform:translateY(0); }
  }

  /* hover: soft shadow lift */
  .bus-card:hover {
    box-shadow:
      0 8px 28px rgba(37,53,111,0.13),
      0 2px 8px  rgba(37,53,111,0.07);
    border-color: rgba(37,53,111,0.22);
    transform: translateY(-5px);
  }

  /* top accent line slides in on hover */
  .bus-card::after {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 3px;
    background: linear-gradient(90deg, var(--euphoria-blue), var(--euphoria-red));
    transform: scaleX(0);
    transform-origin: left;
    transition: transform .4s cubic-bezier(.4,0,.2,1);
    border-radius: 18px 18px 0 0;
  }
  .bus-card:hover::after { transform: scaleX(1); }

  /* ── ICON CIRCLE ── */
  .bus-icon-wrap {
    width: 72px; height: 72px;
    border-radius: 50%;
    background: var(--red-blur);
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 20px;
    transition: background .35s ease, transform .35s ease;
  }
  .bus-card:hover .bus-icon-wrap {
    background: var(--euphoria-red);
    transform: rotate(-8deg) scale(1.1);
  }
  .bus-icon-wrap svg {
    width: 34px; height: 34px;
    fill: none;
    stroke: var(--euphoria-red);
    stroke-width: 1.8;
    stroke-linecap: round;
    stroke-linejoin: round;
    transition: stroke .35s;
  }
  .bus-card:hover .bus-icon-wrap svg { stroke: #fff; }

  /* ── CARD TEXT ── */
  .bus-card-title {
    
    font-size: clamp(14px, 1.5vw, 17px);
    font-weight: 700;
    color: var(--euphoria-blue);
    margin-bottom: 12px;
    line-height: 1.3;
    transition: color .3s;
  }
  .bus-card:hover .bus-card-title { color: var(--euphoria-red); }

  .bus-card-text {
    font-size: clamp(11.5px, 1.05vw, 13.5px);
    color: #777;
    line-height: 1.7;
  }

  /* ── ARROW BUTTONS ── */
  .bus-btn {
    position: absolute;
    top: 50%; transform: translateY(-50%);
    z-index: 10;
    width: 44px; height: 44px;
    border-radius: 50%;
    border: none;
    background: var(--euphoria-blue);
    color: #fff;
    display: flex; align-items: center; justify-content: center;
    cursor: pointer;
    box-shadow: 0 4px 16px rgba(37,53,111,0.28);
    transition: background .25s, transform .25s;
  }
  .bus-btn:hover:not(:disabled) {
    background: var(--euphoria-red);
    transform: translateY(-50%) scale(1.1);
  }
  .bus-btn:disabled { opacity:.3; cursor:default; }
  .bus-btn-prev { left: -22px; }
  .bus-btn-next { right: -22px; }

  @media (max-width:767px) {
    .bus-img { display: none; }
    .bus-btn-prev { left: -8px; }
    .bus-btn-next { right: -8px; }
  }

  /* ── DOTS ── */
  .bus-dots {
    display: flex;
    justify-content: center;
    gap: 8px;
    margin-top: 34px;
  }
  .bus-dot {
    width: 10px; height: 10px;
    border-radius: 50%;
    background: rgba(37,53,111,.2);
    border: none;
    padding: 0;
    cursor: pointer;
    transition: background .3s, transform .3s;
  }
  .bus-dot.bus-dot-active {
    background: var(--euphoria-blue);
    transform: scale(1.35);
  }
  .bus-dot:hover:not(.bus-dot-active) { background: var(--euphoria-red); }
</style>

<section id="bus-section" class="bus-section">
  <div class="bus-watermark">Buslines</div>
 
  <div class="container position-relative" style="z-index:2">
 
    <!-- HEADER -->
    <div class="bus-header">
      <img src="assets/img/tour-travel/bus-on.png" alt="Bus" class="bus-img d-none d-md-block" onerror="this.style.display='none'" />
      <h2 class="bus-title">Bus Booking</h2>
      <p class="bus-subtitle">
        Convenient bus booking services for intercity and interstate travel with multiple operator options.
      </p>
    </div>
 
    <!-- CAROUSEL -->
    <div class="position-relative px-3">
 
      <button class="bus-btn bus-btn-prev" id="busPrev" aria-label="Previous">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <polyline points="15 18 9 12 15 6"/>
        </svg>
      </button>
 
      <div class="bus-carousel-outer" id="busOuter">
        <div class="bus-track" id="busTrack">
 
          <!-- Card 1 -->
          <div class="bus-card">
            <div class="bus-icon-wrap">
              <!-- ticket icon -->
              <svg viewBox="0 0 24 24"><rect x="2" y="6" width="20" height="12" rx="2"/><path d="M2 12h2M20 12h2M8 6v12M16 6v12"/></svg>
            </div>
            <h3 class="bus-card-title">Easy Online Bus Ticket Booking</h3>
            <p class="bus-card-text">We offer convenient online bus ticket booking services for intercity and interstate travel across India. Our simple and efficient booking process allows travellers to quickly reserve seats and plan their journeys without any hassle.</p>
          </div>
 
          <!-- Card 2 -->
          <div class="bus-card">
            <div class="bus-icon-wrap">
              <!-- route/map icon -->
              <svg viewBox="0 0 24 24"><circle cx="7" cy="17" r="2"/><circle cx="17" cy="7" r="2"/><path d="M7 15V9a2 2 0 0 1 2-2h2M17 9v6a2 2 0 0 1-2 2h-2"/></svg>
            </div>
            <h3 class="bus-card-title">Multiple Bus Operators &amp; Route Options</h3>
            <p class="bus-card-text">Choose from a wide network of trusted bus operators and multiple travel routes, giving you the flexibility to select the best schedule, price, and comfort level for your journey.</p>
          </div>
 
          <!-- Card 3 -->
          <div class="bus-card">
            <div class="bus-icon-wrap">
              <!-- bus icon -->
              <svg viewBox="0 0 24 24"><rect x="2" y="5" width="20" height="14" rx="2"/><path d="M2 10h20M7 19v2M17 19v2M6 14h.01M18 14h.01"/></svg>
            </div>
            <h3 class="bus-card-title">Various Bus Types for Comfortable Travel</h3>
            <p class="bus-card-text">Book tickets for different bus categories, including AC, Non-AC, Sleeper, Semi-Sleeper, and Luxury Coaches, to ensure a comfortable, budget-friendly travel experience for every passenger.</p>
          </div>
 
          <!-- Card 4 -->
          <div class="bus-card">
            <div class="bus-icon-wrap">
              <!-- price/tag icon -->
              <svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
            </div>
            <h3 class="bus-card-title">Affordable Fares & Instant Confirmation</h3>
            <p class="bus-card-text">We offer competitive bus ticket prices and instant booking confirmation, helping travellers easily secure their seats while enjoying affordable, reliable transportation.</p>
          </div>
 
          <!-- Card 5 -->
          <div class="bus-card">
            <div class="bus-icon-wrap">
              <!-- shield/safety icon -->
              <svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            </div>
            <h3 class="bus-card-title">Safe &amp; Reliable Bus Travel</h3>
            <p class="bus-card-text">We partner only with verified and trusted bus operators to ensure safe, timely, and reliable journeys for all passengers, giving you complete peace of mind on every trip.</p>
          </div>
 
          <!-- Card 6 -->
          <div class="bus-card">
            <div class="bus-icon-wrap">
              <!-- support/headset icon -->
              <svg viewBox="0 0 24 24"><path d="M3 18v-6a9 9 0 0 1 18 0v6"/><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"/></svg>
            </div>
            <h3 class="bus-card-title">Round-the-Clock Customer Support</h3>
            <p class="bus-card-text">Our dedicated support team is available 24/7 to assist with bus bookings, cancellations, rescheduling, and any travel queries, ensuring a smooth experience at every step.</p>
          </div>
 
        </div><!-- /bus-track -->
      </div><!-- /bus-carousel-outer -->
 
      <button class="bus-btn bus-btn-next" id="busNext" aria-label="Next">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <polyline points="9 18 15 12 9 6"/>
        </svg>
      </button>
    </div>
 
    <!-- DOTS -->
    <div class="bus-dots" id="busDots"></div>
 
  </div>
</section>

<script>
  /* ── All variables scoped inside IIFE to avoid global conflicts ── */
  (function BusCarousel() {
    const BUS_GAP     = 22;
    const busOuter    = document.getElementById('busOuter');
    const busTrack    = document.getElementById('busTrack');
    const busPrev     = document.getElementById('busPrev');
    const busNext     = document.getElementById('busNext');
    const busDotsWrap = document.getElementById('busDots');
    const busCards    = Array.from(busTrack.querySelectorAll('.bus-card'));
    const busTotal    = busCards.length;
  
    let busPerView  = 4;
    let busCurrent  = 0;
    let busTimer    = null;
  
    function busGetPerView() {
      const w = window.innerWidth;
      if (w <= 480)  return 1;
      if (w <= 767)  return 2;
      if (w <= 1199) return 3;
      return 4;
    }
  
    function busMaxIdx() { return Math.max(0, busTotal - busPerView); }
  
    function busApplyWidths() {
      const outerW = busOuter.offsetWidth;
      const cardW  = (outerW - BUS_GAP * (busPerView - 1)) / busPerView;
      busCards.forEach(c => { c.style.width = cardW + 'px'; });
    }
  
    function busGoTo(idx) {
      idx = Math.max(0, Math.min(idx, busMaxIdx()));
      busCurrent = idx;
      const cardW  = busCards[0].offsetWidth;
      const offset = (cardW + BUS_GAP) * busCurrent;
      busTrack.style.transform = `translateX(-${offset}px)`;
      busSyncDots();
      busSyncBtns();
    }
  
    function busBuildDots() {
      busDotsWrap.innerHTML = '';
      const count = busMaxIdx() + 1;
      for (let i = 0; i < count; i++) {
        const b = document.createElement('button');
        b.className = 'bus-dot' + (i === busCurrent ? ' bus-dot-active' : '');
        b.setAttribute('aria-label', 'Slide ' + (i + 1));
        b.addEventListener('click', () => { busGoTo(i); busResetAuto(); });
        busDotsWrap.appendChild(b);
      }
    }
  
    function busSyncDots() {
      busDotsWrap.querySelectorAll('.bus-dot')
        .forEach((d, i) => d.classList.toggle('bus-dot-active', i === busCurrent));
    }
  
    function busSyncBtns() {
      busPrev.disabled = busCurrent === 0;
      busNext.disabled = busCurrent >= busMaxIdx();
    }
  
    function busStartAuto() {
      busTimer = setInterval(() => {
        busGoTo(busCurrent < busMaxIdx() ? busCurrent + 1 : 0);
      }, 3500);
    }
    function busResetAuto() { clearInterval(busTimer); busStartAuto(); }
  
    function busInit() {
      busPerView  = busGetPerView();
      busCurrent  = Math.min(busCurrent, busMaxIdx());
      busApplyWidths();
      busBuildDots();
      busGoTo(busCurrent);
    }
  
    busPrev.addEventListener('click', () => { busGoTo(busCurrent - 1); busResetAuto(); });
    busNext.addEventListener('click', () => { busGoTo(busCurrent + 1); busResetAuto(); });
  
    /* swipe */
    let busTX = 0;
    busOuter.addEventListener('touchstart', e => { busTX = e.touches[0].clientX; }, { passive:true });
    busOuter.addEventListener('touchend',   e => {
      const diff = busTX - e.changedTouches[0].clientX;
      if (Math.abs(diff) > 40) { busGoTo(diff > 0 ? busCurrent + 1 : busCurrent - 1); busResetAuto(); }
    }, { passive:true });
  
    /* resize */
    let busRT;
    window.addEventListener('resize', () => { clearTimeout(busRT); busRT = setTimeout(busInit, 120); });
  
    busInit();
    busStartAuto();
  })();
</script>

<!-- ══ ALL PREFIXED taxi- ══ -->
<style>

  .taxi-section {
    
    background: var(--bg-light);
    padding: 70px 0 80px;
    position: relative;
    overflow: hidden;
    color: var(--text-dark);
  }

  /* ── LEFT IMAGE ── */
  .taxi-img-col {
    position: relative;
  }

  .taxi-main-img {
    width: 100%;
    height: 100%;
    min-height: 420px;
    object-fit: cover;
    border-radius: 20px;
    display: block;
    box-shadow: 0 20px 60px rgba(37,53,111,0.14);
  }

  /* ── RIGHT CONTENT ── */
  .taxi-content-col {
    position: relative;
    padding-left: 10px;
  }

  /* watermark */
  .taxi-watermark {
    position: absolute;
    top: -20px;
    font-size: clamp(60px, 10vw, 120px);
    font-weight: 600;
    color: var(--euphoria-red);
    opacity: .07;
    letter-spacing: 4px;
    white-space: nowrap;
    pointer-events: none;
    user-select: none;
    z-index: 0;
    line-height: 1;
  }

  /* taxi car image top-right */
  .taxi-car-img {
    position: absolute;
    top: -18px; right: 0;
    width: clamp(120px, 16vw, 200px);
    filter: drop-shadow(4px 8px 16px rgba(37,53,111,0.18));
    animation: taxiFloat 4s ease-in-out infinite;
    z-index: 2;
  }
  @keyframes taxiFloat {
    0%,100% { transform: translateY(0); }
    50%      { transform: translateY(-8px); }
  }

  .taxi-inner {
    position: relative;
    z-index: 1;
  }

  /* title */
  .taxi-title {
    
    font-size: clamp(26px, 3.5vw, 40px);
    font-weight: 700;
    color: var(--euphoria-blue);
    margin-bottom: 16px;
    line-height: 1.15;
  }

  /* bold subtitle */
  .taxi-bold-sub {
    font-size: clamp(14px, 1.5vw, 18px);
    font-weight: 600;
    color: var(--text-dark);
    margin-bottom: 14px;
    line-height: 1.5;
  }

  /* description paragraph */
  .taxi-desc {
    font-size: clamp(12.5px, 1.15vw, 14px);
    color: #666;
    line-height: 1.8;
    margin-bottom: 28px;
  }

  /* ── FEATURES GRID ── */
  .taxi-features {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 10px 16px;
  }

  /* each feature row */
  .taxi-feat {
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
  .taxi-feat:hover {
    background: #fff;
    border-color: var(--card-border);
    box-shadow:
      0 6px 22px rgba(37,53,111,0.10),
      0 1px 4px  rgba(37,53,111,0.06);
    transform: translateX(4px);
  }

  /* checkmark icon */
  .taxi-check {
    flex-shrink: 0;
    width: 22px; height: 22px;
    border-radius: 50%;
    background: var(--red-blur);
    display: flex; align-items: center; justify-content: center;
    transition: background .28s ease, transform .28s ease;
  }
  .taxi-feat:hover .taxi-check {
    background: var(--euphoria-red);
    transform: scale(1.15);
  }
  .taxi-check svg {
    width: 12px; height: 12px;
    stroke: var(--euphoria-red);
    fill: none;
    stroke-width: 2.5;
    stroke-linecap: round;
    stroke-linejoin: round;
    transition: stroke .28s ease;
  }
  .taxi-feat:hover .taxi-check svg { stroke: #fff; }

  /* feature label */
  .taxi-feat-label {
    font-size: clamp(12px, 1.1vw, 14px);
    font-weight: 500;
    color: var(--text-dark);
    transition: color .28s ease;
  }
  .taxi-feat:hover .taxi-feat-label {
    color: var(--euphoria-blue);
    font-weight: 600;
  }

  /* ── RESPONSIVE ── */
  @media (max-width: 991px) {
    .taxi-main-img   { min-height: 300px; }
    .taxi-car-img    { width: 130px; top: -10px; }
    .taxi-content-col { padding-left: 0; margin-top: 32px; }
  }
  @media (max-width: 576px) {
    .taxi-features { grid-template-columns: 1fr; }
    .taxi-car-img  { width: 110px; }
  }
</style>

<section id="taxi-section" class="taxi-section bg-white">
  <div class="container">
    <div class="row align-items-center g-4">
 
      <!-- LEFT: Image -->
      <div class="col-lg-5 taxi-img-col">
        <img src="assets/img/tour-travel/taxi-customer.png" alt="Taxi Booking" class="taxi-main-img" />
      </div>
 
      <!-- RIGHT: Content -->
      <div class="col-lg-7 taxi-content-col">
 
        <!-- watermark -->
        <div class="taxi-watermark">Cabs</div>
 
        <!-- floating taxi car -->
        <img src="assets/img/tour-travel/taxi-on.png" alt="Taxi Car" class="taxi-car-img d-none d-md-block" onerror="this.style.display='none'" />
 
        <div class="taxi-inner p-4">
          <h2 class="taxi-title">Taxi Booking</h2>
 
          <p class="taxi-bold-sub mt-4">
            Professional taxi booking services for local and outstation travel
            with safe and timely transportation.
          </p>
 
          <p class="taxi-desc">
            We make it easy to book reliable taxis for local and outstation travel with a quick and simple
            booking process. Customers can choose from a range of vehicles, including hatchbacks, sedans,
            SUVs, and luxury cars, based on their needs and budget. Our verified drivers ensure safe, comfortable
            journeys with punctual pickups and professional service. We offer transparent pricing with no hidden
            charges and 24/7 taxi booking for airport transfers, business trips, and personal travel.
          </p>
 
          <!-- Feature points -->
          <div class="taxi-features">
 
            <div class="taxi-feat">
              <div class="taxi-check">
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <span class="taxi-feat-label">Easy Online Taxi Booking</span>
            </div>
 
            <div class="taxi-feat">
              <div class="taxi-check">
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <span class="taxi-feat-label">Affordable Taxi Fare Options</span>
            </div>
 
            <div class="taxi-feat">
              <div class="taxi-check">
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <span class="taxi-feat-label">Local &amp; Outstation Taxi Services</span>
            </div>
 
            <div class="taxi-feat">
              <div class="taxi-check">
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <span class="taxi-feat-label">24/7 Taxi Availability</span>
            </div>
 
            <div class="taxi-feat">
              <div class="taxi-check">
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <span class="taxi-feat-label">Wide Range of Vehicles</span>
            </div>
 
            <div class="taxi-feat">
              <div class="taxi-check">
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <span class="taxi-feat-label">Airport Transfer Services</span>
            </div>
 
            <div class="taxi-feat">
              <div class="taxi-check">
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <span class="taxi-feat-label">Professional &amp; Verified Drivers</span>
            </div>
 
            <div class="taxi-feat">
              <div class="taxi-check">
                <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <span class="taxi-feat-label">Safe and Timely Transportation</span>
            </div>
 
          </div><!-- /taxi-features -->
        </div><!-- /taxi-inner -->
      </div><!-- /col -->
 
    </div><!-- /row -->
  </div><!-- /container -->
</section>

<!-- ══ ALL PREFIXED  lt-  (local-transport) ══ -->
<style>

  .lt-section {
    
    background: var(--bg-light);
    padding: 70px 0 80px;
    position: relative;
    overflow: hidden;
    color: var(--text-dark);
  }

  /* ── LEFT COLUMN ── */
  .lt-left {
    position: relative;
  }

  /* watermark */
  .lt-watermark {
    font-size: clamp(56px, 10vw, 100px);
    font-weight: 600;
    color: var(--red-blur);
    margin-bottom: -24px;  /* pull title up over watermark */
    display: block;
  }

  .lt-title {
    font-size: clamp(22px, 3vw, 36px);
    font-weight: 600;
    color: var(--euphoria-blue);
    position: absolute;
    z-index: 1;
    margin-top: -60px;
    text-align: center;
    left: 10%;
  }

  .lt-main-img {
    width: 100%;
    border-radius: 18px;
    object-fit: cover;
    height: clamp(240px, 38vw, 420px);
    display: block;
    box-shadow: 0 16px 50px rgba(37,53,111,0.13);
  }

  /* ── RIGHT COLUMN: 2×2 GRID ── */
  .lt-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 18px;
    height: 100%;
  }

  /* ── CARD ── */
  .lt-card {
    background: #fff;
    border: 1.5px solid var(--card-border);
    border-radius: 16px;
    padding: 26px 22px 24px;
    cursor: default;
    position: relative;
    overflow: hidden;

    /* transitions */
    transition:
      box-shadow   .32s ease,
      border-color .32s ease,
      transform    .32s ease,
      background   .32s ease;
  }

  /* top accent bar */
  .lt-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 3px;
    background: linear-gradient(90deg, var(--euphoria-blue), var(--euphoria-red));
    transform: scaleX(0);
    transform-origin: left;
    transition: transform .38s cubic-bezier(.4,0,.2,1);
    border-radius: 16px 16px 0 0;
  }

  /* HOVER */
  .lt-card:hover {
    box-shadow:
      0 10px 32px rgba(37,53,111,0.13),
      0 2px  8px  rgba(37,53,111,0.07);
    border-color: rgba(37,53,111,0.22);
    transform: translateY(-5px);
    background: #fff;
  }
  .lt-card:hover::before { transform: scaleX(1); }

  /* icon circle */
  .lt-icon-wrap {
    width: 56px; height: 56px;
    border-radius: 50%;
    background: var(--red-blur);
    display: flex; align-items: center; justify-content: center;
    margin-bottom: 16px;
    transition: background .32s ease, transform .32s ease;
  }
  .lt-card:hover .lt-icon-wrap {
    background: var(--euphoria-red);
    transform: rotate(-8deg) scale(1.1);
  }
  .lt-icon-wrap svg {
    width: 26px; height: 26px;
    stroke: var(--euphoria-red);
    fill: none;
    stroke-width: 1.7;
    stroke-linecap: round;
    stroke-linejoin: round;
    transition: stroke .32s ease;
  }
  .lt-card:hover .lt-icon-wrap svg { stroke: #fff; }

  /* card title */
  .lt-card-title {
    
    font-size: clamp(14px, 1.4vw, 17px);
    font-weight: 700;
    color: var(--euphoria-blue);
    margin-bottom: 10px;
    line-height: 1.3;
    transition: color .28s ease;
  }
  .lt-card:hover .lt-card-title { color: var(--euphoria-red); }

  /* card text */
  .lt-card-text {
    font-size: clamp(11.5px, 1vw, 13.5px);
    color: #777;
    line-height: 1.75;
  }

  /* ── RESPONSIVE ── */
  @media (max-width: 991px) {
    .lt-grid { grid-template-columns: 1fr 1fr; }
    .lt-left  { margin-bottom: 32px; }
  }
  @media (max-width: 575px) {
    .lt-grid { grid-template-columns: 1fr; }
    .lt-watermark { font-size: 54px; }
  }
</style>

<section id="local-section" class="lt-section">
  <div class="container">
    <div class="row g-4 align-items-start">
 
      <!-- LEFT: title + image -->
      <div class="col-lg-5 lt-left">
        <span class="lt-watermark">Mobility</span>
        <h2 class="lt-title">Local Transportation</h2>
        <img
          src="https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?w=800&q=80"
          alt="Local Transportation"
          class="lt-main-img"
        />
      </div>
 
      <!-- RIGHT: 2×2 cards -->
      <div class="col-lg-7">
        <div class="lt-grid">
 
          <!-- Card 1 -->
          <div class="lt-card">
            <div class="lt-icon-wrap">
              <!-- location pin -->
              <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z"/></svg>
            </div>
            <h3 class="lt-card-title">Reliable Local Transportation Solutions</h3>
            <p class="lt-card-text">We provide efficient local transportation services to help individuals and businesses travel comfortably within the city. Our services ensure safe, convenient, and timely travel for daily commutes, meetings, and personal trips.</p>
          </div>
 
          <!-- Card 2 -->
          <div class="lt-card">
            <div class="lt-icon-wrap">
              <!-- bike/car key -->
              <svg viewBox="0 0 24 24"><circle cx="5.5" cy="17.5" r="3.5"/><circle cx="18.5" cy="17.5" r="3.5"/><path d="M15 6h-2l-3 7H5.5M15 6l3 5h-5.5"/><path d="M11 3h4"/></svg>
            </div>
            <h3 class="lt-card-title">Private Car & Rental Vehicle Options</h3>
            <p class="lt-card-text">Choose from a wide range of private cars and rental vehicles based on your travel needs and budget. Our well-maintained vehicles offer flexibility and comfort for short city trips or extended local travel.</p>
          </div>
 
          <!-- Card 3 -->
          <div class="lt-card">
            <div class="lt-icon-wrap">
              <!-- city building -->
              <svg viewBox="0 0 24 24"><path d="M3 21h18M3 7v14M21 7v14M9 21V7M15 21V7M3 7l9-4 9 4M9 11h.01M9 15h.01M15 11h.01M15 15h.01"/></svg>
            </div>
            <h3 class="lt-card-title">Flexible & Affordable City Travel</h3>
            <p class="lt-card-text">Our cost-effective local transport services offer flexible booking options for hourly, daily, or customised travel needs, making city transportation simple, comfortable, and convenient.</p>
          </div>
 
          <!-- Card 4 -->
          <div class="lt-card">
            <div class="lt-icon-wrap">
              <!-- driver/chauffeur -->
              <svg viewBox="0 0 24 24"><circle cx="12" cy="7" r="4"/><path d="M5.5 20a7 7 0 0 1 13 0"/><path d="M12 11v2l1.5 1.5"/></svg>
            </div>
            <h3 class="lt-card-title">Professional Chauffeur</h3>
            <p class="lt-card-text">Our trained and professional chauffeurs ensure a smooth and safe travel experience. With experienced drivers and well-maintained vehicles, we provide reliable transportation for corporate clients, tourists, and local travellers.</p>
          </div>
 
        </div><!-- /lt-grid -->
      </div>
 
    </div><!-- /row -->
  </div><!-- /container -->
</section>

<!-- ══ ALL PREFIXED  hp-  (holiday-package) ══ -->
<style>

  .hp-section {
    
    background: var(--bg-light);
    padding: 64px 0 80px;
    position: relative;
    overflow: hidden;
    color: var(--text-dark);
  }

  /* ── HEADER ── */
  .hp-header {
    position: relative;
    z-index: 2;
    text-align: center;
    margin-bottom: 48px;
  }

  .hp-watermark {
    position: absolute;
    top: -50px; 
    left: 50%;
    transform: translateX(-50%);
    font-size: clamp(60px, 12vw, 120px);
    font-weight: 700;
    color: var(--red-blur);
    white-space: nowrap;
    pointer-events: none;
    user-select: none;
    z-index: 0;
    line-height: 1;
  }

  .hp-title {
    font-size: clamp(26px, 4vw, 38px);
    font-weight: 600;
    color: var(--euphoria-blue);
    position: relative;
    z-index: 1;
  }

  /* ── BODY: left image + right grid ── */
  .hp-body {
    display: flex;
    gap: 32px;
    align-items: flex-start;
  }

  /* ── LEFT IMAGE ── */
  .hp-left {
    flex: 0 0 clamp(200px, 28%, 340px);
    position: relative;
  }

  .hp-scene-img {
    width: 100%;
    display: block;
    filter: drop-shadow(4px 12px 24px rgba(37,53,111,0.14));
    animation: hpFloat 5s ease-in-out infinite;
  }
  @keyframes hpFloat {
    0%,100% { transform: translateY(0); }
    50%      { transform: translateY(-10px); }
  }

  /* small plane top-left */
  .hp-plane {
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
  .hp-right {
    flex: 1;
    min-width: 0;
  }

  .hp-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    /* thin dividers via border on cells */
  }

  /* ── GRID CELL ── */
  .hp-cell {
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
  .hp-cell:nth-child(-n+3)          { border-top: none; }
  .hp-cell:nth-child(3n+1)          { border-left: none; }
  .hp-cell:nth-child(3n)            { border-right: none; }
  .hp-cell:nth-child(n+4)           { border-bottom: none; }

  /* top accent on hover */
  .hp-cell::before {
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
  .hp-cell:hover {
    background: #fff;
    box-shadow:
      0 8px 30px rgba(37,53,111,0.11),
      0 2px 6px  rgba(37,53,111,0.06);
    transform: translateY(-4px);
    z-index: 1;
    border-radius: 4px;
  }
  .hp-cell:hover::before { transform: scaleX(1); }

  /* cell title */
  .hp-cell-title {
    
    font-size: clamp(13px, 1.3vw, 16px);
    font-weight: 700;
    color: var(--euphoria-blue);
    margin-bottom: 12px;
    line-height: 1.35;
    text-align: center;
    transition: color .28s ease;
  }
  .hp-cell:hover .hp-cell-title { color: var(--euphoria-red); }

  /* cell text */
  .hp-cell-text {
    font-size: clamp(11px, 1vw, 13px);
    color: #777;
    line-height: 1.75;
    text-align: center;
  }

  /* ── RESPONSIVE ── */
  @media (max-width: 991px) {
    .hp-body    { flex-direction: column; align-items: center; }
    .hp-left    { flex: 0 0 auto; width: clamp(200px, 50%, 320px); }
    .hp-grid    { grid-template-columns: repeat(3,1fr); }
  }
  @media (max-width: 767px) {
    .hp-grid    { grid-template-columns: repeat(2,1fr); }
    /* re-fix borders for 2-col */
    .hp-cell               { border: 1px solid var(--card-border); }
    .hp-cell:nth-child(-n+2) { border-top: none; }
    .hp-cell:nth-child(2n+1) { border-left: none; }
    .hp-cell:nth-child(2n)   { border-right: none; }
    .hp-cell:nth-child(n+5)  { border-bottom: none; }
  }
  @media (max-width: 480px) {
    .hp-grid    { grid-template-columns: 1fr; }
    .hp-cell    { border: none; border-bottom: 1px solid var(--card-border); }
    .hp-cell:last-child { border-bottom: none; }
    .hp-plane   { display: none; }
  }
</style>

<section id="holiday-package-section" class="hp-section">
  <div class="container-flui">
 
    <!-- HEADER -->
    <div class="hp-header">
      <div class="hp-watermark">Gateway</div>
      <h2 class="hp-title">Holiday Package</h2>
    </div>
 
    <!-- BODY -->
    <div class="hp-body">
 
      <!-- LEFT: scene image -->
      <div class="hp-left">
        <img class="hp-scene-img" src="assets/img/tour-travel/holiday-package.png" alt="Holiday Scene" onerror="this.src=''" />
      </div>
 
      <!-- RIGHT: 3×2 grid -->
      <div class="hp-right">
        <div class="hp-grid">
 
          <!-- R1C1 -->
          <div class="hp-cell">
            <h3 class="hp-cell-title">Customised Inbound Holiday Packages</h3>
            <p class="hp-cell-text">We offer customised holiday packages for domestic destinations, designed to provide memorable travel experiences for families, couples, and leisure travellers.</p>
          </div>
 
          <!-- R1C2 -->
          <div class="hp-cell">
            <h3 class="hp-cell-title">Personalised Travel Itineraries</h3>
            <p class="hp-cell-text">Our experts create tailor-made travel itineraries based on your preferences, budget, and travel goals, ensuring a well-planned and enjoyable vacation.</p>
          </div>
 
          <!-- R1C3 -->
          <div class="hp-cell">
            <h3 class="hp-cell-title">Complete Travel Planning Solutions</h3>
            <p class="hp-cell-text">Our holiday packages include flights, hotel accommodations, local transportation, sightseeing tours, and travel assistance, providing a complete and hassle-free travel experience.</p>
          </div>
 
          <!-- R2C1 -->
          <div class="hp-cell">
            <h3 class="hp-cell-title">Popular Tourist Destinations</h3>
            <p class="hp-cell-text">Explore top domestic and international tourist destinations with carefully curated travel packages that cover famous attractions, cultural experiences, and local highlights.</p>
          </div>
 
          <!-- R2C2 -->
          <div class="hp-cell">
            <h3 class="hp-cell-title">Family, Couple &amp; Group Holiday Packages</h3>
            <p class="hp-cell-text">We design special holiday packages for families, honeymoon couples, and group travellers, ensuring comfortable stays, exciting activities, and unforgettable memories.</p>
          </div>
 
          <!-- R2C3 -->
          <div class="hp-cell">
            <h3 class="hp-cell-title">Expert Travel Support &amp; Assistance</h3>
            <p class="hp-cell-text">Our travel specialists provide end-to-end support, helping with itinerary planning, travel bookings, and on-trip assistance to ensure a smooth and enjoyable holiday.</p>
          </div>
 
        </div><!-- /hp-grid -->
      </div><!-- /hp-right -->
 
    </div><!-- /hp-body -->
  </div><!-- /container -->
</section>

<!-- ══════════════════════════════════════
     SECTION — full-width bg image
  ══════════════════════════════════════ -->
<style>
  .hotel-reserve-section {
    position: relative;
    width: 100%;
    min-height: 520px;
    overflow: hidden;
    background:
      linear-gradient(to bottom, rgba(30,42,100,.72) 0%, rgba(25,36,88,.80) 100%),
      url('https://images.unsplash.com/photo-1571896349842-33c89424de2d?w=1600&q=85&fit=crop&crop=center') center center / cover no-repeat;
    padding: 60px 0 70px;
  }

  /* ── Heading block ── */
  .hotel-reserve-heading {
    text-align: center;
    position: relative;
    z-index: 10;
    margin-bottom: 0;
  }
  .hotel-reserve-title {
    font-family: 'Playfair Display', serif;
    font-size: clamp(1.7rem, 3.5vw, 2.6rem);
    color: #fff;
    letter-spacing: -.01em;
    margin-bottom: 10px;
  }
  .hotel-reserve-title em {
    font-style: normal;
    color: #f9c74f;
  }
  .hotel-reserve-divider {
    width: 46px; height: 3px;
    background: linear-gradient(90deg, var(--euphoria-red), #f9c74f);
    border-radius: 2px;
    margin: 0 auto 14px;
  }
  .hotel-reserve-subtitle {
    font-size: clamp(.85rem, 1.7vw, .98rem);
    color: rgba(255,255,255,.75);
    max-width: 500px;
    margin: 0 auto;
    line-height: 1.75;
  }

  /* ══════════════════════════════════════
      CANVAS — absolute positioned circles
  ══════════════════════════════════════ */
  .hotel-reserve-canvas {
    position: relative;
    width: 100%;
    height: 480px;
    margin-top: 10px;
  }

  /* ── Each feature node ── */
  .hotel-reserve-node {
    position: absolute;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    cursor: default;
    width: 110px;
    /* transform offset so the circle is centered on its anchor point */
    transform: translate(-50%, -50%);
  }

  /* The dashed circle */
  .hotel-reserve-circle {
    width: 96px;
    height: 96px;
    border-radius: 50%;
    border: 2px dashed rgba(255,255,255,.45);
    background: rgba(255,255,255,.08);
    backdrop-filter: blur(6px);
    -webkit-backdrop-filter: blur(6px);
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    transition:
      border-style  .3s ease,
      border-color  .3s ease,
      background    .3s ease,
      transform     .3s ease,
      box-shadow    .35s ease;
    margin-bottom: 8px;
  }

  /* Outer halo */
  .hotel-reserve-circle::after {
    content: '';
    position: absolute;
    inset: -8px;
    border-radius: 50%;
    border: 1.5px dashed rgba(255,255,255,.15);
    transition: opacity .3s ease;
    pointer-events: none;
  }

  .hotel-reserve-node:hover .hotel-reserve-circle {
    border-style: solid;
    border-color: #fff;
    background: var(--euphoria-blue);
    transform: scale(1.10);
    box-shadow:
      0 8px 32px rgba(37,53,111,.55),
      0 0 0 8px  rgba(255,255,255,.08),
      0 0 0 16px rgba(255,255,255,.03);
  }
  .hotel-reserve-node:hover .hotel-reserve-circle::after {
    opacity: 0;
  }

  /* Icon inside circle */
  .hotel-reserve-icon {
    width: 44px; height: 44px;
    border-radius: 50%;
    background: rgba(249,199,79,.15);
    display: flex; align-items: center; justify-content: center;
    transition: background .3s ease;
  }
  .hotel-reserve-node:hover .hotel-reserve-icon {
    background: rgba(255,255,255,.18);
  }

  .hotel-reserve-icon svg {
    width: 22px; height: 22px;
    stroke: #f9c74f;
    fill: none;
    stroke-width: 1.6;
    stroke-linecap: round;
    stroke-linejoin: round;
    transition: stroke .3s ease;
  }
  .hotel-reserve-node:hover .hotel-reserve-icon svg {
    stroke: #fff;
  }

  /* Label below circle */
  .hotel-reserve-label {
    font-size: .72rem;
    font-weight: 600;
    color: rgba(255,255,255,.90);
    line-height: 1.35;
    letter-spacing: .01em;
    transition: color .3s ease;
    white-space: nowrap;
  }
  .hotel-reserve-node:hover .hotel-reserve-label {
    color: #f9c74f;
  }

  /* ── Node positions — LEFT 5 ── */
  /* Scattered naturally across left half */
  .hotel-reserve-node--n1  { left: 8%;  top: 18%; }
  .hotel-reserve-node--n2  { left: 19%; top: 52%; }
  .hotel-reserve-node--n3  { left: 6%;  top: 80%; }
  .hotel-reserve-node--n4  { left: 30%; top: 28%; }
  .hotel-reserve-node--n5  { left: 28%; top: 75%; }

  /* ── Node positions — RIGHT 5 ── */
  .hotel-reserve-node--n6  { left: 72%; top: 18%; }
  .hotel-reserve-node--n7  { left: 85%; top: 45%; }
  .hotel-reserve-node--n8  { left: 94%; top: 18%; }
  .hotel-reserve-node--n9  { left: 70%; top: 72%; }
  .hotel-reserve-node--n10 { left: 88%; top: 78%; }

  /* ── Dashed connector lines (SVG overlay) ── */
  .hotel-reserve-lines {
    position: absolute;
    inset: 0;
    width: 100%; height: 100%;
    pointer-events: none;
    z-index: 1;
  }

  /* All nodes above lines, below nothing */
  .hotel-reserve-node { z-index: 6; }

  /* ── Stagger fade-in ── */
  .hotel-reserve-node {
    animation: stt-fadeIn .55s ease both;
  }
  .hotel-reserve-node--n1  { animation-delay: .05s; }
  .hotel-reserve-node--n2  { animation-delay: .10s; }
  .hotel-reserve-node--n3  { animation-delay: .15s; }
  .hotel-reserve-node--n4  { animation-delay: .20s; }
  .hotel-reserve-node--n5  { animation-delay: .25s; }
  .hotel-reserve-node--n6  { animation-delay: .08s; }
  .hotel-reserve-node--n7  { animation-delay: .13s; }
  .hotel-reserve-node--n8  { animation-delay: .18s; }
  .hotel-reserve-node--n9  { animation-delay: .23s; }
  .hotel-reserve-node--n10 { animation-delay: .28s; }

  @keyframes stt-fadeIn {
    from { opacity: 0; transform: translate(-50%,-50%) scale(.8); }
    to   { opacity: 1; transform: translate(-50%,-50%) scale(1); }
  }

  /* ══════════════════════════════════════
      RESPONSIVE — stack on mobile
  ══════════════════════════════════════ */
  @media (max-width: 767px) {
    .hotel-reserve-canvas {
      height: auto;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 18px 14px;
      padding: 20px 0 10px;
      position: static;
    }
    .hotel-reserve-node {
      position: static;
      transform: none;
      width: 90px;
    }
    .hotel-reserve-node:hover .hotel-reserve-circle {
      transform: scale(1.08);
    }
    @keyframes stt-fadeIn {
      from { opacity: 0; transform: translateY(14px) scale(.9); }
      to   { opacity: 1; transform: translateY(0) scale(1); }
    }
    .hotel-reserve-lines { display: none; }
    .hotel-reserve-circle { width: 80px; height: 80px; }
    .hotel-reserve-icon   { width: 36px; height: 36px; }
    .hotel-reserve-icon svg { width: 18px; height: 18px; }
    .hotel-reserve-label  { font-size: .65rem; white-space: normal; }
  }
</style>

<section id="hotel-section" class="hotel-reserve-section">

  <!-- Heading -->
  <div class="hotel-reserve-heading container">
    <h2 class="hotel-reserve-title">Hotel <em>Reservation</em></h2>
    <div class="hotel-reserve-divider"></div>
    <p class="hotel-reserve-subtitle">
      Book verified hotels worldwide with the best prices, secure payments,
      and instant confirmation.
    </p>
  </div>

  <!-- Absolute-positioned canvas -->
  <div class="hotel-reserve-canvas">

    <!-- SVG dashed connector lines -->
    <svg class="hotel-reserve-lines" viewBox="0 0 1000 480" preserveAspectRatio="none">
      <!-- Left connectors to center (~500,240) -->
      <line x1="80"  y1="86"  x2="500" y2="240" stroke="rgba(255,255,255,.12)" stroke-width="1" stroke-dasharray="5 5"/>
      <line x1="190" y1="250" x2="500" y2="240" stroke="rgba(255,255,255,.12)" stroke-width="1" stroke-dasharray="5 5"/>
      <line x1="60"  y1="384" x2="500" y2="240" stroke="rgba(255,255,255,.12)" stroke-width="1" stroke-dasharray="5 5"/>
      <line x1="300" y1="134" x2="500" y2="240" stroke="rgba(255,255,255,.12)" stroke-width="1" stroke-dasharray="5 5"/>
      <line x1="280" y1="360" x2="500" y2="240" stroke="rgba(255,255,255,.12)" stroke-width="1" stroke-dasharray="5 5"/>
      <!-- Right connectors to center -->
      <line x1="720" y1="86"  x2="500" y2="240" stroke="rgba(255,255,255,.12)" stroke-width="1" stroke-dasharray="5 5"/>
      <line x1="850" y1="216" x2="500" y2="240" stroke="rgba(255,255,255,.12)" stroke-width="1" stroke-dasharray="5 5"/>
      <line x1="940" y1="86"  x2="500" y2="240" stroke="rgba(255,255,255,.12)" stroke-width="1" stroke-dasharray="5 5"/>
      <line x1="700" y1="346" x2="500" y2="240" stroke="rgba(255,255,255,.12)" stroke-width="1" stroke-dasharray="5 5"/>
      <line x1="880" y1="374" x2="500" y2="240" stroke="rgba(255,255,255,.12)" stroke-width="1" stroke-dasharray="5 5"/>
    </svg>

    <!-- ══ LEFT 5 NODES ══ -->
    <div class="hotel-reserve-node hotel-reserve-node--n1">
      <div class="hotel-reserve-circle">
        <div class="hotel-reserve-icon">
          <svg viewBox="0 0 24 24"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg>
        </div>
      </div>
      <span class="hotel-reserve-label">Verified &amp;<br>Trusted Hotels</span>
    </div>

    <div class="hotel-reserve-node hotel-reserve-node--n2">
      <div class="hotel-reserve-circle">
        <div class="hotel-reserve-icon">
          <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
        </div>
      </div>
      <span class="hotel-reserve-label">24/7 Booking<br>Support</span>
    </div>

    <div class="hotel-reserve-node hotel-reserve-node--n3">
      <div class="hotel-reserve-circle">
        <div class="hotel-reserve-icon">
          <svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
        </div>
      </div>
      <span class="hotel-reserve-label">Group &amp; Corporate<br>Bookings</span>
    </div>

    <div class="hotel-reserve-node hotel-reserve-node--n4">
      <div class="hotel-reserve-circle">
        <div class="hotel-reserve-icon">
          <svg viewBox="0 0 24 24"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
        </div>
      </div>
      <span class="hotel-reserve-label">Fast &amp; Secure<br>Booking</span>
    </div>

    <div class="hotel-reserve-node hotel-reserve-node--n5">
      <div class="hotel-reserve-circle">
        <div class="hotel-reserve-icon">
          <svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg>
        </div>
      </div>
      <span class="hotel-reserve-label">Personalised<br>Booking Help</span>
    </div>

    <!-- ══ RIGHT 5 NODES ══ -->
    <div class="hotel-reserve-node hotel-reserve-node--n6">
      <div class="hotel-reserve-circle">
        <div class="hotel-reserve-icon">
          <svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
        </div>
      </div>
      <span class="hotel-reserve-label">Variety of<br>Hotels</span>
    </div>

    <div class="hotel-reserve-node hotel-reserve-node--n7">
      <div class="hotel-reserve-circle">
        <div class="hotel-reserve-icon">
          <svg viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
        </div>
      </div>
      <span class="hotel-reserve-label">Easy Online<br>Hotel Booking</span>
    </div>

    <div class="hotel-reserve-node hotel-reserve-node--n8">
      <div class="hotel-reserve-circle">
        <div class="hotel-reserve-icon">
          <svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
        </div>
      </div>
      <span class="hotel-reserve-label">Best Hotel<br>Deals</span>
    </div>

    <div class="hotel-reserve-node hotel-reserve-node--n9">
      <div class="hotel-reserve-circle">
        <div class="hotel-reserve-icon">
          <svg viewBox="0 0 24 24"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/><line x1="12" y1="12" x2="12" y2="16"/><line x1="10" y1="14" x2="14" y2="14"/></svg>
        </div>
      </div>
      <span class="hotel-reserve-label">Flexible Rooms &amp;<br>Amenities</span>
    </div>

    <div class="hotel-reserve-node hotel-reserve-node--n10">
      <div class="hotel-reserve-circle">
        <div class="hotel-reserve-icon">
          <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
        </div>
      </div>
      <span class="hotel-reserve-label">Worldwide Hotel<br>Booking</span>
    </div>

  </div><!-- /canvas -->

</section>

<!-- sightseeing-tour-section -->
<style>
  
  .sightseeing-tour-section {
      background: var(--bg-light);
      padding: 80px 0;
  }

  /* Title */
  .sightseeing-tour-title {
      font-size: 38px;
      font-weight: 700;
      color: var(--euphoria-blue);
      position: relative;
      margin-bottom: 20px;
  }

  /* Paragraph */
  .sightseeing-tour-text {
      color: var(--text-dark);
      font-size: 15px;
      line-height: 1.7;
      margin-bottom: 20px;
  }

  /* List */
  .sightseeing-tour-list {
      list-style: none;
      padding: 0;
  }

  .sightseeing-tour-list li {
      margin-bottom: 12px;
      font-size: 15px;
      color: var(--text-dark);
      display: flex;
      align-items: center;
  }

  .sightseeing-tour-list li::before {
      content: "✔";
      color: var(--euphoria-red);
      font-weight: bold;
      margin-right: 10px;
  }

  /* Image Cards */
  .sightseeing-tour-card {
      border-radius: 20px;
      overflow: hidden;
      border: 1px solid var(--card-border);
      box-shadow: 0 10px 25px var(--black-blur);
      transition: 0.4s;
  }

  .sightseeing-tour-card:hover {
      transform: translateY(-8px) scale(1.02);
  }

  /* Images */
  .sightseeing-tour-card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
  }

  /* Layout Heights */
  .sightseeing-tour-small {
      height: 220px;
  }

  .sightseeing-tour-large {
      height: 460px;
  }

  /* Responsive */
  @media (max-width: 991px) {
      .sightseeing-tour-large {
          height: 300px;
      }
  }

  @media (max-width: 767px) {
      .sightseeing-tour-title {
          font-size: 28px;
      }
  }
</style>
<section id="tour-package-section" class="sightseeing-tour-section bg-white">
  <div class="container">
      <div class="row align-items-center">

          <!-- Left Content -->
          <div class="col-lg-6 mb-4 mb-lg-0">
              <h2 class="sightseeing-tour-title">Sightseeing Tours</h2>

              <p class="sightseeing-tour-text">
                  We offer professional guided sightseeing tours that help travellers explore major attractions with ease.
                  Our tours are designed for comfort, discovery, and unforgettable experiences.
              </p>

              <p class="sightseeing-tour-text">
                  Our knowledgeable guides share insights about history, culture, and hidden gems, making every journey engaging and meaningful.
              </p>

              <ul class="sightseeing-tour-list">
                  <li>Experienced and knowledgeable tour guides</li>
                  <li>Well-planned itineraries covering top attractions</li>
                  <li>Comfortable transportation and smooth travel</li>
                  <li>Customised tours for individuals, families, and groups</li>
              </ul>
          </div>

          <!-- Right Images -->
          <div class="col-lg-6">
              <div class="row g-3">

                  <!-- Top Left -->
                  <div class="col-6">
                      <div class="sightseeing-tour-card sightseeing-tour-small">
                          <img src="assets/img/tour-travel/sightseeing-1.png" alt="">
                      </div>
                  </div>

                  <!-- Right Large -->
                  <div class="col-6">
                      <div class="sightseeing-tour-card sightseeing-tour-large">
                          <img src="assets/img/tour-travel/sightseeing-2.png" alt="">
                      </div>
                  </div>

                  <!-- Bottom Left -->
                  <div class="col-6" style="position: relative; margin-top: -215px;">
                      <div class="sightseeing-tour-card sightseeing-tour-small">
                          <img src="assets/img/tour-travel/sightseeing-3.png" alt="">
                      </div>
                  </div>

              </div>
          </div>

      </div>
  </div>
</section>

<!-- Tour Package Section -->
<style>
  .tour-package-section {
      padding: 80px 0;
      position: relative;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      overflow: hidden;
      background-size: cover;
      background-image: url('assets/img/background/holiday-tour-package.png');
      background-repeat: round;
  }

  /* Content */
  .tour-package-content {
      position: relative;
      z-index: 3;
      text-align: center;
      margin: auto;
  }

  /* Big Blur Text */
  .tour-package-bg-title {
      position: absolute;
      top: 20px;
      left: 50%;
      transform: translateX(-50%);
      font-size: 120px;
      font-weight: 800;
      color: rgba(255,255,255,0.05);
      pointer-events: none;
      white-space: nowrap;
  }

  /* Heading */
  .tour-package-title {
    font-size: 40px;
    font-weight: 700;
    margin-bottom: 20px;
  }

  /* Text */
  .tour-package-text {
    font-size: 18px;
    line-height: 1.5;
    margin-bottom: 15px;
  }

  /* Bottom Image Accent (Optional subtle fade) */
  .tour-package-fade {
      position: absolute;
      bottom: 0;
      width: 100%;
      height: 120px;
      background: linear-gradient(transparent, rgba(0,0,0,0.6));
      z-index: 2;
  }

  /* Responsive */
  @media (max-width: 991px) {
      .tour-package-title {
          font-size: 32px;
      }

      .tour-package-bg-title {
          font-size: 70px;
      }
  }

  @media (max-width: 576px) {
      .tour-package-title {
          font-size: 26px;
      }

      .tour-package-text {
          font-size: 14px;
      }

      .tour-package-bg-title {
          font-size: 50px;
          top: 10px;
      }
  }
</style>

<section id="guide-tour-section" class="tour-package-section">

    <!-- Content -->
    <div class="container">
        <div class="tour-package-content">

            <div class="tour-package-bg-title">Holiday</div>

            <h2 class="tour-package-title">Tour Package</h2>

            <p class="tour-package-text">
                We offer a variety of tour packages, including city tours, cultural tours, and adventure trips designed to suit different travel preferences.
            </p>

            <p class="tour-package-text">
                Our customised packages are planned according to your travel goals, budget, and schedule, helping you explore popular destinations, heritage sites, and natural attractions.
            </p>

            <p class="tour-package-text">
                To make your journey easy and stress-free, we provide complete travel arrangements, including transportation, hotel accommodations, sightseeing, and guided tours.
            </p>

        </div>
    </div>

    <div class="tour-package-fade"></div>

</section>


<?php
include_once ('elements/faqs.php');
include_once ('elements/footer.php');
?>