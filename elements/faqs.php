<!-- FAQ SECTION -->
<style>
  .faq-section {
    padding: 70px 0 80px;
    background: var(--bg-light);
    position: relative;
    overflow: hidden;
  }

  /* Big watermark "FAQ" behind heading */
  .faq-watermark {
    position: absolute;
    top: 20px;
    left: -8px;
    font-family: 'Playfair Display', serif;
    font-size: clamp(80px, 16vw, 160px);
    font-weight: 700;
    color: rgba(37, 53, 111, 0.07);
    line-height: 1;
    pointer-events: none;
    white-space: nowrap;
    z-index: 0;
  }

  /* ── HEADING ── */
  .faq-heading {
    font-family: 'Playfair Display', serif;
    font-size: clamp(1.7rem, 4vw, 2.4rem);
    font-weight: 700;
    color: var(--euphoria-blue);
    line-height: 1.22;
    position: relative;
    z-index: 1;
  }

  /* ── STILL HAVE QUESTIONS CARD ── */
  .faq-cta-card {
    background: #fff;
    border: 1px solid var(--card-border);
    border-radius: 12px;
    padding: 28px 28px 28px 32px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    flex-wrap: wrap;
    box-shadow: 0 2px 16px rgba(37,53,111,0.06);
    position: relative;
    z-index: 1;
  }

  .faq-cta-card h5 {
    font-family: 'Playfair Display', serif;
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--euphoria-blue);
    margin-bottom: 8px;
  }

  .faq-cta-card p {
    font-size: 0.86rem;
    color: #666;
    margin: 0;
    line-height: 1.6;
    max-width: 420px;
  }

  .btn-send-email {
    background: var(--euphoria-blue);
    color: #fff;
    border: none;
    border-radius: 6px;
    padding: 11px 22px;
    font-size: 0.88rem;
    font-weight: 700;
    white-space: nowrap;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: background 0.25s, transform 0.2s;
    flex-shrink: 0;
  }

  .btn-send-email:hover {
    background: #1a2a5e;
    color: #fff;
    transform: scale(1.03);
  }

  .btn-send-email i {
    font-size: 0.95rem;
  }

  /* ── ACCORDION ── */
  .faq-accordion {
    position: relative;
    z-index: 1;
  }

  .accordion-item {
    background: #fff;
    border: 1px solid var(--card-border) !important;
    border-radius: 10px !important;
    margin-bottom: 14px;
    overflow: hidden;
    box-shadow: 0 2px 10px rgba(37,53,111,0.05);
    transition: box-shadow 0.3s;
  }

  .accordion-item:hover {
    box-shadow: 0 4px 20px rgba(37,53,111,0.10);
  }

  /* Remove Bootstrap's default top border on non-first items */
  .accordion-item + .accordion-item {
    border-top: 1px solid var(--card-border) !important;
  }

  .accordion-button {
    font-family: 'Mulish', sans-serif;
    font-size: 0.97rem;
    font-weight: 700;
    color: var(--euphoria-blue);
    background: #fff !important;
    padding: 20px 24px;
    box-shadow: none !important;
    border-radius: 10px !important;
  }

  .accordion-button:not(.collapsed) {
    color: var(--euphoria-blue);
    background: #fff !important;
    box-shadow: none !important;
  }

  /* Custom chevron icon */
  .accordion-button::after {
    display: none; /* hide default Bootstrap arrow */
  }

  .acc-chevron {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background: var(--bg-light);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    margin-left: auto;
    transition: background 0.25s, transform 0.3s;
  }

  .acc-chevron i {
    font-size: 0.9rem;
    color: var(--euphoria-blue);
    transition: transform 0.3s;
  }

  .accordion-button:not(.collapsed) .acc-chevron {
    background: var(--euphoria-blue);
  }

  .accordion-button:not(.collapsed) .acc-chevron i {
    color: #fff;
    transform: rotate(180deg);
  }

  .accordion-body {
    padding: 0 24px 20px;
    font-size: 0.87rem;
    color: #666;
    line-height: 1.75;
    border-top: 1px solid rgba(37,53,111,0.07);
    margin: 0 24px;
    padding-left: 0;
    padding-right: 0;
  }

  /* ── SCROLL REVEAL ── */
  .reveal {
    opacity: 0;
    transform: translateY(28px);
    transition: opacity 0.65s ease, transform 0.65s ease;
  }
  .reveal.visible {
    opacity: 1;
    transform: none;
  }
  .delay-1 { transition-delay: 0.08s; }
  .delay-2 { transition-delay: 0.16s; }
  .delay-3 { transition-delay: 0.24s; }
  .delay-4 { transition-delay: 0.32s; }
  .delay-5 { transition-delay: 0.40s; }
  .delay-6 { transition-delay: 0.48s; }

  /* ── RESPONSIVE ── */
  @media (max-width: 576px) {
    .faq-cta-card {
      flex-direction: column;
      align-items: flex-start;
      padding: 22px 20px;
    }
    .btn-send-email {
      width: 100%;
      justify-content: center;
    }
  }
