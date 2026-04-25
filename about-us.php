 <?php
  include_once('elements/header.php');
  ?>

 <!-- HERO -->
 <section class="top-banner-background" style="background-image: url('assets/img/background/about-us-bg.png');">
   <div>
     <h1 class="mb-0" data-aos="fade-up" data-aos-duration="400">About The Euphoria Group</h1>
     <p class="text-black text-center mt-2" data-aos="fade-up" data-aos-duration="600">Your Integrated Partner for Business and Global Opportunities</p>
   </div>
 </section>

 <style>
   /* ── Section wrapper ── */
   .about-section {
     padding: 80px 0 50px;
   }

   /* ── Corner-bracket card ── */
   .bracket-card {
     position: relative;
     padding: 30px;
   }

   .bracket-card::before {
     content: '';
     position: absolute;
     top: 0;
     left: 0;
     width: 70px;
     height: 70px;
     border-top: 4px solid #CC2831;
     border-left: 4px solid #CC2831;
   }

   .bracket-card::after {
     content: '';
     position: absolute;
     bottom: 0;
     right: 0;
     width: 56px;
     height: 56px;
     border-bottom: 4px solid #CC2831;
     border-right: 4px solid #CC2831;
   }

   /* ── Typography ── */
   .about-text {
     font-size: 18px;
     font-family: "Poppins", sans-serif;
     line-height: 1.5;
     font-weight: 400;
     text-align: center;
     margin-bottom: 0;
   }

   .about-text strong {
     font-weight: 700;
     color: #1a1a1a;
   }

   .para-gap {
     margin-top: 1.75rem;
   }
 </style>

 <section class="about-section">
   <div class="container">
     <div class="row justify-content-center">
       <div class="col-12 col-lg-12">

         <div class="bracket-card">

           <!-- Paragraph 1 -->
           <p class="about-text" data-aos="fade-up" data-aos-duration="800">
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
           <p class="about-text para-gap" data-aos="fade-up" data-aos-duration="1000">
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

 <style>
   /* ── Vision Section ── */
   .vision-section {
     padding: 50px 0;
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
     /* right: -10px;  */
     font-size: clamp(52px, 8vw, 132px);
     font-weight: 700;
     color: #c0392b;
     opacity: 0.06;
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
     font-size: clamp(52px, 8vw, 120px);
     font-weight: 700;
     color: #c0392b;
     opacity: 0.06;
     line-height: 1;
     user-select: none;
     pointer-events: none;
     white-space: nowrap;
   }

   /* Tagline */
   .vision-tagline {
     font-size: 15px;
     font-weight: 500;
     color: #6b7280;
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
     font-family:"Poppins", sans-serif;
     text-align: start;
     line-height: 1.8;
     color: #666666;
     margin-bottom: 20px;
   }

   .vision-body p:last-child {
     margin-bottom: 0;
   }

   /* Highlight */
   .vision-highlight {
     background: #fee2e2;
     border-left: 3px solid #c0392b;
     border-radius: 6px;
     padding: 16px 20px;
     margin-top: 28px;
     font-size: 15px;
     color: #25356f;
     font-weight: 500;
     line-height: 1.7;
   }

   /* ── Responsive ── */
   /* ── TABLET (max 767px) ── */
   @media (max-width: 767.98px) {
     .vision-section {
       padding: 36px 0 48px;
     }

     .vision-img-wrap {
       height: 260px;
       margin-bottom: 0;
       border-radius: 14px;
     }

     .vision-content {
       padding-left: 0;
       padding-top: 20px;
     }

     /* Fix ghost text overflow on mobile */
     .ghost-text {
       font-size: 3.2rem;
       top: -35px;
       left: 0;
       white-space: nowrap;
       overflow: hidden;
       width: 100%;
       opacity: 0.06;
     }

     .mission-text {
       font-size: 3.2rem;
       top: -35px;
       right: 0;
       white-space: nowrap;
       overflow: hidden;
       width: 100%;
       opacity: 0.06;
     }

     .vision-section .row {
       --bs-gutter-y: 1.5rem;
       /* reduce gap between image and content */
     }

     .vision-body {
       margin-top: 30px;
     }

     .vision-body p {
       font-size: 14.5px;
       line-height: 1.75;
       margin-bottom: 16px;
     }

     .vision-tagline {
       font-size: 14px;
       margin-bottom: 20px;
       text-align: left;
     }

     .vision-highlight {
       padding: 14px 16px;
       font-size: 14px;
       margin-top: 20px;
     }

     .vision-section h2 {
       font-size: 1.6rem;
       text-align: center;
       margin-bottom: 0;
     }
   }

   /* ── MOBILE (max 575px) ── */
   @media (max-width: 575.98px) {
     .vision-section {
       padding: 28px 0 40px;
     }

     .vision-img-wrap {
       height: 220px;
       border-radius: 12px;
     }

     /* Contain ghost text fully — no overflow scroll */
     .ghost-text,
     .mission-text {
       font-size: 3.6rem;
       top: 0px;
       left: 0;
       text-align: center;
       right: auto;
       width: 100%;
       overflow: hidden;
       white-space: nowrap;
       opacity: 0.05;
       letter-spacing: 1px;
     }

     .vision-content {
       padding-top: 16px;
     }

     .vision-section h2 {
       font-size: 1.45rem;
       text-align: center;
       line-height: 1.3;
       margin-top: 0px;
     }

     .vision-body {
       margin-top: 20px;
     }

     .vision-tagline {
       font-size: 13.5px;
       text-align: left;
       margin-bottom: 16px;
       line-height: 1.6;
     }

     .vision-body p {
       font-size: 14px;
       line-height: 1.7;
       margin-bottom: 14px;
       text-align: left;
     }

     .vision-highlight {
       padding: 12px 14px;
       font-size: 13.5px;
       margin-top: 16px;
       border-radius: 6px;
       line-height: 1.65;
     }

     /* Tighten Bootstrap row gap */
     .vision-section .row.g-5 {
       --bs-gutter-x: 1rem;
       --bs-gutter-y: 1rem;
     }
   }
 </style>

 <section class="vision-section">
   <div class="container">
     <div class="row align-items-center g-5">

       <!-- Left: Image -->
       <div class="col-md-5">
         <div class="vision-img-wrap" data-aos="fade-up" data-aos-duration="1200">
           <img src="assets/img/about-us/shaping-future.png" alt="Vision - man looking through telescope over city skyline" />
         </div>
       </div>

       <!-- Right: Content -->
       <div class="col-md-7">
         <div class="vision-content">

           <!-- Ghost watermark -->
           <span class="ghost-text" aria-hidden="true">Our Vision</span>

           <h2 class="text-center" data-aos="fade-up" data-aos-duration="800">Shaping the Future</h2>


           <div class="vision-body">
             <p class="vision-tagline" data-aos="fade-up" data-aos-duration="900">Creating Global Confidence. Building Enduring Legacies.</p>
             <p data-aos="fade-up" data-aos-duration="1000"> 
              Our vision is to become a globally trusted partner for wealth creation, asset protection, and international expansion. We aspire to empower individuals and businesses with the clarity, structure, and confidence needed to grow beyond borders—financially, professionally, and personally.
             </p>
             <p data-aos="fade-up" data-aos-duration="1200">
              At Euphoria Group, we envision a future where wealth is not just accumulated but protected, sustained, and passed forward with purpose.
            </p>
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
       <div class="col-md-7">
         <div class="vision-content">

           <!-- Ghost watermark -->
           <span class="mission-text" aria-hidden="true">Our Mission</span>

           <h2 class="text-center" data-aos="fade-up" data-aos-duration="800">Strategic Purpose</h2>


           <div class="vision-body">
             <p data-aos="fade-up" data-aos-duration="-00">
               The Euphoria Group's mission is to provide strategic, transparent, and fully compliant solutions that transform complex financial and global opportunities into clear, actionable paths. We are dedicated to assisting our clients throughout their journey, empowering them to confidently grow, protect, and diversify their assets.
             </p>
             <p data-aos="fade-up" data-aos-duration="1000">
              Through disciplined execution, ethical governance, and forward-thinking strategies, we aim to build resilient, long-term prosperity that will last across changing markets and generations.
            </p>
           </div>

         </div>
       </div>

       <!-- Left: Image -->
       <div class="col-md-5">
         <div class="vision-img-wrap" data-aos="fade-up" data-aos-duration="1200">
           <img src="assets/img/about-us/strategic-purpose.png" alt="Vision - man looking through telescope over city skyline" />
         </div>
       </div>


     </div>
   </div>
 </section>

 <style>
   .trust-section {
     position: relative;
     padding: 60px 40px 80px;
     overflow: hidden;
   }

   /* "Our Commitment" watermark */
   .trust-section::before {
     content: "Our Commitment";
     position: absolute;
     top: -20px;
     left: 50%;
     transform: translateX(-50%);
     font-size: clamp(50px, 9vw, 120px);
     font-weight: 800;
     color: #f0c0c8;
     white-space: nowrap;
     pointer-events: none;
     opacity: 0.2;
     z-index: 0;
     letter-spacing: 2px;
   }

   .outerline {
     outline: 2px solid #c8c8c8;
     outline-offset: 2px;
     z-index: -1;
     box-shadow: 0 8px 22px rgba(0, 0, 0, 0.14);
   }

   .section-heading-trust {
     text-align: center;
     font-size: 1.7rem;
     font-weight: 700;
     color: #25356f;
     margin-bottom: 60px;
     position: relative;
     z-index: 2;
   }

   .cards-grid {
     display: grid;
     grid-template-columns: repeat(3, 1fr);
     gap: 30px 60px;
     position: relative;
     z-index: 2;
     max-width: 1100px;
     margin: 0 auto;
   }

   .trust-card {
     background: #ffffff;
     border-radius: 16px;
     border: 1px solid #e8e8e8;
     border-right: 3px solid rgba(220, 60, 70, 0.45);
     display: flex;
     align-items: center;
     position: relative;
     min-height: 105px;
     margin-left: 55px;
     box-shadow: 0 4px 20px rgba(26, 40, 85, 0.07);
     transition: transform 0.3s ease, box-shadow 0.3s ease;
     padding: 18px 18px 18px 70px;
   }

   .trust-card:hover {
     transform: translateY(-5px);
     box-shadow: 0 4px rgba(26, 40, 85, 0.1);
   }

   .trust-icon-wrap {
     width: 105px;
     height: 105px;
     border-radius: 50%;
     background: #25356f;
     display: flex;
     align-items: center;
     justify-content: center;
     position: absolute;
     left: -52px;
     top: 50%;
     transform: translateY(-50%);
     border: 5px solid #e8e8e8;
     box-shadow: 0 8px 22px rgba(0, 0, 0, 0.14);
     z-index: 3;
   }

   .trust-icon-wrap img{
    width: 50px;
    height: 50px;
  }

   /* Back-side outline ring using a pseudo-element */
   .trust-icon-wrap::before {
     content: '';
     position: absolute;
     inset: -8px;
     /* controls how far the ring sits outside the border */
     border-radius: 50%;
     border: 2px solid #c8c8c8;
     z-index: -1;
     /* pushes it BEHIND the element */
     pointer-events: none;
   }

   .trust-icon-wrap svg {
     width: 34px;
     height: 34px;
     stroke: #ffffff;
     fill: none;
     stroke-width: 1.6;
     stroke-linecap: round;
     stroke-linejoin: round;
   }

   .trust-card-text {
     font-size: 0.88rem;
     color: #666666;
     font-family: "Poppins", sans-serif;
     line-height: 1.55;
     font-weight: 500;
   }

   .plus {
     position: absolute;
     color: rgba(26, 40, 85, 0.12);
     font-size: 1.1rem;
     font-weight: 300;
     pointer-events: none;
     z-index: 1;
   }

   /* Skyline watermark */
   .skyline-bg {
     position: absolute;
     bottom: 0;
     left: 0;
     right: 0;
     height: 180px;
     opacity: 0.06;
     z-index: 0;
     pointer-events: none;
     overflow: hidden;
   }

   .skyline-bg svg {
     width: 100%;
     height: 100%;
   }

   /* ── TABLET (max 992px) ── */
   @media (max-width: 992px) {
     .cards-grid {
       grid-template-columns: repeat(2, 1fr);
       gap: 24px 50px;
     }

     .trust-section {
       padding: 50px 30px 70px;
     }

     .trust-section::before {
       font-size: clamp(36px, 7vw, 72px);
       top: -10px;
       white-space: nowrap;
       overflow: hidden;
       width: 100%;
     }
   }

   /* ── MOBILE (max 600px) ── */
   @media (max-width: 600px) {
     .trust-section {
       padding: 40px 16px 60px;
       overflow: hidden;
     }

     /* Fix watermark overflow — most important fix */
     .trust-section::before {
       font-size: 2.2rem;
       text-align: center;
       top: 22px;
       letter-spacing: 1px;
       white-space: nowrap;
       overflow: hidden;
       width: 100%;
       opacity: 0.15;
     }

     .section-heading-trust {
       font-size: 1.45rem;
       margin-bottom: 40px;
     }

     /* Single column grid */
     .cards-grid {
       grid-template-columns: 1fr;
       gap: 20px;
       padding: 0 8px;
     }

     /* Card: reduce left margin so icon fits inside viewport */
     .trust-card {
       margin-left: 40px;
       padding: 16px 16px 16px 55px;
       min-height: 90px;
       border-radius: 12px;
     }

     /* Smaller icon circle */
     .trust-icon-wrap {
       width: 75px;
       height: 75px;
       left: -38px;
       border-width: 4px;
     }

     .trust-icon-wrap::before {
       inset: -6px;
     }

     .trust-icon-wrap svg {
       width: 28px;
       height: 28px;
     }

     .trust-card-text {
       font-size: 0.85rem;
       line-height: 1.6;
     }

     /* Hide decorative plus signs on mobile — they misplace */
     .plus {
       display: none;
     }
   }

   /* ── SMALL MOBILE (max 400px) ── */
   @media (max-width: 400px) {
     .trust-card {
       margin-left: 35px;
       padding: 14px 12px 14px 48px;
     }

     .trust-icon-wrap {
       width: 65px;
       height: 65px;
       left: -33px;
     }

     .trust-icon-wrap svg {
       width: 24px;
       height: 24px;
     }

     .trust-card-text {
       font-size: 0.82rem;
     }


   }
 </style>

 <section class="container ">
   <div class="trust-section ">

     <h2 class="section-heading-trust">Built on Trust</h2>

     <div class="cards-grid">

       <!-- Card 1 -->
       <div class="trust-card" data-aos="fade-left" data-aos-duration="1000">
         <div class="trust-icon-wrap ">
             <img src="assets/img/icon/commitment.png" alt="Trust Icon" class="trust-icon-img">
         </div>
         <div class="trust-card-text">Building long-term relationships based on trust and transparency</div>
       </div>

       <!-- Card 2 -->
       <div class="trust-card" data-aos="fade-in" data-aos-duration="1300">
         <div class="trust-icon-wrap">
           <img src="assets/img/icon/commitment-1.png" alt="Trust Icon" class="trust-icon-img">
         </div>
         <div class="trust-card-text">Safeguarding client interests at every stage of the journey</div>
       </div>

       <!-- Card 3 -->
       <div class="trust-card" data-aos="fade-right" data-aos-duration="1000">
         <div class="trust-icon-wrap">
           <img src="assets/img/icon/commitment-2.png" alt="Trust Icon" class="trust-icon-img">
         </div>
         <div class="trust-card-text">Delivering value that goes beyond transactions</div>
       </div>

       <!-- Card 4 -->
       <div class="trust-card" data-aos="fade-left" data-aos-duration="1000">
         <div class="trust-icon-wrap">
           <img src="assets/img/icon/commitment-3.png" alt="Trust Icon" class="trust-icon-img">
         </div>
         <div class="trust-card-text">Providing recommendations guided by integrity</div>
       </div>

       <!-- Card 5 -->
       <div class="trust-card" data-aos="fade-in" data-aos-duration="1300">
         <div class="trust-icon-wrap">
           <img src="assets/img/icon/commitment-4.png" alt="Trust Icon" class="trust-icon-img">
         </div>
         <div class="trust-card-text">Understanding client goals through a personalized approach</div>
       </div>

       <!-- Card 6 -->
       <div class="trust-card" data-aos="fade-right" data-aos-duration="1000">
         <div class="trust-icon-wrap">
           <img src="assets/img/icon/commitment-5.png" alt="Trust Icon" class="trust-icon-img">
         </div>
         <div class="trust-card-text">Measuring success by lasting trust and sustainable outcomes</div>
       </div>

     </div>

   </div>
 </section>

 <style>
   /* watermark background text */
   .why-section::before {
     content: "Our Advantage";
     position: absolute;
     top: 0px;
     left: 50%;
     transform: translateX(-50%);
     font-size: clamp(60px, 10vw, 120px);
     font-weight: 700;
     color: #f0c0c8;
     white-space: nowrap;
     pointer-events: none;
     z-index: 0;
     opacity: 0.2;
     letter-spacing: 2px;
   }

   /* ── Heading ── */
   .section-heading {
     position: relative;
     z-index: 1;
     color: #25356f;
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
     font-size: 18px;
     font-weight: 400;
     color: #666666;
     font-family: "Poppins", sans-serif;
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
     font-family: "Poppins", sans-serif;
     gap: 14px;
     padding: 10px 0;
     color: #374151;
     font-size: 18px;
     line-height: 1.55;
   }


   /* custom arrow icon */
   .bullet-icon {
     flex-shrink: 0;
     width: 27px;
     height: 21px;
     border-radius: 50%;
     display: flex;
     align-items: center;
     justify-content: center; 
   }

   /* tagline */
   .tagline {
     font-size: 0.92rem;
     color: #6b7280;
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
     pointer-events: none;
     z-index: 0;
   }


   .why-section {
     position: relative;
     overflow: hidden;
     padding: 80px 0 90px;
   }

   /* ── TABLET: 768px – 991px ── */
   @media (max-width: 991px) and (min-width: 768px) {
     .why-section {
       padding: 60px 0 70px;
     }

     .section-heading {
       margin-bottom: 36px;
       font-size: 1.7rem;
     }

     .img-wrapper {
       height: 340px;
       border-radius: 14px;
     }

     .skyline-watermark {
       width: 220px;
     }
   }

   /* ── MOBILE: up to 767px ── */
   @media (max-width: 767px) {
     .why-section {
       padding: 48px 0 56px;
     }

     /* clip watermark so it doesn't overflow on narrow screens */
     .why-section::before {
       font-size: clamp(32px, 12vw, 60px);
       top: 4px;
       opacity: 0.15;
     }

     .section-heading {
       margin-bottom: 28px;
       font-size: 1.4rem;
       padding: 0 8px;
     }

     /* Stack columns: image on top, content below */
     .row.align-items-center {
       flex-direction: column;
     }

     .img-wrapper {
       height: 260px;
       border-radius: 14px;
       margin-bottom: 28px;
     }

     .intro-text {
       font-size: 0.95rem;
       margin-bottom: 20px;
     }

     .advantage-list li {
       font-size: 0.9rem;
       gap: 12px;
       padding: 8px 0;
     }

     .bullet-icon {
       width: 24px;
       height: 24px;
     }

     .bullet-icon svg {
       width: 12px;
       height: 12px;
     }

     .skyline-watermark {
       width: 160px;
     }
   }

   /* ── SMALL MOBILE: up to 480px ── */
   @media (max-width: 480px) {
     .why-section {
       padding: 36px 0 44px;
     }

     .why-section::before {
       font-size: clamp(26px, 10vw, 44px);
       opacity: 0.12;
     }

     .section-heading {
       font-size: 1.25rem;
       margin-bottom: 22px;
     }

     .img-wrapper {
       height: 220px;
       border-radius: 12px;
     }

     .intro-text {
       font-size: 0.9rem;
     }

     .advantage-list li {
       font-size: 0.87rem;
     }

     .skyline-watermark {
       width: 120px;
     }
   }
 </style>

 <section class="container">
   <div class="why-section position-relative" style="z-index:1;">
     <!-- city skyline watermark SVG (decorative) -->
     <img src="assets/img/why-choose-bg.png" alt="" class="skyline-watermark">

     <h2 class="section-heading" data-aos="fade-up" data-aos-duration="800">Why Choose Euphoria Group</h2>

     <div class="row align-items-center g-5">

       <!-- Left: Image -->
       <div class="col-lg-6">
         <div class="img-wrapper" data-aos="fade-up" data-aos-duration="1000">
           <img src="assets/img/about-us/indian-business.png" alt="Euphoria Group team meeting" />
         </div>
       </div>

       <!-- Right: Content -->
       <div class="col-lg-6 content-side">

         <p class="intro-text" data-aos="fade-up" data-aos-duration="1100">
           Euphoria Group brings together wealth advisory, business services, insurance
           solutions, and global mobility support under one integrated platform—ensuring
           seamless coordination and consistent outcomes. What sets us apart 
         </p>

         <ul class="advantage-list">
           <li data-aos="fade-up" data-aos-duration="1200">
             <span class="bullet-icon">
               <img src="assets/img/icon/Group.png" alt="arrow-icon">
             </span>
             <span>Comprehensive wealth, business, and mobility solutions under one group</span>
           </li>
           <li data-aos="fade-up" data-aos-duration="1200">
             <span class="bullet-icon">
               <img src="assets/img/icon/Group.png" alt="arrow-icon">
             </span>
             <span>Strong operational presence in India and international markets.</span>
           </li>
           <li data-aos="fade-up" data-aos-duration="1200">
             <span class="bullet-icon">
               <img src="assets/img/icon/Group.png" alt="arrow-icon">
             </span>
             <span>Global reach supported by deep local market expertise</span>
           </li>
           <li data-aos="fade-up" data-aos-duration="1200">
             <span class="bullet-icon">
               <img src="assets/img/icon/Group.png" alt="arrow-icon">
             </span>
             <span>Ethical practices backed by professional and compliant guidance</span>
           </li>
           <li data-aos="fade-up" data-aos-duration="1200">
             <span class="bullet-icon">
               <img src="assets/img/icon/Group.png" alt="arrow-icon">
             </span>
             <span>Customised solutions for individuals, families, and businesses <br>We don't offer shortcuts—we offer
               clarity, structure, and confidence.</span>
           </li>
         </ul>

       </div>
     </div>

   </div>
 </section>

 <style>
   .section-wrapper {
     background: #f8f9fc;
     padding: 60px 0 80px;
     position: relative;
     overflow: hidden;
   }

   .section-wrapper::before {
     content: "How We";
     position: absolute;
     top: -18px;
     left: 31%;
     transform: translateX(-50%);
     font-size: clamp(60px, 10vw, 110px);
     font-weight: 700;
     color: #f0c0c8;
     white-space: nowrap;
     pointer-events: none;
     z-index: 0;
     opacity: 0.2;
     letter-spacing: 2px;
   }

   /* Watermark
   .watermark {
     position: absolute;
     top: 10px;
     left: 275px;
     font-size: clamp(80px, 12vw, 140px);
     font-weight: 700;
     color: rgba(26, 42, 74, 0.06);
     white-space: nowrap;
     pointer-events: none;
     user-select: none;
     line-height: 1;
   } */

   /* Left heading */
   .section-title {
     font-size: clamp(28px, 3.5vw, 25px);
     font-weight: 700;
     color: #25356f;
     line-height: 1.2;
     position: relative;
     z-index: 2;
     left: 140px;
     top: 10px;
   }

   .image-box {
     width: 480px;
     border-radius: 20px;
     overflow: hidden;
     position: relative;
     left: 45px;
     top: 30px;
     box-shadow: 0 16px 48px rgba(26, 42, 74, 0.14);
   }

   .image-box img {
     width: 100%;
     height: 630px;
     object-fit: cover;
     object-position: center top;
     display: block;
     border-radius: 20px;
   }

   .image-box::after {
     content: '';
     position: absolute;
     inset: 0;
     border-radius: 20px;
     background: linear-gradient(160deg, rgba(192, 57, 43, 0.04) 0%, rgba(26, 42, 74, 0.10) 100%);
     pointer-events: none;
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
     border-bottom: 1px solid #e2e5f0;
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
    /* min-width: 72px; */
    /* background: white; */
    border-radius: 50%;
    display: flex;
    /* align-items: center; */
    justify-content: center;
    border: 1px solid #e2e5f0;
   }

   .icon-circle svg {
     width: 80px;
     height: 80px;
   }

   .item-title {
     font-weight: 700;
     font-size: 22px;
     font-family: "Anek Kannada", "Poppins", sans-serif;
     color: #25356f;
     margin-bottom: 8px;
   }

   .item-body {
      font-size: 17px;
      font-family: "Poppins", sans-serif;
      line-height: 30px;
      margin: 0;
      letter-spacing: 0%;
      font-weight: 400;
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

   /* ══════════════════════════════════════
     TABLET  768px – 991px
  ══════════════════════════════════════ */
   @media (max-width: 991px) and (min-width: 768px) {
     .section-wrapper {
       padding: 50px 0 60px;
     }

     .section-wrapper::before {
       font-size: clamp(50px, 9vw, 80px);
       left: 40%;
     }

     .section-title {
       text-align: center;
     }

     /* Left col: center the image */
     .col-lg-5 {
       display: flex;
       flex-direction: column;
       align-items: center;
     }

     .image-box {
       max-width: 420px;
       margin: 0 auto;
     }

     .image-box img {
       height: 460px;
     }

     .icon-circle {
       width: 80px;
       height: 80px;
       min-width: 80px;
     }

     .icon-circle svg {
       width: 60px;
       height: 60px;
     }
   }

   /* ══════════════════════════════════════
     MOBILE  ≤ 767px
  ══════════════════════════════════════ */
   @media (max-width: 767px) {
     .section-wrapper {
       padding: 40px 0 50px;
     }

     /* Tame watermark on small screens */
     .section-wrapper::before {
       font-size: clamp(36px, 11vw, 60px);
       left: 50%;
       top: 0;
       opacity: 0.2;
     }

     .section-title {
       font-size: 1.4rem;
       left: 0px;
       margin-bottom: 20px;
     }

     /* Stack left col: title then image, both centered */
     .col-lg-5 {
       display: flex;
       flex-direction: column;
       align-items: center;
       margin-bottom: 36px;
     }

     .image-box {
       max-width: 100%;
       width: 50%;
       left: 0px;
       border-radius: 16px;
     }

     .image-box img {
       height: 280px;
       border-radius: 16px;
     }

     /* Reduce icon circle size */
     .icon-circle {
       width: 64px;
       height: 64px;
       min-width: 64px;
     }

     .icon-circle svg {
       width: 46px;
       height: 46px;
     }

     .mindset-item {
       gap: 14px !important;
       padding-bottom: 24px;
       margin-bottom: 24px;
     }

     .item-title {
       font-size: 15px;
     }

     .item-body {
       font-size: 13px;
     }
   }

   /* ══════════════════════════════════════
     SMALL MOBILE  ≤ 480px
  ══════════════════════════════════════ */
   @media (max-width: 480px) {
     .section-wrapper {
       padding: 32px 0 40px;
     }

     .section-wrapper::before {
       /* font-size: clamp(28px, 10vw, 44px); */
       opacity: 0.2;
       font-size: 80px;
     }

     .section-title {
       font-size: 1.2rem;
     }

     .image-box img {
       height: 230px;
     }

     .icon-circle {
       width: 54px;
       height: 54px;
       min-width: 54px;
     }

     .icon-circle svg {
       width: 38px;
       height: 38px;
     }

     .item-title {
       font-size: 14px;
     }

     .item-body {
       font-size: 12.5px;
     }

     .mindset-item {
       gap: 12px !important;
       padding-bottom: 20px;
       margin-bottom: 20px;
     }
   }
 </style>

 <section class="section-wrapper py-5">
   <div class="container position-relative" style="z-index:1;">
     <div class="row align-items-start g-5">

       <!-- LEFT COLUMN -->
       <div class="col-lg-5">
         <h2 class="section-title mb-4">The Euphoria Mindset</h2>
         <div class="image-box" data-aos="fade-up" data-aos-duration="500">
           <img src="assets/img/about-us/mind-set.png" alt="Euphoria Mindset">
         </div>
       </div>

       <!-- RIGHT COLUMN -->
       <div class="col-lg-7">

         <!-- Item 1 -->
         <div class="mindset-item d-flex gap-4">
           <div class="icon-circle flex-shrink-0" data-aos="fade-up" data-aos-duration="800">
             <img src="assets/img/icon/mindset-1.png" alt="We See the Bigger Picture">
           </div>
           <div data-aos="fade-up" data-aos-duration="1000">
             <h5 class="item-title">We See the Bigger Picture</h5>
             <p class="item-body">
               Wealth, moving around the world, and investment opportunities are never just about money. They stand for
               safety, freedom, duty, and the past.
               <br />
               That's why we look at every engagement from different angles, weighing opportunity against safety and
               ambition against stability.
             </p>
           </div>
         </div>

         <!-- Item 2 -->
         <div class="mindset-item d-flex gap-4">
           <div class="icon-circle flex-shrink-0" data-aos="fade-up" data-aos-duration="800">
             <img src="assets/img/icon/mindset-2.png" alt="Precision Over Promises">
           </div>
           <div data-aos="fade-up" data-aos-duration="1000">
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
           <div class="icon-circle flex-shrink-0" data-aos="fade-up" data-aos-duration="800">
             <img src="assets/img/icon/mindset-3.png" alt="Precision Over Promises">
           </div>
           <div data-aos="fade-up" data-aos-duration="1000">
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
           <div class="icon-circle flex-shrink-0" data-aos="fade-up" data-aos-duration="800">
             <img src="assets/img/icon/mindset-4.png" alt="Precision Over Promises">
           </div>
           <div data-aos="fade-up" data-aos-duration="1000">
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

 <style>
   /* Section */
   .team-section {
     position: relative;
     padding: 70px 0 0px;
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
     font-size: clamp(60px, 10vw, 110px);
     font-weight: 700;
     color: #f0c0c8;
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

   /* Tablet (≤ 992px) */
   @media (max-width: 992px) {
     .team-section {
       padding: 50px 0;
     }

     .team-section::before {
       font-size: clamp(40px, 12vw, 80px);
       top: 10px;
     }

     .card-body {
       padding: 18px 15px 20px;
     }

     .member-name {
       font-size: 1.1rem;
     }

     .member-role {
       font-size: 0.75rem;
     }
   }


   /* Mobile (≤ 768px) */
   @media (max-width: 768px) {

     .team-section {
       padding: 40px 0;
     }

     .team-section::before {
       font-size: clamp(30px, 14vw, 60px);
       opacity: 0.2;
     }


   }


   /* Small Mobile (≤ 480px) */
   @media (max-width: 480px) {

     .team-section::before {
       font-size: 39px;
       top: 20px;
     }

   }
 </style>

 <section class=" container py-5">

   <div class="team-section position-relative" style="z-index:1;">

     <h2 class="section-heading" data-aos="fade-up" data-aos-duration="500">Executive Leadership</h2>

     <div class="row g-4 justify-content-center">

       <!-- Member 1 -->
       <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="200">
         <div class="team-card">
           <div class="card-img-wrapper">
             <img src="assets/img/team/person-1.png" alt="Milan Jasoliya" />
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
       <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="600">
         <div class="team-card">
           <div class="card-img-wrapper">
             <img src="assets/img/team/person-1.png" alt="Archit Dhola" />
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
       <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1000">
         <div class="team-card">
           <div class="card-img-wrapper">
             <img src="assets/img/team/person-1.png" alt="Romit Lathiya" />
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

 <style>
   /* Section */
   .our-team {
     position: relative;
     padding: 80px 30px 0px;
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
     font-size: clamp(60px, 10vw, 125px);
     font-weight: 700;
     color: #f0c0c8;
     white-space: nowrap;
     pointer-events: none;
     z-index: 0;
     opacity: 0.2;
     letter-spacing: 2px;
   }

   .section-heading-our-team {
     position: relative;
     z-index: 1;
     color: #25356f;
     font-size: clamp(1.6rem, 3vw, 2.2rem);
     font-weight: 700;
     text-align: center;
     margin-bottom: 100px;
   }

   /* ── Card ──────────────────────────────────────── */
   .member-card {
     background: #ffffff;
     border: 1.5px solid #e8eaf6;
     border-radius: 18px;
     text-align: center;
     transition: box-shadow .3s ease, transform .3s ease;
     overflow: hidden;
     cursor: pointer;
   }

   .member-card:hover {
     /* box-shadow: 0 12px 40px rgba(43, 57, 144, .12); */
     transform: translateY(-4px);
   }

   .member-card .photo-wrap {
     background: #f4f5f8;
     border-radius: 18px 18px 0 0;
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
     font-size: 18px;
     font-family: "Anek Kannada", "Poppins", sans-serif;
     font-weight: 700;
     color: var(--brand);
   }

   .member-card .role {
     font-size: .82rem;
     color: var(--muted);
     margin-top: 3px;
     font-family: "Anek Kannada", "Poppins", sans-serif;
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
     background: #2b3990;
     border-color: #2b3990;
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
     stroke: #2b3990;
     transition: stroke .2s;
   }

   /* ── Swiper pagination bullets  */
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
     background: #2b3990;
     transform: scale(1.25);
   }

   /* ── Swiper container position  */
   .swiper-outer {
     position: relative;
     padding: 0 28px;
   }

   .mySwiper {
     overflow: hidden;
     padding-bottom: 4px;
     /* slight shadow room */
   }

   /* ───────── Tablet (≤ 992px) ───────── */
  @media (max-width: 992px) {

    .our-team {
      padding: 60px 20px 0;
    }

    .our-team::before {
      font-size: clamp(50px, 12vw, 90px);
      top: 10px;
      opacity: 0.15;
    }


  }


  /* ───────── Mobile (≤ 768px) ───────── */
  @media (max-width: 768px) {

    .our-team {
      padding: 50px 15px 0;
    }

    /* Watermark fix */
    .our-team::before {
      font-size: clamp(35px, 14vw, 60px);
      opacity: 0.2;
      top: 5px;
    }

    /* Heading spacing */
    .section-heading-our-team {
      font-size: 1.4rem;
      margin-bottom: 50px;
    }

  
  }


  /* ───────── Small Mobile (≤ 480px) ───────── */
  @media (max-width: 480px) {

    .our-team::before {
      font-size: 67px;
      opacity: 0.2;

    }

    .section-heading-our-team {
      font-size: 1.2rem;
    }

  }
 </style>

 <section class=" our-team">

   <div class="container position-relative" style="z-index:1;">

     <h2 class="section-heading-our-team" data-aos="fade-up" data-aos-duration="500">The Euphoria Team</h2>

     <div class="swiper-outer" data-aos="fade-up" data-aos-duration="1200">
       <!-- Prev -->
       <div class="swiper-btn-prev d-none" id="teamPrev">
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
                 <img src="assets/img/team/person-2.png" alt="Rajvi Anghan" />
               </div>
               <p class="name">Rajvi Anghan</p>
               <p class="role">Visa Applicant</p>
             </div>
           </div>

           <!-- Card 2 -->
           <div class="swiper-slide">
             <div class="member-card">
               <div class="photo-wrap">
                 <img src="assets/img/team/person-2.png" alt="Krupali Maru" />
               </div>
               <p class="name">Krupali Maru</p>
               <p class="role">BDE</p>
             </div>
           </div>

           <!-- Card 3 -->
           <div class="swiper-slide">
             <div class="member-card">
               <div class="photo-wrap">
                 <img src="assets/img/team/person-2.png" alt="Dharti Mangukiya" />
               </div>
               <p class="name">Dharti Mangukiya</p>
               <p class="role">Creative Designer</p>
             </div>
           </div>

           <!-- Card 4 -->
           <div class="swiper-slide">
             <div class="member-card">
               <div class="photo-wrap">
                 <img src="assets/img/team/person-2.png" alt="Yana Samniwala" />
               </div>
               <p class="name">Yana Samniwala</p>
               <p class="role">Tourism Consultant</p>
             </div>
           </div>

           <!-- Card 5 -->
           <div class="swiper-slide">
             <div class="member-card">
               <div class="photo-wrap">
                 <img src="assets/img/team/person-2.png" alt="Janvi Goyani" />
               </div>
               <p class="name">Janvi Goyani</p>
               <p class="role">BDE</p>
             </div>
           </div>

           <!-- Card 6 (bonus) -->
           <div class="swiper-slide">
             <div class="member-card">
               <div class="photo-wrap">
                 <img src="assets/img/team/person-2.png" alt="Priya Shah" />
               </div>
               <p class="name">Priya Shah</p>
               <p class="role">Marketing Lead</p>
             </div>
           </div>

           <!-- Card 7 (bonus) -->
           <div class="swiper-slide">
             <div class="member-card">
               <div class="photo-wrap">
                 <img src="assets/img/team/person-2.png" alt="Minal Desai" />
               </div>
               <p class="name">Minal Desai</p>
               <p class="role">HR Manager</p>
             </div>
           </div>

         </div><!-- /.swiper-wrapper -->
       </div><!-- /.mySwiper -->

       <!-- Next -->
       <div class="swiper-btn-next d-none" id="teamNext">
         <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
           <path d="M9 18L15 12L9 6" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
         </svg>
       </div>
     </div><!-- /.swiper-outer -->

     <!-- Pagination outside the swiper-outer so it sits below -->
     <div class="swiper-pagination" id="teamPagination" data-aos="fade-down" data-aos-duration="800"></div>


   </div>

 </section>

 <style>
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
     font-size: clamp(60px, 10vw, 145px);
     font-weight: 700;
     color: #f0c0c8;
     white-space: nowrap;
     pointer-events: none;
     z-index: 0;
     opacity: 0.2;
     letter-spacing: 2px;
   }

   .section-heading-focus {
     position: relative;
     z-index: 1;
     color: #25356f;
     font-size: clamp(1.6rem, 3vw, 2.2rem);
     font-weight: 700;
     text-align: center;
     margin-bottom: 50px;
   }

   .tagline-focus {
     color: #1a3a6b;
     font-style: italic;
     font-size: 1.15rem;
     margin-bottom: 40px;
   }

   .card-option {
     display: flex;
     align-items: center;
     gap: 16px;
     font-family:  "Poppins", sans-serif;
     padding: 22px 28px;
     background: #ffffff;
     border: 1.5px solid #d6dce8;
     border-radius: 12px;
     cursor: pointer;
     transition: all 0.25s ease;
     text-decoration: none;
     color: #000;
     font-size: 22px;
     font-weight: 400;
     margin-bottom: 20px;
   }

   .card-option:hover {
    border-color: #fff;
    background: #1a3a6b;
    color: #fff;
    font-weight: 400;
    font-family: "Poppins", sans-serif;
    box-shadow: 0 4px 16px rgba(26, 58, 107, 0.1);
   }
   .card-option:hover .focus-area-icon{
      filter: brightness(0) invert(1);
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
 

   /* Mobile devices (up to 576px) */
  @media (max-width: 576px) {

    .focus-area {
      padding: 60px 0 20px;
    }

    .focus-area::before {
      font-size: 60px;
      top: 20px;
      opacity: 0.2;
    }

    .section-heading-focus {
      font-size: 1.4rem;
      margin-bottom: 25px;
    }

    .tagline-focus {
      font-size: 0.95rem;
      margin-bottom: 25px;
      padding: 0 10px;
    }

    .card-option {
      padding: 16px 18px;
      font-size: 0.9rem;
      border-radius: 10px;
      gap: 12px;
    }

    .icon-svg {
      width: 28px;
      height: 28px;
    }

    .bottom-tagline {
      font-size: 0.9rem;
      padding: 0 10px;
    }
  }
 </style>

 <section class="focus-area">

   <div class="container position-relative" style="z-index:1;">

     <h2 class="section-heading-focus" data-aos="fade-up" data-aos-duration="600">Who We Serve</h2>

     <!-- Top tagline -->
     <div class="text-center tagline-focus" data-aos="fade-up" data-aos-duration="800" style="font-size: 23px; font-family: 'Anek Kannada', 'Poppins', sans-serif;">
       <em>Serving Aspirations Across Borders and Life Stages.</em>
     </div>

     <!-- Grid of cards -->
     <div class="row">
       <!-- Row 1 -->
       <div class="col-12 col-md-6" data-aos="fade-up" data-aos-duration="800">
         <a href="#" class="card-option active">
           <img src="assets/img/icon/focus-area-icon-1.png" alt="Individual investors and families" class="focus-area-icon">
           Individual investors and families
         </a>
       </div>

       <div class="col-12 col-md-6" data-aos="fade-up" data-aos-duration="800">
         <a href="#" class="card-option">
           <img src="assets/img/icon/focus-area-icon-2.png" alt="High-Net-Worth Individuals" class="focus-area-icon">
           NRIs and High-Net-Worth Individuals (HNIs)
         </a>
       </div>

       <!-- Row 2 -->
       <div class="col-12 col-md-6" data-aos="fade-out" data-aos-duration="1000">
         <a href="#" class="card-option">
           <img src="assets/img/icon/focus-area-icon-3.png" alt="Entrepreneurs and startups" class="focus-area-icon">
           Entrepreneurs and startups
         </a>
       </div>

       <div class="col-12 col-md-6" data-aos="fade-out" data-aos-duration="1000">
         <a href="#" class="card-option">
           <img src="assets/img/icon/focus-area-icon-4.png" alt="SMEs and corporate organisations" class="focus-area-icon">
           SMEs and corporate organisations
         </a>
       </div>

       <!-- Row 3 -->
       <div class="col-12 col-md-6" data-aos="fade-down" data-aos-duration="800">
         <a href="#" class="card-option">
           <img src="assets/img/icon/focus-area-icon-5.png" alt="Global travellers and working professionals" class="focus-area-icon">
           Global travellers and working professionals
         </a>
       </div>

       <div class="col-12 col-md-6" data-aos="fade-down" data-aos-duration="800">
         <a href="#" class="card-option">
           <img src="assets/img/icon/focus-area-icon-6.png" alt="Clients Seeking Global Advisory Solutions" class="focus-area-icon">
           Clients Seeking Global Advisory Solutions
         </a>
       </div>
     </div>

     <!-- Bottom tagline -->
     <div class="text-center bottom-tagline mt-2" data-aos="fade-up" data-aos-duration="800" style="font-size: 23px; font-family: 'Anek Kannada', 'Poppins', sans-serif;">
       <em>No matter where you are today, we help you move forward with purpose and protection.</em>
     </div>

   </div>

 </section>

 <style>
   /* Section */
   .testimonial {
     position: relative;
     padding: 70px 0 0px;
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
     font-size: clamp(60px, 10vw, 115px);
     font-weight: 700;
     color: #f0c0c8;
     white-space: nowrap;
     pointer-events: none;
     z-index: 0;
     opacity: 0.2;
     letter-spacing: 2px;
   }

   .section-heading-testimonial {
     position: relative;
     z-index: 1;
     color: #25356f;
     font-size: clamp(1.6rem, 3vw, 35.6px);
     font-weight: 700;
     text-align: center;
     margin-bottom: 100px;
   }

   /* Card */
   .testimonial-card {
     background: #fff;
     border-radius: 16px;
     padding: 36px 28px 28px;
     border: 1px solid #eaedf3;
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
     margin-bottom: 14px;
     display: block;
   }

   /* Quote text */
   .testimonial-text {
     font-size: 16px;
     color: #666666;
     font-family: "Poppins", sans-serif;
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
     font-size: 18px;
     color: #1a2340;
     font-family: "Anek Kannada", "Poppins", sans-serif;
     margin-bottom: 2px;
   }

   .author-role {
     font-size: 14px;
     color: #666666;
     font-family: "Anek Kannada", "Poppins", sans-serif;
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

   .swiper-btn-prev {
     left: 0px;
   }

   .swiper-btn-next {
     right: 0px;
   }

   /* Mobile (≤576px) */
  @media (max-width: 576px) {

    .testimonial {
      padding: 50px 0 10px;
    }

    /* Watermark fix */
    .testimonial::before {
      font-size: 55px;
      top: 16px;
      opacity: 0.2;
    }

    /* Heading */
    .section-heading-testimonial {
      font-size: 1.4rem;
      margin-bottom: 40px;
      padding: 0 10px;
    }

    /* Card */
    .testimonial-card {
      padding: 22px 16px;
      border-radius: 12px;
      min-height: auto;
    }

    .quote-icon {
      font-size: 36px;
      margin-bottom: 10px;
    }

    .testimonial-text {
      font-size: 13.5px;
      line-height: 1.6;
      margin-bottom: 16px;
    }

    /* Author */
    .testimonial-author {
      gap: 10px;
      padding-top: 12px;
    }

    .testimonial-author img {
      width: 40px;
      height: 40px;
    }

    .author-name {
      font-size: 13.5px;
    }

    .author-role {
      font-size: 11px;
    }

    /* Pagination */
    .swiper-pagination {
      margin-top: 20px;
      margin-bottom: 10px;
    }
  }

  .testimonialSwiper .swiper-slide {
    transition: transform 0.4s ease;
  }

  /* 1st, 3rd, 5th → slightly up */
  .testimonialSwiper .swiper-slide:nth-child(odd) {
    transform: translateY(-20px);
  }

  /* 2nd, 4th, 6th → slightly down */
  .testimonialSwiper .swiper-slide:nth-child(even) {
    transform: translateY(20px);
  }
  .swiper-wrapper{
    padding: 30px;
  }
</style>

 <section class="container py-5">

   <div class="testimonial position-relative" style="z-index:1;">

     <h2 class="section-heading-testimonial" data-aos="fade-up" data-aos-duration="600">What Our Clients Say</h2>

     <!-- Swiper -->
     <div class="swiper-outer">
       <!-- Prev -->
       <div class="swiper-btn-prev" id="prevBtn">
         <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
           <path d="M15 18L9 12L15 6" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
         </svg>
       </div>

       <div class="swiper testimonialSwiper">
         <div class="swiper-wrapper">

           <!-- Slide 1 -->
           <div class="swiper-slide">
             <div class="testimonial-card">
               <div>
                 <span class="quote-icon"><img src="assets/img/icon/quote-icon.png" alt=""></span>
                 <p class="testimonial-text">We appreciated the structured approach and ethical guidance provided by
                   Euphoria Group. They helped us identify the right property aligned with our long-term goals.</p>
               </div>
               <div class="testimonial-author">
                 <img src="assets/img/team/person-1.png" alt="Karan Malhotra" />
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
                 <span class="quote-icon"><img src="assets/img/icon/quote-icon.png" alt=""></span>
                 <p class="testimonial-text">Euphoria Group made the entire process seamless and stress-free. Their team
                   was responsive, knowledgeable, and truly had our best interests at heart throughout.</p>
               </div>
               <div class="testimonial-author">
                 <img src="assets/img/team/person-2.png" alt="Priya Sharma" />
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
                 <span class="quote-icon"><img src="assets/img/icon/quote-icon.png" alt=""></span>
                 <p class="testimonial-text">From site visits to final paperwork, every step was handled professionally.
                   I wouldn't trust anyone else for real estate guidance. Truly exceptional service.</p>
               </div>
               <div class="testimonial-author">
                 <img src="assets/img/team/person-1.png" alt="Arjun Mehta" />
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
                 <span class="quote-icon"><img src="assets/img/icon/quote-icon.png" alt=""></span>
                 <p class="testimonial-text">Their market knowledge is unparalleled. They found us the perfect home
                   within our budget and timeline. Highly recommend Euphoria Group to anyone searching for property.</p>
               </div>
               <div class="testimonial-author">
                 <img src="assets/img/team/person-2.png" alt="Neha Kapoor" />
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
                 <span class="quote-icon"><img src="assets/img/icon/quote-icon.png" alt=""></span>
                 <p class="testimonial-text">We were first-time buyers and Euphoria Group guided us with patience and
                   clarity. Their transparent advice gave us confidence throughout the entire buying journey.</p>
               </div>
               <div class="testimonial-author">
                 <img src="assets/img/team/person-1.png" alt="Rohit Jain" />
                 <div>
                   <div class="author-name">Rohit Jain</div>
                   <div class="author-role">Software Engineer</div>
                 </div>
               </div>
             </div>
           </div>

         </div><!-- /swiper-wrapper -->

       </div>

       <div class="swiper-btn-next" id="nextBtn">
         <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
           <path d="M9 18L15 12L9 6" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
         </svg>
       </div>
     </div><!-- /.swiper-outer -->

     <!-- Pagination outside the swiper-outer so it sits below -->
     <div class="swiper-pagination" id="testimonialPagination" data-aos="fade-down" data-aos-duration="800"></div>

   </div>

 </section>

 <?php
include_once('elements/faqs.php');
include_once('elements/footer.php');
?>