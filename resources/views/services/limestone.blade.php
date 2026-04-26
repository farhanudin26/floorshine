@extends('layouts.app')

@section('title', 'Limestone Floor Polishing Services in Singapore | Floorshine')
@section('meta_description', 'Professional limestone floor polishing services in Singapore. Restoring the lustre and beauty of your limestone. Get a free quote today.')

@push('styles')
<style>
/* ============================================================
   HERO — warna #35adb5
   CATATAN: Saat gambar limestone sudah ada, tambahkan:
   url("{{ asset('images/floors/limestone-hero.jpg') }}") center/cover no-repeat
   setelah gradient di bawah
   ============================================================ */
.limestone-hero {
    background: linear-gradient(135deg, rgba(30,120,128,0.95) 0%, rgba(53,173,181,0.95) 100%);
    padding: 80px 0 70px;
    position: relative;
}
.limestone-hero::after {
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
.limestone-hero h1 {
    font-family: var(--font-head);
    font-size: clamp(28px, 4.2vw, 52px); font-weight: 800; color: #fff;
    line-height: 1.12; letter-spacing: -1.5px; margin-bottom: 18px; max-width: 640px;
}
.limestone-hero p {
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
    /* CATATAN: Saat gambar sudah ada, ganti isi .img-box dengan:
       <img src="{{ asset('images/floors/limestone-room.jpg') }}"
            alt="Limestone Floor" style="width:100%;height:100%;object-fit:cover;"> */
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
       background: url("{{ asset('images/floors/limestone-why.jpg') }}") center/cover;
       Hapus display:flex, align-items, justify-content, font-size, color */
}

/* ============================================================
   PROCESS SECTION — gradient teal
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
       background: url("{{ asset('images/floors/limestone-process.jpg') }}") center/cover;
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
.ps-body p  { font-size: 14px; color: rgba(255,255,255,0.78); line-height: 1.65; }

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
       background: url("{{ asset('images/floors/limestone-offer.jpg') }}") center/cover;
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
       background: url("{{ asset('images/floors/limestone-maintenance.jpg') }}") center/cover;
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

{{-- HERO --}}
<section class="limestone-hero">
    <div class="container">
        <div class="hero-badge"><i class="fas fa-layer-group"></i> Professional Floor Polishing — Singapore</div>
        <h1>Limestone Floor Polishing<br>Services in Singapore</h1>
        <p>Professional Limestone Floor Polishing Service | Restoring the Lustre and Beauty of Your Limestone</p>
        <a href="#quote" class="btn-quote-white">Get A Quote</a>
    </div>
</section>

{{-- ABOUT LIMESTONE --}}
<section class="white-bg">
    <div class="container">
        <div class="about-grid">
            <div class="about-text">
                <h2>Limestone</h2>
                <p>Limestone flooring is an elegant and natural choice for a variety of rooms, both for private residences and commercial spaces. Limestone, or limestone, is known for its natural beauty, unique texture and soft colours. Limestone flooring gives a warm and welcoming atmosphere to a space with colour characteristics varying from beige to beautiful grey. However, despite its durability, limestone flooring requires special attention in its maintenance to maintain its beauty.</p>

                <h2>Limestone Polishing</h2>
                <p>Floorshine limestone polishing service in Singapore offers the best solution for your limestone maintenance. Our team of professionals are experienced and use the latest technology to provide the best quality.</p>
                <p>Our services include limestone polishing, cleaning, protection and limestone maintenance. We are committed to providing high quality services and ensuring customer satisfaction.</p>
                <p>If you are looking for quality limestone polishing services, you have come to the right place. Because we are an experienced limestone polishing service in polishing.</p>
                <p>If your limestone floor has lost its lustre or has become dull due to scratches, contact us for a polishing service.</p>
            </div>

            <div class="img-panel">
                {{-- CATATAN: Saat gambar sudah ada, ganti isi .img-box dengan:
                     <img src="{{ asset('images/floors/limestone-room.jpg') }}"
                          alt="Limestone Floor" style="width:100%;height:100%;object-fit:cover;"> --}}
                <div class="img-box"><i class="fas fa-layer-group"></i></div>
            </div>
        </div>
    </div>
</section>

{{-- WHY LIMESTONE NEEDS POLISH --}}
<section class="gray-bg">
    <div class="container">
        <div class="why-grid">
            <div>
                <h2 class="sec-title">Why Limestone Need Polish</h2>
                <p class="sec-sub" style="margin-bottom:20px;">Limestone flooring is a popular choice of material for creating an elegant and natural look in both interior and exterior spaces. However, over time, limestone floors can suffer from deterioration, such as stains, scratches, or a dull surface. Limestone floor polishing is essential to maintain its beauty and durability. Our team of experts offers a limestone floor polishing service that is specifically designed to restore the lustre and natural beauty of your limestone.</p>
                <p style="font-size:15px; color:var(--gray-600); line-height:1.75; margin-bottom:18px;">Here are some conditions that make limestone floors need polishing:</p>
                <ul class="bullet-list">
                    <li>Dull or Faded Surface</li>
                    <li>Exposed to Stains and Liquid Spillages</li>
                    <li>Scratches and Surface Damage</li>
                    <li>Prevent Further Damage</li>
                    <li>Restore Aesthetics and Properly Value Inside Damage from Environmental Exposure</li>
                </ul>
            </div>

            {{-- CATATAN: Ganti isi .why-img dengan:
                 <img src="{{ asset('images/floors/limestone-why.jpg') }}"
                      alt="Limestone Why Polish" style="width:100%;height:100%;object-fit:cover;"> --}}
            <div class="why-img"><i class="fas fa-layer-group"></i></div>
        </div>
    </div>
</section>

{{-- LIMESTONE POLISHING PROCESS --}}
<section class="process-section">
    <div class="container">
        <div class="text-center">
            <h2 class="sec-title" style="color:#fff; margin-bottom:14px;">Limestone Polishing Process</h2>
            <p class="sec-sub" style="color:rgba(255,255,255,0.85); margin:0 auto;">We are experienced limestone floor polishing professionals, using specialist equipment and products to ensure successful results. Limestone floor polishing is the process of renewing and restoring limestone surfaces that have become worn, dull or damaged over time. Our process not only enhances the aesthetic appeal of limestone, but also prolongs its life.</p>
            <p style="font-size:15px; color:rgba(255,255,255,0.7); margin-top:14px; max-width:680px; margin-left:auto; margin-right:auto; line-height:1.7;">It involves a series of specialist techniques and treatments to restore the natural beauty and lustre of limestone.</p>
        </div>

        <div class="process-intro-grid">
            {{-- CATATAN: Ganti isi .process-img-box dengan:
                 <img src="{{ asset('images/floors/limestone-process.jpg') }}"
                      alt="Limestone Process" style="width:100%;height:100%;object-fit:cover;"> --}}
            <div class="process-img-box"><i class="fas fa-tools"></i></div>

            <div class="process-steps-wrap">
                <h3>Our process for limestone includes:</h3>

                <div class="process-step">
                    <div class="ps-num">1</div>
                    <div class="ps-body">
                        <h4>Floor Surface Inspection</h4>
                        <p>We check the limestone floors to be more prone to scratches or damage, so a thorough inspection is essential. If scratches or cracks are found, we will make repairs to the floor surface by filling the grout or damage using the appropriate filling material.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="ps-num">2</div>
                    <div class="ps-body">
                        <h4>Floor Surface Smoothing</h4>
                        <p>Selection of Material: Using a specialised smoothing machine and fine light abrasive pad, we will level the surface of the limestone floor to remove any scratches, light stains, or unevenness. This process also aims to open up the surface of the rock so that it can more easily absorb polishing materials and sealants later.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="ps-num">3</div>
                    <div class="ps-body">
                        <h4>Polishing Process</h4>
                        <p>Polishing with a Polisher Machine: We use a specialised pad polishing machine to polish the limestone floor. It moves machine smoothly to restore the lustre of the natural stone surface without damaging its original structure or colour. Use of Specialised Polishing Materials: For more sensitive limestone floors, we use a polishing agent specially designed for natural stone to achieve an even shine without damaging the texture or composition of the material.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="ps-num">4</div>
                    <div class="ps-body">
                        <h4>Cleaning of Polishing Remains</h4>
                        <p>After polishing, we will clean the limestone floor to remove any residual dust or chemicals left behind by the polishing process.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="ps-num">5</div>
                    <div class="ps-body">
                        <h4>Coating or Sealant Application</h4>
                        <p>Once the polishing process is complete, we highly recommend the application of a coating or sealant to protect the limestone floor and prolong its durability.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="ps-num">6</div>
                    <div class="ps-body">
                        <h4>Finishing and Final Inspection</h4>
                        <p>After the application of the sealant, we will perform a final inspection to ensure that your limestone floor is completely ready for use. Inspection of Results: We ensure that the polishing results are satisfactory, with an even sheen and a smooth surface without scratches or blemishes. In addition, we check that the sealant has been applied well and evenly. Final Cleaning: We clean the floor once again to remove any residual sealant material that may be left behind.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 3 STEPS CTA --}}
<section class="steps-cta-section">
    <div class="container text-center">
        <h2 class="sec-title">3 Steps to Polishing Your Limestone Floor</h2>
        <p class="sec-sub" style="margin:0 auto;">Our simple booking process makes it easy to get your limestone floor polished by our professional team.</p>
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

{{-- WHAT CAN WE OFFER --}}
<section class="white-bg">
    <div class="container">
        <div class="offer-grid">
            <div class="offer-text">
                <h2>What Can We Offer And<br><span>The Result We Have Done Before?</span></h2>
                <p>Floorshine are Singapore floor polishing experts that you should rely on to maintain the entire surface of your floor. After a thorough surface inspection, we will recommend and also provide a follow-up limestone polishing solution.</p>
                <p>Floor shine is a company that focuses on the polishing sector, and the results we have:</p>
                <div class="offer-results">
                    <div class="offer-result-item"><i class="fas fa-check-circle"></i><span>Your scratches/stains/patches are neatly camouflaged</span></div>
                    <div class="offer-result-item"><i class="fas fa-check-circle"></i><span>Your floor looks shiny</span></div>
                    <div class="offer-result-item"><i class="fas fa-check-circle"></i><span>Dullness is no longer visible on your floor</span></div>
                </div>
            </div>
            <div class="offer-img"><i class="fas fa-layer-group"></i></div>
        </div>
    </div>
</section>

{{-- MAINTENANCE TIPS --}}
<section class="maint-section">
    <div class="container">
        <div class="maint-grid">
            <div class="maint-text">
                <h2>How To Keep Your <span>Limestone Floor</span><br>Well Maintained?</h2>
                <p>Maintaining a limestone floor property is essential to preserve its appearance and durability. Although limestone is a stone that is relatively soft and susceptible to damage, it requires special attention to keep it well-maintained, clean and shiny. To maintain the natural lustre of limestone floors, regular polishing is ideally done every 6–12 months, as this will keep the stone surface smooth and shiny. Polishing also helps remove scratches and stains that cannot be removed with regular cleaning. Professional polishing will give you the best results without damaging the stone surface. If you are looking for a professional floor polishing service, try Floorshine.</p>

                <p style="font-family:var(--font-head); font-size:16px; font-weight:700; color:var(--navy); margin:20px 0 14px;">Things to Consider for Limestone Floors:</p>

                <div class="maint-tip"><i class="fas fa-check-circle"></i><span>Avoid Long-term Spills.</span></div>
                <div class="maint-tip"><i class="fas fa-check-circle"></i><span>Use Mats for Furniture and Decorations.</span></div>
                <div class="maint-tip"><i class="fas fa-check-circle"></i><span>Protect from Direct Sunlight.</span></div>
                <div class="maint-tip"><i class="fas fa-check-circle"></i><span>Avoid Using Acid-based Cleaners.</span></div>
                <div class="maint-tip"><i class="fas fa-check-circle"></i><span>Maintain Routine Cleanliness.</span></div>
                <div class="maint-tip"><i class="fas fa-check-circle"></i><span>Pay Attention to High Traffic Areas.</span></div>

                <p style="margin-top:20px; font-size:14.5px; color:var(--gray-600); line-height:1.7;">Maintaining a limestone floor after polishing may seem like a hassle, but it is the key to having a shiny and long-lasting limestone floor.</p>
            </div>

            {{-- CATATAN: Ganti dengan:
                 <img src="{{ asset('images/floors/limestone-maintenance.jpg') }}"
                      alt="Limestone Maintenance" style="width:100%;height:100%;object-fit:cover;"> --}}
            <div class="maint-img-box"><i class="fas fa-broom"></i></div>
        </div>
    </div>
</section>

{{-- FAQ --}}
<section class="faq-section">
    <div class="container">
        <h2 class="sec-title">FAQ — <span>Limestone Floor Polishing Service</span></h2>
        <p class="sec-sub">Common questions about our limestone floor polishing services in Singapore.</p>
        <div class="faq-cols">
            <div>
                <div class="faq-item open">
                    <div class="faq-q" onclick="toggleFaq(this)">
                        <span>Why do I need to polish my limestone floor?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-a">
                        Limestone floors require polishing to wear and tear over time, including loss of lustre, stain build-up, and scratches. Polishing helps to bring back the floor to a state of shine and also helps maintain the protective layer on the stone surface. Maintaining polishing will also keep the stone that can seep into the stone.
                    </div>
                </div>
                <div class="faq-item" style="margin-top:12px;">
                    <div class="faq-q" onclick="toggleFaq(this)">
                        <span>How often should I polish my limestone floor?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-a">
                        The frequency of polishing depends on the level of use of the limestone floor. In general, polishing is recommended for floors in high-traffic areas (such as lobbies, living rooms, or corridors) about every 6–12 months. Floors that are used fewer times may require polishing less frequently, about once in 2 years.
                    </div>
                </div>
                <div class="faq-item" style="margin-top:12px;">
                    <div class="faq-q" onclick="toggleFaq(this)">
                        <span>Will polishing damage the stone?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-a">
                        No. Limestone floor polishing is safely done by professional technicians who use tools and materials specifically designed for limestone. Polishing with the right techniques will help remove minor scratches, blemishes, or stains without damaging the stone. However, if done improperly it can cause damage, so it is very important to entrust this job to an experienced expert. Try Floorshine to prove it.
                    </div>
                </div>
            </div>
            <div>
                <div class="faq-item">
                    <div class="faq-q" onclick="toggleFaq(this)">
                        <span>How long does it take to polish a limestone floor?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-a">
                        The time taken to polish a limestone floor depends on the size and condition of the floor. In general, the polishing process can take between a few hours to a full day. We will provide a more accurate time estimate after seeing the condition of the floor. The cost of polishing a limestone floor depends on the size of the polished area, the condition of the floor and the type of treatment required. We provide a transparent price range which serves as an estimate of the condition. To get a more accurate quote, please contact us for a free consultation.
                    </div>
                </div>
                <div class="faq-item" style="margin-top:12px;">
                    <div class="faq-q" onclick="toggleFaq(this)">
                        <span>What sets Floorshine's limestone polishing service apart from others?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-a">
                        Floorshine provides limestone floor polishing services using experienced technicians with modern equipment and techniques. We use products specifically designed for limestone, so we are safe to use. More importantly, the limestone floor is not only perfectly polished, but also protected (for the long term) with a sealant. Our team always ensures satisfactory results without damaging the stone surface.
                    </div>
                </div>
                <div class="faq-item" style="margin-top:12px;">
                    <div class="faq-q" onclick="toggleFaq(this)">
                        <span>How do I prepare before the polishing service arrives?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-a">
                        Before our team arrives, we recommend clearing the area to be polished of furniture and other items. Make sure the floor is clean of loose dirt and large debris. Our team will handle the rest and prepare the necessary equipment and materials on site.
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
        <p class="sec-sub text-center" style="margin:0 auto;">Explore our complete range of professional floor polishing services in Singapore.</p>
        <div class="os-grid">
            <a href="{{ route('services.marble') }}" class="os-card"><span class="os-icon"><i class="fas fa-gem"></i></span><h4>Marble Polishing</h4></a>
            <a href="{{ route('services.granite') }}" class="os-card"><span class="os-icon"><i class="fas fa-mountain"></i></span><h4>Granite Polishing</h4></a>
            <a href="{{ route('services.homogeneous') }}" class="os-card"><span class="os-icon"><i class="fas fa-th-large"></i></span><h4>Homogeneous Tiles Polishing</h4></a>
            <a href="{{ route('services.parquet') }}" class="os-card"><span class="os-icon"><i class="fas fa-grip-lines"></i></span><h4>Parquet Polishing</h4></a>
            <a href="{{ route('services.outdoor') }}" class="os-card"><span class="os-icon"><i class="fas fa-sun"></i></span><h4>Outdoor Ceramic Tiles Polishing</h4></a>
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
