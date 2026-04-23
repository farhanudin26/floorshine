@extends('layouts.app')

@section('title', 'Granite Floor Polishing Services in Singapore | Floorshine')
@section('meta_description', 'Professional granite floor polishing services in Singapore. Restoring the lustre and beauty of your granite. Get a free quote today.')

@push('styles')
<style>
/* ============================================================
   HERO
   ============================================================ */
.granite-hero {
    background: linear-gradient(135deg, rgba(30,120,128,0.92) 0%, rgba(53,173,181,0.88) 100%),
                url("{{ asset('images/floors/granite-hero.jpg') }}") center/cover no-repeat;
    padding: 80px 0 70px;
    position: relative;
}
/* CATATAN: Simpan gambar di public/images/floors/granite-hero.jpg
   Jika belum ada, hapus baris url(...) — warna teal tetap tampil */
.granite-hero::after {
    content: '';
    position: absolute;
    bottom: 0; left: 0; right: 0;
    height: 4px;
    background: linear-gradient(90deg, var(--teal), #fff, var(--teal));
}
.hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    background: rgba(255,255,255,0.15);
    color: rgba(255,255,255,0.9);
    padding: 5px 14px;
    border-radius: 100px;
    font-size: 12.5px;
    font-weight: 500;
    margin-bottom: 18px;
    backdrop-filter: blur(4px);
}
.granite-hero h1 {
    font-family: var(--font-head);
    font-size: clamp(30px, 4.5vw, 54px);
    font-weight: 800;
    color: #fff;
    line-height: 1.12;
    letter-spacing: -1.5px;
    margin-bottom: 18px;
    max-width: 620px;
}
.granite-hero p {
    color: rgba(255,255,255,0.88);
    font-size: 15.5px;
    line-height: 1.65;
    max-width: 520px;
    margin-bottom: 28px;
}
.btn-quote-white {
    display: inline-block;
    background: #fff;
    color: var(--teal-dark);
    padding: 13px 30px;
    border-radius: 8px;
    font-size: 15px;
    font-weight: 700;
    font-family: var(--font-head);
    text-decoration: none;
    transition: all 0.2s;
    box-shadow: 0 4px 18px rgba(0,0,0,0.15);
}
.btn-quote-white:hover { transform: translateY(-2px); box-shadow: 0 8px 24px rgba(0,0,0,0.2); }

/* ============================================================
   COMMONS
   ============================================================ */
