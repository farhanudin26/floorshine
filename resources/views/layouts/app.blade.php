<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Floorshine - Singapore Professional Floor Polishing')</title>
    <meta name="description" content="@yield('meta_description', 'Professional floor polishing services in Singapore for Marble, Granite, Parquet, and Tile flooring.')">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --teal: #1DBBA4;
            --teal-dark: #14967F;
            --teal-light: #E6F7F5;
            --teal-mid: #0D8C7A;
            --navy: #0D2B45;
            --gray-50: #F8FAFC;
            --gray-100: #F1F5F9;
            --gray-200: #E2E8F0;
            --gray-400: #94A3B8;
            --gray-600: #475569;
            --gray-800: #1E293B;
            --font-head: 'Plus Jakarta Sans', sans-serif;
            --font-body: 'Outfit', sans-serif;
        }

        body { font-family: var(--font-body); color: var(--gray-800); background: #fff; }

        /* ===== CONTAINER ===== */
        .container { max-width: 1180px; margin: 0 auto; padding: 0 24px; }

        /* ===== TOP BAR ===== */
        .topbar { background: var(--teal-dark); padding: 8px 0; }
        .topbar .container { display: flex; justify-content: flex-end; align-items: center; gap: 24px; }
        .topbar a {
            color: rgba(255,255,255,0.9); text-decoration: none;
            font-size: 13px; display: flex; align-items: center;
            gap: 6px; font-family: var(--font-body); transition: color 0.2s;
        }
        .topbar a:hover { color: #fff; }
        .topbar .social-links { display: flex; gap: 10px; align-items: center; margin-left: 8px; }
        .topbar .social-links a {
            width: 26px; height: 26px;
            background: rgba(255,255,255,0.15); border-radius: 5px;
            display: flex; align-items: center; justify-content: center; font-size: 12px;
        }
        .topbar .social-links a:hover { background: rgba(255,255,255,0.3); }

        /* ===== NAVBAR ===== */
        .navbar {
            background: #fff;
            box-shadow: 0 2px 16px rgba(0,0,0,0.07);
            position: sticky; top: 0; z-index: 999;
        }
        .navbar .container {
            display: flex; align-items: center;
            justify-content: space-between;
            padding: 0 20px; height: 68px;
        }
        .logo { display: flex; align-items: center; gap: 8px; text-decoration: none; }

        /* ===== NAVBAR LINKS ===== */
        .nav-links { display: flex; list-style: none; align-items: center; gap: 2px; }
        .nav-links > li { position: relative; }
        .nav-links > li > a {
            display: flex; align-items: center; gap: 5px;
            padding: 8px 13px; color: var(--gray-800); text-decoration: none;
            font-size: 14px; font-weight: 500; border-radius: 6px;
            transition: all 0.2s; font-family: var(--font-body);
        }
        .nav-links > li > a:hover, .nav-links > li > a.active {
            color: var(--teal); background: var(--teal-light);
        }
        .nav-links > li > a i.fa-chevron-down { font-size: 10px; margin-top: 1px; transition: transform 0.2s; }
        .nav-links > li:hover > a i.fa-chevron-down { transform: rotate(180deg); }

        /* Dropdown */
        .dropdown-menu {
            display: none; position: absolute;
            top: calc(100% + 6px); left: 0;
            background: #fff; border-radius: 12px;
            box-shadow: 0 12px 40px rgba(0,0,0,0.12);
            border: 1px solid var(--gray-200);
            min-width: 260px; padding: 8px; z-index: 1000;
        }
        .nav-links > li:hover .dropdown-menu { display: block; }
        .dropdown-menu a {
            display: flex; align-items: center; gap: 10px;
            padding: 10px 14px; color: var(--gray-800); text-decoration: none;
            font-size: 14px; border-radius: 8px; transition: all 0.15s; font-family: var(--font-body);
        }
        .dropdown-menu a:hover { background: var(--teal-light); color: var(--teal-dark); }
        .dropdown-menu a .icon {
            width: 28px; height: 28px; background: var(--teal-light); border-radius: 6px;
            display: flex; align-items: center; justify-content: center;
            font-size: 13px; color: var(--teal); flex-shrink: 0;
        }
        .dropdown-menu a:hover .icon { background: var(--teal); color: #fff; }
        .dropdown-divider { height: 1px; background: var(--gray-200); margin: 4px 0; }

        /* Hamburger */
        .hamburger { display: none; flex-direction: column; gap: 5px; cursor: pointer; padding: 6px; border: none; background: none; }
        .hamburger span { width: 24px; height: 2px; background: var(--gray-800); border-radius: 2px; transition: all 0.3s; display: block; }

        /* ===== GLOBAL CONTACT SECTION ===== */
        .global-contact {
            background: var(--gray-50);
            padding: 72px 0;
        }
        .global-contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 48px;
            align-items: start;
        }
        .gc-info h2 {
            font-family: var(--font-head);
            font-size: 24px; font-weight: 800;
            color: var(--teal); margin-bottom: 6px; line-height: 1.25;
        }
        .gc-info h2 span {
            display: block; color: var(--navy);
            font-size: 17px; font-weight: 600; margin-top: 4px;
        }
        .gc-info > p {
            font-size: 14.5px; color: var(--gray-600);
            line-height: 1.7; margin-bottom: 28px; margin-top: 12px;
        }
        .gc-item { display: flex; align-items: flex-start; gap: 14px; margin-bottom: 18px; }
        .gc-icon {
            width: 42px; height: 42px; background: var(--teal-light);
            border-radius: 10px; display: flex; align-items: center;
            justify-content: center; color: var(--teal); font-size: 17px; flex-shrink: 0;
        }
        .gc-label {
            font-size: 11px; font-weight: 700; color: var(--gray-400);
            text-transform: uppercase; letter-spacing: 0.6px; margin-bottom: 3px;
        }
        .gc-val { font-size: 15px; color: var(--gray-800); font-weight: 500; }
        .gc-val a { color: var(--teal); text-decoration: none; font-weight: 600; }
        .gc-val a:hover { text-decoration: underline; }
        .gc-map {
            border-radius: 16px; overflow: hidden;
            box-shadow: 0 8px 32px rgba(0,0,0,0.1);
            border: 3px solid var(--gray-200);
        }
        .gc-map iframe { width: 100%; height: 360px; border: none; display: block; }

        /* ===== FOOTER ===== */
        .site-footer { background: var(--navy); }

        .footer-info-bar {
            background: #0a2135; padding: 16px 0;
            border-bottom: 1px solid rgba(255,255,255,0.06);
        }
        .footer-info-inner { display: flex; align-items: center; gap: 28px; flex-wrap: wrap; }
        .fi-item { display: flex; align-items: center; gap: 8px; font-size: 13.5px; color: rgba(255,255,255,0.7); }
        .fi-item i { color: var(--teal); }

        .footer-main-wrap { padding: 48px 0 32px; }
        .footer-cols { display: grid; grid-template-columns: 1.8fr 1fr 1fr 1.4fr; gap: 40px; }
        .f-logo-name { font-family: var(--font-head); font-size: 20px; font-weight: 800; color: #fff; margin-bottom: 10px; }
        .f-logo-name span { color: var(--teal); }
        .f-desc { font-size: 13.5px; color: rgba(255,255,255,0.6); line-height: 1.7; margin-bottom: 18px; }
        .f-social { display: flex; gap: 9px; }
        .f-social a {
            width: 34px; height: 34px; border-radius: 8px;
            background: rgba(255,255,255,0.07);
            display: flex; align-items: center; justify-content: center;
            color: rgba(255,255,255,0.65); font-size: 13px; text-decoration: none; transition: all 0.2s;
        }
        .f-social a:hover { background: var(--teal); color: #fff; }
        .f-heading {
            font-family: var(--font-head); font-size: 13px; font-weight: 700;
            color: #fff; margin-bottom: 16px; text-transform: uppercase; letter-spacing: 0.5px;
        }
        .f-links { list-style: none; }
        .f-links li { margin-bottom: 9px; }
        .f-links a { color: rgba(255,255,255,0.6); text-decoration: none; font-size: 13.5px; transition: color 0.2s; }
        .f-links a:hover { color: var(--teal); }

        /* Footer Enquiry Form */
        .footer-enquiry-col h3 {
            font-family: var(--font-head); font-size: 13px; font-weight: 700;
            color: #fff; margin-bottom: 16px; text-transform: uppercase; letter-spacing: 0.5px;
        }
        .enq-group { margin-bottom: 10px; }
        .enq-group input, .enq-group select, .enq-group textarea {
            width: 100%;
            background: rgba(255,255,255,0.06);
            border: 1px solid rgba(255,255,255,0.12);
            border-radius: 8px; padding: 9px 12px;
            font-size: 13px; font-family: var(--font-body);
            color: #fff; outline: none; transition: border-color 0.2s;
        }
        .enq-group input:focus, .enq-group select:focus, .enq-group textarea:focus { border-color: var(--teal); }
        .enq-group input::placeholder, .enq-group textarea::placeholder { color: rgba(255,255,255,0.35); }
        .enq-group select option { background: var(--navy); color: #fff; }
        .enq-group textarea { height: 60px; resize: vertical; }
        .btn-enq-submit {
            background: var(--teal); color: #fff; border: none;
            padding: 10px 20px; border-radius: 8px; font-size: 13px;
            font-weight: 700; font-family: var(--font-head);
            cursor: pointer; transition: background 0.2s; margin-top: 4px;
            display: inline-flex; align-items: center; gap: 6px;
        }
        .btn-enq-submit:hover { background: var(--teal-dark); }

        /* Footer Bottom */
        .footer-bottom {
            background: #061828; padding: 16px 0;
            border-top: 1px solid rgba(255,255,255,0.05);
        }
        .footer-bottom .container {
            display: flex; justify-content: space-between;
            align-items: center; flex-wrap: wrap; gap: 10px;
        }
        .footer-bottom p { font-size: 12.5px; color: rgba(255,255,255,0.4); margin: 0; }
        .footer-bottom a { color: rgba(255,255,255,0.5); text-decoration: none; font-size: 12.5px; }
        .footer-bottom a:hover { color: var(--teal); }

        /* WhatsApp Float */
        .wa-float {
            position: fixed; bottom: 28px; right: 28px;
            background: #25D366; color: #fff;
            width: 56px; height: 56px; border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-size: 26px; text-decoration: none;
            box-shadow: 0 4px 20px rgba(37,211,102,0.4); z-index: 998; transition: all 0.2s;
        }
        .wa-float:hover { transform: scale(1.1); color: #fff; }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 1024px) {
            .footer-cols { grid-template-columns: 1fr 1fr; gap: 28px; }
        }
        @media (max-width: 900px) {
            .hamburger { display: flex; }
            .nav-right { display: none; flex-direction: column; position: absolute; top: 68px; left: 0; right: 0; background: #fff; box-shadow: 0 8px 20px rgba(0,0,0,0.1); z-index: 998; }
            .nav-right.open { display: flex; }
            .nav-links { flex-direction: column; align-items: flex-start; padding: 12px 0; width: 100%; }
            .nav-links > li { width: 100%; }
            .nav-links > li > a { width: 100%; border-radius: 0; padding: 12px 20px; }
            .dropdown-menu { position: static; box-shadow: none; border: none; background: var(--gray-50); border-radius: 0; padding: 0; display: none; }
            .nav-links > li.open .dropdown-menu { display: block; }
            .nav-links > li:hover .dropdown-menu { display: none; }
            .global-contact-grid { grid-template-columns: 1fr; }
        }
        @media (max-width: 600px) {
            .topbar .container { justify-content: center; flex-wrap: wrap; gap: 10px; }
            .footer-cols { grid-template-columns: 1fr; }
            .footer-info-inner { flex-direction: column; align-items: flex-start; gap: 10px; }
        }
    </style>
    @stack('styles')
</head>
<body>

    {{-- TOP BAR --}}
    <div class="topbar">
        <div class="container">
            <a href="tel:+6588772899"><i class="fas fa-phone"></i> +65 8877 2899</a>
            <a href="mailto:enquiry@floorpolishing.sg"><i class="fas fa-envelope"></i> enquiry@floorpolishing.sg</a>
            <div class="social-links">
                <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" title="TikTok"><i class="fab fa-tiktok"></i></a>
                <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://wa.me/6588772899" target="_blank" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
    </div>

    {{-- NAVBAR --}}
    <nav class="navbar">
        <div class="container">
            {{-- LOGO --}}
            {{-- CATATAN: Sudah menggunakan gambar logo.
                 Simpan logo di: public/images/logo-floorshine.png
                 Jika logo belum ada, ganti dengan teks:
                 <span style="font-family:var(--font-head);font-weight:800;font-size:22px;color:var(--teal);">
                     FLOOR<span style="color:var(--navy);">SHINE</span>
                 </span> --}}
            <a href="{{ route('home') }}" class="logo">
                <img src="{{ asset('images/logo-floorshine.png') }}" height="52" alt="Floorshine">
            </a>

            <button class="hamburger" id="hamburger" aria-label="Toggle menu">
                <span></span><span></span><span></span>
            </button>

            <div class="nav-right" id="navRight">
                <ul class="nav-links">
                    <li>
                        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
                            <i class="fas fa-home" style="font-size:13px;"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
                    </li>
                    <li id="serviceDropdown">
                        <a href="#" class="{{ request()->routeIs('services.*') ? 'active' : '' }}">
                            Services <i class="fas fa-chevron-down"></i>
                        </a>
                        <div class="dropdown-menu">
                            <a href="{{ route('services.marble') }}"><span class="icon"><i class="fas fa-gem"></i></span> Marble Polishing</a>
                            <a href="{{ route('services.granite') }}"><span class="icon"><i class="fas fa-mountain"></i></span> Granite Polishing</a>
                            <a href="{{ route('services.homogeneous') }}"><span class="icon"><i class="fas fa-th-large"></i></span> Homogeneous Tiles Polishing</a>
                            <div class="dropdown-divider"></div>
                            <a href="{{ route('services.parquet') }}"><span class="icon"><i class="fas fa-grip-lines"></i></span> Parquet Polishing</a>
                            <a href="{{ route('services.limestone') }}"><span class="icon"><i class="fas fa-layer-group"></i></span> Limestone Polishing</a>
                            <a href="{{ route('services.outdoor') }}"><span class="icon"><i class="fas fa-sun"></i></span> Outdoor Ceramic Tiles Polishing</a>
                            <div class="dropdown-divider"></div>
                            <a href="{{ route('services.porcelain') }}"><span class="icon"><i class="fas fa-circle"></i></span> Porcelain Polishing</a>
                            <a href="{{ route('services.terrazzo') }}"><span class="icon"><i class="fas fa-border-all"></i></span> Terrazzo Polishing</a>
                        </div>
                    </li>
                    <li>
                        <a href="{{ route('faq') }}" class="{{ request()->routeIs('faq') ? 'active' : '' }}">FAQ</a>
                    </li>
                    <li>
                        <a href="{{ route('blog') }}" class="{{ request()->routeIs('blog') ? 'active' : '' }}">Blog</a>
                    </li>
                    <li>
                        <a href="https://wa.me/6588772899" target="_blank">WhatsApp Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- MAIN CONTENT --}}
    <main>@yield('content')</main>

    {{-- ============================================================
         GLOBAL CONTACT SECTION — tampil di semua halaman
         ============================================================ --}}
    <section class="global-contact" id="quote">
        <div class="container">
            <div class="global-contact-grid">

                {{-- Info Kontak --}}
                <div class="gc-info">
                    <h2>
                        Floorshine | Floor Polishing
                        <span>Singapore</span>
                    </h2>
                    <p>Contact us today for a free consultation and quote. Our team is ready to help restore the beauty of your floors.</p>

                    <div class="gc-item">
                        <div class="gc-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div>
                            <div class="gc-label">Address</div>
                            <div class="gc-val">18 Sin Ming Lane, #06-27, Midview City<br>Singapore 573960</div>
                        </div>
                    </div>

                    <div class="gc-item">
                        <div class="gc-icon"><i class="fab fa-whatsapp"></i></div>
                        <div>
                            <div class="gc-label">WhatsApp</div>
                            <div class="gc-val"><a href="https://wa.me/6588772899" target="_blank">+65 8877 2899</a></div>
                        </div>
                    </div>

                    <div class="gc-item">
                        <div class="gc-icon"><i class="fas fa-envelope"></i></div>
                        <div>
                            <div class="gc-label">Email</div>
                            <div class="gc-val"><a href="mailto:enquiry@floorpolishing.sg">enquiry@floorpolishing.sg</a></div>
                        </div>
                    </div>

                    <div class="gc-item">
                        <div class="gc-icon"><i class="fas fa-clock"></i></div>
                        <div>
                            <div class="gc-label">Operating Hours</div>
                            <div class="gc-val">Mon – Fri: 9:00 am – 6:00 pm</div>
                        </div>
                    </div>
                </div>

                {{-- Google Maps --}}
                {{-- CATATAN GOOGLE MAPS:
                     Ganti src di bawah dengan embed URL dari Google Maps lokasi bisnis asli.
                     Cara: Google Maps → cari lokasi → Share → Embed a map → copy src="..." --}}
                <div class="gc-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.6704782073865!2d103.83018757499225!3d1.3493099986586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da17057effffff%3A0x7efb5b33efba1e14!2sMidview%20City!5e0!3m2!1sen!2ssg!4v1700000000001!5m2!1sen!2ssg"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

            </div>
        </div>
    </section>

    {{-- FOOTER --}}
    <footer class="site-footer">

        {{-- Main footer columns --}}
        <div class="footer-main-wrap">
            <div class="container">
                <div class="footer-cols">
                    {{-- Col 1: Brand --}}
                    <div>
                        <div class="f-logo-name">FLOOR<span>SHINE</span></div>
                        <p class="f-desc">Floorshine is a trusted floor polishing specialist in Singapore — providing professional floor polishing services for all types of flooring such as marble, granite, terrazzo and more. All at affordable prices. Contact us via WhatsApp to find out more about our services and book your floor polishing service today.</p>
                        <div class="f-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-tiktok"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://wa.me/6588772899" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>

                    {{-- Col 2: Services --}}
                    <div>
                        <div class="f-heading">Services</div>
                        <ul class="f-links">
                            <li><a href="{{ route('services.marble') }}">Marble Polishing</a></li>
                            <li><a href="{{ route('services.granite') }}">Granite Polishing</a></li>
                            <li><a href="{{ route('services.homogeneous') }}">Homogeneous Tiles Polishing</a></li>
                            <li><a href="{{ route('services.parquet') }}">Parquet Polishing</a></li>
                            <li><a href="{{ route('services.limestone') }}">Limestone Polishing</a></li>
                            <li><a href="{{ route('services.outdoor') }}">Outdoor Ceramic Tiles Polishing</a></li>
                            <li><a href="{{ route('services.porcelain') }}">Porcelain Polishing</a></li>
                            <li><a href="{{ route('services.terrazzo') }}">Terrazzo Polishing</a></li>
                        </ul>
                    </div>

                    {{-- Col 3: Follow Us --}}
                    <div>
                        <div class="f-heading">Follow Us</div>
                        <ul class="f-links" style="margin-bottom:20px;">
                            <li><a href="#"><i class="fab fa-facebook-f" style="width:16px;"></i> Facebook</a></li>
                            <li><a href="#"><i class="fab fa-instagram" style="width:16px;"></i> Instagram</a></li>
                            <li><a href="#"><i class="fab fa-tiktok" style="width:16px;"></i> TikTok</a></li>
                        </ul>
                        <div class="f-heading">Quick Links</div>
                        <ul class="f-links">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('faq') }}">FAQ</a></li>
                            <li><a href="{{ route('blog') }}">Blog</a></li>
                        </ul>
                    </div>

                    {{-- Col 4: Enquiry Form --}}
                    <div class="footer-enquiry-col">
                        <h3>Enquiry Form</h3>
                        <form method="POST" action="#">
                            @csrf
                            <div class="enq-group">
                                <input type="text" name="subject" placeholder="Subject">
                            </div>
                            <div class="enq-group">
                                <input type="text" name="name" placeholder="Name">
                            </div>
                            <div class="enq-group">
                                <input type="email" name="email" placeholder="Email">
                            </div>
                            <div class="enq-group">
                                <input type="tel" name="mobile" placeholder="Mobile">
                            </div>
                            <div class="enq-group">
                                <textarea name="question" placeholder="Your Question"></textarea>
                            </div>
                            <button type="submit" class="btn-enq-submit">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- Bottom bar --}}
        <div class="footer-bottom">
            <div class="container">
                <p>&copy; {{ date('Y') }} Floorshine. All rights reserved. | Singapore Professional Floor Polishing</p>
                <div style="display:flex; gap:16px;">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    {{-- WhatsApp Float --}}
    <a href="https://wa.me/6588772899" class="wa-float" target="_blank" title="Chat on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>

    <script>
        // Hamburger toggle
        const hamburger = document.getElementById('hamburger');
        const navRight  = document.getElementById('navRight');
        hamburger.addEventListener('click', () => navRight.classList.toggle('open'));

        // Mobile: service dropdown toggle
        const serviceDropdown = document.getElementById('serviceDropdown');
        serviceDropdown.querySelector('a').addEventListener('click', function(e) {
            if (window.innerWidth <= 900) {
                e.preventDefault();
                serviceDropdown.classList.toggle('open');
            }
        });

        // Close nav when clicking outside
        document.addEventListener('click', function(e) {
            if (window.innerWidth <= 900) {
                if (!navRight.contains(e.target) && !hamburger.contains(e.target)) {
                    navRight.classList.remove('open');
                }
            }
        });
    </script>
    @stack('scripts')
</body>
</html>
