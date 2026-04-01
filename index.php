<?php
include_once ('elements/header.php');
include_once ('elements/home-slider.php');
?>

<!-- Start Image Slider SHELL -->
<style>
    
    /* ══════════════════════════════════
        CAROUSEL OUTER
    ══════════════════════════════════ */
    .carousel-outer {
        position: relative;
        width: 100%;
        overflow: hidden;
        z-index: 2;
        padding: 30px 0;
    }

    /* soft fade on edges */
    .carousel-outer::before,
    .carousel-outer::after {
        content: '';
        position: absolute;
        top: 0;
        width: 140px;
        height: 100%;
        z-index: 10;
        pointer-events: none;
    }
    .carousel-outer::before { left:  0; background: linear-gradient(to right, var(--light-blue), transparent); }
    .carousel-outer::after  { right: 0; background: linear-gradient(to left,  var(--light-blue), transparent); }

    /* ── track ── */
    .carousel-track {
        display: flex;
        align-items: center;
        animation: slide 30s linear infinite;
    }
    .carousel-outer:hover .carousel-track { animation-play-state: paused; }

    @keyframes slide {
        from { transform: translateX(0); }
        to   { transform: translateX(-50%); }
    }

    /* ══════════════════════════════════
        ITEM = LOGO + SEPARATOR(STAR)
        Layout: [logo-block] [star-sep] [logo-block] [star-sep] …
    ══════════════════════════════════ */
    .item {
        display: flex;
        align-items: center;
    }

    /* ── LOGO BLOCK ── */
    .logo-block {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 5px;
        padding: 18px 28px;
        cursor: pointer;
        transition: transform .55s cubic-bezier(.25,.46,.45,.94);
        position: relative;
    }
    .logo-block:hover { transform: scale(1.13); z-index: 20; }

    /* top arc line */
    .logo-arc {
        width: 96px;
        height: 8px;
        position: relative;
        margin-bottom: 2px;
    }
    .logo-arc::after {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 2px;
        background: linear-gradient(to right, transparent 0%, var(--card-border) 20%, var(--card-border) 80%, transparent 100%);
        border-radius: 50%;
        transition: background .5s ease;
    }
    .logo-block:hover .logo-arc::after {
        background: linear-gradient(to right,
        transparent 0%,
        var(--euphoria-blue) 20%,
        var(--euphoria-red)  50%,
        var(--euphoria-blue) 80%,
        transparent 100%);
    }

    /* tagline row */
    .tagline-row {
        display: flex;
        align-items: center;
        gap: 7px;
    }
    .tline {
        width: 20px;
        height: 1px;
        background: var(--card-border);
        transition: background .5s ease;
    }
    .tagline {
        font-size: 7.5px;
        letter-spacing: .28em;
        text-transform: uppercase;
        color: var(--card-border);
        white-space: nowrap;
        transition: color .5s ease;
    }
    .logo-block:hover .tline    { background: var(--euphoria-blue); }
    .logo-block:hover .tagline  { color: var(--euphoria-red); }

    /* ── STAR SEPARATOR (centered BETWEEN two logos) ── */
    .star-sep {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 36px;
        flex-shrink: 0;
        position: relative;
        z-index: 5;
    }

    /* The SVG star */
    .star-svg {
        width: 18px;
        height: 18px;
        animation: starBreath 3.6s ease-in-out infinite;
        transition: filter .5s ease;
        filter: grayscale(1) brightness(.65);
    }

    /* on hover of EITHER adjacent logo — achieved via JS class */
    .star-sep.lit .star-svg {
        filter: grayscale(0) brightness(1);
    }

    @keyframes starBreath {
        0%,100% { transform: scale(1)    rotate(0deg);   opacity: .7; }
        30%      { transform: scale(1.22) rotate(22.5deg); opacity: 1; }
        60%      { transform: scale(.92) rotate(22.5deg); opacity: .85; }
        80%      { transform: scale(1.1) rotate(0deg);   opacity: 1; }
    }

    /* ── LOGO BLOCK ── */
    .logo-block {
        cursor: pointer;
        position: relative;
        filter: grayscale(0) brightness(1);
        transition: filter .55s ease, transform .55s cubic-bezier(.25,.46,.45,.94);
        /* subtle zoom breathe */
    }
    .logo-block img {
        height: 70px;
        width: 180px;
        mix-blend-mode: multiply;
    }

    .logo-block:hover {
        filter: grayscale(0) brightness(1);
        transform: scale(1.15) !important;
        animation: none;
        z-index: 20;
    }

    .logo-block:hover::after { opacity: 1; }
