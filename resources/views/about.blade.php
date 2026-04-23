@extends('layouts.app')

@section('title', 'About Us - Floorshine Singapore Professional Floor Polishing')
@section('meta_description', 'Learn about Floorshine, Singapore\'s trusted professional floor polishing company with over 5 years of experience in Marble, Granite, Parquet, and Tile polishing.')

@push('styles')
<style>
/* ============================================================
   PAGE HERO / BANNER
   ============================================================ */
.page-hero {
    background: linear-gradient(135deg, #35adb5 0%, #35adb5 60%, #35adb5 100%);
    padding: 70px 0 60px;
    text-align: center;
    position: relative;
    overflow: hidden;
}
.page-hero::before {
    content: '';
    position: absolute;
    top: -60px; right: -60px;
    width: 300px; height: 300px;
    background: rgba(255,255,255,0.05);
    border-radius: 50%;
}
.page-hero::after {
    content: '';
    position: absolute;
    bottom: -40px; left: -40px;
    width: 200px; height: 200px;
    background: rgba(255,255,255,0.04);
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
    width: 38px; height: 38px;
    background: rgba(255,255,255,0.18);
    border-radius: 8px;
    display: flex; align-items: center; justify-content: center;
    color: #fff;
    font-size: 15px;
    text-decoration: none;
    transition: all 0.2s;
    backdrop-filter: blur(4px);
}
.hero-social a:hover { background: rgba(255,255,255,0.35); transform: translateY(-2px); }

/* ============================================================
   SECTION COMMONS
   ============================================================ */
.container { max-width: 1100px; margin: 0 auto; padding: 0 24px; }
section { padding: 72px 0; }
.teal-title {
    font-family: var(--font-head);
    font-size: clamp(20px, 2.5vw, 28px);
    font-weight: 800;
    color: var(--teal);
    margin-bottom: 16px;
    letter-spacing: -0.3px;
}
.teal-underline {
    display: inline-block;
    position: relative;
    padding-bottom: 10px;
    margin-bottom: 20px;
}
.teal-underline::after {
    content: '';
    position: absolute;
    bottom: 0; left: 0;
    width: 48px; height: 3px;
    background: var(--teal);
    border-radius: 2px;
}

/* ============================================================
   ABOUT INTRO SECTION
   ============================================================ */
.about-intro { background: #fff; }
.about-intro-grid {
    display: grid;
    grid-template-columns: 300px 1fr;
    gap: 56px;
    align-items: start;
    margin-bottom: 40px;
}
.about-logo-panel {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 0;
}
.brand-logo-big {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 6px;
}
.brand-icon-big {
    width: 52px; height: 52px;
    background: var(--teal);
    border-radius: 12px;
    display: flex; align-items: center; justify-content: center;
    font-size: 24px;
    color: #fff;
    flex-shrink: 0;
}
{{-- CATATAN LOGO:
     Jika punya file logo Floorshine (.png / .svg), simpan di:
     public/images/logo-floorshine.png
     Lalu ganti .brand-logo-big dengan:
     <img src="{{ asset('images/logo-floorshine.png') }}" style="max-width:240px;" alt="Floorshine Logo">
     --}}
.brand-name-big {
    font-family: var(--font-head);
    font-size: 32px;
    font-weight: 800;
    line-height: 1;
    letter-spacing: -1px;
}
.brand-name-big .part-floor { color: var(--teal); }
.brand-name-big .part-shine { color: var(--navy); }

.about-tagline-box {
    margin-top: 20px;
    border-left: 4px solid var(--teal);
    padding-left: 18px;
}
.about-tagline-box h3 {
    font-family: var(--font-head);
    font-size: 18px;
    font-weight: 700;
    color: var(--teal);
    margin-bottom: 10px;
    line-height: 1.3;
}
.about-tagline-box p {
    font-size: 14.5px;
    color: var(--gray-600);
    line-height: 1.7;
}

/* About body text */
.about-body-text p {
    font-size: 15px;
    color: var(--gray-600);
    line-height: 1.8;
    margin-bottom: 16px;
}
.about-body-text p:last-child { margin-bottom: 0; }

/* ============================================================
   BEST SERVICE SECTION
   ============================================================ */
.best-service-bg { background: var(--gray-50); }
.best-service-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 56px;
    align-items: center;
}
.best-left h2 {
    font-family: var(--font-head);
    font-size: clamp(22px, 3vw, 32px);
    font-weight: 800;
    color: var(--navy);
    line-height: 1.2;
    letter-spacing: -0.5px;
}
.best-left h2 span { color: var(--teal); }
.best-underline {
    width: 56px; height: 4px;
    background: var(--teal);
    border-radius: 2px;
    margin-top: 16px;
}
.best-right p {
    font-size: 15.5px;
    color: var(--gray-600);
    line-height: 1.8;
}

/* ============================================================
   VISION & MISSION
   ============================================================ */
.vm-section { background: #fff; }
.vm-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
    margin-top: 0;
}
.vm-box { padding: 0; }
.vm-box h3 {
    font-family: var(--font-head);
    font-size: 22px;
    font-weight: 800;
    color: var(--teal);
    margin-bottom: 10px;
    padding-bottom: 12px;
    border-bottom: 3px solid var(--teal);
    display: inline-block;
}
.vm-box p {
    font-size: 15px;
    color: var(--gray-600);
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
    box-shadow: 0 4px 20px rgba(29,187,164,0.3);
}
.btn-get-quote:hover {
    background: var(--teal-dark);
    transform: translateY(-2px);
    box-shadow: 0 8px 28px rgba(29,187,164,0.35);
    color: #fff;
}

/* ============================================================
   WHY CHOOSE FLOORSHINE
   ============================================================ */
.why-section {
    background: linear-gradient(135deg, #0a8c7a 0%, #1DBBA4 100%);
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
    background: rgba(255,255,255,0.1);
    border-radius: 16px;
    backdrop-filter: blur(4px);
    border: 1px solid rgba(255,255,255,0.15);
    transition: all 0.25s;
}
.why-item:hover {
    background: rgba(255,255,255,0.18);
    transform: translateY(-4px);
}
.why-item .wi-icon {
    width: 70px; height: 70px;
    background: rgba(255,255,255,0.15);
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 16px;
    font-size: 28px;
    color: #fff;
    transition: all 0.25s;
}
.why-item:hover .wi-icon { background: rgba(255,255,255,0.25); }
.why-item h3 {
    font-family: var(--font-head);
    font-size: 17px;
    font-weight: 700;
    color: #fff;
    margin-bottom: 10px;
}
.why-item p {
    font-size: 13.5px;
    color: rgba(255,255,255,0.8);
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
    background: rgba(255,255,255,0.15);
    color: #fff;
    padding: 13px 30px;
    border-radius: 50px;
    text-decoration: none;
    font-size: 15px;
    font-weight: 700;
    font-family: var(--font-head);
    border: 2px solid rgba(255,255,255,0.5);
    transition: all 0.2s;
}
.btn-wa-outline:hover {
    background: rgba(255,255,255,0.25);
    border-color: #fff;
    color: #fff;
    transform: translateY(-2px);
}

/* ============================================================
   CONTACT & MAP SECTION
   ============================================================ */
.contact-section { background: #fff; padding: 72px 0 0; }
.contact-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 56px;
    align-items: start;
    padding-bottom: 72px;
}
.contact-left h2 {
    font-family: var(--font-head);
    font-size: 26px;
    font-weight: 800;
    color: var(--teal);
    line-height: 1.25;
    margin-bottom: 28px;
}
.contact-left h2 span {
    color: var(--navy);
    display: block;
    font-size: 20px;
    font-weight: 600;
    margin-top: 4px;
}
.contact-item {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    margin-bottom: 20px;
}
.contact-item-icon {
    width: 42px; height: 42px;
    background: var(--teal-light);
    border-radius: 10px;
    display: flex; align-items: center; justify-content: center;
    font-size: 17px;
    color: var(--teal);
    flex-shrink: 0;
}
.contact-item-body { flex: 1; }
.contact-item-label {
    font-size: 12px;
    font-weight: 600;
    color: var(--gray-400);
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 3px;
}
.contact-item-val {
    font-size: 15px;
    color: var(--gray-800);
    font-weight: 500;
}
.contact-item-val a {
    color: var(--teal);
    text-decoration: none;
    font-weight: 600;
}
.contact-item-val a:hover { text-decoration: underline; }

/* Map */
.contact-map {
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 8px 32px rgba(0,0,0,0.1);
    border: 3px solid var(--gray-200);
}
.contact-map iframe {
    width: 100%;
    height: 380px;
    border: none;
    display: block;
}

/* ============================================================
   RESPONSIVE
   ============================================================ */
@media (max-width: 900px) {
    .about-intro-grid { grid-template-columns: 1fr; gap: 32px; }
    .best-service-grid { grid-template-columns: 1fr; gap: 32px; }
    .vm-grid { grid-template-columns: 1fr; }
    .why-row-1 { grid-template-columns: 1fr 1fr; }
    .why-row-2 { grid-template-columns: 1fr 1fr; max-width: 100%; }
    .contact-grid { grid-template-columns: 1fr; }
}
@media (max-width: 600px) {
    .why-row-1 { grid-template-columns: 1fr; }
    .why-row-2 { grid-template-columns: 1fr; }
    .hero-social { flex-wrap: wrap; }
}
</style>
@endpush

@section('content')

{{-- ============================================================
     PAGE HERO
     ============================================================ --}}
<div class="page-hero">
    <div class="container">
        <h1>About Floorshine</h1>
        <div class="hero-social">
            <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" title="Twitter / X"><i class="fab fa-x-twitter"></i></a>
            <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            <a href="#quote" title="Enquiry"><i class="fas fa-search"></i></a>
        </div>
    </div>
</div>

{{-- ============================================================
     ABOUT INTRO
     ============================================================ --}}
<section class="about-intro">
    <div class="container">

        {{-- Logo + tagline row --}}
        <div class="about-intro-grid">
            <div class="about-logo-panel">
                {{-- ============================================================
                     CATATAN LOGO:
                     Jika punya file logo Floorshine (.png / .svg), simpan di:
                     public/images/logo-floorshine.png
                     Lalu ganti blok di bawah dengan:
                     <img src="{{ asset('images/logo-floorshine.png') }}"
                          style="max-width:240px; display:block;"
                          alt="Floorshine Logo">
                     ============================================================ --}}
                <div class="brand-logo-big">
                    <div class="brand-icon-big">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="brand-name-big">
                        <span class="part-floor">FLOOR</span><span class="part-shine">SHINE</span>
                    </div>
                </div>

                <div class="about-tagline-box">
                    <h3>About Us</h3>
                    <p>We are a team of experienced and dedicated professionals who are committed to delivering the highest quality floor polishing services to our clients.</p>
                </div>
            </div>

            <div class="about-body-text">
                <p>Floorshine uses high-quality floor polishing products and machines to ensure satisfactory results. Our team of experts have extensive experience and are equipped with the latest equipment to deliver outstanding results.</p>
                <p>Our services include floor polishing of marble, granite, terrazzo, homogeneous tiles, outdoor tiles, limestone, parquet, and porcelain tiles. We use high-quality products and the latest methods to ensure long-lasting results. Our team of experts works hard to provide the best service to our clients, ensuring your satisfaction with our services.</p>
                <p>Don't let your dirty and dull floors disrupt the beauty of your home. Contact us today to schedule an appointment and let us help you achieve clean and shiny floors.</p>
                <p>We offer competitive pricing and unrivalled quality, making us the best choice for your floor polishing needs. Contact us via WhatsApp at +65 8877 2999 to enquire about our services. If you have any questions about floor polishing feel free to contact Floorshine. Our customer service team will be happy to assist you and recommend the best service for floor polishing issues.</p>
            </div>
        </div>

    </div>
</section>

{{-- ============================================================
     BEST SERVICE
     ============================================================ --}}
<section class="best-service-bg">
    <div class="container">
        <div class="best-service-grid">
            <div class="best-left">
                <h2 class="teal-underline">
                    We Provide Our Best<br>
                    Polishing Service<br>
                    <span>For You.</span>
                </h2>
                <div class="best-underline"></div>
            </div>
            <div class="best-right">
                <p>We specialise in floor polishing services. We use the latest floor polishing technology and equipment to ensure your home or business floors are sparkling clean.</p>
                <p style="margin-top:16px;">Our professional technicians are trained to handle all types of flooring surfaces, from delicate marble to durable granite, ensuring every job is completed to the highest standard with minimal disruption to your daily routine.</p>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     VISION & MISSION
     ============================================================ --}}
