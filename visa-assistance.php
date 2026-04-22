<?php
include_once ('elements/header.php');
?>

<!-- Hero Section -->
<section class="top-banner-background" style="background-image: url('assets/img/background/Get-visa-assistance.png');">
  <div>
    <h1 class="mb-0 text-center">Get Visa Assistance</h1>
    <p class="text-black text-center mt-2">
      Expert guidance for a smooth and hassle-free visa application process.
    </p>
  </div>
</section>

<!-- Visa Content -->
<style>

  .visa-section {
      padding: 100px 0 50px 0;
  }

  .visa-img {
      max-width: 100%;
      transform: translateX(-50px);
      opacity: 0;
      transition: all 0.8s ease;
  }

  .visa-content {
      transform: translateX(50px);
      opacity: 0;
      transition: all 0.8s ease;
      text-align: justify;
  }

  .show {
      transform: translateX(0);
      opacity: 1;
  }

  .visa-content p {
      color: #666;
      font-family: "Anek Kannada", "Poppins";
      line-height: 1.8;
      font-size: 17px;
  }

  @media (max-width: 768px) {
      .visa-section {
          padding: 40px 0;
          text-align: center;
      }

      .visa-img,
      .visa-content {
          transform: none;
          opacity: 1;
      }
  }
</style>

<section class="visa-section">
    <div class="container">
        <div class="row align-items-center">

            <!-- LEFT IMAGE -->
            <div class="col-lg-5 mb-4 mb-lg-0 text-center">
                <img src="assets/img/visa-approve.png" alt="Visa" class="visa-img img-fluid">
            </div>

            <!-- RIGHT CONTENT -->
            <div class="col-lg-7">
                <div class="visa-content px-5">
                    <p>
                       The Global Visa Assistance services offered by the Euphoria Group are intended to provide thorough, end-to-end support throughout the entire visa application process. We take the time to learn about your travel goals, destination, and needs from the very first individual consultation. Our staff ensures that every stage is managed with clarity, precision, and total transparency by helping with precise documentation preparation, meticulous application filing, and timely submission.
                    </p>

                    <p>
                       The Euphoria Group helps people and businesses confidently navigate complicated visa procedures by having a strong global perspective and extensive knowledge of international visa regulations. We help minimise delays and uncertainties while transforming international travel and mobility plans into a seamless, stress-free experience by concentrating on compliance, accuracy, and strategic guidance.
                    </p>
 
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Visa Submit Form -->
<style>
  /* SECTION */
    .visa-form-section{
        padding: 50px 0 80px 0;
    }

  /* BOX */
  .visa-box{
      background:#f7f8fb;
      border-radius:25px;
      padding:60px 40px;
      border:1px solid #dfe3eb;
      position:relative;
      overflow:hidden;
  }

  /* BACK TEXT */
  .visa-box::before{
      content:"Let's Connect";
      position:absolute;
      font-family: "Anek Kannada", "Poppins";
      top:0px;
      left:50%;
      transform:translateX(-50%);
      font-size:150px;
      font-weight:600;
      color: var(--red-blur);
      z-index:0;
      white-space:nowrap;
  }

  /* TITLE */
  .visa-title{
      position:relative;
      z-index:1;
      font-weight:600;
      color:#2d3e70;
  }

  /* INPUTS */
  .form-control,
  .form-select{
      height:50px;
      border-radius:8px;
      font-family: "Anek Kannada", "Poppins";
      border:1px solid #cfd6e4;
      font-size:14px;
  }

  .form-control:focus,
  .form-select:focus{
      border-color:#2d3e70;
      box-shadow:none;
  }

  /* PHONE GROUP */
  .phone-group{
      display:flex;
      gap:10px;
  }

  .flag-box{
      width:70px;
      border:1px solid #cfd6e4;
      border-radius:8px;
      display:flex;
      align-items:center;
      justify-content:center;
      background:#fff;
  }

  /* BUTTON */
  .btn-submit{
      background:#2d3e70;
      color:#fff;
      padding:12px 30px;
      border-radius:6px;
      font-size:14px;
      transition:0.3s;
  }

  .btn-submit:hover{
      background:#1f2c52;
  }

  /* ANIMATION */
  .fade-up{
      opacity:0;
      transform:translateY(40px);
      transition:0.8s ease;
  }

  .fade-up.show{
      opacity:1;
      transform:translateY(0);
  }
  .about-visa-title {
    color: var(--euphoria-blue);
    font-weight: 600;
    margin-bottom: 50px;
    font-size: 2.5rem !important;
    margin-top: 15px;
    position: relative;
    z-index: 1; 
    width: 100%;
}

  /* RESPONSIVE */
 /* --- Visa Form Mobile Styles --- */

    @media (max-width: 991px) {
        .visa-box {
            padding: 50px 30px;
        }
        
        /* Scale down the massive watermark for tablets */
        .visa-box::before {
            font-size: 80px;
            top: 0;
        }
    }

    @media (max-width: 767px) {
        .visa-form-section {
            padding: 40px 0 60px 0;
        }

        .visa-box {
            padding: 40px 20px;
            border-radius: 15px; /* Softer corners for mobile */
        }

        /* Adjust watermark positioning for mobile */
        .visa-box::before {
            font-size: 60px;
            top: 20px;
        }

        .about-title.h1 {
            font-size: 1.1rem; /* Smaller heading for mobile */
            margin-bottom: 30px;
            font-family: "Anek Kannada", "Poppins";
        }

        /* Stack phone input and flag vertically or adjust gaps */
        .phone-group {
            flex-direction: row; /* Keep them side-by-side but reduce gap */
            gap: 5px;
        }

        .flag-box {
            width: 60px; /* Slimmer flag box */
            flex-shrink: 0;
        }

        /* Center the captcha on mobile */
        .col-12 > div[style*="width:280px"] {
            width: 100% !important;
            max-width: 280px;
            margin: 0 auto;
        }

        /* Make button full width for easier tapping */
        .btn-submit {
            width: 100%;
            padding: 15px;
            font-size: 16px;
        }
    }

    @media (max-width: 480px) {
        .visa-box::before {
            font-size: 35px;
            letter-spacing: 1px;
        }
        
        .flag-box {
            font-size: 12px;
        }
    }
