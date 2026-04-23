@extends('layouts.app')

@section('title', 'Marble Floor Polishing Services in Singapore | Floorshine')
@section('meta_description', 'Professional marble floor polishing services in Singapore. Specialised in providing quality service, restoring the lustre and beauty of your marble. Get a free quote today.')

@push('styles')
<style>
/* ============================================================
   HERO - MARBLE TEXTURE BACKGROUND
   ============================================================ */
.marble-hero {
    background: linear-gradient(135deg, rgba(30,120,128,0.92) 0%, rgba(53,173,181,0.88) 100%),
                url("{{ asset('images/floors/marble-hero.jpg') }}") center/cover no-repeat;
    padding: 80px 0 70px;
    position: relative;
}
/* CATATAN: Simpan gambar marble di public/images/floors/marble-hero.jpg
   Jika belum ada gambar, hapus baris url(...) di atas — warna teal tetap tampil */
.marble-hero::after {
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
.marble-hero h1 {
    font-family: var(--font-head);
    font-size: clamp(30px, 4.5vw, 54px);
    font-weight: 800;
    color: #fff;
    line-height: 1.12;
    letter-spacing: -1.5px;
    margin-bottom: 18px;
    max-width: 620px;
}
.marble-hero p {
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
.sec-label {
    display: inline-block;
    background: var(--teal-light);
    color: var(--teal-dark);
    padding: 5px 14px;
    border-radius: 100px;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.6px;
    margin-bottom: 12px;
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
.sec-title-teal { color: var(--teal); }
.sec-sub {
    font-size: 15.5px;
    color: var(--gray-600);
    line-height: 1.75;
    max-width: 700px;
}
.text-center { text-align: center; }
.gray-bg { background: var(--gray-50); }
.navy-bg { background: var(--navy); }
.white-bg { background: #fff; }

/* ============================================================
   ABOUT MARBLE SECTION
   ============================================================ */
.about-marble-grid {
    display: grid;
    grid-template-columns: 1fr 420px;
    gap: 52px;
    align-items: start;
}
.about-marble-text p {
    font-size: 15px;
    color: var(--gray-600);
    line-height: 1.8;
    margin-bottom: 18px;
}
.about-marble-text p:last-child { margin-bottom: 0; }
.about-marble-text h2 {
    font-family: var(--font-head);
    font-size: 22px;
    font-weight: 800;
    color: var(--navy);
    margin: 28px 0 14px;
    padding-bottom: 10px;
    border-bottom: 2px solid var(--gray-200);
}
.about-marble-text h2:first-child { margin-top: 0; }

/* Marble image panel */
.marble-img-panel {
    position: sticky;
    top: 90px;
}
.marble-img-box {
    border-radius: 20px;
    overflow: hidden;
    background: var(--teal-light);
    aspect-ratio: 4/3;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 80px;
    color: var(--teal);
    /* CATATAN: Ganti background & icon dengan gambar:
       background: url("{{ asset('images/floors/marble-room.jpg') }}") center/cover;
       Hapus display:flex, align-items, justify-content, font-size, color */
}
.marble-img-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
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
    color: var(--teal);
    font-size: 13px;
    margin-top: 2px;
    flex-shrink: 0;
}

/* ============================================================
   WHY MARBLE NEEDS POLISH
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
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 80px;
    color: var(--teal);
    /* CATATAN: Ganti dengan gambar marble setelah dipolish:
       background: url("{{ asset('images/floors/marble-after.jpg') }}") center/cover;
       Hapus display:flex, align-items, justify-content, font-size, color */
}

/* ============================================================
   PROCESS SECTION
   ============================================================ */
.process-section {
    background: var(--navy);
}
.process-section .sec-title { color: #fff; }
.process-section .sec-sub { color: rgba(255,255,255,0.65); }

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
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 80px;
    color: rgba(255,255,255,0.3);
    /* CATATAN: Ganti dengan gambar proses polishing:
       background: url("{{ asset('images/floors/marble-process.jpg') }}") center/cover;
       Hapus display:flex, align-items, justify-content, font-size, color */
}

.process-steps-wrap h3 {
    font-family: var(--font-head);
    font-size: 20px;
    font-weight: 700;
    color: var(--teal);
    margin-bottom: 24px;
    display: flex;
    align-items: center;
    gap: 10px;
}
.process-steps-wrap h3::before {
    content: '';
    width: 32px; height: 3px;
    background: var(--teal);
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
    width: 40px; height: 40px;
    border-radius: 50%;
    background: var(--teal);
    display: flex; align-items: center; justify-content: center;
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
    color: rgba(255,255,255,0.65);
    line-height: 1.65;
}

/* ============================================================
   3 STEPS CTA
   ============================================================ */
.steps-cta-section { background: var(--gray-50); }
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
    border-color: var(--teal);
    transform: translateY(-4px);
    box-shadow: 0 10px 28px rgba(29,187,164,0.12);
}
.step-cta-icon {
    width: 70px; height: 70px;
    background: var(--teal-light);
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 18px;
    font-size: 28px;
    color: var(--teal);
    transition: all 0.2s;
}
.step-cta-card:hover .step-cta-icon { background: var(--teal); color: #fff; }
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
    background: var(--teal);
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
.btn-wa-cta:hover { background: var(--teal-dark); color: #fff; }

/* ============================================================
   WHAT CAN WE OFFER
   ============================================================ */
.offer-grid {
    display: grid;
    grid-template-columns: 1fr 380px;
    gap: 52px;
    align-items: center;
}
.offer-text h2 {
    font-family: var(--font-head);
    font-size: clamp(22px, 2.8vw, 34px);
    font-weight: 800;
    color: var(--navy);
    line-height: 1.2;
    letter-spacing: -0.5px;
    margin-bottom: 16px;
}
.offer-text h2 span { color: var(--teal); }
.offer-text p {
    font-size: 15px;
    color: var(--gray-600);
    line-height: 1.8;
    margin-bottom: 14px;
}
.offer-results {
    margin-top: 24px;
    display: flex;
    flex-direction: column;
    gap: 10px;
}
.offer-result-item {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 14.5px;
    color: var(--gray-800);
    font-weight: 500;
}
.offer-result-item i { color: var(--teal); font-size: 15px; flex-shrink: 0; }
.offer-img {
    border-radius: 20px;
    overflow: hidden;
    background: var(--teal-light);
    aspect-ratio: 4/3;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 80px;
    color: var(--teal);
    /* CATATAN: Ganti dengan:
       background: url("{{ asset('images/floors/marble-offer.jpg') }}") center/cover;
       Hapus display:flex, align-items, justify-content, font-size, color */
}

/* ============================================================
   MAINTENANCE TIPS
   ============================================================ */
.maint-section { background: var(--gray-50); }
.maint-grid {
    display: grid;
    grid-template-columns: 1fr 400px;
    gap: 52px;
    align-items: start;
}
.maint-text h2 {
    font-family: var(--font-head);
    font-size: clamp(22px, 2.8vw, 34px);
    font-weight: 800;
    color: var(--navy);
    line-height: 1.2;
    letter-spacing: -0.5px;
    margin-bottom: 16px;
}
.maint-text h2 span { color: var(--teal); }
.maint-text p {
    font-size: 15px;
    color: var(--gray-600);
    line-height: 1.8;
    margin-bottom: 16px;
}
.maint-tips-title {
    font-family: var(--font-head);
    font-size: 16px;
    font-weight: 700;
    color: var(--navy);
    margin: 20px 0 12px;
}
.maint-tip {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    margin-bottom: 13px;
    padding: 14px 16px;
    background: #fff;
    border-radius: 10px;
    border-left: 3px solid var(--teal);
    font-size: 14px;
    color: var(--gray-700, #374151);
    line-height: 1.6;
}
.maint-tip i { color: var(--teal); margin-top: 2px; flex-shrink: 0; }
.maint-img-box {
    border-radius: 20px;
    overflow: hidden;
    background: var(--teal-light);
    aspect-ratio: 3/4;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 80px;
    color: var(--teal);
    position: sticky;
    top: 90px;
    /* CATATAN: Ganti dengan:
       background: url("{{ asset('images/floors/marble-maintenance.jpg') }}") center/cover;
       Hapus display:flex, align-items, justify-content, font-size, color */
}

/* ============================================================
   FAQ SECTION
   ============================================================ */
.faq-section { background: #fff; }
.faq-section .sec-title { margin-bottom: 6px; }
.faq-section .sec-title span { color: var(--teal); }

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
.faq-item.open { border-color: var(--teal); background: #fff; }
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
    color: var(--teal);
    font-size: 12px;
    flex-shrink: 0;
    margin-top: 4px;
    transition: transform 0.3s;
}
.faq-item.open .faq-q i { transform: rotate(180deg); }
.faq-a {
    display: none;
    padding: 0 20px 18px;
    font-size: 14px;
    color: var(--gray-600);
    line-height: 1.75;
    border-top: 1px solid var(--gray-200);
    padding-top: 14px;
}
.faq-item.open .faq-a { display: block; }

/* ============================================================
   CONTACT BOTTOM
   ============================================================ */
.contact-bottom { background: var(--gray-50); }
.contact-bottom-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 48px;
    align-items: start;
}
.cb-info h2 {
    font-family: var(--font-head);
    font-size: 22px;
    font-weight: 800;
    color: var(--teal);
    margin-bottom: 24px;
    line-height: 1.25;
}
.cb-info h2 span { display: block; color: var(--navy); font-size: 16px; font-weight: 600; margin-top: 4px; }
.cb-item {
    display: flex;
    align-items: flex-start;
    gap: 14px;
    margin-bottom: 18px;
}
.cb-icon {
    width: 40px; height: 40px;
    background: var(--teal-light);
    border-radius: 10px;
    display: flex; align-items: center; justify-content: center;
    color: var(--teal);
    font-size: 16px;
    flex-shrink: 0;
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
.other-services-section .sec-title { margin-bottom: 6px; }
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
.os-card:hover { border-color: var(--teal); background: var(--teal-light); transform: translateY(-3px); }
.os-card .os-icon {
    font-size: 28px;
    color: var(--teal);
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
    .about-marble-grid,
    .why-polish-grid,
    .process-intro-grid,
    .offer-grid,
    .maint-grid { grid-template-columns: 1fr; }
    .marble-img-panel,
    .maint-img-box { position: static; }
    .why-polish-img { order: -1; }
    .offer-img { display: none; }
    .os-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
    .steps-cta-grid { grid-template-columns: 1fr; }
    .faq-cols { grid-template-columns: 1fr; }
    .contact-bottom-grid { grid-template-columns: 1fr; }
    .process-intro-grid { grid-template-columns: 1fr; }
    .process-img-box { display: none; }
}
@media (max-width: 600px) {
    .os-grid { grid-template-columns: repeat(2, 1fr); }
}
</style>
@endpush

@section('content')

{{-- ============================================================
     HERO
     ============================================================ --}}
<section class="marble-hero">
    <div class="container">
        <div class="hero-badge">
            <i class="fas fa-gem"></i>
            Professional Floor Polishing — Singapore
        </div>
        <h1>Marble Floor Polishing<br>Services in Singapore</h1>
        <p>Specialised In Providing A Quality Service To Our Customer | Restoring The Lustre And Beauty Of Your Marble</p>
        <a href="#quote" class="btn-quote-white">Get A Quote</a>
    </div>
</section>

{{-- ============================================================
     ABOUT MARBLE + MARBLE POLISHING
     ============================================================ --}}
<section class="white-bg">
    <div class="container">
        <div class="about-marble-grid">
            <div class="about-marble-text">

                <h2>Marble</h2>
                <p>Marble floors have an elegant and luxurious appearance, and can give the impression of elegance and luxury to the room. However, marble floors require regular maintenance and polishing to maintain their appearance and quality.</p>
                <p>Without proper care and maintenance, marble floors can become dull, accumulate dirt, stains, and lose its lustre. Therefore, it is important to maintain and polish your marble floors regularly to maintain their look and quality, and to ensure that they stay looking beautiful and lasting.</p>

                <h2>Marble Polishing</h2>
                <p>Floorshine marble polishing service in Singapore offers the best solution for your marble maintenance. Our team of professionals are experienced and use the best technology to provide the best quality.</p>
                <p>Our services include marble polishing, cleaning, protection and marble maintenance. We are committed to providing high quality services and ensuring customer satisfaction.</p>
                <p>If you are looking for quality marble polishing services, you have come to the right place. Because we are an expert team with amazing service in polishing marble.</p>
                <p>If your marble floor has lost its lustre or has become dull due to scratches, contact us for a polishing service.</p>

            </div>

            <div class="marble-img-panel">
                {{-- ============================================================
                     CATATAN GAMBAR:
                     Simpan gambar di: public/images/floors/marble-room.jpg
                     Lalu ganti isi .marble-img-box dengan:
                     <img src="{{ asset('images/floors/marble-room.jpg') }}"
                          alt="Marble Floor" style="width:100%;height:100%;object-fit:cover;">
                     ============================================================ --}}
                <div class="marble-img-box">
                    <i class="fas fa-gem"></i>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     WHY MARBLE NEEDS POLISH
     ============================================================ --}}
<section class="gray-bg">
    <div class="container">
        <div class="why-polish-grid">
            <div>
                <h2 class="sec-title">Why Marble Need Polish</h2>
                <p class="sec-sub" style="margin-bottom:20px;">Marble needs polishing to protect its surface and enhance its appearance. Marble is a natural stone that is prone to etching, which occurs when acidic substances, such as vinegar or citrus juice, come into contact with the surface of the stone. Polishing helps to fill the surface of marble, making it look cleaner and shinier. In addition, polishing can help remove dirt and stains from the marble's surface, making it better maintained and keeping it looking its best.</p>
                <p style="font-size:15px; color:var(--gray-600); line-height:1.75; margin-bottom:18px;">The various types of flooring that can be polished include having different shapes such as marble tiles; the following are some examples of marble floors that can be polished:</p>
                <ul class="bullet-list">
                    <li>Scratched due to shifting furniture</li>
                    <li>Cracked due to falling objects</li>
                    <li>Scratched due to renovation</li>
                    <li>Exposed to impact</li>
                    <li>Exposed to chemical splashes</li>
                    <li>Exposed to cement stains during construction</li>
                    <li>Or perhaps exposed to other dirt</li>
                </ul>
            </div>

            {{-- ============================================================
                 CATATAN GAMBAR:
                 Simpan gambar di: public/images/floors/marble-why.jpg
                 Lalu ganti isi .why-polish-img dengan:
                 <img src="{{ asset('images/floors/marble-why.jpg') }}"
                      alt="Marble Polish" style="width:100%;height:100%;object-fit:cover;">
                 ============================================================ --}}
            <div class="why-polish-img">
                <i class="fas fa-gem"></i>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     MARBLE POLISHING PROCESS
     ============================================================ --}}
<section class="process-section">
    <div class="container">
        <div class="text-center">
            <h2 class="sec-title" style="color:#fff;">Marble Polishing Process</h2>
            <p class="sec-sub" style="color:rgba(255,255,255,0.7); margin:0 auto;">We are experienced marble floor polishing professionals, using specialist equipment and products to ensure successful results. Marble floor polishing is the process of renewing and restoring marble floors that have become worn, dull or damaged over time. Our process not only enhances the aesthetic appeal of marble, but also prolongs its life.</p>
            <p style="font-size:15px; color:rgba(255,255,255,0.65); margin-top:14px; max-width:680px; margin-left:auto; margin-right:auto; line-height:1.7;">It involves a series of specialist techniques and treatments to restore the natural beauty and lustre of marble.</p>
        </div>

        <div class="process-intro-grid">
            {{-- ============================================================
                 CATATAN GAMBAR:
                 Simpan gambar di: public/images/floors/marble-process.jpg
                 Lalu ganti isi .process-img-box dengan:
                 <img src="{{ asset('images/floors/marble-process.jpg') }}"
                      alt="Marble Polishing Process" style="width:100%;height:100%;object-fit:cover;">
                 ============================================================ --}}
            <div class="process-img-box">
                <i class="fas fa-tools"></i>
            </div>

            <div class="process-steps-wrap">
                <h3>Our process for polishing marble includes:</h3>

                <div class="process-step">
                    <div class="ps-num">1</div>
                    <div class="ps-body">
                        <h4>Marble Cleaning</h4>
                        <p>Cleaning the marble from dirt, dust and old sealant from the previous polish and grit.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="ps-num">2</div>
                    <div class="ps-body">
                        <h4>Marble Repair</h4>
                        <p>Repairing cracks, scratches or other damage to the marble surface. This may include patching and smoothing imperfections.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="ps-num">3</div>
                    <div class="ps-body">
                        <h4>Sanding & Honing Marble</h4>
                        <p>Using abrasive materials and techniques to level the surface. This helps to remove and create a clean finish.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="ps-num">4</div>
                    <div class="ps-body">
                        <h4>Polishing Marble</h4>
                        <p>Buffing the marble with progressively finer abrasives and polishing powders to achieve a high gloss finish.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="ps-num">5</div>
                    <div class="ps-body">
                        <h4>Marble Sealing</h4>
                        <p>Applying a protective sealant to prevent future stains and damage in the future.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     3 STEPS TO POLISH
     ============================================================ --}}
