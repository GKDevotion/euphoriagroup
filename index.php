<?php
include_once('elements/header.php');
include_once('elements/home-slider.php');
?>

<!-- Start Image Slider SHELL -->
<style>
    .euphoria-section {
        padding: 40px 0;
        overflow: hidden;
    }

    /* Make horizontal scroll on mobile */
    .euphoria-row {
        display: flex;
        align-items: center;
        gap: 15px;
        overflow-x: auto;
        flex-wrap: nowrap;
        /* KEY FIX */
        -webkit-overflow-scrolling: touch;
    }

    /* Hide scrollbar (optional clean look) */
    .euphoria-row::-webkit-scrollbar {
        display: none;
    }

    .logo-img {
        max-height: 75px;
        min-width: 100px;
        /* keeps proper spacing */
    }

    .star-img {
        width: 18px;
        height: 18px;
        flex-shrink: 0;
    }

    /* Slider wrapper */
    .euphoria-slider {
        display: flex;
        width: max-content;
        animation: scrollSlider 80s linear infinite;
    }

    /* Pause on hover (premium feel) */
    .euphoria-section:hover .euphoria-slider {
        animation-play-state: paused;
    }

    /* Animation */
    @keyframes scrollSlider {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-50%);
        }
    }

    /* Optional: hide stars on very small screens */
    @media (max-width: 576px) {
        .star-img {
            display: none;
        }
    }
</style>

<section class="container">
    <div class="euphoria-section">
        <div class="euphoria-slider">
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-4 text-center">

                <!-- First Star -->
                <img src="assets/img/icon/star-blue.png" class="star-img star-first d-none d-md-block" alt="star">

                <?php
                for( $i=0; $i<=8; $i++ ){
                ?>
                    <!-- Logo 1 -->
                    <div class="flex-fill">
                        <img src="assets/img/logo/corporate-service.png" class="logo-img img-fluid" alt="Corporate Service">
                    </div>

                    <!-- Star -->
                    <img src="assets/img/icon/star-blue.png" class="star-img" alt="star">

                    <!-- Logo 2 -->
                    <div class="flex-fill">
                        <img src="assets/img/logo/private-wealth.png" class="logo-img img-fluid" alt="Real Estate">
                    </div>

                    <!-- Star -->
                    <img src="assets/img/icon/star-blue.png" class="star-img" alt="star">

                    <!-- Logo 3 -->
                    <div class="flex-fill">
                        <img src="assets/img/logo/real-state.png" class="logo-img img-fluid" alt="Travel & Tourism">
                    </div>

                    <!-- Star -->
                    <img src="assets/img/icon/star-blue.png" class="star-img" alt="star">

                    <!-- Logo 4 -->
                    <div class="flex-fill">
                        <img src="assets/img/logo/travel-tourism.png" class="logo-img img-fluid" alt="Private Wealth">
                    </div>

                    <!-- Last Star -->
                    <img src="assets/img/icon/star-blue.png" class="star-img star-last d-none d-md-block" alt="star">

                    <!-- Logo 5 -->
                    <div class="flex-fill">
                        <img src="assets/img/logo/hr-consultancy.png" class="logo-img img-fluid" alt="HR Consultancy">
                    </div>

                    <!-- Last Star -->
                    <img src="assets/img/icon/star-blue.png" class="star-img star-last d-none d-md-block" alt="star">
                <?php
                }
                ?>


            </div>
        </div>
    </div>
</section>
<!-- End Image Slider SHELL -->

<style>
    p.text-muted {
        font-size: 1.2rem;
    }
    
</style>

<section class="about-section">
    <div class="about-title-bg" >About</div>

    <div class="container">
        <div class="row align-items-center" data-aos="fade-up" data-aos-duration="200">

            <h2 class="about-title h1" data-aos="fade-down" data-aos-duration="1000">About Euphoria Group</h2>

            <div class="col-lg-5">
                <div class="image-overlap-container">
                    <img src="assets/img/img-7.png" class="oval-img img-large" alt="Our Team" data-aos="fade-left" data-aos-duration="800">
                    <img src="assets/img/img-6.png" class="oval-img img-small" alt="Business Meeting" data-aos="fade-right" data-aos-duration="800">
                </div>
            </div>

            <div class="col-lg-7">
                <p class="text-muted mb-4" data-aos="fade-up" data-aos-duration="600">
                    Euphoria Group is a reputable multi-service consultancy that provides international business setup,
                    global travel and visa services, real estate brokerage, insurance solutions, and stock market
                    opportunities on a single integrated platform.
                </p>
                <p class="text-muted mb-4" data-aos="fade-up" data-aos-duration="600">
                    We offer strategic guidance, transparent solutions, and long-term value through strong market
                    expertise and a client-first approach.
                </p>

                <ul class="about-list">
                    <li data-aos="fade-up" data-aos-duration="600" class="gap-2">
                        <img src="assets/img/icon/Checke.png" alt="Check Icon"> 
                        Expert overseas business setup & corporate services
                    </li>
                    <li data-aos="fade-up" data-aos-duration="600" class="gap-2">
                        <img src="assets/img/icon/Checke.png" alt="Check Icon"> 
                        Trusted real estate brokers in India & Dubai
                    </li>
                    <li data-aos="fade-up" data-aos-duration="600" class="gap-2">
                        <img src="assets/img/icon/Checke.png" alt="Check Icon"> 
                        Comprehensive global travel & Immigration
                    </li>
                    <li data-aos="fade-up" data-aos-duration="600" class="gap-2">
                        <img src="assets/img/icon/Checke.png" alt="Check Icon"> 
                        Comprehensive life, health, travel & business insurance
                    </li>
                    <li data-aos="fade-up" data-aos-duration="600" class="gap-2">
                        <img src="assets/img/icon/Checke.png" alt="Check Icon"> 
                        One-stop solution for wealth, business & lifestyle planning
                    </li>
                </ul>
            </div>

        </div>
    </div>