</style>

<section class="visa-form-section about-section">
  
  <div class="container">

      <div class="visa-box fade-up">

          <h2 class="text-center about-visa-title">
              Discuss Your Visa Needs With Us
          </h2>

          <form>
              <div class="row g-4">

                  <div class="col-md-6">
                      <input type="text" class="form-control" placeholder="Full Name*">
                  </div>

                  <div class="col-md-6">
                      <input type="email" class="form-control" placeholder="Email*">
                  </div>

                  <div class="col-md-6">
                      <div class="phone-group">
                          <div class="flag-box">
                              🇮🇳 <i class="bi bi-caret-down-fill ms-1"></i>
                          </div>
                          <input type="text" class="form-control" placeholder="Mobile Number*">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <select class="form-select">
                          <option selected>Destination Country</option>
                          <option>USA</option>
                          <option>Canada</option>
                          <option>UK</option>
                      </select>
                  </div>

                  <div class="col-12">
                      <select class="form-select">
                          <option selected>Purpose of visa</option>
                          <option>Tourist</option>
                          <option>Business</option>
                          <option>Study</option>
                      </select>
                  </div>

                  <!-- Captcha Placeholder -->
                  <div class="col-12">
                      <div style="background:#fff;border:1px solid #ccc;padding:15px;border-radius:5px;width:280px;">
                          <input type="checkbox"> I'm not a robot
                      </div>
                  </div>

                  <div class="col-12">
                      <button class="btn btn-submit">Submit Application</button>
                  </div>

              </div>
          </form>

      </div>

  </div>
</section>

<?php
include_once ('elements/faqs.php');
include_once ('elements/footer.php');
?>