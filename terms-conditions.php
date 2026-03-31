<?php
include_once ('elements/header.php');
?>

<style>
    .hero-section {
        position: relative;
        height: 50vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        overflow: hidden;
        margin-top: 120px;
    }

    .hero-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: brightness(0.75);
    }

    img, svg {
        vertical-align: middle;
    }

    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.6));
        backdrop-filter: blur(2px);
    }

    .hero-blur {
        position: absolute;
        width: 250px;
        height: 250px;
        background: var(--red-blur);
        filter: blur(90px);
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1;
    }

    .hero-content {
        position: relative;
        z-index: 2;
    }

    .hero-title {
        font-size: clamp(28px, 5vw, 48px);
        font-weight: 700;
        color: var(--euphoria-blue);
    }

    .hero-subtitle {
        font-size: 16px;
        color: var(--text-dark);
        margin-top: 10px;
    }

    @media(max-width:768px){
        .hero-section{
            height:60vh;
        }
        .hero-subtitle{
            font-size:14px;
        }
    }
</style>
<!-- Hero Section -->
<section class="hero-section">

    <!-- Background Image -->
    <img src="https://picsum.photos/1920/800?business" class="hero-bg" alt="Corporate">

    <!-- Overlay -->
    <div class="hero-overlay"></div>

    <!-- Blur effect -->
    <div class="hero-blur"></div>

    <!-- Content -->
    <div class="hero-content container">
        <h1 class="hero-title animate__animated animate__fadeInDown">
            Terms & Conditions
        </h1>
        <p class="hero-subtitle animate__animated animate__fadeInUp">
            Welcome to the Euphoria Group
        </p>
    </div>

</section>

<style>
  /* Section */
  .terms-condition-section {
      padding: 80px 0;
      background: #ffffff;
  }

  /* Container Width */
  .terms-condition-wrapper {
      max-width: 950px;
      margin: auto;
  }

  /* Intro Text */
  .terms-condition-intro {
      font-size: 14px;
      color: var(--text-light);
      line-height: 1.7;
      margin-bottom: 25px;
  }

  /* Headings */
  .terms-condition-heading {
      font-size: 18px;
      font-weight: 600;
      color: #000;
      margin-top: 25px;
      margin-bottom: 10px;
  }

  /* Paragraph */
  .terms-condition-text {
      font-size: 14px;
      color: var(--text-light);
      line-height: 1.7;
      margin-bottom: 15px;
  }

  /* Bullet List */
  .terms-condition-list {
      list-style: none;
      padding-left: 0;
      margin-bottom: 20px;
  }

  /* List Items */
  .terms-condition-list li {
      font-size: 14px;
      color: #000;
      margin-bottom: 10px;
      padding-left: 22px;
      position: relative;
  }

  /* Blue Dot */
  .terms-condition-list li::before {
      content: "";
      width: 8px;
      height: 8px;
      background: var(--euphoria-blue);
      border-radius: 50%;
      position: absolute;
      left: 0;
      top: 7px;
  }

  /* Responsive */
  @media (max-width: 576px) {
      .terms-condition-heading {
          font-size: 16px;
      }

      .terms-condition-text,
      .terms-condition-intro,
      .terms-condition-list li {
          font-size: 13px;
      }
  }
