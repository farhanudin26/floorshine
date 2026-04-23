@extends('layouts.app')

@section('title', 'Outdoor Ceramic Tiles Polishing Services in Singapore | Floorshine')
@section('meta_description', 'Professional outdoor ceramic tiles polishing services in Singapore. Restoring the lustre and beauty of your outdoor ceramic tiles. Get a free quote today.')

@push('styles')
<style>
/* ============================================================
   HERO — warna #35adb5
   CATATAN: Saat gambar outdoor ceramic sudah ada, ganti dengan:
   background: linear-gradient(...), url("{{ asset('images/floors/outdoor-hero.jpg') }}") center/cover no-repeat;
   ============================================================ */
.outdoor-hero {
    background: linear-gradient(135deg, rgba(30,120,128,0.95) 0%, rgba(53,173,181,0.95) 100%);
    padding: 80px 0 70px;
    position: relative;
}
.outdoor-hero::after {
    content: '';
    position: absolute;
    bottom: 0; left: 0; right: 0;
    height: 4px;
    background: linear-gradient(90deg, #35adb5, #fff, #35adb5);
}
.hero-badge {
    display: inline-flex; align-items: center; gap: 7px;
    background: rgba(255,255,255,0.18); color: rgba(255,255,255,0.95);
    padding: 5px 14px; border-radius: 100px; font-size: 12.5px;
    font-weight: 500; margin-bottom: 18px; backdrop-filter: blur(4px);
}
.outdoor-hero h1 {
    font-family: var(--font-head);
    font-size: clamp(28px, 4.2vw, 52px); font-weight: 800; color: #fff;
    line-height: 1.12; letter-spacing: -1.5px; margin-bottom: 18px; max-width: 680px;
}
.outdoor-hero p {
    color: rgba(255,255,255,0.9); font-size: 15.5px;
    line-height: 1.65; max-width: 520px; margin-bottom: 28px;
}
.btn-quote-white {
    display: inline-block; background: #fff; color: #1e7880;
    padding: 13px 30px; border-radius: 8px; font-size: 15px;
    font-weight: 700; font-family: var(--font-head); text-decoration: none;
    transition: all 0.2s; box-shadow: 0 4px 18px rgba(0,0,0,0.15);
}
.btn-quote-white:hover { transform: translateY(-2px); box-shadow: 0 8px 24px rgba(0,0,0,0.2); }

/* ============================================================
   COMMONS
   ============================================================ */
.container { max-width: 1100px; margin: 0 auto; padding: 0 24px; }
section { padding: 72px 0; }
.sec-title {
    font-family: var(--font-head);
    font-size: clamp(22px, 3vw, 36px); font-weight: 800; color: var(--navy);
    line-height: 1.2; letter-spacing: -0.5px; margin-bottom: 14px;
}
.sec-title span { color: #35adb5; }
.sec-sub { font-size: 15.5px; color: var(--gray-600); line-height: 1.75; max-width: 700px; }
.text-center { text-align: center; }
.gray-bg  { background: var(--gray-50); }
.white-bg { background: #fff; }

/* ============================================================
   ABOUT SECTION
   ============================================================ */
.about-grid {
    display: grid; grid-template-columns: 1fr 420px; gap: 52px; align-items: start;
}
.about-text h2 {
    font-family: var(--font-head); font-size: 22px; font-weight: 800;
    color: var(--navy); margin: 28px 0 14px;
    padding-bottom: 10px; border-bottom: 2px solid var(--gray-200);
}
.about-text h2:first-child { margin-top: 0; }
.about-text p { font-size: 15px; color: var(--gray-600); line-height: 1.8; margin-bottom: 16px; }
.about-text p:last-child { margin-bottom: 0; }
.img-panel { position: sticky; top: 90px; }
.img-box {
    border-radius: 20px; overflow: hidden;
    background: #e8f7f8; aspect-ratio: 4/3;
    display: flex; align-items: center; justify-content: center;
    font-size: 80px; color: #35adb5;
    /* CATATAN: Saat gambar sudah ada, ganti dengan:
       background: url("{{ asset('images/floors/outdoor-room.jpg') }}") center/cover;
       Hapus display:flex, align-items, justify-content, font-size, color */
}

/* Bullet list */
.bullet-list { list-style: none; margin: 16px 0; }
.bullet-list li {
    display: flex; align-items: flex-start; gap: 10px;
    font-size: 14.5px; color: var(--gray-700, #374151);
    margin-bottom: 9px; line-height: 1.55;
}
.bullet-list li::before {
    content: '▸'; color: #35adb5; font-size: 13px; margin-top: 2px; flex-shrink: 0;
}

/* ============================================================
   WHY NEED POLISH
   ============================================================ */
.why-grid {
    display: grid; grid-template-columns: 1fr 380px; gap: 52px; align-items: start;
}
.why-img {
    border-radius: 20px; overflow: hidden; background: #e8f7f8;
    aspect-ratio: 4/3;
    display: flex; align-items: center; justify-content: center;
    font-size: 80px; color: #35adb5;
    /* CATATAN: Ganti dengan:
       background: url("{{ asset('images/floors/outdoor-why.jpg') }}") center/cover;
       Hapus display:flex, align-items, justify-content, font-size, color */
}

/* ============================================================
   PROCESS SECTION — gradient #35adb5
   ============================================================ */
.process-section {
    background: linear-gradient(135deg, #1e7880 0%, #35adb5 100%);
}
.process-intro-grid {
    display: grid; grid-template-columns: 360px 1fr; gap: 52px;
    align-items: start; margin-top: 48px;
}
.process-img-box {
    border-radius: 20px; overflow: hidden; background: rgba(255,255,255,0.12);
    aspect-ratio: 4/5;
    display: flex; align-items: center; justify-content: center;
    font-size: 80px; color: rgba(255,255,255,0.45);
    /* CATATAN: Ganti dengan:
       background: url("{{ asset('images/floors/outdoor-process.jpg') }}") center/cover;
       Hapus display:flex, align-items, justify-content, font-size, color */
}
.process-steps-wrap h3 {
    font-family: var(--font-head); font-size: 20px; font-weight: 700; color: #fff;
    margin-bottom: 24px; display: flex; align-items: center; gap: 10px;
}
.process-steps-wrap h3::before {
    content: ''; width: 32px; height: 3px;
    background: rgba(255,255,255,0.6); border-radius: 2px; flex-shrink: 0;
}
.process-step { display: flex; gap: 18px; margin-bottom: 26px; align-items: flex-start; }
.ps-num {
    width: 40px; height: 40px; border-radius: 50%;
    background: rgba(255,255,255,0.25); border: 2px solid rgba(255,255,255,0.5);
    display: flex; align-items: center; justify-content: center;
    font-family: var(--font-head); font-size: 15px; font-weight: 800;
    color: #fff; flex-shrink: 0; margin-top: 2px;
}
.ps-body h4 { font-family: var(--font-head); font-size: 16px; font-weight: 700; color: #fff; margin-bottom: 6px; }
.ps-body p  { font-size: 14px; color: rgba(255,255,255,0.75); line-height: 1.65; }

/* ============================================================
   3 STEPS CTA
   ============================================================ */
.steps-cta-section { background: var(--gray-50); }
.steps-cta-grid {
    display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; margin-top: 44px;
}
.step-cta-card {
    background: #fff; border-radius: 16px; padding: 32px 22px;
    text-align: center; border: 1px solid var(--gray-200); transition: all 0.2s;
}
.step-cta-card:hover { border-color: #35adb5; transform: translateY(-4px); box-shadow: 0 10px 28px rgba(53,173,181,0.15); }
.step-cta-icon {
    width: 70px; height: 70px; background: #e8f7f8; border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 18px; font-size: 28px; color: #35adb5; transition: all 0.2s;
}
.step-cta-card:hover .step-cta-icon { background: #35adb5; color: #fff; }
.step-cta-card h3 { font-family: var(--font-head); font-size: 15px; font-weight: 700; color: var(--navy); }
.btn-wa-cta {
    display: inline-flex; align-items: center; gap: 9px;
    background: #35adb5; color: #fff; padding: 13px 32px; border-radius: 50px;
    text-decoration: none; font-size: 15px; font-weight: 700;
    font-family: var(--font-head); margin-top: 40px; transition: background 0.2s;
}
.btn-wa-cta:hover { background: #1e7880; color: #fff; }

/* ============================================================
   WHAT CAN WE OFFER
   ============================================================ */
.offer-grid {
    display: grid; grid-template-columns: 1fr 380px; gap: 52px; align-items: center;
}
.offer-text h2 {
    font-family: var(--font-head); font-size: clamp(22px, 2.8vw, 34px);
    font-weight: 800; color: var(--navy); line-height: 1.2;
    letter-spacing: -0.5px; margin-bottom: 16px;
}
.offer-text h2 span { color: #35adb5; }
.offer-text p { font-size: 15px; color: var(--gray-600); line-height: 1.8; margin-bottom: 14px; }
.offer-results { margin-top: 24px; display: flex; flex-direction: column; gap: 10px; }
.offer-result-item {
    display: flex; align-items: center; gap: 10px;
    font-size: 14.5px; color: var(--gray-800); font-weight: 500;
}
.offer-result-item i { color: #35adb5; font-size: 15px; flex-shrink: 0; }
.offer-img {
    border-radius: 20px; overflow: hidden; background: #e8f7f8;
    aspect-ratio: 4/3;
    display: flex; align-items: center; justify-content: center;
    font-size: 80px; color: #35adb5;
    /* CATATAN: Ganti dengan:
       background: url("{{ asset('images/floors/outdoor-offer.jpg') }}") center/cover;
       Hapus display:flex, align-items, justify-content, font-size, color */
}

/* ============================================================
   MAINTENANCE TIPS
   ============================================================ */
.maint-section { background: var(--gray-50); }
.maint-grid {
    display: grid; grid-template-columns: 1fr 400px; gap: 52px; align-items: start;
}
.maint-text h2 {
    font-family: var(--font-head); font-size: clamp(22px, 2.8vw, 34px);
    font-weight: 800; color: var(--navy); line-height: 1.2;
    letter-spacing: -0.5px; margin-bottom: 16px;
}
.maint-text h2 span { color: #35adb5; }
.maint-text p { font-size: 15px; color: var(--gray-600); line-height: 1.8; margin-bottom: 16px; }
.maint-tip {
    display: flex; align-items: flex-start; gap: 12px; margin-bottom: 13px;
    padding: 14px 16px; background: #fff; border-radius: 10px;
    border-left: 3px solid #35adb5;
    font-size: 14px; color: var(--gray-700, #374151); line-height: 1.6;
}
.maint-tip i { color: #35adb5; margin-top: 2px; flex-shrink: 0; }
.maint-img-box {
    border-radius: 20px; overflow: hidden; background: #e8f7f8;
    aspect-ratio: 3/4;
    display: flex; align-items: center; justify-content: center;
    font-size: 80px; color: #35adb5; position: sticky; top: 90px;
    /* CATATAN: Ganti dengan:
       background: url("{{ asset('images/floors/outdoor-maintenance.jpg') }}") center/cover;
       Hapus display:flex, align-items, justify-content, font-size, color */
}

/* ============================================================
   FAQ
   ============================================================ */
.faq-section { background: #fff; }
.faq-cols { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-top: 40px; }
.faq-item {
    background: var(--gray-50); border: 1px solid var(--gray-200);
    border-radius: 12px; overflow: hidden; transition: border-color 0.2s;
}
.faq-item.open { border-color: #35adb5; background: #fff; }
.faq-q {
    display: flex; justify-content: space-between; align-items: flex-start;
    gap: 12px; padding: 18px 20px; cursor: pointer;
    font-family: var(--font-head); font-size: 14.5px; font-weight: 600;
    color: var(--navy); user-select: none; line-height: 1.4;
}
.faq-q i { color: #35adb5; font-size: 12px; flex-shrink: 0; margin-top: 4px; transition: transform 0.3s; }
.faq-item.open .faq-q i { transform: rotate(180deg); }
.faq-a {
    display: none; padding: 0 20px 18px; font-size: 14px;
    color: var(--gray-600); line-height: 1.75;
    border-top: 1px solid var(--gray-200); padding-top: 14px;
}
.faq-item.open .faq-a { display: block; }

/* ============================================================
   CONTACT BOTTOM
   ============================================================ */
.contact-bottom { background: var(--gray-50); }
.contact-bottom-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: start; }
.cb-info h2 { font-family: var(--font-head); font-size: 22px; font-weight: 800; color: #35adb5; margin-bottom: 24px; line-height: 1.25; }
.cb-info h2 span { display: block; color: var(--navy); font-size: 16px; font-weight: 600; margin-top: 4px; }
.cb-item { display: flex; align-items: flex-start; gap: 14px; margin-bottom: 18px; }
.cb-icon { width: 40px; height: 40px; background: #e8f7f8; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #35adb5; font-size: 16px; flex-shrink: 0; }
.cb-label { font-size: 11.5px; font-weight: 700; color: var(--gray-400); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 3px; }
.cb-val { font-size: 14.5px; color: var(--gray-800); font-weight: 500; }
.cb-val a { color: #35adb5; text-decoration: none; font-weight: 600; }
.cb-val a:hover { text-decoration: underline; }
.cb-map { border-radius: 16px; overflow: hidden; box-shadow: 0 6px 24px rgba(0,0,0,0.09); border: 2px solid var(--gray-200); }
.cb-map iframe { width: 100%; height: 320px; border: none; display: block; }

/* ============================================================
   OTHER SERVICES
   ============================================================ */
.other-services-section { background: #fff; padding: 56px 0; }
.os-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; margin-top: 36px; }
.os-card {
    background: var(--gray-50); border: 1px solid var(--gray-200); border-radius: 14px;
    padding: 22px 18px; text-align: center; text-decoration: none;
    color: inherit; transition: all 0.2s; display: block;
}
.os-card:hover { border-color: #35adb5; background: #e8f7f8; transform: translateY(-3px); }
.os-icon { font-size: 28px; color: #35adb5; margin-bottom: 10px; display: block; }
.os-card h4 { font-family: var(--font-head); font-size: 13.5px; font-weight: 700; color: var(--navy); line-height: 1.35; }

/* ============================================================
   RESPONSIVE
   ============================================================ */
@media (max-width: 1024px) {
    .about-grid,.why-grid,.process-intro-grid,.offer-grid,.maint-grid { grid-template-columns: 1fr; }
    .img-panel,.maint-img-box { position: static; }
    .why-img { order: -1; }
    .offer-img { display: none; }
    .os-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
    .steps-cta-grid,.faq-cols,.contact-bottom-grid { grid-template-columns: 1fr; }
    .process-img-box { display: none; }
}
</style>
@endpush

@section('content')

{{-- ============================================================
     HERO
     ============================================================ --}}
<section class="outdoor-hero">
    <div class="container">
        <div class="hero-badge">
            <i class="fas fa-sun"></i>
            Professional Floor Polishing — Singapore
        </div>
        <h1>Outdoor Ceramic Tiles Polishing<br>Services in Singapore</h1>
        <p>Professional Outdoor Ceramic Tiles Polishing Service | Restoring the Lustre and Beauty of Your Outdoor Ceramic Tiles</p>
        <a href="#quote" class="btn-quote-white">Get A Quote</a>
    </div>
</section>

{{-- ============================================================
     ABOUT OUTDOOR CERAMIC TILES
     ============================================================ --}}
<section class="white-bg">
    <div class="container">
        <div class="about-grid">
            <div class="about-text">

                <h2>Outdoor Ceramic Tiles</h2>
                <p>Outdoor ceramic tiles are a very popular material choice for outdoor areas, such as gardens, terraces, or walkways. These outdoor ceramics are designed to withstand extreme weather conditions, as well as exposure to UV radiation. Known for their durability, outdoor tiles have a rougher surface compared to indoor tiles, which provides better grip, making it safer to use in areas that are prone to slippery. However, even though it is very durable, outdoor ceramic tiles still requires maintenance so that it always looks clean and well-maintained. One important step to this maintenance is outdoor polishing. Polishing helps restore the floor's natural lustre that may have faded over time due to exposure to outside elements.</p>

                <h2>Outdoor Ceramic Tiles Polishing</h2>
                <p>Floorshine outdoor ceramic tiles polishing service in Singapore offers the best solution for your outdoor ceramic maintenance. Our team of professionals are experienced and use the latest technology to provide the best quality.</p>
                <p>Our services include outdoor ceramic tiles polishing, cleaning, protection and outdoor ceramic tiles maintenance. We are committed to providing high quality services and ensuring customer satisfaction.</p>
                <p>If you are looking for quality outdoor ceramic polishing services, you have come to the right place. Because we are an experienced outdoor ceramic tiles polishing service in polishing.</p>
                <p>If your outdoor ceramic floor has lost its lustre or has become dull due to scratches, contact us for a polishing service.</p>

            </div>

            <div class="img-panel">
                {{-- CATATAN: Saat gambar sudah ada, ganti isi .img-box dengan:
                     <img src="{{ asset('images/floors/outdoor-room.jpg') }}"
                          alt="Outdoor Ceramic Tiles" style="width:100%;height:100%;object-fit:cover;"> --}}
                <div class="img-box">
                    <i class="fas fa-sun"></i>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     WHY OUTDOOR CERAMIC TILES NEED POLISH
     ============================================================ --}}
<section class="gray-bg">
    <div class="container">
        <div class="why-grid">
            <div>
                <h2 class="sec-title">Why Outdoor Ceramic Need Polish</h2>
                <p class="sec-sub" style="margin-bottom:20px;">Although very durable, outdoor ceramic flooring still requires maintenance to keep it looking clean and well-maintained. Polishing helps restore the floor's natural lustre that may have faded over time due to exposure to outside elements. The polishing process is also effective in removing dirt, stains, and light scratches that can degrade the beauty of the floor.</p>
                <p style="font-size:15px; color:var(--gray-600); line-height:1.75; margin-bottom:18px;">Here are some conditions that make outdoor ceramic tiles need polishing:</p>
                <ul class="bullet-list">
                    <li>Ceramic Floor Contaminated with Stubborn Stains</li>
                    <li>Ceramic Floors with Scratches or Minor Surface Damage</li>
                    <li>Ceramic Floors that Look Dull and Faded</li>
                    <li>Ceramic Floors that are Slippery After Exposure to Water and Extreme Weather</li>
                    <li>Floors that Have Dirt Deposits</li>
                </ul>
            </div>

            {{-- CATATAN: Ganti isi .why-img dengan:
                 <img src="{{ asset('images/floors/outdoor-why.jpg') }}"
                      alt="Outdoor Why Polish" style="width:100%;height:100%;object-fit:cover;"> --}}
            <div class="why-img">
                <i class="fas fa-sun"></i>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     OUTDOOR CERAMIC TILES POLISHING PROCESS
     ============================================================ --}}
<section class="process-section">
    <div class="container">
        <div class="text-center">
            <h2 class="sec-title" style="color:#fff; margin-bottom:14px;">Outdoor Ceramic Tiles Polishing Process</h2>
            <p class="sec-sub" style="color:rgba(255,255,255,0.85); margin:0 auto;">We are experienced outdoor ceramic tiles polishing professionals, using specialist equipment and products to ensure successful results. Outdoor ceramic tiles polishing is the process of renewing and restoring outdoor ceramic tiles surfaces that have become worn, dull or damaged over time. Our process not only enhances the aesthetic appeal of outdoor ceramic tiles but also prolongs its life.</p>
            <p style="font-size:15px; color:rgba(255,255,255,0.7); margin-top:14px; max-width:680px; margin-left:auto; margin-right:auto; line-height:1.7;">It involves a series of specialist techniques and treatments to restore the natural beauty and lustre of outdoor ceramic tiles.</p>
        </div>

        <div class="process-intro-grid">
            {{-- CATATAN: Ganti isi .process-img-box dengan:
                 <img src="{{ asset('images/floors/outdoor-process.jpg') }}"
                      alt="Outdoor Ceramic Process" style="width:100%;height:100%;object-fit:cover;"> --}}
            <div class="process-img-box">
                <i class="fas fa-tools"></i>
            </div>

            <div class="process-steps-wrap">
                <h3>Our process for polishing outdoor ceramic tiles includes:</h3>

                <div class="process-step">
                    <div class="ps-num">1</div>
                    <div class="ps-body">
                        <h4>Floor Condition Check</h4>
                        <p>Before proceeding to the polishing stage, we check the physical condition of the floor, including any cracks or other damage. If required, minor repairs can be made to ensure the floor surface is flat and ready for polishing.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="ps-num">2</div>
                    <div class="ps-body">
                        <h4>Polishing Application</h4>
                        <p>Selection of Polishing Product: We use specialised polishing products for outdoor tiled floors that can provide maximum gloss without damaging the surface. It also provides extra protection against stains and water. Application with Polishing Machine: Using a polishing machine with a special pad, we apply the polishing layer evenly over the entire floor surface.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="ps-num">3</div>
                    <div class="ps-body">
                        <h4>Drying</h4>
                        <p>After polishing, the floor is left to dry completely. Drying time varies depending on the type of polishing product used and outdoor weather conditions.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="ps-num">4</div>
                    <div class="ps-body">
                        <h4>Application of Protective Coatings</h4>
                        <p>In addition, we recommend the use of an extra protective layer, such as a sealant, to extend the life of the floor and keep them looking its best in the long run.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="ps-num">5</div>
                    <div class="ps-body">
                        <h4>Finishing and Final Inspection</h4>
                        <p>After polishing, we will perform a final inspection to ensure that your floor is completely ready for use. Inspection of Results: We ensure that the polishing results are satisfactory, with an even sheen and a smooth surface without scratches or blemishes. In addition, we check that the sealant has been applied evenly. Final Cleaning: We clean the floor once again to remove any residual sealant material that may be left behind, ensuring the floor looks perfect.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     3 STEPS CTA
     ============================================================ --}}
<section class="steps-cta-section">
    <div class="container text-center">
        <h2 class="sec-title">3 Steps to Polishing Your Outdoor Ceramic Tiles</h2>
        <p class="sec-sub" style="margin:0 auto;">Our simple booking process makes it easy to get your outdoor ceramic tiles polished by our professional team.</p>
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
     WHAT CAN WE OFFER
     ============================================================ --}}
<section class="white-bg">
    <div class="container">
        <div class="offer-grid">
            <div class="offer-text">
                <h2>What Can We Offer And<br><span>The Result We Have Done Before?</span></h2>
                <p>Floorshine are Singapore floor polishing experts that you should rely on to maintain the entire surface of your floor. After a thorough surface inspection, we will recommend and also provide a follow-up marble polishing solution.</p>
                <p>Floor shine is a company that focuses on the polishing sector, and the results we have:</p>
                <div class="offer-results">
                    <div class="offer-result-item">
                        <i class="fas fa-check-circle"></i>
                        <span>Your scratches/stains/patches are neatly camouflaged</span>
                    </div>
                    <div class="offer-result-item">
                        <i class="fas fa-check-circle"></i>
                        <span>Your floor looks shiny</span>
                    </div>
                    <div class="offer-result-item">
                        <i class="fas fa-check-circle"></i>
                        <span>Dullness is no longer visible on your floor</span>
                    </div>
                </div>
            </div>
            <div class="offer-img"><i class="fas fa-sun"></i></div>
        </div>
    </div>
</section>

{{-- ============================================================
     MAINTENANCE TIPS
     ============================================================ --}}
<section class="maint-section">
    <div class="container">
        <div class="maint-grid">
            <div class="maint-text">
                <h2>How To Keep Your <span>Outdoor Ceramic Tiles</span><br>Well Maintained?</h2>
                <p>Outdoor ceramic tiles provide an elegant and durable look for your yard, garden, or other outdoor spaces. To maintain their condition, shine and beauty, outdoor ceramic tiles require proper care, one of which is through a periodic floor polishing process. Outdoor ceramic floor polishing is an effective method to restore lustre and provide extra protection to the floor surface. In addition, polishing can also help remove fine scratches and stains, making the floor surface look cleaner, shinier, and better maintained. If you are looking for a professional floor polishing service, try Floorshine.</p>

                <p style="font-family:var(--font-head); font-size:16px; font-weight:700; color:var(--navy); margin:20px 0 14px;">Things to Consider for Outdoor Ceramic Tiles:</p>

                <div class="maint-tip">
                    <i class="fas fa-check-circle"></i>
                    <span>Avoid Excessive Water Exposure.</span>
                </div>
                <div class="maint-tip">
                    <i class="fas fa-check-circle"></i>
                    <span>Avoid using Harsh Chemicals.</span>
                </div>
                <div class="maint-tip">
                    <i class="fas fa-check-circle"></i>
                    <span>Maintain Routine Cleanliness.</span>
                </div>
                <div class="maint-tip">
                    <i class="fas fa-check-circle"></i>
                    <span>Choose a Cleaner that is safe for Outdoor Ceramic Tiles.</span>
                </div>
                <div class="maint-tip">
                    <i class="fas fa-check-circle"></i>
                    <span>Pay Attention to Scratches and Sun Exposure.</span>
                </div>
                <div class="maint-tip">
                    <i class="fas fa-check-circle"></i>
                    <span>Extra Sealing and Protection.</span>
                </div>

                <p style="margin-top:20px; font-size:14.5px; color:var(--gray-600); line-height:1.7;">Maintaining a outdoor ceramic tiles after polishing may seem like a hassle, but it is the key to having a shiny and long-lasting outdoor ceramic tiles.</p>
            </div>

            {{-- CATATAN: Ganti dengan:
                 <img src="{{ asset('images/floors/outdoor-maintenance.jpg') }}"
                      alt="Outdoor Maintenance" style="width:100%;height:100%;object-fit:cover;"> --}}
            <div class="maint-img-box"><i class="fas fa-broom"></i></div>
        </div>
    </div>
</section>

{{-- ============================================================
     FAQ
     ============================================================ --}}
<section class="faq-section">
    <div class="container">
        <h2 class="sec-title">FAQ — <span>Outdoor Ceramic Tiles Polishing Service</span></h2>
        <p class="sec-sub">Common questions about our outdoor ceramic tiles polishing services in Singapore.</p>

        <div class="faq-cols">
            <div>
                <div class="faq-item open">
                    <div class="faq-q" onclick="toggleFaq(this)">
                        <span>When is the right time to polish a ceramic outdoor floor?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-a">
                        Ceramic outdoor floor polishing is usually done once every 6–12 months, depending on the condition of the floor and the level of use. If the floor starts to look dull, there are scratches or stubborn stains, it is the right time to schedule a polishing. Polishing is also recommended if the floor starts to look dull or the surface feels rough. To get more accurate advice, contact our team for a free inspection of your floor condition.
                    </div>
                </div>
                <div class="faq-item" style="margin-top:12px;">
                    <div class="faq-q" onclick="toggleFaq(this)">
                        <span>Can polishing protect the floor that can reduce the risk of minor scratches and damage from exposure to outside elements?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-a">
                        Polishing provides a protective coating on the floor that can reduce the risk of minor scratches and damage from exposure to outside elements. However, polishing alone may not completely protect the floor from heavy damage. Applying floor protectors under heavy furniture can help avoid deeper scratches.
                    </div>
                </div>
                <div class="faq-item" style="margin-top:12px;">
                    <div class="faq-q" onclick="toggleFaq(this)">
                        <span>Are the results of floor polishing services long-lasting?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-a">
                        The results of outdoor ceramic floor polishing can last quite a long time, depending on the condition of the floor and the level of care after polishing. Regular maintenance, such as cleaning the floor using safe cleaning products, can help maintain the longer-lasting results. Polishing can be re-done every 6–12 months, especially on areas that are used frequently.
                    </div>
                </div>
            </div>
            <div>
                <div class="faq-item">
                    <div class="faq-q" onclick="toggleFaq(this)">
                        <span>Do I need to clear the room before polishing?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-a">
                        We recommend clearing the room or at least moving large items to facilitate the polishing process. Our team will help prepare the work area for a smooth process.
                    </div>
                </div>
                <div class="faq-item" style="margin-top:12px;">
                    <div class="faq-q" onclick="toggleFaq(this)">
                        <span>How much does a ceramic outdoor floor polishing service cost?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-a">
                        The cost of ceramic outdoor floor polishing service varies depending on the size of the polished area, the condition of the floor, and the type of product used. For more information on pricing, contact us and we will provide a cost estimate according to your needs.
                    </div>
                </div>
                <div class="faq-item" style="margin-top:12px;">
                    <div class="faq-q" onclick="toggleFaq(this)">
                        <span>Are there any chemicals used during polishing?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-a">
                        Ceramic outdoor floor polishing uses special polishing products formulated for ceramics. The chemicals used can provide an even surface, are listed above as protectants that are durable, waterproof, and resistant to heat, ensuring the safety of ceramic surfaces.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     CONTACT BOTTOM
     ============================================================ --}}
<section class="contact-bottom" id="quote">
    <div class="container">
        <div class="contact-bottom-grid">
            <div class="cb-info">
                <h2>Floorshine | Floor Polishing<span>Singapore</span></h2>
                <div class="cb-item">
                    <div class="cb-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <div><div class="cb-label">Address</div><div class="cb-val">18 Sin Ming Ln, #06-27, Midview City<br>Singapore 573960</div></div>
                </div>
                <div class="cb-item">
                    <div class="cb-icon"><i class="fab fa-whatsapp"></i></div>
                    <div><div class="cb-label">WhatsApp</div><div class="cb-val"><a href="https://wa.me/6588772899" target="_blank">+65 8877 2899</a></div></div>
                </div>
                <div class="cb-item">
                    <div class="cb-icon"><i class="fas fa-envelope"></i></div>
                    <div><div class="cb-label">Email</div><div class="cb-val"><a href="mailto:enquiry@floorpolishing.sg">enquiry@floorpolishing.sg</a></div></div>
                </div>
                <div class="cb-item">
                    <div class="cb-icon"><i class="fas fa-clock"></i></div>
                    <div><div class="cb-label">Operating Hours</div><div class="cb-val">Mon – Fri: 9:00 am – 6:00 pm</div></div>
                </div>
            </div>
            {{-- CATATAN GOOGLE MAPS: Ganti src dengan embed URL lokasi bisnis asli --}}
            <div>
                <div class="cb-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.6704782073865!2d103.83018757499225!3d1.3493099986586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da17057effffff%3A0x7efb5b33efba1e14!2sMidview%20City!5e0!3m2!1sen!2ssg!4v1700000000001!5m2!1sen!2ssg"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     OTHER SERVICES
     ============================================================ --}}
<section class="other-services-section">
    <div class="container">
        <h2 class="sec-title text-center">Our Other Services</h2>
        <p class="sec-sub text-center" style="margin:0 auto;">Explore our complete range of professional floor polishing services in Singapore.</p>
        <div class="os-grid">
            <a href="{{ route('services.marble') }}" class="os-card"><span class="os-icon"><i class="fas fa-gem"></i></span><h4>Marble Polishing</h4></a>
            <a href="{{ route('services.granite') }}" class="os-card"><span class="os-icon"><i class="fas fa-mountain"></i></span><h4>Granite Polishing</h4></a>
            <a href="{{ route('services.homogeneous') }}" class="os-card"><span class="os-icon"><i class="fas fa-th-large"></i></span><h4>Homogeneous Tiles Polishing</h4></a>
            <a href="{{ route('services.parquet') }}" class="os-card"><span class="os-icon"><i class="fas fa-grip-lines"></i></span><h4>Parquet Polishing</h4></a>
            <a href="{{ route('services.limestone') }}" class="os-card"><span class="os-icon"><i class="fas fa-layer-group"></i></span><h4>Limestone Polishing</h4></a>
            <a href="{{ route('services.porcelain') }}" class="os-card"><span class="os-icon"><i class="fas fa-circle"></i></span><h4>Porcelain Polishing</h4></a>
            <a href="{{ route('services.terrazzo') }}" class="os-card"><span class="os-icon"><i class="fas fa-border-all"></i></span><h4>Terrazzo Polishing</h4></a>
            <a href="{{ route('home') }}" class="os-card" style="background:#e8f7f8; border-color:#35adb5;"><span class="os-icon"><i class="fas fa-home"></i></span><h4>Back to Home</h4></a>
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