</style>
<section class="faq-section" id="faq">

  <!-- Watermark -->
  <div class="faq-watermark">FAQ</div>

  <div class="container">

    <!-- TOP ROW: Heading (left) + CTA card (right) -->
    <div class="row align-items-center mb-4 g-4">

      <!-- Heading -->
      <div class="col-lg-5 reveal">
        <h2 class="faq-heading">
          Frequently Asked Questions<br>About Our Services
        </h2>
      </div>

      <!-- Still Have Questions card -->
      <div class="col-lg-7 reveal delay-1">
        <div class="faq-cta-card">
          <div>
            <h5>Still Have Questions?</h5>
            <p>Can't find the answer you're looking for? Send us a message and our team will get back to you shortly.</p>
          </div>
          <a href="mailto:info@corporateservice.com" class="btn-send-email">
            Send an Email <i class="bi bi-arrow-up-right"></i>
          </a>
        </div>
      </div>

    </div><!-- /top row -->

    <!-- ACCORDION -->
    <div class="faq-accordion" id="faqAccordion">

      <!-- Item 1 — open by default -->
      <div class="accordion-item reveal delay-2">
        <h2 class="accordion-header" id="faqH1">
          <button class="accordion-button d-flex align-items-center gap-3"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#faqC1"
                  aria-expanded="true"
                  aria-controls="faqC1">
            Which regions do you operate in?
            <span class="acc-chevron ms-auto"><i class="bi bi-chevron-down"></i></span>
          </button>
        </h2>
        <div id="faqC1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            We have a strong operational presence in India and Dubai (UAE), with global advisory support for international clients.
          </div>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="accordion-item reveal delay-3">
        <h2 class="accordion-header" id="faqH2">
          <button class="accordion-button collapsed d-flex align-items-center gap-3"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#faqC2"
                  aria-expanded="false"
                  aria-controls="faqC2">
            Do you offer end-to-end support for business setup?
            <span class="acc-chevron ms-auto"><i class="bi bi-chevron-down"></i></span>
          </button>
        </h2>
        <div id="faqC2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Yes. We offer complete business setup services including company registration, GST, trade license, bank account opening, and ongoing compliance — all bundled at competitive pricing.
          </div>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="accordion-item reveal delay-4">
        <h2 class="accordion-header" id="faqH3">
          <button class="accordion-button collapsed d-flex align-items-center gap-3"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#faqC3"
                  aria-expanded="false"
                  aria-controls="faqC3">
            How long does company registration take?
            <span class="acc-chevron ms-auto"><i class="bi bi-chevron-down"></i></span>
          </button>
        </h2>
        <div id="faqC3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Typically 7–15 working days depending on the type of entity and document readiness. Our team ensures the process is as fast as possible with minimal back-and-forth.
          </div>
        </div>
      </div>

      <!-- Item 4 -->
      <div class="accordion-item reveal delay-5">
        <h2 class="accordion-header" id="faqH4">
          <button class="accordion-button collapsed d-flex align-items-center gap-3"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#faqC4"
                  aria-expanded="false"
                  aria-controls="faqC4">
            Do you handle ongoing compliance after registration?
            <span class="acc-chevron ms-auto"><i class="bi bi-chevron-down"></i></span>
          </button>
        </h2>
        <div id="faqC4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Absolutely. We offer annual compliance retainer packages covering ROC filings, board meeting support, statutory registers, GST, TDS, income tax filings and more — so you never miss a deadline.
          </div>
        </div>
      </div>

      <!-- Item 5 -->
      <div class="accordion-item reveal delay-6">
        <h2 class="accordion-header" id="faqH5">
          <button class="accordion-button collapsed d-flex align-items-center gap-3"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#faqC5"
                  aria-expanded="false"
                  aria-controls="faqC5">
            Do you offer services for foreign companies entering India?
            <span class="acc-chevron ms-auto"><i class="bi bi-chevron-down"></i></span>
          </button>
        </h2>
        <div id="faqC5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Yes. We specialise in FDI advisory, liaison office / branch office setup, FEMA compliance, and all RBI/SEBI regulatory requirements for foreign entities establishing operations in India.
          </div>
        </div>
      </div>

    </div><!-- /accordion -->
  </div><!-- /container -->
</section>