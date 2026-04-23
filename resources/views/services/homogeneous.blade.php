@extends('layouts.app')

@section('title', 'Homogeneous Tiles Polishing Services in Singapore | Floorshine')
@section('meta_description', 'Professional homogeneous tiles polishing services in Singapore. Restoring the lustre and beauty of your homogeneous tiles. Get a free quote today.')

@push('styles')
<style>
/* ============================================================
   HERO — warna #35adb5
   ============================================================ */
.homogeneous-hero {
    background: linear-gradient(135deg, rgba(30,120,128,0.92) 0%, rgba(53,173,181,0.88) 100%),
                url("{{ asset('images/floors/homogeneous-hero.jpg') }}") center/cover no-repeat;
    padding: 80px 0 70px;
    position: relative;
}
.homogeneous-hero::after {
    content: '';
    position: absolute;
    bottom: 0; left: 0; right: 0;
    height: 4px;
    background: linear-gradient(90deg, #35adb5, #fff, #35adb5);
}
.hero-badge {
    display: inline-flex; align-items: center; gap: 7px;
    background: rgba(255,255,255,0.15); color: rgba(255,255,255,0.9);
    padding: 5px 14px; border-radius: 100px; font-size: 12.5px;
    font-weight: 500; margin-bottom: 18px; backdrop-filter: blur(4px);
}
.homogeneous-hero h1 {
    font-family: var(--font-head);
    font-size: clamp(30px, 4.5vw, 54px); font-weight: 800; color: #fff;
    line-height: 1.12; letter-spacing: -1.5px; margin-bottom: 18px; max-width: 660px;
}
.homogeneous-hero p {
    color: rgba(255,255,255,0.88); font-size: 15.5px;
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
    font-family: var(--font-head); font-size: clamp(22px, 3vw, 36px);
    font-weight: 800; color: var(--navy); line-height: 1.2;
    letter-spacing: -0.5px; margin-bottom: 14px;
}
.sec-title span { color: #35adb5; }
.sec-sub { font-size: 15.5px; color: var(--gray-600); line-height: 1.75; max-width: 700px; }
.text-center { text-align: center; }
.gray-bg  { background: var(--gray-50); }
.white-bg { background: #fff; }

/* About grid */
.about-grid { display: grid; grid-template-columns: 1fr 420px; gap: 52px; align-items: start; }
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
}

/* Bullet list */
.bullet-list { list-style: none; margin: 16px 0; }
.bullet-list li {
    display: flex; align-items: flex-start; gap: 10px;
    font-size: 14.5px; color: var(--gray-700, #374151);
    margin-bottom: 9px; line-height: 1.55;
}
.bullet-list li::before { content: '▸'; color: #35adb5; font-size: 13px; margin-top: 2px; flex-shrink: 0; }

/* Why grid */
.why-grid { display: grid; grid-template-columns: 1fr 380px; gap: 52px; align-items: start; }
.why-img {
    border-radius: 20px; overflow: hidden; background: #e8f7f8;
    aspect-ratio: 4/3; display: flex; align-items: center; justify-content: center;
    font-size: 80px; color: #35adb5;
}

/* Process */
.process-section { background: linear-gradient(135deg, #1e7880 0%, #35adb5 100%); }
.process-intro-grid { display: grid; grid-template-columns: 360px 1fr; gap: 52px; align-items: start; margin-top: 48px; }
.process-img-box {
    border-radius: 20px; overflow: hidden; background: rgba(255,255,255,0.12);
    aspect-ratio: 4/5; display: flex; align-items: center; justify-content: center;
    font-size: 80px; color: rgba(255,255,255,0.5);
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

/* Steps CTA */
.steps-cta-section { background: var(--gray-50); }
.steps-cta-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 24px; margin-top: 44px; }
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
    background: #35adb5; color: #fff; padding: 13px 32px;
    border-radius: 50px; text-decoration: none; font-size: 15px;
    font-weight: 700; font-family: var(--font-head); margin-top: 40px; transition: background 0.2s;
}
.btn-wa-cta:hover { background: #1e7880; color: #fff; }

/* Offer */
.offer-grid { display: grid; grid-template-columns: 1fr 380px; gap: 52px; align-items: center; }
.offer-text h2 {
    font-family: var(--font-head); font-size: clamp(22px,2.8vw,34px);
    font-weight: 800; color: var(--navy); line-height: 1.2; letter-spacing: -0.5px; margin-bottom: 16px;
}
.offer-text h2 span { color: #35adb5; }
.offer-text p { font-size: 15px; color: var(--gray-600); line-height: 1.8; margin-bottom: 14px; }
.offer-results { margin-top: 24px; display: flex; flex-direction: column; gap: 10px; }
.offer-result-item { display: flex; align-items: center; gap: 10px; font-size: 14.5px; color: var(--gray-800); font-weight: 500; }
.offer-result-item i { color: #35adb5; font-size: 15px; flex-shrink: 0; }
.offer-img {
    border-radius: 20px; overflow: hidden; background: #e8f7f8; aspect-ratio: 4/3;
    display: flex; align-items: center; justify-content: center; font-size: 80px; color: #35adb5;
}

/* Maintenance */
.maint-section { background: var(--gray-50); }
.maint-grid { display: grid; grid-template-columns: 1fr 400px; gap: 52px; align-items: start; }
.maint-text h2 {
    font-family: var(--font-head); font-size: clamp(22px,2.8vw,34px);
    font-weight: 800; color: var(--navy); line-height: 1.2; letter-spacing: -0.5px; margin-bottom: 16px;
}
.maint-text h2 span { color: #35adb5; }
.maint-text p { font-size: 15px; color: var(--gray-600); line-height: 1.8; margin-bottom: 16px; }
.maint-tip {
    display: flex; align-items: flex-start; gap: 12px; margin-bottom: 13px;
    padding: 14px 16px; background: #fff; border-radius: 10px;
    border-left: 3px solid #35adb5; font-size: 14px; color: var(--gray-700,#374151); line-height: 1.6;
}
.maint-tip i { color: #35adb5; margin-top: 2px; flex-shrink: 0; }
.maint-img-box {
    border-radius: 20px; overflow: hidden; background: #e8f7f8; aspect-ratio: 3/4;
    display: flex; align-items: center; justify-content: center;
    font-size: 80px; color: #35adb5; position: sticky; top: 90px;
}

/* FAQ */
.faq-section { background: #fff; }
.faq-cols { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-top: 40px; }
.faq-item { background: var(--gray-50); border: 1px solid var(--gray-200); border-radius: 12px; overflow: hidden; transition: border-color 0.2s; }
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

/* Contact bottom */
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

/* Other services */
.other-services-section { background: #fff; padding: 56px 0; }
.os-grid { display: grid; grid-template-columns: repeat(4,1fr); gap: 16px; margin-top: 36px; }
.os-card {
    background: var(--gray-50); border: 1px solid var(--gray-200); border-radius: 14px;
    padding: 22px 18px; text-align: center; text-decoration: none; color: inherit; transition: all 0.2s; display: block;
}
.os-card:hover { border-color: #35adb5; background: #e8f7f8; transform: translateY(-3px); }
.os-icon { font-size: 28px; color: #35adb5; margin-bottom: 10px; display: block; }
.os-card h4 { font-family: var(--font-head); font-size: 13.5px; font-weight: 700; color: var(--navy); line-height: 1.35; }

/* Responsive */
@media (max-width: 1024px) {
    .about-grid,.why-grid,.process-intro-grid,.offer-grid,.maint-grid { grid-template-columns: 1fr; }
    .img-panel,.maint-img-box { position: static; }
    .why-img { order: -1; }
    .offer-img { display: none; }
    .os-grid { grid-template-columns: repeat(2,1fr); }
}
@media (max-width: 768px) {
    .steps-cta-grid,.faq-cols,.contact-bottom-grid { grid-template-columns: 1fr; }
    .process-img-box { display: none; }
}
</style>
@endpush

@section('content')

<section class="homogeneous-hero">
    <div class="container">
        <div class="hero-badge"><i class="fas fa-th-large"></i> Professional Floor Polishing — Singapore</div>
        <h1>Homogeneous Tiles Polishing<br>Services in Singapore</h1>
        <p>Professional Homogeneous Tiles Polishing Service | Restoring the Lustre and Beauty of Your Homogeneous Tiles</p>
        <a href="#quote" class="btn-quote-white">Get A Quote</a>
    </div>
</section>

<section class="white-bg">
    <div class="container">
        <div class="about-grid">
            <div class="about-text">
                <h2>Homogeneous Tiles</h2>
                <p>Homogeneous Tiles are high-quality ceramic tiles that have a uniform material composition throughout the layer, both on the surface and inside. Due to this consistent structure, homogeneous tiles offer exceptional resistance to scratches, impacts and staining. This makes them ideal for flooring in a wide range for spaces, including offices or high-traffic commercial spaces. While homogeneous tiles are known for their durability, regular polishing will help maintain the natural lustre and increase the durability of your flooring surface.</p>
                <h2>Homogeneous Tiles Polishing</h2>
                <p>Floorshine Homogeneous Tiles polishing service in Singapore offers the best solution for your Homogeneous Tiles maintenance. Our team of professionals are experienced and use the latest technology to provide the best quality.</p>
                <p>Our services include Homogeneous Tiles cleaning, protection and Homogeneous Tiles maintenance. We are committed to providing high quality services and ensuring customer satisfaction.</p>
                <p>If you are looking for quality Homogeneous Tiles polishing services, you have come to the right place. Because we are an experienced Homogeneous Tiles polishing service in polishing.</p>
                <p>If your homogeneous tiles floor has lost its lustre or has become dull due to scratches, contact us for a polishing service.</p>
            </div>
            <div class="img-panel">
                {{-- CATATAN: Simpan gambar di public/images/floors/homogeneous-room.jpg
                     Lalu ganti isi .img-box dengan:
                     <img src="{{ asset('images/floors/homogeneous-room.jpg') }}"
                          alt="Homogeneous Tiles" style="width:100%;height:100%;object-fit:cover;"> --}}
                <div class="img-box"><i class="fas fa-th-large"></i></div>
            </div>
        </div>
    </div>
</section>

<section class="gray-bg">
    <div class="container">
        <div class="why-grid">
            <div>
                <h2 class="sec-title">Why Homogeneous Need Polish</h2>
                <p class="sec-sub" style="margin-bottom:20px;">Homogeneous tiles require polishing for a few key reasons relating to maintenance and aesthetics. Although homogeneous flooring is renowned for its durability, daily use can lead to minor scratches, stains, or a dull-looking surface. The polishing process is an excellent way to restore the beauty of homogeneous without the need to replace the tiles entirely, which can save both cost and time. In addition, polishing also provides extra protection to the homogeneous tiles to keep it durable and looking beautiful in the long run.</p>
                <p style="font-size:15px;color:var(--gray-600);line-height:1.75;margin-bottom:18px;">Here are some conditions that make homogeneous tiles need polishing:</p>
                <ul class="bullet-list">
                    <li>Faded gloss of homogeneous tiles</li>
                    <li>Stains or Spills that are Hard to Remove</li>
                    <li>Surface scratches or Scuffs from Use</li>
                    <li>UV Effects and Fading Colours</li>
                    <li>Improving Floor Durability</li>
                </ul>
            </div>
            {{-- CATATAN: Ganti dengan: <img src="{{ asset('images/floors/homogeneous-why.jpg') }}"
                 alt="Why Polish" style="width:100%;height:100%;object-fit:cover;"> --}}
            <div class="why-img"><i class="fas fa-th-large"></i></div>
        </div>
    </div>
</section>

<section class="process-section">
    <div class="container">
        <div class="text-center">
            <h2 class="sec-title" style="color:#fff;margin-bottom:14px;">Homogeneous Tiles Polishing Process</h2>
            <p class="sec-sub" style="color:rgba(255,255,255,0.8);margin:0 auto;">We are experienced homogeneous tiles floor polishing professionals, using specialist equipment and products to ensure successful results. Homogeneous tiles floor polishing is the process of renewing and restoring homogeneous tiles surfaces that have become worn, dull or damaged over time. Our process not only enhances the aesthetic appeal of homogeneous tiles, but also prolongs its life.</p>
            <p style="font-size:15px;color:rgba(255,255,255,0.7);margin-top:14px;max-width:680px;margin-left:auto;margin-right:auto;line-height:1.7;">It involves a series of specialist techniques and treatments to restore the natural beauty and lustre of homogeneous tiles.</p>
        </div>
        <div class="process-intro-grid">
            {{-- CATATAN: Ganti dengan: <img src="{{ asset('images/floors/homogeneous-process.jpg') }}"
                 alt="Process" style="width:100%;height:100%;object-fit:cover;"> --}}
            <div class="process-img-box"><i class="fas fa-tools"></i></div>
            <div class="process-steps-wrap">
                <h3>Our process for polishing homogeneous tiles includes:</h3>
                <div class="process-step">
                    <div class="ps-num">1</div>
                    <div class="ps-body">
                        <h4>Floor Surface Inspection</h4>
                        <p>We first inspect the floor for scratches, cracks, or other damage. If any damage is found, we will address the issue first by using a special filler material to level the surface before the polishing process begins.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="ps-num">2</div>
                    <div class="ps-body">
                        <h4>Floor Surface Smoothing</h4>
                        <p>Using specialised polishing compounds, we will smooth the floor surface to remove any minor scratches, stubborn stains, or surface unevenness. This process ensures that the surface of the homogeneous tiles floor is even and ready for polishing.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="ps-num">3</div>
                    <div class="ps-body">
                        <h4>Polishing Process</h4>
                        <p>We use the right polishing equipment for homogeneous tiles, ensuring an even shine and no damage to the surface.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="ps-num">4</div>
                    <div class="ps-body">
                        <h4>Cleaning After Polishing</h4>
                        <p>Once the polishing is complete, we will clean any remaining dust or residue from the polishing process, ensuring that the floor is completely clean and smooth.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="ps-num">5</div>
                    <div class="ps-body">
                        <h4>Application of Coating or Sealant</h4>
                        <p>To protect the polishing result and keep the shine of the floor longer, we will apply a protective coating or sealant to protect homogeneous tiles from dirt, stains, and moisture that can damage the surface. This sealant will help maintain the shine for longer and make the floor easier to clean.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="ps-num">6</div>
                    <div class="ps-body">
                        <h4>Finishing and Final Inspection</h4>
                        <p>After all polishing stages are completed, we will perform a final inspection to ensure that the polishing results meet high-quality standards and the homogeneous tiles floor has an even lustre, free from scratches or stains.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="steps-cta-section">
    <div class="container text-center">
        <h2 class="sec-title">3 Steps to Polishing Your Homogeneous Tiles Floor</h2>
        <p class="sec-sub" style="margin:0 auto;">Our simple booking process makes it easy to get your homogeneous tiles floor polished by our professional team.</p>
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

<section class="white-bg">
    <div class="container">
        <div class="offer-grid">
            <div class="offer-text">
                <h2>What Can We Offer And<br><span>The Result We Have Done Before?</span></h2>
                <p>Floorshine are Singapore floor polishing experts that you should rely on to maintain the entire surface of your floor. After a thorough surface inspection, we will recommend and also provide a follow-up polishing solution.</p>
                <p>Our services primarily emphasise restoring the appearance of your floor surface and extending its service life. Floor shine is a company that focuses on the polishing sector, and the results we have:</p>
                <div class="offer-results">
                    <div class="offer-result-item"><i class="fas fa-check-circle"></i><span>Your scratches/stains/patches are neatly camouflaged</span></div>
                    <div class="offer-result-item"><i class="fas fa-check-circle"></i><span>Your floor looks shiny</span></div>
                    <div class="offer-result-item"><i class="fas fa-check-circle"></i><span>Dullness is no longer visible on your floor</span></div>
                </div>
            </div>
            <div class="offer-img"><i class="fas fa-th-large"></i></div>
        </div>
    </div>
</section>

<section class="maint-section">
    <div class="container">
        <div class="maint-grid">
            <div class="maint-text">
                <h2>How To Keep Your <span>Homogeneous Tiles Floor</span><br>Well Maintained?</h2>
                <p>Homogeneous tiles is a durable and easy-to-maintain material for homes and commercial spaces. While it is strong and durable, it still requires maintenance to keep it looking clean, shiny and in good condition. Regular polishing helps maintain the floor's natural gloss, protects it from damage, and providing protection against stains and scratches.</p>
                <p style="font-family:var(--font-head);font-size:16px;font-weight:700;color:var(--navy);margin:20px 0 14px;">Things to Consider for Homogeneous Tiles:</p>
                <div class="maint-tip"><i class="fas fa-check-circle"></i><span>Do regular cleaning.</span></div>
                <div class="maint-tip"><i class="fas fa-check-circle"></i><span>Immediately clean up spills or food spillages that may leave stains.</span></div>
                <div class="maint-tip"><i class="fas fa-check-circle"></i><span>Choose a cleaner that is safe for homogeneous tiles.</span></div>
                <div class="maint-tip"><i class="fas fa-check-circle"></i><span>Pay attention to humidity and sunlight.</span></div>
                <p style="margin-top:20px;font-size:14.5px;color:var(--gray-600);line-height:1.7;">Maintaining a homogeneous tiles floor after polishing may seem like a hassle, but it is the key to having a shiny and long-lasting homogeneous tiles.</p>
            </div>
            {{-- CATATAN: Ganti dengan: <img src="{{ asset('images/floors/homogeneous-maintenance.jpg') }}"
                 alt="Maintenance" style="width:100%;height:100%;object-fit:cover;"> --}}
            <div class="maint-img-box"><i class="fas fa-broom"></i></div>
        </div>
    </div>
</section>

<section class="faq-section">
    <div class="container">
        <h2 class="sec-title">FAQ — <span>Homogeneous Tiles Polishing Service</span></h2>
        <p class="sec-sub">Common questions about our homogeneous tiles polishing services in Singapore.</p>
        <div class="faq-cols">
            <div>
                <div class="faq-item open">
                    <div class="faq-q" onclick="toggleFaq(this)"><span>Why do homogeneous tiles need to be polished?</span><i class="fas fa-chevron-down"></i></div>
                    <div class="faq-a">Over time, homogeneous tiles can lose their shine due to daily use, dirt, dust, and minor scratches. Polishing helps restore the tiles' natural glossiness, enhances the appearance of the floor, and protects the surface from further damage.</div>
                </div>
                <div class="faq-item" style="margin-top:12px;">
                    <div class="faq-q" onclick="toggleFaq(this)"><span>Is polishing safe for homogeneous tiles?</span><i class="fas fa-chevron-down"></i></div>
                    <div class="faq-a">Yes, polishing done using the right floor polishing equipment is perfectly safe for homogeneous floors. The polishing process is done by experienced professionals who use equipment and products specifically designed for homogeneous tiles, ensuring the floor is polished safely without causing damage.</div>
                </div>
                <div class="faq-item" style="margin-top:12px;">
                    <div class="faq-q" onclick="toggleFaq(this)"><span>How long does homogeneous tiles polishing take?</span><i class="fas fa-chevron-down"></i></div>
                    <div class="faq-a">The homogeneous tiles polishing process generally takes a few hours, depending on the specific area and condition of the floor. A professional polishing service will usually give you a more precise time estimate after inspecting the condition of your floor.</div>
                </div>
            </div>
            <div>
                <div class="faq-item">
                    <div class="faq-q" onclick="toggleFaq(this)"><span>How much does homogeneous tiles polishing cost?</span><i class="fas fa-chevron-down"></i></div>
                    <div class="faq-a">The cost of homogeneous floor polishing varies depending on the size of the polished area, the condition of the floor, and the type of service required. To get a more accurate estimate, contact us for a free quote and we will provide a cost estimate according to your needs.</div>
                </div>
                <div class="faq-item" style="margin-top:12px;">
                    <div class="faq-q" onclick="toggleFaq(this)"><span>What to do after polishing?</span><i class="fas fa-chevron-down"></i></div>
                    <div class="faq-a">After polishing, avoid stepping on the floor for a while to allow the new protective layer to set and harden properly. You can also place doormats or floor protectors to clean up any liquid spills quickly, to prevent any future staining or damage.</div>
                </div>
                <div class="faq-item" style="margin-top:12px;">
                    <div class="faq-q" onclick="toggleFaq(this)"><span>Can homogeneous floor polishing be done by yourself?</span><i class="fas fa-chevron-down"></i></div>
                    <div class="faq-a">Floor polishing requires specialised equipment and expertise that most homeowners do not have. It is highly recommended to use professional services to ensure quality results and to get the best treatment and avoid unwanted damage.</div>
                </div>
            </div>
        </div>
    </div>
</section>

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
            <div>
                <div class="cb-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.6704782073865!2d103.83018757499225!3d1.3493099986586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da17057effffff%3A0x7efb5b33efba1e14!2sMidview%20City!5e0!3m2!1sen!2ssg!4v1700000000001!5m2!1sen!2ssg"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="other-services-section">
    <div class="container">
        <h2 class="sec-title text-center">Our Other Services</h2>
        <p class="sec-sub text-center" style="margin:0 auto;">Explore our complete range of professional floor polishing services in Singapore.</p>
        <div class="os-grid">
            <a href="{{ route('services.marble') }}" class="os-card"><span class="os-icon"><i class="fas fa-gem"></i></span><h4>Marble Polishing</h4></a>
            <a href="{{ route('services.granite') }}" class="os-card"><span class="os-icon"><i class="fas fa-mountain"></i></span><h4>Granite Polishing</h4></a>
            <a href="{{ route('services.parquet') }}" class="os-card"><span class="os-icon"><i class="fas fa-grip-lines"></i></span><h4>Parquet Polishing</h4></a>
            <a href="{{ route('services.limestone') }}" class="os-card"><span class="os-icon"><i class="fas fa-layer-group"></i></span><h4>Limestone Polishing</h4></a>
            <a href="{{ route('services.outdoor') }}" class="os-card"><span class="os-icon"><i class="fas fa-sun"></i></span><h4>Outdoor Ceramic Tiles Polishing</h4></a>
            <a href="{{ route('services.porcelain') }}" class="os-card"><span class="os-icon"><i class="fas fa-circle"></i></span><h4>Porcelain Polishing</h4></a>
            <a href="{{ route('services.terrazzo') }}" class="os-card"><span class="os-icon"><i class="fas fa-border-all"></i></span><h4>Terrazzo Polishing</h4></a>
            <a href="{{ route('home') }}" class="os-card" style="background:#e8f7f8;border-color:#35adb5;"><span class="os-icon"><i class="fas fa-home"></i></span><h4>Back to Home</h4></a>
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
