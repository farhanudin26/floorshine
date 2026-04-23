@extends('layouts.app')

@section('title', 'Terrazzo Polishing Services in Singapore | Floorshine')
@section('meta_description', 'Professional terrazzo floor polishing services in Singapore. Restoring the lustre and beauty of your terrazzo. Get a free quote today.')

@push('styles')
<style>
/* ============================================================
   HERO — terrazzo texture background
   ============================================================ */
.terrazzo-hero {
    background: linear-gradient(135deg, rgba(29,187,164,0.75) 0%, rgba(29,187,164,0.75) 100%),
                url("{{ asset('images/floors/terrazzo-hero.jpg') }}") center/cover no-repeat;
    padding: 80px 0 70px;
    position: relative;
}
/* CATATAN: Simpan gambar terrazzo di public/images/floors/terrazzo-hero.jpg
   Terrazzo biasanya berwarna-warni dengan chip marble/glass di dalamnya.
   Jika belum ada gambar, hapus baris url(...) — warna teal tetap tampil */
.terrazzo-hero::after {
    content: '';
    position: absolute;
    bottom: 0; left: 0; right: 0;
    height: 4px;
    background: linear-gradient(90deg, var(--teal), #fff, var(--teal));
}
.hero-badge {
    display: inline-flex; align-items: center; gap: 7px;
    background: rgba(255,255,255,0.15); color: rgba(255,255,255,0.9);
    padding: 5px 14px; border-radius: 100px; font-size: 12.5px;
    font-weight: 500; margin-bottom: 18px; backdrop-filter: blur(4px);
}
.terrazzo-hero h1 {
    font-family: var(--font-head);
    font-size: clamp(30px, 4.5vw, 54px); font-weight: 800; color: #fff;
    line-height: 1.12; letter-spacing: -1.5px; margin-bottom: 18px; max-width: 620px;
}
.terrazzo-hero p {
    color: rgba(255,255,255,0.88); font-size: 15.5px;
    line-height: 1.65; max-width: 520px; margin-bottom: 28px;
}
.btn-quote-white {
    display: inline-block; background: #fff; color: var(--teal-dark);
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
.sec-title span { color: var(--teal); }
.sec-sub { font-size: 15.5px; color: var(--gray-600); line-height: 1.75; max-width: 700px; }
.text-center { text-align: center; }
.gray-bg  { background: var(--gray-50); }
.white-bg { background: #fff; }

/* ============================================================
   ABOUT TERRAZZO
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
    border-radius: 20px; overflow: hidden; background: var(--teal-light);
    aspect-ratio: 4/3;
    display: flex; align-items: center; justify-content: center;
    font-size: 80px; color: var(--teal);
    /* CATATAN: Simpan gambar di public/images/floors/terrazzo-room.jpg
       Lalu ganti isi .img-box dengan:
       <img src="{{ asset('images/floors/terrazzo-room.jpg') }}"
            alt="Terrazzo Floor" style="width:100%;height:100%;object-fit:cover;"> */
}

/* Bullet list */
.bullet-list { list-style: none; margin: 16px 0; }
.bullet-list li {
    display: flex; align-items: flex-start; gap: 10px;
    font-size: 14.5px; color: var(--gray-700, #374151);
    margin-bottom: 9px; line-height: 1.55;
}
.bullet-list li::before {
    content: '▸'; color: var(--teal); font-size: 13px; margin-top: 2px; flex-shrink: 0;
}

/* ============================================================
   WHY TERRAZZO NEEDS POLISH
   ============================================================ */
.why-grid {
    display: grid; grid-template-columns: 1fr 380px; gap: 52px; align-items: start;
}
.why-img {
    border-radius: 20px; overflow: hidden; background: var(--teal-light);
    aspect-ratio: 4/3;
    display: flex; align-items: center; justify-content: center;
    font-size: 80px; color: var(--teal);
    /* CATATAN: Ganti dengan:
       background: url("{{ asset('images/floors/terrazzo-why.jpg') }}") center/cover;
       Hapus display:flex, align-items, justify-content, font-size, color */
}

/* ============================================================
   PROCESS SECTION — navy dark
   ============================================================ */
.process-section { background: var(--navy); }
.process-intro-grid {
    display: grid; grid-template-columns: 360px 1fr; gap: 52px;
    align-items: start; margin-top: 48px;
}
.process-img-box {
    border-radius: 20px; overflow: hidden; background: rgba(255,255,255,0.07);
    aspect-ratio: 4/5;
    display: flex; align-items: center; justify-content: center;
    font-size: 80px; color: rgba(255,255,255,0.3);
    /* CATATAN: Ganti dengan:
       background: url("{{ asset('images/floors/terrazzo-process.jpg') }}") center/cover;
       Hapus display:flex, align-items, justify-content, font-size, color */
}
.process-steps-wrap h3 {
    font-family: var(--font-head); font-size: 20px; font-weight: 700; color: var(--teal);
    margin-bottom: 24px; display: flex; align-items: center; gap: 10px;
}
.process-steps-wrap h3::before {
    content: ''; width: 32px; height: 3px;
    background: var(--teal); border-radius: 2px; flex-shrink: 0;
}
.process-step { display: flex; gap: 18px; margin-bottom: 26px; align-items: flex-start; }
.ps-num {
    width: 40px; height: 40px; border-radius: 50%; background: var(--teal);
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
    background: var(--teal); color: #fff; padding: 13px 32px; border-radius: 50px;
    text-decoration: none; font-size: 15px; font-weight: 700;
    font-family: var(--font-head); margin-top: 40px; transition: background 0.2s;
}
.btn-wa-cta:hover { background: var(--teal-dark); color: #fff; }

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
       background: url("{{ asset('images/floors/terrazzo-offer.jpg') }}") center/cover;
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
    font-size: 80px; color: var(--teal); position: sticky; top: 90px;
    /* CATATAN: Ganti dengan:
       background: url("{{ asset('images/floors/terrazzo-maintenance.jpg') }}") center/cover;
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
.cb-info h2 {
    font-family: var(--font-head); font-size: 22px; font-weight: 800;
    color: var(--teal); margin-bottom: 24px; line-height: 1.25;
}
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
    background: var(--gray-50); border: 1px solid var(--gray-200); border-radius: 14px;
    padding: 22px 18px; text-align: center; text-decoration: none;
    color: inherit; transition: all 0.2s; display: block;
}
.os-card:hover { border-color: var(--teal); background: var(--teal-light); transform: translateY(-3px); }
.os-icon { font-size: 28px; color: var(--teal); margin-bottom: 10px; display: block; }
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
<section class="terrazzo-hero">
    <div class="container">
        <div class="hero-badge">
            <i class="fas fa-border-all"></i>
            Professional Floor Polishing — Singapore
        </div>
        <h1>Terrazzo Polishing<br>Services in Singapore</h1>
        <p>Professional Terrazzo Floor Polishing Service | Restoring the Lustre and Beauty of Your Terrazzo</p>
        <a href="#quote" class="btn-quote-white">Get A Quote</a>
    </div>
</section>

{{-- ============================================================
     ABOUT TERRAZZO + TERRAZZO POLISHING
     ============================================================ --}}
<section class="white-bg">
    <div class="container">
        <div class="about-grid">
            <div class="about-text">

                <h2>Terrazzo</h2>
                <p>Terrazzo flooring is an elegant and durable choice for many different types of rooms. With excellent durability, terrazzo flooring is able to last over the long term, making it ideal for heavily trafficked areas, such as commercial spaces, residential homes, and public areas. Furthermore, terrazzo is also renowned for its ability to be polished to a glossy and smooth appearance, resulting in a floor that is both beautiful and easy to clean. To maintain the beauty and quality of terrazzo flooring, periodic polishing is highly recommended.</p>

                <h2>Terrazzo Polishing</h2>
                <p>Floorshine terrazzo polishing service in Singapore offers the best solution for your terrazzo maintenance. Our team of professionals are experienced and use the latest technology to provide the best quality.</p>
                <p>Our services include terrazzo polishing, cleaning, protection and terrazzo maintenance. We are committed to providing high quality services and ensuring customer satisfaction.</p>
                <p>If you are looking for quality terrazzo polishing services, you have come to the right place. Because we are an experienced terrazzo polishing service in polishing.</p>
                <p>If your terrazzo floor has lost its lustre or has become dull due to scratches, contact us for a polishing service.</p>

            </div>

            <div class="img-panel">
                {{-- CATATAN: Ganti icon dengan gambar nyata:
                     <img src="{{ asset('images/floors/terrazzo-room.jpg') }}"
                          alt="Terrazzo Floor" style="width:100%;height:100%;object-fit:cover;"> --}}
                <div class="img-box">
                    <i class="fas fa-border-all"></i>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     WHY TERRAZZO NEEDS POLISH
     ============================================================ --}}
<section class="gray-bg">
    <div class="container">
        <div class="why-grid">
            <div>
                <h2 class="sec-title">Why Terrazzo Need Polish</h2>
                <p class="sec-sub" style="margin-bottom:20px;">Terrazzo flooring needs to be polished to maintain its beauty and quality over time. While it is renowned for its exceptional durability, it can lose its lustre and aesthetic look along with stains over time. Polishing will bring back the floor's natural lustre, give it a smooth and glossy surface, and bring out the patterns and colours present in it. In addition, polishing also serves to remove scratches or stains that may appear due to daily activities, which are difficult to remove with regular cleaning. More than just improving the look, polishing also helps extend the life of terrazzo floors.</p>
                <p style="font-size:15px; color:var(--gray-600); line-height:1.75; margin-bottom:18px;">Here are some conditions that make terrazzo floors need polishing:</p>
                <ul class="bullet-list">
                    <li>Terrazzo Losing Its Lustre and Looking Dull</li>
                    <li>Colour or Pattern Change</li>
                    <li>Scratches and Stains</li>
                    <li>Damage from Heavy Traffic</li>
                    <li>Uneven or Porous Surface</li>
                </ul>
            </div>

            {{-- CATATAN: Ganti icon dengan gambar:
                 <img src="{{ asset('images/floors/terrazzo-why.jpg') }}"
                      alt="Terrazzo Why Polish" style="width:100%;height:100%;object-fit:cover;"> --}}
            <div class="why-img">
                <i class="fas fa-border-all"></i>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     TERRAZZO POLISHING PROCESS
     ============================================================ --}}
<section class="process-section">
    <div class="container">
        <div class="text-center">
            <h2 class="sec-title" style="color:#fff; margin-bottom:14px;">Terrazzo Polishing Process</h2>
            <p class="sec-sub" style="color:rgba(255,255,255,0.7); margin:0 auto;">We are experienced terrazzo floor polishing professionals, using specialist equipment and products to ensure successful results. Terrazzo polishing is the process of renewing and restoring terrazzo surfaces that have become worn, dull or damaged over time. Our process not only enhances the aesthetic appeal of terrazzo, but also prolongs its life.</p>
            <p style="font-size:15px; color:rgba(255,255,255,0.65); margin-top:14px; max-width:680px; margin-left:auto; margin-right:auto; line-height:1.7;">It involves a series of specialist techniques and treatments to restore the natural beauty and lustre of terrazzo.</p>
        </div>

        <div class="process-intro-grid">
            {{-- CATATAN: Ganti icon dengan gambar:
                 <img src="{{ asset('images/floors/terrazzo-process.jpg') }}"
                      alt="Terrazzo Process" style="width:100%;height:100%;object-fit:cover;"> --}}
            <div class="process-img-box">
                <i class="fas fa-tools"></i>
            </div>

            <div class="process-steps-wrap">
                <h3>Our process for polishing terrazzo includes:</h3>

                <div class="process-step">
                    <div class="ps-num">1</div>
                    <div class="ps-body">
                        <h4>pH neutral cleaning solution</h4>
                        <p>We start the process using a special cleaning solution specially formulated for terrazzo. The solution effectively removes dirt, dust and stains without damaging your terrazzo floor surface. Neutral pH cleaning helps loosen stubborn stains and dirt stuck to the terrazzo surface.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="ps-num">2</div>
                    <div class="ps-body">
                        <h4>Mechanical Agitation</h4>
                        <p>Next, we use specialised equipment to clean the terrazzo surface more effectively, ensuring cleanliness and beauty. Keep for scraping stains and dirt from the terrazzo surface.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="ps-num">3</div>
                    <div class="ps-body">
                        <h4>Spot Treatment</h4>
                        <p>If certain stains or discolourations are present, our technicians will apply a spot treatment using a special cleaning agent. The material is specifically designed to remove certain stains such as oil, grease or rust.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="ps-num">4</div>
                    <div class="ps-body">
                        <h4>Rinsing and Extraction</h4>
                        <p>Our team use high quality equipment to ensure proper extraction of dirty water, leaving the floor clean and free of residue.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="ps-num">5</div>
                    <div class="ps-body">
                        <h4>Drying</h4>
                        <p>This process allows the terrazzo floor to dry completely. This can be done using air movers or a fan to speed up the drying process. It is important to ensure that the terrazzo floor is completely dry before proceeding to the next step.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="ps-num">6</div>
                    <div class="ps-body">
                        <h4>Polishing</h4>
                        <p>Once the floor is dry, we move on to the polishing stage. Using special diamond pads or polishing machines, we gently scrape the surface to remove any imperfections, cracks, scratches or dullness. This process restores the lustre of your terrazzo floor and leaves it looking perfectly stunning.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="ps-num">7</div>
                    <div class="ps-body">
                        <h4>Sealing</h4>
                        <p>Finally, we apply a durable sealant to protect the surface from future stains and damage.</p>
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
        <h2 class="sec-title">3 Steps to Polishing Your Terrazzo Floor</h2>
        <p class="sec-sub" style="margin:0 auto;">Our simple booking process makes it easy to get your terrazzo floor polished by our professional team.</p>
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
                <p>Floorshine are Singapore floor polishing experts that you should rely on to maintain the entire surface of your floor. After a thorough surface inspection, we will recommend and also provide a follow-up terrazzo polishing solution.</p>
                <p>Our services primarily emphasise restoring the appearance of your floor surface and extending its service life. Floor shine is a company that focuses on the polishing sector, and the results we have:</p>
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
            {{-- CATATAN: Ganti dengan:
                 <img src="{{ asset('images/floors/terrazzo-offer.jpg') }}"
                      alt="Terrazzo Result" style="width:100%;height:100%;object-fit:cover;"> --}}
            <div class="offer-img"><i class="fas fa-border-all"></i></div>
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
                <h2>How To Keep Your <span>Terrazzo Floor</span><br>Well Maintained?</h2>
                <p>Polishing terrazzo floors helps to maintain their beauty and quality over time. More than just improving the look, polishing also helps extend the life of terrazzo floors. By strengthening the surface of the terrazzo, polishing also reduces the chance of surface damage from scratches, wear and stains. Regularly polished terrazzo floors are also easier to clean, as the surface becomes smoother, making it less prone to dirt and build-up. Lastly, having terrazzo floors maintained with polishing also increases the overall aesthetic value of the property.</p>

                <p style="font-family:var(--font-head); font-size:16px; font-weight:700; color:var(--navy); margin:20px 0 14px;">Things to Consider for Terrazzo Floors:</p>

                <div class="maint-tip">
                    <i class="fas fa-check-circle"></i>
                    <span>Routine Cleaning.</span>
                </div>
                <div class="maint-tip">
                    <i class="fas fa-check-circle"></i>
                    <span>Clean up Liquid Spills Immediately.</span>
                </div>
                <div class="maint-tip">
                    <i class="fas fa-check-circle"></i>
                    <span>Choose the Right Cleaning Products.</span>
                </div>
                <div class="maint-tip">
                    <i class="fas fa-check-circle"></i>
                    <span>Use Floor Protectors.</span>
                </div>
                <div class="maint-tip">
                    <i class="fas fa-check-circle"></i>
                    <span>Maintain Humidity and Temperature.</span>
                </div>
                <div class="maint-tip">
                    <i class="fas fa-check-circle"></i>
                    <span>Protection from Heavy Stains and Dirt.</span>
                </div>

                <p style="margin-top:20px; font-size:14.5px; color:var(--gray-600); line-height:1.7;">Maintaining a terrazzo floor after polishing may seem like a hassle, but it is the key to having a shiny and long-lasting terrazzo floor.</p>
            </div>

            {{-- CATATAN: Ganti dengan:
                 <img src="{{ asset('images/floors/terrazzo-maintenance.jpg') }}"
                      alt="Terrazzo Maintenance" style="width:100%;height:100%;object-fit:cover;"> --}}
            <div class="maint-img-box"><i class="fas fa-broom"></i></div>
        </div>
    </div>
</section>

{{-- ============================================================
     FAQ
     ============================================================ --}}
<section class="faq-section">
    <div class="container">
        <h2 class="sec-title">FAQ — <span>Terrazzo Floor Polishing Service</span></h2>
        <p class="sec-sub">Common questions about our terrazzo floor polishing services in Singapore.</p>

        <div class="faq-cols">
            <div>
                <div class="faq-item open">
                    <div class="faq-q" onclick="toggleFaq(this)">
                        <span>Why do terrazzo floors need polishing?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-a">
                        Terrazzo floor polishing is necessary to restore its natural lustre and repair any scratches or stains that may appear over time. Periodic polishing helps to protect the surface of the terrazzo floor and will result in the floor looking like new again.
                    </div>
                </div>
                <div class="faq-item" style="margin-top:12px;">
                    <div class="faq-q" onclick="toggleFaq(this)">
                        <span>What causes terrazzo flooring to become dull or scratched?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-a">
                        Terrazzo floors can become dull or scratched from exposure to dust, dirt, spilled liquids, or friction from furniture and appliances. Daily use can also reduce the look of the floor over time and polishing is one of the best ways to have it repaired.
                    </div>
                </div>
                <div class="faq-item" style="margin-top:12px;">
                    <div class="faq-q" onclick="toggleFaq(this)">
                        <span>What are the benefits of using a professional polishing service for terrazzo?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-a">
                        Professional polishing services have the right equipment and expertise to effectively polish your terrazzo floor and achieve the best results. The professional team can also ensure that the polishing is done thoroughly and properly, without damaging the surface of your terrazzo floor. Try it with Floorshine Services.
                    </div>
                </div>
            </div>
            <div>
                <div class="faq-item">
                    <div class="faq-q" onclick="toggleFaq(this)">
                        <span>Can polishing change the colour or design of terrazzo flooring?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-a">
                        Polishing will not change the colour or design of terrazzo flooring. The process only aims to smooth the surface and restore the natural shine without changing the original colour or design.
                    </div>
                </div>
                <div class="faq-item" style="margin-top:12px;">
                    <div class="faq-q" onclick="toggleFaq(this)">
                        <span>How long does the terrazzo polishing process take?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-a">
                        The time taken to polish a terrazzo floor depends on the size and condition of the floor. In general, polishing can take between a few hours up to a full day. Larger floors or floors in poor condition may take more time, so an assessment will be done before we begin.
                    </div>
                </div>
                <div class="faq-item" style="margin-top:12px;">
                    <div class="faq-q" onclick="toggleFaq(this)">
                        <span>What should I do after terrazzo floor polishing?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-a">
                        After polishing, make sure to keep the floor dry and avoid stepping on it for a few hours until the surface is fully dry and hardened. Also consider using a protective coating or sealant to maintain the shine and extend the life of the surface floor.
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
                <span class="os-icon"><i class="fas fa-gem"></i></span><h4>Marble Polishing</h4>
            </a>
            <a href="{{ route('services.granite') }}" class="os-card">
                <span class="os-icon"><i class="fas fa-mountain"></i></span><h4>Granite Polishing</h4>
            </a>
            <a href="{{ route('services.homogeneous') }}" class="os-card">
                <span class="os-icon"><i class="fas fa-th-large"></i></span><h4>Homogeneous Tiles Polishing</h4>
            </a>
            <a href="{{ route('services.parquet') }}" class="os-card">
                <span class="os-icon"><i class="fas fa-grip-lines"></i></span><h4>Parquet Polishing</h4>
            </a>
            <a href="{{ route('services.limestone') }}" class="os-card">
                <span class="os-icon"><i class="fas fa-layer-group"></i></span><h4>Limestone Polishing</h4>
            </a>
            <a href="{{ route('services.outdoor') }}" class="os-card">
                <span class="os-icon"><i class="fas fa-sun"></i></span><h4>Outdoor Ceramic Tiles Polishing</h4>
            </a>
            <a href="{{ route('services.porcelain') }}" class="os-card">
                <span class="os-icon"><i class="fas fa-circle"></i></span><h4>Porcelain Polishing</h4>
            </a>
            <a href="{{ route('home') }}" class="os-card" style="background:var(--teal-light); border-color:var(--teal);">
                <span class="os-icon"><i class="fas fa-home"></i></span><h4>Back to Home</h4>
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
