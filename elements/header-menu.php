<style>

  /* ══════════════════════════════════════════
      NAVBAR SHELL
  ══════════════════════════════════════════ */
  .eg-nav {
      position: sticky;
      top: 0;
      z-index: 1000;
      width: 100%;
      background: #fff;
      border-bottom: 1px solid var(--card-border);
      box-shadow: 0 2px 16px rgba(37,53,111,.07);
      height: var(--nav-h);
      display: flex;
      align-items: center;
  }

  .eg-nav-inner {
      width: 100%;
      max-width: 1400px;
      margin: 0 auto;
      padding: 0 28px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      height: 100%;
  }

  /* ══════════════════════════════════════════
      LOGO
  ══════════════════════════════════════════ */
  .eg-logo {
      display: flex;
      align-items: center;
      gap: 0;
      text-decoration: none;
      flex-shrink: 0;
      user-select: none;
  }

  .eg-logo img {
      max-height: 60px
  }

  /* ══════════════════════════════════════════
      DESKTOP NAV LINKS
  ══════════════════════════════════════════ */
  .eg-menu {
      display: flex;
      align-items: center;
      gap: 0;
      list-style: none;
      height: 100%;
  }

  .eg-menu > li {
      position: relative;
      height: 100%;
      display: flex;
      align-items: center;
      margin-top: 20px;
  }

  .eg-menu > li > a,
  .eg-menu > li > button {
      display: flex;
      align-items: center;
      gap: 5px;
      height: 100%;
      padding: 0 16px;
      color: var(--text-dark);
      text-decoration: none;
      background: none;
      border: none;
      cursor: pointer;
      white-space: nowrap;
      position: relative;
      transition: color .2s ease;
  }

  /* Active / hover underline */
  .eg-menu > li > a::after,
  .eg-menu > li > button::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 16px; right: 16px;
      height: 2px;
      background: var(--euphoria-blue);
      border-radius: 1px 1px 0 0;
      transform: scaleX(0);
      transition: transform .25s ease;
  }
  .eg-menu > li:hover > a,
  .eg-menu > li:hover > button,
  .eg-menu > li.eg-active > a,
  .eg-menu > li.eg-active > button {
      color: var(--euphoria-blue);
      font-weight: 600;
  }
  .eg-menu > li:hover > a::after,
  .eg-menu > li:hover > button::after,
  .eg-menu > li.eg-active > a::after,
  .eg-menu > li.eg-active > button::after {
      transform: scaleX(1);
  }

  /* Chevron icon in buttons */
  .eg-chevron {
      width: 14px; height: 14px;
      stroke: currentColor;
      fill: none;
      stroke-width: 2.2;
      stroke-linecap: round;
      stroke-linejoin: round;
      transition: transform .25s ease;
      flex-shrink: 0;
  }
  .eg-menu > li:hover .eg-chevron { transform: rotate(180deg); }

  /* ══════════════════════════════════════════
      MEGA MENU DROPDOWN
  ══════════════════════════════════════════ */
  .eg-mega {
      position: absolute;
      top: calc(var(--nav-h) - 1px);
      left: 50%;
      transform: translateX(-50%) translateY(10px);
      background: #fff;
      border: 1px solid var(--card-border);
      border-radius: 14px;
      padding: 20px;
      min-width: 680px;
      opacity: 0;
      visibility: hidden;
      pointer-events: none;
      transition:
      opacity    .25s ease,
      transform  .25s ease,
      visibility .25s;
      z-index: 200;
  }

  .eg-menu > li:hover .eg-mega {
      opacity: 1;
      visibility: visible;
      pointer-events: auto;
      transform: translateX(-50%) translateY(0);
  }

  /* Mega grid layout */
  .eg-mega-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 0;
  }

  .eg-mega-item {
      padding: 20px 24px;
      border-radius: 0;
      text-decoration: none;
      display: block;
      transition: background .2s ease;
      position: relative;
  }
  .eg-mega-item:hover {
      background: var(--bg-light);
  }

  /* Vertical divider between columns */
  .eg-mega-item:nth-child(odd) {
      border-right: 1px solid var(--card-border);
  }
  /* Horizontal divider between rows */
  .eg-mega-item:nth-child(1),
  .eg-mega-item:nth-child(2) {
      border-bottom: 1px solid var(--card-border);
  }

  .eg-mega-num {
      font-size: 1rem;
      font-weight: 700;
      color: var(--euphoria-blue);
  }

  .eg-mega-title {
      font-size: .95rem;
      font-weight: 700;
      color: var(--euphoria-blue);
      transition: color .2s;
  }
  .eg-mega-item:hover .eg-mega-title { color: var(--euphoria-red); }

  .eg-mega-desc {
      font-size: .78rem;
      color: #6b7a99;
      line-height: 1.6;
      display: block;
      margin-top: 10px;
  }

  /* Small simple dropdown (Outbound Services) */
  .eg-dropdown {
      position: absolute;
      top: calc(var(--nav-h) - 1px);
      left: 0;
      background: #fff;
      border: 1px solid var(--card-border);
      border-radius: 12px;
      box-shadow: 0 20px 50px rgba(37,53,111,.12);
      padding: 10px 0;
      min-width: 240px;
      opacity: 0;
      visibility: hidden;
      pointer-events: none;
      transform: translateY(10px);
      transition: opacity .25s ease, transform .25s ease, visibility .25s;
      z-index: 200;
  }
  .eg-menu > li:hover .eg-dropdown {
      opacity: 1;
      visibility: visible;
      pointer-events: auto;
      transform: translateY(0);
  }

  .eg-dropdown a {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 10px 20px;
      font-size: .86rem;
      font-weight: 500;
      color: var(--text-dark);
      text-decoration: none;
      transition: background .18s, color .18s;
  }
  .eg-dropdown a::before {
      content: '';
      width: 5px; height: 5px;
      border-radius: 50%;
      background: var(--euphoria-red);
      flex-shrink: 0;
      opacity: .5;
      transition: opacity .18s;
  }
  .eg-dropdown a:hover {
      background: var(--bg-light);
      color: var(--euphoria-blue);
      font-weight: 600;
  }
  .eg-dropdown a:hover::before { opacity: 1; }

  /* ══════════════════════════════════════════
      HAMBURGER (mobile)
  ══════════════════════════════════════════ */
  .eg-hamburger {
      display: none;
      flex-direction: column;
      gap: 5px;
      background: none;
      border: none;
      cursor: pointer;
      padding: 6px;
      border-radius: 6px;
      transition: background .2s;
  }
  .eg-hamburger:hover { background: var(--bg-light); }
  .eg-hamburger span {
      display: block;
      width: 24px; height: 2px;
      background: var(--euphoria-blue);
      border-radius: 2px;
      transition: transform .3s ease, opacity .3s ease, width .3s ease;
  }
  .eg-hamburger.eg-open span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
  .eg-hamburger.eg-open span:nth-child(2) { opacity: 0; width: 0; }
  .eg-hamburger.eg-open span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }

  /* ══════════════════════════════════════════
      MOBILE DRAWER
  ══════════════════════════════════════════ */
  .eg-mobile-menu {
      display: none;
      position: fixed;
      top: var(--nav-h);
      left: 0; right: 0; bottom: 0;
      background: #fff;
      overflow-y: auto;
      z-index: 999;
      padding: 12px 0 40px;
      transform: translateX(100%);
      transition: transform .32s cubic-bezier(.22,.68,0,1.1);
  }
  .eg-mobile-menu.eg-open {
      transform: translateX(0);
  }

  .eg-mob-link {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 14px 24px;
      font-size: .95rem;
      font-weight: 500;
      color: var(--text-dark);
      text-decoration: none;
      border-bottom: 1px solid var(--card-border);
      cursor: pointer;
      background: none;
      border-left: none;
      border-right: none;
      border-top: none;
      width: 100%;
      text-align: left;
      transition: background .18s, color .18s;
  }
  .eg-mob-link:hover, .eg-mob-link.eg-mob-active {
      color: var(--euphoria-blue);
      background: var(--bg-light);
      font-weight: 600;
  }
  .eg-mob-link svg { transition: transform .25s; }
  .eg-mob-link.eg-mob-active svg { transform: rotate(180deg); }

  /* Mobile accordion sub-items */
  .eg-mob-sub {
      display: none;
      background: var(--bg-light);
      border-bottom: 1px solid var(--card-border);
  }
  .eg-mob-sub.eg-open { display: block; }

  .eg-mob-sub-item {
      display: block;
      padding: 12px 24px 12px 36px;
      font-size: .86rem;
      font-weight: 500;
      color: #556;
      text-decoration: none;
      border-bottom: 1px solid var(--card-border);
      transition: color .18s, background .18s;
  }
  .eg-mob-sub-item:last-child { border-bottom: none; }
  .eg-mob-sub-item:hover {
      color: var(--euphoria-blue);
      background: rgba(37,53,111,.04);
  }

  .eg-mob-sub-card {
      padding: 14px 20px 14px 36px;
      border-bottom: 1px solid var(--card-border);
  }
  .eg-mob-sub-card:last-child { border-bottom: none; }
  .eg-mob-sub-card-title {
      font-size: .86rem;
      font-weight: 700;
      color: var(--euphoria-blue);
      margin-bottom: 2px;
  }
  .eg-mob-sub-card-desc {
      font-size: .75rem;
      color: #7a88a8;
      line-height: 1.5;
  }

  /* ══════════════════════════════════════════
      RESPONSIVE BREAKPOINTS
  ══════════════════════════════════════════ */
  @media (max-width: 1100px) {
      .eg-menu > li > a,
      .eg-menu > li > button { padding: 0 11px; font-size: .82rem; }
  }

  @media (max-width: 900px) {
      .eg-menu { display: none; }
      .eg-hamburger { display: flex; }
      .eg-mobile-menu { display: block; }
  }
