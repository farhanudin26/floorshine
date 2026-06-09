@extends('layouts.app')

@section('title', 'FAQ – Frequently Asked Questions | Floorshine Singapore Floor Polishing')

@push('styles')
<style>
    /* ============================================================
       FAQ HERO
    ============================================================ */
    .faq-hero {
        background: linear-gradient(135deg, #35adb5 0%, #2a9aa2 100%);
        padding: 72px 0 60px;
        position: relative;
        overflow: hidden;
    }

    .faq-hero::before {
        content: '';
        position: absolute;
        top: -100px; right: -100px;
        width: 380px; height: 380px;
        background: rgba(255,255,255,0.05);
        border-radius: 50%;
    }

    .faq-hero::after {
        content: '';
        position: absolute;
        bottom: -60px; left: -60px;
        width: 240px; height: 240px;
        background: rgba(255,255,255,0.04);
        border-radius: 50%;
    }

    .faq-hero-inner {
        position: relative; z-index: 1;
        text-align: center;
        max-width: 680px;
        margin: 0 auto;
    }

    .faq-hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        background: rgba(255,255,255,0.18);
        color: #fff;
        padding: 5px 16px;
        border-radius: 100px;
        font-size: 12.5px;
        font-weight: 600;
        margin-bottom: 18px;
        letter-spacing: 0.4px;
    }

    .faq-hero h1 {
        font-family: var(--font-head);
        font-size: clamp(28px, 4vw, 46px);
        font-weight: 800;
        color: #fff;
        line-height: 1.15;
        margin-bottom: 14px;
        letter-spacing: -0.5px;
    }

    .faq-hero p {
        color: rgba(255,255,255,0.85);
        font-size: 15.5px;
        line-height: 1.7;
        margin: 0;
    }

    /* ============================================================
       FAQ MAIN CONTENT
    ============================================================ */
    .faq-main {
        padding: 72px 0 80px;
        background: #f8fafb;
    }

    .faq-layout {
        display: grid;
        grid-template-columns: 240px 1fr;
        gap: 48px;
        align-items: start;
    }

    /* ---- Sidebar Nav ---- */
    .faq-sidebar {
        position: sticky;
        top: 100px;
    }

    .faq-sidebar-title {
        font-family: var(--font-head);
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        color: #35adb5;
        margin-bottom: 14px;
        padding-bottom: 10px;
        border-bottom: 2px solid #e8f7f8;
    }

    .faq-nav-list {
        list-style: none;
        padding: 0; margin: 0;
    }

    .faq-nav-list li {
        margin-bottom: 2px;
    }

    .faq-nav-list a {
        display: block;
        padding: 8px 12px;
        border-radius: 8px;
        font-size: 13px;
        color: #555;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.2s;
        line-height: 1.4;
    }

    .faq-nav-list a:hover,
    .faq-nav-list a.active {
        background: #e8f7f8;
        color: #35adb5;
        font-weight: 600;
    }

    /* ---- FAQ Categories ---- */
    .faq-category {
        margin-bottom: 52px;
    }

    .faq-category:last-child { margin-bottom: 0; }

    .faq-cat-header {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 20px;
        padding-bottom: 14px;
        border-bottom: 2px solid #e8f7f8;
    }

    .faq-cat-icon {
        width: 40px; height: 40px;
        background: #e8f7f8;
        border-radius: 10px;
        display: flex; align-items: center; justify-content: center;
        color: #35adb5;
        font-size: 16px;
        flex-shrink: 0;
    }

    .faq-cat-header h2 {
        font-family: var(--font-head);
        font-size: 18px;
        font-weight: 800;
        color: var(--navy);
        margin: 0;
        letter-spacing: -0.3px;
    }

    .faq-cat-count {
        margin-left: auto;
        background: #e8f7f8;
        color: #35adb5;
        font-size: 12px;
        font-weight: 700;
        padding: 3px 10px;
        border-radius: 100px;
    }

    /* ---- FAQ Items ---- */
    .faq-item {
        background: #fff;
        border: 1px solid #e5eef0;
        border-radius: 12px;
        margin-bottom: 10px;
        overflow: hidden;
        transition: border-color 0.2s, box-shadow 0.2s;
    }

    .faq-item:hover {
        border-color: #35adb5;
        box-shadow: 0 4px 16px rgba(53,173,181,0.08);
    }

    .faq-item.open {
        border-color: #35adb5;
        box-shadow: 0 4px 20px rgba(53,173,181,0.1);
    }

    .faq-q {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 16px;
        padding: 18px 20px;
        cursor: pointer;
        user-select: none;
    }

    .faq-q-left {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        flex: 1;
    }

    .faq-q-num {
        font-family: var(--font-head);
        font-size: 12px;
        font-weight: 700;
        color: #35adb5;
        background: #e8f7f8;
        width: 26px; height: 26px;
        border-radius: 6px;
        display: flex; align-items: center; justify-content: center;
        flex-shrink: 0;
        margin-top: 1px;
    }

    .faq-q h3 {
        font-family: var(--font-head);
        font-size: 14.5px;
        font-weight: 600;
        color: var(--navy);
        margin: 0;
        line-height: 1.5;
    }

    .faq-item.open .faq-q h3 {
        color: #35adb5;
    }

    .faq-toggle {
        width: 28px; height: 28px;
        background: #f0f4f8;
        border-radius: 50%;
        display: flex; align-items: center; justify-content: center;
        color: #35adb5;
        font-size: 12px;
        flex-shrink: 0;
        transition: all 0.3s;
        margin-top: 1px;
    }

    .faq-item.open .faq-toggle {
        background: #35adb5;
        color: #fff;
        transform: rotate(180deg);
    }

    .faq-a {
        display: none;
        padding: 0 20px 20px 58px;
        font-size: 14.5px;
        color: #555;
        line-height: 1.75;
        border-top: 1px solid #f0f4f8;
        padding-top: 16px;
    }

    .faq-item.open .faq-a {
        display: block;
    }

    /* ---- CTA Box ---- */
    .faq-cta-box {
        background: linear-gradient(135deg, #1a1a2e, #0f3460);
        border-radius: 16px;
        padding: 36px;
        text-align: center;
        margin-top: 48px;
    }

    .faq-cta-box h2 {
        font-family: var(--font-head);
        font-size: 22px;
        font-weight: 800;
        color: #fff;
        margin-bottom: 10px;
    }

    .faq-cta-box p {
        color: rgba(255,255,255,0.7);
        font-size: 14.5px;
        margin-bottom: 24px;
    }

    .faq-cta-btns {
        display: flex;
        gap: 12px;
        justify-content: center;
        flex-wrap: wrap;
    }

    .btn-faq-wa {
        background: #25D366;
        color: #fff;
        padding: 12px 24px;
        border-radius: 8px;
        text-decoration: none;
        font-size: 14px;
        font-weight: 700;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: background 0.2s;
    }

    .btn-faq-wa:hover { background: #1da851; color: #fff; }

    .btn-faq-enquiry {
        background: rgba(255,255,255,0.12);
        border: 1px solid rgba(255,255,255,0.25);
        color: #fff;
        padding: 12px 24px;
        border-radius: 8px;
        text-decoration: none;
        font-size: 14px;
        font-weight: 700;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: all 0.2s;
    }

    .btn-faq-enquiry:hover {
        background: rgba(255,255,255,0.2);
        color: #fff;
    }

    /* ============================================================
       RESPONSIVE
    ============================================================ */
    @media (max-width: 900px) {
        .faq-layout {
            grid-template-columns: 1fr;
        }
        .faq-sidebar {
            display: none;
        }
    }

    @media (max-width: 600px) {
        .faq-strip-inner {
            flex-wrap: wrap;
        }
        .faq-strip-item {
            border-right: none;
            border-bottom: 1px solid rgba(255,255,255,0.2);
            width: 100%;
            justify-content: center;
        }
        .faq-cta-btns {
            flex-direction: column;
        }
    }
</style>
@endpush

@section('content')

    {{-- ============================================================
         HERO
    ============================================================ --}}
    <section class="faq-hero">
        <div class="container">
            <div class="faq-hero-inner">
                <div class="faq-hero-badge">
                    <i class="fas fa-question-circle"></i>
                    Frequently Asked Questions
                </div>
                <h1>Got Questions About<br>Floor Polishing?</h1>
                <p>Find answers to the most common questions about our floor polishing and restoration services in Singapore. Can't find what you're looking for? Contact us directly.</p>
            </div>
        </div>
    </section>
    {{-- ============================================================
         MAIN FAQ CONTENT
    ============================================================ --}}
    <section class="faq-main">
        <div class="container">
            <div class="faq-layout">

                {{-- ===== SIDEBAR NAV ===== --}}
                <aside class="faq-sidebar" aria-label="FAQ Categories">
                    <div class="faq-sidebar-title">Jump to Category</div>
                    <ul class="faq-nav-list">
                        <li><a href="#cat-services"><i class="fas fa-broom" style="margin-right:8px;color:#35adb5;"></i>Our Services</a></li>
                        <li><a href="#cat-process"><i class="fas fa-cogs" style="margin-right:8px;color:#35adb5;"></i>Process & Results</a></li>
                        <li><a href="#cat-booking"><i class="fas fa-calendar-alt" style="margin-right:8px;color:#35adb5;"></i>Booking & Pricing</a></li>
                        <li><a href="#cat-aftercare"><i class="fas fa-shield-alt" style="margin-right:8px;color:#35adb5;"></i>Aftercare & Maintenance</a></li>
                    </ul>
                </aside>

                {{-- ===== FAQ ITEMS ===== --}}
                <div>

                    {{-- CATEGORY 1: Our Services --}}
                    <div class="faq-category" id="cat-services">
                        <div class="faq-cat-header">
                            <div class="faq-cat-icon"><i class="fas fa-broom"></i></div>
                            <h2>Our Services</h2>
                            <span class="faq-cat-count">5 questions</span>
                        </div>

                        <div class="faq-item open">
                            <div class="faq-q" onclick="this.closest('.faq-item').classList.toggle('open')">
                                <div class="faq-q-left">
                                    <span class="faq-q-num">1</span>
                                    <h3>What types of flooring do you specialise in?</h3>
                                </div>
                                <div class="faq-toggle"><i class="fas fa-chevron-down"></i></div>
                            </div>
                            <div class="faq-a">
                                Floorshine specialises in professional polishing and restoration services for <strong>marble, granite, parquet, terrazzo, homogeneous tiles, limestone, porcelain tiles,</strong> and <strong>outdoor ceramic tiles</strong>. Our team will assess your flooring condition and recommend the most suitable restoration method.
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-q" onclick="this.closest('.faq-item').classList.toggle('open')">
                                <div class="faq-q-left">
                                    <span class="faq-q-num">2</span>
                                    <h3>How do I know if my floor needs polishing?</h3>
                                </div>
                                <div class="faq-toggle"><i class="fas fa-chevron-down"></i></div>
                            </div>
                            <div class="faq-a">
                                Your floor may require polishing if it appears <strong>dull, scratched, stained, uneven, or has lost its original shine</strong>. Regular polishing helps restore the floor's appearance while protecting it from further wear and tear.
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-q" onclick="this.closest('.faq-item').classList.toggle('open')">
                                <div class="faq-q-left">
                                    <span class="faq-q-num">3</span>
                                    <h3>Can floor polishing remove scratches and stains?</h3>
                                </div>
                                <div class="faq-toggle"><i class="fas fa-chevron-down"></i></div>
                            </div>
                            <div class="faq-a">
                                In many cases, yes. Professional polishing can significantly reduce or remove <strong>surface scratches, minor stains, dull patches,</strong> and other visible imperfections. The achievable results depend on the floor material and the severity of the damage.
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-q" onclick="this.closest('.faq-item').classList.toggle('open')">
                                <div class="faq-q-left">
                                    <span class="faq-q-num">4</span>
                                    <h3>Do you provide services for both residential and commercial properties?</h3>
                                </div>
                                <div class="faq-toggle"><i class="fas fa-chevron-down"></i></div>
                            </div>
                            <div class="faq-a">
                                Yes. Floorshine provides floor polishing and restoration services for <strong>homes, offices, retail shops, showrooms, hotels, restaurants,</strong> and various commercial properties across Singapore.
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-q" onclick="this.closest('.faq-item').classList.toggle('open')">
                                <div class="faq-q-left">
                                    <span class="faq-q-num">5</span>
                                    <h3>Is floor polishing better than replacing the floor?</h3>
                                </div>
                                <div class="faq-toggle"><i class="fas fa-chevron-down"></i></div>
                            </div>
                            <div class="faq-a">
                                In many situations, professional polishing and restoration can <strong>significantly improve the appearance</strong> of existing flooring at a fraction of the cost of replacement. A site assessment will help determine the most cost-effective solution for your floor.
                            </div>
                        </div>
                    </div>

                    {{-- CATEGORY 2: Process & Results --}}
                    <div class="faq-category" id="cat-process">
                        <div class="faq-cat-header">
                            <div class="faq-cat-icon"><i class="fas fa-cogs"></i></div>
                            <h2>Process & Results</h2>
                            <span class="faq-cat-count">5 questions</span>
                        </div>

                        <div class="faq-item">
                            <div class="faq-q" onclick="this.closest('.faq-item').classList.toggle('open')">
                                <div class="faq-q-left">
                                    <span class="faq-q-num">6</span>
                                    <h3>What is included in the floor restoration process?</h3>
                                </div>
                                <div class="faq-toggle"><i class="fas fa-chevron-down"></i></div>
                            </div>
                            <div class="faq-a">
                                The restoration process may include <strong>cleaning, stain treatment, scratch removal, honing, polishing, sealing,</strong> and protective treatments. The exact process varies depending on the flooring material and its condition.
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-q" onclick="this.closest('.faq-item').classList.toggle('open')">
                                <div class="faq-q-left">
                                    <span class="faq-q-num">7</span>
                                    <h3>How long does floor polishing take?</h3>
                                </div>
                                <div class="faq-toggle"><i class="fas fa-chevron-down"></i></div>
                            </div>
                            <div class="faq-a">
                                Project duration depends on the floor type, size of the area, and the condition of the surface. <strong>Most residential projects can be completed within a day</strong>, while larger or more heavily damaged floors may require additional time.
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-q" onclick="this.closest('.faq-item').classList.toggle('open')">
                                <div class="faq-q-left">
                                    <span class="faq-q-num">8</span>
                                    <h3>Will polishing make my floor slippery?</h3>
                                </div>
                                <div class="faq-toggle"><i class="fas fa-chevron-down"></i></div>
                            </div>
                            <div class="faq-a">
                                No. Professionally polished floors are designed to <strong>restore shine and smoothness while maintaining safe usability</strong>. The final finish depends on the flooring material and the treatment selected.
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-q" onclick="this.closest('.faq-item').classList.toggle('open')">
                                <div class="faq-q-left">
                                    <span class="faq-q-num">9</span>
                                    <h3>Can you restore heavily damaged floors?</h3>
                                </div>
                                <div class="faq-toggle"><i class="fas fa-chevron-down"></i></div>
                            </div>
                            <div class="faq-a">
                                Many damaged floors can be successfully restored, including surfaces affected by <strong>scratches, stains, dullness, minor chips,</strong> and wear from daily use. Our technicians will evaluate the condition during the site survey and advise on the expected outcome.
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-q" onclick="this.closest('.faq-item').classList.toggle('open')">
                                <div class="faq-q-left">
                                    <span class="faq-q-num">10</span>
                                    <h3>Do I need to move my furniture before the service?</h3>
                                </div>
                                <div class="faq-toggle"><i class="fas fa-chevron-down"></i></div>
                            </div>
                            <div class="faq-a">
                                We recommend <strong>clearing movable items</strong> from the work area whenever possible. If large furniture pieces are involved, our team can advise on the most suitable arrangement during scheduling.
                            </div>
                        </div>
                    </div>

                    {{-- CATEGORY 3: Booking & Pricing --}}
                    <div class="faq-category" id="cat-booking">
                        <div class="faq-cat-header">
                            <div class="faq-cat-icon"><i class="fas fa-calendar-alt"></i></div>
                            <h2>Booking & Pricing</h2>
                            <span class="faq-cat-count">3 questions</span>
                        </div>

                        <div class="faq-item">
                            <div class="faq-q" onclick="this.closest('.faq-item').classList.toggle('open')">
                                <div class="faq-q-left">
                                    <span class="faq-q-num">11</span>
                                    <h3>Do you provide a free site survey?</h3>
                                </div>
                                <div class="faq-toggle"><i class="fas fa-chevron-down"></i></div>
                            </div>
                            <div class="faq-a">
                                Yes. We offer a <strong>complimentary on-site assessment</strong> to inspect the condition of your flooring and provide a customised quotation based on the required restoration work.
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-q" onclick="this.closest('.faq-item').classList.toggle('open')">
                                <div class="faq-q-left">
                                    <span class="faq-q-num">12</span>
                                    <h3>How do I pay for the service?</h3>
                                </div>
                                <div class="faq-toggle"><i class="fas fa-chevron-down"></i></div>
                            </div>
                            <div class="faq-a">
                                We accept various payment methods including <strong>PayNow, bank transfer, and cash</strong>. Payment is typically made after the service is completed and you are satisfied with the results.
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-q" onclick="this.closest('.faq-item').classList.toggle('open')">
                                <div class="faq-q-left">
                                    <span class="faq-q-num">13</span>
                                    <h3>How can I request a quotation?</h3>
                                </div>
                                <div class="faq-toggle"><i class="fas fa-chevron-down"></i></div>
                            </div>
                            <div class="faq-a">
                                You may contact us via <strong>phone, WhatsApp, or our online enquiry form</strong>. Sharing photos of your flooring and the approximate floor area will help us provide a faster assessment and recommendation.
                            </div>
                        </div>
                    </div>

                    {{-- CATEGORY 4: Aftercare & Maintenance --}}
                    <div class="faq-category" id="cat-aftercare">
                        <div class="faq-cat-header">
                            <div class="faq-cat-icon"><i class="fas fa-shield-alt"></i></div>
                            <h2>Aftercare & Maintenance</h2>
                            <span class="faq-cat-count">2 questions</span>
                        </div>

                        <div class="faq-item">
                            <div class="faq-q" onclick="this.closest('.faq-item').classList.toggle('open')">
                                <div class="faq-q-left">
                                    <span class="faq-q-num">14</span>
                                    <h3>How often should I polish my floors?</h3>
                                </div>
                                <div class="faq-toggle"><i class="fas fa-chevron-down"></i></div>
                            </div>
                            <div class="faq-a">
                                The recommended frequency depends on the flooring material and the amount of foot traffic. <strong>Residential properties typically benefit from periodic polishing every few years</strong>, while commercial premises may require more frequent maintenance.
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-q" onclick="this.closest('.faq-item').classList.toggle('open')">
                                <div class="faq-q-left">
                                    <span class="faq-q-num">15</span>
                                    <h3>How can I maintain my floor after polishing?</h3>
                                </div>
                                <div class="faq-toggle"><i class="fas fa-chevron-down"></i></div>
                            </div>
                            <div class="faq-a">
                                <strong>Regular sweeping, prompt cleaning of spills,</strong> and using suitable floor cleaning products can help maintain the shine and condition of your floor. We also provide maintenance recommendations based on your floor type.
                            </div>
                        </div>
                    </div>

                    {{-- CTA BOX --}}
                    <div class="faq-cta-box">
                        <h2>Still Have Questions?</h2>
                        <p>Our team is ready to help. Reach out via WhatsApp for a quick response, or fill in our enquiry form and we'll get back to you within 24 hours.</p>
                        <div class="faq-cta-btns">
                            <a href="https://wa.me/6588112999" class="btn-faq-wa" target="_blank">
                                <i class="fab fa-whatsapp"></i> Chat on WhatsApp
                            </a>
                            <a href="{{ url('/') }}#quote" class="btn-faq-enquiry">
                                <i class="fas fa-envelope"></i> Send an Enquiry
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- WhatsApp Float --}}
    <a href="https://wa.me/6588112999" class="wa-float" target="_blank" title="Chat on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>

@endsection

@push('scripts')
<script>
function toggleFaqItem(el) {
    const item = el.closest('.faq-item');
    item.classList.toggle('open');
}

// Tambah event listener langsung ke semua .faq-q
document.querySelectorAll('.faq-q').forEach(function(q) {
    q.addEventListener('click', function() {
        const item = this.closest('.faq-item');
        item.classList.toggle('open');
    });
});

    // Highlight active sidebar nav on scroll
    const categories = document.querySelectorAll('.faq-category');
    const navLinks = document.querySelectorAll('.faq-nav-list a');

    window.addEventListener('scroll', () => {
        let current = '';
        categories.forEach(cat => {
            if (window.scrollY >= cat.offsetTop - 160) {
                current = cat.getAttribute('id');
            }
        });
        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === '#' + current) {
                link.classList.add('active');
            }
        });
    });
</script>
@endpush
