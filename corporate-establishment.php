<?php
include_once('elements/header.php');
?>
<style>
    :root {
        --bg-section: #ffffff;
        --dark-navy: #1a2340;
        --text-body: #4a4a5a;
        --accent: #c9a96e;
        --pink-light: #f0c0c8;
        --navy: #1a2456;
        --red: #c0392b;
        --light-gray: #f7f8fc;
        --border: #e2e5f0;
        --text-muted: #7a7f9a;
        --red-light: #fdf0f0;
        --navy-light: #162952;
        --gold: #c9a84c;
        --gold-light: #e8c97a;
        --white: #ffffff;
        --text-muted: rgba(255, 255, 255, 0.72);
        --card-radius: 18px;
        --primary: #c0392b;
        --primary-light: #fdecea;
        --text: #4a5568;
        --bg: #f7f8fc;
        --card-bg: #ffffff;
        --icon-size: 80px;
        --np-red:       #c0392b;
      --np-navy:      #1a2a4a;
      --np-muted:     #5a6a7e;
      --np-line:      #e2e8f0;
      --np-bg:        #ffffff;
            --si-navy:   #1a2a4a;
      --si-muted:  #4a5568;
      --si-bg:     #f7f8fc;
      --si-saffron:#ff9933;
      --si-green:  #138808;
      --si-blue:   #000080;
    }

    /* ── HERO ── */
    .corporate-establishment {
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

    .corporate-establishment h1 {
        font-size: clamp(2rem, 5vw, 3.2rem);
        letter-spacing: 1px;
    }


    /* ── Partnership Section ── */
    .corporate-tab-section {
        background: var(--bg-section);
        padding: 80px 0;
        overflow: hidden;
        position: relative;
    }

    /* ── Nav Wrapper ── */
    .formation-nav-wrapper {
        display: flex;
        align-items: center;
        border: 1.5px solid var(--border);
        border-radius: 50px;
        padding: 5px;
        background: #fff;
        width: fit-content;
        overflow-x: auto;
        white-space: nowrap;
        scrollbar-width: none;
    }

    .formation-nav-wrapper::-webkit-scrollbar {
        display: none;
    }

    /* ── Active Label Pill ── */
    .nav-active-pill {
        display: inline-flex;
        align-items: center;
        background: var(--navy);
        color: #fff;
        font-weight: 700;
        font-size: 0.88rem;
        border-radius: 50px;
        padding: 0.55rem 1.35rem;
        white-space: nowrap;
        flex-shrink: 0;
        user-select: none;
    }

    /* ── Divider ── */
    .nav-sep {
        width: 1.5px;
        min-width: 1.5px;
        height: 18px;
        background: var(--border);
        flex-shrink: 0;
        margin: 0 2px;
    }

    /* ── Nav Links ── */
    .nav-link-item {
        display: inline-flex;
        align-items: center;
        color: #2c2f4a;
        font-size: 0.84rem;
        font-weight: 500;
        padding: 0.45rem 0.9rem;
        white-space: nowrap;
        text-decoration: none;
        border-radius: 50px;
        flex-shrink: 0;
        cursor: pointer;
    }

    .nav-link-item:hover {
        color: var(--navy);
        background: #f0f2fa;
    }

    .nav-link-item.active-link {
        color: var(--navy);
        font-weight: 700;
    }

    /* ── Section ── */
    .india-section {
        padding: 60px 0;
    }

    /* ── Image Column ── */
    .img-col {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .img-col img {
        width: 100%;
        max-width: 480px;
        height: auto;
        object-fit: cover;
        display: block;
        /* fade out right edge into white */
        -webkit-mask-image: linear-gradient(to right, black 55%, transparent 100%);
        mask-image: linear-gradient(to right, black 55%, transparent 100%);
    }

    /* ── Text Column ── */
    .text-col {
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding-left: 1.5rem;
    }

    .text-col p {
        font-size: 0.97rem;
        color: #3a3d52;
        line-height: 1.8;
        margin-bottom: 1.2rem;
        font-weight: 400;
    }

    .text-col p:last-child {
        margin-bottom: 0;
    }

    /* ── Responsive ── */
    @media (max-width: 768px) {
        .img-col img {
            -webkit-mask-image: linear-gradient(to bottom, black 60%, transparent 100%);
            mask-image: linear-gradient(to bottom, black 60%, transparent 100%);
            max-width: 100%;
        }

        .text-col {
            padding-left: 0;
            padding-top: 1.5rem;
        }
    }

    /* Section */
    .incorporation {
        position: relative;
        padding: 100px 0 0px;
        overflow: hidden;
        background: #fff;
    }

    /* Watermark */
    .incorporation::before {
        content: "Incorporation";
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

    /* ── Heading ── */
    .incorporation-heading {
        position: relative;
        z-index: 1;
        font-family: 'Playfair Display', serif;
        color: var(--navy);
        font-size: clamp(1.6rem, 3vw, 2.2rem);
        font-weight: 700;
        text-align: center;
        margin-bottom: 50px;
    }

    /* ── Section ── */
    .services-section {
        padding: 60px 0;
    }

    /* ── Card ── */
    .service-card {
        border: 1.5px solid var(--border);
        border-radius: 18px;
        padding: 2rem 1.4rem 1.6rem;
        text-align: center;
        background: #fff;
        height: 100%;
        transition: box-shadow 0.25s, transform 0.25s, border-color 0.25s;
    }

    .service-card:hover {
        box-shadow: 0 8px 32px rgba(26, 36, 86, 0.10);
        transform: translateY(-4px);
        border-color: #c8cce0;
    }

    /* ── Icon Circle ── */
    .icon-wrap {
        width: 90px;
        height: 90px;
        border-radius: 50%;
        background: var(--red-light);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }


    .icon-wrap svg {
        width: 48px;
        height: 48px;
    }

    /* ── Title ── */
    .service-card h5 {
        font-size: 0.9rem;
        font-weight: 700;
        color: var(--navy);
        margin-bottom: 0.75rem;
        line-height: 1.35;
    }

    /* ── Description ── */
    .service-card p {
        font-size: 0.7rem;
        color: #5a5e78;
        line-height: 1.7;
        margin: 0;
    }

    /* ── Row gap ── */
    .services-grid {
        row-gap: 24px;
    }

    .section-wrapper {
        background: linear-gradient(135deg, #eef0f8 0%, #f5f6fc 100%);
        padding: 80px 0;
        position: relative;
        overflow: hidden;
    }

    .section-wrapper::before {
        content: 'Register';
        position: absolute;
        top: 10px;
        left: -10px;
        font-family: 'Playfair Display', serif;
        font-size: 130px;
        color: rgba(26, 45, 107, 0.06);
        font-weight: 700;
        pointer-events: none;
        line-height: 1;
        white-space: nowrap;
    }

    .section-title {
        font-family: 'Playfair Display', serif;
        font-size: 2.4rem;
        font-weight: 700;
        color: var(--navy-dark);
        line-height: 1.2;
        margin-bottom: 1.5rem;
    }

    .section-text {
        font-size: 0.95rem;
        line-height: 1.8;
        margin-bottom: 1rem;
    }

    /* Feature Circles */
    .feature-circle {
        width: 160px;
        height: 160px;
        border-radius: 50%;
        background: var(--navy);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 20px;
        margin: 10px auto;
        transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s ease;
        cursor: default;
        position: relative;
        box-shadow: 0 8px 30px rgba(26, 45, 107, 0.25);
    }

    .feature-circle:hover {
        transform: translateY(-6px) scale(1.05);
    }

    .feature-circle .icon {
        font-size: 2rem;
        margin-bottom: 10px;
        color: #fff;
        opacity: 0.9;
    }

    .feature-circle .label {
        font-family: 'DM Sans', sans-serif;
        font-size: 0.78rem;
        font-weight: 600;
        color: #fff;
        line-height: 1.4;
    }

    /* Large circles */
    .feature-circle.large {
        width: 180px;
        height: 180px;
    }

    /* SVG Icons */
    .feature-circle svg {
        width: 44px;
        height: 44px;
        margin-bottom: 10px;
        stroke: rgba(255, 255, 255, 0.9);
        fill: none;
        stroke-width: 1.5;
        stroke-linecap: round;
        stroke-linejoin: round;
    }

    .circles-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: auto auto;
        gap: 16px;
        align-items: center;
    }

    @media (max-width: 991px) {
        .circles-grid {
            grid-template-columns: repeat(3, 1fr);
        }

        .section-wrapper::before {
            font-size: 80px;
        }
    }

    @media (max-width: 576px) {
        .circles-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .section-title {
            font-size: 1.8rem;
        }
    }

    /* Section */
    .register {
        position: relative;
        padding: 100px 0 0px;
        overflow: hidden;
        background: #fff;
    }

    /* Watermark */
    .register::before {
        content: "Register";
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
        opacity: 0.2;
        letter-spacing: 2px;
    }

    /* ── Heading ── */
    .register-heading {
        position: relative;
        z-index: 1;
        font-family: 'Playfair Display', serif;
        color: var(--navy);
        font-size: clamp(1.6rem, 3vw, 2.2rem);
        font-weight: 700;
        text-align: start;
        margin-bottom: 50px;
    }


    /* ── Section wrapper ── */
    .benefits-section {
        padding: 80px 0 90px;
        background: linear-gradient(135deg, #f0f4fb 0%, #e8edf8 100%);
    }

    .section-eyebrow {
        font-family: 'DM Sans', sans-serif;
        font-size: 0.78rem;
        font-weight: 600;
        letter-spacing: 0.18em;
        text-transform: uppercase;
        color: var(--gold);
        margin-bottom: 10px;
    }

    .section-title {
        font-family: 'Playfair Display', serif;
        font-size: clamp(1.9rem, 3.5vw, 2.7rem);
        font-weight: 700;
        color: var(--navy);
        margin-bottom: 14px;
        line-height: 1.2;
    }

    .section-subtitle {
        font-size: 1rem;
        color: #4a5568;
        max-width: 560px;
        margin: 0 auto 50px;
        line-height: 1.65;
    }

    /* ── Card ── */
    .benefit-card-alliance {
        position: relative;
        border-radius: var(--card-radius);
        overflow: hidden;
        height: 400px;
        cursor: pointer;
        box-shadow: 0 8px 32px rgba(13, 27, 62, 0.13);
        transition: transform 0.38s cubic-bezier(.25, .8, .25, 1),
            box-shadow 0.38s cubic-bezier(.25, .8, .25, 1);
    }

    .benefit-card-alliance:hover {
        transform: translateY(-6px) scale(1.015);
        box-shadow: 0 20px 48px rgba(13, 27, 62, 0.22);
    }

    /* Background image */
    .card-bg {
        position: absolute;
        inset: 0;
        background-size: cover;
        background-position: center;
        transition: transform 0.55s ease;
    }

    .benefit-card-alliance:hover .card-bg {
        transform: scale(1.06);
    }

    /* Gradient overlay */
    .card-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to bottom,
                rgba(13, 27, 62, 0.08) 0%,
                rgba(13, 27, 62, 0.35) 40%,
                rgba(13, 27, 62, 0.88) 100%);
        transition: background 0.38s ease;
    }

    .benefit-card-alliance:hover .card-overlay {
        background: linear-gradient(to bottom,
                rgba(13, 27, 62, 0.10) 0%,
                rgba(13, 27, 62, 0.45) 40%,
                rgba(13, 27, 62, 0.95) 100%);
    }

    /* Content inside card */
    .card-content {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 28px 24px 26px;
    }

    .card-icon {
        width: 44px;
        height: 44px;
        background: linear-gradient(135deg, var(--gold), var(--gold-light));
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 12px;
        box-shadow: 0 4px 14px rgba(201, 168, 76, 0.4);
        transition: transform 0.3s ease;
    }

    .benefit-card-alliance:hover .card-icon {
        transform: scale(1.1) rotate(-4deg);
    }

    .card-icon svg {
        width: 22px;
        height: 22px;
        color: #fff;
    }

    .card-title-alliance {
        font-family: 'Playfair Display', serif;
        font-size: 1.15rem;
        font-weight: 700;
        color: var(--white);
        margin-bottom: 8px;
        line-height: 1.3;
    }

    .card-desc-alliance {
        font-size: 0.875rem;
        color: var(--text-muted);
        line-height: 1.6;
        margin: 0;
    }

    /* ── Swiper overrides ── */
    .swiper {
        padding: 12px 6px 54px !important;
    }

    .swiper-slide {
        height: auto;
    }

    /* Pagination bullets */
    .swiper-pagination-bullet {
        width: 10px;
        height: 10px;
        background: #b0bdd4;
        opacity: 1;
        transition: all 0.3s ease;
    }

    .swiper-pagination-bullet-active {
        background: var(--navy);
        width: 28px;
        border-radius: 5px;
    }

    /* Nav buttons */
    .swiper-nav-btn {
        width: 46px;
        height: 46px;
        border-radius: 50%;
        border: 2px solid var(--navy);
        background: var(--white);
        color: var(--navy);
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.28s ease;
        box-shadow: 0 4px 14px rgba(13, 27, 62, 0.12);
    }

    .swiper-nav-btn:hover {
        background: var(--navy);
        color: var(--white);
        transform: scale(1.08);
    }

    .swiper-nav-btn svg {
        width: 18px;
        height: 18px;
    }

    .swiper-nav-btn.swiper-button-disabled {
        opacity: 0.35;
        pointer-events: none;
    }

    /* Section */
    .alliance {
        position: relative;
        padding: 100px 0 0px;
        overflow: hidden;
        background: #fff;
    }

    /* Watermark */
    .alliance::before {
        content: "Alliance";
        position: absolute;
        top: 50px;
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

    /* ── Heading ── */
    .alliance-heading {
        position: relative;
        z-index: 1;
        font-family: 'Playfair Display', serif;
        color: var(--navy);
        font-size: clamp(1.6rem, 3vw, 2.2rem);
        font-weight: 700;
        text-align: center;
        margin-bottom: 50px;
    }

    .benefits-section {
        padding: 70px 0;
        background: #fff;
    }

    /* ── Left: accordion list ── */
    .benefit-item {
        border-bottom: 1.5px solid var(--border);
        padding: 22px 10px;
        cursor: pointer;
        border-radius: 6px;
        transition: background 0.22s;
    }


    .benefit-item.active,
    .benefit-item:hover {
        background: var(--hover-bg);
    }

    .benefit-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
    }

    .benefit-title {
        font-size: 1.05rem;
        font-weight: 700;
        color: var(--dark);
        margin: 0;
        transition: color 0.22s;
    }

    .benefit-item.active .benefit-title,
    .benefit-item:hover .benefit-title {
        color: var(--red);
    }

    /* Arrow icon */
    .arrow-icon {
        flex-shrink: 0;
        width: 34px;
        height: 34px;
        border-radius: 50%;
        border: 1.8px solid #ccc;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: border-color 0.22s, background 0.22s;
    }

    .arrow-icon svg {
        width: 16px;
        height: 16px;
        color: #aaa;
        transition: color 0.22s, transform 0.28s;
    }

    .benefit-item.active .arrow-icon,
    .benefit-item:hover .arrow-icon {
        border-color: var(--red);
        background: var(--red);
    }

    .benefit-item.active .arrow-icon svg,
    .benefit-item:hover .arrow-icon svg {
        color: #fff;
        transform: translateX(2px);
    }

    /* Description */
    .benefit-desc {
        font-size: 0.875rem;
        color: var(--gray-text);
        line-height: 1.7;

        overflow: hidden;

        transition: max-height 0.38s ease, opacity 0.3s ease, margin 0.3s ease;
    }

    .benefit-item.active .benefit-desc {
        max-height: 120px;
        opacity: 1;
        margin-top: 10px;
    }

    /* ── Right: image ── */
    .img-wrapper {
        border-radius: 16px;
        overflow: hidden;
        height: 100%;
        min-height: 420px;
    }

    .img-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.6s ease;
    }

    .img-wrapper:hover img {
        transform: scale(1.03);
    }

    @media (max-width: 991px) {
        .img-wrapper {
            min-height: 280px;
            margin-top: 40px;
        }
    }

    .remove-bottom-border {
        border-bottom: 0px;
    }

    /* Section */
    .individual {
        position: relative;
        padding: 100px 0 0px;
        overflow: hidden;
        background: #fff;
    }

    /* Watermark */
    .individual::before {
        content: "Individual";
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

    /* ── Heading ── */
    .individual-heading {
        position: relative;
        z-index: 1;
        font-family: 'Playfair Display', serif;
        color: var(--navy);
        font-size: clamp(1.6rem, 3vw, 2.2rem);
        font-weight: 700;
        text-align: center;
        margin-bottom: 50px;
    }

    /* Section */
    .setup {
        position: relative;
        padding: 100px 0 0px;
        overflow: hidden;
        background: #fff;
    }

    /* Watermark */
    .setup::before {
        content: "Setup";
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

    /* ── Heading ── */
    .setup-heading {
        position: relative;
        z-index: 1;
        font-family: 'Playfair Display', serif;
        color: var(--navy);
        font-size: clamp(1.6rem, 3vw, 2.2rem);
        font-weight: 700;
        text-align: center;
        margin-bottom: 50px;
    }


    /* ── Card ── */
    .benefit-card {

        padding: 32px 28px 28px;
        height: 100%;
        position: relative;
        overflow: hidden;
        border-left: 1px solid lightgrey;
    }

    .benefit-card::before {
        content: '';
        position: absolute;
        left: 0;
        top: 40px;
        bottom: 160px;
        width: 1.5px;
        background: var(--red);
        opacity: 0;
        transform: scaleY(0.4);
        transition: opacity 0.28s ease, transform 0.28s ease;
    }

    .benefit-card:hover {
        transform: translateY(-4px);
        border-left: 1px solid lightgrey;
    }

    .benefit-card:hover::before {
        opacity: 1;
        transform: scaleY(1);
    }

    /* Icon circle */
    .icon-wrap {
        width: 68px;
        height: 68px;
        background: var(--red-light);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        transition: background 0.28s ease, transform 0.28s ease;
    }

    .benefit-card:hover .icon-wrap {
        transform: scale(1.07) rotate(-4deg);
    }

    .icon-wrap svg {
        width: 32px;
        height: 32px;
        color: var(--red);
    }

    /* Text */
    .card-title {
        font-size: 1rem;
        font-weight: 700;
        color: var(--dark);
        margin-bottom: 10px;
        text-align: start;
        line-height: 1.35;
    }

    .card-desc {
        font-size: 0.7rem;
        color: var(--gray);
        line-height: 1.7;
        margin: 0;
        text-align: start;
    }

    /* Vertical divider between cols on desktop */
    @media (min-width: 992px) {

        .col-divider:last-child {
            border-right: none;
        }
    }

    /* Section */
    .ownership {
        position: relative;
        padding: 100px 0 0px;
        overflow: hidden;
        background: #fff;
    }

    /* Watermark */
    .ownership::before {
        content: "Ownership";
        position: absolute;
        top: 20px;
        left: 65%;
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

    /* ── Heading ── */
    .ownership-heading {
        position: relative;
        z-index: 1;
        font-family: 'Playfair Display', serif;
        color: var(--navy);
        font-size: clamp(1.6rem, 3vw, 2.2rem);
        font-weight: 700;
        text-align: center;
        margin-bottom: 50px;
    }

    .setup-section {
        padding: 70px 0;
        background: #fff;
        overflow: hidden;
    }

    /* ── Left Image ── */
    .img-wrapper-ownership {
        overflow: hidden;
        height: 100%;
        min-height: 580px;
    }

    .img-wrapper-ownership img {
        width: 100%;
        height: 560px;
        border-radius: 20px;
        max-height: 100%;
        object-fit: cover;
        display: block;
    }

    /* ── Right Content ── */
    .content-side {
        position: relative;
    }

    .section-title {
        font-size: clamp(1.6rem, 2.8vw, 2.1rem);
        font-weight: 800;
        color: var(--navy);
        margin-bottom: 22px;
        position: relative;
        z-index: 1;
    }

    .section-desc {
        font-size: 0.925rem;
        color: var(--gray);
        line-height: 1.8;
        margin-bottom: 32px;
    }

    /* ── Checklist grid ── */
    .checklist {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 18px 24px;
    }

    @media (max-width: 480px) {
        .checklist {
            grid-template-columns: 1fr;
        }
    }

    .check-item {
        display: flex;
        align-items: flex-start;
        gap: 10px;
    }

    /* Red checkmark icon */
    .check-icon {
        flex-shrink: 0;
        width: 26px;
        height: 26px;
        margin-top: 1px;
    }

    .check-icon svg {
        width: 26px;
        height: 26px;
    }

    .check-label {
        font-size: 0.92rem;
        font-weight: 600;
        color: var(--navy);
        line-height: 1.4;
        padding-top: 3px;
    }

    @media (max-width: 991px) {
        .img-wrapper {
            min-height: 300px;
            margin-bottom: 40px;
        }

        .watermark {
            font-size: 3rem;
        }
    }

    /* Section */
    .compliance {
        position: relative;
        padding: 100px 0 0px;
        overflow: hidden;
        background: #fff;
    }

    /* Watermark */
    .compliance::before {
        content: "Compliance";
        position: absolute;
        top: 50px;
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

    /* ── Heading ── */
    .compliance-heading {
        position: relative;
        z-index: 1;
        font-family: 'Playfair Display', serif;
        color: var(--navy);
        font-size: clamp(1.6rem, 3vw, 2.2rem);
        font-weight: 700;
        text-align: center;
    }


    /* ── Section wrapper ── */
    .tax-section {
        padding: 60px 0 70px;
    }

    .tax-section .section-tag {
        display: inline-block;
        background: var(--primary-light);
        color: var(--primary);
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        border-radius: 20px;
        padding: 5px 16px;
        margin-bottom: 12px;
    }

    .tax-section h2 {
        font-size: clamp(1.6rem, 3vw, 2.2rem);
        font-weight: 800;
        color: var(--navy);
        line-height: 1.25;
    }

    .tax-section h2 span {
        color: var(--primary);
    }

    .tax-section .lead {
        font-size: 1rem;
        max-width: 560px;
        margin: 0 auto;
        color: var(--text);
    }

    /* ── Card ── */
    .tax-card {
        background: var(--card-bg);
        border: 1.5px solid var(--border);
        border-radius: 18px;
        padding: 36px 28px 32px;
        text-align: center;
        transition: transform .28s ease, box-shadow .28s ease, border-color .28s ease;
        height: 100%;
        user-select: none;
    }

    .tax-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 18px 40px rgba(192, 57, 43, .12);
        border-color: rgba(192, 57, 43, .35);
    }

    /* Icon circle */
    .tax-card .icon-wrap {
        width: var(--icon-size);
        height: var(--icon-size);
        background: var(--primary-light);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 22px;
        transition: background .28s;
    }

    .tax-card:hover .icon-wrap {
        background: #f5c6c2;
    }

    .tax-card .icon-wrap svg {
        width: 38px;
        height: 38px;
        stroke: var(--primary);
        fill: none;
        stroke-width: 1.6;
        stroke-linecap: round;
        stroke-linejoin: round;
    }

    .tax-card h5 {
        font-size: 1rem;
        font-weight: 800;
        color: var(--navy);
        margin-bottom: 12px;
        line-height: 1.3;
    }

    .tax-card p {
        font-size: 0.7rem;
        line-height: 1.7;
        margin: 0;
        color: var(--text);
    }

    /* ── Swiper overrides ── */
    .swiper {
        padding-bottom: 52px !important;
    }

    .swiper-slide {
        height: auto;
    }

    /* Pagination bullets */
    .swiper-pagination-bullet {
        width: 8px;
        height: 8px;
        background: #cbd5e0;
        opacity: 1;
        transition: all .25s;
    }

    .swiper-pagination-bullet-active {
        background: var(--primary);
        width: 24px;
        border-radius: 4px;
    }

    /* Nav buttons */
    .swiper-nav {
        display: flex;
        gap: 10px;
        justify-content: center;
        margin-top: 4px;
    }

    .swiper-btn {
        width: 42px;
        height: 42px;
        border-radius: 50%;
        border: 1.5px solid var(--border);
        background: #fff;
        color: var(--navy);
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all .22s;
        font-size: 1rem;
    }

    .swiper-btn:hover {
        background: var(--primary);
        border-color: var(--primary);
        color: #fff;
    }

    /* hide default arrows */
    .swiper-button-next,
    .swiper-button-prev {
        display: none;
    }

    /* Section */
    .non-profit {
        position: relative;
        padding: 100px 0 0px;
        overflow: hidden;
        background: #fff;
    }

    /* Watermark */
    .non-profit::before {
        content: "Non Profit Setup";
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

    /* ── Heading ── */
    .non-profit-heading {
        position: relative;
        z-index: 1;
        font-family: 'Playfair Display', serif;
        color: var(--navy);
        font-size: clamp(1.6rem, 3vw, 2.2rem);
        font-weight: 700;
        text-align: center;
    }

    
    /* ── Feature item ── */
    .np-feature {
      padding-bottom: 24px;
      margin-bottom: 24px;
      border-bottom: 1.5px solid var(--np-line);
    }
 
    .np-feature:last-child {
      border-bottom: none;
      margin-bottom: 0;
      padding-bottom: 0;
    }
 
    .np-feature__title {
      font-size: 1rem;
      font-weight: 700;
      color: var(--np-navy);
      margin-bottom: 7px;
      line-height: 1.35;
    }
 
    .np-feature__title em {
      font-style: normal;
      color: var(--np-red);
    }
 
    .np-feature__desc {
      font-size: 0.875rem;
      line-height: 1.75;
      margin: 0;
      color: var(--np-muted);
    }
 
    /* right-side titles align right on desktop */
    .np-col-right .np-feature__title,
    .np-col-right .np-feature__desc {
      text-align: right;
    }
 
    /* ── Center image ── */
    .np-img-wrap {
      border-radius: 18px;
      overflow: hidden;
      height: 100%;
      min-height: 420px;
    }
 
    .np-img-wrap img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }
 
    /* ── Responsive: stack on mobile ── */
    @media (max-width: 991.98px) {
      .np-col-right .np-feature__title,
      .np-col-right .np-feature__desc {
        text-align: left;
      }
 
      .np-img-wrap {
        min-height: 280px;
        margin-bottom: 36px;
      }
    }

   /* ── Banner ── */
    .si-banner {
      position: relative;
      background: var(--si-bg);
      overflow: hidden;
      padding: 72px 0 80px;
    }
 
    /* ────── Background decorations ────── */
 
    /* Faded "startup" watermark text */
    .si-banner__watermark {
      position: absolute;
      left: 300px;
      top: 70%;
      transform: translateY(-50%);
      font-size: clamp(4rem, 10vw, 5rem);
      font-weight: 800;
      color: rgba(192, 57, 43, 0.07);
      white-space: nowrap;
      pointer-events: none;
      user-select: none;
      letter-spacing: -2px;
      line-height: 1;
    }
 
    /* India flag colour stripe — top right */
    .si-banner__stripe {
      position: absolute;
      top: 0;
      right: 0;
      width: 340px;
      height: 100%;
      pointer-events: none;
      overflow: hidden;
    }
 
    .si-banner__stripe::before,
    .si-banner__stripe::after,
    .si-banner__stripe span {
      content: '';
      position: absolute;
      right: -60px;
      width: 400px;
      height: 14px;
      border-radius: 8px;
      opacity: 0.18;
      transform: rotate(-38deg);
    }
 
    .si-banner__stripe::before {
      background: var(--si-saffron);
      top: 28%;
    }
 
    .si-banner__stripe::after {
      background: var(--si-green);
      top: calc(28% + 22px);
    }
 
    .si-banner__stripe span {
      display: block;
      background: var(--si-blue);
      top: calc(28% + 44px);
    }
 
    /* Ashoka Chakra faint circle — right side */
    .si-banner__chakra {
      position: absolute;
      right: 60px;
      top: 50%;
      transform: translateY(-50%);
      width: clamp(120px, 18vw, 220px);
      height: clamp(120px, 18vw, 220px);
      border-radius: 50%;
      border: 2px solid rgba(0, 0, 128, 0.08);
      pointer-events: none;
    }
 
    .si-banner__chakra::before {
      content: '';
      position: absolute;
      inset: 10px;
      border-radius: 50%;
      border: 1.5px dashed rgba(0, 0, 128, 0.07);
    }
 
    /* Bracket / L-shape decorative marks */
    .si-banner__bracket {
      position: absolute;
      width: 28px;
      height: 28px;
      pointer-events: none;
      opacity: 0.25;
    }
 
    .si-banner__bracket--tl {
      top: 30px;
      left: 220px;
      border-top: 3px solid var(--si-green);
      border-left: 3px solid var(--si-green);
    }
 
    .si-banner__bracket--br {
      bottom: 30px;
      left: 260px;
      border-bottom: 3px solid var(--si-green);
      border-right: 3px solid var(--si-green);
    }
 
    /* ── Content ── */
    .si-banner__inner {
      position: relative;
      z-index: 2;
      text-align: center;
    }
 
    .si-banner__title {
      font-size: clamp(1.6rem, 3.5vw, 2.2rem);
      font-weight: 800;
      color: var(--si-navy);
      margin-bottom: 20px;
      line-height: 1.2;
    }
 
    .si-banner__desc {
      font-size: clamp(0.9rem, 1.5vw, 1rem);
      line-height: 1.85;
      color: var(--si-muted);
      max-width: 720px;
      margin: 0 auto;
    }
</style>

<!-- HERO -->
<section class="corporate-establishment">
    <div>
        <h1 class="mb-0">Corporate Establishment</h1>
        <div class="gold-divider mx-auto mt-3"></div>
        <p class="text-white-50 mt-2" style="font-size:.9rem;letter-spacing:2px;">End-to-end support support for setting up legally compliant business entities.</p>
    </div>
</section>

<section class="corporate-tab-section india-section">

    <div class="container position-relative" style="z-index:2">

        <div class="formation-nav-wrapper">

            <span class="nav-active-pill">Business Formation</span>

            <div class="nav-sep"></div>
            <a href="#" class="nav-link-item">Private Limited Company Setup</a>
            <div class="nav-sep"></div>
            <a href="#" class="nav-link-item">LLP</a>
            <div class="nav-sep"></div>
            <a href="#" class="nav-link-item">OPC</a>
            <div class="nav-sep"></div>
            <a href="#" class="nav-link-item">Partnership Firm</a>
            <div class="nav-sep"></div>
            <a href="#" class="nav-link-item">PAN, TAN, GST</a>
            <div class="nav-sep"></div>
            <a href="#" class="nav-link-item">NGO / Trust / Section 8 Company</a>
            <div class="nav-sep"></div>
            <a href="#" class="nav-link-item">Start-up India Registration</a>
            <div class="nav-sep"></div>
            <a href="#" class="nav-link-item">FAQ</a>


        </div>

    </div><!-- /container -->

    <div class="container-xl pt-5">
        <div class="row align-items-center">

            <!-- Left: Image -->
            <div class="col-12 col-md-4 img-col">
                <img
                    src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=700&q=80"
                    alt="Business professionals with city skyline" />
            </div>

            <!-- Right: Text -->
            <div class="col-12 col-md-8 text-col">
                <p>
                    Expanding into India represents a significant opportunity, but entering a new market necessitates the proper structure, regulatory clarity, and strategic execution.
                </p>
                <p>
                    The Euphoria Group specialises in inbound corporate establishment services, assisting foreign investors, multinational corporations, and international entrepreneurs to establish a strong and compliant presence in India.
                </p>
                <p>
                    Beyond incorporation, we provide comprehensive support across regulatory approvals, tax registrations, banking setup, and ongoing compliance management. Our team ensures a seamless entry into the Indian market by aligning your business structure with local laws, industry requirements, and long-term growth objectives—allowing you to focus on scaling your operations with confidence.
                </p>
            </div>

        </div>
    </div>

</section>

<section class="incorporation">

    <div class="container position-relative" style="z-index:1;">

        <h2 class="incorporation-heading">Bussiness Formation & Registration</h2>

        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-3 services-grid py-5">

            <!-- 1. Business Structure Advisory -->
            <div class="col">
                <div class="service-card">
                    <div class="icon-wrap">
                        <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="24" cy="10" r="5" stroke="#c0392b" stroke-width="2" />
                            <circle cx="10" cy="36" r="5" stroke="#c0392b" stroke-width="2" />
                            <circle cx="38" cy="36" r="5" stroke="#c0392b" stroke-width="2" />
                            <line x1="24" y1="15" x2="24" y2="24" stroke="#c0392b" stroke-width="2" />
                            <line x1="24" y1="24" x2="10" y2="31" stroke="#c0392b" stroke-width="2" />
                            <line x1="24" y1="24" x2="38" y2="31" stroke="#c0392b" stroke-width="2" />
                        </svg>
                    </div>
                    <h5>Business Structure Advisory</h5>
                    <p>Expert guidance to choose the right business structure based on your goals and tax planning.</p>
                </div>
            </div>

            <!-- 2. Company Name Reservation -->
            <div class="col">
                <div class="service-card">
                    <div class="icon-wrap">
                        <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="10" y="14" width="28" height="20" rx="4" stroke="#c0392b" stroke-width="2" />
                            <path d="M16 22h6M16 27h10" stroke="#c0392b" stroke-width="2" stroke-linecap="round" />
                            <path d="M30 18v-4a2 2 0 0 0-2-2H20a2 2 0 0 0-2 2v4" stroke="#c0392b" stroke-width="2" />
                            <circle cx="34" cy="34" r="7" fill="#fdf0f0" stroke="#c0392b" stroke-width="2" />
                            <path d="M31 34l2 2 4-4" stroke="#c0392b" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h5>Company Name Reservation</h5>
                    <p>Support in selecting and reserving a unique company name with MCA as per Indian naming guidelines.</p>
                </div>
            </div>

            <!-- 3. Incorporation Documentation -->
            <div class="col">
                <div class="service-card">
                    <div class="icon-wrap">
                        <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="12" y="8" width="24" height="32" rx="3" stroke="#c0392b" stroke-width="2" />
                            <path d="M18 16h12M18 21h12M18 26h8" stroke="#c0392b" stroke-width="2" stroke-linecap="round" />
                            <path d="M30 30l3 3-3 3" stroke="#c0392b" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M28 34h5" stroke="#c0392b" stroke-width="1.8" stroke-linecap="round" />
                        </svg>
                    </div>
                    <h5>Incorporation Documentation</h5>
                    <p>Preparation of essential incorporation documents, including MOA and AOA for company registration.</p>
                </div>
            </div>

            <!-- 4. Government Registration Process -->
            <div class="col">
                <div class="service-card">
                    <div class="icon-wrap">
                        <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 38h32M12 38V22M36 38V22" stroke="#c0392b" stroke-width="2" stroke-linecap="round" />
                            <path d="M18 38V30h12v8" stroke="#c0392b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8 22l16-12 16 12" stroke="#c0392b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M28 16l3 3-6 6" stroke="#c0392b" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h5>Government Registration Process</h5>
                    <p>Complete handling of company registration with MCA to legally establish your business.</p>
                </div>
            </div>

            <!-- 5. Digital Signature and DIN -->
            <div class="col">
                <div class="service-card">
                    <div class="icon-wrap">
                        <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="10" y="10" width="20" height="28" rx="3" stroke="#c0392b" stroke-width="2" />
                            <path d="M14 18h12M14 23h8" stroke="#c0392b" stroke-width="2" stroke-linecap="round" />
                            <path d="M26 32c0 0 4-2 8-1" stroke="#c0392b" stroke-width="1.8" stroke-linecap="round" />
                            <path d="M28 28l6 2-2 6" stroke="#c0392b" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h5>Digital Signature and DIN Registration Assistance</h5>
                    <p>Assistance in obtaining DSC and DIN required for directors during company incorporation.</p>
                </div>
            </div>

            <!-- 6. PAN & TAN Registration -->
            <div class="col">
                <div class="service-card">
                    <div class="icon-wrap">
                        <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="8" y="14" width="32" height="22" rx="4" stroke="#c0392b" stroke-width="2" />
                            <circle cx="18" cy="22" r="4" stroke="#c0392b" stroke-width="2" />
                            <path d="M26 20h8M26 25h6" stroke="#c0392b" stroke-width="2" stroke-linecap="round" />
                            <path d="M12 30h6" stroke="#c0392b" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </div>
                    <h5>PAN &amp; TAN Registration</h5>
                    <p>Assistance in obtaining PAN and TAN for smooth financial and tax operations.</p>
                </div>
            </div>

            <!-- 7. Regulatory Compliance Setup -->
            <div class="col">
                <div class="service-card">
                    <div class="icon-wrap">
                        <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 6L10 12v10c0 9 6 17 14 20 8-3 14-11 14-20V12L24 6z" stroke="#c0392b" stroke-width="2" stroke-linejoin="round" />
                            <path d="M17 24l4 4 10-10" stroke="#c0392b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h5>Regulatory Compliance Setup</h5>
                    <p>Ensuring full compliance with legal and regulatory requirements under the Companies Act, 2013.</p>
                </div>
            </div>

            <!-- 8. Startup & Entrepreneur Support -->
            <div class="col">
                <div class="service-card">
                    <div class="icon-wrap">
                        <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 8C24 8 14 14 14 26c0 5.5 4.5 10 10 10s10-4.5 10-10c0-12-10-18-10-18z" stroke="#c0392b" stroke-width="2" stroke-linejoin="round" />
                            <path d="M24 36v4M20 40h8" stroke="#c0392b" stroke-width="2" stroke-linecap="round" />
                            <circle cx="24" cy="25" r="3" stroke="#c0392b" stroke-width="2" />
                        </svg>
                    </div>
                    <h5>Startup &amp; Entrepreneur Support</h5>
                    <p>Tailored solutions for startups and businesses to build a strong legal foundation.</p>
                </div>
            </div>

            <!-- 9. Business Legitimacy & Credibility -->
            <div class="col">
                <div class="service-card">
                    <div class="icon-wrap">
                        <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="10" y="10" width="28" height="28" rx="4" stroke="#c0392b" stroke-width="2" />
                            <circle cx="24" cy="20" r="5" stroke="#c0392b" stroke-width="2" />
                            <path d="M14 36c0-5.5 4.5-10 10-10s10 4.5 10 10" stroke="#c0392b" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </div>
                    <h5>Business Legitimacy &amp; Credibility</h5>
                    <p>Company registration enhances credibility, investor trust, and long-term business stability.</p>
                </div>
            </div>

            <!-- 10. Seamless End-to-End Incorporation -->
            <div class="col">
                <div class="service-card">
                    <div class="icon-wrap">
                        <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="24" cy="24" r="14" stroke="#c0392b" stroke-width="2" />
                            <path d="M24 10v4M24 34v4M10 24h4M34 24h4" stroke="#c0392b" stroke-width="2" stroke-linecap="round" />
                            <path d="M17 17l3 3M28 28l3 3M17 31l3-3M28 20l3-3" stroke="#c0392b" stroke-width="1.8" stroke-linecap="round" />
                            <circle cx="24" cy="24" r="4" stroke="#c0392b" stroke-width="2" />
                        </svg>
                    </div>
                    <h5>Seamless End-to-End Incorporation</h5>
                    <p>A streamlined incorporation process ensuring smooth and legally compliant business setup.</p>
                </div>
            </div>

        </div>

    </div>

</section>

<section class="register">

    <div class="container position-relative" style="z-index:1;">

        <div class="row align-items-center g-5">

            <!-- Left: Text Content -->
            <div class="col-lg-5">
                <h2 class="register-heading">Private Limited Company Setup</h2>
                <p class="section-text">
                    A Private Limited Company is one of the most preferred business structures in India
                    for startups, entrepreneurs, and growing businesses. It offers a strong legal identity,
                    limited liability protection for shareholders, and greater credibility with investors,
                    clients, and financial institutions.
                </p>
                <p class="section-text">
                    Registering a Private Limited Company under the Companies Act, 2013 ensures a
                    structured framework for ownership, management, and compliance. It also
                    provides better opportunities for funding, business expansion, and long-term
                    scalability.
                </p>
                <p class="section-text">
                    At The Euphoria Group, we provide complete support for Private Limited Company
                    Registration, including name approval, DSC & DIN application, incorporation filing with
                    the Ministry of Corporate Affairs (MCA), and post-registration compliance—ensuring a
                    smooth and hassle-free setup process.
                </p>
            </div>

            <!-- Right: Circle Grid -->
            <div class="col-lg-7">
                <div class="circles-grid">

                    <!-- Row 1 -->
                    <div class="d-flex justify-content-center">
                        <div class="feature-circle large">
                            <svg viewBox="0 0 24 24">
                                <path d="M12 2L2 7l10 5 10-5-10-5z" />
                                <path d="M2 17l10 5 10-5" />
                                <path d="M2 12l10 5 10-5" />
                            </svg>
                            <span class="label">Startup-Friendly Structure</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="feature-circle large">
                            <svg viewBox="0 0 24 24">
                                <rect x="3" y="11" width="18" height="11" rx="2" />
                                <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                            </svg>
                            <span class="label">Limited Liability Protection</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="feature-circle large">
                            <svg viewBox="0 0 24 24">
                                <circle cx="12" cy="8" r="4" />
                                <path d="M6 20v-2a6 6 0 0 1 12 0v2" />
                                <path d="M19 8l2 2-2 2" />
                            </svg>
                            <span class="label">Strong Investor Credibility</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="feature-circle large">
                            <svg viewBox="0 0 24 24">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                                <polyline points="14 2 14 8 20 8" />
                                <line x1="9" y1="13" x2="15" y2="13" />
                                <line x1="9" y1="17" x2="13" y2="17" />
                            </svg>
                            <span class="label">MCA Regulatory Compliance</span>
                        </div>
                    </div>

                    <!-- Row 2 -->
                    <div class="d-flex justify-content-center">
                        <div class="feature-circle large">
                            <svg viewBox="0 0 24 24">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                                <polyline points="9 22 9 12 15 12 15 22" />
                            </svg>
                            <span class="label">Corporate Governance</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="feature-circle large">
                            <svg viewBox="0 0 24 24">
                                <line x1="12" y1="1" x2="12" y2="23" />
                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" />
                            </svg>
                            <span class="label">Better Funding Opportunities</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="feature-circle large">
                            <svg viewBox="0 0 24 24">
                                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" />
                            </svg>
                            <span class="label">Scalable Business Model</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="feature-circle large">
                            <svg viewBox="0 0 24 24">
                                <path d="M18 20V10" />
                                <path d="M12 20V4" />
                                <path d="M6 20v-6" />
                            </svg>
                            <span class="label">Enhanced Business Credibility</span>
                        </div>
                    </div>

                </div>
            </div>
            <!-- End Right -->

        </div>


    </div>


</section>

<section class="alliance">

    <div class="container position-relative py-5" style="z-index:1;">
        <h2 class="alliance-heading">LLP Registration</h2>

        <!-- Swiper -->
        <div class="swiper benefitsSwiper">
            <div class="swiper-wrapper">

                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="benefit-card-alliance">
                        <div class="card-bg" style="background-image:url('https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=800&q=80');"></div>
                        <div class="card-overlay"></div>
                        <div class="card-content">
                            <h3 class="card-title-alliance">Limited Liability Protection</h3>
                            <p class="card-desc-alliance">Protects partners' personal assets by limiting liability to their agreed contribution in the LLP.</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="benefit-card-alliance">
                        <div class="card-bg" style="background-image:url('https://images.unsplash.com/photo-1553729459-efe14ef6055d?w=800&q=80');"></div>
                        <div class="card-overlay"></div>
                        <div class="card-content">

                            <h3 class="card-title-alliance">Flexible Business Structure</h3>
                            <p class="card-desc-alliance">Combines partnership flexibility with the legal protection offered by a corporate entity.</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div class="benefit-card-alliance">
                        <div class="card-bg" style="background-image:url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800&q=80');"></div>
                        <div class="card-overlay"></div>
                        <div class="card-content">

                            <h3 class="card-title-alliance">Lower Compliance Requirements</h3>
                            <p class="card-desc-alliance">LLPs have fewer regulatory requirements than companies, making management simpler.</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="swiper-slide">
                    <div class="benefit-card-alliance">
                        <div class="card-bg" style="background-image:url('https://images.unsplash.com/photo-1556761175-5973dc0f32e7?w=800&q=80');"></div>
                        <div class="card-overlay"></div>
                        <div class="card-content">

                            <h3 class="card-title-alliance">For Experts & Small Businesses</h3>
                            <p class="card-desc-alliance">Ideal for consultants, startups, and professionals seeking a flexible business structure.</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 5 -->
                <div class="swiper-slide">
                    <div class="benefit-card-alliance">
                        <div class="card-bg" style="background-image:url('https://images.unsplash.com/photo-1559526324-4b87b5e36e44?w=800&q=80');"></div>
                        <div class="card-overlay"></div>
                        <div class="card-content">

                            <h3 class="card-title-alliance">Tax Efficiency</h3>
                            <p class="card-desc-alliance">Partners are taxed individually on their share of profits, avoiding double taxation common in corporations.</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 6 -->
                <div class="swiper-slide">
                    <div class="benefit-card-alliance">
                        <div class="card-bg" style="background-image:url('https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=800&q=80');"></div>
                        <div class="card-overlay"></div>
                        <div class="card-content">

                            <h3 class="card-title-alliance">Perpetual Succession</h3>
                            <p class="card-desc-alliance">The LLP continues to exist even if partners change, ensuring business continuity and stability.</p>
                        </div>
                    </div>
                </div>

            </div><!-- /.swiper-wrapper -->

            <!-- Pagination -->
            <div class="swiper-pagination mt-3"></div>
        </div><!-- /.swiper -->

        <!-- Custom Navigation -->
        <div class="d-flex justify-content-center align-items-center gap-3 mt-3">
            <button class="swiper-nav-btn" id="prevBtn" aria-label="Previous">
                <svg fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
            </button>
            <button class="swiper-nav-btn" id="nextBtn" aria-label="Next">
                <svg fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </button>
        </div>
    </div>

</section>

<section class="individual">

    <div class="container position-relative" style="z-index:1;">

        <h2 class="individual-heading">OPC ( One Person Company )</h2>

        <div class="row align-items-center g-5 py-5">

            <!-- LEFT: Benefit Items -->
            <div class="col-lg-8">

                <div class="benefit-item active" onclick="toggleItem(this)">
                    <div class="benefit-header">
                        <h3 class="benefit-title">Ideal for Solo Entrepreneurs</h3>
                        <span class="arrow-icon">
                            <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </span>
                    </div>
                    <p class="benefit-desc">Designed specifically for individual founders who want to start and operate a business independently with full ownership.</p>
                </div>

                <div class="benefit-item" onclick="toggleItem(this)">
                    <div class="benefit-header">
                        <h3 class="benefit-title">Complete Business Control</h3>
                        <span class="arrow-icon">
                            <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </span>
                    </div>
                    <p class="benefit-desc">Allows a single entrepreneur to manage decision-making, strategy, and operations without the need for partners.</p>
                </div>

                <div class="benefit-item" onclick="toggleItem(this)">
                    <div class="benefit-header">
                        <h3 class="benefit-title">Limited Liability Protection</h3>
                        <span class="arrow-icon">
                            <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </span>
                    </div>
                    <p class="benefit-desc">Protects the personal assets of the owner by limiting liability to the company's financial obligations.</p>
                </div>

                <div class="benefit-item" onclick="toggleItem(this)">
                    <div class="benefit-header">
                        <h3 class="benefit-title">Separate Legal Identity</h3>
                        <span class="arrow-icon">
                            <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </span>
                    </div>
                    <p class="benefit-desc">The business operates as a separate legal entity, enabling it to own assets, sign contracts, and conduct business independently.</p>
                </div>

                <div class="benefit-item" onclick="toggleItem(this)">
                    <div class="benefit-header">
                        <h3 class="benefit-title">Corporate Recognition & Credibility</h3>
                        <span class="arrow-icon">
                            <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </span>
                    </div>
                    <p class="benefit-desc">Registration under the Companies Act enhances professional credibility with clients, vendors, and financial institutions.</p>
                </div>

                <div class="benefit-item remove-bottom-border" onclick="toggleItem(this)">
                    <div class="benefit-header">
                        <h3 class="benefit-title">Simplified Compliance Structure</h3>
                        <span class="arrow-icon">
                            <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </span>
                    </div>
                    <p class="benefit-desc">Compared to larger companies, OPCs have relatively simpler regulatory and compliance requirements.</p>
                </div>

            </div><!-- /col-lg-7 -->

            <!-- RIGHT: Image -->
            <div class="col-lg-4">
                <div class="img-wrapper">
                    <img
                        src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=800&q=80"
                        alt="Solo Entrepreneur" />
                </div>
            </div>

        </div>

    </div>

</section>

<section class="setup">

    <div class="container position-relative" style="z-index:1;">

        <h2 class="setup-heading">Partnership Firm Registration</h2>

        <div class="row g-4 py-5">

            <!-- Row 1 -->
            <div class="col-12 col-sm-6 col-lg-3 col-divider">
                <div class="benefit-card">
                    <div class="icon-wrap">
                        <!-- Partners icon -->
                        <svg fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                        </svg>
                    </div>
                    <h3 class="card-title">Ideal for Two or More Partners</h3>
                    <p class="card-desc">A suitable business structure for entrepreneurs who want to start and manage a business together with shared responsibilities.</p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 col-divider">
                <div class="benefit-card">
                    <div class="icon-wrap">
                        <!-- Setup / gear icon -->
                        <svg fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 011.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.56.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.893.149c-.425.07-.765.383-.93.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 01-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.397.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 01-.12-1.45l.527-.737c.25-.35.273-.806.108-1.204-.165-.397-.505-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 01.12-1.45l.773-.773a1.125 1.125 0 011.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <h3 class="card-title">Simple Business Setup</h3>
                    <p class="card-desc">Partnership firm registration involves a straightforward formation process with minimal legal formalities.</p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 col-divider">
                <div class="benefit-card">
                    <div class="icon-wrap">
                        <!-- Cost / money icon -->
                        <svg fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                        </svg>
                    </div>
                    <h3 class="card-title">Cost-Effective Structure</h3>
                    <p class="card-desc">Compared to corporate entities, partnership firms generally involve lower setup and operational costs.</p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 col-divider">
                <div class="benefit-card">
                    <div class="icon-wrap">
                        <!-- Flexible / arrows icon -->
                        <svg fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
                        </svg>
                    </div>
                    <h3 class="card-title">Flexible Business Operations</h3>
                    <p class="card-desc">The partnership agreement allows partners to define roles, responsibilities, and profit-sharing arrangements.</p>
                </div>
            </div>

            <!-- Row 2 -->
            <div class="col-12 col-sm-6 col-lg-3 col-divider">
                <div class="benefit-card">
                    <div class="icon-wrap">
                        <!-- Distribution / pie icon -->
                        <svg fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                        </svg>
                    </div>
                    <h3 class="card-title">Profit Distribution Among Partners</h3>
                    <p class="card-desc">Business profits are distributed among partners based on mutually agreed terms in the partnership deed.</p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 col-divider">
                <div class="benefit-card">
                    <div class="icon-wrap">
                        <!-- SMB / briefcase icon -->
                        <svg fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z" />
                        </svg>
                    </div>
                    <h3 class="card-title">Ideal for Small & Medium Businesses</h3>
                    <p class="card-desc">Ideal for family businesses, professional firms, and small enterprises seeking a flexible operational structure.</p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 col-divider">
                <div class="benefit-card">
                    <div class="icon-wrap">
                        <!-- Quick / clock icon -->
                        <svg fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="card-title">Quick Registration Process</h3>
                    <p class="card-desc">The formation process is relatively faster, allowing businesses to begin operations quickly.</p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 col-divider">
                <div class="benefit-card">
                    <div class="icon-wrap">
                        <!-- Credibility / badge icon -->
                        <svg fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-.44 3.899 3.745 3.745 0 01-3.896.44A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.899-.44 3.745 3.745 0 01-.44-3.896A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 01.44-3.899 3.746 3.746 0 013.896-.44A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.899.44 3.746 3.746 0 01.44 3.896A3.745 3.745 0 0121 12z" />
                        </svg>
                    </div>
                    <h3 class="card-title">Improved Business Credibility</h3>
                    <p class="card-desc">A registered partnership firm enhances trust with clients, vendors, and financial institutions.</p>
                </div>
            </div>

        </div><!-- /.row -->

    </div>

</section>

<section class="ownership">
    <div class="container position-relative" style="z-index:1;">

        <div class="row align-items-center g-5">

            <!-- LEFT: Image -->
            <div class="col-lg-5">
                <div class="img-wrapper-ownership">
                    <img
                        src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=800&q=80"
                        alt="Proprietorship Setup" />
                </div>
            </div>

            <!-- RIGHT: Content -->
            <div class="col-lg-7">
                <div class="content-side">

                    <h2 class="ownership-heading">Proprietorship Setup</h2>
                    <!-- Description -->
                    <p class="section-desc">
                        A Partnership Firm is an ideal business structure for entrepreneurs who want to manage a business together with shared responsibilities and flexibility. It offers a simple and quick registration process with minimal legal formalities and lower setup costs compared to corporate entities. Partners can define their roles, responsibilities, and profit-sharing terms through a partnership deed, ensuring smooth operations and mutual understanding. With collective decision-making, shared expertise, and combined resources, it supports better growth and teamwork. This structure is especially suitable for family businesses, professional firms, and small enterprises looking for an easy-to-manage and cost-effective setup.
                    </p>

                    <!-- Checklist -->
                    <div class="checklist">

                        <div class="check-item">
                            <span class="check-icon">
                                <svg viewBox="0 0 24 24" fill="none">
                                    <path d="M9 12.5L6 9.5" stroke="#d0021b" stroke-width="0" />
                                    <path d="M5 13l4 4L19 7" stroke="#d0021b" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M5 13l4 4" stroke="#d0021b" stroke-width="2.8" stroke-linecap="round" />
                                </svg>
                            </span>
                            <span class="check-label">Ideal for Individual Entrepreneurs</span>
                        </div>

                        <div class="check-item">
                            <span class="check-icon">
                                <svg viewBox="0 0 24 24" fill="none">
                                    <path d="M5 13l4 4L19 7" stroke="#d0021b" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            <span class="check-label">Quick &amp; Simple Business Setup</span>
                        </div>

                        <div class="check-item">
                            <span class="check-icon">
                                <svg viewBox="0 0 24 24" fill="none">
                                    <path d="M5 13l4 4L19 7" stroke="#d0021b" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            <span class="check-label">Complete Operational Control</span>
                        </div>

                        <div class="check-item">
                            <span class="check-icon">
                                <svg viewBox="0 0 24 24" fill="none">
                                    <path d="M5 13l4 4L19 7" stroke="#d0021b" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            <span class="check-label">Minimal Compliance Requirements</span>
                        </div>

                        <div class="check-item">
                            <span class="check-icon">
                                <svg viewBox="0 0 24 24" fill="none">
                                    <path d="M5 13l4 4L19 7" stroke="#d0021b" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            <span class="check-label">Easy Taxation Process</span>
                        </div>

                        <div class="check-item">
                            <span class="check-icon">
                                <svg viewBox="0 0 24 24" fill="none">
                                    <path d="M5 13l4 4L19 7" stroke="#d0021b" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            <span class="check-label">Cost-Effective Business Structure</span>
                        </div>

                        <div class="check-item">
                            <span class="check-icon">
                                <svg viewBox="0 0 24 24" fill="none">
                                    <path d="M5 13l4 4L19 7" stroke="#d0021b" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            <span class="check-label">Flexible Business Operations</span>
                        </div>

                        <div class="check-item">
                            <span class="check-icon">
                                <svg viewBox="0 0 24 24" fill="none">
                                    <path d="M5 13l4 4L19 7" stroke="#d0021b" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            <span class="check-label">Ideal for Small Businesses &amp; Freelancers</span>
                        </div>

                        <div class="check-item">
                            <span class="check-icon">
                                <svg viewBox="0 0 24 24" fill="none">
                                    <path d="M5 13l4 4L19 7" stroke="#d0021b" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            <span class="check-label">Full Profit Ownership</span>
                        </div>

                        <div class="check-item">
                            <span class="check-icon">
                                <svg viewBox="0 0 24 24" fill="none">
                                    <path d="M5 13l4 4L19 7" stroke="#d0021b" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            <span class="check-label">Foundation for Future Expansion</span>
                        </div>

                    </div><!-- /.checklist -->
                </div>
            </div>

        </div>

    </div>

</section>

<section class="compliance">

    <div class="container position-relative py-5" style="z-index:1;">
        <h2 class="compliance-heading">Pan, Tan, Gst Registration</h2>

        <!-- Heading -->
        <div class="text-center mb-5">
            <span class="section-tag">Why It Matters</span>
            <h2 class="mb-3">Key <span>Tax Registration</span> Benefits</h2>
            <p class="lead">
                PAN, TAN, and GST registrations form the foundation of every compliant
                business operating in India.
            </p>
        </div>

        <!-- Swiper -->
        <div class="swiper taxSwiper">
            <div class="swiper-wrapper">

                <!-- Card 1 -->
                <div class="swiper-slide">
                    <div class="tax-card">
                        <div class="icon-wrap">
                            <!-- clipboard / legal icon -->
                            <svg viewBox="0 0 24 24">
                                <path d="M9 5H7a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-2" />
                                <rect x="9" y="3" width="6" height="4" rx="1" />
                                <line x1="9" y1="12" x2="15" y2="12" />
                                <line x1="9" y1="16" x2="12" y2="16" />
                            </svg>
                        </div>
                        <h5>Essential for Legal Business Operations</h5>
                        <p>PAN, TAN, and GST registrations are fundamental tax registrations required for legally operating and managing financial transactions in India.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="swiper-slide">
                    <div class="tax-card">
                        <div class="icon-wrap">
                            <!-- ID / PAN card icon -->
                            <svg viewBox="0 0 24 24">
                                <rect x="2" y="5" width="20" height="14" rx="2" />
                                <circle cx="8" cy="12" r="2" />
                                <line x1="13" y1="10" x2="19" y2="10" />
                                <line x1="13" y1="14" x2="17" y2="14" />
                            </svg>
                        </div>
                        <h5>Permanent Account Number (PAN) for Tax Identity</h5>
                        <p>PAN acts as a unique financial identification number for businesses, enabling them to file taxes and conduct official financial activities.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="swiper-slide">
                    <div class="tax-card">
                        <div class="icon-wrap">
                            <!-- Receipt / TAN icon -->
                            <svg viewBox="0 0 24 24">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                                <polyline points="14 2 14 8 20 8" />
                                <line x1="9" y1="13" x2="15" y2="13" />
                                <line x1="9" y1="17" x2="13" y2="17" />
                                <path d="M9 9h1" />
                            </svg>
                        </div>
                        <h5>Tax Deduction &amp; Collection Compliance (TAN)</h5>
                        <p>TAN registration is required for businesses responsible for deducting or collecting tax at source under Indian tax regulations.</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="swiper-slide">
                    <div class="tax-card">
                        <div class="icon-wrap">
                            <!-- GST % icon -->
                            <svg viewBox="0 0 24 24">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                                <polyline points="14 2 14 8 20 8" />
                                <line x1="9" y1="15" x2="15" y2="15" />
                                <circle cx="9.5" cy="12.5" r=".5" fill="currentColor" stroke="none" />
                                <circle cx="14.5" cy="17.5" r=".5" fill="currentColor" stroke="none" />
                                <line x1="9" y1="18" x2="15" y2="12" />
                            </svg>
                        </div>
                        <h5>GST Registration for Goods &amp; Services Tax Compliance</h5>
                        <p>GST registration allows businesses to legally collect and remit Goods and Services Tax on the supply of goods and services.</p>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="swiper-slide">
                    <div class="tax-card">
                        <div class="icon-wrap">
                            <!-- Handshake / transaction icon -->
                            <svg viewBox="0 0 24 24">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
                            </svg>
                        </div>
                        <h5>Smooth Business Transactions</h5>
                        <p>Proper tax registrations enable seamless invoicing, billing, and financial transactions with clients, vendors, and government authorities.</p>
                    </div>
                </div>

            </div><!-- /.swiper-wrapper -->

            <div class="swiper-pagination"></div>
        </div><!-- /.swiper -->

        <!-- Custom nav -->
        <div class="swiper-nav">
            <button class="swiper-btn" id="taxPrev" aria-label="Previous">&#8592;</button>
            <button class="swiper-btn" id="taxNext" aria-label="Next">&#8594;</button>
        </div>

    </div>

</section>

<section class="non-profit">

    <div class="container position-relative" style="z-index:1;">

        <h2 class="non-profit-heading">NGO / Trust / Section 8 Company Registration</h2>

        <div class="row g-4 align-items-stretch py-5">

            <!-- LEFT column -->
            <div class="col-lg-4 np-col-left d-flex flex-column justify-content-between">

                <div class="np-feature">
                    <h5 class="np-feature__title">Legal Recognition for <em>Non-profit Activities</em></h5>
                    <p class="np-feature__desc">Provides official legal status for organisations working in social, charitable, educational, and community development sectors.</p>
                </div>

                <div class="np-feature">
                    <h5 class="np-feature__title">Structured <em>Non-profit Governance</em></h5>
                    <p class="np-feature__desc">Establishes a transparent management framework for trustees, members, or directors to manage the organisation responsibly.</p>
                </div>

                <div class="np-feature">
                    <h5 class="np-feature__title">Eligibility for <em>Grants &amp; Funding</em></h5>
                    <p class="np-feature__desc">Registered nonprofit organisations can apply for government grants, CSR funding, and donations from institutions and individuals.</p>
                </div>

                <div class="np-feature">
                    <h5 class="np-feature__title">Enhanced <em>Public Trust &amp; Credibility</em></h5>
                    <p class="np-feature__desc">Legal registration builds confidence among donors, volunteers, partners, and beneficiaries.</p>
                </div>

                <div class="np-feature">
                    <h5 class="np-feature__title">Regulatory <em>Compliance &amp; Transparency</em></h5>
                    <p class="np-feature__desc">Ensures the organisation operates in accordance with applicable laws and regulatory guidelines.</p>
                </div>

            </div><!-- /LEFT -->

            <!-- CENTER image -->
            <div class="col-lg-4 d-none d-lg-flex">
                <div class="np-img-wrap w-100">
                    <img
                        src="https://images.unsplash.com/photo-1593113598332-cd288d649433?auto=format&fit=crop&w=800&q=80"
                        alt="Hands holding a seedling — symbol of non-profit growth" />
                </div>
            </div><!-- /CENTER -->

            <!-- RIGHT column -->
            <div class="col-lg-4 np-col-right d-flex flex-column justify-content-between">

                <div class="np-feature">
                    <h5 class="np-feature__title"><em>Tax Benefits</em> &amp; Exemptions</h5>
                    <p class="np-feature__desc">Registered NGOs and charitable organisations may qualify for tax exemptions and donor benefits under applicable tax provisions.</p>
                </div>

                <div class="np-feature">
                    <h5 class="np-feature__title">Strong Foundation for <em>Social Change</em></h5>
                    <p class="np-feature__desc">Establishes a reliable and legally compliant framework to drive meaningful impact, expand charitable initiatives, and support community development.</p>
                </div>

                <div class="np-feature">
                    <h5 class="np-feature__title">Long-Term <em>Social Impact</em></h5>
                    <p class="np-feature__desc">Provides a structured platform to create sustainable programs that support education, healthcare, social welfare, and community empowerment.</p>
                </div>

                <div class="np-feature">
                    <h5 class="np-feature__title">Legal Recognition for <em>Non-profit Activities</em></h5>
                    <p class="np-feature__desc">Corporate Social Responsibility (CSR) collaborations become easier with a registered nonprofit entity.</p>
                </div>

                <div class="np-feature">
                    <h5 class="np-feature__title">Separate <em>Legal Identity</em></h5>
                    <p class="np-feature__desc">Enables the organisation to hold property, open bank accounts, and enter into agreements in its own name.</p>
                </div>

            </div><!-- /RIGHT -->

        </div>

    </div>

</section>

<section class="si-banner mb-5">
 
  <!-- Decorative bg elements -->
  <span class="si-banner__watermark">startupindia</span>
  <div class="si-banner__stripe"><span></span></div>
  <div class="si-banner__chakra"></div> 
 
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10 col-xl-8 si-banner__inner">
 
        <h1 class="si-banner__title">Start-up India Registration</h1>
 
        <p class="si-banner__desc">
          Kickstart your entrepreneurial journey with hassle-free Start-up India
          registration. We provide end-to-end support—from documentation to
          approval—ensuring your business is recognised and ready to grow with
          government benefits and compliance ease.
        </p>
 
      </div>
    </div>
  </div>
 
</section>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    const tax_swiper = new Swiper('.taxSwiper', {
        slidesPerView: 1,
        spaceBetween: 24,
        loop: true,
        grabCursor: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            576: {
                slidesPerView: 2
            },
            768: {
                slidesPerView: 3
            },
            992: {
                slidesPerView: 4
            },
            1200: {
                slidesPerView: 5
            },
        },
        navigation: {
            nextEl: '#taxNext',
            prevEl: '#taxPrev',
        },
    });

    document.getElementById('taxNext').addEventListener('click', () => swiper.slideNext());
    document.getElementById('taxPrev').addEventListener('click', () => swiper.slidePrev());
</script>
<script>
    function toggleItem(el) {
        const items = document.querySelectorAll('.benefit-item');
        items.forEach(item => {
            if (item !== el) item.classList.remove('active');
        });
        el.classList.toggle('active');
    }
</script>
<script>
    const swiper = new Swiper('.benefitsSwiper', {
        slidesPerView: 1.2,
        spaceBetween: 20,
        centeredSlides: false,
        grabCursor: true,
        loop: false,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '#nextBtn',
            prevEl: '#prevBtn',
            disabledClass: 'swiper-button-disabled',
        },
        breakpoints: {
            576: {
                slidesPerView: 1.8,
                spaceBetween: 22
            },
            768: {
                slidesPerView: 2.5,
                spaceBetween: 24
            },
            992: {
                slidesPerView: 3.3,
                spaceBetween: 26
            },
            1200: {
                slidesPerView: 4.1,
                spaceBetween: 28
            },
        },
    });
</script>
<?php
include_once('elements/faqs.php');
include_once('elements/footer.php');
?>