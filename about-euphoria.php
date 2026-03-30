 <?php
  include_once('elements/header.php');
  ?>

 <style>
   :root {
     --navy: #1a2756;
     --gold: #c9a84c;
     --light-gold: #e8d5a3;
     --off-white: #f8f6f1;
     --text-dark: #1a1a2e;
     --text-body: #444;
     --text-muted: #777;
     --section-bg: #f0ede6;
     --red: #c0001d;
     --crimson: #c0392b;
     --crimson-light: rgba(192, 57, 43, 0.08);
     --red-accent: #c0392b;
     --bg: #f4f5f8;
     --card-bg: #ffffff;
     --text-main: #1a2855;
     --pink-light: #f0c0c8;
     --accent: #c0392b;
     --text-muted-custom: #6b7280;
     --brand: #2b3990;
     --accent: #4a5de8;
     --soft-bg: #f4f5fb;
     --text: #1a1d3a;
     --muted: #6b7280;
     --radius: 18px;
   }
 
   /* ── HERO ── */
   .about-euphoria {
     position: relative;
     top: 88px;
     min-height: 700px;
     background: linear-gradient(rgba(13, 27, 62, 0.72), rgba(13, 27, 62, 0.72)),
       url('https://images.unsplash.com/photo-1524492412937-b28074a5d7da?w=1400&q=80') center/cover no-repeat;
     display: flex;
     align-items: center;
     justify-content: center;
     text-align: center;
     color: #fff;
   }

   .about-euphoria h1 {
     font-size: clamp(2rem, 5vw, 3.2rem);
     letter-spacing: 1px;
   }

   .hero-breadcrumb {
     color: var(--light-gold);
     font-size: 0.9rem;
     letter-spacing: 2px;
   }

   /* Divider */
   .gold-divider {
     width: 60px;
     height: 2px;
     background: var(--gold);
   }

   /* ── Section wrapper ── */
   .about-section {
     padding: 80px 0;
   }

   /* ── Corner-bracket card ── */
   .bracket-card {
     position: relative;
     padding: 48px 56px;
   }

   .bracket-card::before {
     content: '';
     position: absolute;
     top: 0;
     left: 0;
     width: 56px;
     height: 56px;
     border-top: 3px solid var(--red);
     border-left: 3px solid var(--red);
   }

   .bracket-card::after {
     content: '';
     position: absolute;
     bottom: 0;
     right: 0;
     width: 56px;
     height: 56px;
     border-bottom: 3px solid var(--red);
     border-right: 3px solid var(--red);
   }

   /* ── Typography ── */
   .about-text {
     font-family: 'Source Sans 3', sans-serif;
     font-size: 15px;
     line-height: 1.85;
     color: #2a2a2a;
     text-align: center;
     margin-bottom: 0;
   }

   .about-text strong {
     font-family: 'Libre Baskerville', serif;
     font-weight: 700;
     color: #1a1a1a;
   }

   .para-gap {
     margin-top: 1.75rem;
   }

   /* ── Vision Section ── */
   .vision-section {
     padding: 80px 0;
     overflow: hidden;
   }

   /* Image */
   .vision-img-wrap {
     border-radius: 18px;
     overflow: hidden;
     box-shadow: 0 20px 60px rgba(0, 0, 0, 0.13);
     height: 420px;
   }

   .vision-img-wrap img {
     width: 100%;
     height: 100%;
     object-fit: cover;
     display: block;
     transition: transform 0.5s ease;
   }

   .vision-img-wrap:hover img {
     transform: scale(1.05);
   }

   /* Content */
   .vision-content {
     position: relative;
   }

   /* Ghost Text */
   .ghost-text {
     position: absolute;
     top: -55px;
     right: -10px;
     font-family: 'Playfair Display', serif;
     font-size: clamp(52px, 8vw, 132px);
     font-weight: 700;
     color: var(--crimson);
     opacity: 0.08;
     line-height: 1;
     user-select: none;
     pointer-events: none;
     white-space: nowrap;
   }

   /* Ghost Text */
   .mission-text {
     position: absolute;
     top: -55px;
     right: -10px;
     font-family: 'Playfair Display', serif;
     font-size: clamp(52px, 8vw, 115px);
     font-weight: 700;
     color: var(--crimson);
     opacity: 0.08;
     line-height: 1;
     user-select: none;
     pointer-events: none;
     white-space: nowrap;
   }

   /* Heading */
   .vision-heading {
     font-family: 'Playfair Display', serif;
     font-size: clamp(20px, 4vw, 28px);
     /* FIXED */
     font-weight: 700;
     color: var(--navy);
     text-align: center;
   }

   /* Tagline */
   .vision-tagline {
     font-size: 15px;
     font-weight: 500;
     color: var(--text-muted);
     letter-spacing: 0.02em;
     margin-bottom: 28px;
     text-align: center;
   }

   .vision-body {
     margin-top: 60px;
   }

   /* Paragraphs */
   .vision-body p {
     font-size: 15.5px;
     text-align: start;
     line-height: 1.8;
     color: var(--text-body);
     margin-bottom: 20px;
   }

   .vision-body p:last-child {
     margin-bottom: 0;
   }

   /* Highlight */
   .vision-highlight {
     background: var(--crimson-light);
     border-left: 3px solid var(--crimson);
     border-radius: 6px;
     padding: 16px 20px;
     margin-top: 28px;
     font-size: 15px;
     color: var(--navy);
     font-weight: 500;
     line-height: 1.7;
   }

   /* ── Responsive ── */
   @media (max-width: 767.98px) {
     .bracket-card {
       padding: 36px 28px;
     }

     .about-text {
       font-size: 14.5px;
       text-align: left;
     }

     .vision-section {
       padding: 48px 0;
     }

     .vision-img-wrap {
       height: 280px;
       margin-bottom: 40px;
     }

     .vision-content {
       padding-left: 0;
     }

     .vision-heading,
     .vision-tagline {
       text-align: left;
     }

     .ghost-text {
       font-size: 48px;
       opacity: 0.06;
     }
   }

   /* Section */
   .trust-section {
     position: relative;
     padding: 100px 0 120px;
     overflow: hidden;
     background: #fff;
   }

   /* Watermark */
   .trust-section::before {
     content: "Our Commitment";
     position: absolute;
     top: 0px;
     left: 50%;
     transform: translateX(-50%);
     font-family: 'Playfair Display', serif;
     font-size: clamp(60px, 10vw, 145px);
     font-weight: 700;
     color: var(--pink-light);
     white-space: nowrap;
     pointer-events: none;
     z-index: 0;
     opacity: 0.2;
     letter-spacing: 2px;
   }

   /* Section title */
   .section-title {
     font-family: 'Playfair Display', serif;
     font-size: 2rem;
     font-weight: 700;
     color: #1a2855;
   }

   /* CARD */
   .trust-card {
     background: #fff;
     border-radius: 14px;
     border: 1px solid #eee;
     border-right: 3px solid rgba(230, 57, 70, 0.4);
     /* 0.4 = opacity */
     display: flex;
     align-items: center;
     position: relative;
     min-height: 110px;
     box-shadow: 0 6px 20px rgba(26, 40, 85, 0.06);
     transition: all 0.3s ease;
     width: 100%;
     max-width: 340px;


   }

   /* Hover */
   .trust-card:hover {
     transform: translateY(-6px);
     box-shadow: 0 18px 40px rgba(26, 40, 85, 0.12);
   }

   .trust-icon-wrap {
     width: 120px;
     height: 120px;
     border-radius: 50%;
     background: #1a2855;

     display: flex;
     align-items: center;
     justify-content: center;

     position: absolute;
     left: -60px;
     top: 50%;
     transform: translateY(-50%);

     /* Outer light ring */
     border: 6px solid #e6e6e6;

     /* Create second soft ring effect */
     outline: 3px solid grey;
     outline-offset: 2px;

     /* Soft shadow */
     box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);

     z-index: 2;
   }

   /* SVG Icon */
   .trust-icon-wrap svg {
     width: 36px;
     height: 36px;
     stroke: #ffffff;
     fill: none;
     stroke-width: 1.8;
   }

   /* TEXT */
   .trust-card-text {
     padding-left: 80px;
     font-size: 0.95rem;
     color: #6c757d;
     line-height: 1.6;
     font-weight: 500;
     max-width: 280px;
   }

   /* Skyline */
   .skyline-bg {
     position: absolute;
     bottom: 0;
     width: 100%;
     height: 160px;
     opacity: 0.05;
     background-size: cover;
   }

   /* PLUS SIGNS */
   .plus {
     position: absolute;
     color: rgba(26, 40, 85, 0.1);
     font-size: 1rem;
     pointer-events: none;
   }

   /* RESPONSIVE */
   @media (max-width: 768px) {
     .trust-card {
       padding: 20px;
     }

     .trust-icon-wrap {
       margin-left: -30px;
       width: 70px;
       height: 70px;
     }

     .trust-card-text {
       max-width: 100%;
       font-size: 0.9rem;
     }
   }

   .custom-gap {

     column-gap: 0rem;
     /* horizontal gap */
   }

   /* watermark background text */
   .why-section::before {
     content: "Our Advantage";
     position: absolute;
     top: -10px;
     left: 50%;
     transform: translateX(-50%);
     font-family: 'Playfair Display', serif;
     font-size: clamp(60px, 10vw, 120px);
     font-weight: 700;
     color: var(--pink-light);
     white-space: nowrap;
     pointer-events: none;
     z-index: 0;
     opacity: 0.55;
     letter-spacing: 2px;
   }

   /* ── Heading ── */
   .section-heading {
     position: relative;
     z-index: 1;
     font-family: 'Playfair Display', serif;
     color: var(--navy);
     font-size: clamp(1.6rem, 3vw, 2.2rem);
     font-weight: 700;
     text-align: center;
     margin-bottom: 100px;
   }

   /* ── Image card ── */
   .img-wrapper {
     border-radius: 18px;
     overflow: hidden;
     height: 420px;
     box-shadow: 0 20px 50px rgba(26, 42, 94, 0.12);
   }

   .img-wrapper img {
     width: 100%;
     height: 100%;
     object-fit: cover;
     object-position: center;
   }

   /* ── Content side ── */
   .content-side {
     display: flex;
     flex-direction: column;
     justify-content: center;
   }

   .intro-text {
     font-size: 1rem;
     font-weight: 600;
     color: #111827;
     line-height: 1.7;
     margin-bottom: 28px;
   }

   /* ── Bullet list ── */
   .advantage-list {
     list-style: none;
     padding: 0;
     margin: 0 0 20px;
   }

   .advantage-list li {
     display: flex;
     align-items: flex-start;
     gap: 14px;
     padding: 10px 0;
     color: #374151;
     font-size: 0.96rem;
     line-height: 1.55;
   }


   /* custom arrow icon */
   .bullet-icon {
     flex-shrink: 0;
     width: 28px;
     height: 28px;
     background: var(--navy);
     border-radius: 50%;
     display: flex;
     align-items: center;
     justify-content: center;
     margin-top: 1px;
   }

   .bullet-icon svg {
     width: 14px;
     height: 14px;
     fill: none;
     stroke: #fff;
     stroke-width: 2.5;
     stroke-linecap: round;
     stroke-linejoin: round;
   }

   /* tagline */
   .tagline {
     font-size: 0.92rem;
     color: var(--text-muted-custom);
     font-style: italic;
     margin-top: 6px;
     padding-left: 42px;
   }

   /* city skyline watermark bottom-right */
   .skyline-watermark {
     position: absolute;
     bottom: 0;
     right: 0;
     width: 320px;
     opacity: 0.07;
     pointer-events: none;
     z-index: 0;
   }

   /* ── Section wrapper ── */
   .why-section {
     position: relative;
     overflow: hidden;
     padding: 80px 0 90px;
   }


   .section-wrapper {
     background: var(--bg);
     min-height: 100vh;
     padding: 60px 0 80px;
     position: relative;
     overflow: hidden;
   }

   .section-wrapper::before {
     content: "How We";
     position: absolute;
     top: 0px;
     left: 29%;
     transform: translateX(-50%);
     font-family: 'Playfair Display', serif;
     font-size: clamp(60px, 10vw, 145px);
     font-weight: 700;
     color: var(--pink-light);
     white-space: nowrap;
     pointer-events: none;
     z-index: 0;
     opacity: 0.55;
     letter-spacing: 2px;
   }

   /* Watermark */
   .watermark {
     position: absolute;
     top: 10px;
     left: 275px;
     font-family: 'Playfair Display', serif;
     font-size: clamp(80px, 12vw, 140px);
     font-weight: 700;
     color: rgba(26, 42, 74, 0.06);
     white-space: nowrap;
     pointer-events: none;
     user-select: none;
     line-height: 1;
   }

   /* Left heading */
   .section-title {
     font-family: 'Playfair Display', serif;
     font-size: clamp(28px, 3.5vw, 25px);
     font-weight: 700;
     color: var(--navy);
     line-height: 1.2;
     position: relative;
     z-index: 2;
     left: 90px;
     top: 40px;
   }

   /* Illustration placeholder area */
   .illustration-area {
     background: linear-gradient(135deg, #dce8f5 0%, #e8f0f8 50%, #d4e4f0 100%);
     border-radius: 20px;
     min-height: 360px;
     display: flex;
     align-items: center;
     justify-content: center;
     position: relative;
     overflow: hidden;
   }

   .illustration-area::before {
     content: '';
     position: absolute;
     inset: 0;
     background: radial-gradient(circle at 30% 70%, rgba(192, 57, 43, 0.08) 0%, transparent 60%);
   }

   /* Floating icons grid */
   .icon-grid {
     display: grid;
     grid-template-columns: repeat(4, 1fr);
     gap: 14px;
     padding: 24px;
     position: relative;
     z-index: 1;
   }

   .icon-bubble {
     width: 48px;
     height: 48px;
     background: white;
     border-radius: 50%;
     display: flex;
     align-items: center;
     justify-content: center;
     box-shadow: 0 4px 14px rgba(26, 42, 74, 0.12);
     font-size: 18px;
   }

   .icon-bubble.large {
     width: 58px;
     height: 58px;
     font-size: 22px;
   }

   /* Building visual */
   .building-visual {
     width: 100%;
     max-width: 340px;
   }

   /* Right side items */
   .mindset-item {
     padding-bottom: 32px;
     margin-bottom: 32px;
     border-bottom: 1px solid var(--border);
     animation: fadeInUp 0.5s ease both;
   }

   .mindset-item:last-child {
     border-bottom: none;
     margin-bottom: 0;
     padding-bottom: 0;
   }

   .icon-circle {
     width: 100px;
     height: 100px;
     min-width: 72px;
     background: white;
     border-radius: 50%;
     display: flex;
     align-items: center;
     justify-content: center;
     border: 1.5px solid var(--border);
   }

   .icon-circle svg {
     width: 80px;
     height: 80px;
   }

   .item-title {
     font-family: 'DM Sans', sans-serif;
     font-weight: 700;
     font-size: 17px;
     color: var(--navy);
     margin-bottom: 8px;
   }

   .item-body {
     font-size: 14px;
     line-height: 1.7;
     margin: 0;
   }

   @keyframes fadeInUp {
     from {
       opacity: 0;
       transform: translateY(20px);
     }

     to {
       opacity: 1;
       transform: translateY(0);
     }
   }

   .mindset-item:nth-child(1) {
     animation-delay: 0.1s;
   }

   .mindset-item:nth-child(2) {
     animation-delay: 0.2s;
   }

   .mindset-item:nth-child(3) {
     animation-delay: 0.3s;
   }

   .mindset-item:nth-child(4) {
     animation-delay: 0.4s;
   }

   /* Responsive tweaks */
   @media (max-width: 991px) {
     .illustration-area {
       min-height: 260px;
       margin-bottom: 40px;
     }
   }

   /* Section */
   .team-section {
     position: relative;
     padding: 100px 0 0px;
     overflow: hidden;
     background: #fff;
   }

   /* Watermark */
   .team-section::before {
     content: "Leadership Team";
     position: absolute;
     top: 0px;
     left: 50%;
     transform: translateX(-50%);
     font-family: 'Playfair Display', serif;
     font-size: clamp(60px, 10vw, 145px);
     font-weight: 700;
     color: var(--pink-light);
     white-space: nowrap;
     pointer-events: none;
     z-index: 0;
     opacity: 0.2;
     letter-spacing: 2px;
   }

   .team-card {
     background: #ffffff;
     border-radius: 20px;
     overflow: hidden;
     transition: transform 0.3s ease, box-shadow 0.3s ease;
     box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
     position: relative;
   }

   .team-card:hover {
     transform: translateY(-8px);
     box-shadow: 0 16px 40px rgba(0, 0, 0, 0.12);
   }

   .card-img-wrapper {
     position: relative;
     overflow: hidden;
     background: #e8eaf0;
     aspect-ratio: 4/4;
   }

   .card-img-wrapper img {
     width: 100%;
     height: 100%;
     object-fit: cover;
     object-position: top center;
     transition: transform 0.4s ease;
   }

   .team-card:hover .card-img-wrapper img {
     transform: scale(1.04);
   }

   .social-overlay {
     position: absolute;
     inset: 0;
     background: rgba(30, 41, 59, 0.55);
     display: flex;
     align-items: end;
     justify-content: center;
     gap: 10px;
     opacity: 0;
     transition: opacity 0.3s ease;
     padding-bottom: 15px;
   }

   .team-card:hover .social-overlay {
     opacity: 1;
   }

   .social-btn {
     width: 44px;
     height: 44px;
     border-radius: 50%;
     display: flex;
     align-items: center;
     justify-content: center;
     text-decoration: none;
     font-size: 18px;
     transition: transform 0.2s ease;
     border: none;
   }

   .social-btn:hover {
     transform: scale(1.15);
   }

   .social-btn.linkedin {
     background: #0077b5;
     color: #fff;
   }

   .social-btn.whatsapp {
     background: #25d366;
     color: #fff;
   }

   .card-body {
     padding: 22px 20px 24px;
     text-align: center;
   }

   .member-name {
     font-family: 'Playfair Display', serif;
     font-size: 1.2rem;
     color: #1a1a2e;
     margin-bottom: 4px;
   }

   .member-role {
     font-size: 0.85rem;
     color: #6b7280;
     font-weight: 500;
     text-transform: uppercase;
     letter-spacing: 0.08em;
   }

   /* Section */
   .our-team {
     position: relative;
     padding: 100px 0 0px;
     overflow: hidden;
     background: #fff;
   }

   /* Watermark */
   .our-team::before {
     content: "Our Team";
     position: absolute;
     top: 0px;
     left: 50%;
     transform: translateX(-50%);
     font-family: 'Playfair Display', serif;
     font-size: clamp(60px, 10vw, 145px);
     font-weight: 700;
     color: var(--pink-light);
     white-space: nowrap;
     pointer-events: none;
     z-index: 0;
     opacity: 0.2;
     letter-spacing: 2px;
   }

   /* ── Card ──────────────────────────────────────── */
   .member-card {
     background: var(--card-bg);
     border: 1.5px solid #e8eaf6;
     border-radius: var(--radius);
     padding: 0 0 28px;
     text-align: center;
     transition: box-shadow .3s ease, transform .3s ease;
     overflow: hidden;
     cursor: pointer;
   }

   .member-card:hover {
     box-shadow: 0 12px 40px rgba(43, 57, 144, .12);
     transform: translateY(-4px);
   }

   .member-card .photo-wrap {
     background: var(--soft-bg);
     border-radius: var(--radius) var(--radius) 0 0;
     overflow: hidden;
     aspect-ratio: 3/3.2;
   }

   .member-card .photo-wrap img {
     width: 100%;
     height: 100%;
     object-fit: cover;
     object-position: top center;
     transition: transform .4s ease;
     padding: 15px;
     border-radius: 25px;
   }

   .member-card:hover .photo-wrap img {
     transform: scale(1.04);
   }

   .member-card .name {
     margin-top: 20px;
     font-size: 1rem;
     font-weight: 700;
     color: var(--brand);
   }

   .member-card .role {
     font-size: .82rem;
     color: var(--muted);
     margin-top: 3px;
     font-weight: 500;
   }

   /* ── Swiper nav arrows ─────────────────────────── */
   .swiper-btn-prev,
   .swiper-btn-next {
     position: absolute;
     top: 50%;
     transform: translateY(-50%);
     z-index: 10;
     width: 44px;
     height: 44px;
     border-radius: 50%;
     background: #fff;
     border: 1.5px solid #e0e2f0;
     display: flex;
     align-items: center;
     justify-content: center;
     cursor: pointer;
     transition: background .2s, border-color .2s, box-shadow .2s;
     box-shadow: 0 2px 12px rgba(0, 0, 0, .08);
   }

   .swiper-btn-prev:hover,
   .swiper-btn-next:hover {
     background: var(--brand);
     border-color: var(--brand);
   }

   .swiper-btn-prev:hover svg path,
   .swiper-btn-next:hover svg path {
     stroke: #fff;
   }

   .swiper-btn-prev {
     left: -22px;
   }

   .swiper-btn-next {
     right: -22px;
   }

   .swiper-btn-prev svg,
   .swiper-btn-next svg {
     width: 18px;
     height: 18px;
   }

   .swiper-btn-prev svg path,
   .swiper-btn-next svg path {
     stroke: var(--brand);
     transition: stroke .2s;
   }

   /* ── Swiper pagination bullets ─────────────────── */
   .swiper-pagination {
     margin-top: 36px;
     position: static !important;
   }

   .swiper-pagination-bullet {
     width: 10px;
     height: 10px;
     background: #d1d5f0;
     opacity: 1;
     transition: background .3s, transform .3s;
   }

   .swiper-pagination-bullet-active {
     background: var(--brand);
     transform: scale(1.25);
   }

   /* ── Swiper container position ─────────────────── */
   .swiper-outer {
     position: relative;
     padding: 0 28px;
   }

   .mySwiper {
     overflow: hidden;
     padding-bottom: 4px;
     /* slight shadow room */
   }

   /* Section */
   .focus-area {
     position: relative;
     padding: 100px 0 0px;
     overflow: hidden;
     background: #fff;
   }

   /* Watermark */
   .focus-area::before {
     content: "Focus Area";
     position: absolute;
     top: 0px;
     left: 50%;
     transform: translateX(-50%);
     font-family: 'Playfair Display', serif;
     font-size: clamp(60px, 10vw, 145px);
     font-weight: 700;
     color: var(--pink-light);
     white-space: nowrap;
     pointer-events: none;
     z-index: 0;
     opacity: 0.2;
     letter-spacing: 2px;
   }

   .tagline {
     color: #1a3a6b;
     font-style: italic;
     font-size: 1.15rem;
     margin-bottom: 40px;
   }

   .card-option {
     display: flex;
     align-items: center;
     gap: 16px;
     padding: 22px 28px;
     background: #ffffff;
     border: 1.5px solid #d6dce8;
     border-radius: 12px;
     cursor: pointer;
     transition: all 0.25s ease;
     text-decoration: none;
     color: #1a3a6b;
     font-size: 1rem;
     font-weight: 500;
     margin-bottom: 20px;
   }

   .card-option:hover {
     border-color: #1a3a6b;
     background: #f5f7fb;
     color: #1a3a6b;
     box-shadow: 0 4px 16px rgba(26, 58, 107, 0.1);
   }

   .card-option.active {
     color: #1a3a6b;
   }

   .card-option.active .card-icon {
     filter: brightness(0) invert(1);
   }

   .card-icon {
     width: 40px;
     height: 40px;
     flex-shrink: 0;
   }

   .bottom-tagline {
     color: #1a3a6b;
     font-style: italic;
     font-size: 1.05rem;
     margin-top: 20px;
   }

   /* SVG icons inline */
   .icon-svg {
     width: 40px;
     height: 40px;
     flex-shrink: 0;
     stroke: currentColor;
     fill: none;
     stroke-width: 1.5;
   }

   /* Section */
   .testimonial {
     position: relative;
     padding: 100px 0 0px;
     overflow: hidden;
     background: #fff;
   }

   /* Watermark */
   .testimonial::before {
     content: "Testimonials";
     position: absolute;
     top: 0px;
     left: 50%;
     transform: translateX(-50%);
     font-family: 'Playfair Display', serif;
     font-size: clamp(60px, 10vw, 145px);
     font-weight: 700;
     color: var(--pink-light);
     white-space: nowrap;
     pointer-events: none;
     z-index: 0;
     opacity: 0.2;
     letter-spacing: 2px;
   }

   /* Card */
   .testimonial-card {
     background: #fff;
     border-radius: 16px;
     padding: 36px 28px 28px;
     border: 1px solid #eaedf3;
     box-shadow: 0 2px 16px rgba(0, 0, 0, 0.05);
     height: 100%;
     min-height: 240px;
     display: flex;
     flex-direction: column;
     justify-content: space-between;
     transition: box-shadow 0.3s ease, transform 0.3s ease;
   }

   .testimonial-card:hover {
     box-shadow: 0 8px 32px rgba(0, 0, 0, 0.10);
     transform: translateY(-2px);
   }

   /* Quote icon */
   .quote-icon {
     font-size: 52px;
     line-height: 1;
     color: #f4b8b8;
     font-family: 'DM Serif Display', serif;
     margin-bottom: 14px;
     display: block;
   }

   /* Quote text */
   .testimonial-text {
     font-size: 14.5px;
     color: #555e6d;
     line-height: 1.75;
     flex: 1;
     margin-bottom: 24px;
   }

   /* Author */
   .testimonial-author {
     display: flex;
     align-items: center;
     gap: 14px;
     padding-top: 18px;
     border-top: 1px solid #f0f2f5;
   }

   .testimonial-author img {
     width: 52px;
     height: 52px;
     border-radius: 50%;
     object-fit: cover;
     border: 2px solid #eaedf3;
   }

   .author-name {
     font-weight: 700;
     font-size: 15px;
     color: #1a2340;
     margin-bottom: 2px;
   }

   .author-role {
     font-size: 12.5px;
     color: #8a93a6;
   }

   /* Navigation Buttons */
   .swiper-nav-btn {
     width: 42px;
     height: 42px;
     border-radius: 50%;
     border: 1.5px solid #d0d5df;
     background: #fff;
     display: flex;
     align-items: center;
     justify-content: center;
     cursor: pointer;
     transition: all 0.2s ease;
     flex-shrink: 0;
     color: #1a2340;
   }

   .swiper-nav-btn:hover {
     background: #1a2340;
     border-color: #1a2340;
     color: #fff;
   }

   .swiper-nav-btn svg {
     width: 16px;
     height: 16px;
   }

   /* Pagination */
   .swiper-pagination {
     position: static;
     margin-top: 8px;
     margin-bottom: 30px;
     display: flex;
     justify-content: center;
     align-items: center;
     gap: 8px;
   }

   .swiper-pagination-bullet {
     width: 10px;
     height: 10px;
     border-radius: 50%;
     background: #c8cdd8;
     opacity: 1;
     transition: all 0.3s ease;
     cursor: pointer;
   }

   .swiper-pagination-bullet-active {
     background: #1a2340;
     width: 28px;
     border-radius: 999px;
   }

   /* Nav + pagination row */
   .swiper-controls {
     display: flex;
     align-items: center;
     justify-content: center;
     gap: 14px;
     margin-top: 32px;
   }
 </style>
 </head>


 <!-- HERO -->
 <section class="about-euphoria">
   <div>
     <h1 class="mb-0">About The Euphoria Group</h1>
     <div class="gold-divider mx-auto mt-3"></div>
     <p class="text-white-50 mt-2" style="font-size:.9rem;letter-spacing:2px;">Building India's Future, One Business at
       a Time</p>
   </div>
 </section>

 <section class="about-section">
   <div class="container">
     <div class="row justify-content-center">
       <div class="col-12 col-lg-12">

         <div class="bracket-card">

           <!-- Paragraph 1 -->
           <p class="about-text">
             Founded in 2025, <strong>The Euphoria Group</strong> was established with a clear belief: every
             individual and business deserves clarity, confidence, and trusted guidance when making important
             financial and life decisions. For us, relationships come before transactions. We take the time to
             understand each client's aspirations, concerns, and goals, crafting solutions that are strategic,
             personalised, and sustainable. We do more than provide services; we deliver reassurance,
             transparency, and long-term partnership. Our commitment is to help our clients grow with
             confidence, protect with certainty, and move forward with peace of mind—today and for generations
             to come.
           </p>

           <!-- Paragraph 2 -->
           <p class="about-text para-gap">
             What began as a vision for The Euphoria Group has grown into a multi-service global consultancy
             that provides integrated solutions to individuals and businesses all over the world. Our main
             services include Inbound And overseas business setup, real estate investment, inbound and outbound
             travel services, Global Immigration &amp; Mobility, stock market opportunities, and comprehensive
             insurance solutions. With a strong presence in India and access to international markets, we help
             our clients at every stage of their journey, whether they are building generational wealth,
             expanding a business overseas, investing in real estate, protecting their assets, or confidently
             exploring global opportunities.
           </p>

         </div><!-- /.bracket-card -->
       </div>
     </div>
   </div>
 </section>

 <section class="vision-section">
   <div class="container">
     <div class="row align-items-center g-5">

       <!-- Left: Image -->
       <div class="col-md-6">
         <div class="vision-img-wrap">
           <!--
            Replace the src below with your actual image path.
            The image should show the businessman on a red paper plane
            over a cityscape (as in the original design).
          -->
           <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=800&q=80"
             alt="Vision – man looking through telescope over city skyline" />
         </div>
       </div>

       <!-- Right: Content -->
       <div class="col-md-6">
         <div class="vision-content">

           <!-- Ghost watermark -->
           <span class="ghost-text" aria-hidden="true">Our Vision</span>

           <h2 class="vision-heading">Shaping the Future</h2>


           <div class="vision-body">
             <p class="vision-tagline">Creating Global Confidence. Building Enduring Legacies.</p>
             <p>
               Our vision is to become a globally trusted partner for wealth creation,
               asset protection, and international expansion. We aspire to empower
               individuals and businesses with the clarity, structure, and confidence
               needed to grow beyond borders—financially, professionally, and personally.
             </p>
             <p>At Euphoria Group, we envision a future where wealth is not just accumulated
               but protected, sustained, and passed forward with purpose.</p>
           </div>

         </div>
       </div>

     </div>
   </div>
 </section>

 <section class="vision-section">
   <div class="container">
     <div class="row align-items-center g-5">
       <!-- Right: Content -->
       <div class="col-md-6">
         <div class="vision-content">

           <!-- Ghost watermark -->
           <span class="mission-text" aria-hidden="true">Our Mission</span>

           <h2 class="vision-heading">Shaping the Future</h2>


           <div class="vision-body">
             <p>
               The Euphoria Group's mission is to provide strategic, transparent, and fully compliant solutions that
               transform complex financial and global opportunities into clear, actionable paths. We are dedicated to
               assisting our clients throughout their journey, empowering them to confidently grow, protect, and
               diversify their assets.
             </p>
             <p>Through disciplined execution, ethical governance, and forward-thinking strategies, we aim to build
               resilient, long-term prosperity that will last across changing markets and generations.</p>
           </div>

         </div>
       </div>

       <!-- Left: Image -->
       <div class="col-md-6">
         <div class="vision-img-wrap">
           <!--
            Replace the src below with your actual image path.
            The image should show the businessman on a red paper plane
            over a cityscape (as in the original design).
          -->
           <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=800&q=80"
             alt="Vision – man looking through telescope over city skyline" />
         </div>
       </div>


     </div>
   </div>
 </section>

 <section class="trust-section">

   <div class="container position-relative" style="z-index:1;">

     <h2 class="section-heading">Built On Trust</h2>

     <!-- Row 1 -->
     <div class="row custom-gap mb-5">

       <div class="col-12 col-md-4">
         <div class="trust-card">
           <div class="trust-icon-wrap">
             <svg viewBox="0 0 24 24">
               <path d="M6 9c0 0 1-1 3-1s3.5 1.5 3.5 1.5S14 8 16 8s3 1 3 1" />
               <path d="M3 12c0 4 3 6 9 9 6-3 9-5 9-9V6l-9-3-9 3z" />
               <path d="M9 12l2 2 4-4" />
             </svg>
           </div>
           <div class="trust-card-text">
             Building long-term relationships based on trust and transparency
           </div>
         </div>
       </div>

       <div class="col-12 col-md-4">
         <div class="trust-card">
           <div class="trust-icon-wrap">
             <svg viewBox="0 0 24 24">
               <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
               <circle cx="12" cy="10" r="2.5" />
               <path d="M7.5 19.5C7.5 17 9.5 15 12 15s4.5 2 4.5 4.5" />
             </svg>
           </div>
           <div class="trust-card-text">
             Safeguarding client interests at every stage
           </div>
         </div>
       </div>

       <div class="col-12 col-md-4">
         <div class="trust-card">
           <div class="trust-icon-wrap">
             <svg viewBox="0 0 24 24">
               <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
               <polyline points="9 12 11 14 15 10" />
             </svg>
           </div>
           <div class="trust-card-text">
             Delivering value that goes beyond transactions
           </div>
         </div>
       </div>

     </div>

     <!-- Row 2 -->
     <div class="row custom-gap">

       <div class="col-12 col-md-4">
         <div class="trust-card">
           <div class="trust-icon-wrap">
             <svg viewBox="0 0 24 24">
               <circle cx="12" cy="12" r="3" />
               <path
                 d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-4 0v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83-2.83l.06-.06A1.65 1.65 0 004.68 15a1.65 1.65 0 00-1.51-1H3a2 2 0 010-4h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 012.83-2.83l.06.06A1.65 1.65 0 009 4.68a1.65 1.65 0 001-1.51V3a2 2 0 014 0v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 2.83l-.06.06A1.65 1.65 0 0019.4 9a1.65 1.65 0 001.51 1H21a2 2 0 010 4h-.09a1.65 1.65 0 00-1.51 1z" />
             </svg>
           </div>
           <div class="trust-card-text">
             Providing recommendations guided by integrity and responsibility
           </div>
         </div>
       </div>

       <div class="col-12 col-md-4">
         <div class="trust-card">
           <div class="trust-icon-wrap">
             <svg viewBox="0 0 24 24">
               <line x1="12" y1="20" x2="12" y2="10" />
               <line x1="18" y1="20" x2="18" y2="4" />
               <line x1="6" y1="20" x2="6" y2="16" />
               <path d="M22 12l-4-4-4 4-4-4-4 4" />
             </svg>
           </div>
           <div class="trust-card-text">
             Understanding client goals through a personalized approach
           </div>
         </div>
       </div>

       <div class="col-12 col-md-4">
         <div class="trust-card">
           <div class="trust-icon-wrap">
             <svg viewBox="0 0 24 24">
               <polyline points="23 6 13.5 15.5 8.5 10.5 1 18" />
               <polyline points="17 6 23 6 23 12" />
             </svg>
           </div>
           <div class="trust-card-text">
             Measuring success by lasting trust and sustainable outcomes, not quick wins
           </div>
         </div>
       </div>

     </div>

   </div>

 </section>

 <section class="why-section">


   <div class="container position-relative" style="z-index:1;">
     <!-- city skyline watermark SVG (decorative) -->
     <svg class="skyline-watermark" viewBox="0 0 400 200" xmlns="http://www.w3.org/2000/svg">
       <rect x="10" y="120" width="30" height="80" fill="#1a2a5e" />
       <rect x="20" y="100" width="10" height="20" fill="#1a2a5e" />
       <rect x="50" y="90" width="40" height="110" fill="#1a2a5e" />
       <rect x="65" y="70" width="10" height="20" fill="#1a2a5e" />
       <rect x="100" y="110" width="25" height="90" fill="#1a2a5e" />
       <rect x="135" y="80" width="50" height="120" fill="#1a2a5e" />
       <rect x="155" y="60" width="10" height="20" fill="#1a2a5e" />
       <rect x="195" y="95" width="35" height="105" fill="#1a2a5e" />
       <rect x="240" y="115" width="28" height="85" fill="#1a2a5e" />
       <rect x="278" y="85" width="45" height="115" fill="#1a2a5e" />
       <rect x="295" y="65" width="10" height="20" fill="#1a2a5e" />
       <rect x="333" y="100" width="30" height="100" fill="#1a2a5e" />
       <rect x="370" y="120" width="30" height="80" fill="#1a2a5e" />
     </svg>

     <h2 class="section-heading">Why Choose Euphoria Group</h2>

     <div class="row align-items-center g-5">

       <!-- Left: Image -->
       <div class="col-lg-6">
         <div class="img-wrapper">
           <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?w=800&q=80"
             alt="Euphoria Group team meeting" />
         </div>
       </div>

       <!-- Right: Content -->
       <div class="col-lg-6 content-side">

         <p class="intro-text">
           Euphoria Group brings together wealth advisory, business services, insurance
           solutions, and global mobility support under one integrated platform—ensuring
           seamless coordination and consistent outcomes. <span style="font-weight:700;">What sets us apart</span>
         </p>

         <ul class="advantage-list">
           <li>
             <span class="bullet-icon">
               <svg viewBox="0 0 24 24">
                 <polyline points="5 12 10 17 20 7" />
               </svg>
             </span>
             <span>Comprehensive wealth, business, and mobility solutions under one group</span>
           </li>
           <li>
             <span class="bullet-icon">
               <svg viewBox="0 0 24 24">
                 <polyline points="5 12 10 17 20 7" />
               </svg>
             </span>
             <span>Strong operational presence in India and international markets.</span>
           </li>
           <li>
             <span class="bullet-icon">
               <svg viewBox="0 0 24 24">
                 <polyline points="5 12 10 17 20 7" />
               </svg>
             </span>
             <span>Global reach supported by deep local market expertise</span>
           </li>
           <li>
             <span class="bullet-icon">
               <svg viewBox="0 0 24 24">
                 <polyline points="5 12 10 17 20 7" />
               </svg>
             </span>
             <span>Ethical practices backed by professional and compliant guidance</span>
           </li>
           <li>
             <span class="bullet-icon">
               <svg viewBox="0 0 24 24">
                 <polyline points="5 12 10 17 20 7" />
               </svg>
             </span>
             <span>Customised solutions for individuals, families, and businesses <br>We don't offer shortcuts—we offer
               clarity, structure, and confidence.</span>
           </li>
         </ul>

       </div>
     </div>

   </div>
 </section>

 <section class="section-wrapper">

   <div class="container position-relative" style="z-index:1;">
     <div class="row align-items-start g-5">

       <!-- LEFT COLUMN -->
       <div class="col-lg-5">
         <h2 class="section-title mb-4">The Euphoria Mindset</h2>
       </div>

       <!-- RIGHT COLUMN -->
       <div class="col-lg-7">

         <!-- Item 1 -->
         <div class="mindset-item d-flex gap-4">
           <div class="icon-circle flex-shrink-0">
             <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
               <!-- Target/bullseye -->
               <circle cx="20" cy="21" r="12" stroke="#c0392b" stroke-width="1.8" />
               <circle cx="20" cy="21" r="7" stroke="#c0392b" stroke-width="1.8" />
               <circle cx="20" cy="21" r="3" fill="#c0392b" />
               <!-- Arrow -->
               <line x1="27" y1="10" x2="23" y2="18" stroke="#c0392b" stroke-width="2" stroke-linecap="round" />
               <polyline points="24,10 27,10 27,13" stroke="#c0392b" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round" fill="none" />
             </svg>
           </div>
           <div>
             <h5 class="item-title">We See the Bigger Picture</h5>
             <p class="item-body">
               Wealth, moving around the world, and investment opportunities are never just about money. They stand for
               safety, freedom, duty, and the past.
               <br /><br />
               That's why we look at every engagement from different angles, weighing opportunity against safety and
               ambition against stability.
             </p>
           </div>
         </div>

         <!-- Item 2 -->
         <div class="mindset-item d-flex gap-4">
           <div class="icon-circle flex-shrink-0">
             <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
               <!-- Handshake -->
               <path d="M8 22 C10 18 14 16 18 18 L22 18 C26 16 30 18 32 22" stroke="#c0392b" stroke-width="1.8"
                 stroke-linecap="round" />
               <path d="M8 22 L12 28 L20 24 L28 28 L32 22" stroke="#c0392b" stroke-width="1.8" stroke-linecap="round"
                 stroke-linejoin="round" />
               <circle cx="20" cy="14" r="3" stroke="#c0392b" stroke-width="1.6" />
             </svg>
           </div>
           <div>
             <h5 class="item-title">Precision Over Promises</h5>
             <p class="item-body">
               We don't rely on big promises.
               <br />
               We need structure, openness, and good planning.
               <br />
               Our job is to make things easier, get rid of doubt, and replace confusion with clarity.
             </p>
           </div>
         </div>

         <!-- Item 3 -->
         <div class="mindset-item d-flex gap-4">
           <div class="icon-circle flex-shrink-0">
             <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
               <!-- Sliders / gears -->
               <circle cx="16" cy="16" r="4" stroke="#c0392b" stroke-width="1.8" />
               <line x1="16" y1="8" x2="16" y2="12" stroke="#c0392b" stroke-width="1.8" stroke-linecap="round" />
               <line x1="16" y1="20" x2="16" y2="32" stroke="#c0392b" stroke-width="1.8" stroke-linecap="round" />
               <circle cx="26" cy="26" r="4" stroke="#c0392b" stroke-width="1.8" />
               <line x1="26" y1="8" x2="26" y2="22" stroke="#c0392b" stroke-width="1.8" stroke-linecap="round" />
               <line x1="26" y1="30" x2="26" y2="32" stroke="#c0392b" stroke-width="1.8" stroke-linecap="round" />
             </svg>
           </div>
           <div>
             <h5 class="item-title">Tailored, Not Standardised</h5>
             <p class="item-body">
               There are no two goals that are alike.
               <br />
               Everyone has different levels of risk tolerance.
               <br />
               We create plans based on people, taking into account their goals, priorities, timelines, and vision to
               ensure that everyone is on the same page.
             </p>
           </div>
         </div>

         <!-- Item 4 -->
         <div class="mindset-item d-flex gap-4">
           <div class="icon-circle flex-shrink-0">
             <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
               <!-- Trophy -->
               <path d="M14 8 H26 V20 C26 25 22 28 20 28 C18 28 14 25 14 20 Z" stroke="#c0392b" stroke-width="1.8"
                 stroke-linejoin="round" />
               <path d="M14 12 H10 C10 18 13 20 15 20" stroke="#c0392b" stroke-width="1.8" stroke-linecap="round" />
               <path d="M26 12 H30 C30 18 27 20 25 20" stroke="#c0392b" stroke-width="1.8" stroke-linecap="round" />
               <line x1="20" y1="28" x2="20" y2="33" stroke="#c0392b" stroke-width="1.8" stroke-linecap="round" />
               <line x1="14" y1="33" x2="26" y2="33" stroke="#c0392b" stroke-width="2" stroke-linecap="round" />
               <!-- Star -->
               <path
                 d="M20 14 L21.2 17.2 L24.5 17.2 L21.9 19.3 L22.9 22.5 L20 20.5 L17.1 22.5 L18.1 19.3 L15.5 17.2 L18.8 17.2 Z"
                 fill="#c0392b" />
             </svg>
           </div>
           <div>
             <h5 class="item-title">Confidence as the Outcome</h5>
             <p class="item-body">
               Success is more than just growth.
               <br />
               It is peace of mind.
               <br />
               Our goal is to make clients feel informed, empowered, and in complete control of their financial and
               international decisions.
             </p>
           </div>
         </div>

       </div><!-- /right col -->

     </div><!-- /row -->
   </div><!-- /container -->
 </section>

 <section class="team-section">

   <div class="container position-relative" style="z-index:1;">

     <h2 class="section-heading">Executive Leadership</h2>

     <div class="row g-4 justify-content-center">

       <!-- Member 1 -->
       <div class="col-lg-4 col-md-6">
         <div class="team-card">
           <div class="card-img-wrapper">
             <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Milan Jasoliya" />
             <div class="social-overlay">
               <a href="#" class="social-btn linkedin" title="LinkedIn">
                 <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                   viewBox="0 0 24 24">
                   <path
                     d="M4.98 3.5C4.98 4.88 3.87 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1s2.48 1.12 2.48 2.5zM.5 8.5h4V24h-4V8.5zm6.5 0h3.8v2.12h.05c.53-1 1.82-2.06 3.74-2.06 4 0 4.74 2.64 4.74 6.06V24h-4v-8.53c0-2.04-.04-4.66-2.84-4.66-2.85 0-3.28 2.22-3.28 4.51V24H7V8.5z" />
                 </svg>
               </a>
               <a href="#" class="social-btn whatsapp" title="WhatsApp">
                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                   viewBox="0 0 24 24">
                   <path
                     d="M20.52 3.48A11.93 11.93 0 0 0 12 0C5.37 0 0 5.37 0 12a11.94 11.94 0 0 0 1.64 6.07L0 24l6.13-1.61A11.96 11.96 0 0 0 12 24c6.63 0 12-5.37 12-12 0-3.2-1.25-6.22-3.48-8.52zm-8.52 18.4a9.94 9.94 0 0 1-5.08-1.4l-.36-.22-3.64.95.98-3.55-.24-.37A9.93 9.93 0 0 1 2 12c0-5.51 4.49-10 10-10s10 4.49 10 10-4.49 10-10 10zm5.47-7.43c-.3-.15-1.77-.87-2.04-.97-.27-.1-.47-.15-.67.15-.2.3-.77.97-.94 1.17-.17.2-.35.22-.65.07-.3-.15-1.27-.47-2.42-1.49-.9-.8-1.5-1.78-1.68-2.08-.17-.3-.02-.46.13-.6.13-.13.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.02-.52-.07-.15-.67-1.62-.92-2.22-.24-.58-.49-.5-.67-.51h-.57c-.2 0-.52.07-.79.37-.27.3-1.02 1-1.02 2.43s1.04 2.82 1.19 3.02c.15.2 2.05 3.13 4.97 4.39.7.3 1.24.48 1.66.61.7.22 1.33.19 1.83.12.56-.08 1.77-.72 2.02-1.42.25-.7.25-1.3.17-1.42-.07-.12-.27-.2-.57-.35z" />
                 </svg>
               </a>
             </div>
           </div>

         </div>
         <div class="card-body">
           <h5 class="member-name">Milan Jasoliya</h5>
           <span class="member-role">CEO</span>
         </div>
       </div>

       <!-- Member 2 -->
       <div class="col-lg-4 col-md-6">
         <div class="team-card">
           <div class="card-img-wrapper">
             <img src="https://randomuser.me/api/portraits/men/44.jpg" alt="Archit Dhola" />
             <div class="social-overlay">
               <a href="#" class="social-btn linkedin" title="LinkedIn">
                 <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                   viewBox="0 0 24 24">
                   <path
                     d="M4.98 3.5C4.98 4.88 3.87 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1s2.48 1.12 2.48 2.5zM.5 8.5h4V24h-4V8.5zm6.5 0h3.8v2.12h.05c.53-1 1.82-2.06 3.74-2.06 4 0 4.74 2.64 4.74 6.06V24h-4v-8.53c0-2.04-.04-4.66-2.84-4.66-2.85 0-3.28 2.22-3.28 4.51V24H7V8.5z" />
                 </svg>
               </a>
               <a href="#" class="social-btn whatsapp" title="WhatsApp">
                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                   viewBox="0 0 24 24">
                   <path
                     d="M20.52 3.48A11.93 11.93 0 0 0 12 0C5.37 0 0 5.37 0 12a11.94 11.94 0 0 0 1.64 6.07L0 24l6.13-1.61A11.96 11.96 0 0 0 12 24c6.63 0 12-5.37 12-12 0-3.2-1.25-6.22-3.48-8.52zm-8.52 18.4a9.94 9.94 0 0 1-5.08-1.4l-.36-.22-3.64.95.98-3.55-.24-.37A9.93 9.93 0 0 1 2 12c0-5.51 4.49-10 10-10s10 4.49 10 10-4.49 10-10 10zm5.47-7.43c-.3-.15-1.77-.87-2.04-.97-.27-.1-.47-.15-.67.15-.2.3-.77.97-.94 1.17-.17.2-.35.22-.65.07-.3-.15-1.27-.47-2.42-1.49-.9-.8-1.5-1.78-1.68-2.08-.17-.3-.02-.46.13-.6.13-.13.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.02-.52-.07-.15-.67-1.62-.92-2.22-.24-.58-.49-.5-.67-.51h-.57c-.2 0-.52.07-.79.37-.27.3-1.02 1-1.02 2.43s1.04 2.82 1.19 3.02c.15.2 2.05 3.13 4.97 4.39.7.3 1.24.48 1.66.61.7.22 1.33.19 1.83.12.56-.08 1.77-.72 2.02-1.42.25-.7.25-1.3.17-1.42-.07-.12-.27-.2-.57-.35z" />
                 </svg>
               </a>
             </div>
           </div>

         </div>
         <div class="card-body">
           <h5 class="member-name">Archit Dhola</h5>
           <span class="member-role">Chairman</span>
         </div>
       </div>

       <!-- Member 3 -->
       <div class="col-lg-4 col-md-6">
         <div class="team-card">
           <div class="card-img-wrapper">
             <img src="https://randomuser.me/api/portraits/men/52.jpg" alt="Romit Lathiya" />
             <div class="social-overlay">
               <a href="#" class="social-btn linkedin" title="LinkedIn">
                 <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                   viewBox="0 0 24 24">
                   <path
                     d="M4.98 3.5C4.98 4.88 3.87 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1s2.48 1.12 2.48 2.5zM.5 8.5h4V24h-4V8.5zm6.5 0h3.8v2.12h.05c.53-1 1.82-2.06 3.74-2.06 4 0 4.74 2.64 4.74 6.06V24h-4v-8.53c0-2.04-.04-4.66-2.84-4.66-2.85 0-3.28 2.22-3.28 4.51V24H7V8.5z" />
                 </svg>
               </a>
               <a href="#" class="social-btn whatsapp" title="WhatsApp">
                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                   viewBox="0 0 24 24">
                   <path
                     d="M20.52 3.48A11.93 11.93 0 0 0 12 0C5.37 0 0 5.37 0 12a11.94 11.94 0 0 0 1.64 6.07L0 24l6.13-1.61A11.96 11.96 0 0 0 12 24c6.63 0 12-5.37 12-12 0-3.2-1.25-6.22-3.48-8.52zm-8.52 18.4a9.94 9.94 0 0 1-5.08-1.4l-.36-.22-3.64.95.98-3.55-.24-.37A9.93 9.93 0 0 1 2 12c0-5.51 4.49-10 10-10s10 4.49 10 10-4.49 10-10 10zm5.47-7.43c-.3-.15-1.77-.87-2.04-.97-.27-.1-.47-.15-.67.15-.2.3-.77.97-.94 1.17-.17.2-.35.22-.65.07-.3-.15-1.27-.47-2.42-1.49-.9-.8-1.5-1.78-1.68-2.08-.17-.3-.02-.46.13-.6.13-.13.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.02-.52-.07-.15-.67-1.62-.92-2.22-.24-.58-.49-.5-.67-.51h-.57c-.2 0-.52.07-.79.37-.27.3-1.02 1-1.02 2.43s1.04 2.82 1.19 3.02c.15.2 2.05 3.13 4.97 4.39.7.3 1.24.48 1.66.61.7.22 1.33.19 1.83.12.56-.08 1.77-.72 2.02-1.42.25-.7.25-1.3.17-1.42-.07-.12-.27-.2-.57-.35z" />
                 </svg>
               </a>
             </div>
           </div>

         </div>
         <div class="card-body">
           <h5 class="member-name">Romit Lathiya</h5>
           <span class="member-role">General Manager</span>
         </div>
       </div>

     </div>

   </div>

 </section>

 <section class="our-team">

   <div class="container position-relative" style="z-index:1;">

     <h2 class="section-heading">The Euphoria Team</h2>


     <div class="swiper-outer">
       <!-- Prev -->
       <div class="swiper-btn-prev" id="teamPrev">
         <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
           <path d="M15 18L9 12L15 6" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
         </svg>
       </div>

       <div class="swiper mySwiper" id="teamSwiper">
         <div class="swiper-wrapper">

           <!-- Card 1 -->
           <div class="swiper-slide">
             <div class="member-card">
               <div class="photo-wrap">
                 <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Rajvi Anghan" />
               </div>
               <p class="name">Rajvi Anghan</p>
               <p class="role">Visa Applicant</p>
             </div>
           </div>

           <!-- Card 2 -->
           <div class="swiper-slide">
             <div class="member-card">
               <div class="photo-wrap">
                 <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Krupali Maru" />
               </div>
               <p class="name">Krupali Maru</p>
               <p class="role">BDE</p>
             </div>
           </div>

           <!-- Card 3 -->
           <div class="swiper-slide">
             <div class="member-card">
               <div class="photo-wrap">
                 <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Dharti Mangukiya" />
               </div>
               <p class="name">Dharti Mangukiya</p>
               <p class="role">Creative Designer</p>
             </div>
           </div>

           <!-- Card 4 -->
           <div class="swiper-slide">
             <div class="member-card">
               <div class="photo-wrap">
                 <img src="https://randomuser.me/api/portraits/women/72.jpg" alt="Yana Samniwala" />
               </div>
               <p class="name">Yana Samniwala</p>
               <p class="role">Tourism Consultant</p>
             </div>
           </div>

           <!-- Card 5 -->
           <div class="swiper-slide">
             <div class="member-card">
               <div class="photo-wrap">
                 <img src="https://randomuser.me/api/portraits/women/57.jpg" alt="Janvi Goyani" />
               </div>
               <p class="name">Janvi Goyani</p>
               <p class="role">BDE</p>
             </div>
           </div>

           <!-- Card 6 (bonus) -->
           <div class="swiper-slide">
             <div class="member-card">
               <div class="photo-wrap">
                 <img src="https://randomuser.me/api/portraits/women/33.jpg" alt="Priya Shah" />
               </div>
               <p class="name">Priya Shah</p>
               <p class="role">Marketing Lead</p>
             </div>
           </div>

           <!-- Card 7 (bonus) -->
           <div class="swiper-slide">
             <div class="member-card">
               <div class="photo-wrap">
                 <img src="https://randomuser.me/api/portraits/women/21.jpg" alt="Minal Desai" />
               </div>
               <p class="name">Minal Desai</p>
               <p class="role">HR Manager</p>
             </div>
           </div>

         </div><!-- /.swiper-wrapper -->
       </div><!-- /.mySwiper -->

       <!-- Next -->
       <div class="swiper-btn-next" id="teamNext">
         <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
           <path d="M9 18L15 12L9 6" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
         </svg>
       </div>
     </div><!-- /.swiper-outer -->

     <!-- Pagination outside the swiper-outer so it sits below -->
     <div class="swiper-pagination" id="teamPagination"></div>


   </div>

 </section>

 <section class="focus-area">

   <div class="container position-relative" style="z-index:1;">

     <h2 class="section-heading">Who We Serve</h2>

     <!-- Top tagline -->
     <div class="text-center tagline">
       <em>Serving Aspirations Across Borders and Life Stages.</em>
     </div>

     <!-- Grid of cards -->
     <div class="row">
       <!-- Row 1 -->
       <div class="col-12 col-md-6">
         <a href="#" class="card-option active">
           <svg class="icon-svg" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
             <circle cx="24" cy="16" r="7" stroke-linecap="round" stroke-linejoin="round" />
             <path d="M8 40c0-8.837 7.163-16 16-16s16 7.163 16 16" stroke-linecap="round" stroke-linejoin="round" />
             <path d="M30 10c2-1 4.5-1 6 1s1.5 5 0 7" stroke-linecap="round" />
             <path d="M18 10c-2-1-4.5-1-6 1s-1.5 5 0 7" stroke-linecap="round" />
           </svg>
           Individual investors and families
         </a>
       </div>
       <div class="col-12 col-md-6">
         <a href="#" class="card-option">
           <svg class="icon-svg" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
             <circle cx="24" cy="24" r="14" stroke-linecap="round" stroke-linejoin="round" />
             <ellipse cx="24" cy="24" rx="6" ry="14" stroke-linecap="round" stroke-linejoin="round" />
             <line x1="10" y1="24" x2="38" y2="24" stroke-linecap="round" />
             <line x1="11" y1="17" x2="37" y2="17" stroke-linecap="round" />
             <line x1="11" y1="31" x2="37" y2="31" stroke-linecap="round" />
           </svg>
           NRIs and High-Net-Worth Individuals (HNIs)
         </a>
       </div>

       <!-- Row 2 -->
       <div class="col-12 col-md-6">
         <a href="#" class="card-option">
           <svg class="icon-svg" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
             <path d="M24 8 L28 18 L38 20 L30 28 L32 38 L24 34 L16 38 L18 28 L10 20 L20 18 Z" stroke-linecap="round"
               stroke-linejoin="round" />
             <path d="M34 14 C36 8 42 6 42 6 C42 6 40 12 34 14Z" stroke-linecap="round" stroke-linejoin="round" />
           </svg>
           Entrepreneurs and startups
         </a>
       </div>
       <div class="col-12 col-md-6">
         <a href="#" class="card-option">
           <svg class="icon-svg" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
             <rect x="10" y="18" width="28" height="22" rx="2" stroke-linecap="round" stroke-linejoin="round" />
             <path d="M16 18V14a8 8 0 0116 0v4" stroke-linecap="round" stroke-linejoin="round" />
             <rect x="18" y="26" width="12" height="8" rx="1" stroke-linecap="round" stroke-linejoin="round" />
           </svg>
           SMEs and corporate organisations
         </a>
       </div>

       <!-- Row 3 -->
       <div class="col-12 col-md-6">
         <a href="#" class="card-option">
           <svg class="icon-svg" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
             <circle cx="24" cy="24" r="14" stroke-linecap="round" stroke-linejoin="round" />
             <path d="M24 10 C18 16 18 32 24 38" stroke-linecap="round" stroke-linejoin="round" />
             <path d="M24 10 C30 16 30 32 24 38" stroke-linecap="round" stroke-linejoin="round" />
             <line x1="10" y1="24" x2="38" y2="24" stroke-linecap="round" />
             <circle cx="36" cy="14" r="5" fill="currentColor" stroke="none" opacity="0.15" />
             <path d="M34 14 L36 12 L38 14 L36 16 Z" fill="currentColor" />
           </svg>
           Global travellers and working professionals
         </a>
       </div>
       <div class="col-12 col-md-6">
         <a href="#" class="card-option">
           <svg class="icon-svg" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
             <circle cx="24" cy="24" r="14" stroke-linecap="round" stroke-linejoin="round" />
             <path d="M17 18 C19 14 28 13 32 17" stroke-linecap="round" />
             <path d="M16 28 C17 34 31 34 32 28" stroke-linecap="round" />
             <path d="M20 18 L18 30" stroke-linecap="round" />
             <path d="M28 18 L30 30" stroke-linecap="round" />
           </svg>
           Clients Seeking Global Advisory Solutions
         </a>
       </div>
     </div>

     <!-- Bottom tagline -->
     <div class="text-center bottom-tagline mt-2">
       <em>No matter where you are today, we help you move forward with purpose and protection.</em>
     </div>


   </div>

 </section>

 <section class="testimonial">

   <div class="container position-relative" style="z-index:1;">

     <h2 class="section-heading">What Our Clients Say</h2>

     <!-- Swiper -->
     <div class="swiper testimonialSwiper">
       <div class="swiper-wrapper">

         <!-- Slide 1 -->
         <div class="swiper-slide">
           <div class="testimonial-card">
             <div>
               <span class="quote-icon">"</span>
               <p class="testimonial-text">We appreciated the structured approach and ethical guidance provided by
                 Euphoria Group. They helped us identify the right property aligned with our long-term goals.</p>
             </div>
             <div class="testimonial-author">
               <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Karan Malhotra" />
               <div>
                 <div class="author-name">Karan Malhotra</div>
                 <div class="author-role">Business Owner</div>
               </div>
             </div>
           </div>
         </div>

         <!-- Slide 2 -->
         <div class="swiper-slide">
           <div class="testimonial-card">
             <div>
               <span class="quote-icon">"</span>
               <p class="testimonial-text">Euphoria Group made the entire process seamless and stress-free. Their team
                 was responsive, knowledgeable, and truly had our best interests at heart throughout.</p>
             </div>
             <div class="testimonial-author">
               <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Priya Sharma" />
               <div>
                 <div class="author-name">Priya Sharma</div>
                 <div class="author-role">IT Professional</div>
               </div>
             </div>
           </div>
         </div>

         <!-- Slide 3 -->
         <div class="swiper-slide">
           <div class="testimonial-card">
             <div>
               <span class="quote-icon">"</span>
               <p class="testimonial-text">From site visits to final paperwork, every step was handled professionally.
                 I wouldn't trust anyone else for real estate guidance. Truly exceptional service.</p>
             </div>
             <div class="testimonial-author">
               <img src="https://randomuser.me/api/portraits/men/55.jpg" alt="Arjun Mehta" />
               <div>
                 <div class="author-name">Arjun Mehta</div>
                 <div class="author-role">Entrepreneur</div>
               </div>
             </div>
           </div>
         </div>

         <!-- Slide 4 -->
         <div class="swiper-slide">
           <div class="testimonial-card">
             <div>
               <span class="quote-icon">"</span>
               <p class="testimonial-text">Their market knowledge is unparalleled. They found us the perfect home
                 within our budget and timeline. Highly recommend Euphoria Group to anyone searching for property.</p>
             </div>
             <div class="testimonial-author">
               <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Neha Kapoor" />
               <div>
                 <div class="author-name">Neha Kapoor</div>
                 <div class="author-role">Doctor</div>
               </div>
             </div>
           </div>
         </div>

         <!-- Slide 5 -->
         <div class="swiper-slide">
           <div class="testimonial-card">
             <div>
               <span class="quote-icon">"</span>
               <p class="testimonial-text">We were first-time buyers and Euphoria Group guided us with patience and
                 clarity. Their transparent advice gave us confidence throughout the entire buying journey.</p>
             </div>
             <div class="testimonial-author">
               <img src="https://randomuser.me/api/portraits/men/76.jpg" alt="Rohit Jain" />
               <div>
                 <div class="author-name">Rohit Jain</div>
                 <div class="author-role">Software Engineer</div>
               </div>
             </div>
           </div>
         </div>

       </div><!-- /swiper-wrapper -->
     </div><!-- /swiper -->

     <!-- Controls: Prev | Dots | Next -->
     <div class="swiper-controls">
       <button class="swiper-btn-prev" id="prevBtn" aria-label="Previous">
         <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
           stroke-linejoin="round">
           <polyline points="15 18 9 12 15 6" />
         </svg>
       </button>

       <div class="swiper-pagination" id="testimonialPagination"></div>

       <button class="swiper-btn-next" id="nextBtn" aria-label="Next">
         <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
           stroke-linejoin="round">
           <polyline points="9 18 15 12 9 6" />
         </svg>
       </button>
     </div>

   </div>

 </section>


 <?php
  include_once('elements/faqs.php');
  include_once('elements/footer.php');
  ?>
 

 <script>
   const swiper = new Swiper('#teamSwiper', {
     slidesPerView: 1,
     spaceBetween: 20,
     loop: true,
     navigation: {
       prevEl: '#teamPrev',
       nextEl: '#teamNext',
     },
     pagination: {
       el: '#teamPagination',
       clickable: true,
     },
     breakpoints: {
       480: {
         slidesPerView: 2,
         spaceBetween: 16
       },
       768: {
         slidesPerView: 3,
         spaceBetween: 20
       },
       1024: {
         slidesPerView: 4,
         spaceBetween: 24
       },
       1280: {
         slidesPerView: 5,
         spaceBetween: 24
       },
     }
   });
 </script>


 <script>
   const tetimonial = new Swiper('.testimonialSwiper', {
     slidesPerView: 1,
     spaceBetween: 24,
     loop: true,
     pagination: {
       el: '#testimonialPagination',
       clickable: true,
     },
     navigation: {
       nextEl: '#nextBtn',
       prevEl: '#prevBtn',
     },
     breakpoints: {
       576: {
         slidesPerView: 1
       },
       768: {
         slidesPerView: 2
       },
       992: {
         slidesPerView: 3
       },
       1200: {
         slidesPerView: 4
       },
     },
   });
 </script>