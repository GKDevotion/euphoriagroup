 <style>
      .hero-carousel {
    height: 100vh;
    min-height: 480px;
    max-height: 800px;
    position: relative;
    overflow: hidden;
  }

  .carousel-inner,
  .carousel-item {
    height: 100%;
  }

  .carousel-item {
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
  }

  /* Dark overlay for readability */
  .carousel-item::before {
    content: '';
    position: absolute;
    inset: 0;
    background: rgba(5, 15, 40, 0.55);
    z-index: 1;
  }

  .carousel-item .container {
    position: relative;
    z-index: 2;
    height: 100%;
  }

  .hero-content {
    max-width: 650px;
  }

  .hero-content h1 {
    font-size: clamp(1.6rem, 4vw, 2.8rem);
    font-weight: 800;
    color: #ffffff;
    line-height: 1.2;
    margin-bottom: 1rem;
  }

  .hero-content p {
    font-size: clamp(0.9rem, 2vw, 1.1rem);
    color: rgba(255,255,255,0.88);
    margin-bottom: 1.75rem;
    line-height: 1.6;
  }

  .btn-hero {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background-color: #1a3a8f;
    color: #fff;
    padding: 0.75rem 1.75rem;
    border-radius: 6px;
    font-weight: 600;
    font-size: 1rem;
    text-decoration: none;
    transition: background 0.25s ease, transform 0.2s ease;
    border: none;
    cursor: pointer;
  }

  .btn-hero:hover {
    background-color: #142e75;
    color: #fff;
    transform: translateY(-2px);
  }

 

  /* Carousel controls */
  .carousel-control-prev,
  .carousel-control-next {
    width: 39px;
    height: 39px;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(255,255,255,0.15);
    backdrop-filter: blur(6px);
    border-radius: 12%;
    border: 1px solid rgba(255,255,255,0.3);
    opacity: 1;
    z-index: 10;
  }

  .carousel-control-prev { left: 16px; }
  .carousel-control-next { right: 16px; }

  .carousel-control-prev:hover,
  .carousel-control-next:hover {
    background: rgba(255,255,255,0.28);
  }

  .carousel-control-prev-icon,
  .carousel-control-next-icon {
    width: 20px;
    height: 20px;
  }

  /* Indicators */
  .carousel-indicators {
    z-index: 10;
    bottom: 20px;
  }

  .carousel-indicators button {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background-color: rgba(255,255,255,0.5);
    border: none;
    transition: background 0.3s;
  }

  .carousel-indicators button.active {
    background-color: #fff;
    width: 12px;
    height: 12px;
    border-radius: 50%;
  }
    
    /* ── MOBILE FIXES ── */
  @media (max-width: 767.98px) {
    .hero-carousel {
      min-height: 520px;
      max-height: none;
      height: auto;
    }

    .carousel-item {
      min-height: 520px;
      background-position: center center;
    }

    .carousel-item .container {
      padding-top: 80px;
      padding-bottom: 80px;
    }

    /* Center text on mobile */
    .hero-content {
      text-align: center;
      max-width: 100%;
    }

    .hero-content h1 {
      font-size: clamp(1.5rem, 6vw, 2rem);
    }

    .hero-content p {
      font-size: 0.92rem;
    }

    /* Center button on mobile */
    .hero-content .btn-hero {
      display: inline-flex;
      justify-content: center;
    }

    /* Hide person image on small screens */
    .hero-person {
      display: none;
    }

    /* Hide country tags on mobile */
    .country-tag {
      display: none !important;
    }

    .carousel-control-prev { left: 8px; }
    .carousel-control-next { right: 8px; }
  }

  @media (min-width: 768px) and (max-width: 991.98px) {
    .hero-content h1 {
      font-size: 2rem;
    }

    .hero-person {
      height: 75%;
      right: 2%;
    }
  }
 </style>
<div id="heroCarousel" class="carousel slide hero-carousel" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" style="background-image: url('assets/img/slider/img-4.png');">
            <div class="country-tag d-none d-lg-block" style="top: 15%; right: 40%;">UAE</div>
            <div class="country-tag d-none d-lg-block" style="top: 25%; right: 15%;">UK</div>
            <div class="country-tag d-none d-lg-block" style="bottom: 25%; right: 8%;">MAURITIUS</div>

            <img src="assets/img/img-5.png" class="hero-person" alt="Business Professionals">

            <div class="container h-100 d-flex align-items-center">
                <div class="hero-content">
                    <h1>Start Your Business with Confidence in the Global Marketplace</h1>
                    <p>We provide all-inclusive company formation, licensing, and inbound/outbound advertising & marketing, handled by experts from setup to scale.</p>
                    <a href="#" class="btn-hero">
                        Start Your Business <i class="bi bi-arrow-up-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="carousel-item" style="background-image: url('assets/img/slider/img-1.png');">
            <div class="container h-100 d-flex align-items-center text-center text-lg-start">
                <div class="hero-content">
                    <h1>Expand Your Reach Across Borders</h1>
                    <p>Expert legal and marketing support for UK and European market entry.</p>
                    <a href="#" class="btn-hero">Explore Services <i class="bi bi-arrow-up-right ms-2"></i></a>
                </div>
            </div>
        </div>

        <div class="carousel-item" style="background-image: url('assets/img/slider/img-2.png');">

            <div class="container h-100 d-flex align-items-center">
                <div class="hero-content">
                    <h1>Start Your Business with Confidence in the Global Marketplace</h1>
                    <p>We provide all-inclusive company formation, licensing, and inbound/outbound advertising & marketing, handled by experts from setup to scale.</p>
                    <a href="#" class="btn-hero">
                        Start Your Business <i class="bi bi-arrow-up-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="carousel-item" style="background-image: url('assets/img/slider/img-3.png');">

            <div class="container h-100 d-flex align-items-center">
                <div class="hero-content">
                    <h1>Start Your Business with Confidence in the Global Marketplace</h1>
                    <p>We provide all-inclusive company formation, licensing, and inbound/outbound advertising & marketing, handled by experts from setup to scale.</p>
                    <a href="#" class="btn-hero">
                        Start Your Business <i class="bi bi-arrow-up-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>