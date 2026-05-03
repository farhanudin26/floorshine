@extends('layouts.app')

@section('title', 'Floorshine - Singapore Professional Floor Polishing Company')

@push('styles')
    <style>
        /* ============================================================
                           HERO SECTION
                           ============================================================ */
        .hero {
            background: linear-gradient(135deg, #35adb5 0%, #35adb5 60%, #35adb5 100%);
            padding: 80px 0 70px;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: -80px;
            right: -80px;
            width: 400px;
            height: 400px;
            background: rgba(255, 255, 255, 0.04);
            border-radius: 50%;
        }

        .hero-content {
            max-width: 900px;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            background: rgba(255, 255, 255, 0.18);
            color: #fff;
            padding: 5px 14px;
            border-radius: 100px;
            font-size: 13px;
            font-weight: 500;
            margin-bottom: 18px;
        }

        .hero h1 {
            font-family: var(--font-head);
            font-size: clamp(30px, 4.5vw, 52px);
            font-weight: 800;
            color: #fff;
            line-height: 1.13;
            margin-bottom: 16px;
            letter-spacing: -1px;
        }

        .hero p {
            color: rgba(255, 255, 255, 0.87);
            font-size: 15.5px;
            line-height: 1.7;
            margin-bottom: 28px;
            max-width: 700px;
        }

        .btn-white {
            background: #fff;
            color: var(--teal-dark);
            padding: 13px 28px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 14.5px;
            font-weight: 700;
            font-family: var(--font-head);
            transition: all 0.2s;
            display: inline-block;
            box-shadow: 0 4px 18px rgba(0, 0, 0, 0.12);
        }

        .btn-white:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.18);
        }

        /* ============================================================
                           STATS BAR
                           ============================================================ */
        .stats-bar {
            background: #efb700;
            padding: 30px 0;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 0;
            text-align: center;
        }

        .stat-item {
            padding: 14px 20px;
            border-right: 1px solid rgba(255, 255, 255, 0.08);
        }

        .stat-item:last-child {
            border-right: none;
        }

        .stat-item .s-icon {
            font-size: 34px;
            color: #fff;
            margin-bottom: 8px;
        }

        .stat-item .s-num {
            font-family: var(--font-head);
            font-size: 34px;
            font-weight: 800;
            color: #fff;
            line-height: 1;
            margin-bottom: 5px;
        }

        .stat-item .s-label {
            font-size: 13.5px;
            color: rgba(255, 255, 255, 0.6);
            font-weight: 500;
        }

        /* ============================================================
                           SECTION COMMONS
                           ============================================================ */
        section {
            padding: 76px 0;
        }

        .section-label {
            display: inline-block;
            background: var(--teal-light);
            color: var(--teal-dark);
            padding: 5px 14px;
            border-radius: 100px;
            font-size: 12.5px;
            font-weight: 600;
            margin-bottom: 12px;
            text-transform: uppercase;
            letter-spacing: 0.6px;
        }

        .section-title {
            font-family: var(--font-head);
            font-size: clamp(24px, 3vw, 38px);
            font-weight: 800;
            color: var(--navy);
            line-height: 1.2;
            margin-bottom: 14px;
            letter-spacing: -0.5px;
        }

        .section-sub {
            font-size: 15.5px;
            color: var(--gray-600);
            line-height: 1.7;
            max-width: 640px;
            margin: 0 auto;
        }

        .text-center {
            text-align: center;
        }

        /* ============================================================
                           SOLUTIONS
                           ============================================================ */
        .solutions-bg {
            background: var(--gray-50);
        }

        .solutions-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 56px;
            align-items: center;
            margin-top: 48px;
        }

        .sol-item {
            margin-bottom: 24px;
        }

        .sol-item h3 {
            font-family: var(--font-head);
            font-size: 17px;
            font-weight: 700;
            color: var(--navy);
            margin-bottom: 7px;
        }

        .sol-item p {
            color: var(--gray-600);
            font-size: 14.5px;
            line-height: 1.7;
        }

        .sol-visual {
            background: var(--teal-light);
            border-radius: 20px;
            padding: 32px 28px;
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .feat-pill {
            background: #fff;
            border-radius: 12px;
            padding: 14px 18px;
            display: flex;
            align-items: center;
            gap: 14px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s;
        }

        .feat-pill:hover {
            transform: translateX(5px);
        }

        .feat-pill .fp-ico {
            width: 40px;
            height: 40px;
            background: var(--teal);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 17px;
            flex-shrink: 0;
        }

        .feat-pill strong {
            font-family: var(--font-head);
            font-size: 14px;
            color: var(--navy);
            display: block;
        }

        .feat-pill span {
            font-size: 12.5px;
            color: var(--gray-600);
        }

        /* ============================================================
                           HOW IT WORKS (Find your service)
                           ============================================================ */
        .how-bg {
            background: var(--teal-light);
        }

        .steps-wrap {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-top: 48px;
        }

        .step-box {
            background: #fff;
            border-radius: 16px;
            padding: 28px 20px;
            text-align: center;
            box-shadow: 0 2px 14px rgba(0, 0, 0, 0.06);
            transition: transform 0.2s;
        }

        .step-box:hover {
            transform: translateY(-4px);
        }

        .step-ico {
            width: 64px;
            height: 64px;
            background: var(--teal-light);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 26px;
            color: var(--teal);
            margin: 0 auto 16px;
        }

        .step-box h3 {
            font-family: var(--font-head);
            font-size: 15px;
            font-weight: 700;
            color: var(--navy);
            margin-bottom: 8px;
        }

        .step-box p {
            font-size: 13px;
            color: var(--gray-600);
            line-height: 1.6;
            margin-bottom: 0;
        }

        .btn-wa-start {
            background: var(--teal);
            color: #fff;
            padding: 13px 32px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 15px;
            font-weight: 700;
            font-family: var(--font-head);
            display: inline-flex;
            align-items: center;
            gap: 9px;
            margin-top: 40px;
            transition: background 0.2s;
        }

        .btn-wa-start:hover {
            background: var(--teal-dark);
            color: #fff;
        }

        /* ============================================================
                           TESTIMONIALS
                           ============================================================ */
        .testi-wrap {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
            margin-top: 44px;
        }

        .testi-card {
            background: #fff;
            border: 1px solid var(--gray-200);
            border-radius: 16px;
            padding: 26px 22px;
            position: relative;
            transition: box-shadow 0.2s;
        }

        .testi-card:hover {
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
        }

        .testi-header {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 14px;
        }

        .testi-avatar {
            width: 46px;
            height: 46px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: var(--font-head);
            font-size: 17px;
            font-weight: 700;
            color: #fff;
            flex-shrink: 0;
        }

        .testi-name {
            font-family: var(--font-head);
            font-size: 15px;
            font-weight: 700;
            color: var(--navy);
        }

        .testi-stars {
            color: #F59E0B;
            font-size: 13px;
            margin-top: 2px;
        }

        .testi-text {
            font-size: 14px;
            color: var(--gray-600);
            line-height: 1.7;
        }

        .testi-quote {
            position: absolute;
            top: 18px;
            right: 20px;
            font-size: 36px;
            color: var(--teal-light);
            font-family: Georgia, serif;
            line-height: 1;
        }

        /* ============================================================
       FLOOR TYPES (Services Grid)
       ============================================================ */
        .floors-bg {
            background: #35adb5;
            padding: 60px 0;
        }

        .floors-bg .section-title {
            color: #fff;
            font-size: 36px;
        }

        .floors-bg .section-label,
        .floors-bg .section-sub {
            color: rgba(255, 255, 255, 0.85);
        }

        .floors-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-top: 44px;
        }

        .floor-card {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            border: none;
            text-decoration: none;
            color: inherit;
            transition: all 0.25s;
            display: flex;
            flex-direction: column;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .floor-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 36px rgba(0, 0, 0, 0.15);
        }

        .floor-img-wrapper {
            width: 100%;
            height: 160px;
            position: relative;
            overflow: hidden;
            border-radius: 16px 16px 0 0;
        }

        .floor-img {
            width: 100%;
            height: 160px;
            object-fit: cover;
            display: block;
        }

        .floor-img-placeholder {
            width: 100%;
            height: 160px;
            background: linear-gradient(135deg, var(--teal-light), #b2ece4);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 38px;
            color: var(--teal);
        }

        .floor-body {
            padding: 16px 16px 20px;
            display: flex;
            flex-direction: column;
            flex: 1;
        }

        .floor-body h3 {
            font-family: var(--font-head);
            font-size: 15px;
            font-weight: 800;
            color: #35adb5;
            margin-bottom: 8px;
        }

        .floor-body p {
            font-size: 12.5px;
            color: #555;
            line-height: 1.65;
            margin-bottom: 16px;
            flex: 1;
        }

        .floor-btn {
            display: block;
            text-align: center;
            background: #35adb5;
            color: #fff;
            font-size: 13px;
            font-weight: 700;
            padding: 10px 0;
            border-radius: 10px;
            transition: background 0.2s;
            text-decoration: none;
        }

        .floor-card:hover .floor-btn {
            background: #2a9aa2;
        }

        /* ============================================================
       ABOUT US
       ============================================================ */
        .about-grid {
            display: grid;
            grid-template-columns: 220px 1fr;
            gap: 50px;
            align-items: start;
        }

        .about-section-title {
            font-family: var(--font-head);
            font-size: 26px;
            font-weight: 800;
            color: var(--teal);
            border-bottom: 3px solid var(--teal);
            display: inline-block;
            padding-bottom: 4px;
            margin-bottom: 16px;
        }

        .about-subtitle {
            font-family: var(--font-head);
            font-size: 17px;
            font-weight: 800;
            color: #111;
            margin-bottom: 14px;
            line-height: 1.4;
        }

        .about-content p {
            color: #444;
            font-size: 14.5px;
            line-height: 1.75;
            margin-bottom: 12px;
        }

        .about-contact-line {
            font-size: 14.5px;
            color: #444;
            line-height: 1.75;
            margin-top: 28px;
        }

        .vm-block {
            margin-bottom: 28px;
        }

        .vm-block p {
            font-size: 14.5px;
            color: #444;
            line-height: 1.75;
            max-width: 1000px;
        }

        /* ============================================================
                           WHY CHOOSE FLOORSHINE
                           ============================================================ */
        .why-bg {
            background: var(--teal-light);
        }

        .why-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
            margin-top: 44px;
        }

        .why-card {
            background: #fff;
            border-radius: 16px;
            padding: 30px 22px;
            text-align: center;
            transition: all 0.2s;
            border: 1px solid rgba(255, 255, 255, 0.6);
        }

        .why-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 28px rgba(29, 187, 164, 0.13);
        }

        .why-ico {
            width: 68px;
            height: 68px;
            background: var(--teal-light);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            color: var(--teal);
            margin: 0 auto 16px;
            transition: all 0.2s;
        }

        .why-card:hover .why-ico {
            background: var(--teal);
            color: #fff;
        }

        .why-card h3 {
            font-family: var(--font-head);
            font-size: 16px;
            font-weight: 700;
            color: var(--navy);
            margin-bottom: 9px;
        }

        .why-card p {
            font-size: 13.5px;
            color: var(--gray-600);
            line-height: 1.65;
        }

        .why-wa {
            text-align: center;
            margin-top: 40px;
        }

        /* ============================================================
                           FAQ
                           ============================================================ */
        .faq-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
            margin-top: 44px;
            align-items: start;
        }

        .faq-item {
            background: #fff;
            border: 1px solid var(--gray-200);
            border-radius: 12px;
            overflow: hidden;
            transition: border-color 0.2s;
        }

        .faq-item.open {
            border-color: var(--teal);
        }

        .faq-q {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 12px;
            padding: 18px 20px;
            cursor: pointer;
            font-family: var(--font-head);
            font-size: 14.5px;
            font-weight: 600;
            color: var(--navy);
            user-select: none;
        }

        .faq-q i {
            color: var(--teal);
            font-size: 13px;
            flex-shrink: 0;
            transition: transform 0.3s;
        }

        .faq-item.open .faq-q i {
            transform: rotate(180deg);
        }

        .faq-a {
            display: none;
            padding: 0 20px 18px;
            font-size: 14px;
            color: var(--gray-600);
            line-height: 1.7;
        }

        .faq-item.open .faq-a {
            display: block;
        }

        /* ============================================================
                           BOOK A SERVICE
                           ============================================================ */
        .book-bg {
            background: var(--navy);
        }

        .book-bg .section-title {
            color: #fff;
        }

        .book-bg .section-sub {
            color: rgba(255, 255, 255, 0.65);
        }

        .book-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
            margin-top: 44px;
        }

        .book-card {
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 20px;
            padding: 36px 30px;
        }

        .book-card h3 {
            font-family: var(--font-head);
            font-size: 20px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 20px;
        }

        .book-feature {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 13px;
            font-size: 14.5px;
            color: rgba(255, 255, 255, 0.8);
        }

        .book-feature i {
            color: var(--teal);
            width: 18px;
        }

        .book-feature span {
            font-weight: 500;
        }

        .btn-book {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: var(--teal);
            color: #fff;
            padding: 13px 26px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 14.5px;
            font-weight: 700;
            font-family: var(--font-head);
            margin-top: 24px;
            transition: background 0.2s;
        }

        .btn-book:hover {
            background: var(--teal-dark);
            color: #fff;
        }

        .btn-book.wa {
            background: #25D366;
        }

        .btn-book.wa:hover {
            background: #1da851;
        }

        .consultant-info {
            display: flex;
            align-items: center;
            gap: 14px;
            background: rgba(255, 255, 255, 0.07);
            border-radius: 12px;
            padding: 16px;
            margin-bottom: 14px;
        }

        .consultant-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--teal);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: var(--font-head);
            font-weight: 700;
            color: #fff;
            font-size: 18px;
            flex-shrink: 0;
        }

        .consultant-name {
            font-family: var(--font-head);
            font-size: 15px;
            font-weight: 600;
            color: #fff;
        }

        .consultant-role {
            font-size: 13px;
            color: rgba(255, 255, 255, 0.6);
            margin-top: 2px;
        }

        /* ============================================================
                           FOOTER WITH MAP
                           ============================================================ */
        .footer-main {
            background: var(--navy);
            border-top: 1px solid rgba(255, 255, 255, 0.07);
            padding: 52px 0 0;
        }

        .footer-top {
            display: grid;
            grid-template-columns: 1.6fr 1fr 1fr 1.4fr;
            gap: 36px;
            padding-bottom: 44px;
        }

        .footer-logo-txt {
            font-family: var(--font-head);
            font-size: 20px;
            font-weight: 800;
            color: #fff;
            margin-bottom: 10px;
        }

        .footer-logo-txt span {
            color: var(--teal);
        }

        footer p {
            font-size: 13.5px;
            color: rgba(255, 255, 255, 0.6);
            line-height: 1.7;
            margin-bottom: 0;
        }

        .f-heading {
            font-family: var(--font-head);
            font-size: 14px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 16px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .f-links {
            list-style: none;
        }

        .f-links li {
            margin-bottom: 9px;
        }

        .f-links a {
            color: rgba(255, 255, 255, 0.6);
            text-decoration: none;
            font-size: 13.5px;
            transition: color 0.2s;
        }

        .f-links a:hover {
            color: var(--teal);
        }

        .f-contact {
            margin-bottom: 10px;
            display: flex;
            gap: 10px;
            font-size: 13.5px;
            color: rgba(255, 255, 255, 0.7);
        }

        .f-contact i {
            color: var(--teal);
            margin-top: 3px;
            flex-shrink: 0;
            width: 15px;
        }

        .f-social {
            display: flex;
            gap: 9px;
            margin-top: 18px;
        }

        .f-social a {
            width: 34px;
            height: 34px;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.07);
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgba(255, 255, 255, 0.65);
            font-size: 13px;
            text-decoration: none;
            transition: all 0.2s;
        }

        .f-social a:hover {
            background: var(--teal);
            color: #fff;
        }

        .footer-map {
            background: var(--navy);
            padding-bottom: 0;
        }

        .footer-map iframe {
            width: 100%;
            height: 220px;
            border: none;
            display: block;
            filter: grayscale(30%);
        }

        .footer-bottom-bar {
            background: #091f31;
            padding: 16px 0;
            text-align: center;
        }

        .footer-bottom-bar p {
            font-size: 13px;
            color: rgba(255, 255, 255, 0.4);
            margin: 0;
        }

        /* ============================================================
                           WHATSAPP FLOAT
                           ============================================================ */
        .wa-float {
            position: fixed;
            bottom: 28px;
            right: 28px;
            background: #25D366;
            color: #fff;
            width: 56px;
            height: 56px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 26px;
            text-decoration: none;
            box-shadow: 0 4px 20px rgba(37, 211, 102, 0.4);
            z-index: 998;
            transition: all 0.2s;
        }

        .wa-float:hover {
            transform: scale(1.1);
            color: #fff;
        }

        /* ============================================================
                           RESPONSIVE
                           ============================================================ */
        @media (max-width: 1024px) {
            .floors-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .why-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .steps-wrap {
                grid-template-columns: repeat(2, 1fr);
            }

            .testi-wrap {
                grid-template-columns: 1fr 1fr;
            }

            .footer-top {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 768px) {
            .solutions-grid {
                grid-template-columns: 1fr;
            }

            .about-grid {
                grid-template-columns: 1fr;
            }

            .faq-grid {
                grid-template-columns: 1fr;
            }

            .book-grid {
                grid-template-columns: 1fr;
            }

            .vision-mission {
                grid-template-columns: 1fr;
            }

            .testi-wrap {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 600px) {
            .stats-grid {
                grid-template-columns: 1fr;
            }

            .floors-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .why-grid {
                grid-template-columns: 1fr;
            }

            .steps-wrap {
                grid-template-columns: 1fr;
            }

            .footer-top {
                grid-template-columns: 1fr;
            }
        }
    </style>
@endpush

@section('content')

    {{-- ============================================================
     HERO
     ============================================================ --}}
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-badge">
                    <i class="fas fa-star"></i>
                    Trusted Floor Polishing Specialists in Singapore
                </div>
                <h1>Singapore Professional<br>Floor Polishing Company</h1>
                <p>Trusted Floor Polishing Services for various surfaces such as Marble, Granite, Parquet, and Tile. We
                    provide the best and most affordable floor polishing services.</p>
                <a href="#quote" class="btn-white">Get A Quote</a>
            </div>
        </div>
    </section>

    {{-- ============================================================
     STATS BAR
     ============================================================ --}}
    <div class="stats-bar">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="s-icon"><i class="fas fa-users"></i></div>
                    <div class="s-num">800+</div>
                    <div class="s-label">Happy Customers</div>
                </div>
                <div class="stat-item">
                    <div class="s-icon"><i class="fas fa-calendar-check"></i></div>
                    <div class="s-num">5+</div>
                    <div class="s-label">Years Experience</div>
                </div>
                <div class="stat-item">
                    <div class="s-icon"><i class="fas fa-star"></i></div>
                    <div class="s-num">4.8</div>
                    <div class="s-label">Customer Rating</div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================
     SOLUTIONS
     ============================================================ --}}
    <section class="solutions-bg">
        <div class="container">
            <div class="text-center">
                <h2 class="section-title">Solutions for Your Flooring Needs</h2>
                <p class="section-sub">Floorshine is a professional polishing service with years of experience and extensive
                    knowledge in the field of Floor Polishing on various floors such as Marble, Granite, Parquet, and Tile
                    Flooring.</p>
            </div>
            <div class="solutions-grid">
                <div>
                    <div class="sol-item">
                        <h3><i class="fas fa-check-circle" style="color:var(--teal); margin-right:8px;"></i> Satisfaction
                            Guaranteed</h3>
                        <p>Our professional team is well-experienced and maintains the best quality of service. The secret
                            to Floorshine's success is customer satisfaction. Every customer is precious to us.</p>
                    </div>
                    <div class="sol-item">
                        <h3><i class="fas fa-check-circle" style="color:var(--teal); margin-right:8px;"></i> High Quality
                            Results</h3>
                        <p>A thorough floor polishing will result in a clean, bright and shiny floor, giving it a new and
                            fresh look that lasts for years.</p>
                    </div>
                    <div class="sol-item">
                        <h3><i class="fas fa-check-circle" style="color:var(--teal); margin-right:8px;"></i> Efficient
                            Process</h3>
                        <p>Our expert team uses the latest equipment and techniques to ensure polishing is carried out
                            quickly and efficiently, minimising disruption and downtime.</p>
                    </div>
                    <div class="sol-item">
                        <h3><i class="fas fa-check-circle" style="color:var(--teal); margin-right:8px;"></i> Use of Quality
                            Products</h3>
                        <p>We use high-quality polishing products that are durable and resistant to scratches, ensuring
                            long-lasting results.</p>
                    </div>
                </div>
                <div class="sol-visual">
                    <div class="feat-pill">
                        <div class="fp-ico"><i class="fas fa-medal"></i></div>
                        <div><strong>Professional Team</strong><span>Trained & certified technicians</span></div>
                    </div>
                    <div class="feat-pill">
                        <div class="fp-ico"><i class="fas fa-tools"></i></div>
                        <div><strong>Latest Equipment</strong><span>Industrial-grade machinery</span></div>
                    </div>
                    <div class="feat-pill">
                        <div class="fp-ico"><i class="fas fa-leaf"></i></div>
                        <div><strong>Eco-Friendly Products</strong><span>Safe for family & pets</span></div>
                    </div>
                    <div class="feat-pill">
                        <div class="fp-ico"><i class="fas fa-clock"></i></div>
                        <div><strong>On-Time Service</strong><span>Punctual & reliable every visit</span></div>
                    </div>
                    <div class="feat-pill">
                        <div class="fp-ico"><i class="fas fa-tag"></i></div>
                        <div><strong>Affordable Pricing</strong><span>Competitive & transparent rates</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================================
     HOW IT WORKS
     ============================================================ --}}
    <section class="how-bg">
        <div class="container text-center">
            <h2 class="section-title">Find Your Service Provider with Just a Few Clicks</h2>
            <p class="section-sub">Getting your floors polished has never been easier. Follow these 4 simple steps to book
                our service.</p>
            <div class="steps-wrap">
                <div class="step-box">
                    <div class="step-ico"><i class="fas fa-hand-pointer"></i></div>
                    <h3>Choose a service</h3>
                    <p>Book online or through WhatsApp. Select the floor service you need.</p>
                </div>
                <div class="step-box">
                    <div class="step-ico"><i class="fas fa-comments"></i></div>
                    <h3>Expert consultation</h3>
                    <p>Send photos of your property, floor type, tile, and some photos for assessment.</p>
                </div>
                <div class="step-box">
                    <div class="step-ico"><i class="fas fa-calendar-alt"></i></div>
                    <h3>Choose the date</h3>
                    <p>Get the quote and make the payment. We'll schedule at your convenience.</p>
                </div>
                <div class="step-box">
                    <div class="step-ico"><i class="fas fa-sparkles" style="font-size:22px;"></i></div>
                    <h3>Enjoy the Floorshine Experience</h3>
                    <p>Relax and let our technicians make your floors shine. Enjoy the quality service.</p>
                </div>
            </div>
            <a href="https://wa.me/6588772899" class="btn-wa-start" target="_blank">
                <i class="fab fa-whatsapp"></i> WhatsApp to Start Now!
            </a>
        </div>
    </section>

    {{-- ============================================================
     TESTIMONIALS
     ============================================================ --}}
    <section>
        <div class="container">
            <div class="text-center">
                <span class="section-label">Reviews</span>
                <h2 class="section-title">What Our Customers Say</h2>
                <p class="section-sub">Don't just take our word for it — here's what our happy customers have to say about
                    Floorshine's service.</p>
            </div>
            <div class="testi-wrap">
                <div class="testi-card">
                    <span class="testi-quote">"</span>
                    <div class="testi-header">
                        <div class="testi-avatar" style="background:#1DBBA4;">NJ</div>
                        <div>
                            <div class="testi-name">Nori Junyi</div>
                            <div class="testi-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        </div>
                    </div>
                    <p class="testi-text">Very professional and efficient service! The team polished my marble floors and
                        they look brand new. Would definitely recommend Floorshine to all my friends and family.</p>
                </div>
                <div class="testi-card">
                    <span class="testi-quote">"</span>
                    <div class="testi-header">
                        <div class="testi-avatar" style="background:#0D8C7A;">JK</div>
                        <div>
                            <div class="testi-name">James Koh</div>
                            <div class="testi-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        </div>
                    </div>
                    <p class="testi-text">Excellent workmanship by the Floorshine team. They were punctual, clean, and
                        thorough. My parquet floors have never looked better. Great value for money too!</p>
                </div>
                <div class="testi-card">
                    <span class="testi-quote">"</span>
                    <div class="testi-header">
                        <div class="testi-avatar" style="background:#14967F;">ET</div>
                        <div>
                            <div class="testi-name">Evelyn Tan</div>
                            <div class="testi-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                    class="fas fa-star-half-alt"></i></div>
                        </div>
                    </div>
                    <p class="testi-text">I was impressed by how quickly they completed the job without compromising
                        quality. The granite tiles shine beautifully now. Will definitely use their service again!</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================================
     TYPES OF FLOORS
     ============================================================ --}}
    <section class="floors-bg">
        <div class="container">
            <div class="text-center">
                <h2 class="section-title">Types of Floors We Specialise In</h2>
                <p class="section-sub">
                    We have extensive experience polishing all types of flooring surfaces in Singapore
                    homes and commercial spaces.
                </p>
            </div>

            <div class="floors-grid">

                <!-- MARBLE -->
                <a href="{{ route('services.marble') }}" class="floor-card">
                    <div class="floor-img-wrapper">
                        <img src="{{ asset('images/floors/marble.png') }}" alt="Marble Floor" class="floor-img"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="floor-img-placeholder" style="display:none;">
                            <i class="fas fa-gem"></i>
                        </div>
                    </div>
                    <div class="floor-body">
                        <h3>Marble</h3>
                        <p>We provide professional marble floor polishing services that are dedicated to delivering
                            outstanding and satisfying results. We utilise the latest technology and techniques to ensure
                            your marble floors are always clean, looking new, and maintained. Choose a marble floor
                            polishing service</p>
                        <span class="floor-btn">Learn More</span>
                    </div>
                </a>

                <!-- GRANITE -->
                <a href="{{ route('services.granite') }}" class="floor-card">
                    <div class="floor-img-wrapper">
                        <img src="{{ asset('images/floors/granite.png') }}" alt="Granite Floor" class="floor-img"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="floor-img-placeholder" style="display:none;">
                            <i class="fas fa-mountain"></i>
                        </div>
                    </div>
                    <div class="floor-body">
                        <h3>Granite</h3>
                        <p>We provide professional granite floor polishing services that are dedicated to delivering
                            outstanding and satisfying results. With Floorshine get outstanding results and satisfaction
                            with maximum results. Choose a granite floor polishing service</p>
                        <span class="floor-btn">Learn More</span>
                    </div>
                </a>

                <!-- HOMOGENEOUS -->
                <a href="{{ route('services.homogeneous') }}" class="floor-card">
                    <div class="floor-img-wrapper">
                        <img src="{{ asset('images/floors/homogeneous-tiles.png') }}" alt="Homogeneous Tiles"
                            class="floor-img"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="floor-img-placeholder" style="display:none;">
                            <i class="fas fa-th-large"></i>
                        </div>
                    </div>
                    <div class="floor-body">
                        <h3>Homogeneous Tiles</h3>
                        <p>We provide professional homogeneous tiles polishing services. Our team of experts use the latest
                            technology and products to give our customers the best results. Get shining and clean
                            homogeneous tiles with our services. Choose a homogeneous tiles polishing service.</p>
                        <span class="floor-btn">Learn More</span>
                    </div>
                </a>

                <!-- PARQUET -->
                <a href="{{ route('services.parquet') }}" class="floor-card">
                    <div class="floor-img-wrapper">
                        <img src="{{ asset('images/floors/parquet.png') }}" alt="Parquet Floor" class="floor-img"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="floor-img-placeholder" style="display:none;">
                            <i class="fas fa-grip-lines"></i>
                        </div>
                    </div>
                    <div class="floor-body">
                        <h3>Parquet</h3>
                        <p>We provide professional parquet polishing services. Parquet will usually dull over time even with
                            proper care. Choose the right parquet polishing service to restore the lustre of your parquet
                            floor.</p>
                        <span class="floor-btn">Learn More</span>
                    </div>
                </a>

                <!-- LIMESTONE -->
                <a href="{{ route('services.limestone') }}" class="floor-card">
                    <div class="floor-img-wrapper">
                        <img src="{{ asset('images/floors/limestone.png') }}" alt="Limestone Floor" class="floor-img"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="floor-img-placeholder" style="display:none;">
                            <i class="fas fa-layer-group"></i>
                        </div>
                    </div>
                    <div class="floor-body">
                        <h3>Limestone</h3>
                        <p>We provide the best limestone floor polishing services to give your floor a clean and shiny
                            appearance. Using the best products and equipment, our team of experts will give you outstanding
                            results. Choose the right limestone polishing service</p>
                        <span class="floor-btn">Learn More</span>
                    </div>
                </a>

                <!-- OUTDOOR -->
                <a href="{{ route('services.outdoor') }}" class="floor-card">
                    <div class="floor-img-wrapper">
                        <img src="{{ asset('images/floors/outdoor-ceramic-tiles.png') }}" alt="Outdoor Tiles"
                            class="floor-img"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="floor-img-placeholder" style="display:none;">
                            <i class="fas fa-sun"></i>
                        </div>
                    </div>
                    <div class="floor-body">
                        <h3>Outdoor Ceramic Tiles</h3>
                        <p>We provide the best Outdoor Ceramic Tiles polishing service. Outdoor Ceramic Tiles can lose their
                            look and become more susceptible to damage. Polishing can help prevent this problem and ensure
                            that your floor looks good as new. Choose the right Outdoor Ceramic Tiles polishing service</p>
                        <span class="floor-btn">Learn More</span>
                    </div>
                </a>

                <!-- PORCELAIN -->
                <a href="{{ route('services.porcelain') }}" class="floor-card">
                    <div class="floor-img-wrapper">
                        <img src="{{ asset('images/floors/porcelain-tiles.png') }}" alt="Porcelain Tiles"
                            class="floor-img"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="floor-img-placeholder" style="display:none;">
                            <i class="fas fa-circle"></i>
                        </div>
                    </div>
                    <div class="floor-body">
                        <h3>Porcelain Tiles</h3>
                        <p>We provide the best porcelain polishing services to give your floor a clean and shiny appearance.
                            Porcelain tiles are very important to polish as it extends the life and maintains the look of
                            the floor. Choose the right polishing service for your porcelain.</p>
                        <span class="floor-btn">Learn More</span>
                    </div>
                </a>

                <!-- TERRAZZO -->
                <a href="{{ route('services.terrazzo') }}" class="floor-card">
                    <div class="floor-img-wrapper">
                        <img src="{{ asset('images/floors/terrazzo-tiles.png') }}" alt="Terrazzo Tiles"
                            class="floor-img"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="floor-img-placeholder" style="display:none;">
                            <i class="fas fa-border-all"></i>
                        </div>
                    </div>
                    <div class="floor-body">
                        <h3>Terrazzo Tiles</h3>
                        <p>We provide professional granite floor polishing services that are dedicated to delivering
                            outstanding and satisfying results. With Floorshine get outstanding results and satisfaction
                            with maximum results. Choose a granite floor polishing service</p>
                        <span class="floor-btn">Learn More</span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- ============================================================
     ABOUT US
     ============================================================ --}}
    <section style="padding: 60px 0 0;">
        <div class="container">
            <div class="about-grid">
                {{-- Kiri: Logo --}}
                <div>
                    <img src="{{ asset('images/floorshine-logo.jpg') }}" style="max-width: 180px; display: block;">
                </div>

                {{-- Kanan: Konten --}}
                <div class="about-content">
                    <h2 class="about-section-title">About Us</h2>
                    <h3 class="about-subtitle">Quality Floor Polishing in Singapore — Floorshine Professional Services</h3>
                    <p>Floorshine uses high-quality floor polishing products and machines to ensure satisfactory results.
                        Our team of experts have extensive experience and are equipped with the latest equipment to deliver
                        outstanding results.</p>
                    <p>Our services include floor polishing of marble, granite, terrazzo, homogeneous tiles, outdoor tiles,
                        limestone, parquet, and porcelain tiles. We use high-quality products and the latest methods to
                        ensure long-lasting results. Our team of experts works hard to provide the best service to our
                        clients, ensuring your satisfaction with our services.</p>
                    <p>Don't let your dirty and dull floors disrupt the beauty of your home. Contact us today to schedule an
                        appointment and let us help you achieve clean and shiny floors.<br>
                        We offer competitive pricing and unrivalled quality, making us the best choice for your floor
                        polishing needs.</p>
                </div>
            </div>

            {{-- Contact line --}}
            <p class="about-contact-line">
                Contact us via WhatsApp at <strong>+65 8877 2999</strong> to enquire about our services. If you have any
                questions about floor polishing feel free to contact Floorshine.
                Our customer service team will be happy to assist you and recommend the best service for floor polishing
                issues.
            </p>
        </div>
    </section>

    {{-- Vision & Mission --}}
    <section style="padding: 30px 0 60px;">
        <div class="container">
            <div class="vm-block">
                <h2 class="about-section-title">Our Vision</h2>
                <p>Floorshine's vision is to evolve into Singapore's most admired and recognised floor polishing service
                    provider by delivering clean, bright and radiant floors in Singapore through high-quality and efficient
                    floor polishing services.</p>
            </div>
            <div class="vm-block">
                <h2 class="about-section-title">Our Mission</h2>
                <p>Floorshine's mission is to use the best products and procedures to deliver the best results for our
                    customers, provide the best customer service, and ensure our customers' satisfaction. Floorshine insists
                    in maintaining excellence in its services by making sure to reward and retain existing customers and
                    gain new customers through them and the reputation built.</p>
            </div>
        </div>
    </section>

    {{-- ============================================================
     WHY CHOOSE FLOORSHINE
     ============================================================ --}}
    <section class="why-bg">
        <div class="container">
            <div class="text-center">
                <span class="section-label">Why Us</span>
                <h2 class="section-title">Why Choose Floorshine</h2>
                <p class="section-sub">We are committed to providing the highest quality floor polishing services in
                    Singapore with a customer-first approach.</p>
            </div>
            <div class="why-grid">
                <div class="why-card">
                    <div class="why-ico"><i class="fas fa-user-tie"></i></div>
                    <h3>Professional</h3>
                    <p>Our team of experienced and well-trained technicians ensures every job is handled with the utmost
                        professionalism.</p>
                </div>
                <div class="why-card">
                    <div class="why-ico"><i class="fas fa-certificate"></i></div>
                    <h3>Certified</h3>
                    <p>We use certified polishing products and equipment that meet industry standards for quality and
                        safety.</p>
                </div>
                <div class="why-card">
                    <div class="why-ico"><i class="fas fa-award"></i></div>
                    <h3>Best Services</h3>
                    <p>Consistently delivering outstanding results that keep our customers coming back and recommending us
                        to others.</p>
                </div>
                <div class="why-card">
                    <div class="why-ico"><i class="fas fa-tag"></i></div>
                    <h3>Affordable</h3>
                    <p>We offer competitive and transparent pricing without hidden fees. Get the best value for your money.
                    </p>
                </div>
                <div class="why-card">
                    <div class="why-ico"><i class="fas fa-tools"></i></div>
                    <h3>Workmanship</h3>
                    <p>Every project is completed with meticulous attention to detail to ensure a flawless finish every
                        time.</p>
                </div>
                <div class="why-card">
                    <div class="why-ico"><i class="fas fa-shield-alt"></i></div>
                    <h3>Guaranteed</h3>
                    <p>We stand behind our work with a satisfaction guarantee. Your complete satisfaction is our top
                        priority.</p>
                </div>
            </div>
            <div class="why-wa">
                <a href="https://wa.me/6588772899" class="btn-wa-start" target="_blank">
                    <i class="fab fa-whatsapp"></i> WhatsApp to Start Now!
                </a>
            </div>
        </div>
    </section>

    {{-- ============================================================
     FAQ
     ============================================================ --}}
    <section>
        <div class="container">
            <div class="text-center">
                <span class="section-label">FAQ</span>
                <h2 class="section-title">Frequently Asked Questions</h2>
                <p class="section-sub">Have questions? We've got answers. Here are the most common questions about our
                    floor polishing services.</p>
            </div>
            <div class="faq-grid">
                <div>
                    <div class="faq-item open">
                        <div class="faq-q" onclick="toggleFaq(this)">
                            What services does Floorshine offer?
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-a">
                            Floorshine offers a comprehensive range of floor polishing services including Marble, Granite,
                            Homogeneous Tiles, Parquet, Limestone, Outdoor Ceramic Tiles, Porcelain, and Terrazzo polishing.
                            We serve both residential and commercial properties across Singapore.
                        </div>
                    </div>
                    <div class="faq-item" style="margin-top:12px;">
                        <div class="faq-q" onclick="toggleFaq(this)">
                            How do I schedule a service?
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-a">
                            You can schedule a service by contacting us via WhatsApp at +65 8877 2899, or by filling out the
                            quote form on our website. Our team will respond within 24 hours to confirm your appointment.
                        </div>
                    </div>
                    <div class="faq-item" style="margin-top:12px;">
                        <div class="faq-q" onclick="toggleFaq(this)">
                            How much does floor polishing cost?
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-a">
                            Pricing depends on the type of floor, size of the area, and the level of work required. We offer
                            free quotations — contact us with photos of your floor and our team will provide a transparent,
                            competitive quote.
                        </div>
                    </div>
                </div>
                <div>
                    <div class="faq-item">
                        <div class="faq-q" onclick="toggleFaq(this)">
                            How long does a floor polishing service take?
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-a">
                            The duration depends on the size and condition of the floor. A standard HDB unit typically takes
                            4–6 hours. Larger areas or floors requiring more restoration may take longer. We will advise you
                            on the estimated time during consultation.
                        </div>
                    </div>
                    <div class="faq-item" style="margin-top:12px;">
                        <div class="faq-q" onclick="toggleFaq(this)">
                            How do I pay for the service?
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-a">
                            We accept various payment methods including PayNow, bank transfer, and cash. Payment is
                            typically made after the service is completed and you are satisfied with the results.
                        </div>
                    </div>
                    <div class="faq-item" style="margin-top:12px;">
                        <div class="faq-q" onclick="toggleFaq(this)">
                            What types of flooring can you polish?
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-a">
                            We specialise in polishing Marble, Granite, Homogeneous Tiles, Parquet (wood), Limestone,
                            Outdoor Ceramic Tiles, Porcelain, and Terrazzo floors. If you have a different type of flooring,
                            contact us and we will advise accordingly.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================================
     BOOK A SERVICE
     ============================================================ --}}
    <section class="book-bg" id="quote">
        <div class="container">
            <div class="text-center">
                <span class="section-label" style="background:rgba(255,255,255,0.12); color:rgba(255,255,255,0.9);">Get
                    Started</span>
                <h2 class="section-title">Book A Service Now</h2>
                <p class="section-sub" style="margin-bottom:0;">Choose how you'd like to get in touch with us — through
                    our website or speak directly with a consultant.</p>
            </div>
            <div class="book-grid">
                <div class="book-card">
                    <h3><i class="fas fa-globe" style="color:var(--teal); margin-right:10px;"></i> Website</h3>
                    <div class="book-feature">
                        <i class="fas fa-check-circle"></i><span>24/7 availability</span>
                    </div>
                    <div class="book-feature">
                        <i class="fas fa-check-circle"></i><span>Floor Polishing services</span>
                    </div>
                    <div class="book-feature">
                        <i class="fas fa-check-circle"></i><span>Easy online booking</span>
                    </div>
                    <div class="book-feature">
                        <i class="fas fa-check-circle"></i><span>Instant quote form</span>
                    </div>
                    <a href="#" class="btn-book">
                        <i class="fas fa-calendar-alt"></i> Book Online
                    </a>
                </div>
                <div class="book-card">
                    <h3><i class="fas fa-headset" style="color:var(--teal); margin-right:10px;"></i> Consultant</h3>
                    <div class="consultant-info">
                        <div class="consultant-avatar">FS</div>
                        <div>
                            {{-- ============================================================
                             CATATAN: Jika ada foto consultant, simpan di:
                             public/images/consultant.jpg
                             Lalu ganti .consultant-avatar dengan:
                             <img src="{{ asset('images/consultant.jpg') }}" style="width:50px;height:50px;border-radius:50%;object-fit:cover;">
                             ============================================================ --}}
                            <div class="consultant-name">Floorshine Specialist</div>
                            <div class="consultant-role">Floor Polishing Expert</div>
                        </div>
                    </div>
                    <div class="book-feature">
                        <i class="fas fa-check-circle"></i><span>Expert Advice</span>
                    </div>
                    <div class="book-feature">
                        <i class="fas fa-check-circle"></i><span>Free consultation</span>
                    </div>
                    <div class="book-feature">
                        <i class="fas fa-check-circle"></i><span>Fast response time</span>
                    </div>
                    <a href="https://wa.me/6588772899" class="btn-book wa" target="_blank">
                        <i class="fab fa-whatsapp"></i> WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- WhatsApp Float --}}
    <a href="https://wa.me/6588772899" class="wa-float" target="_blank" title="Chat on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>

@endsection

@push('scripts')
    <script>
        function toggleFaq(el) {
            const item = el.closest('.faq-item');
            item.classList.toggle('open');
        }
    </script>
@endpush