<section class="steps-cta-section">
    <div class="container text-center">
        <h2 class="sec-title">3 Steps to Polishing Your Marble Floor</h2>
        <p class="sec-sub" style="margin:0 auto;">Our simple booking process makes it easy to get your marble floor polished by our professional team.</p>
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
                <p>Floorshine Singapore has polishing experts that you should rely on to maintain the entire surface of your floor. After a thorough job, our inspectors will recommend and also provide a follow-up marble polishing solution.</p>
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
            {{-- ============================================================
                 CATATAN GAMBAR:
                 Simpan di: public/images/floors/marble-offer.jpg
                 Ganti isi .offer-img dengan:
                 <img src="{{ asset('images/floors/marble-offer.jpg') }}"
                      alt="Marble Result" style="width:100%;height:100%;object-fit:cover;">
                 ============================================================ --}}
            <div class="offer-img">
                <i class="fas fa-gem"></i>
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
                <h2>How To Keep Your <span>Marble Floor</span><br>Well Maintained?</h2>
                <p>Wiping the floor every day is not enough in order to keep the shine of the marble durable and not easily damaged. The floor needs to be treated with special floor protectors and other polishing materials to be more lasting. But you need to know that all these steps must be carried out by professionals and experienced technicians, because if you get it wrong, instead of the resulting shiny floor, your floor can actually be damaged. If you are looking for a professional floor polishing service, try Floorshine.</p>

                <p class="maint-tips-title" style="font-family:var(--font-head); font-size:16px; font-weight:700; color:var(--navy); margin-top:20px; margin-bottom:14px;">Things to Consider for Marble Floors:</p>

                <div class="maint-tip">
                    <i class="fas fa-exclamation-triangle"></i>
                    <span>Avoid using strong chemical cleaners as they will damage the marble floor.</span>
                </div>
                <div class="maint-tip">
                    <i class="fas fa-exclamation-triangle"></i>
                    <span>Avoid using a vacuum cleaner with plastic or metal accessories that can damage the surface. Vacuum cleaners with rubber wheels can be used as the chances of scratching the surface are much lower.</span>
                </div>
                <div class="maint-tip">
                    <i class="fas fa-exclamation-triangle"></i>
                    <span>Not spillages rather than wiping them on the floor as this can cause the liquid to spread to other areas and soak into the surface causing long-term stains.</span>
                </div>

                <p style="margin-top:20px; font-size:14.5px; color:var(--gray-600); line-height:1.7;">Maintaining a marble floor after polishing may seem like a hassle, but it is the key to having a shiny and long-lasting marble floor.</p>
            </div>

            {{-- ============================================================
                 CATATAN GAMBAR:
                 Simpan di: public/images/floors/marble-maintenance.jpg
                 Ganti isi .maint-img-box dengan:
                 <img src="{{ asset('images/floors/marble-maintenance.jpg') }}"
                      alt="Marble Maintenance" style="width:100%;height:100%;object-fit:cover;">
                 ============================================================ --}}
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
        <h2 class="sec-title">FAQ — <span>Marble Floor Polishing Service</span></h2>
        <p class="sec-sub">Common questions about our marble floor polishing services in Singapore.</p>

        <div class="faq-cols">
            <div>
                <div class="faq-item open">
                    <div class="faq-q" onclick="toggleFaq(this)">
                        <span>Why has my marble floor lost its lustre?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-a">
                        Marble floors can lose their lustre due to daily use, friction, dust, or spills of acidic substances. These factors can lead to microscopic scratches on the marble surface, causing it to lose its lustrous sheen and look dull.
                    </div>
                </div>
                <div class="faq-item" style="margin-top:12px;">
                    <div class="faq-q" onclick="toggleFaq(this)">
                        <span>Can marble polishing remove scratches on the floor?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-a">
                        Marble polishing is effective in removing light to moderate scratches on marble surfaces. However, if the scratches are deep or structural damage has occurred, an assessment is first needed by our specialists to determine the appropriate solution.
                    </div>
                </div>
                <div class="faq-item" style="margin-top:12px;">
                    <div class="faq-q" onclick="toggleFaq(this)">
                        <span>How long do marble floor polishing results last?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-a">
                        Marble floor polishing results can last between 6–12 months, depending on the traffic conditions and how you take care of the floor after polishing. Periodic maintenance such as cleaning with the right duster will help maintain the lustre for longer.
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
                        We recommend clearing the room or at least moving large items to facilitate the polishing process. Our team will help move smaller furniture items on the day of the service.
                    </div>
                </div>
                <div class="faq-item" style="margin-top:12px;">
                    <div class="faq-q" onclick="toggleFaq(this)">
                        <span>Is there any special care that needs to be taken after polishing?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-a">
                        After polishing, make sure to keep the marble floor clean and dry. Use a soft mop or cloth to clean, avoid harsh chemicals or abrasive cleaning products. Try to clean up any liquid spills immediately to prevent staining.
                    </div>
                </div>
                <div class="faq-item" style="margin-top:12px;">
                    <div class="faq-q" onclick="toggleFaq(this)">
                        <span>Are marble floor polishing services available for commercial and residential areas?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-a">
                        Yes, we provide marble floor polishing services for various types of properties, both residential and commercial. We have experience working with offices, hotels, restaurants, and private homes.
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

            {{-- ============================================================
                 CATATAN GOOGLE MAPS:
                 Ganti src iframe di bawah dengan embed URL dari Google Maps
                 lokasi bisnis Floorshine yang sebenarnya.
                 ============================================================ --}}
            <div>
                <div class="cb-map">
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

{{-- ============================================================
     OTHER SERVICES
     ============================================================ --}}
<section class="other-services-section">
    <div class="container">
        <h2 class="sec-title text-center">Our Other Services</h2>
        <p class="sec-sub text-center" style="margin:0 auto 0;">Explore our complete range of professional floor polishing services in Singapore.</p>
        <div class="os-grid">
            <a href="{{ route('services.granite') }}" class="os-card">
                <span class="os-icon"><i class="fas fa-mountain"></i></span>
                <h4>Granite Polishing</h4>
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
