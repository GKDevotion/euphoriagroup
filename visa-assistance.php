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
      font-family:  "Poppins";
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
                <div class="visa-content px-md-5 px-3">
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

<style>
    .visa-tab-box{ 
        border-radius:25px;
        padding:60px 40px; 
        position:relative;
        overflow:hidden;
    }
        /* BACK TEXT */
    .visa-tab-box::before{
        content:"Visa Guide";
        position:absolute;
        font-family: "Anek Kannada", "Poppins";
        top: 14px;
        left:50%;
        transform:translateX(-50%);
        font-size:116px;
        font-weight:600;
        color: var(--red-blur);
        z-index:0;
        white-space:nowrap;
    } 
        /* ── COUNTRY SIDEBAR ── */
    .sidebar-title {
        font-size: 18px;
        font-weight: 600;
        letter-spacing: 0%;
        color: #25356F;
        font-family: "Anek Kannada", "Poppins";
        text-transform: uppercase;
        text-align: center;
        padding: .75rem 0 .5rem;
    }
    .country-list {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
        gap: 8px; /* ← adds spacing between items like image 1 */
    }
    .country-list li a {
        display: flex;
        align-items: center;
        gap: 12px;
        border-radius: 5px;
        font-family: "Poppins";
        padding: .75rem 1rem;
        text-decoration: none;
        color: #000;
        border: 1px solid #ddd; /* ← lighter border like image 1 */
        font-weight: 400;
        font-size: 16px;
        transition: background .18s;
    }

    .country-list li a:hover {
        background: #25356F; 
        color: #fff;
        border: 1px solid #F8F9FA;
    }
    .country-list li.active a {
        background: #25356F;
        font-family: "Poppins";
        border-radius: 5px;
        font-weight: 500;
        color: #fff;
        border: 1px solid #25356F;
        position: relative;
    }

        /* ── Arrow icon on active item (↗ like image 1) ── */
    .country-list li.active a::after {
        content: url('assets/img/icon/explore-icon.png');
        margin-left: auto; 
        font-size: 18px;
        color: #fff;
        line-height: 1;
    }

    .flag-img { 
        width: 26px; 
        height: 18px; 
        object-fit: cover; 
        border-radius: 2px; 
    }

        /* ── Wrapper card shadow (like image 1) ── */
    .country-sidebar {
        background: #fff;
        border-radius: 12px;
        padding: 0.5rem 1rem 1rem;
        box-shadow: 0 4px 24px rgba(0, 0, 0, 0.10); /* ← card shadow */
        width: fit-content;
    }
    .visa-nav-tab{
        background: #F8F9FA;
        height: 515px;
        border-radius: 15px;
    }
    .country-title {
        font-family: "Anek Kannada", "Poppins";
        font-size: 55px;
        font-weight: 500;
        color: #2d3e70;
        margin-bottom: .2rem;
    }
    /* CSS */
    .hr-bullet {
        position: relative;
        border: none;
        border-top: 1px solid #CC2831;
        margin: 1rem 0 2rem 0;
        overflow: visible;
        opacity: 80%;
    }
    .hr-bullet::after {
        content: '';
        position: absolute;
        right: 0;
        top: 50%;
        transform: translateY(-50%);
        width: 15px;
        height: 15px; 
        background-color: #CC2831; /* match your theme */
        border-radius: 50%;
    } 
    .content-panel { 
        border-radius: 4px;
        background: #fff;
        max-width: 900px;
        margin: 20px auto;
    } 

    .country-desc {
        font-size: 16px;
        font-weight: 400;
        line-height: 32px;
        color: #444;
        font-family: "Poppins";
        margin-bottom: 1rem;
    }

        /* ── KEY CHANGE: checklist + sketch side by side ── */
    .checklist-sketch-row {
        display: flex;
        align-items: center;
        gap: 1.5rem;
    }

    .checklist-col {
        flex: 1 1 55%;
    }

    .sketch-col {
        flex: 0 0 42%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* ── CHECKLIST ── */
    .checklist { 
        list-style: none; 
        padding: 0; 
        margin: 0; 
    }
    .checklist li {
        display: flex;
        gap: .5rem;
        font-size: 16px;
        font-weight: 500;
        font-family: "Poppins";
        color: #333;
        line-height: 1.5;
        margin-bottom: .55rem;     
    }
    .checklist li::before {
        content: url('assets/img/icon/Checke.png');
        color: #c0392b;
        font-weight: 700;
        flex-shrink: 0;
        margin-top: 1px;
    }

        /* ── CITY SKETCH ── */
    .city-sketch {
        width: 100%;
        max-width: 340px;
        opacity: .6;
        filter: grayscale(1);
    }

    /* ── SECTION ── */
    .section-title {
        font-family: "Anek Kannada", "Poppins";
        font-size: 30px;
        color: #1a2550;
        font-weight: 500;
        margin: 1.5rem 0 .6rem;
        border-bottom: 1px solid #e2e5ef;
        padding-bottom: .4rem;
    }
    .section-body {
        font-size: 16px;
        line-height: 1.75;
        font-weight: 400;
        font-family: "Poppins";
        color: #444;
        letter-spacing: 0%;
        margin-bottom: 1rem;
    }

    @media (max-width: 600px) {
        .checklist-sketch-row { flex-direction: column; }
        .sketch-col { order: -1; }
    }
    @media (max-width: 767px) { 
        .visa-tab-box {
            padding: 40px 20px;
            border-radius: 15px; /* Softer corners for mobile */
        }

        /* Adjust watermark positioning for mobile */
        .visa-tab-box::before {
            font-size: 85px;
            top: 10px;
        }

        .about-visa-title.h1 {
            font-size: 1.1rem; /* Smaller heading for mobile */
            margin-bottom: 30px;
            font-family: "Anek Kannada", "Poppins";
        }

    }
</style>

<section>

     <div class="container">
         
        <div class="container-fluid visa-tab-box px-3 px-md-4 pb-5">

            <h2 class="text-center about-visa-title">
                Explore Country Visa Requirements
            </h2>

            <div class="row g-3">
               
                <!-- SIDEBAR -->
                <div class="col-12 col-md-3 visa-nav-tab">
                    <div class="sidebar-wrapper">
                        <div class="sidebar-title">Choose Country</div>
                                <ul class="country-list">
                                    <li class="active">
                                        <a href="javascript:void(0)" data-country="dubai">
                                        <!-- UAE flag via flag-icons CDN alternative using inline SVG placeholder -->
                                        <img class="flag-img" src="https://flagcdn.com/ae.svg" alt="UAE"/><span class="country-tab"> Dubai </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-country="canada">
                                        <img class="flag-img" src="https://flagcdn.com/ca.svg" alt="Canada"/><span class="country-tab">Canada</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-country="australia">
                                        <img class="flag-img" src="https://flagcdn.com/au.svg" alt="Australia"/>
                                        Australia
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-country="usa">
                                        <img class="flag-img" src="https://flagcdn.com/us.svg" alt="United States"/>
                                        United States
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-country="china">
                                        <img class="flag-img" src="https://flagcdn.com/cn.svg" alt="China"/>
                                        China
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-country="uk">
                                        <img class="flag-img" src="https://flagcdn.com/gb.svg" alt="United Kingdom"/>
                                        United Kingdom
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-country="canada">
                                        <img class="flag-img" src="https://flagcdn.com/br.svg" alt="Brazil"/>
                                        Brazil
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" data-country="japan">
                                        <img class="flag-img" src="https://flagcdn.com/jp.svg" alt="Japan"/>
                                        Japan
                                        </a>
                                    </li>
                                </ul>
                    </div>
                </div>

                <!-- MAIN CONTENT -->
                <div class="col-12 col-md-9"> 
                    <div class="content-panel">

                            <!-- Title -->
                            <div style="margin-bottom:1rem;">
                                <h2 class="country-title">Dubai</h2>
                                <!-- HTML -->
                                <hr class="hr-bullet">
                            </div>

                            <!-- Description -->
                            <p class="country-desc">
                                    The United Arab Emirates (UAE), located in the Middle East on the Arabian Peninsula, is a federation of seven emirates known for 
                                    its modern cities, opulent skyscrapers, and diverse cultural attractions. With a population of over 9 million people, it is one of the 
                                    most prosperous and cosmopolitan countries in the region. The capital city of the UAE is Abu Dhabi, known for its impressive skyline, 
                                    cultural institutions, and government buildings, including the Sheikh Zayed Grand Mosque. Another prominent city is Dubai, 
                                    famous for its futuristic architecture, luxury shopping, and iconic landmarks such as the Burj Khalifa, the world's tallest building. 
                                    The UAE's economy is primarily based on oil and gas production, but it has diversified into sectors such as finance, tourism, real 
                                    estate, and aviation. The country is known for its modern infrastructure, business-friendly environment, and strategic location as 
                                    a global transportation hub. The UAE has a diverse population comprising both Emiratis and expatriates from around the world, 
                                    contributing to its cosmopolitan culture. While Arabic is the official language, English is widely spoken, and the country is home 
                                    to people of various ethnicities, religions, and cultures. Despite its economic prosperity, the UAE faces challenges such as 
                                    sustainable development, environmental conservation, and social welfare for its diverse population. Efforts to address these 
                                    challenges and promote economic diversification, social inclusion, and environmental sustainability are ongoing. Overall, 
                                    the UAE is a country of contrasts, blending modernity with tradition, luxury with simplicity, and cultural diversity with a strong 
                                    sense of national identity, making it a fascinating and dynamic destination in the Middle East.
                            </p>

                            <!-- ✅ Checklist + Sketch in same row -->
                            <div class="checklist-sketch-row">
                                <div class="row">

                                        <div class="col-md-3 checklist-col">
                                            <ul class="checklist">
                                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                                            </ul>
                                        </div>

                                        <div class="col-md-5 sketch-col">
                                            <!-- Dubai skyline sketch SVG -->
                                            <img src="assets/img/visa-guide-dubai-bg.png" alt="" style="width: 450px; height: 366px;">
                                        </div>
                                        
                                </div>
                            </div>

                            <!-- Section below -->
                            <h3 class="section-title">What is a Dubai visa?</h3>
                            <p class="section-body">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type 
                                and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
                                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum 
                                passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>

                            <p class="section-body">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type 
                                and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
                                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum 
                                passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>

                    </div>
                </div>

            </div>

        </div>

     </div>

</section>
 
<!-- ══════════════ JS ══════════════ -->
<script>
  (function () {
    const list    = document.getElementById('countryList');
    const items   = list.querySelectorAll('li[data-target]');
    const panels  = document.querySelectorAll('.country-panel');

    function activate(target) {
      // 1. Update sidebar active state
      items.forEach(function(li) {
        li.classList.toggle('active', li.dataset.target === target);
      });

      // 2. Show the matching panel, hide others
      panels.forEach(function(panel) {
        if (panel.id === 'panel-' + target) {
          panel.classList.add('active');
        } else {
          panel.classList.remove('active');
        }
      });
    }

    // 3. Attach click events to each list item
    items.forEach(function(li) {
      li.querySelector('a').addEventListener('click', function() {
        activate(li.dataset.target);
      });
    });
  })();
</script>


 
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
        top: 14px;
        left:50%;
        transform:translateX(-50%);
        font-size:116px;
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
        font-family: "Poppins";
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
        background:#2d3e70;
        color: #fff;
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
        margin-bottom: 80px;
        font-size: 2.2rem !important;
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
            .about-visa-title{
                font-size: 1.2rem !important;
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
                font-size: 52px;
                letter-spacing: 1px;
                top: 28px;
            }
            
            .flag-box {
                font-size: 12px;
            }
        }

        .iti {
            width: 100%;
        }

        .iti__flag-container {
            position: absolute;
        }

        .iti input {
            width: 100%;
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
                          <input type="tel" id="mobile_number" name="mobile_number" class="form-control" placeholder="Mobile Number*">
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