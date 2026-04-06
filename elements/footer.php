        <div class="footer-curve-wrapper"></div>

        <footer class="main-footer">
            <div class="container">
                <div class="row align-items-center mb-5">
                    <div class="col-md-9">
                        <img src="assets/img/logo-512-white.png" alt="Euphoria Group" class="footer-logo">
                        <p class="tagline">Providing Global Businesses with Comprehensive Strategic Solutions.</p>
                        <p class="description ps-0">Euphoria Group is a global advisory firm offering company formation, corporate services, visas, real estate, and tourism solutions with expert support and seamless execution.</p>
                    </div>
                    <div class="col-md-3 text-md-end social-icons">
                        <p class="mb-2 fw-bold">Follow #Euphoria</p>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                    </div>
                </div>

                <div class="row footer-link-background">
                    <div class="col-lg-7 py-3">
                        <div class="row">
                            <div class="col-md-4 col-6">
                                <h5 class="footer-heading">Company</h5>
                                <ul class="footer-links">
                                    <li>
                                        <a href="about-us">
                                            <img src="assets/img/icon/star-white.png" class="stat-icon-footer">
                                            About Euphoria
                                        </a>
                                    </li>
                                    <li>
                                        <a href="partner-up">
                                            <img src="assets/img/icon/star-white.png" class="stat-icon-footer">
                                            Partner Up
                                        </a>
                                    </li>
                                    <li>
                                        <a href="career">
                                            <img src="assets/img/icon/star-white.png" class="stat-icon-footer">
                                            Career
                                        </a>
                                    </li>
                                    <li>
                                        <a href="blog">
                                            <img src="assets/img/icon/star-white.png" class="stat-icon-footer">
                                            Blog
                                        </a>
                                    </li>
                                    <li>
                                        <a href="contact">
                                            <img src="assets/img/icon/star-white.png" class="stat-icon-footer">
                                            Contact
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-6">
                                <h5 class="footer-heading">Inbound Services</h5>
                                <ul class="footer-links">
                                    <li>
                                        <a href="corporate-establishment">
                                            <img src="assets/img/icon/star-white.png" class="stat-icon-footer">
                                            Corporate Establishment
                                        </a>
                                    </li>
                                    <li>
                                        <a href="corporate-service">
                                            <img src="assets/img/icon/star-white.png" class="stat-icon-footer">
                                            Corporate Service
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tours-travels">
                                            <img src="assets/img/icon/star-white.png" class="stat-icon-footer">
                                            Travel & Tourism
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wealth-asset-solution">
                                            <img src="assets/img/icon/star-white.png" class="stat-icon-footer">
                                            Wealth & Asset Solutions
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-12">
                                <h5 class="footer-heading">Outbound Services</h5>
                                <ul class="footer-links">
                                    <li>
                                        <a href="corporate-service">
                                            <img src="assets/img/icon/star-white.png" class="stat-icon-footer">
                                            Corporate Service Provider
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 py-3">
                        <div class="newsletter-card">
                            <h3>Newsletter</h3>
                            <p>Get exclusive insights on finance, asset protection, and global business with the euphoria group newsletter.</p>
                            <form class="newsletter-form">
                                <input type="email" placeholder="Enter your Email ID" required>
                                <button type="submit" class="btn-signup">Sign Up</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row contact-info-bar justify-content-center text-center">
                    <div class="col-md-auto px-4 contact-item">
                        <i class="fas fa-phone-volume"></i> +91 261 3686846
                    </div>
                    <div class="col-md-auto px-4 contact-item">
                        <i class="fas fa-envelope"></i> info@theeuphoriagroup.com
                    </div>
                    <div class="col-md-auto px-4 contact-item">
                        <i class="fas fa-map-marker-alt"></i> B-907/908, Pragati IT Park, Near AR mall, Mota Varachha, Surat - 394101
                    </div>
                </div>

                <div class="row copyright-bar mt-4">
                    <div class="col-md-12 text-center">
                        copyright &copy; 2026 The Euphoria Group. All rights reserved.
                        <a href="terms-conditions">Terms & Conditions</a> | <a href="privacy-policy">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- BACK TO TOP -->
        <button id="backTop" title="Back to top"><i class="bi bi-arrow-up"></i></button>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <script>
            if( $('#serviceTrack').length >0 ){
                const track = document.getElementById('serviceTrack');
                const nav = document.getElementById('sliderNav');
                const cards = track.querySelectorAll('.service-card');
                
                let isDown = false;
                let startX;
                let scrollLeft;
                let moved = false;

                // Create dynamic dots
                cards.forEach((_, i) => {
                    const dot = document.createElement('button');
                    dot.classList.add('nav-dot');
                    if(i === 0) dot.classList.add('active');
                    dot.addEventListener('click', (e) => {
                        e.preventDefault();
                        // Calculate exact position including the track's internal padding/offset
                        const targetScroll = cards[i].offsetLeft - track.offsetLeft;
                        track.scrollTo({
                            left: targetScroll,
                            behavior: 'smooth'
                        });
                    });
                    nav.appendChild(dot);
                });
                
                const dots = document.querySelectorAll('.nav-dot');
    
                // Drag to Scroll Logic
                track.addEventListener('mousedown', (e) => {
                    isDown = true;
                    moved = false;
                    track.style.scrollBehavior = 'auto';
                    track.style.scrollSnapType = 'none'; // Temporarily disable snapping for free drag
                    startX = e.pageX - track.offsetLeft;
                    scrollLeft = track.scrollLeft;
                });
    
                track.addEventListener('mouseleave', () => { 
                    if (!isDown) return;
                    isDown = false;
                    track.style.scrollBehavior = 'smooth';
                    track.style.scrollSnapType = 'x mandatory';
                });
    
                track.addEventListener('mouseup', (e) => { 
                    isDown = false; 
                    track.style.scrollBehavior = 'smooth';
                    track.style.scrollSnapType = 'x mandatory';
                    
                    // If we actually moved, prevent the click event on any child elements (like links)
                    if (moved) {
                        const preventClick = (e) => {
                            e.stopImmediatePropagation();
                            e.preventDefault();
                            track.removeEventListener('click', preventClick, true);
                        };
                        track.addEventListener('click', preventClick, true);
                    }
                });
    
                track.addEventListener('mousemove', (e) => {
                    if (!isDown) return;
                    
                    const x = e.pageX - track.offsetLeft;
                    const walk = (x - startX) * 2; 
                    
                    // Threshold to determine if it's a drag or just a tiny accidental wiggle
                    if (Math.abs(x - startX) > 5) {
                        moved = true;
                        e.preventDefault();
                        track.scrollLeft = scrollLeft - walk;
                    }
                });
    
                // Update active dot on scroll
                track.addEventListener('scroll', () => {
                    // Find which card is currently most visible in the center of the track
                    const trackCenter = track.scrollLeft + (track.offsetWidth / 2);
                    
                    let activeIndex = 0;
                    let minDiff = Infinity;
                    
                    cards.forEach((card, i) => {
                        const cardCenter = card.offsetLeft + (card.offsetWidth / 2);
                        const diff = Math.abs(trackCenter - cardCenter);
                        if (diff < minDiff) {
                            minDiff = diff;
                            activeIndex = i;
                        }
                    });
    
                    dots.forEach((dot, i) => {
                        dot.classList.toggle('active', i === activeIndex);
                    });
                });
            }

        </script>

        <script>
            // Simple animation trigger when page loads
            document.addEventListener('DOMContentLoaded', () => {
                const cards = document.querySelectorAll('.blog-card');
                cards.forEach(card => {
                    card.classList.add('animate-in');
                });
            });
        </script>

        <script>
            // ─── HERO SWIPER ───
            new Swiper('.hero-swiper', {
                loop: true,
                autoplay: { delay: 5000, disableOnInteraction: false },
                pagination: { el: '.hero-swiper .swiper-pagination', clickable: true },
                effect: 'fade',
                fadeEffect: { crossFade: true },
                speed: 900,
            });

            // ─── SERVICE SWIPER ───
            new Swiper('.service-swiper', {
                loop: true,
                autoplay: { delay: 2800, disableOnInteraction: false },
                pagination: { el: '.service-swiper .swiper-pagination', clickable: true },
                slidesPerView: 1,
                spaceBetween: 20,
                breakpoints: {
                576: { slidesPerView: 2 },
                768: { slidesPerView: 3 },
                1024: { slidesPerView: 4 },
                },
                speed: 600,
            });

            // ─── SCROLL REVEAL ───
            const revealEls = document.querySelectorAll('.reveal, .reveal-left, .reveal-right');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((e, i) => {
                if (e.isIntersecting) {
                    setTimeout(() => e.target.classList.add('visible'), i * 80);
                    observer.unobserve(e.target);
                }
                });
            }, { threshold: 0.12 });
            revealEls.forEach(el => observer.observe(el));

            // ─── COUNTER ───
            function animateCounter(el) {
                const target = +el.dataset.target;
                const duration = 1800;
                const step = target / (duration / 16);
                let current = 0;
                const timer = setInterval(() => {
                current += step;
                if (current >= target) { current = target; clearInterval(timer); }
                el.textContent = Math.floor(current).toLocaleString();
                }, 16);
            }

            const counterObs = new IntersectionObserver((entries) => {
                entries.forEach(e => {
                if (e.isIntersecting) {
                    animateCounter(e.target);
                    counterObs.unobserve(e.target);
                }
                });
            }, { threshold: 0.5 });
            document.querySelectorAll('.counter').forEach(el => counterObs.observe(el));

            // ─── BACK TO TOP ───
            const backBtn = document.getElementById('backTop');

            window.addEventListener('scroll', () => {
                backBtn.classList.toggle('show', window.scrollY > 400);
            });
            
            backBtn.addEventListener('click', () => {
                // slowScrollToTop(1000); // duration in ms (increase = slower)
                window.scrollTo({ top: 0, behavior: 'smooth' })
            });


            function slowScrollToTop(duration) {
                const start = window.scrollY;
                const startTime = performance.now();

                function scrollStep(currentTime) {
                    const elapsed = currentTime - startTime;
                    const progress = Math.min(elapsed / duration, 1);

                    window.scrollTo(0, start * (1 - easeInOut(progress)));

                    if (progress < 1) {
                        requestAnimationFrame(scrollStep);
                    }
                }

                function easeInOut(t) {
                    return t < 0.5
                        ? 2 * t * t
                        : 1 - Math.pow(-2 * t + 2, 2) / 2;
                }

                requestAnimationFrame(scrollStep);
            }


            // ─── NAVBAR ACTIVE ───
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.nav-link[href^="#"]');
            window.addEventListener('scroll', () => {
                let current = '';
                sections.forEach(s => {
                    if (window.scrollY >= s.offsetTop - 90) current = s.id;
                });
                navLinks.forEach(l => {
                    l.classList.toggle('active', l.getAttribute('href') === '#' + current);
                });
            });

            if( $('.visa-section').length > 0 ){
                const observerVisaSection = new IntersectionObserver(entries => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            document.querySelector('.visa-img').classList.add('show');
                            document.querySelector('.visa-content').classList.add('show');
                            document.querySelector('.visa-box').classList.add('show');
                        }
                    });
                });
                observerVisaSection.observe(document.querySelector('.visa-section'));
            }

        </script>
    </body>
</html>