</section>

<section class="services-section mb-5">
    <div class="about-title-bg">Services</div>

    <div class="container">
        <div class="row align-items-center">

            <h2 class="about-title h1" style="margin-top: -18px;">What We Offer You</h2>
            
            <style>
                /* bullets */
                /* ─── Swiper overrides ────────────────────────────────── */
                .swiper {
                    padding-bottom: 48px !important;
                    padding-top: 20px;
                }

                .swiper-slide {
                    height: auto;
                    display: flex;
                }

                /* bullets */
                .swiper-pagination-bullet {
                    width: 10px;
                    height: 10px;
                    background: #c5d2de;
                    opacity: 1;
                    transition: background 0.3s, transform 0.3s;
                }

                .swiper-pagination-bullet-active {
                    background: #25356F;
                    transform: scale(1.25);
                }

                .services-section::after {
                    content: "";
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;

                    background-image:
                        url("assets/img/service-bg.svg"),
                        url("assets/img/service-bg-1.svg"),
                        url("assets/img/service-bg-2.svg"),
                        url("assets/img/service-bg-3.svg"),
                        url("assets/img/service-bg-4.svg");

                    background-repeat: no-repeat;
                    background-position:
                        0% 100%,
                        25% 100%,
                        50% 100%,
                        75% 100%,
                        100% 100%;

                    pointer-events: none;
                    z-index: 0;
                }
                /* Mobile: 1 card, full width */
                @media (max-width: 575px) {
                .service-card {
                    flex: 0 0 100%;
                    width: 100%;
                }

                .swiper-slide {
                    width: 100% !important;
                }
                }

                /* Tablet: 2 cards */
                @media (min-width: 576px) and (max-width: 991px) {
                .service-card {
                    flex: 0 0 300px;
                }
                }
            </style>

            <!-- Draggable Slider -->
            <div class="swiper servicesSwiper">
                <div class="swiper-wrapper">

                    <!-- Card 1 -->
                    <div class="swiper-slide">
                        <div class="service-card">
                            <div class="content-top">
                                <div class="icon-wrapper">
                                    <img src="assets/img/icon/services-icon.png" alt="Company Formation">
                                </div>
                                <h3>Company Formation</h3>
                                <p>Complete assistance with business setup, including registration, licensing, and legal documents.</p>
                            </div>
                            <a href="#" class="read-more-btn">Read More <i class="bi bi-chevron-double-right"></i></a>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="swiper-slide">
                        <div class="service-card">
                            <div class="content-top">
                                <div class="icon-wrapper">
                                    <img src="assets/img/icon/services-icon-6.png" alt="Accounting Firm">
                                </div>
                                <h3>Accounting Firm</h3>
                                <p>Professional accounting, bookkeeping, tax planning, and compliance services for strong, compliant operations.</p>
                            </div>
                            <a href="#" class="read-more-btn">Read More <i class="bi bi-chevron-double-right"></i></a>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="swiper-slide">
                        <div class="service-card">
                            <div class="content-top">
                                <div class="icon-wrapper">
                                    <img src="assets/img/icon/services-icon-5.png" alt="Briefcase Icon">
                                </div>
                                <h3>Real Estate</h3>
                                <p>Expert advice on buying, selling, and leasing residential and commercial properties in India & Dubai.</p>
                            </div>
                            <a href="#" class="read-more-btn">Read More <i class="bi bi-chevron-double-right"></i></a>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="swiper-slide">
                        <div class="service-card">
                            <div class="content-top">
                                <div class="icon-wrapper">
                                    <img src="assets/img/icon/services-icon-4.png" alt="Briefcase Icon">
                                </div>
                                <h3>Tours & Travel</h3>
                                <p>Full-service travel solutions, visa help, flight bookings, and personalised global travel packages.</p>
                            </div>
                            <a href="#" class="read-more-btn">Read More <i class="bi bi-chevron-double-right"></i></a>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="swiper-slide">
                        <div class="service-card">
                            <div class="content-top">
                                <div class="icon-wrapper">
                                    <img src="assets/img/icon/services-icon-3.png" alt="Briefcase Icon">
                                </div>
                                <h3>Immigration Services</h3>
                                <p>Reliable assistance with residency, work permits, investor visas, and global relocation processes.</p>
                            </div>
                            <a href="#" class="read-more-btn">Read More <i class="bi bi-chevron-double-right"></i></a>
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div class="swiper-slide">
                        <div class="service-card">
                            <div class="content-top">
                                <div class="icon-wrapper">
                                    <img src="assets/img/icon/services-icon-1.png" alt="Briefcase Icon">
                                </div>
                                <h3>Wealth Markets</h3>
                                <p>Strategic recommendations for profitable investment opportunities in India.</p>
                            </div>
                            <a href="#" class="read-more-btn">Read More <i class="bi bi-chevron-double-right"></i></a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="service-card">
                            <div class="content-top">
                                <div class="icon-wrapper">
                                    <img src="assets/img/icon/services-icon-2.png" alt="Briefcase Icon">
                                </div>
                                <h3>Elite Insurance</h3>
                                <p>Customised insurance solutions for health, life, business, and assets to protect what is most important.</p>
                            </div>
                            <a href="#" class="read-more-btn">Read More <i class="bi bi-chevron-double-right"></i></a>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination" data-aos="fade-down" data-aos-duration="500"></div>
            </div>

        </div>
    </div>
