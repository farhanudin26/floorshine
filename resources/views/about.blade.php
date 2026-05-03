@extends('layouts.app')

@section('title', 'About Us - Floorshine Singapore Professional Floor Polishing')
@section('meta_description',
    'Learn about Floorshine, Singapore\'s trusted professional floor polishing company with
    over 5 years of experience in Marble, Granite, Parquet, and Tile polishing.')

    @push('styles')
        <style>
            .page-hero {
                background: linear-gradient(135deg, #35adb5 0%, #1e7880 100%);
                padding: 70px 0 60px;
                text-align: center;
                position: relative;
                overflow: hidden;
            }

            .page-hero::before {
                content: '';
                position: absolute;
                top: -60px;
                right: -60px;
                width: 300px;
                height: 300px;
                background: rgba(255, 255, 255, 0.05);
                border-radius: 50%;
            }

            .page-hero::after {
                content: '';
                position: absolute;
                bottom: -40px;
                left: -40px;
                width: 200px;
                height: 200px;
                background: rgba(255, 255, 255, 0.04);
                border-radius: 50%;
            }

            .page-hero h1 {
                font-family: var(--font-head);
                font-size: clamp(32px, 5vw, 56px);
                font-weight: 800;
                color: #fff;
                letter-spacing: -1px;
                margin-bottom: 24px;
                position: relative;
                z-index: 1;
            }

            .hero-social {
                display: flex;
                justify-content: center;
                gap: 10px;
                position: relative;
                z-index: 1;
            }

            .hero-social a {
                width: 38px;
                height: 38px;
                background: rgba(255, 255, 255, 0.18);
                border-radius: 8px;
                display: flex;
                align-items: center;
                justify-content: center;
                color: #fff;
                font-size: 15px;
                text-decoration: none;
                transition: all 0.2s;
            }

            .hero-social a:hover {
                background: rgba(255, 255, 255, 0.35);
                transform: translateY(-2px);
            }

            /* Commons */
            .container {
                max-width: 1100px;
                margin: 0 auto;
                padding: 0 24px;
            }

            section {
                padding: 72px 0;
            }

            /* ============================================================
           ABOUT INTRO - 1 SECTION
           ============================================================ */
            .about-intro {
                background: #fff;
            }

            /* Baris 1: Logo + About Us */
            .about-top-grid {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 48px;
                align-items: center;
                margin-bottom: 36px;
            }

            .about-logo-box img {
                max-width: 500px;
                display: block;
            }

            .about-tagline-box {
                border-left: 4px solid var(--teal);
                padding-left: 20px;
            }

            .about-tagline-box h3 {
                font-family: var(--font-head);
                font-size: 20px;
                font-weight: 700;
                color: var(--teal);
                margin-bottom: 10px;
            }

            .about-tagline-box p {
                font-size: 15px;
                color: #444;
                line-height: 1.75;
            }

            /* Baris 2: Teks panjang */
            .about-body-text {
                margin-bottom: 40px;
                padding-bottom: 36px;
                border-bottom: 1px solid #eee;
            }

            .about-body-text p {
                font-size: 14.5px;
                color: #444;
                line-height: 1.8;
                margin-bottom: 10px;
            }

            .about-body-text p:last-child {
                margin-bottom: 0;
            }

            /* Baris 3: We Provide */
            .about-bottom-grid {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 48px;
                align-items: center;
            }

            .about-bottom-left h2 {
                font-family: var(--font-head);
                font-size: clamp(22px, 2.8vw, 30px);
                font-weight: 800;
                color: var(--teal);
                line-height: 1.2;
            }

            .about-bottom-right p {
                font-size: 15px;
                color: #444;
                line-height: 1.8;
            }

            /* Vision & Mission */
            .vm-section {
                background: #edb500;
            }

            .vm-grid {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 40px;
            }

            .vm-box h3 {
                font-family: var(--font-head);
                font-size: 22px;
                font-weight: 800;
                color: #fff;
                margin-bottom: 10px;
                padding-bottom: 12px;
                border-bottom: 3px solid var(--teal);
                display: inline-block;
            }

            .vm-box p {
                font-size: 15px;
                color: #fff;
                line-height: 1.8;
                margin-top: 16px;
            }

            .get-quote-wrap {
                text-align: center;
                margin-top: 48px;
            }

            .btn-get-quote {
                background: var(--teal);
                color: #fff;
                padding: 15px 44px;
                border-radius: 8px;
                text-decoration: none;
                font-size: 16px;
                font-weight: 700;
                font-family: var(--font-head);
                transition: all 0.2s;
                display: inline-block;
                box-shadow: 0 4px 20px rgba(29, 187, 164, 0.3);
            }

            .btn-get-quote:hover {
                background: var(--teal-dark);
                transform: translateY(-2px);
                color: #fff;
            }

            /* Why Choose Floorshine */
            .why-section {
                background: #35adb5;
                padding: 72px 0;
            }

            .why-section .sec-title {
                font-family: var(--font-head);
                font-size: clamp(24px, 3.5vw, 40px);
                font-weight: 800;
                color: #fff;
                text-align: center;
                margin-bottom: 50px;
                letter-spacing: -0.5px;
            }

            .why-row-1 {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 24px;
                margin-bottom: 24px;
            }

            .why-row-2 {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 24px;
                max-width: 680px;
                margin: 0 auto;
            }

            .why-item {
                text-align: center;
                padding: 32px 24px;
                background: rgba(255, 255, 255, 0.1);
                border-radius: 16px;
                backdrop-filter: blur(4px);
                border: 1px solid rgba(255, 255, 255, 0.15);
                transition: all 0.25s;
            }

            .why-item:hover {
                background: rgba(255, 255, 255, 0.18);
                transform: translateY(-4px);
            }

            .why-item .wi-icon {
                width: 70px;
                height: 70px;
                background: rgba(255, 255, 255, 0.15);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 0 auto 16px;
                font-size: 28px;
                color: #fff;
            }

            .why-item h3 {
                font-family: var(--font-head);
                font-size: 17px;
                font-weight: 700;
                color: #fff;
                margin-bottom: 10px;
            }

            .why-item p {
                font-size: 13.5px;
                color: rgba(255, 255, 255, 0.8);
                line-height: 1.65;
            }

            .why-wa {
                text-align: center;
                margin-top: 40px;
            }

            .btn-wa-outline {
                display: inline-flex;
                align-items: center;
                gap: 9px;
                background: rgba(255, 255, 255, 0.15);
                color: #fff;
                padding: 13px 30px;
                border-radius: 50px;
                text-decoration: none;
                font-size: 15px;
                font-weight: 700;
                font-family: var(--font-head);
                border: 2px solid rgba(255, 255, 255, 0.5);
                transition: all 0.2s;
            }

            .btn-wa-outline:hover {
                background: rgba(255, 255, 255, 0.25);
                border-color: #fff;
                color: #fff;
            }

            /* Responsive */
            @media (max-width: 900px) {
                .about-intro-grid {
                    grid-template-columns: 1fr;
                    gap: 32px;
                }

                .best-service-grid {
                    grid-template-columns: 1fr;
                    gap: 32px;
                }

                .vm-grid {
                    grid-template-columns: 1fr;
                }

                .why-row-1 {
                    grid-template-columns: 1fr 1fr;
                }

                .why-row-2 {
                    grid-template-columns: 1fr 1fr;
                    max-width: 100%;
                }
            }

            @media (max-width: 600px) {

                .why-row-1,
                .why-row-2 {
                    grid-template-columns: 1fr;
                }

                .hero-social {
                    flex-wrap: wrap;
                }
            }
        </style>
    @endpush

@section('content')

    {{-- PAGE HERO --}}
    <div class="page-hero">
        <div class="container">
            <h1>About Floorshine</h1>
            <div class="hero-social">
                <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#quote" title="Enquiry"><i class="fas fa-search"></i></a>
            </div>
        </div>
    </div>

    <section class="about-intro">
        <div class="container">

            {{-- Baris 1: Logo kiri + About Us kanan --}}
            <div class="about-top-grid">
                <div class="about-logo-box">
                    <img src="{{ asset('images/logo-floorshine.png') }}" alt="Floorshine">
                </div>
                <div class="about-tagline-box">
                    <h3>About Us</h3>
                    <p>We are a team of experienced and dedicated professionals who are committed to delivering the highest
                        quality floor polishing services to our clients.</p>
                </div>
            </div>

            {{-- Baris 2: Teks panjang full width --}}
            <div class="about-body-text">
                <p>Floorshine uses high-quality floor polishing products and machines to ensure satisfactory results. Our
                    team of experts have extensive experience and are equipped with the latest equipment to deliver
                    outstanding results.</p>
                <p>Our services include floor polishing of marble, granite, terrazzo, homogeneous tiles, outdoor tiles,
                    limestone, parquet, and porcelain tiles. We use high-quality products and the latest methods to ensure
                    long-lasting results. Our team of experts works hard to provide the best service to our clients,
                    ensuring your satisfaction with our services.</p>
                <p>Don't let your dirty and dull floors disrupt the beauty of your home. Contact us today to schedule an
                    appointment and let us help you achieve clean and shiny floors.</p>
                <p>We offer competitive pricing and unrivalled quality, making us the best choice for your floor polishing
                    needs. Contact us via WhatsApp at +65 8877 2999 to enquire about our services. If you have any questions
                    about floor polishing feel free to contact Floorshine. Our customer service team will be happy to assist
                    you and recommend the best service for floor polishing issues.</p>
            </div>

            {{-- Baris 3: We Provide + teks kanan --}}
            <div class="about-bottom-grid">
                <div class="about-bottom-left">
                    <h2>We Provide Our Best<br>Polishing Service For You.</h2>
                </div>
                <div class="about-bottom-right">
                    <p>We specialise in floor polishing services. We use the latest floor polishing technology and equipment
                        to ensure your home or business floors are sparkling clean.</p>
                </div>
            </div>

        </div>
    </section>

    {{-- VISION & MISSION --}}
    <section class="vm-section">
        <div class="container">
            <div class="vm-grid">
                <div class="vm-box">
                    <h3>Our Vision</h3>
                    <p>Floorshine's vision is to evolve into Singapore's most admired and recognised floor polishing service
                        provider by delivering clean, bright and radiant floors in Singapore through high-quality and
                        efficient floor polishing services.</p>
                </div>
                <div class="vm-box">
                    <h3>Our Mission</h3>
                    <p>Floorshine's mission is to use the best products and procedures to deliver the best results for our
                        customers, provide the best customer service, and ensure our customers' satisfaction. Floorshine
                        insists in maintaining excellence in its services by making sure to reward and retain existing
                        customers and gain new customers through them and the reputation built.</p>
                </div>
            </div>
            <div class="get-quote-wrap">
                <a href="#quote" class="btn-get-quote">Get A Quote</a>
            </div>
        </div>
    </section>

    {{-- WHY CHOOSE FLOORSHINE --}}
    <section class="why-section">
        <div class="container">
            <h2 class="sec-title">Why Choose Floorshine</h2>
            <div class="why-row-1">
                <div class="why-item">
                    <div class="wi-icon"><i class="fas fa-user-tie"></i></div>
                    <h3>Professional</h3>
                    <p>Our team consists of experienced and skilled technicians in the field of floor polishing. We use the
                        best equipment and methods to deliver high-quality and long-lasting results.</p>
                </div>
                <div class="why-item">
                    <div class="wi-icon"><i class="fas fa-certificate"></i></div>
                    <h3>Certified</h3>
                    <p>We adhere to industry standards and regulations, and have proven certificates in providing
                        high-quality services to customers.</p>
                </div>
                <div class="why-item">
                    <div class="wi-icon"><i class="fas fa-award"></i></div>
                    <h3>Best Services</h3>
                    <p>We are committed to providing the best service to our customers. We offer a range of services
                        tailored to your needs and budget.</p>
                </div>
            </div>
            <div class="why-row-2">
                <div class="why-item">
                    <div class="wi-icon"><i class="fas fa-tag"></i></div>
                    <h3>Affordable</h3>
                    <p>We offer affordable prices for high-quality floor polishing services. We strive to provide the best
                        value for your money.</p>
                </div>
                <div class="why-item">
                    <div class="wi-icon"><i class="fas fa-tools"></i></div>
                    <h3>Workmanship</h3>
                    <p>We take pride in our high-quality and durable work. We use the best materials and equipment to ensure
                        satisfactory results.</p>
                </div>
            </div>
            <div class="why-wa">
                <a href="https://wa.me/6588772899" class="btn-wa-outline" target="_blank">
                    <i class="fab fa-whatsapp"></i> WhatsApp to Start Now!
                </a>
            </div>
        </div>
    </section>

    {{-- Tidak ada section contact di sini — sudah ada di layout (app.blade.php) --}}

@endsection