</style>
<div class="carousel-outer">
  <div class="carousel-track" id="track"></div>
</div>
<script>
    /* ── Data ── */
    const logos = [
    { src: 'assets/img/logo/corporate-service.png', alt: 'Corporate Service' },
    { src: 'assets/img/logo/private-wealth.png', alt: 'Private Wealth'    },
    { src: 'assets/img/logo/real-state.png', alt: 'Real Estate'       },
    { src: 'assets/img/logo/travel-tourism.png', alt: 'Travel & Tourism'  },
    ];

    /* ── Inline SVG star (4-point compass crosshair style matching the original) ── */
    function starSVG(color = '#999') {
    return '<img class="star-svg" src="assets/img/logo/star.png" alt="Star">';
    return `
    <svg class="star-svg" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <!-- horizontal bar -->
        <line x1="2" y1="12" x2="22" y2="12" stroke="${color}" stroke-width="1.2"/>
        <!-- vertical bar -->
        <line x1="12" y1="2" x2="12" y2="22" stroke="${color}" stroke-width="1.2"/>
        <!-- diagonal tick NW-SE -->
        <line x1="7.5" y1="7.5" x2="16.5" y2="16.5" stroke="${color}" stroke-width=".8"/>
        <!-- diagonal tick NE-SW -->
        <line x1="16.5" y1="7.5" x2="7.5" y2="16.5" stroke="${color}" stroke-width=".8"/>
        <!-- centre dot -->
        <circle cx="12" cy="12" r="1.8" fill="${color}"/>
        <!-- outer ring -->
        <circle cx="12" cy="12" r="5" fill="none" stroke="${color}" stroke-width=".7" opacity=".5"/>
    </svg>`;
    }

    /* ── Logo block HTML ── */
    function logoHTML(logo, idx) {
    return `<div class="logo-block" data-idx="${idx}">
        <img src="${logo.src}" alt="${logo.alt}">
    </div>`;
    }

    /* ── Star separator HTML ── */
    function sepHTML(idx) {
    return `<div class="star-sep" data-sep="${idx}">${starSVG('#999')}</div>`;
    }

    /* ── Build track (logos × 2 for seamless loop) ── */
    function buildTrack(logos) {
    let html = '';
    const all = [...logos, ...logos]; // duplicate for seamless loop
    all.forEach((logo, i) => {
        html += `<div class="item">`;
        html += logoHTML(logo, i);
        html += sepHTML(i);          // star AFTER each logo = sits between this and the next
        html += `</div>`;
    });
    return html;
    }

    document.getElementById('track').innerHTML = buildTrack(logos);

    /* ── Light up the star between two logos on hover ── */
    document.querySelectorAll('.logo-block').forEach(block => {
    function getNeighbourSeps(block) {
        // The star-sep is a sibling AFTER the logo-block inside .item,
        // AND the star-sep of the previous .item
        const item    = block.closest('.item');
        const sepAfter = item.querySelector('.star-sep');
        const prevItem = item.previousElementSibling;
        const sepBefore = prevItem ? prevItem.querySelector('.star-sep') : null;
        return [sepAfter, sepBefore].filter(Boolean);
    }

    block.addEventListener('mouseenter', () => {
        getNeighbourSeps(block).forEach(s => s.classList.add('lit'));
    });
    block.addEventListener('mouseleave', () => {
        getNeighbourSeps(block).forEach(s => s.classList.remove('lit'));
    });
    });
</script>
<!-- End Image Slider SHELL -->


<style>
    p.text-muted{
        font-size: 1.2rem;
    }
