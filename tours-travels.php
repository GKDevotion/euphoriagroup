<?php
include_once('elements/header.php');
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
<style>
  /* --- Travel & Tour Tabs Mobile Styles --- */
  @media (max-width: 991px) {

    /* 1. Make the tabs container scrollable horizontally */
    .custom-tabs {
      display: flex;
      flex-wrap: nowrap;
      /* Prevent buttons from wrapping to new lines */
      overflow-x: auto;
      /* Enable horizontal scroll */
      -webkit-overflow-scrolling: touch;
      /* Smooth swiping on iOS */
      gap: 12px;
      padding: 10px 5px;
      margin-bottom: 30px;
      border-bottom: 2px solid #f0f0f0;
    }

    /* Hide the scrollbar for a cleaner 'app-like' look */
    .custom-tabs::-webkit-scrollbar {
      display: none;
    }

    .custom-tabs {
      -ms-overflow-style: none;
      /* Internet Explorer/Edge */
      scrollbar-width: none;
      /* Firefox */
    }

    .tab-btn {
      white-space: nowrap;
      /* CRITICAL: Keeps button text on one line */
      flex-shrink: 0;
      /* Prevents buttons from squishing */
      padding: 10px 20px;
      font-size: 0.95rem;
    }

    /* 2. Content Box Adjustments */
    .corporate-content-box {
      padding: 25px 15px;
    }

    /* Stack the image and text */
    .illustration {
      max-width: 250px;
      margin: 0 auto 25px;
      display: block;
      height: auto;
    }

    .text-content {
      text-align: center;
      /* Balanced look for stacked layout */
    }

    .text-content p {
      font-size: 0.9rem;
      line-height: 1.6;
    }
  }

  @media (max-width: 767px) {
    .content-section {
      padding: 30px 10px;
    }

    .text-content p {
      text-align: left;
      /* Better readability for long text on small phones */
    }

    .about-title {
      font-size: 1.5rem;
    }
  }
</style>

