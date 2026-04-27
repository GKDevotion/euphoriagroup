<?php
include_once('elements/header.php');
?>

<!-- HERO -->
<section class="top-banner-background" style="background-image: url('assets/img/background/Blog.png');">
    <div>
        <h1 class="mb-0 text-center">Our Latest Blog</h1>
        <p class="text-black text-center mt-2">Stay updated with the latest insight, trends, and Blogs to grow your business</p>
    </div>
</section>

<style>
    /* ── Partnership Section ── */
    .corporate-tab-section {
        padding: 80px 0;
        overflow: hidden;
        position: relative;
    }

    /* ── CARD ── */
    .blog-card {
        background: #fff;
        border: 1px solid #e5e7eb;
        border-radius: 12px;
        overflow: hidden;
        transition: box-shadow 0.25s ease, transform 0.25s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .blog-card:hover {
        box-shadow: 0 12px 32px rgba(0, 0, 0, 0.10);
        transform: translateY(-4px);
    }

    /* ── IMAGE WRAPPER ── */
    .card-img-wrap {
        position: relative;
        overflow: hidden;
        height: 200px;
    }

    .card-img-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .blog-card:hover .card-img-wrap img {
        transform: scale(1.05);
    }

    /* ── LOGO BADGE ── */
    .logo-badge {
        position: absolute;
        top: 12px;
        right: 12px;
        border-radius: 8px;
        padding: 6px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Logo image */
    .logo-badge img {
        width: 60px;
        /* adjust size */
        height: auto;
        object-fit: contain;
    }

    .logo-badge span.brand-top {
        font-size: 9px;
        font-weight: 700;
        color: #1a1a2e;
        letter-spacing: 0.5px;
    }

    .logo-badge span.brand-bottom {
        font-size: 8px;
        color: #e03131;
        font-weight: 600;
        letter-spacing: 0.3px;
    }

    /* ── CARD BODY ── */
    .card-body {
        padding: 18px 20px 20px;
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .card-title {
        font-size: 1rem;
        font-weight: 700;
        font-family: "Anek Kannada", "Poppins", sans-serif;
        line-height: 1.35;
        color: #25356F;
        margin-bottom: 10px;
    }

    /* ── META ROW ── */
    .meta-row {
        display: flex;
        align-items: center;
        gap: 14px;
        margin-bottom: 12px;
    }

    .meta-row .avatar {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #e5e7eb;
    }

    .meta-row .author {
        font-size: 16px;
        font-weight: 600;
        color: #1a1a2e;
    }

    .meta-row .date {
        display: flex;
        align-items: center;
        gap: 5px;
        font-size: 16px;
        color: #AAAAAA;
    }

 

    /* ── EXCERPT ── */
    .excerpt {
        font-size: 17px;
        color: #6b7280;
        font-family:  "Poppins";
        line-height: 1.6;
        flex: 1;
    }

    .excerpt .highlight {
        font-weight: 500;
        color: #1a1a2e;
        display: block; 
    }

    /* ── READ MORE ── */
    .read-more-blog {
        display: inline-flex;
        justify-content: end;
        align-items: center;
        gap: 5px;
        margin-top: 14px;
        font-size: 0.85rem;
        font-weight: 600;
        color: #e03131;
        text-decoration: none;
        transition: gap 0.2s;
    }

    .read-more-blog:hover {
        gap: 9px;
        color: #e03131;
    }

    .read-more-blog svg {
        transition: transform 0.2s;
    }

    .read-more-blog:hover svg {
        transform: translateX(3px);
    }

    /* ── PAGINATION ── */
    .pagination .page-link {
        border-radius: 8px !important;
        border: 1px solid #e5e7eb;
        color: #1a1a2e;
        padding: 8px 14px;
        font-weight: 500;
        font-size: 0.9rem;
        margin: 0 3px;
        transition: background 0.2s, color 0.2s;
    }

    .pagination .page-item.active .page-link {
        background: #e03131;
        border-color: #e03131;
        color: #fff;
    }

    .pagination .page-link:hover:not(.active) {
        background: #fee2e2;
        color: #e03131;
        border-color: #fca5a5;
    }

    /* ── SECTION WRAPPER ── */
    .blog-section {
        padding: 60px 0 80px;
    }

    /* ── MOBILE OPTIMIZATION ── */
    @media (max-width: 768px) {

        .corporate-tab-section {
            padding: 40px 0;
        }

        .blog-section {
            padding: 30px 0 50px;
        }

        /* Card spacing */
        .row.g-4 {
            gap: 20px 0;
            padding: 30px;
        }

        .blog-card {
            border-radius: 10px;
        }

        /* Image height smaller */
        .card-img-wrap {
            height: 180px;
        }

        /* Logo smaller */
        .logo-badge img {
            width: 45px;
        }

        /* Body padding tighter */
        .card-body {
            padding: 14px 15px 16px;
        }

        /* Title smaller for mobile */
        .card-title {
            font-size: 0.95rem;
            line-height: 1.3;
        }

        /* Meta row stacking */
        .meta-row {
            flex-wrap: wrap;
            gap: 8px;
        }

        .meta-row .author {
            font-size: 0.78rem;
        }

        .meta-row .date {
            font-size: 0.72rem;
        }

        .meta-row .avatar {
            width: 28px;
            height: 28px;
        }

        /* Excerpt shorter feel */
        .excerpt {
            font-size: 0.8rem;
            line-height: 1.5;
        }

        /* Optional: clamp text (clean look) */
        .excerpt {
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* Read more alignment */
        .read-more-blog {
            font-size: 0.8rem;
            margin-top: 10px;
        }

        /* Pagination spacing */
        .pagination .page-link {
            padding: 6px 10px;
            font-size: 0.8rem;
        }
    }
</style>

<section class="container corporate-tab-section india-section">

    <div class=" position-relative" style="z-index:2">

        <div class="row g-4 py-5">

            <!-- Card 1 -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="blog-card">
                    <div class="card-img-wrap">
                        <img src="https://images.unsplash.com/photo-1551582045-6ec9c11d8697?w=600&q=80" alt="Penguin Leadership" />
                        <div class="logo-badge">
                            <img src="assets/img/logo-512-origional.png" alt="Euphoria Logo">
                        </div>
                    </div>
                    <div class="card-body">
                        <h2 class="card-title">Be That Penguin: A Lesson in Bold Leadership, Global Expansion &amp; Strategic Growth</h2>
                        <div class="meta-row">
                            <img class="avatar" src="https://i.pravatar.cc/60?img=47" alt="Ayushi Davda" />
                            <div>
                                <div class="author">Ayushi Davda</div>
                            </div>
                            <div class="date">
                                <img src="assets/img/icon/calender-icon.png" alt="">
                                March 18, 2026
                            </div>
                        </div>
                        <p class="excerpt">In the coldest and most unforgiving places on Earth, only the brave can survive.<br><br>A single penguin walking toward the mountains is more than just a picture; it stands for leadership, resilience, and taking action with a purpose.<br><br>Being a leader is not always easy.</p>
                        <a href="blog-detail.php" class="read-more-blog">Read More <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                                <polyline points="9 18 15 12 9 6" />
                            </svg></a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="blog-card">
                    <div class="card-img-wrap">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&q=80" alt="Innovation" />
                        <div class="logo-badge">
                            <img src="assets/img/logo-512-origional.png" alt="Euphoria Logo">
                        </div>
                    </div>
                    <div class="card-body">
                        <h2 class="card-title">Innovation Beyond Tradition: How Euphoria Helps Businesses Scale Efficiently</h2>
                        <div class="meta-row">
                            <img class="avatar" src="https://i.pravatar.cc/60?img=47" alt="Ayushi Davda" />
                            <div>
                                <div class="author">Ayushi Davda</div>
                            </div>
                            <div class="date">
                                <img src="assets/img/icon/calender-icon.png" alt="">
                                March 18, 2026
                            </div>
                        </div>
                        <p class="excerpt"><span class="highlight">Innovation Is No Longer Optional — It Is Essential</span>Traditional thinking is no longer sufficient to solve challenges in today's rapidly changing business environment. Markets evolve rapidly. Customer expectations are constantly shifting. Every day, competition intensifies. Businesses that rely solely on traditional methods often struggle to keep up.</p>
                        <a href="blog-detail.php" class="read-more-blog">Read More <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                                <polyline points="9 18 15 12 9 6" />
                            </svg></a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="blog-card">
                    <div class="card-img-wrap">
                        <img src="https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?w=600&q=80" alt="City Night" />
                        <div class="logo-badge">
                            <img src="assets/img/logo-512-origional.png" alt="Euphoria Logo">
                        </div>
                    </div>
                    <div class="card-body">
                        <h2 class="card-title">The Night That Changed Everything: A Journey with Euphoria Group</h2>
                        <div class="meta-row">
                            <img class="avatar" src="https://i.pravatar.cc/60?img=47" alt="Ayushi Davda" />
                            <div>
                                <div class="author">Ayushi Davda</div>
                            </div>
                            <div class="date">
                                <img src="assets/img/icon/calender-icon.png" alt="">
                                March 19, 2026
                            </div>
                        </div>
                        <p class="excerpt">Sometimes, life doesn't change in a day… It changes in a single night.<br><br>A night full of questions.<br>A night full of doubts.<br>A night where everything feels uncertain.<br><br>But also… A night where everything begins.</p>
                        <a href="blog-detail.php" class="read-more-blog">Read More <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                                <polyline points="9 18 15 12 9 6" />
                            </svg>
                             
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="blog-card">
                    <div class="card-img-wrap">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&q=80" alt="Culture" />
                        <div class="logo-badge">
                            <img src="assets/img/logo-512-origional.png" alt="Euphoria Logo">
                        </div>
                    </div>
                    <div class="card-body">
                        <h2 class="card-title">The Office That Built Culture First: The Euphoria Group Way</h2>
                        <div class="meta-row">
                            <img class="avatar" src="https://i.pravatar.cc/60?img=47" alt="Ayushi Davda" />
                            <div>
                                <div class="author">Ayushi Davda</div>
                            </div>
                            <div class="date">
                                <img src="assets/img/icon/calender-icon.png" alt="">
                                March 18, 2026
                            </div>
                        </div>
                        <p class="excerpt">In today's fast-paced business world, most companies focus on numbers—targets, profits, and growth charts.<br><br>But the most successful organizations know a deeper truth: Culture comes first.<br><br>At Euphoria Group, we didn't just build a company. We built a culture.</p>
                        <a href="blog-detail.php" class="read-more-blog">Read More <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                                <polyline points="9 18 15 12 9 6" />
                            </svg></a>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="blog-card">
                    <div class="card-img-wrap">
                        <img src="https://images.unsplash.com/photo-1551582045-6ec9c11d8697?w=600&q=80" alt="Penguin Leadership" />
                        <div class="logo-badge">
                            <img src="assets/img/logo-512-origional.png" alt="Euphoria Logo">
                        </div>
                    </div>
                    <div class="card-body">
                        <h2 class="card-title">Be That Penguin: A Lesson in Bold Leadership, Global Expansion &amp; Strategic Growth</h2>
                        <div class="meta-row">
                            <img class="avatar" src="https://i.pravatar.cc/60?img=47" alt="Ayushi Davda" />
                            <div>
                                <div class="author">Ayushi Davda</div>
                            </div>
                            <div class="date">
                                <img src="assets/img/icon/calender-icon.png" alt="">
                                March 18, 2026
                            </div>
                        </div>
                        <p class="excerpt">In the coldest and most unforgiving places on Earth, only the brave can survive.<br><br>A single penguin walking toward the mountains is more than just a picture; it stands for leadership, resilience, and taking action with a purpose.<br><br>Being a leader is not always easy.</p>
                        <a href="blog-detail.php" class="read-more-blog">Read More <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                                <polyline points="9 18 15 12 9 6" />
                            </svg></a>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="blog-card">
                    <div class="card-img-wrap">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&q=80" alt="Innovation" />
                        <div class="logo-badge">
                            <img src="assets/img/logo-512-origional.png" alt="Euphoria Logo">
                        </div>
                    </div>
                    <div class="card-body">
                        <h2 class="card-title">Innovation Beyond Tradition: How Euphoria Helps Businesses Scale Efficiently</h2>
                        <div class="meta-row">
                            <img class="avatar" src="https://i.pravatar.cc/60?img=47" alt="Ayushi Davda" />
                            <div>
                                <div class="author">Ayushi Davda</div>
                            </div>
                            <div class="date">
                                <img src="assets/img/icon/calender-icon.png" alt="">
                                March 18, 2026
                            </div>
                        </div>
                        <p class="excerpt"><span class="highlight">Innovation Is No Longer Optional — It Is Essential</span>Traditional thinking is no longer sufficient to solve challenges in today's rapidly changing business environment. Markets evolve rapidly. Customer expectations are constantly shifting. Businesses that rely solely on traditional methods often struggle to keep up.</p>
                        <a href="blog-detail.php" class="read-more-blog">Read More <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                                <polyline points="9 18 15 12 9 6" />
                            </svg></a>
                    </div>
                </div>
            </div>

        </div><!-- /row -->

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-5">
            <nav aria-label="Blog pagination">
                <ul class="pagination mb-0">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                                <polyline points="15 18 9 12 15 6" />
                            </svg>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                                <polyline points="9 18 15 12 9 6" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

    </div><!-- /container -->

</section>
<script>
    document.addEventListener('DOMContentLoaded', function () {
  const cardsPerPage = 3;
  const cards = document.querySelectorAll('.blog-card');
  const pageItems = document.querySelectorAll('.page-item:not(:first-child):not(:last-child)');
  const prevBtn = document.querySelector('.page-item:first-child .page-link');
  const nextBtn = document.querySelector('.page-item:last-child .page-link');

  const totalPages = Math.ceil(cards.length / cardsPerPage);
  let currentPage = 1;

  function showPage(page) {
    cards.forEach((card, index) => {
      const cardWrapper = card.closest('.col-12');
      const start = (page - 1) * cardsPerPage;
      const end = start + cardsPerPage;
      cardWrapper.style.display = (index >= start && index < end) ? '' : 'none';
    });

    // Update active page button
    pageItems.forEach((item, index) => {
      item.classList.toggle('active', index + 1 === page);
    });

    // Disable prev/next at boundaries
    prevBtn.parentElement.classList.toggle('disabled', page === 1);
    nextBtn.parentElement.classList.toggle('disabled', page === totalPages);
  }

  // Page number buttons
  pageItems.forEach((item, index) => {
    item.querySelector('.page-link').addEventListener('click', function (e) {
      e.preventDefault();
      currentPage = index + 1;
      showPage(currentPage);
    });
  });

  // Previous button
  prevBtn.addEventListener('click', function (e) {
    e.preventDefault();
    if (currentPage > 1) {
      currentPage--;
      showPage(currentPage);
    }
  });

  // Next button
  nextBtn.addEventListener('click', function (e) {
    e.preventDefault();
    if (currentPage < totalPages) {
      currentPage++;
      showPage(currentPage);
    }
  });

  // Init
  showPage(1);
});
</script>
<?php
include_once('elements/faqs.php');
include_once('elements/footer.php');
?>