</style>
<section class="about-section">
    <div class="about-title-bg">About</div>
    
    <div class="container">
        <div class="row align-items-center">
            
            <h2 class="about-title h1">About Euphoria Group</h2>

            <div class="col-lg-5">
                <div class="image-overlap-container">
                    <img src="assets/img/img-7.png" class="oval-img img-large" alt="Our Team">
                    <img src="assets/img/img-6.png" class="oval-img img-small" alt="Business Meeting">
                </div>
            </div>

            <div class="col-lg-7">
                <p class="text-muted mb-4">
                    Euphoria Group is a reputable multi-service consultancy that provides international business setup, 
                    global travel and visa services, real estate brokerage, insurance solutions, and stock market 
                    opportunities on a single integrated platform.
                </p>
                <p class="text-muted mb-4">
                    We offer strategic guidance, transparent solutions, and long-term value through strong market 
                    expertise and a client-first approach.
                </p>

                <ul class="about-list">
                    <li><i class="bi bi-check-circle-fill"></i> Expert overseas business setup & corporate services</li>
                    <li><i class="bi bi-check-circle-fill"></i> Trusted real estate brokers in India & Dubai</li>
                    <li><i class="bi bi-check-circle-fill"></i> Comprehensive global travel & Immigration</li>
                    <li><i class="bi bi-check-circle-fill"></i> Comprehensive life, health, travel & business insurance</li>
                    <li><i class="bi bi-check-circle-fill"></i> One-stop solution for wealth, business & lifestyle planning</li>
                </ul>
            </div>

        </div>
    </div>
</section>

<section class="services-section">
    <div class="about-title-bg">Services</div>
    
    <div class="container">
        <div class="row align-items-center">
            
            <h2 class="about-title h1" style="margin-top: -18px;">What We Offer You</h2>
        
            <!-- Draggable Slider -->
            <div class="services-slider-container">
                <div class="services-track" id="serviceTrack">
                    
                    <!-- Card 1 -->
                    <div class="service-card">
                        <div class="content-top">
                            <div class="icon-wrapper">
                                <i class="bi bi-briefcase"></i>
                            </div>
                            <h3>Company Formation</h3>
                            <p>Complete assistance with business setup, including registration, licensing, and legal documents.</p>
                        </div>
                        <a href="#" class="read-more-btn">Read More <i class="bi bi-chevron-double-right"></i></a>
                    </div>

                    <!-- Card 2 -->
                    <div class="service-card">
                        <div class="content-top">
                            <div class="icon-wrapper">
                                <i class="bi bi-calculator"></i>
                            </div>
                            <h3>Accounting Firm</h3>
                            <p>Professional accounting, bookkeeping, tax planning, and compliance services for strong, compliant operations.</p>
                        </div>
                        <a href="#" class="read-more-btn">Read More <i class="bi bi-chevron-double-right"></i></a>
                    </div>

                    <!-- Card 3 -->
                    <div class="service-card">
                        <div class="content-top">
                            <div class="icon-wrapper">
                                <i class="bi bi-house-door"></i>
                            </div>
                            <h3>Real Estate</h3>
                            <p>Expert advice on buying, selling, and leasing residential and commercial properties in India & Dubai.</p>
                        </div>
                        <a href="#" class="read-more-btn">Read More <i class="bi bi-chevron-double-right"></i></a>
                    </div>

                    <!-- Card 4 -->
                    <div class="service-card">
                        <div class="content-top">
                            <div class="icon-wrapper">
                                <i class="bi bi-globe-americas"></i>
                            </div>
                            <h3>Tours & Travel</h3>
                            <p>Full-service travel solutions, visa help, flight bookings, and personalised global travel packages.</p>
                        </div>
                        <a href="#" class="read-more-btn">Read More <i class="bi bi-chevron-double-right"></i></a>
                    </div>

                    <!-- Card 5 -->
                    <div class="service-card">
                        <div class="content-top">
                            <div class="icon-wrapper">
                                <i class="bi bi-passport"></i>
                            </div>
                            <h3>Immigration Services</h3>
                            <p>Reliable assistance with residency, work permits, investor visas, and global relocation processes.</p>
                        </div>
                        <a href="#" class="read-more-btn">Read More <i class="bi bi-chevron-double-right"></i></a>
                    </div>

                    <!-- Card 6 -->
                    <div class="service-card">
                        <div class="content-top">
                            <div class="icon-wrapper">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <h3>Insurance Solutions</h3>
                            <p>Comprehensive coverage for health, life, and business interests with top-tier global providers.</p>
                        </div>
                        <a href="#" class="read-more-btn">Read More <i class="bi bi-chevron-double-right"></i></a>
                    </div>

                </div>
            </div>

            <!-- Navigation Dots -->
            <div class="slider-nav" id="sliderNav">
                <!-- Generated via JS for accuracy -->
            </div>
        </div>
    </div>