</style>

<!-- ═══════════════════ NAVBAR ═══════════════════ -->
<nav class="eg-nav" role="navigation" aria-label="Main navigation">
  <div class="eg-nav-inner">

    <!-- LOGO -->
    <a href="index" class="eg-logo" aria-label="The Euphoria Group home">
        <img src="assets/img/logo-512-origional.png" alt="The Euphoria Group Logo" title="The Euphoria Group">
    </a>

    <!-- DESKTOP MENU -->
    <ul class="eg-menu" id="eg-desktop-menu">

      <!-- Home -->
      <li>
        <a href="index">Home</a>
      </li>

      <!-- About -->
      <li>
        <a href="about-us">About Euphoria</a>
      </li>

      <!-- Inbound Services — MEGA MENU -->
      <li class="eg-active">
        <button aria-haspopup="true" aria-expanded="false">
          Inbound Services
          <svg class="eg-chevron" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="eg-mega" role="menu">
          <div class="eg-mega-grid">

            <a href="corporate-establishment" class="eg-mega-item" role="menuitem">
              <span class="eg-mega-num">1.</span>
              <span class="eg-mega-title">Corporate Establishment</span>
              <span class="eg-mega-desc">Company registration and business setup services in India with complete legal and compliance support.</span>
            </a>

            <a href="corporate-service" class="eg-mega-item" role="menuitem">
              <span class="eg-mega-num">2.</span>
              <span class="eg-mega-title">Corporate Service</span>
              <span class="eg-mega-desc">Corporate compliance services, including ROC filings, regulatory compliance, and secretarial support.</span>
            </a>

            <a href="tours-travels" class="eg-mega-item" role="menuitem">
              <span class="eg-mega-num">3.</span>
              <span class="eg-mega-title">Tours and Travel</span>
              <span class="eg-mega-desc">Travel management services with visa assistance, international travel planning, and customised travel solutions.</span>
            </a>

            <a href="wealth-asset-solution" class="eg-mega-item" role="menuitem">
              <span class="eg-mega-num">4.</span>
              <span class="eg-mega-title">Wealth & Asset Solutions</span>
              <span class="eg-mega-desc">Wealth management services include investment planning, insurance advisory, and asset protection solutions.</span>
            </a>

          </div>
        </div>
      </li>

      <!-- Outbound Services — simple dropdown -->
      <li>
        <button aria-haspopup="true" aria-expanded="false">
          Outbound Services
          <svg class="eg-chevron" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="eg-dropdown" role="menu">
          <a href="javascript:voide(0)" role="menuitem">Export Consultancy</a>
          <a href="javascript:voide(0)" role="menuitem">International Trade</a>
          <a href="javascript:voide(0)" role="menuitem">Global Market Entry</a>
          <a href="javascript:voide(0)" role="menuitem">Logistics &amp; Freight</a>
          <a href="javascript:voide(0)" role="menuitem">Cross-Border Compliance</a>
        </div>
      </li>

      <!-- Partner Up -->
      <li>
        <a href="partner-up">Partner Up</a>
      </li>

      <!-- Career -->
      <li>
        <a href="career">Career</a>
      </li>

      <!-- Blog -->
      <li>
        <a href="blog">Blog</a>
      </li>

      <!-- Contact — CTA style -->
      <li>
        <a href="#" style="
          background: var(--euphoria-blue);
          color: #fff !important;
          border-radius: 7px;
          padding: 9px 20px !important;
          height: auto !important;
          font-weight: 600 !important;
          margin-left: 8px;
          transition: background .25s, transform .2s;
        "
        onmouseover="this.style.background='var(--euphoria-red)';this.style.transform='translateY(-1px)'"
        onmouseout="this.style.background='var(--euphoria-blue)';this.style.transform='none'"
        >Contact</a>
      </li>

    </ul>

    <!-- HAMBURGER -->
    <button class="eg-hamburger" id="eg-hamburger" aria-label="Toggle menu" aria-expanded="false">
      <span></span>
      <span></span>
      <span></span>
    </button>

  </div>
