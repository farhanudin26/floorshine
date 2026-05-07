@extends('layouts.app')

@section('title', 'Porcelain Tiles Polishing Services in Singapore | Floorshine')
@section('meta_description',
    'Professional porcelain tiles polishing services in Singapore. Restoring the lustre and
    beauty of your porcelain. Get a free quote today.')

    @push('styles')
        <style>
            .porcelain-hero {
                padding: 80px 0 70px;
                position: relative;
            }

            .porcelain-hero::after {
                content: '';
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                height: 4px;
                background: linear-gradient(90deg, #35adb5, #fff, #35adb5);
            }

            .hero-badge {
                display: inline-flex;
                align-items: center;
                gap: 7px;
                background: rgba(255, 255, 255, 0.18);
                color: #35adb5;
                padding: 5px 14px;
                border-radius: 100px;
                font-size: 12.5px;
                font-weight: 500;
                margin-bottom: 18px;
                backdrop-filter: blur(4px);
            }

            .porcelain-hero h1 {
                font-family: var(--font-head);
                font-size: clamp(28px, 4.2vw, 52px);
                font-weight: 800;
                color: #35adb5;
                line-height: 1.12;
                letter-spacing: -1.5px;
                margin-bottom: 18px;
                max-width: 640px;
            }

            .porcelain-hero p {
                color: #35adb5;
                font-size: 15.5px;
                line-height: 1.65;
                max-width: 520px;
                margin-bottom: 28px;
            }

            .btn-quote-white {
                display: inline-block;
                background: #35adb5;
                color: #fff;
                padding: 13px 30px;
                border-radius: 8px;
                font-size: 15px;
                font-weight: 700;
                font-family: var(--font-head);
                text-decoration: none;
                transition: all 0.2s;
                box-shadow: 0 4px 18px rgba(0, 0, 0, 0.15);
            }

            .btn-quote-white:hover {
                transform: translateY(-2px);
                box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
            }

            /* ============================================================
                           COMMONS
            ============================================================ */
            .container {
                max-width: 1100px;
                margin: 0 auto;
                padding: 0 24px;
            }

            section {
                padding: 72px 0;
            }

            .sec-title {
                font-family: var(--font-head);
                font-size: clamp(22px, 3vw, 36px);
                font-weight: 800;
                color: var(--navy);
                line-height: 1.2;
                letter-spacing: -0.5px;
                margin-bottom: 14px;
            }

            .sec-title span {
                color: #35adb5;
            }

            .sec-sub {
                font-size: 15.5px;
                color: var(--gray-600);
                line-height: 1.75;
                max-width: 700px;
            }

            .text-center {
                text-align: center;
            }

            .gray-bg {
                background: var(--gray-50);
            }

            .white-bg {
                background: #fff;
            }

            .green-bg {
                background: #35adb5;
            }

            /* ============================================================
                ABOUT SECTION
            ============================================================ */
            .about-grid {
                display: grid;
                grid-template-columns: 1fr 420px;
                gap: 52px;
                align-items: start;
            }

            .about-text h2 {
                font-family: var(--font-head);
                font-size: 22px;
                font-weight: 800;
                color: #fff;
                margin: 28px 0 14px;
                padding-bottom: 10px;
                border-bottom: 2px solid var(--gray-200);
            }

            .about-text h2:first-child {
                margin-top: 0;
            }

            .about-text p {
                font-size: 15px;
                color: #fff;
                line-height: 1.8;
                margin-bottom: 16px;
            }

            .about-text p:last-child {
                margin-bottom: 0;
            }

            .img-panel {
                position: sticky;
                top: 90px;
            }

            .img-box {
                border-radius: 20px;
                overflow: hidden;
                background: #e8f7f8;
                aspect-ratio: 4/3;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 80px;
                color: #35adb5;
            }

            /* Bullet list */
            .bullet-list {
                list-style: none;
                margin: 16px 0;
            }

            .bullet-list li {
                display: flex;
                align-items: flex-start;
                gap: 10px;
                font-size: 14.5px;
                color: var(--gray-700, #374151);
                margin-bottom: 9px;
                line-height: 1.55;
            }

            .bullet-list li::before {
                content: '▸';
                color: #35adb5;
                font-size: 13px;
                margin-top: 2px;
                flex-shrink: 0;
            }

            /* ============================================================
                                   WHY NEED POLISH
                                   ============================================================ */
            .why-grid {
                display: grid;
                grid-template-columns: 1fr 380px;
                gap: 52px;
                align-items: start;
            }

            .why-img {
                border-radius: 20px;
                overflow: hidden;
                background: #e8f7f8;
                aspect-ratio: 4/3;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 80px;
                color: #35adb5;

            }

            /* ============================================================
                                                   PROCESS SECTION — gradient teal
                                                   ============================================================ */
            .process-section {
                background: linear-gradient(135deg, #1e7880 0%, #35adb5 100%);
            }

            .process-intro-grid {
                display: grid;
                grid-template-columns: 360px 1fr;
                gap: 52px;
                align-items: start;
                margin-top: 48px;
            }

            .process-img-box {
                border-radius: 20px;
                overflow: hidden;
                background: rgba(255, 255, 255, 0.12);
                aspect-ratio: 4/5;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 80px;
                color: rgba(255, 255, 255, 0.45);

            }

            .process-steps-wrap h3 {
                font-family: var(--font-head);
                font-size: 20px;
                font-weight: 700;
                color: #fff;
                margin-bottom: 24px;
                display: flex;
                align-items: center;
                gap: 10px;
            }

            .process-steps-wrap h3::before {
                content: '';
                width: 32px;
                height: 3px;
                background: rgba(255, 255, 255, 0.6);
                border-radius: 2px;
                flex-shrink: 0;
            }

            .process-step {
                display: flex;
                gap: 18px;
                margin-bottom: 26px;
                align-items: flex-start;
            }

            .ps-num {
                width: 40px;
                height: 40px;
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.25);
                border: 2px solid rgba(255, 255, 255, 0.5);
                display: flex;
                align-items: center;
                justify-content: center;
                font-family: var(--font-head);
                font-size: 15px;
                font-weight: 800;
                color: #fff;
                flex-shrink: 0;
                margin-top: 2px;
            }

            .ps-body h4 {
                font-family: var(--font-head);
                font-size: 16px;
                font-weight: 700;
                color: #fff;
                margin-bottom: 6px;
            }

            .ps-body p {
                font-size: 14px;
                color: rgba(255, 255, 255, 0.78);
                line-height: 1.65;
            }

            /* ============================================================
                                                   3 STEPS CTA
============================================================ */
            .steps-cta-section {
                background: var(--gray-50);
            }

            .steps-cta-grid {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 24px;
                margin-top: 44px;
            }

            .step-cta-card {
                background: #fff;
                border-radius: 16px;
                padding: 32px 22px;
                text-align: center;
                border: 1px solid var(--gray-200);
                transition: all 0.2s;
            }

            .step-cta-card:hover {
                border-color: #35adb5;
                transform: translateY(-4px);
                box-shadow: 0 10px 28px rgba(53, 173, 181, 0.15);
            }

            .step-cta-icon {
                width: 70px;
                height: 70px;
                background: #e8f7f8;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 0 auto 18px;
                font-size: 28px;
                color: #35adb5;
                transition: all 0.2s;
            }

            .step-cta-card:hover .step-cta-icon {
                background: #35adb5;
                color: #fff;
            }

            .step-cta-card h3 {
                font-family: var(--font-head);
                font-size: 15px;
                font-weight: 700;
                color: var(--navy);
            }

            .btn-wa-cta {
                display: inline-flex;
                align-items: center;
                gap: 9px;
                background: #35adb5;
                color: #fff;
                padding: 13px 32px;
                border-radius: 50px;
                text-decoration: none;
                font-size: 15px;
                font-weight: 700;
                font-family: var(--font-head);
                margin-top: 40px;
                transition: background 0.2s;
            }

            .btn-wa-cta:hover {
                background: #1e7880;
                color: #fff;
            }

            /* ============================================================
                                   COMBINED SECTION (OFFER + MAINTENANCE)
                                   ============================================================ */

            .combined-section {
                background: #ffffff;
                padding: 52px 0;
            }

            /* Shared heading style */
            .offer-text h2,
            .maint-text h2 {
                font-family: var(--font-head);
                font-size: clamp(20px, 2.5vw, 28px);
                font-weight: 800;
                color: #35adb5;
                line-height: 1.25;
                margin-bottom: 8px;
            }

            /* Gold underline */
            .section-underline {
                width: 80px;
                height: 3px;
                background: #E5A800;
                border-radius: 2px;
                margin-bottom: 18px;
            }

            /* Divider between blocks */
            .section-divider {
                border: none;
                border-top: 1px solid #eeeeee;
                margin: 44px 0;
            }

            /* ── OFFER BLOCK ── */
            .offer-grid {
                display: grid;
                grid-template-columns: 1fr 200px;
                gap: 40px;
                align-items: center;
            }

            .offer-text p {
                font-size: 14.5px;
                color: #444444;
                line-height: 1.8;
                margin-bottom: 10px;
            }

            .simple-bullet-list {
                list-style: none;
                padding: 0;
                margin: 8px 0 0;
            }

            .simple-bullet-list li {
                font-size: 14.5px;
                color: #444444;
                padding: 3px 0 3px 16px;
                position: relative;
                line-height: 1.7;
            }

            .simple-bullet-list li::before {
                content: '•';
                position: absolute;
                left: 0;
                color: #444444;
            }

            .offer-img {
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 12px;
                overflow: hidden;
            }

            .offer-img img {
                width: 100%;
                max-width: 180px;
                height: auto;
                object-fit: contain;
            }

            /* ── MAINTENANCE BLOCK ── */
            .maint-grid {
                display: grid;
                grid-template-columns: 1fr 300px;
                gap: 40px;
                align-items: start;
            }

            .maint-text p {
                font-size: 14.5px;
                color: #444444;
                line-height: 1.8;
                margin-bottom: 12px;
            }

            .maint-tips-label {
                font-size: 14.5px;
                font-weight: 700;
                color: #35adb5;
                margin-bottom: 8px;
            }

            .maint-bullet-list {
                list-style: none;
                padding: 0;
                margin: 0 0 14px;
            }

            .maint-bullet-list li {
                font-size: 14.5px;
                color: #444444;
                padding: 3px 0 3px 18px;
                position: relative;
                line-height: 1.7;
            }

            .maint-bullet-list li::before {
                content: '•';
                position: absolute;
                left: 0;
                color: #35adb5;
            }

            .maint-footer-text {
                font-size: 14px;
                color: #666666;
                line-height: 1.75;
                margin-top: 14px;
            }

            .maint-img-box {
                border-radius: 12px;
                overflow: hidden;
                position: sticky;
                top: 90px;
            }

            .maint-img-box img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                display: block;
            }

            /* ── RESPONSIVE ── */
            @media (max-width: 768px) {
                .combined-section {
                    padding: 36px 0;
                }

                .offer-grid,
                .maint-grid {
                    grid-template-columns: 1fr;
                    gap: 24px;
                }

                .offer-img {
                    order: -1;
                }

                .offer-img img {
                    max-width: 140px;
                }

                .maint-img-box {
                    position: static;
                    height: 220px;
                }
            }

            /* ============================================================
                                                   FAQ
                                                   ============================================================ */
            .faq-section {
                background: #fff;
            }

            .faq-cols {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 16px;
                margin-top: 40px;
            }

            .faq-item {
                background: var(--gray-50);
                border: 1px solid var(--gray-200);
                border-radius: 12px;
                overflow: hidden;
                transition: border-color 0.2s;
            }

            .faq-item.open {
                border-color: #35adb5;
                background: #fff;
            }

            .faq-q {
                display: flex;
                justify-content: space-between;
                align-items: flex-start;
                gap: 12px;
                padding: 18px 20px;
                cursor: pointer;
                font-family: var(--font-head);
                font-size: 14.5px;
                font-weight: 600;
                color: var(--navy);
                user-select: none;
                line-height: 1.4;
            }

            .faq-q i {
                color: #35adb5;
                font-size: 12px;
                flex-shrink: 0;
                margin-top: 4px;
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
                line-height: 1.75;
                border-top: 1px solid var(--gray-200);
                padding-top: 14px;
            }

            .faq-item.open .faq-a {
                display: block;
            }

            /* ============================================================
                                                   OTHER SERVICES
                                                   ============================================================ */
            .other-services-section {
                background: #fff;
                padding: 56px 0;
            }

            .os-grid {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                gap: 16px;
                margin-top: 36px;
            }

            .os-card {
                background: var(--gray-50);
                border: 1px solid var(--gray-200);
                border-radius: 14px;
                padding: 22px 18px;
                text-align: center;
                text-decoration: none;
                color: inherit;
                transition: all 0.2s;
                display: block;
            }

            .os-card:hover {
                border-color: #35adb5;
                background: #e8f7f8;
                transform: translateY(-3px);
            }

            .os-icon {
                font-size: 28px;
                color: #35adb5;
                margin-bottom: 10px;
                display: block;
            }

            .os-card h4 {
                font-family: var(--font-head);
                font-size: 13.5px;
                font-weight: 700;
                color: var(--navy);
                line-height: 1.35;
            }

            /* ============================================================
                                                   RESPONSIVE
                                                   ============================================================ */
            @media (max-width: 1024px) {

                .about-grid,
                .why-grid,
                .process-intro-grid,
                .offer-grid,
                .maint-grid {
                    grid-template-columns: 1fr;
                }

                .img-panel,
                .maint-img-box {
                    position: static;
                }

                .why-img {
                    order: -1;
                }

                .offer-img {
                    display: none;
                }

                .os-grid {
                    grid-template-columns: repeat(2, 1fr);
                }
            }

            @media (max-width: 768px) {

                .steps-cta-grid,
                .faq-cols,
                .contact-bottom-grid {
                    grid-template-columns: 1fr;
                }

                .process-img-box {
                    display: none;
                }
            }
        </style>
    @endpush

@section('content')

    {{-- HERO --}}
    <section class="porcelain-hero"
        style="background: url('{{ asset('images/porcelain-page/porcelain.jpg') }}') center/cover no-repeat;">
        <div class="container">
            <div class="hero-badge"></i> Professional Floor Polishing — Singapore</div>
            <h1>Porcelain Tiles Polishing<br>Services in Singapore</h1>
            <p>Professional Porcelain Tiles Polishing Service | Restoring the Lustre and Beauty of Your Porcelain</p>
            <a href="#quote" class="btn-quote-white">Get A Quote</a>
        </div>
    </section>

    {{-- ABOUT --}}
    <section class="green-bg">
        <div class="container">
            <div class="about-grid">
                <div class="about-text">
                    <h2>Porcelain Tiles</h2>
                    <p>Porcelain flooring is one of the best flooring material options that is often used in both interior
                        and exterior spaces. Made from high-quality clay processed through firing at extremely high
                        temperatures, porcelain flooring offers a combination of beauty, durability, and ease of
                        maintenance. Known for its resistance to wear and tear, stains, and moisture, it is an ideal choice
                        for a wide variety of spaces, from residential homes to commercial areas. Although porcelain
                        flooring is renowned for its durability and ease of maintenance, regular polishing of porcelain
                        flooring is still required to maintain the beauty and lustre of the floor surface.</p>

                    <h2>Porcelain Polishing</h2>
                    <p>Floorshine porcelain polishing service in Singapore offers the best solution for your porcelain
                        maintenance. Our team of professionals are experienced and use the latest technology to provide the
                        best quality.</p>
                    <p>Our services include porcelain polishing, cleaning, protection and porcelain maintenance. We are
                        committed to providing high quality services and ensuring customer satisfaction.</p>
                    <p>If you are looking for quality porcelain polishing services, you have come to the right place.
                        Because we are an experienced porcelain polishing service in polishing.</p>
                    <p>If your porcelain floor has lost its lustre or has become dull due to scratches, contact us for a
                        polishing service.</p>
                </div>

                <div class="img-panel">

                    <div class="img-box"><img src="{{ asset('images/porcelain-page/porcelain-room.jpg') }}"
                            alt="Porcelain Tiles" style="width:100%;height:100%;object-fit:cover;"></i></div>
                </div>
            </div>
        </div>
    </section>

    {{-- WHY PORCELAIN NEEDS POLISH --}}
    <section class="gray-bg">
        <div class="container">
            <div class="why-grid">
                <div>
                    <h2 class="sec-title">Why Porcelain Tiles Need Polish</h2>
                    <p class="sec-sub" style="margin-bottom:20px;">Porcelain flooring is known for its exceptional
                        durability and ease of maintenance, but despite being extremely strong and durable, it still
                        requires periodic polishing to maintain the floor's lustre. Not only does polishing bring back the
                        floor's natural lustre, it also provides an extra layer of protection to increase durability and
                        keep the floor looking new.</p>
                    <p style="font-size:15px; color:var(--gray-600); line-height:1.75; margin-bottom:18px;">Here are some
                        conditions that make porcelain floors need polishing:</p>
                    <ul class="bullet-list">
                        <li>Natural Lustre Decline</li>
                        <li>Decreased Shine that looks Dull</li>
                        <li>Scratches and Use Marks</li>
                        <li>Repair Rough Surfaces or Fine Cracks</li>
                        <li>Repair Room Aesthetics</li>
                    </ul>
                </div>
                <div class="why-img"> <img src="{{ asset('images/porcelain-page/porcelain-why.jpg') }}"
                        alt="Porcelain Why Polish" style="width:100%;height:100%;object-fit:cover;"></i></div>
            </div>
        </div>
    </section>

    {{-- PORCELAIN TILES POLISHING PROCESS --}}
    <section class="process-section">
        <div class="container">
            <div class="text-center">
                <h2 class="sec-title" style="color:#fff; margin-bottom:14px;">Porcelain Tiles Polishing Process</h2>
                <p class="sec-sub" style="color:rgba(255,255,255,0.85); margin:0 auto;">We are experienced porcelain floor
                    polishing professionals, using specialist equipment and products to ensure successful results. Porcelain
                    floor polishing is the process of renewing and restoring porcelain surfaces that have become worn, dull
                    or damaged over time. Our process not only enhances the aesthetic appeal of porcelain, but also prolongs
                    its life.</p>
                <p
                    style="font-size:15px; color:rgba(255,255,255,0.7); margin-top:14px; max-width:680px; margin-left:auto; margin-right:auto; line-height:1.7;">
                    It involves a series of specialised techniques and treatments to restore the natural beauty and lustre
                    of porcelain.</p>
            </div>

            <div class="process-intro-grid">
                <div class="process-img-box">
                    <img src="{{ asset('images/porcelain-page/porcelain-process.jpg') }}" alt="Porcelain Process"
                        style="width:100%;height:100%;object-fit:cover;">
                </div>

                <div class="process-steps-wrap">
                    <h3>Our process for polishing porcelain tiles includes:</h3>

                    <div class="process-step">
                        <div class="ps-num">1</div>
                        <div class="ps-body">
                            <h4>Floor Condition Check</h4>
                            <p>First, we carefully check the physical condition of the floor to ensure that there is no
                                damage or cracks that could interfere with the polishing process. If minor damage is found,
                                we will offer repair services to prepare optimal surfaces.</p>
                        </div>
                    </div>
                    <div class="process-step">
                        <div class="ps-num">2</div>
                        <div class="ps-body">
                            <h4>Polishing Application</h4>
                            <p>Selection of Polishing Products: We use high quality polishing products specifically designed
                                for porcelain floors. These products provide a perfect gloss without damaging or scratching
                                the ceramic surface. It also provides extra protection and shine that increases the
                                durability of the porcelain floor. Application with a Polisher Machine: We use polisher
                                machines with specialised pads for an even application of polishing over the entire floor
                                surface. The machine runs at high revolutions to produce an evenly smooth and shiny surface.
                            </p>
                        </div>
                    </div>
                    <div class="process-step">
                        <div class="ps-num">3</div>
                        <div class="ps-body">
                            <h4>Drying</h4>
                            <p>Once the polishing process is complete, the floor is left to dry for a sufficient amount of
                                time. Proper drying ensures a long-lasting result and maximum protection.</p>
                        </div>
                    </div>
                    <div class="process-step">
                        <div class="ps-num">4</div>
                        <div class="ps-body">
                            <h4>Application of Protection Layer</h4>
                            <p>As a final stage, we often recommend applying a protective coating such as a sealant to
                                provide an additional layer of protection. These sealants help protect the floor from
                                stains, water, as well as prevent future deterioration of the floor.</p>
                        </div>
                    </div>
                    <div class="process-step">
                        <div class="ps-num">5</div>
                        <div class="ps-body">
                            <h4>Finishing and Final Inspection</h4>
                            <p>We perform a final inspection to ensure that the polishing results are satisfactory. We
                                ensure that the porcelain floor has an even sheen and is free from any residue that could
                                leave marks or residue.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 3 STEPS CTA --}}
    <section class="steps-cta-section">
        <div class="container text-center">
            <h2 class="sec-title">3 Steps to Polishing Your Porcelain Tiles</h2>
            <p class="sec-sub" style="margin:0 auto;">Our simple booking process makes it easy to get your porcelain tiles
                polished by our professional team.</p>
            <div class="steps-cta-grid">
                <div class="step-cta-card">
                    <div class="step-cta-icon"><i class="fab fa-whatsapp"></i></div>
                    <h3>Consultation On WhatsApp</h3>
                </div>
                <div class="step-cta-card">
                    <div class="step-cta-icon"><i class="fas fa-calendar-check"></i></div>
                    <h3>Schedule An Appointment</h3>
                </div>
                <div class="step-cta-card">
                    <div class="step-cta-icon"><i class="fas fa-star"></i></div>
                    <h3>Complete The Polishing Work</h3>
                </div>
            </div>
            <a href="https://wa.me/6588772899" class="btn-wa-cta" target="_blank">
                <i class="fab fa-whatsapp"></i> WhatsApp to Start Now!
            </a>
        </div>
    </section>

    {{-- ============================================================
     WHAT CAN WE OFFER + MAINTENANCE TIPS (1 SECTION)
     ============================================================ --}}
    <section class="combined-section">
        <div class="container">

            {{-- OFFER BLOCK --}}
            <div class="offer-block">
                <div class="offer-grid">
                    <div class="offer-text">
                        <h2>What Can We Offer And The Result We Have Done Before?</h2>
                        <div class="section-underline"></div>
                        <p>Floorshine are Singapore floor polishing experts that you should rely on to maintain the entire
                            surface of your floor. After a thorough surface inspection, we will recommend and also provide
                            a follow-up marble polishing solution.</p>
                        <p>Our services primarily emphasise restoring the appearance of your floor surface and extending
                            its service life. Floor shine is a company that focuses on the polishing sector, and the
                            results we have:</p>
                        <ul class="simple-bullet-list">
                            <li>Your scratches/stains/patches are neatly camouflaged</li>
                            <li>Your floor looks shiny</li>
                            <li>Dullness is no longer visible on your floor</li>
                        </ul>
                    </div>
                    <div class="offer-img">
                        <img src="{{ asset('images/floorshine-logo.jpg') }}" alt="Floorshine Logo">
                    </div>
                </div>
            </div>

            <hr class="section-divider">

            {{-- MAINTENANCE BLOCK --}}
            <div class="maint-block">
                <div class="maint-grid">
                    <div class="maint-text">
                        <h2>How To Keep Your Porcelain Tiles Well Maintained?</h2>
                        <div class="section-underline"></div>
                        <p>Porcelain flooring is very popular material choice due to its strength, durability, and
                            aesthetic appearance. However, while porcelain flooring is renowned for its durability, proper
                            maintenance is still required to ensure that your floor remains durable and beautiful. One of
                            the best ways to maintain porcelain flooring is through floor polishing, which not only keeps
                            the appearance shiny and also increases the durability of the floor in the long run. If you
                            are looking for a professional floor polishing service, try Floorshine.</p>
                        <p class="maint-tips-label">Things to Consider for Porcelain Tiles:</p>
                        <ul class="maint-bullet-list">
                            <li>Avoid Excessive Moisture Exposure.</li>
                            <li>Avoid using Harsh Cleaning Agents.</li>
                            <li>Protect the Floor from Scratches.</li>
                            <li>Routine Maintenance to Increase Durability.</li>
                            <li>Maintain Routine Cleanliness.</li>
                            <li>Keep Moist out.</li>
                        </ul>
                        <p class="maint-footer-text">Maintaining a porcelain floor after polishing may seem like a
                            hassle, but it is the key to having a shiny and long-lasting porcelain tiles.</p>
                    </div>
                    <div class="maint-img-box">
                        <img src="{{ asset('images/porcelain-page/porcelain-maintenance.jpg') }}"
                            alt="Porcelain Maintenance">
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- FAQ --}}
    <section class="faq-section">
        <div class="container">
            <h2 class="sec-title">FAQ — <span>Porcelain Tiles Polishing Service</span></h2>
            <p class="sec-sub">Common questions about our porcelain tiles polishing services in Singapore.</p>
            <div class="faq-cols">
                <div>
                    <div class="faq-item open">
                        <div class="faq-q" onclick="toggleFaq(this)">
                            <span>Why do porcelain floors need polishing?</span>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-a">
                            Porcelain floors require polishing to restore faded shine, protect it from stains and scratches
                            and repair minor scratches or signs of use on the tiles. Polishing can also help restore the
                            type of appearance that can degrade and extend the life of the floor.
                        </div>
                    </div>
                    <div class="faq-item" style="margin-top:12px;">
                        <div class="faq-q" onclick="toggleFaq(this)">
                            <span>How often do I need to polish my porcelain floor?</span>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-a">
                            The frequency of porcelain floor polishing depends on how often the floor is used. For
                            low-traffic areas, polishing is usually sufficient once every 1–2 years. However, for areas that
                            experience high traffic areas, polishing can be done every 6 to 12 months.
                        </div>
                    </div>
                    <div class="faq-item" style="margin-top:12px;">
                        <div class="faq-q" onclick="toggleFaq(this)">
                            <span>Is porcelain floor polishing safe?</span>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-a">
                            Porcelain floor polishing is safe when it is done by professionals with the right equipment and
                            materials. Polishing with the right techniques can help maintain the floor while extending its
                            life to protect it from further wear and damage. Prove it with Floorshine.
                        </div>
                    </div>
                </div>
                <div>
                    <div class="faq-item">
                        <div class="faq-q" onclick="toggleFaq(this)">
                            <span>How long does it take to polish a porcelain floor?</span>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-a">
                            The time taken to polish a porcelain floor depends on the size and condition of the floor. In
                            general, floor polishing will take between a few hours to a day, depending on the number of
                            rooms and the degree of floor wear.
                        </div>
                    </div>
                    <div class="faq-item" style="margin-top:12px;">
                        <div class="faq-q" onclick="toggleFaq(this)">
                            <span>Is porcelain floor polishing suitable for old or damaged floors?</span>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-a">
                            Porcelain floor polishing can improve the appearance of dull or slightly damaged floors, but for
                            very old or damaged floors with significant structural damage or deep scratches, we recommend
                            further inspection and possibly replacing some of the damaged parts of the floor before
                            proceeding with polishing.
                        </div>
                    </div>
                    <div class="faq-item" style="margin-top:12px;">
                        <div class="faq-q" onclick="toggleFaq(this)">
                            <span>How to maintain porcelain floors after polishing?</span>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-a">
                            After polishing, make sure to keep the floor dry and avoid sweeping or mopping regularly with a
                            soft tool (such as a microfibre mop). Avoid using strong cleaning agents or cleaners that may
                            damage the polished surface. Also consider using mats and use foot protectors under furniture to
                            avoid scratches.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- OTHER SERVICES --}}
    <section class="other-services-section">
        <div class="container">
            <h2 class="sec-title text-center">Our Other Services</h2>
            <p class="sec-sub text-center" style="margin:0 auto;">Explore our complete range of professional floor
                polishing services in Singapore.</p>
            <div class="os-grid">
                <a href="{{ route('services.marble') }}" class="os-card"><span class="os-icon"><i
                            class="fas fa-gem"></i></span>
                    <h4>Marble Polishing</h4>
                </a>
                <a href="{{ route('services.granite') }}" class="os-card"><span class="os-icon"><i
                            class="fas fa-mountain"></i></span>
                    <h4>Granite Polishing</h4>
                </a>
                <a href="{{ route('services.homogeneous') }}" class="os-card"><span class="os-icon"><i
                            class="fas fa-th-large"></i></span>
                    <h4>Homogeneous Tiles Polishing</h4>
                </a>
                <a href="{{ route('services.parquet') }}" class="os-card"><span class="os-icon"><i
                            class="fas fa-grip-lines"></i></span>
                    <h4>Parquet Polishing</h4>
                </a>
                <a href="{{ route('services.limestone') }}" class="os-card"><span class="os-icon"><i
                            class="fas fa-layer-group"></i></span>
                    <h4>Limestone Polishing</h4>
                </a>
                <a href="{{ route('services.outdoor') }}" class="os-card"><span class="os-icon"><i
                            class="fas fa-sun"></i></span>
                    <h4>Outdoor Ceramic Tiles Polishing</h4>
                </a>
                <a href="{{ route('services.terrazzo') }}" class="os-card"><span class="os-icon"><i
                            class="fas fa-border-all"></i></span>
                    <h4>Terrazzo Polishing</h4>
                </a>
                <a href="{{ route('home') }}" class="os-card" style="background:#e8f7f8; border-color:#35adb5;"><span
                        class="os-icon"><i class="fas fa-home"></i></span>
                    <h4>Back to Home</h4>
                </a>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        function toggleFaq(el) {
            el.closest('.faq-item').classList.toggle('open');
        }
    </script>
@endpush