.container { max-width: 1100px; margin: 0 auto; padding: 0 24px; }
section { padding: 72px 0; }
.sec-title {
    font-family: var(--font-head);
    font-size: clamp(22px, 3vw, 36px);
    font-weight: 800;
    color: var(--navy);
    line-height: 1.2;
    letter-spacing: -0.5px;
    margin-bottom: 14px;
}
.sec-title-teal { color: var(--teal); }
.sec-sub {
    font-size: 15.5px;
    color: var(--gray-600);
    line-height: 1.75;
    max-width: 700px;
}
.text-center { text-align: center; }
.gray-bg  { background: var(--gray-50); }
.navy-bg  { background: var(--navy); }
.white-bg { background: #fff; }

/* ============================================================
   ABOUT GRANITE
   ============================================================ */
.about-granite-grid {
    display: grid;
    grid-template-columns: 1fr 420px;
    gap: 52px;
    align-items: start;
}
.about-granite-text h2 {
    font-family: var(--font-head);
    font-size: 22px;
    font-weight: 800;
    color: var(--navy);
    margin: 28px 0 14px;
    padding-bottom: 10px;
    border-bottom: 2px solid var(--gray-200);
}
.about-granite-text h2:first-child { margin-top: 0; }
.about-granite-text p {
    font-size: 15px;
    color: var(--gray-600);
    line-height: 1.8;
    margin-bottom: 16px;
}
.about-granite-text p:last-child { margin-bottom: 0; }

/* Granite image panel */
.granite-img-panel { position: sticky; top: 90px; }
.granite-img-box {
    border-radius: 20px;
    overflow: hidden;
    background: var(--teal-light);
    aspect-ratio: 4/3;
    display: flex; align-items: center; justify-content: center;
    font-size: 80px; color: var(--teal);
    /* CATATAN: Ganti dengan:
       background: url("{{ asset('images/floors/granite-room.jpg') }}") center/cover;
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
    content: '▸'; color: var(--teal); font-size: 13px;
    margin-top: 2px; flex-shrink: 0;
}

/* ============================================================
   WHY GRANITE NEEDS POLISH
   ============================================================ */
.why-polish-grid {
    display: grid;
    grid-template-columns: 1fr 380px;
    gap: 52px;
    align-items: start;
}
.why-polish-img {
    border-radius: 20px;
    overflow: hidden;
    background: var(--teal-light);
    aspect-ratio: 4/3;
    display: flex; align-items: center; justify-content: center;
    font-size: 80px; color: var(--teal);
    /* CATATAN: Ganti dengan:
       background: url("{{ asset('images/floors/granite-why.jpg') }}") center/cover;
       Hapus display:flex, align-items, justify-content, font-size, color */
}

/* ============================================================
   PROCESS SECTION
   ============================================================ */
.process-section { background: var(--navy); }
.process-section .sec-title { color: #fff; }
.process-section .sec-sub   { color: rgba(255,255,255,0.65); }

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
    background: rgba(255,255,255,0.07);
    aspect-ratio: 4/5;
    display: flex; align-items: center; justify-content: center;
    font-size: 80px; color: rgba(255,255,255,0.3);
    /* CATATAN: Ganti dengan:
       background: url("{{ asset('images/floors/granite-process.jpg') }}") center/cover;
       Hapus display:flex, align-items, justify-content, font-size, color */
}
.process-steps-wrap h3 {
    font-family: var(--font-head);
    font-size: 20px; font-weight: 700; color: var(--teal);
    margin-bottom: 24px;
    display: flex; align-items: center; gap: 10px;
}
.process-steps-wrap h3::before {
    content: ''; width: 32px; height: 3px;
    background: var(--teal); border-radius: 2px; flex-shrink: 0;
}
.process-step { display: flex; gap: 18px; margin-bottom: 26px; align-items: flex-start; }
.ps-num {
    width: 40px; height: 40px; border-radius: 50%;
    background: var(--teal);
    display: flex; align-items: center; justify-content: center;
    font-family: var(--font-head); font-size: 15px; font-weight: 800;
    color: #fff; flex-shrink: 0; margin-top: 2px;
}
.ps-body h4 { font-family: var(--font-head); font-size: 16px; font-weight: 700; color: #fff; margin-bottom: 6px; }
.ps-body p  { font-size: 14px; color: rgba(255,255,255,0.65); line-height: 1.65; }

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
.step-cta-card:hover { border-color: var(--teal); transform: translateY(-4px); box-shadow: 0 10px 28px rgba(29,187,164,0.12); }
.step-cta-icon {
    width: 70px; height: 70px; background: var(--teal-light); border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 18px; font-size: 28px; color: var(--teal); transition: all 0.2s;
}
.step-cta-card:hover .step-cta-icon { background: var(--teal); color: #fff; }
.step-cta-card h3 { font-family: var(--font-head); font-size: 15px; font-weight: 700; color: var(--navy); }
.btn-wa-cta {
    display: inline-flex; align-items: center; gap: 9px;
    background: var(--teal); color: #fff;
    padding: 13px 32px; border-radius: 50px; text-decoration: none;
    font-size: 15px; font-weight: 700; font-family: var(--font-head);
    margin-top: 40px; transition: background 0.2s;
}
.btn-wa-cta:hover { background: var(--teal-dark); color: #fff; }

/* ============================================================
   WHAT CAN WE OFFER
   ============================================================ */
.offer-grid {
    display: grid; grid-template-columns: 1fr 380px; gap: 52px; align-items: center;
}
.offer-text h2 {
    font-family: var(--font-head);
    font-size: clamp(22px, 2.8vw, 34px); font-weight: 800; color: var(--navy);
    line-height: 1.2; letter-spacing: -0.5px; margin-bottom: 16px;
}
.offer-text h2 span { color: var(--teal); }
.offer-text p { font-size: 15px; color: var(--gray-600); line-height: 1.8; margin-bottom: 14px; }
.offer-results { margin-top: 24px; display: flex; flex-direction: column; gap: 10px; }
.offer-result-item {
    display: flex; align-items: center; gap: 10px;
    font-size: 14.5px; color: var(--gray-800); font-weight: 500;
}
.offer-result-item i { color: var(--teal); font-size: 15px; flex-shrink: 0; }
.offer-img {
    border-radius: 20px; overflow: hidden; background: var(--teal-light);
    aspect-ratio: 4/3;
    display: flex; align-items: center; justify-content: center;
    font-size: 80px; color: var(--teal);
    /* CATATAN: Ganti dengan:
       background: url("{{ asset('images/floors/granite-offer.jpg') }}") center/cover;
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
    font-family: var(--font-head);
    font-size: clamp(22px, 2.8vw, 34px); font-weight: 800; color: var(--navy);
    line-height: 1.2; letter-spacing: -0.5px; margin-bottom: 16px;
}
.maint-text h2 span { color: var(--teal); }
.maint-text p { font-size: 15px; color: var(--gray-600); line-height: 1.8; margin-bottom: 16px; }
.maint-tip {
    display: flex; align-items: flex-start; gap: 12px; margin-bottom: 13px;
    padding: 14px 16px; background: #fff; border-radius: 10px;
    border-left: 3px solid var(--teal); font-size: 14px;
    color: var(--gray-700, #374151); line-height: 1.6;
}
.maint-tip i { color: var(--teal); margin-top: 2px; flex-shrink: 0; }
.maint-img-box {
    border-radius: 20px; overflow: hidden; background: var(--teal-light);
    aspect-ratio: 3/4;
    display: flex; align-items: center; justify-content: center;
    font-size: 80px; color: var(--teal);
    position: sticky; top: 90px;
    /* CATATAN: Ganti dengan:
       background: url("{{ asset('images/floors/granite-maintenance.jpg') }}") center/cover;
       Hapus display:flex, align-items, justify-content, font-size, color */
}

/* ============================================================
   FAQ
   ============================================================ */
.faq-section { background: #fff; }
.faq-section .sec-title span { color: var(--teal); }
.faq-cols { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-top: 40px; }
.faq-item {
    background: var(--gray-50); border: 1px solid var(--gray-200);
    border-radius: 12px; overflow: hidden; transition: border-color 0.2s;
}
.faq-item.open { border-color: var(--teal); background: #fff; }
.faq-q {
    display: flex; justify-content: space-between; align-items: flex-start;
    gap: 12px; padding: 18px 20px; cursor: pointer;
    font-family: var(--font-head); font-size: 14.5px; font-weight: 600;
    color: var(--navy); user-select: none; line-height: 1.4;
}
.faq-q i { color: var(--teal); font-size: 12px; flex-shrink: 0; margin-top: 4px; transition: transform 0.3s; }
.faq-item.open .faq-q i { transform: rotate(180deg); }
.faq-a {
    display: none; padding: 0 20px 18px;
    font-size: 14px; color: var(--gray-600); line-height: 1.75;
    border-top: 1px solid var(--gray-200); padding-top: 14px;
}
.faq-item.open .faq-a { display: block; }

/* ============================================================
   CONTACT BOTTOM
   ============================================================ */
.contact-bottom { background: var(--gray-50); }
.contact-bottom-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: start; }
.cb-info h2 { font-family: var(--font-head); font-size: 22px; font-weight: 800; color: var(--teal); margin-bottom: 24px; line-height: 1.25; }
.cb-info h2 span { display: block; color: var(--navy); font-size: 16px; font-weight: 600; margin-top: 4px; }
.cb-item { display: flex; align-items: flex-start; gap: 14px; margin-bottom: 18px; }
.cb-icon {
    width: 40px; height: 40px; background: var(--teal-light); border-radius: 10px;
    display: flex; align-items: center; justify-content: center;
    color: var(--teal); font-size: 16px; flex-shrink: 0;
}
.cb-label { font-size: 11.5px; font-weight: 700; color: var(--gray-400); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 3px; }
.cb-val { font-size: 14.5px; color: var(--gray-800); font-weight: 500; }
.cb-val a { color: var(--teal); text-decoration: none; font-weight: 600; }
.cb-val a:hover { text-decoration: underline; }
.cb-map { border-radius: 16px; overflow: hidden; box-shadow: 0 6px 24px rgba(0,0,0,0.09); border: 2px solid var(--gray-200); }
.cb-map iframe { width: 100%; height: 320px; border: none; display: block; }

/* ============================================================
   OTHER SERVICES
   ============================================================ */
.other-services-section { background: #fff; padding: 56px 0; }
.os-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; margin-top: 36px; }
.os-card {
    background: var(--gray-50); border: 1px solid var(--gray-200);
    border-radius: 14px; padding: 22px 18px; text-align: center;
    text-decoration: none; color: inherit; transition: all 0.2s; display: block;
}
.os-card:hover { border-color: var(--teal); background: var(--teal-light); transform: translateY(-3px); }
.os-icon { font-size: 28px; color: var(--teal); margin-bottom: 10px; display: block; }
.os-card h4 { font-family: var(--font-head); font-size: 13.5px; font-weight: 700; color: var(--navy); line-height: 1.35; }

/* ============================================================
   RESPONSIVE
   ============================================================ */
@media (max-width: 1024px) {
    .about-granite-grid,
    .why-polish-grid,
    .process-intro-grid,
    .offer-grid,
    .maint-grid { grid-template-columns: 1fr; }
    .granite-img-panel, .maint-img-box { position: static; }
    .why-polish-img { order: -1; }
    .offer-img { display: none; }
    .os-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
    .steps-cta-grid { grid-template-columns: 1fr; }
    .faq-cols { grid-template-columns: 1fr; }
    .contact-bottom-grid { grid-template-columns: 1fr; }
    .process-img-box { display: none; }
}
</style>
@endpush

@section('content')

{{-- ============================================================
     HERO
     ============================================================ --}}
<section class="granite-hero">
    <div class="container">
        <div class="hero-badge">
            <i class="fas fa-mountain"></i>
            Professional Floor Polishing — Singapore
        </div>
        <h1>Granite Floor Polishing<br>Services in Singapore</h1>
        <p>Professional Granite Floor Polishing Service | Restoring The Lustre and Beauty of Your Granite</p>
        <a href="#quote" class="btn-quote-white">Get A Quote</a>
    </div>
</section>

{{-- ============================================================
     ABOUT GRANITE + GRANITE POLISHING
     ============================================================ --}}
<section class="white-bg">
    <div class="container">
        <div class="about-granite-grid">
            <div class="about-granite-text">

                <h2>Granite</h2>
                <p>Granite flooring has an elegant and luxurious appearance, with a wide range of patterns and colours. Each granite tile has a unique natural pattern, giving a touch of natural beauty to any space. Over time and use, granite flooring surfaces can lose their lustre and appear dull or scratched. Granite floor polishing is the best solution to restore its look and beauty. The polishing process aims to smooth the surface of the floor, remove stains, and restore the natural lustre of granite.</p>

                <h2>Granite Polishing</h2>
                <p>Floorshine granite polishing service in Singapore offers the best solution for your granite maintenance. Our team of professionals are experienced and use the latest technology to provide the best quality.</p>
                <p>Our services include granite polishing, cleaning, protection and granite maintenance. We are committed to providing high quality services and ensuring customer satisfaction.</p>
                <p>If you are looking for quality granite polishing services, you have come to the right place. Because we are an experienced granite polishing service in polishing.</p>
                <p>If your granite floor has lost its lustre or has become dull due to scratches, contact us for a polishing service.</p>

            </div>

            <div class="granite-img-panel">
                {{-- CATATAN: Ganti icon dengan gambar:
                     <img src="{{ asset('images/floors/granite-room.jpg') }}"
                          alt="Granite Floor" style="width:100%;height:100%;object-fit:cover;"> --}}
                <div class="granite-img-box">
                    <i class="fas fa-mountain"></i>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     WHY GRANITE NEEDS POLISH
     ============================================================ --}}
<section class="gray-bg">
    <div class="container">
        <div class="why-polish-grid">
            <div>
                <h2 class="sec-title">Why Granite Need Polish</h2>
                <p class="sec-sub" style="margin-bottom:20px;">Although granite is a very durable material, daily use can lead to minor scratches, stains, or a dull-looking surface. The polishing process is a great way to restore the beauty of granite without the need to completely replace the tiles, which can be cost- and time-saving. In addition, polishing also provides extra protection to the granite floor to keep it durable and looking beautiful in the long run.</p>
                <p style="font-size:15px; color:var(--gray-600); line-height:1.75; margin-bottom:18px;">Here are some conditions that make granite floors need polishing:</p>
                <ul class="bullet-list">
                    <li>Granite Surface Fading and Losing Lustre</li>
                    <li>Liquid Spillages that Result in Staining</li>
                    <li>Damage from Moisture or Water Leaks</li>
                    <li>Cracks or Damage to the Granite Surface</li>
                    <li>Dirt Build-up or Stains that are Difficult to Remove</li>
                </ul>
            </div>

            {{-- CATATAN: Ganti icon dengan gambar:
                 <img src="{{ asset('images/floors/granite-why.jpg') }}"
                      alt="Granite Polish" style="width:100%;height:100%;object-fit:cover;"> --}}
            <div class="why-polish-img">
                <i class="fas fa-mountain"></i>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     GRANITE POLISHING PROCESS
     ============================================================ --}}
<section class="process-section">
    <div class="container">
        <div class="text-center">
            <h2 class="sec-title" style="color:#fff;">Granite Polishing Process</h2>
            <p class="sec-sub" style="color:rgba(255,255,255,0.7); margin:0 auto;">We are experienced granite floor polishing professionals, using specialist equipment and products to ensure successful results. Granite floor polishing is the process of renewing and restoring granite surfaces that have become worn, dull or damaged over time. The polishing process not only enhances the aesthetic appeal of granite but also prolongs its life.</p>
            <p style="font-size:15px; color:rgba(255,255,255,0.65); margin-top:14px; max-width:680px; margin-left:auto; margin-right:auto; line-height:1.7;">It involves a series of specialist techniques and treatments to restore the natural beauty and lustre of granite.</p>
        </div>

        <div class="process-intro-grid">
            {{-- CATATAN: Ganti icon dengan gambar:
                 <img src="{{ asset('images/floors/granite-process.jpg') }}"
                      alt="Granite Process" style="width:100%;height:100%;object-fit:cover;"> --}}
            <div class="process-img-box">
                <i class="fas fa-tools"></i>
            </div>

            <div class="process-steps-wrap">
                <h3>Our process for polishing granite includes:</h3>

                <div class="process-step">
                    <div class="ps-num">1</div>
                    <div class="ps-body">
                        <h4>Scratch Removal</h4>
                        <p>Our technicians use advanced tools and techniques to carefully remove scratches, restoring a smooth, damage-free appearance of granite.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="ps-num">2</div>
                    <div class="ps-body">
                        <h4>Stain Handling</h4>
                        <p>Our experts have in-depth knowledge of the different types of stains and how to deal with them effectively, without damaging your granite surface.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="ps-num">3</div>
                    <div class="ps-body">
                        <h4>Honing and Polishing</h4>
                        <p>Through the honing process, we are able to remove minor imperfections and unevenness in the granite, and then polish it to a beautiful and highly polished finish. Our polishing service will then bring out the natural lustre of the stone, leaving the granite looking like new.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="ps-num">4</div>
                    <div class="ps-body">
                        <h4>Sealing and Protection</h4>
                        <p>Applying a high-quality sealant to protect your granite from future stains and splits, ensuring its durability and maintaining its stunning appearance for years to come.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="ps-num">5</div>
                    <div class="ps-body">
                        <h4>Natural Cleaning</h4>
                        <p>Our team will thoroughly clean and refresh the grout, restoring the overall appearance of your granite floor in a hygienic manner very good.</p>
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
        <h2 class="sec-title">3 Steps to Polishing Your Granite Floor</h2>
        <p class="sec-sub" style="margin:0 auto;">Our simple booking process makes it easy to get your granite floor polished by our professional team.</p>
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
                <p>Our services primarily emphasise restoring the appearance of your floor surface and extending its service life. Floorshine is a company that focuses on the polishing sector, and the results we have:</p>
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
            {{-- CATATAN: Ganti icon dengan gambar:
                 <img src="{{ asset('images/floors/granite-offer.jpg') }}"
                      alt="Granite Result" style="width:100%;height:100%;object-fit:cover;"> --}}
            <div class="offer-img">
                <i class="fas fa-mountain"></i>
            </div>
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
                <h2>How To Keep Your <span>Granite Floor</span><br>Well Maintained?</h2>
                <p>Keeping granite floors well-maintained and looking beautiful requires special attention, because although granite is a very durable and scratch-resistant material, it still requires proper care so that it does not deteriorate easily or lose its natural lustre. Polishing granite floors may seem easy, but you need to know that all these steps must be done by a professional and experienced technician because if you get it wrong, instead of a shiny floor, your floor can actually be damaged. If you are looking for a professional floor polishing service, try Floorshine.</p>

                <div class="maint-tip">
                    <i class="fas fa-exclamation-triangle"></i>
                    <span>Avoid using materials that can damage the surface.</span>
                </div>
                <div class="maint-tip">
                    <i class="fas fa-exclamation-triangle"></i>
                    <span>Maintain Room Temperature and Humidity.</span>
                </div>
                <div class="maint-tip">
                    <i class="fas fa-exclamation-triangle"></i>
                    <span>Protect the Floor from Stains and Damage.</span>
                </div>
                <div class="maint-tip">
                    <i class="fas fa-exclamation-triangle"></i>
                    <span>Routine Cleaning and the Right Tools.</span>
                </div>
                <div class="maint-tip">
                    <i class="fas fa-exclamation-triangle"></i>
                    <span>Lustre Maintenance and Protection.</span>
                </div>

                <p style="margin-top:20px; font-size:14.5px; color:var(--gray-600); line-height:1.7;">Maintaining a granite floor after polishing may seem like a hassle, but it is the key to having a shiny and long-lasting granite floor.</p>
            </div>

            {{-- CATATAN: Ganti icon dengan gambar:
                 <img src="{{ asset('images/floors/granite-maintenance.jpg') }}"
                      alt="Granite Maintenance" style="width:100%;height:100%;object-fit:cover;"> --}}
            <div class="maint-img-box">
                <i class="fas fa-broom"></i>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     FAQ
     ============================================================ --}}