</nav>

<!-- ═══════════════════ MOBILE DRAWER ═══════════════════ -->
<div class="eg-mobile-menu" id="eg-mobile-menu" aria-hidden="true">

  <a href="index" class="eg-mob-link">Home</a>
  <a href="about-us" class="eg-mob-link">About Euphoria</a>

  <!-- Inbound accordion -->
  <button class="eg-mob-link" id="mob-inbound-btn" aria-expanded="false">
    Inbound Services
    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
  </button>
  <div class="eg-mob-sub" id="mob-inbound-sub">
    <div class="eg-mob-sub-card">
      <div class="eg-mob-sub-card-title">1. Corporate Establishment</div>
      <div class="eg-mob-sub-card-desc">Company registration and business setup with legal and compliance support.</div>
    </div>
    <div class="eg-mob-sub-card">
      <div class="eg-mob-sub-card-title">2. Corporate Service</div>
      <div class="eg-mob-sub-card-desc">ROC filings, regulatory compliance, and secretarial support.</div>
    </div>
    <div class="eg-mob-sub-card">
      <div class="eg-mob-sub-card-title">3. Tours and Travel</div>
      <div class="eg-mob-sub-card-desc">Visa assistance, international travel planning, and customised solutions.</div>
    </div>
    <div class="eg-mob-sub-card">
      <div class="eg-mob-sub-card-title">4. Wealth & Asset Solutions</div>
      <div class="eg-mob-sub-card-desc">Investment planning, insurance advisory, and asset protection solutions.</div>
    </div>
  </div>

  <!-- Outbound accordion -->
  <button class="eg-mob-link" id="mob-outbound-btn" aria-expanded="false">
    Outbound Services
    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
  </button>
  <div class="eg-mob-sub" id="mob-outbound-sub">
    <a href="javascript:voide(0)" class="eg-mob-sub-item">Export Consultancy</a>
    <a href="javascript:voide(0)" class="eg-mob-sub-item">International Trade</a>
    <a href="javascript:voide(0)" class="eg-mob-sub-item">Global Market Entry</a>
    <a href="javascript:voide(0)" class="eg-mob-sub-item">Logistics &amp; Freight</a>
    <a href="javascript:voide(0)" class="eg-mob-sub-item">Cross-Border Compliance</a>
  </div>

  <a href="partner-up" class="eg-mob-link">Partner Up</a>
  <a href="career" class="eg-mob-link">Career</a>
  <a href="blog" class="eg-mob-link">Blog</a>
  <a href="#" class="eg-mob-link" style="color:var(--euphoria-red);font-weight:600;">Contact</a>