</section>


<!-- Start Our Success Section-->
<section class="our-success-banner ">
    <h2 class="about-title h1">The Euphoria Timeline</h2>
    <div class="stats-row" data-aos="fade-up" data-aos-duration="200">

        <div class="stat-item" data-aos="fade-up" data-aos-duration="500">
            <span class="stat-number">108+</span>
            <span class="stat-label">
                <!-- <i class="bi bi-people stat-icon"></i> -->
                <img src="assets/img/icon/professional-user.png" class="stat-icon">
                Professionals at Euphoria
            </span>
        </div>

        <div class="stat-item" data-aos="fade-up" data-aos-duration="600">
            <span class="stat-number">25+</span>
            <span class="stat-label">
                <!-- <i class="bi bi-globe stat-icon"></i> -->
                <img src="assets/img/icon/nationality.png" class="stat-icon">
                Nationalities Represented
            </span>
        </div>

        <div class="stat-item" data-aos="fade-up" data-aos-duration="700">
            <span class="stat-number">12+</span>
            <span class="stat-label">
                <!-- <i class="bi bi-gear stat-icon"></i> -->
                <img src="assets/img/icon/year-experience.png" class="stat-icon">
                Years of Industry Expertise
            </span>
        </div>

        <div class="stat-item" data-aos="fade-up" data-aos-duration="800">
            <span class="stat-number">1,000+</span>
            <span class="stat-label">
                <!-- <i class="bi bi-emoji-smile stat-icon"></i> -->
                <img src="assets/img/icon/satisfied-client.png" class="stat-icon">
                Satisfied Clients
            </span>
        </div>

    </div>
</section>

<!-- ── Content Card ── -->
<div class="container-fluid px-3 px-md-4 pb-5">
    <div class="opportunities-content-card">
        <span class="card-watermark">Unrestricted</span>
        <div class="opportunities-content-card-inner">
            <div class="row" data-aos="fade-up" data-aos-duration="900">

                <!-- Left: Title + Accordion -->
                <div class="col-lg-8" data-aos="fade-down" data-aos-duration="1000">
                    <h3 class="section-title">Architecting Tomorrow's Opportunities</h3>

                    <div class="mt-5">
                        <div class="accordion euphoria-accordion" id="euphoriaAccordion">

                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1100">
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

                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1100">
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

                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1100">
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

                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1100">
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

                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1100">
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

                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1100">
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

                <!-- Right: img -->
                <div class="col-lg-4 d-none d-md-block">
                    <div class="right-col">
                      
                        <img class="img-office" src="https://picsum.photos/300/200?2" alt="Professionals at work" data-aos="fade-left" data-aos-duration="1200">

                        <div class="img-world-card">
                            <img src="https://picsum.photos/200/200?1" alt="World map global network" data-aos="fade-right" data-aos-duration="1200">
                        </div>
                    </div>
                </div>

            </div><!-- /row -->
        </div><!-- /inner -->
    </div><!-- /card -->
</div>
<!-- End Our Success Section-->
<style>
    .blog-sec {
        padding: 300px 0 60px;
    }

    
</style>

<section class="about-section blog-sec pb-0 mt-5">
    <div class="blog-title-bg">Blog</div>

    <div class="container timeline-content text-center">
        <div class="row align-items-center">

            <h2 class="about-title h1 pb-5" data-aos="fade-up" data-aos-duration="400">Latest Announcement</h2>

            <div class="col-lg-4 col-md-6 px-2 mx-auto mb-2" data-aos="fade-up" data-aos-duration="500">
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

            <div class="col-lg-4 col-md-6 px-2 mx-auto mb-2" data-aos="fade-up" data-aos-duration="600">
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

            <div class="col-lg-4 col-md-6 px-2 mx-auto mb-2" data-aos="fade-up" data-aos-duration="700">
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

    <div class="text-center mt-5" data-aos="fade-down" data-aos-duration="800">
        <button class="btn btn-view-all">View All Post <i class="fas fa-arrow-right ms-2"></i></button>
    </div>
    </div>

</section>


<?php
include_once('elements/footer.php');
?>