<section class="faq-section">
    <div class="container">
        <h2 class="sec-title">FAQ — <span>Granite Floor Polishing Service</span></h2>
        <p class="sec-sub">Common questions about our granite floor polishing services in Singapore.</p>

        <div class="faq-cols">
            <div>
                <div class="faq-item open">
                    <div class="faq-q" onclick="toggleFaq(this)">
                        <span>When do I need to polish my granite floor?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-a">
                        Granite polishing is generally required when the floor begins to look dull, loses its shine, or the shine that scratches that interfere with its visual appeal. Usually after about 1–2 years of use, despite polishing, polishing can help restore its lustre and give it a fresher look.
                    </div>
                </div>
                <div class="faq-item" style="margin-top:12px;">
                    <div class="faq-q" onclick="toggleFaq(this)">
                        <span>What distinguishes granite polishing from regular cleaning?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-a">
                        Regular cleaning only removes dirt and dust from the granite surface, while granite polishing involves a process to improve the look of the granite surface, helping to restore the natural beauty of granite by smoothing the surface and removing scratches or blemishes.
                    </div>
                </div>
                <div class="faq-item" style="margin-top:12px;">
                    <div class="faq-q" onclick="toggleFaq(this)">
                        <span>Is granite polishing safe for all types of granite?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-a">
                        Yes, granite polishing is safe for most granite types. However, certain granite types and colours may require special approaches or products. Our specialists will evaluate your granite before commencing and recommend the right approach for you to get the best results.
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
                        <span>Does granite polishing require any special aftercare?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-a">
                        After polishing, we recommend keeping the granite floor clean and dry. Avoid anything that builds up that could seep into the granite, like staining. Make sure to minimise the time and prevent any scratching or damage. Our team will provide further aftercare guidance.
                    </div>
                </div>
                <div class="faq-item" style="margin-top:12px;">
                    <div class="faq-q" onclick="toggleFaq(this)">
                        <span>Is granite polishing available for commercial spaces?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-a">
                        Yes, we provide granite polishing service is perfect for commercial spaces. Including offices, hotels, restaurants and shopping malls. We have experience in handling high-traffic environments and always ensure quality work with minimal disruption to your operations.
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
                <h2>
                    Floorshine | Floor Polishing
                    <span>Singapore</span>
                </h2>
                <div class="cb-item">
                    <div class="cb-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <div>
                        <div class="cb-label">Address</div>
                        <div class="cb-val">18 Sin Ming Ln, #06-27, Midview City<br>Singapore 573960</div>
                    </div>
                </div>
                <div class="cb-item">
                    <div class="cb-icon"><i class="fab fa-whatsapp"></i></div>
                    <div>
                        <div class="cb-label">WhatsApp</div>
                        <div class="cb-val"><a href="https://wa.me/6588772899" target="_blank">+65 8877 2899</a></div>
                    </div>
                </div>
                <div class="cb-item">
                    <div class="cb-icon"><i class="fas fa-envelope"></i></div>
                    <div>
                        <div class="cb-label">Email</div>
                        <div class="cb-val"><a href="mailto:enquiry@floorpolishing.sg">enquiry@floorpolishing.sg</a></div>
                    </div>
                </div>
                <div class="cb-item">
                    <div class="cb-icon"><i class="fas fa-clock"></i></div>
                    <div>
                        <div class="cb-label">Operating Hours</div>
                        <div class="cb-val">Mon – Fri: 9:00 am – 6:00 pm</div>
                    </div>
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
            <a href="{{ route('services.marble') }}" class="os-card">
                <span class="os-icon"><i class="fas fa-gem"></i></span>
                <h4>Marble Polishing</h4>
            </a>
            <a href="{{ route('services.homogeneous') }}" class="os-card">
                <span class="os-icon"><i class="fas fa-th-large"></i></span>
                <h4>Homogeneous Tiles Polishing</h4>
            </a>
            <a href="{{ route('services.parquet') }}" class="os-card">
                <span class="os-icon"><i class="fas fa-grip-lines"></i></span>
                <h4>Parquet Polishing</h4>
            </a>
            <a href="{{ route('services.limestone') }}" class="os-card">
                <span class="os-icon"><i class="fas fa-layer-group"></i></span>
                <h4>Limestone Polishing</h4>
            </a>
            <a href="{{ route('services.outdoor') }}" class="os-card">
                <span class="os-icon"><i class="fas fa-sun"></i></span>
                <h4>Outdoor Ceramic Tiles Polishing</h4>
            </a>
            <a href="{{ route('services.porcelain') }}" class="os-card">
                <span class="os-icon"><i class="fas fa-circle"></i></span>
                <h4>Porcelain Polishing</h4>
            </a>
            <a href="{{ route('services.terrazzo') }}" class="os-card">
                <span class="os-icon"><i class="fas fa-border-all"></i></span>
                <h4>Terrazzo Polishing</h4>
            </a>
            <a href="{{ route('home') }}" class="os-card" style="background:var(--teal-light); border-color:var(--teal);">
                <span class="os-icon"><i class="fas fa-home"></i></span>
                <h4>Back to Home</h4>
            </a>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
function toggleFaq(el) {
    const item = el.closest('.faq-item');
    item.classList.toggle('open');
}
</script>
@endpush
