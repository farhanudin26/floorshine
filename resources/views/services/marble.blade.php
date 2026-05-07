@extends('layouts.app')

@section('title', 'Marble Floor Polishing Services in Singapore | Floorshine')
@section('meta_description', 'Professional marble floor polishing services in Singapore. Specialised in providing quality service, restoring the lustre and beauty of your marble. Get a free quote today.')

@push('styles')
<style>
/* ============================================================
   HERO - MARBLE TEXTURE BACKGROUND
   ============================================================ */
.marble-hero {
    padding: 80px 0 70px;
    position: relative;
}

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
    color: #35adb5;
    line-height: 1.12;
    letter-spacing: -1.5px;
    margin-bottom: 18px;
    max-width: 620px;
}
.marble-hero p {
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
.green-bg { background: #35adb5; }


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
    color: #fff;
    line-height: 1.8;
    margin-bottom: 18px;
}
.about-marble-text p:last-child { margin-bottom: 0; }
.about-marble-text h2 {
    font-family: var(--font-head);
    font-size: 22px;
    font-weight: 800;
    color: #fff;
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
    background: var(--green-bg);
    aspect-ratio: 4/3;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 80px;
    color: var(--teal);
}

/* Warna teks */
.why-polish-grid h2,
.why-polish-grid .sec-title {
    color: #35adb5;
}
.why-polish-grid p,
.why-polish-grid .sec-sub {
    color: #35adb5;
}
.why-polish-grid .bullet-list li {
    color: #35adb5;
}
.why-polish-grid .bullet-list li::before {
    color: #35adb5;
}

/* ============================================================
   PROCESS SECTION
   ============================================================ */
.process-section {
    background: #fff;
}

/* Header teal */
.process-header {
    background: #35adb5;
    text-align: center;
    padding: 28px 20px;
}
.process-header h2 {
    font-family: var(--font-head);
    font-size: 28px;
    font-weight: 800;
    color: #fff;
    margin: 0;
}

/* Body putih */
.process-body {
    padding: 40px 0 60px;
}
.process-intro-text {
    text-align: center;
    font-size: 15px;
    color: #555;
    line-height: 1.75;
    max-width: 780px;
    margin: 0 auto 14px;
}

/* Grid gambar + steps */
.process-intro-grid {
    display: grid;
    grid-template-columns: 360px 1fr;
    gap: 48px;
    align-items: start;
    margin-top: 36px;
}

/* Gambar */
.process-img-box {
    border-radius: 16px;
    overflow: hidden;
}
.process-img-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

/* Judul steps - warna kuning/gold */
.process-steps-wrap h3 {
    font-family: var(--font-head);
    font-size: 19px;
    font-weight: 700;
    color: #e6a817;
    margin-bottom: 22px;
}

/* Step item */
.process-step {
    margin-bottom: 20px;
}
.ps-body h4 {
    font-family: var(--font-head);
    font-size: 15.5px;
    font-weight: 700;
    color: #35adb5;
    margin-bottom: 5px;
}
.ps-body p {
    font-size: 14.5px;
    color: #555;
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
   WHAT CAN WE OFFER + MAINTENANCE (1 SECTION)
   ============================================================ */

/* BAGIAN 1 */
.offer-grid {
    display: grid;
    grid-template-columns: 1fr 200px;
    gap: 40px;
    align-items: start;
    padding-bottom: 48px;
    border-bottom: 1px solid #eee;
    margin-bottom: 48px;
}
.offer-text h2 {
    font-family: var(--font-head);
    font-size: clamp(20px, 2.5vw, 28px);
    font-weight: 800;
    color: #35adb5;
    margin-bottom: 14px;
    line-height: 1.25;
}
.offer-text p {
    font-size: 14.5px;
    color: #444;
    line-height: 1.75;
    margin-bottom: 10px;
}
.offer-bullet {
    list-style: none;
    padding: 0;
    margin: 10px 0 0;
}
.offer-bullet li {
    font-size: 14px;
    color: #444;
    line-height: 1.6;
    padding-left: 14px;
    margin-bottom: 4px;
    position: relative;
}
.offer-bullet li::before {
    content: '•';
    position: absolute;
    left: 0;
    color: #444;
}
.offer-img-box {
    border-radius: 12px;
    overflow: hidden;
}
.offer-img-box img {
    width: 100%;
    display: block;
    object-fit: contain;
}

/* BAGIAN 2 */
.maint-grid {
    display: grid;
    grid-template-columns: 1fr 380px;
    gap: 48px;
    align-items: start;
}
.maint-text h2 {
    font-family: var(--font-head);
    font-size: clamp(20px, 2.5vw, 28px);
    font-weight: 800;
    color: #35adb5;
    margin-bottom: 14px;
    line-height: 1.25;
}
.maint-text p {
    font-size: 14.5px;
    color: #444;
    line-height: 1.75;
    margin-bottom: 12px;
}
.maint-text strong {
    color: #222;
    font-weight: 700;
}
.maint-bullet {
    list-style: disc;
    padding-left: 18px;
    margin-bottom: 14px;
}
.maint-bullet li {
    font-size: 14px;
    color: #444;
    line-height: 1.7;
    margin-bottom: 6px;
}
.maint-img-box {
    border-radius: 16px;
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
<section class="marble-hero"
    style="background: url('{{ asset('images/marble-page/marble.jpg') }}') center/cover no-repeat;">
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
<section class="green-bg">
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
                <div class="marble-img-box">
                    <img src="{{ asset('images/marble-page/marble-room.jpg') }}"
                         alt="Marble Floor">
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
                <p style="color: #35adb5;">The various types of flooring that can be polished include having different shapes such as marble tiles; the following are some examples of marble floors that can be polished:</p>
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

            <div class="marble-img-panel">
                <div class="marble-img-box">
                    <img src="{{ asset('images/marble-page/marble-why.jpg') }}"
                         alt="Marble Floor">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="process-section">
    {{-- Header teal --}}
    <div class="process-header">
        <h2>Marble Polishing Process</h2>
    </div>

    {{-- Content putih --}}
    <div class="process-body">
        <div class="container">
            <p class="process-intro-text">We are experienced marble floor polishing professionals, using specialist equipment and products to ensure successful results. Marble floor polishing is the process of renewing and restoring marble surfaces that have become worn, dull or damaged over time. Our process not only enhances the aesthetic appeal of marble, but also prolongs its life.</p>
            <p class="process-intro-text">It involves a series of specialist techniques and treatments to restore the natural beauty and lustre of marble.</p>

            <div class="process-intro-grid">
                {{-- Gambar kiri --}}
                <div class="process-img-box">
                    <img src="{{ asset('images/marble-page/marble-process.jpg') }}" alt="Marble Process">
                </div>

                {{-- Steps kanan --}}
                <div class="process-steps-wrap">
                    <h3>Our process for polishing marble includes:</h3>

                    <div class="process-step">
                        <div class="ps-body">
                            <h4>#1. Marble Cleaning</h4>
                            <p>Cleaning the marble from dirt, dust and old sealant from the marble surface and grout.</p>
                        </div>
                    </div>
                    <div class="process-step">
                        <div class="ps-body">
                            <h4>#2. Marble Repair</h4>
                            <p>Repairing cracks, scratches or other damage to the marble surface. This may include patching and smoothing imperfections.</p>
                        </div>
                    </div>
                    <div class="process-step">
                        <div class="ps-body">
                            <h4>#3. Sanding & Honing Marble</h4>
                            <p>Using abrasive materials and techniques to level the surface, remove scratches and create a clean finish.</p>
                        </div>
                    </div>
                    <div class="process-step">
                        <div class="ps-body">
                            <h4>#4. Polishing Marble</h4>
                            <p>Rubbing the marble with progressively finer abrasives and polishing powders to achieve a high gloss finish.</p>
                        </div>
                    </div>
                    <div class="process-step">
                        <div class="ps-body">
                            <h4>#5. Marble Sealing</h4>
                            <p>Applying a protective sealant to prevent future stains and damage in the future.</p>
                        </div>
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
     WHAT CAN WE OFFER + MAINTENANCE TIPS (1 SECTION)
     ============================================================ --}}
<section class="white-bg">
    <div class="container">

        {{-- BAGIAN 1: What Can We Offer --}}
        <div class="offer-grid">
            <div class="offer-text">
                <h2>What Can We Offer And The Result We Have Done Before?</h2>
                <p>Floorshine are Singapore floor polishing experts that you should rely on to maintain the entire surface of your floor. After a thorough surface inspection, we will recommend and also provide a tailor-made polishing solution.</p>
                <p>Our services primarily emphasize restoring the appearance of your floor surface and extending its service life. Floor shine is a company that focuses on the polishing sector, and the results we have:</p>
                <ul class="offer-bullet">
                    <li>Your scratches/stains/scratches are neatly camouflaged</li>
                    <li>Your floor looks shiny</li>
                    <li>Dullness is no longer visible on your floor</li>
                </ul>
            </div>
            <div class="offer-img-box">
                <img src="{{ asset('images/floorshine-logo.jpg') }}" alt="Floorshine Logo">
            </div>
        </div>

        {{-- BAGIAN 2: Maintenance Tips --}}
        <div class="maint-grid">
            <div class="maint-text">
                <h2>How To Keep Your Marble Floor Well Maintained?</h2>
                <p>Keeping the floor clean and shiny is not enough. In order to keep the shine of the marble durable and not easily damaged, the floor needs to be treated with special floor protectors and other treatments. Polishing marble looks easy, but you need to know that all these steps must be carried out by professional and experienced technicians, because if you get it wrong, instead of the resulting shiny floor, your floor can actually be damaged. If you are looking for a professional floor polishing service try Floorshine.</p>
                <p><strong>Things to Consider for Marble Floors:</strong></p>
                <ul class="maint-bullet">
                    <li>Avoid using strong chemical cleaners as they will damage the marble floor.</li>
                    <li>Avoid using a vacuum cleaner with plastic or metal accessories that can damage the surface. Vacuum cleaners with rubber wheels can be used as the chances of scratching the surface are much lower.</li>
                    <li>Blot spillages rather than wiping them on the floor as this can cause the liquid to spread to other areas and soak into the surface causing long-term stains.</li>
                    <li>Choose marble polishing when the floor starts to look dull to restore its lustre.</li>
                </ul>
                <p>Maintaining a marble floor after polishing may seem like a hassle, but it is the key to having a shiny and long-lasting marble floor.</p>
            </div>
            <div class="maint-img-box">
                <img src="{{ asset('images/marble-page/marble-offer.jpg') }}" alt="Marble Floor">
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