<div class="container content-section">

  <?php
  if( false ){
    ?>
    <div class="d-flex justify-content-center mb-3 container position-relative" style="z-index:2">

      <div class="formation-nav-wrapper" data-aos="fade-up" data-aos-duration="800">

        <a href="#flight-section" class="nav-link-pill nav-link-item nav-active-pill">Flight</a>
        <div class="nav-sep"></div>

        <a href="#train-section" class="nav-link-pill nav-link-item">Train</a>
        <div class="nav-sep"></div>

        <a href="#bus-section" class="nav-link-pill nav-link-item">Bus</a>
        <div class="nav-sep"></div>

        <a href="#taxi-section" class="nav-link-pill nav-link-item">Taxi</a>
        <div class="nav-sep"></div>

        <a href="#local-section" class="nav-link-pill nav-link-item">Local Transporatation</a>
        <div class="nav-sep"></div>

        <a href="#hotel-section" class="nav-link-pill nav-link-item">Hotel</a>
        <div class="nav-sep"></div>

        <a href="#holiday-package-section" class="nav-link-pill nav-link-item">Holiday Package</a>
        <div class="nav-sep"></div>

        <a href="#tour-package-section" class="nav-link-pill nav-link-item">Tour Package</a>
        <div class="nav-sep"></div>

        <a href="#guide-tour-section" class="nav-link-pill nav-link-item">Guided Tour</a>
        <div class="nav-sep"></div>

        <a href="#faqs" class="nav-link-pill nav-link-item">FAQ</a>


      </div>

    </div>
    <?php
  } ?>


  <!-- Tab Content -->
  <div id="tab1" class="corporate-content-box active">
    <div class="row align-items-center">
      <div class="col-md-5">
        <img src="assets/img/tour-travel/airplan-window.png" class="illustration">
      </div>
      <div class="col-md-7 text-content ">
        <p style="font-size: 18px; font-family: 'Poppins', sans-serif;">
          Our inbound tour and travel services in India are designed to offer international travellers a seamless, comfortable, and memorable experience. We specialise in customised travel packages, guided tours, hotel bookings, transportation arrangements, and comprehensive travel assistance for individuals, families, and corporate groups visiting India.
        </p>
        <p style="font-size: 18px; font-family: 'Poppins', sans-serif;">
          With in-depth local expertise and a strong network of hospitality partners, we curate personalised itineraries covering cultural heritage tours, business travel, spiritual journeys, luxury vacations, and adventure tourism. From airport pickup to accommodation, sightseeing, and on-ground coordination, we ensure hassle-free travel planning and professional service.
        </p>
        <p style="font-size: 18px; font-family: 'Poppins', sans-serif;">
          Whether you are visiting India for leisure, business, medical tourism, or cultural exploration, our inbound travel solutions provide reliable support, competitive pricing, and exceptional customer service to make your journey smooth and unforgettable.
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
    left: -10px;
    top: -18px;
    width: clamp(110px, 16vw, 210px);
    filter: drop-shadow(4px 8px 18px rgba(37, 53, 111, 0.18));
    animation: floatPlane 4s ease-in-out infinite;
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
    color: #666;
    margin: 0 auto;
    font-size: 22px;
    line-height: 1.6;
    font-family: "Anek Kannada", "Poppins", sans-serif;
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
  .flight-card {
    position: relative;
    flex-shrink: 0;
    height: 300px;
    border-radius: 16px;
    overflow: hidden;
    cursor: pointer;
    box-shadow: 0 4px 20px rgba(37, 53, 111, 0.08);
    background: #111;
    transition: transform .35s ease, box-shadow .35s ease;
    animation: cardReveal .6s ease both;
  }

  .flight-card:nth-child(1) {
    animation-delay: .05s;
  }

  .flight-card:nth-child(2) {
    animation-delay: .14s;
  }

  .flight-card:nth-child(3) {
    animation-delay: .23s;
  }

  .flight-card:nth-child(4) {
    animation-delay: .32s;
  }

  .flight-card:nth-child(5) {
    animation-delay: .41s;
  }

  .flight-card:nth-child(6) {
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

  .flight-card:hover {
    transform: translateY(-6px) scale(1.02);
    box-shadow: 0 16px 40px rgba(37, 53, 111, 0.20);
  }

  .flight-card img.card-bg {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    opacity: .88;
    transition: transform .5s ease;
  }

  .flight-card:hover img.card-bg {
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
    padding: 20px 18px 22px;
    color: #fff;
  }

  .card-body-content h5 {
    font-size: 20px;
    font-weight: 400;
    line-height: 1.25;
    font-family: "Anek Kannada", "Poppins", sans-serif;
    text-align: center;
    color: #fff;
  }

  .card-body-content p {
    color: #fff;
    line-height: 1.5;
    font-family: "Poppins", sans-serif;
    text-align: center;
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

  .flight-card:hover .card-accent {
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
    margin-top: 32px;
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

  /* --- Flight Section Mobile Styles --- */
  @media (max-width: 991px) {
    .flight-section {
      padding: 50px 0 60px;
    }

    /* Scale down the massive background watermark */
    .flight-section::before {
      font-size: 50px;
      top: 40px;
    }

    .section-title {
      font-size: 1.8rem;
    }

    /* Adjust track gap for smaller screens */
    .cards-track {
      gap: 15px;
    }
  }

  @media (max-width: 767px) {

    /* Hide the floating plane on mobile to save space */
    .plane-img {
      display: none !important;
    }

    .section-header {
      margin-bottom: 30px;
    }

    /* Adjust the card height for mobile proportions */
    .flight-card {
      height: 260px;
      width: 85vw;
      /* Show 85% of one card to hint that it's a slider */
    }

    .card-body-content {
      padding: 15px;
    }

    /* Move arrows to be more thumb-friendly or hide them if using touch-swipe */
    .carousel-btn {
      width: 36px;
      height: 36px;
    }

    .carousel-btn.prev {
      left: -5px;
    }

    .carousel-btn.next {
      right: -5px;
    }

    /* Ensure dots aren't too large */
    .dot {
      width: 8px;
      height: 8px;
    }
  }

  @media (max-width: 480px) {

    .section-title {
      font-size: 1.5rem;
    }

    .section-subtitle {
      font-size: 16px;
      padding: 0 10px;
    }

    /* On very small phones, make cards take up more width */
    .flight-card {
      width: 90vw;
    }
  }
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
      <button class="carousel-btn prev d-none" id="prevBtn" aria-label="Previous">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <polyline points="15 18 9 12 15 6" />
        </svg>
      </button>

      <div class="carousel-outer" id="carouselOuter">
        <div class="cards-track" id="cardsTrack">

          <!-- Card 1 -->
          <div class="flight-card">
            <img class="card-bg" src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=700&q=80" alt="Domestic Flights" />
            <div class="card-overlay"></div>
            <div class="card-accent d-none"><svg viewBox="0 0 24 24">
                <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z" />
              </svg></div>
            <div class="card-body-content">
              <h5>Domestic Flights</h5>
              <p>We provide seamless booking for domestic flights, connecting you to major destinations in India with trusted airline partners.</p>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="flight-card">
            <img class="card-bg" src="https://images.unsplash.com/photo-1569154941061-e231b4725ef1?w=700&q=80" alt="Competitive Airfare Deals" />
            <div class="card-overlay"></div>
            <div class="card-accent d-none"><svg viewBox="0 0 24 24">
                <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z" />
              </svg></div>
            <div class="card-body-content">
              <h5>Competitive Airfare Deals</h5>
              <p>Our platform helps you access competitive flight fares and special travel deals, ensuring low-cost travel planning for all.</p>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="flight-card">
            <img class="card-bg" src="https://images.unsplash.com/photo-1488085061387-422e29b40080?w=700&q=80" alt="Wide Airline Network" />
            <div class="card-overlay"></div>
            <div class="card-accent d-none"><svg viewBox="0 0 24 24">
                <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z" />
              </svg></div>
            <div class="card-body-content">
              <h5>Wide Airline Network</h5>
              <p>We collaborate with leading global airlines to offer a wide selection of flight options, schedules, and routes for convenient planning.</p>
            </div>
          </div>

          <!-- Card 4 -->
          <div class="flight-card">
            <img class="card-bg" src="https://images.unsplash.com/photo-1521791136064-7986c2920216?w=700&q=80" alt="Corporate Travel Management" />
            <div class="card-overlay"></div>
            <div class="card-accent d-none"><svg viewBox="0 0 24 24">
                <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z" />
              </svg></div>
            <div class="card-body-content">
              <h5>Corporate Travel Management</h5>
              <p>Our services support corporate travel needs with efficient booking management, travel policy compliance, and cost control.</p>
            </div>
          </div>

          <!-- Card 5 -->
          <div class="flight-card">
            <img class="card-bg" src="https://images.unsplash.com/photo-1548574505-5e239809ee19?w=700&q=80" alt="Easy Rescheduling" />
            <div class="card-overlay"></div>
            <div class="card-accent d-none"><svg viewBox="0 0 24 24">
                <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z" />
              </svg></div>
            <div class="card-body-content">
              <h5>Easy Rescheduling</h5>
              <p>We offer hassle-free flight rescheduling and cancellation options to ensure a smooth travel experience whenever plans change.</p>
            </div>
          </div>

          <!-- Card 6 -->
          <div class="flight-card">
            <img class="card-bg" src="https://images.unsplash.com/photo-1540339832862-474599807836?w=700&q=80" alt="24/7 Support" />
            <div class="card-overlay"></div>
            <div class="card-accent d-none"><svg viewBox="0 0 24 24">
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
    const cards = Array.from(track.querySelectorAll('.flight-card'));
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
    content: '';
    position: absolute;
    inset: 0;
    /* background-image:
      linear-gradient(rgba(37, 53, 111, .03) 1px, transparent 1px),
      linear-gradient(90deg, rgba(37, 53, 111, .03) 1px, transparent 1px); */
    background-size: 48px 48px;
    pointer-events: none;
    z-index: 0;
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
    right: -20px;
    top: -30px;
    width: clamp(180px, 26vw, 340px);
    filter: drop-shadow(0 12px 30px rgba(37, 53, 111, 0.18));
    animation: trainSlide 1s cubic-bezier(.22, 1, .36, 1) both, trainFloat 5s ease-in-out 1s infinite;
  }

  @keyframes trainSlide {
    from {
      transform: translateX(120px);
      opacity: 0;
    }

    to {
      transform: translateX(0);
      opacity: 1;
    }
  }

  @keyframes trainFloat {

    0%,
    100% {
      transform: translateY(0) rotate(0deg);
    }

    50% {
      transform: translateY(-8px) rotate(.4deg);
    }
  }

  .section-title {

    font-size: clamp(30px, 4.5vw, 48px);
    font-weight: 600;
    color: var(--euphoria-blue);
    line-height: 1.1;
    margin-bottom: 12px;
    animation: fadeUp .7s ease both;
  }

  .section-title span {
    color: var(--euphoria-red);
  }

  @keyframes fadeUp {
    from {
      opacity: 0;
      transform: translateY(20px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
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
    .cards-grid {
      grid-template-columns: 1fr;
    }

    .card-center {
      grid-column: 1;
    }
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
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg,
        var(--shine) 0%,
        transparent 50%,
        transparent 100%);
    opacity: 0;
    transition: opacity .35s;
    z-index: 4;
    border-radius: inherit;
    pointer-events: none;
  }

  .tcard:hover::before {
    opacity: 1;
  }

  /* Red accent stripe top */
  .tcard::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: linear-gradient(90deg, var(--euphoria-blue), var(--euphoria-red));
    z-index: 5;
    transform: scaleX(0);
    transform-origin: left;
    transition: transform .4s cubic-bezier(.4, 0, .2, 1);
  }

  .tcard:hover::after {
    transform: scaleX(1);
  }

  /* ── CARD IMAGE BOX ── */
  .card-img-box {
    position: relative;
    width: 100%;
    height: 200px;
    overflow: hidden;
    background: linear-gradient(135deg, #e8eeff 0%, #dce8ff 100%);
  }

  .card-center .card-img-box {
    height: 280px;
  }

  .card-img-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform .5s ease;
  }

  .tcard:hover .card-img-box img {
    transform: scale(1.06);
  }

  /* icon badge */
  .card-badge {
    position: absolute;
    bottom: 12px;
    right: 12px;
    width: 42px;
    height: 42px;
    border-radius: 50%;
    background: var(--euphoria-red);
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 14px rgba(227, 30, 36, .35);
    transform: translateY(10px) scale(.85);
    opacity: 0;
    transition: transform .35s, opacity .35s;
    z-index: 3;
  }

  .tcard:hover .card-badge {
    transform: translateY(0) scale(1);
    /* opacity: 1; */
  }

  .card-badge svg {
    width: 18px;
    height: 18px;
    fill: #fff;
  }

  /* ── CARD CONTENT ── */
  .card-content {
    padding: 22px 22px 26px;
    position: relative;
    z-index: 2;
  }

  .card-icon {
    width: 44px;
    height: 44px;
    border-radius: 12px;
    background: var(--red-blur);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 14px;
    transition: background .3s, transform .3s;
  }


  .card-icon svg {
    width: 22px;
    height: 22px;
    fill: var(--euphoria-red);
    transition: fill .3s;
  }

  .tcard:hover .card-title {
    color: var(--euphoria-red);
  }

  .card-text {
    font-size: 16px;
    color: #666;
    font-family:"Poppins", sans-serif;
    line-height: 1.7;
    font-weight: 400;
  }

  /* center card — bigger text */
  .card-center .card-title {
    font-size: clamp(18px, 2vw, 24px);
  }

  .card-center .card-text {
    font-size: clamp(13px, 1.2vw, 14.5px);
  }

  /* ── FLOATING PARTICLES ── */
  .particle {
    position: absolute;
    border-radius: 50%;
    pointer-events: none;
    animation: drift linear infinite;
    z-index: 1;
  }

  @keyframes drift {
    0% {
      transform: translateY(0) rotate(0deg);
      opacity: .7;
    }

    100% {
      transform: translateY(-80px) rotate(360deg);
      opacity: 0;
    }
  }

  /* ── STAGGER delays for cards ── */
  .card-wrap:nth-child(1) {
    transition-delay: .05s;
  }

  .card-wrap:nth-child(2) {
    transition-delay: .18s;
  }

  .card-wrap:nth-child(3) {
    transition-delay: .08s;
  }

  .card-wrap:nth-child(4) {
    transition-delay: .26s;
  }

  .card-wrap:nth-child(5) {
    transition-delay: .34s;
  }

  /* --- Train Section Mobile Styles --- */

  @media (max-width: 991px) {
    .train-section {
      padding: 50px 0 70px;
    }

    /* Scale watermark for tablets */
    .watermark {
      font-size: 80px;
      letter-spacing: 4px;
      top: 21px;
    }

    /* Reset the complex grid for tablets */
    .cards-grid {
      grid-template-columns: 1fr 1fr;
      /* 2 columns */
      grid-template-rows: auto;
      gap: 20px;
    }

    /* Make the tall center card span the full width of the tablet row */
    .card-center {
      grid-column: 1 / 3;
      grid-row: auto;
    }

    .card-center .card-img-box {
      height: 220px;
      /* Bring center card image height closer to others */
    }
  }

  @media (max-width: 767px) {

    /* Hide train image on mobile as it overlaps header text */
    .train-img {
      display: none !important;
    }

    .section-title {
      font-size: 1.2rem;
      margin-bottom: 20px;
    }

    .section-subtitle {
      margin-top: 15px !important;
      font-size: 18px;
    }

    /* Single column for phones */
    .cards-grid {
      grid-template-columns: 1fr;
      gap: 25px;
    }

    .card-center {
      grid-column: 1;
    }

    /* Improve card readability on mobile */
    .card-img-box {
      height: 180px;
    }

    .card-content {
      padding: 20px;
    }

    /* Disable or simplify 3D tilt for touch devices to prevent scroll lag */
    .tcard {
      transform: none !important;
      transition: box-shadow 0.3s ease;
    }

    /* Make the badge always visible on mobile since there is no hover */
    .card-badge {
      opacity: 1;
      transform: translateY(0) scale(1);
    }
  }

  @media (max-width: 480px) {
    .watermark {
      font-size: 80px;
      letter-spacing: 1px;
    }

    .train-section::after {
      background-size: 30px 30px;
      /* Smaller grid texture */
    }
  }
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
      <h2 class="section-title">Train Booking</h2>
      <p class="section-subtitle mt-5">
        Reliable train ticket booking assistance with confirmed reservations and smooth travel planning.
      </p>
    </div>

    <!-- ── 5-CARD GRID ── -->
    <div class="cards-grid">

      <!-- TOP-LEFT: Easy Online Booking -->
      <div class="card-wrap">
        <div class="tcard">
          <div class="card-img-box">
            <img src="assets/img/tour-travel/easy-online.png" alt="Online Booking" />
            <div class="card-badge"><svg viewBox="0 0 24 24">
                <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z" />
              </svg></div>
          </div>
          <div class="card-content">
            <div class="card-icon">
              <svg viewBox="0 0 24 24">
                <path d="M17 1H7C5.9 1 5 1.9 5 3v18c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V3c0-1.1-.9-2-2-2zm0 14H7V5h10v10z" />
              </svg>
            </div>
            <h3 class="card-title">Easy Online Train Ticket Booking</h3>
            <p class="card-text">We provide hassle-free train ticket booking services across India, helping travellers secure confirmed reservations quickly and conveniently, saving time and avoiding last-minute travel stress.</p>
          </div>
        </div>
      </div>

      <!-- CENTRE TALL: Pan-India Network -->
      <div class="card-wrap card-center">
        <div class="tcard">
          <div class="card-img-box">
            <img src="assets/img/tour-travel/pan-india.png" alt="Railway Network" />
            <div class="card-badge"><svg viewBox="0 0 24 24">
                <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z" />
              </svg></div>
          </div>
          <div class="card-content">
            <div class="card-icon">
              <svg viewBox="0 0 24 24">
                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z" />
              </svg>
            </div>
            <h3 class="card-title">Pan-India Railway Network Coverage</h3>
            <p class="card-text">Book train tickets for all major routes across India with our comprehensive booking support. Whether it's business travel, family trips, or last-minute journeys, we help you access India's vast railway network with reliable and efficient booking services.</p>
          </div>
        </div>
      </div>

      <!-- TOP-RIGHT: Flexible Travel Options -->
      <div class="card-wrap">
        <div class="tcard">
          <div class="card-img-box">
            <img src="assets/img/tour-travel/flaxible-transport.png" alt="Flexible Travel" />
            <div class="card-badge"><svg viewBox="0 0 24 24">
                <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z" />
              </svg></div>
          </div>
          <div class="card-content">
            <div class="card-icon">
              <svg viewBox="0 0 24 24">
                <path d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-1 9H9V9h10v2zm-4 4H9v-2h6v2zm4-8H9V5h10v2z" />
              </svg>
            </div>
            <h3 class="card-title">Flexible Travel Options &amp; Seat Selection</h3>
            <p class="card-text">Choose from multiple classes — Sleeper, 3AC, 2AC, and First Class — based on your comfort and budget. We help travellers select the most suitable trains, routes, and seating options for a comfortable travel experience.</p>
          </div>
        </div>
      </div>

      <!-- BOTTOM-LEFT: Tatkal Reservation -->
      <div class="card-wrap">
        <div class="tcard">
          <div class="card-img-box">
            <img src="assets/img/tour-travel/confirm-ticket.png" alt="Tatkal Reservation" />
            <div class="card-badge"><svg viewBox="0 0 24 24">
                <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z" />
              </svg></div>
          </div>
          <div class="card-content">
            <div class="card-icon">
              <svg viewBox="0 0 24 24">
                <path d="M9 11H7v2h2v-2zm4 0h-2v2h2v-2zm4 0h-2v2h2v-2zm2-7h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z" />
              </svg>
            </div>
            <h3 class="card-title">Confirmed &amp; Tatkal Reservation Assistance</h3>
            <p class="card-text">Our expert team assists with confirmed train ticket bookings including Tatkal and emergency reservations, ensuring higher chances of seat availability and smooth reliable travel planning.</p>
          </div>
        </div>
      </div>

      <!-- BOTTOM-RIGHT: Complete Travel Assistance -->
      <div class="card-wrap">
        <div class="tcard">
          <div class="card-img-box">
            <img src="assets/img/tour-travel/complete-travel.png" alt="Travel Assistance" />
            <div class="card-badge"><svg viewBox="0 0 24 24">
                <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z" />
              </svg></div>
          </div>
          <div class="card-content">
            <div class="card-icon">
              <svg viewBox="0 0 24 24">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
              </svg>
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
      if (e.isIntersecting) {
        e.target.classList.add('visible');
        io.unobserve(e.target);
      }
    });
  }, {
    threshold: 0.12
  });
  document.querySelectorAll('.card-wrap').forEach(el => io.observe(el));

  /* ══════════════════════════════════════
    2. TRUE 3-D TILT on mouse move
  ══════════════════════════════════════ */
  document.querySelectorAll('[data-tilt]').forEach(card => {
    const MAX = 12; // degrees

    card.addEventListener('mousemove', e => {
      const r = card.getBoundingClientRect();
      const x = e.clientX - r.left;
      const y = e.clientY - r.top;
      const cx = r.width / 2;
      const cy = r.height / 2;
      const rx = ((y - cy) / cy) * -MAX; // tilt X
      const ry = ((x - cx) / cx) * MAX; // tilt Y

      card.style.transform =
        `perspective(900px) rotateX(${rx}deg) rotateY(${ry}deg) scale3d(1.03,1.03,1.03)`;
      card.style.boxShadow =
        `${-ry * 2}px ${rx * 2}px 50px rgba(37,53,111,0.22),
        0 20px 60px rgba(37,53,111,0.12)`;

      /* move shine highlight opposite to tilt */
      const px = ((x / r.width) * 100).toFixed(1);
      const py = ((y / r.height) * 100).toFixed(1);
      card.style.setProperty('--shine-x', px + '%');
      card.style.setProperty('--shine-y', py + '%');
    });

    card.addEventListener('mouseleave', () => {
      card.style.transform = '';
      card.style.boxShadow = '';
      card.style.transition = 'transform .5s cubic-bezier(.4,0,.2,1), box-shadow .5s ease';
      setTimeout(() => {
        card.style.transition = '';
      }, 500);
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
    const colours = ['#25356F', '#e31e24', '#a0addb', '#f0a0a2'];

    function create() {
      const p = document.createElement('div');
      const sz = Math.random() * 6 + 3;
      const dur = Math.random() * 8 + 6;
      const del = Math.random() * 10;

      Object.assign(p.style, {
        position: 'absolute',
        borderRadius: '50%',
        width: sz + 'px',
        height: sz + 'px',
        left: Math.random() * 100 + '%',
        top: (50 + Math.random() * 50) + '%',
        background: colours[Math.floor(Math.random() * colours.length)],
        opacity: (Math.random() * 0.3 + 0.1).toString(),
        animation: `drift ${dur}s ${del}s linear infinite`,
        pointerEvents: 'none',
        zIndex: '1'
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
    top: 10px;
    left: 50%;
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
    left: -10px;
    top: -24px;
    width: clamp(130px, 20vw, 280px);
    filter: drop-shadow(6px 10px 20px rgba(37, 53, 111, 0.18));
    animation: busFloat 4.5s ease-in-out infinite;
  }

  @keyframes busFloat {

    0%,
    100% {
      transform: translateY(0);
    }

    50% {
      transform: translateY(-9px);
    }
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
    transition: transform 0.5s cubic-bezier(.4, 0, .2, 1);
    will-change: transform;
  }

  .busline-icon {
    width: 70px;
    height: 70px;
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

  .bus-card:nth-child(1) {
    animation-delay: .05s;
  }

  .bus-card:nth-child(2) {
    animation-delay: .14s;
  }

  .bus-card:nth-child(3) {
    animation-delay: .23s;
  }

  .bus-card:nth-child(4) {
    animation-delay: .32s;
  }

  .bus-card:nth-child(5) {
    animation-delay: .41s;
  }

  .bus-card:nth-child(6) {
    animation-delay: .50s;
  }

  @keyframes busCardReveal {
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  /* hover: soft shadow lift */
  .bus-card:hover {
    box-shadow:
      0 8px 28px rgba(37, 53, 111, 0.13),
      0 2px 8px rgba(37, 53, 111, 0.07);
    border-color: rgba(37, 53, 111, 0.22);
    transform: translateY(-5px);
  }

  /* top accent line slides in on hover */
  .bus-card::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 2px;
    background: linear-gradient(90deg, var(--euphoria-blue), var(--euphoria-red));
    transform: scaleX(0);
    transform-origin: left;
    transition: transform .4s cubic-bezier(.4, 0, .2, 1);
    border-radius: 18px 18px 0 0;
  }

  .bus-card:hover::after {
    transform: scaleX(1);
  }

  /* ── ICON CIRCLE ── */
  .bus-icon-wrap {
    width: 72px;
    height: 72px;
    border-radius: 50%;
    background: var(--red-blur);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    transition: background .35s ease, transform .35s ease;
  }

  .bus-card:hover .bus-icon-wrap {
    background: var(--euphoria-red);
    transform: rotate(-8deg) scale(1.1);
  }

  .bus-icon-wrap svg {
    width: 34px;
    height: 34px;
    fill: none;
    stroke: var(--euphoria-red);
    stroke-width: 1.8;
    stroke-linecap: round;
    stroke-linejoin: round;
    transition: stroke .35s;
  }

  .bus-card:hover .bus-icon-wrap svg {
    stroke: #fff;
  }

  /* ── CARD TEXT ── */
  .bus-card-title {
    font-size: 20px;
    font-weight: 700;
    color: var(--euphoria-blue);
    margin-bottom: 12px;
    line-height: 1.5;
    transition: color .3s;
  }

  .bus-card:hover .bus-card-title {
    color: var(--euphoria-red);
  }

  .bus-card-text {
    font-size: 16px;
    color: #666666;
    font-weight: 400;
    font-family: "Poppins", sans-serif;
    line-height: 1.5;
  }

  /* ── ARROW BUTTONS ── */
  .bus-btn {
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

  .bus-btn:hover:not(:disabled) {
    background: var(--euphoria-red);
    transform: translateY(-50%) scale(1.1);
  }

  .bus-btn:disabled {
    opacity: .3;
    cursor: default;
  }

  .bus-btn-prev {
    left: -22px;
  }

  .bus-btn-next {
    right: -22px;
  }

  @media (max-width:767px) {
    .bus-img {
      display: none;
    }

    .bus-btn-prev {
      left: -8px;
    }

    .bus-btn-next {
      right: -8px;
    }
  }

  /* ── DOTS ── */
  .bus-dots {
    display: flex;
    justify-content: center;
    gap: 8px;
    margin-top: 34px;
  }

  .bus-dot {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: rgba(37, 53, 111, .2);
    border: none;
    padding: 0;
    cursor: pointer;
    transition: background .3s, transform .3s;
  }

  .bus-dot.bus-dot-active {
    background: var(--euphoria-blue);
    transform: scale(1.35);
  }

  .bus-dot:hover:not(.bus-dot-active) {
    background: var(--euphoria-red);
  }

  /* --- Bus Section Mobile Styles --- */

  @media (max-width: 991px) {
    .bus-section {
      padding: 50px 0 60px;
    }

    /* Shrink the massive watermark for tablets */
    .bus-watermark {
      font-size: 70px;
      letter-spacing: 3px;
      top: 20px;
    }

    /* Adjust track gap */
    .bus-track {
      gap: 15px;
    }
  }

  @media (max-width: 767px) {

    /* Hide the floating bus image to prevent overlapping header */
    .bus-img {
      display: none !important;
    }

    .bus-header {
      margin-bottom: 30px;
    }

    .bus-title {
      font-size: 1.2rem;
    }

    /* CARD SIZE: 85vw lets the user see the edge of the next card, hinting at a swipe */
    .bus-card {
      width: 85vw;
      padding: 25px 20px;
    }

    .bus-icon-wrap {
      width: 60px;
      height: 60px;
      margin-bottom: 15px;
    }

    .bus-icon-wrap svg {
      width: 28px;
      height: 28px;
    }

    /* Move buttons inside the padding of the section */
    .bus-btn {
      width: 36px;
      height: 36px;
    }

    .bus-btn-prev {
      left: -5px;
    }

    .bus-btn-next {
      right: -5px;
    }

    /* Dot spacing */
    .bus-dots {
      margin-top: 25px;
    }
  }

  @media (max-width: 480px) {

    /* Smallest phones watermark scale */
    .bus-watermark {
      font-size: 70px;
      letter-spacing: 1px;
    }

    .bus-subtitle {
      font-size: 13px;
      padding: 0 10px;
    }

    /* Increase card width slightly on tiny screens */
    .bus-card {
      width: 88vw;
    }
  }
</style>

<section id="bus-section" class="bus-section">
  <div class="bus-watermark">Buslines</div>

  <div class="container position-relative" style="z-index:2">

    <!-- HEADER -->
    <div class="bus-header">
      <img src="assets/img/tour-travel/bus-on.png" alt="Bus" class="bus-img d-none d-md-block" onerror="this.style.display='none'" />
      <h2 class="bus-title">Bus Booking</h2>

      <p class="section-subtitle mt-5 w-100">
        Convenient bus booking services for intercity and interstate travel with multiple operator options.
      </p>
    </div>

    <!-- CAROUSEL -->
    <div class="position-relative px-3 mb-3">

      <button class="bus-btn bus-btn-prev d-none" id="busPrev" aria-label="Previous">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <polyline points="15 18 9 12 15 6" />
        </svg>
      </button>

      <div class="bus-carousel-outer" id="busOuter">
        <div class="bus-track" id="busTrack">

          <!-- Card 1 -->
          <div class="bus-card">
            <div class="mb-3">
              <!-- ticket icon -->
              <img src="assets/img/icon/busline-1.png" alt="Easy Online Bus Ticket Booking" class="busline-icon">
            </div>
            <h3 class="bus-card-title">Easy Online Bus Ticket Booking</h3>
            <p class="bus-card-text">We offer convenient online bus ticket booking services for intercity and interstate travel across India. Our simple and efficient booking process allows travellers to quickly reserve seats and plan their journeys without any hassle.</p>
          </div>

          <!-- Card 2 -->
          <div class="bus-card">
            <div class="mb-3">
              <!-- route/map icon -->
              <img src="assets/img/icon/busline-2.png" alt="Multiple Bus Operators & Route Options" class="busline-icon">
            </div>
            <h3 class="bus-card-title">Multiple Bus Operators &amp; Route Options</h3>
            <p class="bus-card-text">Choose from a wide network of trusted bus operators and multiple travel routes, giving you the flexibility to select the best schedule, price, and comfort level for your journey.</p>
          </div>

          <!-- Card 3 -->
          <div class="bus-card">
            <div class="mb-3">
              <!-- bus icon -->
              <img src="assets/img/icon/busline-3.png" alt="Various Bus Types for Comfortable Travel" class="busline-icon">
            </div>
            <h3 class="bus-card-title">Various Bus Types for Comfortable Travel</h3>
            <p class="bus-card-text">Book tickets for different bus categories, including AC, Non-AC, Sleeper, Semi-Sleeper, and Luxury Coaches, to ensure a comfortable, budget-friendly travel experience for every passenger.</p>
          </div>

          <!-- Card 4 -->
          <div class="bus-card">
            <div class="mb-3">
              <!-- price/tag icon -->
              <img src="assets/img/icon/busline-4.png" alt="Affordable Fares & Instant Confirmation" class="busline-icon">
            </div>
            <h3 class="bus-card-title">Affordable Fares & Instant Confirmation</h3>
            <p class="bus-card-text">We offer competitive bus ticket prices and instant booking confirmation, helping travellers easily secure their seats while enjoying affordable, reliable transportation.</p>
          </div>

          <!-- Card 5 -->
          <div class="bus-card">
            <div class="mb-3">
              <!-- shield/safety icon -->
              <img src="assets/img/icon/busline-1.png" alt="Easy Online Bus Ticket Booking" class="busline-icon">
            </div>
            <h3 class="bus-card-title">Safe &amp; Reliable Bus Travel</h3>
            <p class="bus-card-text">We partner only with verified and trusted bus operators to ensure safe, timely, and reliable journeys for all passengers, giving you complete peace of mind on every trip.</p>
          </div>

          <!-- Card 6 -->
          <div class="bus-card">
            <div class="mb-3">
              <!-- support/headset icon -->
              <img src="assets/img/icon/busline-2.png" alt="Round-the-Clock Customer Support" class="busline-icon">
            </div>
            <h3 class="bus-card-title">Round-the-Clock Customer Support</h3>
            <p class="bus-card-text">Our dedicated support team is available 24/7 to assist with bus bookings, cancellations, rescheduling, and any travel queries, ensuring a smooth experience at every step.</p>
          </div>

        </div><!-- /bus-track -->
      </div><!-- /bus-carousel-outer -->

      <button class="bus-btn bus-btn-next d-none" id="busNext" aria-label="Next">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
          <polyline points="9 18 15 12 9 6" />
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
    const BUS_GAP = 22;
    const busOuter = document.getElementById('busOuter');
    const busTrack = document.getElementById('busTrack');
    const busPrev = document.getElementById('busPrev');
    const busNext = document.getElementById('busNext');
    const busDotsWrap = document.getElementById('busDots');
    const busCards = Array.from(busTrack.querySelectorAll('.bus-card'));
    const busTotal = busCards.length;

    let busPerView = 4;
    let busCurrent = 0;
    let busTimer = null;

    function busGetPerView() {
      const w = window.innerWidth;
      if (w <= 480) return 1;
      if (w <= 767) return 2;
      if (w <= 1199) return 3;
      return 4;
    }

    function busMaxIdx() {
      return Math.max(0, busTotal - busPerView);
    }

    function busStartAuto() {
      let position = 0;

      // duplicate cards for infinite loop
      busTrack.innerHTML += busTrack.innerHTML;

      function animate() {
        position += 0.3; // speed control (0.2 slow, 0.5 fast)
        busTrack.style.transform = `translateX(-${position}px)`;

        const totalWidth = busTrack.scrollWidth / 2;

        if (position >= totalWidth) {
          position = 0;
        }

        requestAnimationFrame(animate);
      }

      animate();
    }

    function busApplyWidths() {
      const outerW = busOuter.offsetWidth;
      const cardW = (outerW - BUS_GAP * (busPerView - 1)) / busPerView;
      busCards.forEach(c => {
        c.style.width = cardW + 'px';
      });
    }

    function busGoTo(idx) {
      idx = Math.max(0, Math.min(idx, busMaxIdx()));
      busCurrent = idx;
      const cardW = busCards[0].offsetWidth;
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
        b.addEventListener('click', () => {
          busGoTo(i);
          busResetAuto();
        });
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

    function busResetAuto() {
      clearInterval(busTimer);
      busStartAuto();
    }

    function busInit() {
      busPerView = busGetPerView();
      busCurrent = Math.min(busCurrent, busMaxIdx());
      busApplyWidths();
      busBuildDots();
      busGoTo(busCurrent);
    }

    busPrev.addEventListener('click', () => {
      busGoTo(busCurrent - 1);
      busResetAuto();
    });
    busNext.addEventListener('click', () => {
      busGoTo(busCurrent + 1);
      busResetAuto();
    });

    /* swipe */
    let busTX = 0;
    busOuter.addEventListener('touchstart', e => {
      busTX = e.touches[0].clientX;
    }, {
      passive: true
    });
    busOuter.addEventListener('touchend', e => {
      const diff = busTX - e.changedTouches[0].clientX;
      if (Math.abs(diff) > 40) {
        busGoTo(diff > 0 ? busCurrent + 1 : busCurrent - 1);
        busResetAuto();
      }
    }, {
      passive: true
    });

    /* resize */
    let busRT;
    window.addEventListener('resize', () => {
      clearTimeout(busRT);
      busRT = setTimeout(busInit, 120);
    });

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
    box-shadow: 0 20px 60px rgba(37, 53, 111, 0.14);
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
    top: -18px;
    right: 0;
    width: clamp(120px, 16vw, 200px);
    filter: drop-shadow(4px 8px 16px rgba(37, 53, 111, 0.18));
    animation: taxiFloat 4s ease-in-out infinite;
    z-index: 2;
  }

  @keyframes taxiFloat {

    0%,
    100% {
      transform: translateY(0);
    }

    50% {
      transform: translateY(-8px);
    }
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
    font-size: 18px;
    font-weight: 600;
    color: var(--text-dark);
    margin-bottom: 14px;
    line-height: 1.5;
  }

  /* description paragraph */
  .taxi-desc {
    font-size: 16px;
    color: #666;
    font-family: "Poppins", sans-serif;
    line-height: 1.5;
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
    padding: 10px 0px;
    border-radius: 10px;
    cursor: default;
    transition:
      background .28s ease,
      box-shadow .28s ease,
      transform .28s ease;
    border: 1.5px solid transparent;
  }

  /* hover: highlight */


  /* checkmark icon */
  .taxi-check {
    flex-shrink: 0;
    width: 22px;
    height: 22px;
    border-radius: 50%;
    background: var(--red-blur);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background .28s ease, transform .28s ease;
  }

  .taxi-feat:hover .taxi-check {
    transform: scale(1.15);
  }

  .taxi-check svg {
    width: 12px;
    height: 12px;
    stroke: var(--euphoria-red);
    fill: none;
    stroke-width: 2.5;
    stroke-linecap: round;
    stroke-linejoin: round;
    transition: stroke .28s ease;
  }

  /* feature label */
  .taxi-feat-label {
    font-size: 16px;
    font-weight: 500;
    color: var(--text-dark);
    font-family: "Poppins", sans-serif;
    transition: color .28s ease;
  }

  .taxi-feat:hover .taxi-feat-label {
    color: var(--euphoria-blue);
    font-weight: 600;
  }

  .taxi-check-icon {
    width: 25px;
    height: 25px;
  }

  /* ── RESPONSIVE ── */
  /* --- Taxi Section Mobile Styles --- */

  @media (max-width: 991px) {
    .taxi-section {
      padding: 50px 0 60px;
    }

    /* Reduce image height so it doesn't push content too far down */
    .taxi-main-img {
      min-height: 250px;
      height: 300px;
    }

    /* Center text for better mobile balance */
    .taxi-content-col {
      text-align: center;
      padding-left: 0;
      margin-top: 20px;
    }

    /* Re-adjust watermark position for tablet */
    .taxi-watermark {
      left: 50%;
      transform: translateX(-50%);
      top: -10px;
      font-size: 80px;
    }

    /* Ensure the floating car doesn't overlap text on tablets */
    .taxi-car-img {
      display: none !important;
    }

    .taxi-inner {
      padding: 10px !important;
    }
  }

  @media (max-width: 767px) {
    .taxi-title {
      font-size: 1.2rem;
      margin-top: 20px;
    }

    .taxi-bold-sub {
      margin-top: 15px !important;
    }

    .taxi-desc {
      margin-bottom: 20px;
    }

    /* Flatten feature grid to single column for better legibility */
    .taxi-features {
      grid-template-columns: 1fr;
      gap: 8px;
      text-align: left;
      /* Keep features left-aligned for easier reading */
    }

    .taxi-feat {
      padding: 2px 12px;
    }

    .taxi-feat:hover {
      transform: translateX(2px);
      /* Subtle shift for mobile */
    }
  }

  @media (max-width: 480px) {
    .taxi-watermark {
      font-size: 80px;
      top: -5px;
      letter-spacing: 1px;
    }

    .taxi-main-img {
      height: 220px;
      border-radius: 15px;
    }
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
                <img src="assets/img/icon/Checke.png" alt="Easy Online Taxi Booking" class="taxi-check-icon">
              </div>
              <span class="taxi-feat-label">Easy Online Taxi Booking</span>
            </div>

            <div class="taxi-feat">
              <div class="taxi-check">
                <img src="assets/img/icon/Checke.png" alt="Affordable Taxi Fare Options" class="taxi-check-icon">
              </div>
              <span class="taxi-feat-label">Affordable Taxi Fare Options</span>
            </div>

            <div class="taxi-feat">
              <div class="taxi-check">
                <img src="assets/img/icon/Checke.png" alt="Taxi Services" class="taxi-check-icon">
              </div>
              <span class="taxi-feat-label">Local &amp; Outstation Taxi Services</span>
            </div>

            <div class="taxi-feat">
              <div class="taxi-check">
                <img src="assets/img/icon/Checke.png" alt="24/7 Taxi Availability" class="taxi-check-icon">
              </div>
              <span class="taxi-feat-label">24/7 Taxi Availability</span>
            </div>

            <div class="taxi-feat">
              <div class="taxi-check">
                <img src="assets/img/icon/Checke.png" alt="Wide Range of Vehicles" class="taxi-check-icon">
              </div>
              <span class="taxi-feat-label">Wide Range of Vehicles</span>
            </div>

            <div class="taxi-feat">
              <div class="taxi-check">
                <img src="assets/img/icon/Checke.png" alt="Airport Transfer Services" class="taxi-check-icon">
              </div>
              <span class="taxi-feat-label">Airport Transfer Services</span>
            </div>

            <div class="taxi-feat">
              <div class="taxi-check">
                <img src="assets/img/icon/Checke.png" alt="Verified Drivers" class="taxi-check-icon">
              </div>
              <span class="taxi-feat-label">Professional &amp; Verified Drivers</span>
            </div>

            <div class="taxi-feat">
              <div class="taxi-check">
                <img src="assets/img/icon/Checke.png" alt="Safe and Timely Transportation" class="taxi-check-icon">
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
    margin-bottom: -24px;
    /* pull title up over watermark */
    display: block;
  }

  .lt-title {
    font-size: clamp(22px, 3vw, 32px);
    font-weight: 600;
    color: var(--euphoria-blue);
    position: absolute;
    z-index: 1;
    margin-top: -60px;
    text-align: center;
    left: 15%;
  }

  .lt-main-img {
    width: 100%;
    height: 350px;
    margin-top: 50px;
    /* fixed height */
    object-fit: cover;
    /* crop nicely */
    object-position: center;
    /* vertical + horizontal center */
    border-radius: 18px;
    display: block;
    box-shadow: 0 16px 50px rgba(37, 53, 111, 0.13);
  }

  /* .lt-main-img {
    width: 100%;
    border-radius: 18px;
    object-fit: cover;
    height: clamp(240px, 38vw, 420px);
    display: block;
    box-shadow: 0 16px 50px rgba(37, 53, 111, 0.13);
  } */

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
      box-shadow .32s ease,
      border-color .32s ease,
      transform .32s ease,
      background .32s ease;
  }

  /* top accent bar */
  .lt-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 2px;
    background: linear-gradient(90deg, var(--euphoria-blue), var(--euphoria-red));
    transform: scaleX(0);
    transform-origin: left;
    transition: transform .38s cubic-bezier(.4, 0, .2, 1);
    border-radius: 16px 16px 0 0;
  }

  /* HOVER */
  .lt-card:hover {
    box-shadow:
      0 10px 32px rgba(37, 53, 111, 0.13),
      0 2px 8px rgba(37, 53, 111, 0.07);
    border-color: rgba(37, 53, 111, 0.22);
    transform: translateY(-5px);
    background: #fff;
  }

  .lt-card:hover::before {
    transform: scaleX(1);
  }

  /* icon circle */
  .lt-icon-wrap {
    width: 56px;
    height: 56px;
    border-radius: 50%;
    background: var(--red-blur);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 16px;
    transition: background .32s ease, transform .32s ease;
  }

  .lt-card:hover .lt-icon-wrap {
    background: var(--euphoria-red);
    transform: rotate(-8deg) scale(1.1);
  }

  .lt-icon-wrap svg {
    width: 26px;
    height: 26px;
    stroke: var(--euphoria-red);
    fill: none;
    stroke-width: 1.7;
    stroke-linecap: round;
    stroke-linejoin: round;
    transition: stroke .32s ease;
  }

  .lt-card:hover .lt-icon-wrap svg {
    stroke: #fff;
  }

  /* card title */
  .lt-card-title {
    font-size: 22px;
    font-weight: 700;
    color: var(--euphoria-blue);
    margin-bottom: 10px;
    line-height: 1.3;
    transition: color .28s ease;
  }

  .lt-card:hover .lt-card-title {
    color: var(--euphoria-red);
  }

  /* card text */
  .lt-card-text {
    font-size: 16px;
    color: #666666;
    font-family: "Poppins", sans-serif;
    line-height: 1.75;
  }

  /* ── RESPONSIVE ── */
  /* --- Local Transportation Mobile Styles --- */

  @media (max-width: 991px) {
    .lt-section {
      padding: 50px 0 60px;
    }

    /* Reset positioning for the left column content */
    .lt-left {
      margin-bottom: 40px;
      text-align: center;
      /* Center text for tablets */
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    /* watermark sizing and centering */
    .lt-watermark {
      margin-bottom: 0;
      font-size: 70px;
      line-height: 1;
    }

    /* Move the title from Absolute to Relative so it stacks properly */
    .lt-title {
      position: relative;
      margin-top: -30px;
      /* Pull it slightly over the watermark */
      left: 0;
      width: 100%;
      margin-bottom: 25px;
    }

    .lt-main-img {
      height: 300px;
      width: 90%;
      /* Give it some breathing room on tablets */
    }
  }

  @media (max-width: 767px) {
    .lt-watermark {
      font-size: 68px;
    }

    .lt-title {
      font-size: 1.2rem;
      margin-top: -40px;
    }

    /* Grid becomes single column on mobile */
    .lt-grid {
      grid-template-columns: 1fr;
      gap: 20px;
    }

    .lt-card {
      padding: 22px 18px;
    }

    .lt-icon-wrap {
      width: 50px;
      height: 50px;
      margin: 0 auto 15px;
      /* Center icons for mobile */
    }

    .lt-card-title,
    .lt-card-text {
      text-align: center;
      /* Better readability on single column */
    }
  }

  @media (max-width: 480px) {
    .lt-watermark {
      font-size: 70px;
    }

    .lt-main-img {
      height: 220px;
      width: 100%;
    }
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
          class="lt-main-img" />
      </div>

      <!-- RIGHT: 2×2 cards -->
      <div class="col-lg-7">
        <div class="lt-grid">

          <!-- Card 1 -->
          <div class="lt-card">
            <div class="mb-3">
              <!-- location pin -->
              <img src="assets/img/icon/mobility-1.png" alt="Reliable Local Transportation Solutions" class="mobility-icon">
            </div>
            <h3 class="lt-card-title">Reliable Local Transportation Solutions</h3>
            <p class="lt-card-text">We provide efficient local transportation services to help individuals and businesses travel comfortably within the city. Our services ensure safe, convenient, and timely travel for daily commutes, meetings, and personal trips.</p>
          </div>

          <!-- Card 2 -->
          <div class="lt-card">
            <div class="mb-3">
              <!-- bike/car key -->
              <img src="assets/img/icon/mobility-2.png" alt="Private Car & Rental Vehicle Options" class="mobility-icon">
            </div>
            <h3 class="lt-card-title">Private Car & Rental Vehicle Options</h3>
            <p class="lt-card-text">Choose from a wide range of private cars and rental vehicles based on your travel needs and budget. Our well-maintained vehicles offer flexibility and comfort for short city trips or extended local travel.</p>
          </div>

          <!-- Card 3 -->
          <div class="lt-card">
            <div class="mb-3">
              <!-- city building -->
              <img src="assets/img/icon/mobility-3.png" alt="Flexible & Affordable City Travel" class="mobility-icon">
            </div>
            <h3 class="lt-card-title">Flexible & Affordable City Travel</h3>
            <p class="lt-card-text">Our cost-effective local transport services offer flexible booking options for hourly, daily, or customised travel needs, making city transportation simple, comfortable, and convenient.</p>
          </div>

          <!-- Card 4 -->
          <div class="lt-card">
            <div class="mb-3">
              <!-- driver/chauffeur -->
              <img src="assets/img/icon/mobility-4.png" alt="Professional Chauffeur" class="mobility-icon">
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
    filter: drop-shadow(4px 12px 24px rgba(37, 53, 111, 0.14));
    animation: hpFloat 5s ease-in-out infinite;
  }

  @keyframes hpFloat {

    0%,
    100% {
      transform: translateY(0);
    }

    50% {
      transform: translateY(-10px);
    }
  }

  /* small plane top-left */
  .hp-plane {
    position: absolute;
    top: -30px;
    left: -10px;
    width: clamp(60px, 8vw, 110px);
    filter: drop-shadow(2px 4px 10px rgba(37, 53, 111, 0.18));
    animation: hpPlane 6s ease-in-out infinite;
  }

  @keyframes hpPlane {

    0%,
    100% {
      transform: translate(0, 0) rotate(-5deg);
    }

    50% {
      transform: translate(8px, -8px) rotate(0deg);
    }
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
      background .3s ease,
      box-shadow .3s ease,
      transform .3s ease;
  }

  /* remove double borders */
  .hp-cell:nth-child(-n+3) {
    border-top: none;
  }

  .hp-cell:nth-child(3n+1) {
    border-left: none;
  }

  .hp-cell:nth-child(3n) {
    border-right: none;
  }

  .hp-cell:nth-child(n+4) {
    border-bottom: none;
  }

  /* top accent on hover */
  .hp-cell::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: linear-gradient(90deg, var(--euphoria-blue), var(--euphoria-red));
    transform: scaleX(0);
    transform-origin: left;
    transition: transform .38s cubic-bezier(.4, 0, .2, 1);
  }

  /* HOVER */
  .hp-cell:hover {
    background: #fff;
    box-shadow:
      0 8px 30px rgba(37, 53, 111, 0.11),
      0 2px 6px rgba(37, 53, 111, 0.06);
    transform: translateY(-4px);
    z-index: 1;
    border-radius: 4px;
  }

  .hp-cell:hover::before {
    transform: scaleX(1);
  }

  /* cell title */
  .hp-cell-title {

    font-size: 20px;
    font-family: "Anek Kannada", "Poppins", sans-serif;
    font-weight: 700;
    color: var(--euphoria-blue);
    margin-bottom: 12px;
    line-height: 1.35;
    text-align: center;
    transition: color .28s ease;
  }

  .hp-cell:hover .hp-cell-title {
    color: var(--euphoria-red);
  }

  /* cell text */
  .hp-cell-text {
    font-size: 16px;
    color: #666666;
    font-family: "Poppins", sans-serif;
    line-height: 1.75;
    text-align: center;
  }

  /* ── RESPONSIVE ── */
  /* --- Holiday Package Mobile Styles --- */

  @media (max-width: 991px) {
    .hp-section {
      padding: 50px 0 60px;
    }

    /* Watermark fix */
    .hp-watermark {
      top: -28px;
      font-size: 70px;
    }

    .hp-body {
      flex-direction: column;
      align-items: center;
      gap: 40px;
      /* Space between image and grid */
    }

    .hp-left {
      /* width: 60%;
      max-width: 300px; */
    }

    /* Reset grid border logic for full-width grid */
    .hp-right {
      width: 100%;
    }
  }

  @media (max-width: 767px) {

    /* Title sizing */
    .hp-title {
      font-size: 1.2rem;
    }

    /* Grid: 2 columns */
    .hp-grid {
      grid-template-columns: repeat(2, 1fr);
    }

    /* Reset all previous 'nth-child' border logic from desktop */
    .hp-cell {
      border: 1px solid var(--card-border) !important;
      margin: -0.5px;
      /* Prevent double borders when stacked */
    }

    /* Apply clean 2-column borders */
    .hp-cell:nth-child(odd) {
      border-left: none !important;
    }

    .hp-cell:nth-child(even) {
      border-right: none !important;
    }

    .hp-cell:nth-child(-n+2) {
      border-top: none !important;
    }

    /* Last row logic (assuming 6 items) */
    .hp-cell:nth-child(n+5) {
      border-bottom: none !important;
    }
  }

  @media (max-width: 575px) {

    /* Grid: 1 column */
    .hp-grid {
      grid-template-columns: 1fr;
    }

    .hp-cell {
      padding: 24px 20px;
      border: none !important;
      border-bottom: 1px solid var(--card-border) !important;
    }

    .hp-cell:last-child {
      border-bottom: none !important;
    }

    /* Center everything for a clean mobile stack */
    .hp-cell-title,
    .hp-cell-text {
      text-align: center;
    }

    /* Hide decorative plane if it overlaps the header */
    .hp-plane {
      display: none;
    }
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
      <div class="row align-items-center">
        <div class="col-lg-5">
          <div class="hp-left">
            <img class="hp-scene-img" src="assets/img/tour-travel/holiday-package.png" alt="Holiday Scene" onerror="this.src=''" />
          </div>
        </div>

        <div class="col-lg-7">
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
          </div>
        </div>

      </div>
    </div>

  </div>
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
      linear-gradient(to bottom, rgba(30, 42, 100, .72) 0%, rgba(25, 36, 88, .80) 100%),
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


  .hotel-reserve-subtitle {
    font-size: 24px;
    font-family: "Poppins", sans-serif;
    color: #fff;
    max-width: 851px;
    font-weight: 600;
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
    width: 150px;
    height: 150px;
    border-radius: 50%;
    border: 2px dashed rgba(255, 255, 255, .45);
    background: rgba(255, 255, 255, .08);
    backdrop-filter: blur(6px);
    -webkit-backdrop-filter: blur(6px);
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    transition:
      border-style .3s ease,
      border-color .3s ease,
      background .3s ease,
      transform .3s ease,
      box-shadow .35s ease;
    margin-bottom: 8px;
  }

  /* Outer halo */
  .hotel-reserve-circle::after {
    content: '';
    position: absolute;
    inset: -8px;
    border-radius: 50%;
    border: 1.5px dashed rgba(255, 255, 255, .15);
    transition: opacity .3s ease;
    pointer-events: none;
  }

  .hotel-reserve-node:hover .hotel-reserve-circle {
    transform: scale(1.10);
  }

  .hotel-reserve-node:hover .hotel-reserve-circle::after {
    opacity: 0;
  }

  /* Icon inside circle */
  .hotel-reserve-icon {
    width: 44px;
    height: 44px;
    flex-direction: column;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background .3s ease;
  }


  /* Label below circle */
  .hotel-reserve-label {
    font-size: 13px;
    font-weight: 600;
    font-family: "Poppins", sans-serif;
    color: rgba(255, 255, 255, .90);
    line-height: 1.35;
    letter-spacing: .01em;
    transition: color .3s ease;
    white-space: nowrap;
  }


  /* ── Node positions — LEFT 5 ── */
  /* Scattered naturally across left half */
  .hotel-reserve-node--n1 {
    left: 8%;
    top: 18%;
  }

  .hotel-reserve-node--n2 {
    left: 19%;
    top: 52%;
  }

  .hotel-reserve-node--n3 {
    left: 6%;
    top: 80%;
  }

  .hotel-reserve-node--n4 {
    left: 30%;
    top: 28%;
  }

  .hotel-reserve-node--n5 {
    left: 28%;
    top: 75%;
  }

  /* ── Node positions — RIGHT 5 ── */
  .hotel-reserve-node--n6 {
    left: 72%;
    top: 18%;
  }

  .hotel-reserve-node--n7 {
    left: 85%;
    top: 45%;
  }

  .hotel-reserve-node--n8 {
    left: 94%;
    top: 18%;
  }

  .hotel-reserve-node--n9 {
    left: 70%;
    top: 72%;
  }

  .hotel-reserve-node--n10 {
    left: 88%;
    top: 78%;
  }

  /* ── Dashed connector lines (SVG overlay) ── */
  .hotel-reserve-lines {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 1;
  }

  /* All nodes above lines, below nothing */
  .hotel-reserve-node {
    z-index: 6;
  }

  /* ── Stagger fade-in ── */
  .hotel-reserve-node {
    animation: stt-fadeIn .55s ease both;
  }

  .hotel-reserve-node--n1 {
    animation-delay: .05s;
  }

  .hotel-reserve-node--n2 {
    animation-delay: .10s;
  }

  .hotel-reserve-node--n3 {
    animation-delay: .15s;
  }

  .hotel-reserve-node--n4 {
    animation-delay: .20s;
  }

  .hotel-reserve-node--n5 {
    animation-delay: .25s;
  }

  .hotel-reserve-node--n6 {
    animation-delay: .08s;
  }

  .hotel-reserve-node--n7 {
    animation-delay: .13s;
  }

  .hotel-reserve-node--n8 {
    animation-delay: .18s;
  }

  .hotel-reserve-node--n9 {
    animation-delay: .23s;
  }

  .hotel-reserve-node--n10 {
    animation-delay: .28s;
  }

  @keyframes stt-fadeIn {
    from {
      opacity: 0;
      transform: translate(-50%, -50%) scale(.8);
    }

    to {
      opacity: 1;
      transform: translate(-50%, -50%) scale(1);
    }
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
      gap: 18px 41px;
      padding: 20px 0 10px;
      position: static;
    }

    .hr-watermark{
      top:  -25px !important;
    }
    
    .hotel-reserve-subtitle{
      font-size: 20px; 
      font-family: "Poppins", sans-serif;
      color: #fff;
      max-width: 401px;

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
      from {
        opacity: 0;
        transform: translateY(14px) scale(.9);
      }

      to {
        opacity: 1;
        transform: translateY(0) scale(1);
      }
    }

    .hotel-reserve-lines {
      display: none;
    }

    .hotel-reserve-circle {
      width: 120px;
      height: 120px;
    }

    .hotel-reserve-icon {
      width: 36px;
      height: 36px;
    }

    .hotel-reserve-icon svg {
      width: 18px;
      height: 18px;
    }

    .hotel-reserve-label {
      font-size: .7rem;
      white-space: normal;
    }
  }
</style>

<section id="hotel-section" class="hotel-reserve-section">

  <div class="hotel-reserve">
    <div class="hr-watermark">Stay</div>
    <h2 class="hr-title">Hotel Reservation</h2>
    <p class="hotel-reserve-subtitle mb-3">
      Book verified hotels worldwide with the best prices, secure payments,
      and instant confirmation.
    </p>

    <a href="#" class="btn btn-explore-hotel">
      Find Your Stay
      <img src="assets/img/icon/hotel-btn-arrow.png" alt="" width="12px;" height="12px;">
    </a>
  </div>

  <style>
    /* ── HEADER ── */
    .hotel-reserve {
      position: relative;
      z-index: 2;
      text-align: center;
      margin-bottom: 48px;
    }

    .hr-watermark {
      position: absolute;
      top: -50px;
      left: 50%;
      transform: translateX(-50%);
      font-size: clamp(60px, 12vw, 120px);
      font-weight: 700;
      color: #FFFFFF;
      opacity: 0.2;
      white-space: nowrap;
      pointer-events: none;
      user-select: none;
      z-index: 0;
      line-height: 1;
    }

    .hr-title {
      font-size: clamp(26px, 4vw, 38px);
      font-weight: 600;
      color: #fff;
      margin-bottom: 50px;
      position: relative;
      z-index: 1;
    }

      @media (max-width: 480px) {
        .hr-watermark {
          font-size: 80px;
          top: -30px;
          letter-spacing: 1px;
        }
    }
    .btn-explore-hotel {
      background-color: #FFF;
      color: #25356F;
      font-family: "Anek Kannada", "Poppins", sans-serif;
      font-weight: 600;
      font-size: 20px;
      padding: 12px 24px;
      border-radius: 6px;
      border: none;
      letter-spacing: 0.3px;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      transition: background-color 0.2s ease;
    }

    .btn:hover {
      color: #25356F;
      background-color: #fff;
      border-color: #fff;
    }
  </style>

  <!-- Absolute-positioned canvas -->
  <div class="hotel-reserve-canvas">

    <!-- ══ LEFT 5 NODES ══ -->
    <div class="hotel-reserve-node hotel-reserve-node--n1">
      <div class="hotel-reserve-circle">
        <div class="hotel-reserve-icon">
          <img src="assets/img/icon/hotel-1.png" alt="" class="hotel-image-icon">
          <span class="hotel-reserve-label">Verified &amp;<br>Trusted Hotels</span>
        </div>
      </div>
    </div>

    <div class="hotel-reserve-node hotel-reserve-node--n2">
      <div class="hotel-reserve-circle">
        <div class="hotel-reserve-icon">
          <img src="assets/img/icon/hotel-2.png" alt="24/7 Booking" class="hotel-image-icon">
          <span class="hotel-reserve-label">24/7 Booking<br>Support</span>
        </div>
      </div>
    </div>

    <div class="hotel-reserve-node hotel-reserve-node--n3">
      <div class="hotel-reserve-circle">
        <div class="hotel-reserve-icon">
          <img src="assets/img/icon/hotel-3.png" alt="orporate Bookings" class="hotel-image-icon">
          <span class="hotel-reserve-label">Group &amp; Corporate<br>Bookings</span>
        </div>
      </div>
    </div>

    <div class="hotel-reserve-node hotel-reserve-node--n4">
      <div class="hotel-reserve-circle">
        <div class="hotel-reserve-icon">
          <img src="assets/img/icon/hotel-4.png" alt="Secure Booking" class="hotel-image-icon">
          <span class="hotel-reserve-label">Fast &amp; Secure<br>Booking</span>
        </div>
      </div>
    </div>

    <div class="hotel-reserve-node hotel-reserve-node--n5">
      <div class="hotel-reserve-circle">
        <div class="hotel-reserve-icon">
          <img src="assets/img/icon/hotel-5.png" alt="Booking Help" class="hotel-image-icon">
          <span class="hotel-reserve-label">Personalised<br>Booking Help</span>
        </div>
      </div>
    </div>
    <style>
      /* ── CENTER IMAGE ── */
      .hotel-center-image {
        position: absolute;
        left: 48%;
        top: 57%;
        transform: translate(-50%, -50%);
        z-index: 5;
        width: 240px;
        height: 600px;
        display: flex;
        align-items: flex-end;
        justify-content: center;
      }

      .hotel-center-image img {
        height: 100%;
        width: auto;
        object-fit: contain;
        filter: drop-shadow(0 10px 40px rgba(0, 0, 0, .55));
        animation: floatUp .8s ease both;
      }

      /* Glowing circle behind girl */
      .hotel-center-glow {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        width: 280px;
        height: 280px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(249, 199, 79, .12) 0%, rgba(30, 80, 200, .08) 60%, transparent 80%);
        border: 1.5px dashed rgba(249, 199, 79, .3);
        z-index: 4;
        animation: pulseGlow 3s ease-in-out infinite;
      }

      .hotel-center-glow::after {
        content: '';
        position: absolute;
        inset: -18px;
        border-radius: 50%;
        border: 1px dashed rgba(255, 255, 255, .12);
      }

      .hotel-image-icon {
        width: 35px;
        height: 35px;
        margin-bottom: 10px;

      }

      @keyframes pulseGlow {

        0%,
        100% {
          box-shadow: 0 0 0 0 rgba(249, 199, 79, .0);
        }

        50% {
          box-shadow: 0 0 40px 10px rgba(249, 199, 79, .08);
        }
      }

      @keyframes floatUp {
        from {
          opacity: 0;
          transform: translateY(30px);
        }

        to {
          opacity: 1;
          transform: translateY(0);
        }
      }
    </style>
    <!-- ★ CENTER GIRL IMAGE ★ -->
    <div class="hotel-center-image d-none d-md-block">
      <img src="assets/img/hotel-girl.png" alt="Hotel Receptionist">
    </div>
    <!-- ══ RIGHT 5 NODES ══ -->
    <div class="hotel-reserve-node hotel-reserve-node--n6">
      <div class="hotel-reserve-circle">
        <div class="hotel-reserve-icon">
          <img src="assets/img/icon/hotel-6.png" alt="Hotels" class="hotel-image-icon">
          <span class="hotel-reserve-label">Variety of<br>Hotels</span>
        </div>
      </div>
    </div>

    <div class="hotel-reserve-node hotel-reserve-node--n7">
      <div class="hotel-reserve-circle">
        <div class="hotel-reserve-icon">
          <img src="assets/img/icon/hotel-7.png" alt="Easy Online Hotel Booking" class="hotel-image-icon">
          <span class="hotel-reserve-label">Easy Online<br>Hotel Booking</span>
        </div>
      </div>
    </div>

    <div class="hotel-reserve-node hotel-reserve-node--n8">
      <div class="hotel-reserve-circle">
        <div class="hotel-reserve-icon">
          <img src="assets/img/icon/hotel-8.png" alt="Best Hotel Deals" class="hotel-image-icon">
          <span class="hotel-reserve-label">Best Hotel<br>Deals</span>
        </div>
      </div>
    </div>

    <div class="hotel-reserve-node hotel-reserve-node--n9">
      <div class="hotel-reserve-circle">
        <div class="hotel-reserve-icon">
          <img src="assets/img/icon/hotel-9.png" alt="Flexible Rooms & Amenities" class="hotel-image-icon">
          <span class="hotel-reserve-label">Flexible Rooms &amp;<br>Amenities</span>
        </div>
      </div>
    </div>

    <div class="hotel-reserve-node hotel-reserve-node--n10">
      <div class="hotel-reserve-circle">
        <div class="hotel-reserve-icon">
          <img src="assets/img/icon/hotel-10.png" alt="Worldwide Hotel & Booking" class="hotel-image-icon">
          <span class="hotel-reserve-label">Worldwide Hotel<br>Booking</span>
        </div>
      </div>
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
    font-size: 16px;
    font-family: "Poppins", sans-serif;
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
    font-size: 18px;
    font-family: "Poppins", sans-serif;
    color: var(--text-dark);
    display: flex;
    align-items: center;
  }

  .sightseeing-tour-list li::before {
    content: url("assets/img/icon/Checke.png");
    color: var(--euphoria-red);
    font-weight: bold;
    margin-right: 10px;
  }

  /* Image Cards */
  .sightseeing-tour-card {
    border-radius: 20px;
    overflow: hidden;
    border: 1px solid var(--card-border);
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

      <style>
        .sight-seeing {
          position: relative;
          z-index: 2;
          text-align: center;
          margin-bottom: 48px;
        }

        .sight-watermark {
          position: absolute;
          top: -50px;
          left: 50%;
          transform: translateX(-50%);
          font-size: clamp(60px, 12vw, 120px);
          font-weight: 700;
          color: var(--euphoria-red);
          opacity: 0.1;
          white-space: nowrap;
          pointer-events: none;
          user-select: none;
          z-index: 0;
          line-height: 1;
        }

        .sight-title {
          font-size: clamp(26px, 4vw, 38px);
          font-weight: 600;
          color: #25356F;
          margin-bottom: 50px;
          position: relative;
          z-index: 1;
        }

        @media (max-width: 991px) {
         /* Re-adjust watermark position for tablet */
        .sight-watermark  {
            left: 50%;
            transform: translateX(-50%);
            top: -36px;
            font-size: 89px;
        }

        .sight-title{
          font-size: 1.2rem;
        }

      
       }

      </style>
      <!-- Left Content -->
      <div class="col-lg-6 mb-4 mb-lg-0">
        <div class="sight-seeing">
          <div class="sight-watermark">Guided</div>
          <h2 class="sight-title">Seightseeing Tours</h2>

        </div>
        <!-- <h2 class="sightseeing-tour-title">Sightseeing Tours</h2> -->

        <p class="sightseeing-tour-text">
          We offer professional guided sightseeing tours that help travellers explore major attractions with the support of experienced tour guides. Our tours make it easy to discover famous landmarks and popular destinations in a comfortable and organised way.
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
    background-repeat: space;
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
    color: rgba(255, 255, 255, 0.05);
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
    font-size: 20px;
    line-height: 1.5;
    font-family:"Poppins", sans-serif;
    margin-bottom: 15px;
  }

  /* Bottom Image Accent (Optional subtle fade) */
  .tour-package-fade {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 120px;
    background: linear-gradient(transparent, rgba(0, 0, 0, 0.6));
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
        We offer a variety of tour packages, including city tours, cultural tours, and adventure trips designed to suit different travel preferences. Our customised packages are planned according to your travel goals, budget, and schedule, helping you explore popular destinations, heritage sites, and natural attractions.
      </p>

      <p class="tour-package-text">
        We offer a variety of tour packages, including city tours, cultural tours, and adventure trips designed to suit different travel preferences. Our customised packages are planned according to your travel goals, budget, and schedule, helping you explore popular destinations, heritage sites, and natural attractions.s.
      </p>

    </div>
  </div>

  <div class="tour-package-fade"></div>

</section>

<?php
$sideStickyMenu = [
  [
    'url' => 'flight-section',
    'img' => '',
    'title' => 'Flight'
  ],
  [
    'url' => 'train-section',
    'img' => '',
    'title' => 'Train'
  ],
  [
    'url' => 'bus-section',
    'img' => '',
    'title' => 'Bus'
  ],
  [
    'url' => 'taxi-section',
    'img' => '',
    'title' => 'Taxi'
  ],
  [
    'url' => 'local-section',
    'img' => '',
    'title' => 'Local Transport'
  ],
  [
    'url' => 'hotel-section',
    'img' => '',
    'title' => 'Hotel'
  ],
  [
    'url' => 'holiday-package-section',
    'img' => '',
    'title' => 'Holiday Package'
  ],

  [
    'url' => 'tour-package-section',
    'img' => '',
    'title' => 'Tour Package'
  ],
  [
    'url' => 'guide-tour-section',
    'img' => '',
    'title' => 'Guide Tour'
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