</div>

<script>
  const hamburger  = document.getElementById('eg-hamburger');
  const mobileMenu = document.getElementById('eg-mobile-menu');

  // Toggle mobile drawer
  hamburger.addEventListener('click', () => {
    const isOpen = hamburger.classList.toggle('eg-open');
    mobileMenu.classList.toggle('eg-open', isOpen);
    hamburger.setAttribute('aria-expanded', isOpen);
    mobileMenu.setAttribute('aria-hidden', !isOpen);
    document.body.style.overflow = isOpen ? 'hidden' : '';
  });

  // Mobile accordions
  function mobileAccordion(btnId, subId) {
    const btn = document.getElementById(btnId);
    const sub = document.getElementById(subId);
    btn.addEventListener('click', () => {
      const isOpen = sub.classList.toggle('eg-open');
      btn.classList.toggle('eg-mob-active', isOpen);
      btn.setAttribute('aria-expanded', isOpen);
    });
  }
  mobileAccordion('mob-inbound-btn',  'mob-inbound-sub');
  mobileAccordion('mob-outbound-btn', 'mob-outbound-sub');

  // Close mobile menu on link click
  mobileMenu.querySelectorAll('a').forEach(a => {
    a.addEventListener('click', () => {
      hamburger.classList.remove('eg-open');
      mobileMenu.classList.remove('eg-open');
      document.body.style.overflow = '';
    });
  });

  // Close dropdowns on outside click
  document.addEventListener('click', (e) => {
    if (!e.target.closest('.eg-nav')) {
      document.querySelectorAll('.eg-menu > li').forEach(li => li.classList.remove('eg-hover'));
    }
  });

  // Keyboard accessibility for desktop menu buttons
  document.querySelectorAll('.eg-menu > li > button').forEach(btn => {
    btn.addEventListener('keydown', (e) => {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        const li = btn.closest('li');
        const isOpen = li.classList.toggle('eg-force-open');
        btn.setAttribute('aria-expanded', isOpen);
      }
    });
  });
</script>