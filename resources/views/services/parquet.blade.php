@extends('layouts.app')

@section('title', 'Parquet Floor Polishing Services in Singapore | Floorshine')
@section('meta_description', 'Professional parquet floor polishing services in Singapore. Restoring the lustre and beauty of your parquet wood floor. Get a free quote today.')

@push('styles')
<style>
/* ============================================================
   HERO
   ============================================================ */
.parquet-hero {
    background: linear-gradient(135deg, rgba(30,120,128,0.92) 0%, rgba(53,173,181,0.88) 100%),
                url("{{ asset('images/floors/parquet-hero.jpg') }}") center/cover no-repeat;
    padding: 80px 0 70px;
    position: relative;
}
/* CATATAN: Simpan gambar di public/images/floors/parquet-hero.jpg
   Jika belum ada, hapus baris url(...) — warna teal tetap tampil */
.parquet-hero::after {
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
.parquet-hero h1 {
    font-family: var(--font-head);
    font-size: clamp(30px, 4.5vw, 54px);
    font-weight: 800;
    color: #fff;
    line-height: 1.12;
    letter-spacing: -1.5px;
    margin-bottom: 18px;
    max-width: 620px;
}
.parquet-hero p {
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
   ABOUT PARQUET
   ============================================================ */
.about-parquet-grid {
    display: grid;
    grid-template-columns: 1fr 420px;
    gap: 52px;
    align-items: start;
}
.about-parquet-text h2 {
    font-family: var(--font-head);
    font-size: 22px;
    font-weight: 800;
    color: var(--navy);
    margin: 28px 0 14px;
    padding-bottom: 10px;
    border-bottom: 2px solid var(--gray-200);
}
.about-parquet-text h2:first-child { margin-top: 0; }
.about-parquet-text p {
    font-size: 15px;
    color: var(--gray-600);
    line-height: 1.8;
    margin-bottom: 16px;
}
.about-parquet-text p:last-child { margin-bottom: 0; }

/* Image panel */
.parquet-img-panel { position: sticky; top: 90px; }
.parquet-img-box {
    border-radius: 20px;
    overflow: hidden;
    background: var(--teal-light);
    aspect-ratio: 4/3;
    display: flex; align-items: center; justify-content: center;
    font-size: 80px; color: var(--teal);
    /* CATATAN: Ganti dengan:
       background: url("{{ asset('images/floors/parquet-room.jpg') }}") center/cover;
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
   WHY PARQUET NEEDS POLISH
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
       background: url("{{ asset('images/floors/parquet-why.jpg') }}") center/cover;
       Hapus display:flex, align-items, justify-content, font-size, color */
}

/* ============================================================
   PROCESS SECTION — dark navy bg
   ============================================================ */
.process-section { background: var(--navy); }

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
       background: url("{{ asset('images/floors/parquet-process.jpg') }}") center/cover;
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
.process-step {
    display: flex; gap: 18px; margin-bottom: 26px; align-items: flex-start;
}
.ps-num {
    width: 40px; height: 40px; border-radius: 50%;
    background: var(--teal);
    display: flex; align-items: center; justify-content: center;
    font-family: var(--font-head); font-size: 15px; font-weight: 800;
    color: #fff; flex-shrink: 0; margin-top: 2px;
}
.ps-body h4 {
    font-family: var(--font-head); font-size: 16px;
    font-weight: 700; color: #fff; margin-bottom: 6px;
}
.ps-body p { font-size: 14px; color: rgba(255,255,255,0.65); line-height: 1.65; }

/* ============================================================
   3 STEPS CTA
   ============================================================ */
.steps-cta-section { background: var(--gray-50); }
.steps-cta-grid {
    display: grid; grid-template-columns: repeat(3, 1fr);
    gap: 24px; margin-top: 44px;
}
.step-cta-card {
    background: #fff; border-radius: 16px; padding: 32px 22px;
    text-align: center; border: 1px solid var(--gray-200); transition: all 0.2s;
}
.step-cta-card:hover {
    border-color: var(--teal); transform: translateY(-4px);
    box-shadow: 0 10px 28px rgba(29,187,164,0.12);
}
.step-cta-icon {
    width: 70px; height: 70px; background: var(--teal-light);
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 18px; font-size: 28px; color: var(--teal); transition: all 0.2s;
}
.step-cta-card:hover .step-cta-icon { background: var(--teal); color: #fff; }
.step-cta-card h3 {
    font-family: var(--font-head); font-size: 15px;
    font-weight: 700; color: var(--navy);
}
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
    display: grid; grid-template-columns: 1fr 380px;
    gap: 52px; align-items: center;
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
       background: url("{{ asset('images/floors/parquet-offer.jpg') }}") center/cover;
       Hapus display:flex, align-items, justify-content, font-size, color */
}

/* ============================================================
   MAINTENANCE TIPS
   ============================================================ */
.maint-section { background: var(--gray-50); }
.maint-grid {
    display: grid; grid-template-columns: 1fr 400px;
    gap: 52px; align-items: start;
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
    border-left: 3px solid var(--teal);
    font-size: 14px; color: var(--gray-700, #374151); line-height: 1.6;
}
.maint-tip i { color: var(--teal); margin-top: 2px; flex-shrink: 0; }
.maint-img-box {
    border-radius: 20px; overflow: hidden; background: var(--teal-light);
    aspect-ratio: 3/4;
    display: flex; align-items: center; justify-content: center;
    font-size: 80px; color: var(--teal);
    position: sticky; top: 90px;
    /* CATATAN: Ganti dengan:
       background: url("{{ asset('images/floors/parquet-maintenance.jpg') }}") center/cover;
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
    .about-parquet-grid,
    .why-polish-grid,
    .process-intro-grid,
    .offer-grid,
    .maint-grid { grid-template-columns: 1fr; }
    .parquet-img-panel, .maint-img-box { position: static; }
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
<section class="parquet-hero">
    <div class="container">
        <div class="hero-badge">
            <i class="fas fa-grip-lines"></i>
            Professional Floor Polishing — Singapore
        </div>
        <h1>Parquet Polishing<br>Services in Singapore</h1>
        <p>Professional Parquet Floor Polishing Service | Restoring The Lustre and Beauty of Your Parquet</p>
        <a href="#quote" class="btn-quote-white">Get A Quote</a>
    </div>
</section>

{{-- ============================================================
     ABOUT PARQUET + PARQUET POLISHING
     ============================================================ --}}
<section class="white-bg">
    <div class="container">
        <div class="about-parquet-grid">
            <div class="about-parquet-text">

                <h2>Parquet</h2>
                <p>Parquet flooring is a type of wood flooring designed with an arrangement of small pieces of wood that form a specific pattern, such as chevron, herringbone, or other geometric patterns. It offers an elegant, classic, and warm look that makes it very popular in various types of rooms, whether for homes, offices, or commercial spaces. Parquet flooring requires regular maintenance and polishing to maintain the beauty of the floor. Polishing is the best way to care for your parquet floor, restore the wood's natural lustre, and protect it from further damage.</p>

                <h2>Parquet Polishing</h2>
                <p>Floorshine parquet polishing service in Singapore offers the best solution for your parquet maintenance. Our team of professionals are experienced and use the latest technology to provide the best quality.</p>
                <p>Our floor polishing service is designed to deliver maximum results with meticulous and professional care.</p>
                <p>If you are looking for quality parquet polishing services, you have come to the right place. Because we are an experienced parquet polishing service in polishing.</p>
                <p>If your parquet floor has lost its lustre or has become dull due to scratches, contact us for a polishing service.</p>

            </div>

            <div class="parquet-img-panel">
                {{-- CATATAN: Ganti icon dengan gambar nyata:
                     <img src="{{ asset('images/floors/parquet-room.jpg') }}"
                          alt="Parquet Floor" style="width:100%;height:100%;object-fit:cover;"> --}}
                <div class="parquet-img-box">
                    <i class="fas fa-grip-lines"></i>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     WHY PARQUET NEEDS POLISH
     ============================================================ --}}
<section class="gray-bg">
    <div class="container">
        <div class="why-polish-grid">
            <div>
                <h2 class="sec-title">Why Parquet Need Polish</h2>
                <p class="sec-sub" style="margin-bottom:20px;">Parquet flooring, although renowned for its beauty and durability, requires periodic polishing to maintain its optimal appearance and extend the life of the floor. Daily use can lead to minor scratches, stains, or a dull-looking surface. The polishing process is the best way to restore the beauty of parquet without the need to replace the whole parquet, which can save cost and time. In addition, polishing also provides extra protection to the parquet floor to keep it durable and looking beautiful in the long run.</p>
                <p style="font-size:15px; color:var(--gray-600); line-height:1.75; margin-bottom:18px;">Here are some conditions that make parquet floors need polishing:</p>
                <ul class="bullet-list">
                    <li>Floor Surfaces Appear Dull or Faded</li>
                    <li>Stains or Spill Marks</li>
                    <li>Parquet Looks Rough or Textured</li>
                    <li>Visible Scratches or Scuffs Areas</li>
                    <li>Moisture or Liquid Damage</li>
                    <li>Parquet Flooring Looks Faded or Patchy</li>
                </ul>
            </div>

            {{-- CATATAN: Ganti icon dengan gambar:
                 <img src="{{ asset('images/floors/parquet-why.jpg') }}"
                      alt="Parquet Polish" style="width:100%;height:100%;object-fit:cover;"> --}}
            <div class="why-polish-img">
                <i class="fas fa-grip-lines"></i>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     PARQUET POLISHING PROCESS
     ============================================================ --}}
<section class="process-section">
    <div class="container">
        <div class="text-center">
            <h2 class="sec-title" style="color:#fff;">Parquet Polishing Process</h2>
            <p class="sec-sub" style="color:rgba(255,255,255,0.7); margin:0 auto;">We are experienced parquet floor polishing professionals, using specialist equipment and products to ensure successful results. Parquet polishing is the process of renewing and restoring parquet surfaces that have become worn, dull or damaged over time. The polishing process enhances the aesthetic appeal of parquet, but also prolongs its life.</p>
            <p style="font-size:15px; color:rgba(255,255,255,0.65); margin-top:14px; max-width:680px; margin-left:auto; margin-right:auto; line-height:1.7;">It involves a series of specialist techniques and treatments to restore the natural beauty and lustre of parquet.</p>
        </div>

        <div class="process-intro-grid">
            {{-- CATATAN: Ganti icon dengan gambar:
                 <img src="{{ asset('images/floors/parquet-process.jpg') }}"
                      alt="Parquet Process" style="width:100%;height:100%;object-fit:cover;"> --}}
            <div class="process-img-box">
                <i class="fas fa-tools"></i>
            </div>

            <div class="process-steps-wrap">
                <h3>The process of varnishing a parquet floor consists of several steps, including:</h3>

                <div class="process-step">
                    <div class="ps-num">1</div>
                    <div class="ps-body">
                        <h4>Preparation</h4>
                        <p>Clean the floor of dust, dirt and stain. Place shields around the edges of the parquet to protect it from liquids.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="ps-num">2</div>
                    <div class="ps-body">
                        <h4>Filling Cracks</h4>
                        <p>Fill cracks or small gaps in the parquet with a special product.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="ps-num">3</div>
                    <div class="ps-body">
                        <h4>Sanding</h4>
                        <p>Sand the floor to remove the old finish and smooth the surface.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="ps-num">4</div>
                    <div class="ps-body">
                        <h4>Apply a Primer</h4>
                        <p>Apply one coat of primer to the parquet floor to help the varnish coat adhere.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="ps-num">5</div>
                    <div class="ps-body">
                        <h4>Apply the Varnish</h4>
                        <p>Apply one coat of lacquer to the floor using a machine. Allow the first coat to dry completely before applying the second coat.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="ps-num">6</div>
                    <div class="ps-body">
                        <h4>Polishing</h4>
                        <p>Once the varnish has dried, the final step is to polish the surface of the wood floor using a polishing machine. The aim is to give it a shine and make it look more like a new parquet floor.</p>
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
        <h2 class="sec-title">3 Steps to Polishing Your Parquet Floor</h2>
        <p class="sec-sub" style="margin:0 auto;">Our simple booking process makes it easy to get your parquet floor polished by our professional team.</p>
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
                <p>Floor Shine is a company that focuses on the polishing sector, and the results we have:</p>
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
                 <img src="{{ asset('images/floors/parquet-offer.jpg') }}"
                      alt="Parquet Result" style="width:100%;height:100%;object-fit:cover;"> --}}
            <div class="offer-img">
                <i class="fas fa-grip-lines"></i>
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
                <h2>How To Keep Your <span>Parquet Floor</span><br>Well Maintained?</h2>
                <p>Parquet flooring requires polishing to maintain the lustre, cleanliness, and durability of the wood. With proper polishing, parquet flooring will retain its beauty, be protected from damage, and last a long time. Regular polishing helps maintain your investment in wood flooring, providing optimal benefits and additional value. If you are looking for a professional parquet polishing service, try Floorshine.</p>

                <p style="font-family:var(--font-head); font-size:16px; font-weight:700; color:var(--navy); margin:20px 0 14px;">Things to Consider for Parquet Floors:</p>

                <div class="maint-tip">
                    <i class="fas fa-exclamation-triangle"></i>
                    <span>Keep floors safe from liquid spills.</span>
                </div>
                <div class="maint-tip">
                    <i class="fas fa-exclamation-triangle"></i>
                    <span>Avoid Direct Sunlight Exposure.</span>
                </div>
                <div class="maint-tip">
                    <i class="fas fa-exclamation-triangle"></i>
                    <span>Avoid Overuse of Water-Based Cleaning Fluids.</span>
                </div>
                <div class="maint-tip">
                    <i class="fas fa-exclamation-triangle"></i>
                    <span>Pay Attention to Humidity Levels.</span>
                </div>
                <div class="maint-tip">
                    <i class="fas fa-exclamation-triangle"></i>
                    <span>Do Professional Maintenance.</span>
                </div>

                <p style="margin-top:20px; font-size:14.5px; color:var(--gray-600); line-height:1.7;">Maintaining a parquet floor after polishing may seem like a hassle, but it is the key to having a shiny and long-lasting parquet floor.</p>
            </div>

            {{-- CATATAN: Ganti icon dengan gambar:
                 <img src="{{ asset('images/floors/parquet-maintenance.jpg') }}"
                      alt="Parquet Maintenance" style="width:100%;height:100%;object-fit:cover;"> --}}
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
        <h2 class="sec-title">FAQ — <span>Parquet Floor Polishing Service</span></h2>
        <p class="sec-sub">Common questions about our parquet floor polishing services in Singapore.</p>

        <div class="faq-cols">
            <div>
                <div class="faq-item open">
                    <div class="faq-q" onclick="toggleFaq(this)">
                        <span>Why does my parquet floor need polishing?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-a">
                        Over time, parquet flooring can suffer from a loss of lustre, scratches and blemishes due to regular use. Polishing can restore the floor's natural beauty, remove natural faults, and protects the floor from further damage.
                    </div>
                </div>
                <div class="faq-item" style="margin-top:12px;">
                    <div class="faq-q" onclick="toggleFaq(this)">
                        <span>Does parquet floor refinishing take a long time?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-a">
                        The length of polishing time depends on the size of the floor and the condition it is currently in. Typically, polishing can take between half a day to a full day, including drying of the coats. We will provide a more accurate time estimate during the consultation.
                    </div>
                </div>
                <div class="faq-item" style="margin-top:12px;">
                    <div class="faq-q" onclick="toggleFaq(this)">
                        <span>Is parquet floor polishing safe?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-a">
                        Yes, parquet floor polishing is safe when done by experienced professionals. We use environmentally friendly equipment and products to polish the floor without damaging the wood surface or protective coating.
                    </div>
                </div>
            </div>
            <div>
                <div class="faq-item">
                    <div class="faq-q" onclick="toggleFaq(this)">
                        <span>Do I have to vacate the room during polishing?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-a">
                        We strongly recommend clearing the room or area to be polished so that we can work safely and effectively. If there are items that cannot be moved, our team will help move them during the polishing process.
                    </div>
                </div>
                <div class="faq-item" style="margin-top:12px;">
                    <div class="faq-q" onclick="toggleFaq(this)">
                        <span>Will polishing parquet flooring change the colour of the wood?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-a">
                        Parquet floor polishing will not change the natural colour of the wood, but it can improve the appearance of dull or faded floors. If you want a more noticeable colour change, you can ask for more in-depth staining or refinishing service.
                    </div>
                </div>
                <div class="faq-item" style="margin-top:12px;">
                    <div class="faq-q" onclick="toggleFaq(this)">
                        <span>Can parquet flooring be used immediately after polishing?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-a">
                        After applying the final protective coating, the floor may take a few hours to dry completely. We will let you know when the floor can be safely moved to avoid damage.
                    </div>
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
            <a href="{{ route('services.granite') }}" class="os-card">
                <span class="os-icon"><i class="fas fa-mountain"></i></span>
                <h4>Granite Polishing</h4>
            </a>
            <a href="{{ route('services.homogeneous') }}" class="os-card">
                <span class="os-icon"><i class="fas fa-th-large"></i></span>
                <h4>Homogeneous Tiles Polishing</h4>
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
