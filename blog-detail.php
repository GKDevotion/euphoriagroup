<?php
include_once('elements/header.php');
?>
<style>
   
    /* ── BACK LINK ── */
    .back-link {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-size: 0.9rem;
        font-weight: 500;
        color: #1a1a2e;
        text-decoration: none;
        margin-bottom: 24px;
        transition: gap 0.2s;
    }

    .back-link:hover {
        gap: 10px;
        color:  #e03131;
    }

    /* ── HERO CARD ── */
    .hero-card {
        background: #fff;
        border: 1px solid #e5e7eb;
        border-radius: 14px;
        overflow: hidden; 
        margin-bottom: 32px;
        position: relative;
    }

    .hero-logo {
        position: absolute;
        top: 20px;
        right: 24px;
        text-align: center;
        line-height: 1;
    }

    .hero-logo .logo-top { 
        font-size: 13px;
        font-weight: 700;
        color: #1a2a5e;
    }

    .hero-logo .logo-sub {
        font-size: 10px;
        color:  #e03131;
        font-weight: 600;
    }

    .hero-logo .logo-url {
        font-size: 9px;
        color: #6b7280;
    }

    .hero-logo .logo-line {
        height: 2px;
        background: linear-gradient(90deg, #1a2a5e, #e03131);
        border-radius: 2px;
        margin: 3px 0;
    }

    .hero-title { 
        font-size: clamp(1.4rem, 3vw, 2rem);
        font-weight: 800;
        color: #1a2a5e;
        text-align: center;
        line-height: 1.3;
        margin-bottom: 24px;
        padding-right: 90px;
    }

    .hero-img-wrap {
        text-align: center;
        margin: 0 -36px;
    }

    .hero-img-wrap img {
        width: 100%;
        max-height: 320px;
        object-fit: contain;
        object-position: bottom;
    } 
     
    .blog-post-title { 
        font-size: clamp(1.3rem, 2.5vw, 1.75rem);
        font-weight: 800;
        color: #1a2a5e;
        line-height: 1.3;
        margin-bottom: 20px;
    }

    .blog-body p {
        line-height: 1.75;
        color: #374151;
        margin-bottom: 14px;
    }

    .section-label {
        font-size: 0.78rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #6b7280;
        margin: 28px 0 6px;
    }

    .bullet-heading {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        font-weight: 700;
        font-size: 0.97rem;
        color: #1a1a2e;
        margin: 22px 0 10px;
    }

    .bullet-dot {
        width: 11px;
        height: 11px;
        border-radius: 50%;
        background: #1a2a5e;
        flex-shrink: 0;
        margin-top: 4px;
    }

    .blog-body ul.plain-list {
        list-style: none;
        padding: 0;
        margin: 0 0 14px;
    }

    .blog-body ul.plain-list li {
        padding: 3px 0;
        color: #374151;
        line-height: 1.7;
    }

    .emoji-item {
        display: flex;
        gap: 10px;
        margin-bottom: 14px;
    }

    .emoji-item .ei-icon {
        font-size: 1.1rem;
        flex-shrink: 0;
        padding-top: 2px;
    }

    .emoji-item .ei-body {
        line-height: 1.6;
        color: #374151;
    }

    .emoji-item .ei-body strong {
        display: block;
        font-weight: 600;
        color: #1a1a2e;
    }
 
    /* ── SIDEBAR ── */
    .sidebar-card {
        background: #fff;
        border: 1px solid #e5e7eb;
        border-radius: 14px;
        padding: 24px;
        margin-bottom: 24px;
    }

    .sidebar-card h5 { 
        font-size: 1.2rem;
        font-weight: 700;
        color: #1a1a2e;
        margin-bottom: 20px;
    }

    /* Recent Post Item */
    .recent-item {
        display: flex;
        gap: 12px;
        align-items: flex-start;
        padding-bottom: 16px;
        margin-bottom: 16px;
        border-bottom: 1px solid #e5e7eb;
        text-decoration: none;
    }

    .recent-item:last-child {
        border-bottom: none;
        padding-bottom: 0;
        margin-bottom: 0;
    }

    .recent-item img {
        width: 60px;
        height: 55px;
        border-radius: 8px;
        object-fit: cover;
        flex-shrink: 0;
    }

    .recent-item .ri-meta {
        font-size: 0.75rem;
        color: #6b7280;
        margin-bottom: 4px;
    }

    .recent-item .ri-title {
        font-size: 0.85rem;
        font-weight: 600;
        color: #1a2a5e;
        line-height: 1.4;
        transition: color 0.2s;
    }

    .recent-item:hover .ri-title {
        color: #e03131;
    }

    /* Tags */
    .tag-badge {
        display: inline-block;
        padding: 6px 14px;
        margin: 0 6px 8px 0;
        border: 1px solid #e5e7eb;
        border-radius: 20px;
        font-size: 0.82rem;
        font-weight: 500;
        color: #1a1a2e;
        background: #fff;
        cursor: pointer;
        transition: background 0.2s, color 0.2s, border-color 0.2s;
    }

    .tag-badge:hover {
        background: #1a2a5e;
        color: #fff;
        border-color: #1a2a5e;
    }
</style>

<div class="container " style=" margin-top: 200px; max-width:1140px;">

    <!-- Back -->
    <a href="blog.php" class="back-link">
        <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
            <polyline points="15 18 9 12 15 6" />
        </svg>
        Back
    </a>

    <div class="row g-4">
        <!-- ═══════════════ MAIN COLUMN ═══════════════ -->
        <div class="col-12 col-lg-8">

            <!-- Hero Card -->
            <div class="hero-card">
                <div class="hero-img-wrap">
                    <img src="assets/img/blog/blog-detail.png" alt="Turtle illustration" />
                </div>
            </div>

            <!-- Blog Body -->
            <div class="blog-body">
                <h2 class="blog-post-title">The Turtle Who Never Quit:<br>A Lesson by Euphoria Group</h2>

                <p>In a world obsessed with speed, there once lived a small turtle who chose a different path—one of patience, persistence, and quiet determination.</p>
                <p>This is not just a story.<br>It's a mindset.<br>It's the foundation of Euphoria Group.</p>

                <div class="section-label">The Story Begins</div>
                <p>In a dense forest filled with fast animals—rabbits, deer, and cheetahs—there lived a turtle.<br>He wasn't the fastest.<br>He wasn't the strongest.</p>

                <div class="bullet-heading"><span class="bullet-dot"></span>But he had something rare:</div>
                <p>He never stopped moving.<br>
                    Every day, while others rushed, got distracted, or gave up midway, the turtle kept going—slowly but steadily.<br>
                    Animals laughed at him.<br>
                    "Why so slow?" they mocked.<br>
                    "You'll never make it."<br>
                    But the turtle didn't argue.<br>
                    He didn't explain.<br>
                    He simply continued.</p>

                <div class="section-label">The Turning Point</div>
                <div class="bullet-heading"><span class="bullet-dot"></span>One day, a challenge was announced:</div>
                <p>Reach the mountain top—the ultimate symbol of success.<br>
                    The fast animals sprinted ahead, full of confidence.<br>
                    But along the way…</p>
                <ul class="plain-list">
                    <li>The rabbit got overconfident and stopped</li>
                    <li>The deer got distracted</li>
                    <li>Others lost focus or energy</li>
                </ul>
                <p>And the turtle?<br>He kept going.<br>Step by step.<br>Without quitting.<br>And eventually…<br>He reached the top.</p>

                <div class="section-label">The Euphoria Group Perspective</div>
                <p>At Euphoria Group, we believe success is not about speed—it's about consistency, strategy, and resilience.</p>

                <div class="bullet-heading"><span class="bullet-dot"></span>Like the turtle:</div>
                <ul class="plain-list">
                    <li>You don't need to be perfect to start</li>
                    <li>You don't need to be the fastest to win</li>
                    <li>You just need to keep going with the right direction</li>
                </ul>

                <div class="section-label">What This Means for You</div>
                <div class="bullet-heading"><span class="bullet-dot"></span>In business and life, many people:</div>
                <ul class="plain-list">
                    <li>Start fast but quit early</li>
                    <li>Chase shortcuts but miss real growth</li>
                    <li>Compare themselves and lose confidence</li>
                </ul>
                <p>But those who succeed?<br>They stay consistent.<br>They stay focused.<br>They stay committed.<br>That's exactly what we help you do.</p>

                <div class="section-label">How Euphoria Group Supports Your Journey</div>

                <div class="emoji-item">
                    <div class="ei-icon">🌐</div>
                    <div class="ei-body"><strong>Guiding Your Global Dreams</strong>We help you expand beyond boundaries and explore international opportunities with confidence.</div>
                </div>
                <div class="emoji-item">
                    <div class="ei-icon">📈</div>
                    <div class="ei-body"><strong>Building Smart Strategies</strong>Success is not luck—it's planning. We help you move forward with clarity and purpose.</div>
                </div>
                <div class="emoji-item">
                    <div class="ei-icon">🤝</div>
                    <div class="ei-body"><strong>Standing With You at Every Step</strong>Just like the turtle's steady journey, we stay with you—from start to success.</div>
                </div>

                <div class="section-label">The Real Message</div>
                <blockquote class="blog-quote">
                    "Slow and steady wins the race" is not just a saying—it's a strategy.<br>
                    At Euphoria Group, we don't promise overnight success.<br>
                    We promise real, sustainable growth.
                </blockquote>

                <div class="section-label">Final Thought</div>
                <p>You might feel slow.<br>You might feel behind.<br>But remember…</p>
                <div class="emoji-item">
                    <div class="ei-icon">🐢</div>
                    <div class="ei-body">Even the slowest step forward is still progress.<br>And with the right guidance—<br>you will reach your destination.</div>
                </div>

                <p style="font-weight:600; color:var(--navy); margin-top:24px;">Start Your Journey Today with Euphoria Group</p>
                <p>Because success doesn't come to those who rush…<br>it comes to those who never quit.</p>
            </div>

        </div><!-- /main col -->

        <!-- ═══════════════ SIDEBAR ═══════════════ -->
        <div class="col-12 col-lg-4">

            <!-- Recent Posts -->
            <div class="sidebar-card">
                <h5>Recent Post</h5>

                <a href="#" class="recent-item">
                    <img src="https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=120&q=80" alt="Travel" />
                    <div>
                        <div class="ri-meta">March 12, 2026</div>
                        <div class="ri-title">Exploring New Horizons: The Joy of Travel and Disco……</div>
                    </div>
                </a>

                <a href="#" class="recent-item">
                    <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?w=120&q=80" alt="Finance" />
                    <div>
                        <div class="ri-meta">Feb 05, 2026</div>
                        <div class="ri-title">The Power of Smart Financial Planning</div>
                    </div>
                </a>

                <a href="#" class="recent-item">
                    <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=120&q=80" alt="Digital" />
                    <div>
                        <div class="ri-meta">Feb 05, 2026</div>
                        <div class="ri-title">Digital Transformation in Modern Business</div>
                    </div>
                </a>
            </div>

            <!-- Tags -->
            <div class="sidebar-card">
                <h5>Tags</h5>
                <div>
                    <span class="tag-badge">Euphoria Group</span>
                    <span class="tag-badge">Consistency</span>
                    <span class="tag-badge">Persistence</span>
                    <span class="tag-badge">Success Mindset</span>
                    <span class="tag-badge">Growth Mindset</span>
                    <span class="tag-badge">Business Growth</span>
                    <span class="tag-badge">Motivation</span>
                </div>
            </div>

        </div><!-- /sidebar -->
    </div><!-- /row -->
</div>


<?php
include_once('elements/faqs.php');
include_once('elements/footer.php');
?>