        <div class="footer-curve-wrapper"></div>

        <footer class="main-footer">
            <div class="container">
                <div class="row align-items-center mb-5">
                    <div class="col-md-8">
                        <img src="assets/img/logo-512-white.png" alt="Euphoria Group" class="footer-logo">
                        <p class="tagline">Providing Global Businesses with Comprehensive Strategic Solutions.</p>
                        <p class="description col-lg-8 ps-0">Euphoria Group is a global advisory firm offering company formation, corporate services, visas, real estate, and tourism solutions with expert support and seamless execution.</p>
                    </div>
                    <div class="col-md-4 text-md-end social-icons">
                        <p class="mb-2 fw-bold">Follow #Euphoria</p>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-md-4 col-6">
                                <h5 class="footer-heading">Company</h5>
                                <ul class="footer-links">
                                    <li><a href="#"><i class="fas fa-plus"></i> About Euphoria</a></li>
                                    <li><a href="#"><i class="fas fa-plus"></i> Partner Up</a></li>
                                    <li><a href="#"><i class="fas fa-plus"></i> Career</a></li>
                                    <li><a href="#"><i class="fas fa-plus"></i> Blog</a></li>
                                    <li><a href="#"><i class="fas fa-plus"></i> Contact</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-6">
                                <h5 class="footer-heading">Inbound Services</h5>
                                <ul class="footer-links">
                                    <li><a href="#"><i class="fas fa-plus"></i> Corporate Establishment</a></li>
                                    <li><a href="#"><i class="fas fa-plus"></i> Corporate Service</a></li>
                                    <li><a href="#"><i class="fas fa-plus"></i> Travel & Tourism</a></li>
                                    <li><a href="#"><i class="fas fa-plus"></i> Wealth & Asset Solutions</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-12">
                                <h5 class="footer-heading">Outbound Services</h5>
                                <ul class="footer-links">
                                    <li><a href="#"><i class="fas fa-plus"></i> Corporate Service Provider</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
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
                        <i class="fas fa-phone-alt"></i> +91 261 3686846
                    </div>
                    <div class="col-md-auto px-4 contact-item">
                        <i class="fas fa-envelope"></i> info@theeuphoriagroup.com
                    </div>
                    <div class="col-md-auto px-4 contact-item">
                        <i class="fas fa-map-marker-alt"></i> B-907/908, Pragati IT Park, Near AR mall, Mota Varachha, Surat - 394101
                    </div>
                </div>

                <div class="row copyright-bar mt-4">
                    <div class="col-md-6 text-center text-md-start">
                        copyright &copy; 2026 The Euphoria Group. All rights reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <a href="#">Terms & Conditions</a> | <a href="#">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/dist/js/bootstrap.bundle.min.js"></script>

        <script>
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
    </body>
</html>