</style>
<section class="terms-condition-section">
  <div class="container">
    <div class="terms-condition-wrapper">

        <!-- Intro -->
        <p class="terms-condition-intro">
            By accessing or using our website, services, or any associated platforms, you agree to comply with and be bound by the following Terms & Conditions. Please read them carefully.
        </p>

        <!-- Section 1 -->
        <h5 class="terms-condition-heading">1. Acceptance of Terms</h5>
        <p class="terms-condition-text">
            By visiting our website or availing any services offered by The Euphoria Group, you confirm that you have read, understood, and agreed to these Terms & Conditions. If you do not agree, please discontinue use of our website and services.
        </p>

        <!-- Section 2 -->
        <h5 class="terms-condition-heading">2. About The Euphoria Group</h5>
        <p class="terms-condition-text">
            The Euphoria Group is a professional service-based organisation operating in India and overseas, providing a wide range of consultancy and business services, including but not limited to:
        </p>

        <ul class="terms-condition-list">
            <li>Overseas Business Services & International Opportunities</li>
            <li>Inbound & Outbound Travel Service</li>
            <li>Global Visa & Immigration Consultancy</li>
            <li>Real Estate Investments</li>
            <li>Stock Market Opportunities</li>
            <li>All Types Of Tailored Insurances</li>
            <li>Expansion & Support</li>
            <li>Digital Marketing & Online Growth Solutions</li>
            <li>Other related consultancy services</li>
        </ul>

        <p class="terms-condition-text">
            All services are provided subject to availability, eligibility, and compliance with applicable local, national, and international laws.
        </p>

        <!-- Section 3 -->
        <h5 class="terms-condition-heading">3. Eligibility: To use our services, you must</h5>
        <p class="terms-condition-text">
            Be at least 18 years of age. Be legally capable of entering into binding agreements. Provide accurate, complete, and lawful information.
        </p>

        <!-- Section 4 -->
        <h5 class="terms-condition-heading">4. Use of Website</h5>
        <p class="terms-condition-text">You agree not to:</p>

        <ul class="terms-condition-list">
            <li>Misuse or disrupt the website or services.</li>
            <li>Attempt unauthorised access to systems or data.</li>
            <li>Upload false, misleading, or illegal information.</li>
            <li>Copy, reproduce, or distribute website content without written permission. Violation may result in suspension or termination of access.</li>
        </ul>

        <!-- Section 5 -->
        <h5 class="terms-condition-heading">5. Overseas & International Services</h5>

        <ul class="terms-condition-list">
            <li>Overseas business, visa, travel, and international consultancy services are subject to foreign laws, embassy regulations, and international authorities.</li>
            <li>The Euphoria Group acts as a consultant and facilitator, not a guarantor of approvals, visas, licenses, or overseas business success.</li>
            <li>Final decisions rest with embassies, governments, foreign institutions, or regulatory bodies.</li>
            <li>Processing timelines may vary due to international procedures beyond our control.</li>
        </ul>

        <!-- Section 6 -->
        <h5 class="terms-condition-heading">6. Services & Payments</h5>

        <ul class="terms-condition-list">
            <li>Service details, scope, pricing, and timelines will be communicated before confirmation.</li>
            <li>Payments must be made as per the agreed terms.</li>
            <li>Fees once paid are non-refundable, unless explicitly stated in writing.</li>
            <li>We are not responsible for delays or rejections caused by third-party authorities or incomplete information provided by the client.</li>
            <li>Prices are dynamic and subject to change depending on market fluctuations, availability, and service timing.</li>
        </ul>

        <!-- Section 7 -->
        <h5 class="terms-condition-heading">7. Cancellations & Refunds</h5>

        <ul class="terms-condition-list">
            <li>Cancellation and refund policies differ by service and will be communicated at the time of booking.</li>
            <li>If applicable, refunds will be processed after deduction of administrative or service charges.</li>
            <li>Refund timelines depend on banks, payment gateways, and international channels.</li>
        </ul>

        <!-- Section 8 -->
        <h5 class="terms-condition-heading">8. Intellectual Property</h5>
        <p class="terms-condition-text">
            All content, trademarks, logos, designs, text, and media on this website are the exclusive property of The Euphoria Group. Unauthorised use, reproduction, or distribution is strictly prohibited.
        </p>

        <!-- Section 9 -->
        <h5 class="terms-condition-heading">9. Third-Party Services & Links</h5>
        <p class="terms-condition-text">
            Our website may include links or references to third-party websites, service providers, embassies, airlines, or international partners.
        </p>
        <p class="terms-condition-text">
            The Euphoria Group holds no responsibility for their content, policies, decisions, or outcomes.
        </p>

        <!-- Section 10 -->
        <h5 class="terms-condition-heading">10. Limitation of Liability</h5>
        <p class="terms-condition-text">
            The Euphoria Group shall not be liable for visa or application rejections, business losses, delays, or missed opportunities; indirect, incidental, or consequential damages; or acts or decisions of foreign governments or authorities.
        </p>
        <p class="terms-condition-text">
            Our maximum liability, if any, shall not exceed the amount paid for the specific service.
        </p>

        <!-- Section 11 -->
        <h5 class="terms-condition-heading">11. Privacy & Data Protection</h5>
        <p class="terms-condition-text">
            Client information is handled as per our Privacy Policy. By using our services, you consent to the collection, storage, and use of your data for service-related purposes.
        </p>

        <!-- Section 12 -->
        <h5 class="terms-condition-heading">12. Modifications</h5>
        <p class="terms-condition-text">
            We reserve the right to update or modify these Terms & Conditions at any time without prior notice. Continued use of our services indicates acceptance of revised terms.
        </p>

        <!-- Section 13 -->
        <h5 class="terms-condition-heading">13. Governing Law & Jurisdiction</h5>
        <p class="terms-condition-text">
            These Terms & Conditions shall be governed by and interpreted in accordance with the laws of India. Any disputes shall be subject to the jurisdiction of the Indian courts.
        </p>

        <!-- Section 14 -->
        <h5 class="terms-condition-heading">14. Contact Information</h5>
        <p class="terms-condition-text">
            For questions, clarifications, or legal concerns regarding these Terms & Conditions, please contact The Euphoria Group through official communication channels listed on our website.
        </p>

        <!-- Section 15 -->
        <h5 class="terms-condition-heading">15. How We Use Your Information</h5>

        <ul class="terms-condition-list">
            <li>To provide and manage our services.</li>
            <li>To convey updates, offers, or service-related information.</li>
            <li>For legal, regulatory, and internal record-keeping purposes.</li>
            <li>To enhance website functionality and user experience.</li>
        </ul>

        <!-- Data Protection -->
        <h6 class="terms-condition-heading">Data protection:</h6>

        <ul class="terms-condition-list">
            <li>
                We implement appropriate security measures to protect your data. Your information is never sold or shared with unauthorised third parties, except where required by law or service providers involved in your request.
            </li>
            <li>
                By using our website and services, you consent to the collection and use of your information as outlined in this policy.
            </li>
        </ul>

        <!-- Refund Policy -->
        <h5 class="terms-condition-heading">Refund & Cancellation Policy</h5>

        <ul class="terms-condition-list">
            <li>At The Euphoria Group, we maintain transparency in our payment and service process.</li>
        </ul>

        <!-- Cancellations -->
        <h6 class="terms-condition-heading">Cancellations</h6>

        <ul class="terms-condition-list">
            <li>Cancellation requests must be made in writing.</li>
            <li>Once a service process has started, cancellations may not be accepted.</li>
            <li>Cancellation policies vary by service type (travel, visa, overseas business, digital services).</li>
        </ul>

        <!-- Refunds -->
        <h6 class="terms-condition-heading">Refunds</h6>

        <ul class="terms-condition-list">
            <li>All payments are non-refundable, unless explicitly stated in writing.</li>
            <li>Refunds, if applicable, will be processed after deducting administrative, processing, or service charges.</li>
            <li>No refunds will be provided for delays or rejections caused by embassies, government bodies, or third-party authorities.</li>
            <li>Refund timelines depend on banks, payment gateways, and international channels.</li>
        </ul>

        <!-- Website Disclaimer -->
        <h5 class="terms-condition-heading">Website Disclaimer</h5>

        <ul class="terms-condition-list">
            <li>The information provided on this website is for general informational purposes only.</li>
            <li>The Euphoria Group makes no warranties regarding the accuracy, completeness, or reliability of the content.</li>
            <li>Any action taken based on the information on this website is strictly at the user’s own risk.</li>
            <li>We are not liable for any losses or damages arising from the use of this website or reliance on its content.</li>
            <li>External links are provided for convenience; we do not control or endorse their content or policies.</li>
            <li>
                Before making any final decision, customers are strongly advised to verify all information provided on this website independently.
                We strive to ensure accurate and up-to-date details; however, the responsibility to confirm correctness, eligibility,
                and suitability of any service, opportunity, or content rests solely with the customer.
            </li>
        </ul>

        <!-- Overseas Business Disclaimer -->
        <h5 class="terms-condition-heading">Overseas Business Disclaimer</h5>

        <ul class="terms-condition-list">
            <li>The Euphoria Group provides overseas business, international consultancy, and global opportunity services strictly on an advisory and facilitation basis.</li>
            <li>We do not guarantee approvals, registrations, licenses, visas, profits, business success, or outcomes in any foreign country.</li>
            <li>Overseas business processes are governed by international laws, government policies, and regulatory authorities, which may change without prior notice.</li>
            <li>Final decisions are taken solely by foreign governments, regulatory bodies, embassies, or institutions.</li>
            <li>Timelines, approvals, and outcomes may vary due to external factors beyond our control.</li>
            <li>Clients are advised to conduct independent due diligence before making any overseas investment or business decision.</li>
            <li>The Euphoria Group shall not be held responsible for losses, delays, rejections, or changes arising from international regulations or third-party decisions.</li>
        </ul>

        <!-- Tours & Travel Disclaimer -->
        <h5 class="terms-condition-heading">Tours & Travel Disclaimer</h5>

        <ul class="terms-condition-list">
            <li>
                All tour packages, travel arrangements, prices, itineraries, inclusions, and schedules are subject to availability and may change without prior notice due to circumstances beyond our control, including weather conditions, airline schedules, government regulations, visa approvals, natural calamities, or operational constraints.
            </li>
            <li>We act only as a facilitator between customers and third-party service providers such as airlines, hotels, transport operators, and visa authorities.</li>
            <li>We are not responsible for any delays, cancellations, losses, injuries, accidents, additional expenses, or inconveniences caused by these third parties.</li>
            <li>Visa approval is solely at the discretion of the respective embassy or consulate. We do not guarantee visa approval, processing time, or outcome.</li>
            <li>Travellers are responsible for ensuring that they possess valid travel documents, passports, visas, and health certificates and comply with immigration and customs regulations.</li>
            <li>By booking with us, the traveller agrees to these terms and conditions and accepts full responsibility for their travel decisions.</li>
        </ul>

        <!-- Wealth & Asset Solutions Disclaimer -->
        <h5 class="terms-condition-heading">Wealth & Asset Solutions Disclaimer</h5>

        <ul class="terms-condition-list">
            <li>The information and services provided under Wealth & Asset Solutions are for general informational and advisory purposes only and do not constitute financial, investment, legal, or tax advice.</li>
            <li>All investments in markets are subject to market risks, economic conditions, and individual financial circumstances. Past performance is not indicative of future results.</li>
            <li>Returns on investments are not guaranteed, and the value of assets may fluctuate due to market movements, regulatory changes, or other external factors. Clients are advised to conduct their own due diligence and consult with qualified financial, legal, or tax professionals before making any investment decisions.</li>
            <li>We serve as brokers and consultants. We do not guarantee profits, returns, or capital protection unless specifically stated in a written agreement. All services are provided in good faith, using the information available at the time of consultation or brokerage.</li>
            <li>We do not provide investment, share purchase, or financial market advisory services.</li>
            <li>
                You acknowledge that you do not rely on us for investment, tax, legal, or accounting advice.
            </li>
        </ul>
    </div>
  </div>
</section>

<?php
include_once ('elements/footer.php');
?>