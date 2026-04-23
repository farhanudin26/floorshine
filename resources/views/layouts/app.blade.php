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
            --white: #FFFFFF;
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
            background: rgba(255,255,255,0.15);
            border-radius: 5px;
            display: flex; align-items: center; justify-content: center;
            font-size: 12px;
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
        .logo-icon {
            width: 36px; height: 36px;
            background: var(--teal); border-radius: 8px;
            display: flex; align-items: center; justify-content: center;
        }
        .logo-icon i { color: #fff; font-size: 18px; }
        {{-- ============================================================
             CATATAN: Jika punya file logo Floorshine, simpan di
             public/images/logo-floorshine.png
             dan ganti .logo dengan:
             <a href="{{ route('home') }}" class="logo">
               <img src="{{ asset('images/logo-floorshine.png') }}" height="42" alt="Floorshine">
             </a>
             ============================================================ --}}
        .logo-text {
            font-family: var(--font-head); font-weight: 800;
            font-size: 22px; color: var(--teal); letter-spacing: -0.5px;
        }
        .logo-text span { color: var(--navy); }

        .nav-links { display: flex; list-style: none; align-items: center; gap: 2px; }
        .nav-links > li { position: relative; }
        .nav-links > li > a {
            display: flex; align-items: center; gap: 5px;
            padding: 8px 13px;
            color: var(--gray-800); text-decoration: none;
            font-size: 14px; font-weight: 500;
            border-radius: 6px; transition: all 0.2s;
            font-family: var(--font-body);
        }
        .nav-links > li > a:hover, .nav-links > li > a.active {
            color: var(--teal); background: var(--teal-light);
        }
        .nav-links > li > a i.fa-chevron-down {
            font-size: 10px; margin-top: 1px; transition: transform 0.2s;
        }
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
            padding: 10px 14px; color: var(--gray-800);
            text-decoration: none; font-size: 14px;
            border-radius: 8px; transition: all 0.15s;
            font-family: var(--font-body);
        }
        .dropdown-menu a:hover { background: var(--teal-light); color: var(--teal-dark); }
        .dropdown-menu a .icon {
            width: 28px; height: 28px;
            background: var(--teal-light); border-radius: 6px;
            display: flex; align-items: center; justify-content: center;
            font-size: 13px; color: var(--teal); flex-shrink: 0;
        }
        .dropdown-menu a:hover .icon { background: var(--teal); color: #fff; }
        .dropdown-divider { height: 1px; background: var(--gray-200); margin: 4px 0; }

        .btn-quote {
            background: var(--teal); color: #fff;
            padding: 10px 20px; border-radius: 8px;
            text-decoration: none; font-size: 14px;
            font-weight: 600; transition: all 0.2s;
            font-family: var(--font-body);
            border: none; cursor: pointer;
            white-space: nowrap;
        }
        .btn-quote:hover { background: var(--teal-dark); }

        /* Hamburger */
        .hamburger { display: none; flex-direction: column; gap: 5px; cursor: pointer; padding: 6px; }
        .hamburger span { width: 24px; height: 2px; background: var(--gray-800); border-radius: 2px; transition: all 0.3s; }

        /* Container */
        .container { max-width: 1180px; margin: 0 auto; padding: 0 24px; }

        /* ===== FOOTER ===== */
        .site-footer { background: var(--navy); }

        .footer-info-bar {
            background: #0a2135;
            padding: 16px 0;
            border-bottom: 1px solid rgba(255,255,255,0.06);
        }
        .footer-info-inner {
            display: flex;
            align-items: center;
            gap: 28px;
            flex-wrap: wrap;
        }
        .fi-item {
            display: flex; align-items: center; gap: 8px;
            font-size: 13.5px; color: rgba(255,255,255,0.7);
        }
        .fi-item i { color: var(--teal); }

        .footer-main-wrap { padding: 48px 0 32px; }
        .footer-cols {
            display: grid;
            grid-template-columns: 1.8fr 1fr 1fr;
            gap: 40px;
            margin-bottom: 0;
        }
        .f-logo-name {
            font-family: var(--font-head);
            font-size: 22px; font-weight: 800; color: #fff; margin-bottom: 10px;
        }
        .f-logo-name span { color: var(--teal); }
        .f-desc { font-size: 14px; color: rgba(255,255,255,0.6); line-height: 1.7; margin-bottom: 18px; }
        .f-social { display: flex; gap: 9px; }
        .f-social a {
            width: 34px; height: 34px; border-radius: 8px;
            background: rgba(255,255,255,0.07);
            display: flex; align-items: center; justify-content: center;
            color: rgba(255,255,255,0.65); font-size: 13px;
            text-decoration: none; transition: all 0.2s;
        }
        .f-social a:hover { background: var(--teal); color: #fff; }
        .f-heading {
            font-family: var(--font-head); font-size: 14px;
            font-weight: 700; color: #fff; margin-bottom: 16px;
            text-transform: uppercase; letter-spacing: 0.5px;
        }
        .f-links { list-style: none; }
        .f-links li { margin-bottom: 9px; }
        .f-links a { color: rgba(255,255,255,0.6); text-decoration: none; font-size: 13.5px; transition: color 0.2s; }
        .f-links a:hover { color: var(--teal); }

        /* Footer Map Row */
        .footer-map-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0;
            border-top: 1px solid rgba(255,255,255,0.07);
        }
        .footer-enquiry {
            background: #0a2135;
            padding: 36px 40px;
        }
        .footer-enquiry h3 {
            font-family: var(--font-head);
            font-size: 17px; font-weight: 700; color: #fff; margin-bottom: 18px;
        }
        .enq-group { margin-bottom: 14px; }
        .enq-group label {
            display: block; font-size: 12.5px;
            font-weight: 600; color: rgba(255,255,255,0.6);
            margin-bottom: 6px; text-transform: uppercase; letter-spacing: 0.4px;
        }
        .enq-group input, .enq-group select, .enq-group textarea {
            width: 100%;
            background: rgba(255,255,255,0.06);
            border: 1px solid rgba(255,255,255,0.12);
            border-radius: 8px;
            padding: 10px 13px;
            font-size: 13.5px;
            font-family: var(--font-body);
            color: #fff;
            outline: none;
            transition: border-color 0.2s;
        }
        .enq-group input:focus, .enq-group select:focus, .enq-group textarea:focus {
            border-color: var(--teal);
        }
        .enq-group input::placeholder, .enq-group textarea::placeholder { color: rgba(255,255,255,0.35); }
        .enq-group select option { background: var(--navy); color: #fff; }
        .enq-group textarea { height: 70px; resize: vertical; }
        .btn-enq-submit {
            background: var(--teal); color: #fff;
            border: none; padding: 11px 24px;
            border-radius: 8px; font-size: 14px;
            font-weight: 700; font-family: var(--font-head);
            cursor: pointer; transition: background 0.2s;
            margin-top: 4px;
        }
        .btn-enq-submit:hover { background: var(--teal-dark); }

        /* Google Maps */
        .footer-map-box { position: relative; }
        .footer-map-box iframe {
            width: 100%; height: 100%;
            min-height: 300px;
            border: none; display: block;
        }

        /* Footer bottom */
        .footer-bottom {
            background: #061828;
            padding: 16px 0;
            border-top: 1px solid rgba(255,255,255,0.05);
        }
        .footer-bottom .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
        }
        .footer-bottom p { font-size: 12.5px; color: rgba(255,255,255,0.4); margin: 0; }
        .footer-bottom a { color: rgba(255,255,255,0.5); text-decoration: none; font-size: 12.5px; }
        .footer-bottom a:hover { color: var(--teal); }

        /* Responsive */
        @media (max-width: 900px) {
            .hamburger { display: flex; }
            .nav-right { display: none; flex-direction: column; }
            .nav-right.open { display: flex; }
            .nav-links { flex-direction: column; align-items: flex-start; padding: 12px 0; }
            .nav-links > li { width: 100%; }
            .nav-links > li > a { width: 100%; border-radius: 0; padding: 12px 20px; }
            .dropdown-menu { position: static; box-shadow: none; border: none; background: var(--gray-50); border-radius: 0; padding: 0; }
            .nav-links > li:hover .dropdown-menu { display: none; }
            .nav-links > li.open .dropdown-menu { display: block; }
            .btn-quote { margin: 12px 20px; width: calc(100% - 40px); text-align: center; display: block; }
            .footer-cols { grid-template-columns: 1fr 1fr; }
            .footer-map-row { grid-template-columns: 1fr; }
            .footer-map-box { min-height: 250px; }
        }
        @media (max-width: 600px) {
            .topbar .container { justify-content: center; flex-wrap: wrap; gap: 10px; }
            .footer-cols { grid-template-columns: 1fr; }
            .footer-enquiry { padding: 28px 20px; }
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
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-tiktok"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://wa.me/6588772899" target="_blank"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
    </div>

    {{-- NAVBAR --}}
    <nav class="navbar">
        <div class="container">
            <a href="{{ route('home') }}" class="logo">
               <img src="{{ asset('images/logo-floorshine.png') }}" height="90" alt="Floorshine">
            </a>

            <button class="hamburger" id="hamburger" aria-label="Toggle menu">
                <span></span><span></span><span></span>
            </button>

            <div class="nav-right" id="navRight">
                <ul class="nav-links">
                    <li>
                        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
                            <i class="fas fa-home" style="font-size:12px;"></i>
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
                {{-- <a href="#quote" class="btn-quote">Get A Quote</a> --}}
            </div>
        </div>
    </nav>

    {{-- MAIN CONTENT --}}
    <main>@yield('content')</main>

    {{-- FOOTER --}}
    <footer class="site-footer">

        {{-- Info bar --}}
        <div class="footer-info-bar">
            <div class="container">
                <div class="footer-info-inner">
                    <div class="fi-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>51 Toh Guan Road, #07-17 Midview City, Singapore 608555</span>
                    </div>
                    <div class="fi-item">
                        <i class="fab fa-whatsapp"></i>
                        <span>+65 8877 2899</span>
                    </div>
                    <div class="fi-item">
                        <i class="fas fa-clock"></i>
                        <span>Mon – Sat: 9:00am – 6:00 pm</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Main footer columns --}}
        <div class="footer-main-wrap">
            <div class="container">
                <div class="footer-cols">
                    <div>
                        <div class="f-logo-name">FLOOR<span>SHINE</span> <span style="color:rgba(255,255,255,0.5); font-size:13px; font-weight:400;">| Floor Polishing</span></div>
                        <p class="f-desc">Singapore's trusted professional floor polishing company. Specialising in Marble, Granite, Parquet, and Tile flooring with over 5 years of excellence.</p>
                        <div class="f-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-tiktok"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://wa.me/6588772899" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                    <div>
                        <div class="f-heading">Services</div>
                        <ul class="f-links">
                            <li><a href="{{ route('services.marble') }}">Marble Polishing</a></li>
                            <li><a href="{{ route('services.granite') }}">Granite Polishing</a></li>
                            <li><a href="{{ route('services.homogeneous') }}">Homogeneous Tiles</a></li>
                            <li><a href="{{ route('services.parquet') }}">Parquet Polishing</a></li>
                            <li><a href="{{ route('services.limestone') }}">Limestone Polishing</a></li>
                            <li><a href="{{ route('services.outdoor') }}">Outdoor Ceramic Tiles</a></li>
                            <li><a href="{{ route('services.porcelain') }}">Porcelain Polishing</a></li>
                            <li><a href="{{ route('services.terrazzo') }}">Terrazzo Polishing</a></li>
                        </ul>
                    </div>
                    <div>
                        <div class="f-heading">Follow Us</div>
                        <ul class="f-links" style="margin-bottom:24px;">
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
                </div>
            </div>
        </div>

        {{-- Map + Enquiry Row --}}
        <div class="footer-map-row">
            <div class="footer-enquiry">
                <h3><i class="fas fa-paper-plane" style="color:var(--teal); margin-right:8px;"></i> Enquiry Form</h3>
                <form method="POST" action="#">
                    @csrf
                    <div class="enq-group">
                        <label>Name</label>
                        <input type="text" name="name" placeholder="Your name">
                    </div>
                    <div class="enq-group">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="your@email.com">
                    </div>
                    <div class="enq-group">
                        <label>Service</label>
                        <select name="service">
                            <option value="">Select service...</option>
                            <option>Marble Polishing</option>
                            <option>Granite Polishing</option>
                            <option>Homogeneous Tiles Polishing</option>
                            <option>Parquet Polishing</option>
                            <option>Limestone Polishing</option>
                            <option>Outdoor Ceramic Tiles Polishing</option>
                            <option>Porcelain Polishing</option>
                            <option>Terrazzo Polishing</option>
                        </select>
                    </div>
                    <div class="enq-group">
                        <label>Message</label>
                        <textarea name="message" placeholder="Tell us about your floor..."></textarea>
                    </div>
                    <button type="submit" class="btn-enq-submit">
                        <i class="fas fa-paper-plane"></i> Submit
                    </button>
                </form>
            </div>

            {{-- ============================================================
                 CATATAN GOOGLE MAPS:
                 Ganti URL di bawah dengan embed URL dari Google Maps
                 lokasi bisnis Floorshine yang sebenarnya.
                 Caranya: buka Google Maps → cari lokasi → Share → Embed a map
                 → copy URL dari src="..."
                 ============================================================ --}}
            <div class="footer-map-box">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.7275583677847!2d103.74299547499178!3d1.3336544986673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da1097fdc36413%3A0xe7afcd4ef37ab8ae!2sMidview%20City!5e0!3m2!1sen!2ssg!4v1700000000000!5m2!1sen!2ssg"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>

        {{-- Bottom bar --}}
        <div class="footer-bottom">
            <div class="container">
                <p>&copy; {{ date('Y') }} Floorshine. All rights reserved.</p>
                <div style="display:flex; gap:16px;">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        const hamburger = document.getElementById('hamburger');
        const navRight = document.getElementById('navRight');
        hamburger.addEventListener('click', () => navRight.classList.toggle('open'));

        const serviceDropdown = document.getElementById('serviceDropdown');
        serviceDropdown.querySelector('a').addEventListener('click', function(e) {
            if (window.innerWidth <= 900) {
                e.preventDefault();
                serviceDropdown.classList.toggle('open');
            }
        });
    </script>
    @stack('scripts')
</body>
</html>
