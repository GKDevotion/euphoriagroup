<?php
include_once ('elements/header.php');
?>

<!-- HERO -->
<section class="top-banner-background" style="background-image: url('assets/img/background/building.png');">
    <div>
        <h1 class="mb-0">
             Privacy Policy
        </h1>
        <p class="text-black text-center mt-2">
            Welcome to the Euphoria Group
        </p>
    </div>
</section>

<style>
  /* Section */
  .privacy-policy-section {
      padding: 80px 0;
      background: #ffffff;
  }

  /* Container Width */
  .privacy-policy-wrapper {
      max-width: 950px;
      margin: auto;
  }

  /* Intro Text */
  .privacy-policy-intro {
      font-size: 14px;
      color: var(--text-light);
      line-height: 1.7;
      margin-bottom: 25px;
  }

  /* Headings */
  .privacy-policy-heading {
      font-size: 18px;
      font-weight: 600;
      color: #000;
      margin-top: 25px;
      margin-bottom: 10px;
  }

  /* Paragraph */
  .privacy-policy-text {
      font-size: 14px;
      color: var(--text-light);
      line-height: 1.7;
      margin-bottom: 15px;
  }

  /* Bullet List */
  .privacy-policy-list {
      list-style: none;
      padding-left: 0;
      margin-bottom: 20px;
  }

  /* List Items */
  .privacy-policy-list li {
      font-size: 14px;
      color: #000;
      margin-bottom: 10px;
      padding-left: 22px;
      position: relative;
  }

  /* Blue Dot */
  .privacy-policy-list li::before {
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
      .privacy-policy-heading {
          font-size: 16px;
      }

      .privacy-policy-text,
      .privacy-policy-intro,
      .privacy-policy-list li {
          font-size: 13px;
      }
  }
</style>
<section class="privacy-policy-section">
  <div class="container">
    <div class="privacy-policy-wrapper">

        <!-- Intro -->
        <p class="privacy-policy-intro">
            At The Euphoria Group, we are committed to protecting your privacy and ensuring the safety of all users. This Privacy Policy explains how we collect, use, store, and safeguard personal information when you access our website or use our services in India or overseas.
        </p>

        <!-- Section 1 -->
        <h5 class="privacy-policy-heading">1. Information We Collect</h5>
        <ul class="privacy-policy-list">
            <li>We may collect the following information</li>
            <li>Personal details (name, email address, phone number, postal address)</li>
            <li>Identity documents and supporting information for visa, travel, overseas business, or consultancy services</li>
            <li>Business, professional, and travel-related information</li>
            <li>Payment-related details (processed securely via third-party gateways)</li>
            <li>Website usage data, such as IP address, browser type, cookies, and pages visited</li>
        </ul>

        <!-- Section 3 -->
        <h5 class="privacy-policy-heading">2. How We Use Your Information</h5>
        <ul class="privacy-policy-list">
            <li>We use your information to</li>
            <li>Provide, manage, and improve our services</li>
            <li>Communicate service updates, confirmations, and offers</li>
            <li>Meet legal, regulatory, and contractual obligations</li>
        </ul>

        <!-- Section 5 -->
        <h5 class="privacy-policy-heading">3. Children's Privacy & Child Safety</h5>

        <ul class="privacy-policy-list">
            <li>The Euphoria Group is committed to protecting children's privacy and safety.</li>
            <li>Our website and services are not intended for children under the age of 18.</li>
            <li>We do not knowingly collect, use, or store personal information from minors.</li>
            <li>If we become aware that personal data of a child has been collected without verified parental or guardian consent, we will take immediate steps to delete such information from our records.</li>
        </ul>

        <!-- Section 6 -->
        <h5 class="privacy-policy-heading">4. Information Sharing</h5>

        <ul class="privacy-policy-list">
            <li>We do not sell, trade, or rent personal information.</li>
            <li>Government authorities, embassies, or regulatory bodies, when required</li>
            <li>Fees once paid are non-refundable, unless explicitly stated in writing.</li>
            <li>Trusted service providers involved in delivering requested services</li>
            <li>Legal authorities if mandated by law</li>
        </ul>

    </div>
  </div>
</section>

<?php
include_once ('elements/footer.php');
?>