<section class="vm-section">
    <div class="container">
        <div class="vm-grid">
            <div class="vm-box">
                <h3>Our Vision</h3>
                <p>Floorshine's vision is to evolve into Singapore's most admired and recognised floor polishing service provider by delivering clean, bright and radiant floors in Singapore through high-quality and efficient floor polishing services.</p>
            </div>
            <div class="vm-box">
                <h3>Our Mission</h3>
                <p>Floorshine's mission is to use the best products and procedures to deliver the best results for our customers, provide the best customer service, and ensure our customers' satisfaction. Floorshine insists in maintaining excellence in its services by making sure to reward and retain existing customers and gain new customers through them and the reputation built.</p>
            </div>
        </div>
        <div class="get-quote-wrap">
            <a href="#quote" class="btn-get-quote">Get A Quote</a>
        </div>
    </div>
</section>

{{-- ============================================================
     WHY CHOOSE FLOORSHINE
     ============================================================ --}}
<section class="why-section">
    <div class="container">
        <h2 class="sec-title">Why Choose Floorshine</h2>

        <div class="why-row-1">
            <div class="why-item">
                <div class="wi-icon"><i class="fas fa-user-tie"></i></div>
                <h3>Professional</h3>
                <p>Our team consists of experienced and skilled technicians in the field of floor polishing. We use the best equipment and methods to deliver high-quality and long-lasting results.</p>
            </div>
            <div class="why-item">
                <div class="wi-icon"><i class="fas fa-certificate"></i></div>
                <h3>Certified</h3>
                <p>We adhere to industry standards and regulations, and have proven certificates in providing high-quality services to customers.</p>
            </div>
            <div class="why-item">
                <div class="wi-icon"><i class="fas fa-award"></i></div>
                <h3>Best Services</h3>
                <p>We are committed to providing the best service to our customers. We offer a range of services tailored to your needs and budget.</p>
            </div>
        </div>

        <div class="why-row-2">
            <div class="why-item">
                <div class="wi-icon"><i class="fas fa-tag"></i></div>
                <h3>Affordable</h3>
                <p>We offer affordable prices for high-quality floor polishing services. We strive to provide the best value for your money.</p>
            </div>
            <div class="why-item">
                <div class="wi-icon"><i class="fas fa-tools"></i></div>
                <h3>Workmanship</h3>
                <p>We take pride in our high-quality and durable work. We use the best materials and equipment to ensure satisfactory results.</p>
            </div>
        </div>

        <div class="why-wa">
            <a href="https://wa.me/6588772899" class="btn-wa-outline" target="_blank">
                <i class="fab fa-whatsapp"></i> WhatsApp to Start Now!
            </a>
        </div>
    </div>