</section>

<!-- Start Our Success Section-->
<section class="our-success-banner about-section">
  <h2 class="about-title h1">The Euphoria Timeline</h2>
  <div class="stats-row">

    <div class="stat-item">
      <span class="stat-number">108+</span>
      <span class="stat-label">
        <i class="bi bi-people stat-icon"></i>Professionals at Euphoria
      </span>
    </div>

    <div class="stat-item">
      <span class="stat-number">25+</span>
      <span class="stat-label">
        <i class="bi bi-globe stat-icon"></i>Nationalities Represented
      </span>
    </div>

    <div class="stat-item">
      <span class="stat-number">12+</span>
      <span class="stat-label">
        <i class="bi bi-gear stat-icon"></i>Years of Industry Expertise
      </span>
    </div>

    <div class="stat-item">
      <span class="stat-number">1,000+</span>
      <span class="stat-label">
        <i class="bi bi-emoji-smile stat-icon"></i>Satisfied Clients
      </span>
    </div>

  </div>
</section>

<!-- ── Content Card ── -->
<div class="container-fluid px-3 px-md-4 pb-5">
  <div class="opportunities-content-card">
    <span class="card-watermark">Unrestricted</span>
    <div class="opportunities-content-card-inner">
      <div class="row">

        <!-- Left: Title + Accordion -->
        <div class="col-lg-8">
          <h3 class="section-title">Architecting Tomorrow's Opportunities</h3>

          <div class="mt-5">
            <div class="accordion euphoria-accordion" id="euphoriaAccordion">

                <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#acc1">
                    Future-Ready Business Architecture
                    </button>
                </h2>
                <div id="acc1" class="accordion-collapse collapse show" data-bs-parent="#euphoriaAccordion">
                    <div class="accordion-body">
                    <p>We build business structures that work with the rules of today and the chances of tomorrow.</p>
                    <p>Our method is based on long-term sustainability, adaptability, and scalability. This means that your business will grow and change as global markets do.</p>
                    </div>
                </div>
                </div>

                <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc2">
                    Global Expansion Intelligence
                    </button>
                </h2>
                <div id="acc2" class="accordion-collapse collapse" data-bs-parent="#euphoriaAccordion">
                    <div class="accordion-body">
                    <p>We leverage deep market intelligence and local expertise to help businesses expand seamlessly across borders with confidence and strategic clarity.</p>
                    </div>
                </div>
                </div>

                <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc3">
                    Sustainable Wealth Frameworks
                    </button>
                </h2>
                <div id="acc3" class="accordion-collapse collapse" data-bs-parent="#euphoriaAccordion">
                    <div class="accordion-body">
                    <p>Our wealth frameworks are designed to preserve and grow capital across generations, aligned with ethical, sustainable, and future-proof principles.</p>
                    </div>
                </div>
                </div>

                <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc4">
                    Smart Investment Positioning
                    </button>
                </h2>
                <div id="acc4" class="accordion-collapse collapse" data-bs-parent="#euphoriaAccordion">
                    <div class="accordion-body">
                    <p>We identify and position clients for high-value opportunities across emerging and established markets using data-driven investment strategies.</p>
                    </div>
                </div>
                </div>

                <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc5">
                    Seamless Global Mobility Solutions
                    </button>
                </h2>
                <div id="acc5" class="accordion-collapse collapse" data-bs-parent="#euphoriaAccordion">
                    <div class="accordion-body">
                    <p>From residency by investment to citizenship programs, we offer end-to-end global mobility solutions that open doors to new horizons.</p>
                    </div>
                </div>
                </div>

                <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc6">
                    Strategic Partnership Approach
                    </button>
                </h2>
                <div id="acc6" class="accordion-collapse collapse" data-bs-parent="#euphoriaAccordion">
                    <div class="accordion-body">
                    <p>We go beyond consulting — we become your strategic partners, deeply invested in your success through every phase of growth and transformation.</p>
                    </div>
                </div>
                </div>

            </div><!-- /accordion -->
          </div>
        </div><!-- /col-left -->

        <!-- Right: Images -->
        <div class="col-lg-4">
          <div class="right-col">
            <img
              class="img-office"
              src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=700&q=80"
              alt="Professionals at work"
            />
            <div class="img-world-card">
              <img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/80/World_map_-_low_resolution.svg/1280px-World_map_-_low_resolution.svg.png"
                alt="World map global network"
              />
            </div>
          </div>
        </div>

      </div><!-- /row -->
    </div><!-- /inner -->
  </div><!-- /card -->
</div>
<!-- End Our Success Section-->

<section class="about-section pb-0 mt-5">
    <div class="about-title-bg">Blog</div>
        
        <div class="container timeline-content text-center">
            <div class="row align-items-center">
                
                <h2 class="about-title h1 pb-5">Latest Announcement</h2>
            
                <div class="col-lg-4 col-md-6">
                    <div class="card blog-card" style="transition-delay: 0.1s;">
                        <div class="card-img-wrapper">
                            <img src="assets/img/blog-image-2.png" class="card-img-top" alt="Penguin">
                            <div class="image-overlay-text d-none">Life Through That Penguin's Eyes</div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Be That Penguin: A Lesson in Bold Leadership, Global Expansion & Strategic Growth</h5>
                            <div class="author-meta">
                                <img src="https://i.pravatar.cc/150?u=ayushi" class="author-img" alt="Author">
                                <span class="me-3">Ayushi Davda</span>
                                <span><i class="far fa-calendar-alt me-1"></i> March 18, 2026</span>
                            </div>
                            <p class="card-text">In the coldest and most unforgiving places on Earth, only the brave can survive. A single penguin walking toward the mountains is more than just a picture...</p>
                            <a href="blog-detail" class="read-more">Read More <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card blog-card" style="transition-delay: 0.3s;">
                        <div class="card-img-wrapper">
                            <img src="assets/img/blog-image-2.png" class="card-img-top" alt="Crow">
                            <div class="image-overlay-text d-none">How Euphoria Group Helps Businesses Work Smarter</div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Innovation Beyond Tradition: How Euphoria Helps Businesses Scale Efficiently</h5>
                            <div class="author-meta">
                                <img src="https://i.pravatar.cc/150?u=ayushi" class="author-img" alt="Author">
                                <span class="me-3">Ayushi Davda</span>
                                <span><i class="far fa-calendar-alt me-1"></i> March 18, 2026</span>
                            </div>
                            <p class="card-text">Innovation is No Longer Optional — It Is Essential. Traditional thinking is no longer sufficient to solve challenges in today's rapidly changing environment...</p>
                            <a href="blog-detail" class="read-more">Read More <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card blog-card" style="transition-delay: 0.5s;">
                        <div class="card-img-wrapper">
                            <img src="assets/img/blog-image-2.png" class="card-img-top" alt="Cityscape">
                            <div class="image-overlay-text d-none">One Night. One Decision. Everything Changed.</div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">The Night That Changed Everything: A Journey with Euphoria Group</h5>
                            <div class="author-meta">
                                <img src="https://i.pravatar.cc/150?u=ayushi" class="author-img" alt="Author">
                                <span class="me-3">Ayushi Davda</span>
                                <span><i class="far fa-calendar-alt me-1"></i> March 19, 2026</span>
                            </div>
                            <p class="card-text">Sometimes, life doesn't change in a day... It changes in a single night. A night full of questions. A night full of doubts. A night where everything begins...</p>
                            <a href="blog-detail" class="read-more">Read More <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="text-center mt-5">
            <button class="btn btn-view-all">View All Post <i class="fas fa-arrow-right ms-2"></i></button>
        </div>
    </div>

</section>


<?php
include_once ('elements/footer.php');
?>