</section>

{{-- ============================================================
     CONTACT & MAP
     ============================================================ --}}
<section class="contact-section" id="quote">
    <div class="container">
        <div class="contact-grid">
            <div class="contact-left">
                <h2>
                    Floorshine | Floor Polishing
                    <span>Singapore</span>
                </h2>

                <div class="contact-item">
                    <div class="contact-item-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <div class="contact-item-body">
                        <div class="contact-item-label">Address</div>
                        <div class="contact-item-val">18 Sin Ming Ln, #06-27, Midview City<br>Singapore 573960</div>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-item-icon"><i class="fab fa-whatsapp"></i></div>
                    <div class="contact-item-body">
                        <div class="contact-item-label">WhatsApp</div>
                        <div class="contact-item-val">
                            <a href="https://wa.me/6588772899" target="_blank">+65 8877 2899</a>
                        </div>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-item-icon"><i class="fas fa-envelope"></i></div>
                    <div class="contact-item-body">
                        <div class="contact-item-label">Email</div>
                        <div class="contact-item-val">
                            <a href="mailto:enquiry@floorpolishing.sg">enquiry@floorpolishing.sg</a>
                        </div>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-item-icon"><i class="fas fa-clock"></i></div>
                    <div class="contact-item-body">
                        <div class="contact-item-label">Operating Hours</div>
                        <div class="contact-item-val">Mon – Fri: 9:00 am – 6:00 pm</div>
                    </div>
                </div>
            </div>

            {{-- MAP --}}
            <div>
                {{-- ============================================================
                     CATATAN GOOGLE MAPS:
                     Ganti URL di bawah dengan embed link Google Maps
                     lokasi bisnis Floorshine yang sebenarnya.
                     Caranya:
                     1. Buka https://maps.google.com
                     2. Cari alamat "18 Sin Ming Lane, Midview City, Singapore"
                     3. Klik Share → Embed a map
                     4. Copy isi src="..." dan paste di bawah
                     ============================================================ --}}
                <div class="contact-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.6704782073865!2d103.83018757499225!3d1.3493099986586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da17057effffff%3A0x7efb5b33efba1e14!2sMidview%20City!5e0!3m2!1sen!2ssg!4v1700000000001!5m2!1sen!2ssg"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
