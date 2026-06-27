<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- ===================== TITLE & META SEO ===================== --}}
    <title>@yield('title', 'Floorshine - Singapore Professional Floor Polishing Company')</title>
    <meta name="description" content="@yield('meta_description', 'Professional floor polishing services in Singapore for Marble, Granite, Parquet, and Tile flooring. Trusted by 800+ happy customers. Get a free quote today!')">
    <meta name="keywords" content="@yield('meta_keywords', 'floor polishing singapore, marble polishing, granite polishing, parquet polishing, tile polishing, homogeneous tiles polishing, floor restoration singapore')">
    <meta name="robots" content="@yield('meta_robots', 'index, follow')">
    <meta name="author" content="Floorshine">
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- ===================== OPEN GRAPH (Facebook / WhatsApp preview) ===================== --}}
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Floorshine">
    <meta property="og:title" content="@yield('og_title', 'Floorshine - Singapore Professional Floor Polishing Company')">
    <meta property="og:description" content="@yield('og_description', 'Professional floor polishing services in Singapore for Marble, Granite, Parquet, and Tile flooring. Trusted by 800+ happy customers.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="@yield('og_image', asset('images/og-floorshine.jpg'))">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="en_SG">

    {{-- ===================== TWITTER CARD ===================== --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('og_title', 'Floorshine - Singapore Professional Floor Polishing Company')">
    <meta name="twitter:description" content="@yield('og_description', 'Professional floor polishing services in Singapore for Marble, Granite, Parquet, and Tile flooring.')">
    <meta name="twitter:image" content="@yield('og_image', asset('images/og-floorshine.jpg'))">

    {{-- ===================== FAVICON ===================== --}}
    <link rel="icon" type="image/png" href="{{ asset('images/logo-mini.png') }}" sizes="32x32">
    <link rel="apple-touch-icon" href="{{ asset('images/logo-mini-new.png') }}">
    {{-- ===================== LCP PRELOAD (dari halaman child) ===================== --}}
    @stack('preload')
    {{-- ===================== SCHEMA.ORG ===================== --}}
    @hasSection('schema')
        @yield('schema')
    @else
        <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "LocalBusiness",
                "name": "Floorshine",
                "description": "Professional floor polishing services in Singapore for Marble, Granite, Parquet, and Tile flooring. Trusted by 800+ happy customers.",
                "url": "{{ config('app.url') }}",
                "logo": "{{ asset('images/logo-floorshine.png') }}",
                "image": "{{ asset('images/og-floorshine.jpg') }}",
                "telephone": "+6588112999",
                "email": "enquiry@floorpolishing.sg",
                "foundingDate": "2019",
                "slogan": "Singapore's Trusted Floor Polishing Specialists",
                "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "18 Sin Ming Lane, #06-27, Midview City",
                    "addressLocality": "Singapore",
                    "postalCode": "573960",
                    "addressCountry": "SG"
                },
                "geo": {
                    "@type": "GeoCoordinates",
                    "latitude": "1.3521",
                    "longitude": "103.8198"
                },
                "openingHoursSpecification": [
                    {
                        "@type": "OpeningHoursSpecification",
                        "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],
                        "opens": "09:00",
                        "closes": "18:00"
                    }
                ],
                "priceRange": "$$",
                "areaServed": {
                    "@type": "City",
                    "name": "Singapore"
                },
                "aggregateRating": {
                    "@type": "AggregateRating",
                    "ratingValue": "4.8",
                    "reviewCount": "800",
                    "bestRating": "5",
                    "worstRating": "1"
                },
                "hasOfferCatalog": {
                    "@type": "OfferCatalog",
                    "name": "Floor Polishing Services",
                    "itemListElement": [
                        {
                            "@type": "Offer",
                            "itemOffered": {
                                "@type": "Service",
                                "name": "Marble Floor Polishing",
                                "description": "Professional marble floor polishing services using the latest technology and techniques.",
                                "url": "{{ route('services.marble') }}"
                            }
                        },
                        {
                            "@type": "Offer",
                            "itemOffered": {
                                "@type": "Service",
                                "name": "Granite Floor Polishing",
                                "description": "Professional granite floor polishing services delivering outstanding and satisfying results.",
                                "url": "{{ route('services.granite') }}"
                            }
                        },
                        {
                            "@type": "Offer",
                            "itemOffered": {
                                "@type": "Service",
                                "name": "Homogeneous Tiles Polishing",
                                "description": "Expert homogeneous tiles polishing using latest technology and quality products.",
                                "url": "{{ route('services.homogeneous') }}"
                            }
                        },
                        {
                            "@type": "Offer",
                            "itemOffered": {
                                "@type": "Service",
                                "name": "Parquet Floor Polishing",
                                "description": "Restore the lustre of your parquet floor with our professional polishing service.",
                                "url": "{{ route('services.parquet') }}"
                            }
                        },
                        {
                            "@type": "Offer",
                            "itemOffered": {
                                "@type": "Service",
                                "name": "Limestone Floor Polishing",
                                "description": "Best limestone floor polishing services for a clean and shiny appearance.",
                                "url": "{{ route('services.limestone') }}"
                            }
                        },
                        {
                            "@type": "Offer",
                            "itemOffered": {
                                "@type": "Service",
                                "name": "Outdoor Ceramic Tiles Polishing",
                                "description": "Professional outdoor ceramic tiles polishing to restore and protect your outdoor floors.",
                                "url": "{{ route('services.outdoor') }}"
                            }
                        },
                        {
                            "@type": "Offer",
                            "itemOffered": {
                                "@type": "Service",
                                "name": "Porcelain Tiles Polishing",
                                "description": "Expert porcelain polishing services to extend the life and maintain the look of your floor.",
                                "url": "{{ route('services.porcelain') }}"
                            }
                        },
                        {
                            "@type": "Offer",
                            "itemOffered": {
                                "@type": "Service",
                                "name": "Terrazzo Tiles Polishing",
                                "description": "Professional terrazzo floor polishing for outstanding and satisfying results.",
                                "url": "{{ route('services.terrazzo') }}"
                            }
                        }
                    ]
                },
                "sameAs": [
                    "https://www.facebook.com/profile.php?id=61565065500306"
                ]
            },
            {
                "@type": "FAQPage",
                "mainEntity": [
                    {
                        "@type": "Question",
                        "name": "What services does Floorshine offer?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Floorshine offers a comprehensive range of floor polishing services including Marble, Granite, Homogeneous Tiles, Parquet, Limestone, Outdoor Ceramic Tiles, Porcelain, and Terrazzo polishing. We serve both residential and commercial properties across Singapore."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "How do I schedule a floor polishing service?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "You can schedule a service by contacting us via WhatsApp at +65 8811 2999, or by filling out the quote form on our website at {{ config('app.url') }}. Our team will respond within 24 hours to confirm your appointment."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "How much does floor polishing cost in Singapore?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Pricing depends on the type of floor, size of the area, and the level of work required. We offer free quotations — contact us with photos of your floor and our team will provide a transparent, competitive quote. There are no hidden fees."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "How long does a floor polishing service take?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "The duration depends on the size and condition of the floor. A standard HDB unit typically takes 4–6 hours. Larger areas or floors requiring more restoration may take longer. We will advise you on the estimated time during consultation."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "What payment methods does Floorshine accept?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "We accept various payment methods including PayNow, bank transfer, and cash. Payment is typically made after the service is completed and you are satisfied with the results."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "What types of flooring can Floorshine polish?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "We specialise in polishing Marble, Granite, Homogeneous Tiles, Parquet (wood), Limestone, Outdoor Ceramic Tiles, Porcelain, and Terrazzo floors. If you have a different type of flooring, contact us and we will advise accordingly."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Do you provide floor polishing services for both HDB and condominiums?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Yes, Floorshine provides professional floor polishing services for HDB flats, condominiums, landed properties, and commercial spaces across Singapore."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Are the products used safe for children and pets?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Yes, we use eco-friendly and safe polishing products that are suitable for households with children and pets, while still delivering high-quality and long-lasting results."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "How often should I polish my floors?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "It depends on the type of flooring and the amount of foot traffic. Generally, marble and granite floors should be polished every 1–2 years, while parquet floors may need polishing every 2–3 years. Our team can advise you on the best maintenance schedule during consultation."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Do you provide a free on-site survey before the service?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Yes, we offer a free on-site survey to assess the condition of your floor and recommend the most suitable polishing service. You can also send us photos of your floor via WhatsApp at +65 8811 2999 for a quick assessment."
                        }
                    }
                ]
            }
        ]
    }
    </script>
    @endif

    {{-- Google Analytics --}}
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3DB8QDTYJB"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-3DB8QDTYJB');
    </script>
    {{-- ===================== FONTS ===================== --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    {{-- ===================== FONT AWESOME ===================== --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            --teal: #35adb5;
            --teal-dark: #35adb5;
            --teal-light: #E6F7F5;
            --teal-mid: #35adb5;
            --navy: #0D2B45;
            --gray-50: #F8FAFC;
            --gray-100: #F1F5F9;
            --gray-200: #E2E8F0;
            --gray-400: #94A3B8;
            --gray-600: #475569;
            --gray-800: #1E293B;
            --font-head: 'Poppins', sans-serif;
            --font-body: 'Poppins', sans-serif;
        }

        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        a,
        span,
        div,
        ul,
        ol,
        li,
        td,
        th,
        label,
        input,
        textarea,
        select,
        button {
            font-family: 'Poppins', sans-serif;
        }

        body {
            font-family: var(--font-body);
            color: var(--gray-800);
            background: #fff;
        }

        /* ===== CONTAINER ===== */
        .container {
            max-width: 1180px;
            margin: 0 auto;
            padding: 0 24px;
        }

        /* ===== NAVBAR — ROW 1: Logo + Contact ===== */
        .navbar-top {
            background: #fff;
            padding: 12px 0;
            border-bottom: 1px solid var(--gray-200);
        }

        .navbar-top .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
        }

        .navbar-top-right {
            display: flex;
            align-items: center;
            gap: 24px;
        }

        .navbar-top-right a {
            display: flex;
            align-items: center;
            gap: 7px;
            color: var(--gray-800);
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            transition: color 0.2s;
        }

        .navbar-top-right a i {
            color: var(--teal);
            font-size: 15px;
        }

        .navbar-top-right a:hover {
            color: var(--teal);
        }

        /* ===== NAVBAR — ROW 2: Menu (teal background) ===== */
        .navbar-bottom {
            background: var(--teal);
            position: sticky;
            top: 0;
            z-index: 999;
        }

        .navbar-bottom .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 52px;
        }

        /* Nav Links */
        .nav-links {
            display: flex;
            list-style: none;
            align-items: center;
            gap: 0;
            height: 100%;
        }

        .nav-links>li {
            position: relative;
            height: 100%;
            display: flex;
            align-items: center;
        }

        .nav-links>li>a {
            display: flex;
            align-items: center;
            gap: 5px;
            padding: 0 16px;
            height: 100%;
            color: #fff;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            transition: background 0.2s;
            white-space: nowrap;
        }

        .nav-links>li>a:hover,
        .nav-links>li>a.active {
            background: rgba(0, 0, 0, 0.15);
        }

        .nav-links>li>a i.fa-home {
            font-size: 15px;
        }

        .nav-links>li>a i.fa-chevron-down {
            font-size: 10px;
            margin-top: 1px;
            transition: transform 0.2s;
        }

        .nav-links>li:hover>a i.fa-chevron-down {
            transform: rotate(180deg);
        }

        /* Nav Right Icons (social) */
        .nav-right-icons {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .nav-right-icons a {
            width: 34px;
            height: 34px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 14px;
            text-decoration: none;
            transition: background 0.2s;
        }

        .nav-right-icons a:hover {
            background: rgba(255, 255, 255, 0.35);
        }

        /* Dropdown */
        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background: #fff;
            border-radius: 0 0 12px 12px;
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.12);
            border: 1px solid var(--gray-200);
            min-width: 260px;
            padding: 8px;
            z-index: 1000;
        }

        .nav-links>li:hover .dropdown-menu {
            display: block;
        }

        .dropdown-menu a {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 14px;
            color: var(--gray-800);
            text-decoration: none;
            font-size: 14px;
            border-radius: 8px;
            transition: all 0.15s;
        }

        .dropdown-menu a:hover {
            background: var(--teal-light);
            color: var(--teal-dark);
        }

        .dropdown-menu a .icon {
            width: 28px;
            height: 28px;
            background: var(--teal-light);
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            color: var(--teal);
            flex-shrink: 0;
        }

        .dropdown-menu a:hover .icon {
            background: var(--teal);
            color: #fff;
        }

        .dropdown-divider {
            height: 1px;
            background: var(--gray-200);
            margin: 4px 0;
        }

        /* Hamburger */
        .hamburger {
            display: none;
            flex-direction: column;
            gap: 5px;
            cursor: pointer;
            padding: 6px;
            border: none;
            background: none;
        }

        .hamburger span {
            width: 24px;
            height: 2px;
            background: #fff;
            border-radius: 2px;
            transition: all 0.3s;
            display: block;
        }

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
            font-size: 24px;
            font-weight: 800;
            color: var(--teal);
            margin-bottom: 6px;
            line-height: 1.25;
        }

        .gc-info h2 span {
            display: block;
            color: var(--navy);
            font-size: 17px;
            font-weight: 600;
            margin-top: 4px;
        }

        .gc-info>p {
            font-size: 14.5px;
            color: var(--gray-600);
            line-height: 1.7;
            margin-bottom: 28px;
            margin-top: 12px;
        }

        .gc-item {
            display: flex;
            align-items: flex-start;
            gap: 14px;
            margin-bottom: 18px;
        }

        .gc-icon {
            width: 42px;
            height: 42px;
            background: var(--teal-light);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--teal);
            font-size: 17px;
            flex-shrink: 0;
        }

        .gc-label {
            font-size: 11px;
            font-weight: 700;
            color: var(--gray-400);
            text-transform: uppercase;
            letter-spacing: 0.6px;
            margin-bottom: 3px;
        }

        .gc-val {
            font-size: 15px;
            color: var(--gray-800);
            font-weight: 500;
        }

        .gc-val a {
            color: var(--teal);
            text-decoration: none;
            font-weight: 600;
        }

        .gc-val a:hover {
            text-decoration: underline;
        }

        .gc-map {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            border: 3px solid var(--gray-200);
        }

        .gc-map iframe {
            width: 100%;
            height: 360px;
            border: none;
            display: block;
        }

        /* ===== FOOTER ===== */
        .site-footer {
            background: var(--navy);
        }

        .footer-main-wrap {
            padding: 48px 0 32px;
        }

        .footer-cols {
            display: grid;
            grid-template-columns: 1.8fr 1fr 1fr 1.4fr;
            gap: 40px;
        }

        .f-logo {
            margin-bottom: 20px;
        }

        .f-logo img {
            max-width: 300px;
            /* sesuaikan */
            width: 100%;
            height: auto;
            display: block;
        }

        .f-desc {
            font-size: 13.5px;
            color: rgba(255, 255, 255, 0.6);
            line-height: 1.7;
            margin-bottom: 18px;
        }

        .f-social {
            display: flex;
            gap: 9px;
        }

        .f-social a {
            width: 34px;
            height: 34px;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.07);
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgba(255, 255, 255, 0.65);
            font-size: 13px;
            text-decoration: none;
            transition: all 0.2s;
        }

        .f-social a:hover {
            background: var(--teal);
            color: #fff;
        }

        .f-heading {
            font-family: var(--font-head);
            font-size: 13px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 16px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .f-links {
            list-style: none;
        }

        .f-links li {
            margin-bottom: 9px;
        }

        .f-links a {
            color: rgba(255, 255, 255, 0.6);
            text-decoration: none;
            font-size: 13.5px;
            transition: color 0.2s;
        }

        .f-links a:hover {
            color: var(--teal);
        }

        .footer-enquiry-col h3 {
            font-family: var(--font-head);
            font-size: 13px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 16px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .enq-group {
            margin-bottom: 10px;
        }

        .enq-group input,
        .enq-group select,
        .enq-group textarea {
            width: 100%;
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 8px;
            padding: 9px 12px;
            font-size: 13px;
            font-family: 'Poppins', sans-serif;
            color: #fff;
            outline: none;
            transition: border-color 0.2s;
        }

        .enq-group input:focus,
        .enq-group select:focus,
        .enq-group textarea:focus {
            border-color: var(--teal);
        }

        .enq-group input::placeholder,
        .enq-group textarea::placeholder {
            color: rgba(255, 255, 255, 0.35);
        }

        .enq-group select option {
            background: var(--navy);
            color: #fff;
        }

        .enq-group textarea {
            height: 60px;
            resize: vertical;
        }

        .btn-enq-submit {
            background: var(--teal);
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 700;
            font-family: 'Poppins', sans-serif;
            cursor: pointer;
            transition: background 0.2s;
            margin-top: 4px;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .btn-enq-submit:hover {
            background: var(--teal-dark);
        }

        .footer-bottom {
            background: #061828;
            padding: 16px 0;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
        }

        .footer-bottom .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
        }

        .footer-bottom p {
            font-size: 12.5px;
            color: rgba(255, 255, 255, 0.4);
            margin: 0;
        }

        .footer-bottom a {
            color: rgba(255, 255, 255, 0.5);
            text-decoration: none;
            font-size: 12.5px;
        }

        .footer-bottom a:hover {
            color: var(--teal);
        }

        /* WhatsApp Float */
        .wa-float {
            position: fixed;
            bottom: 28px;
            right: 28px;
            background: #25D366;
            color: #fff;
            width: 56px;
            height: 56px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 26px;
            text-decoration: none;
            box-shadow: 0 4px 20px rgba(37, 211, 102, 0.4);
            z-index: 998;
            transition: all 0.2s;
        }

        .wa-float:hover {
            transform: scale(1.1);
            color: #fff;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 1024px) {
            .footer-cols {
                grid-template-columns: 1fr 1fr;
                gap: 28px;
            }
        }

        @media (max-width: 900px) {
            .navbar-top-right {
                gap: 14px;
            }

            .navbar-top-right a span {
                display: none;
            }

            .hamburger {
                display: flex;
            }

            .navbar-bottom .container {
                justify-content: space-between;
            }

            /* Hide nav-links by default on mobile, show when open */
            #navLinks {
                display: none;
                flex-direction: column;
                align-items: flex-start;
                position: absolute;
                top: 52px;
                left: 0;
                right: 0;
                background: var(--teal);
                z-index: 998;
                padding: 8px 0;
                width: 100%;
                height: auto;
                gap: 0;
            }

            #navLinks.open {
                display: flex;
            }

            .nav-links>li {
                height: auto;
                width: 100%;
            }

            .nav-links>li>a {
                height: auto;
                padding: 13px 20px;
                width: 100%;
                border-radius: 0;
            }

            .dropdown-menu {
                position: static;
                box-shadow: none;
                border: none;
                background: rgba(0, 0, 0, 0.15);
                border-radius: 0;
                padding: 0;
                display: none;
            }

            .nav-links>li.open .dropdown-menu {
                display: block;
            }

            .nav-links>li:hover .dropdown-menu {
                display: none;
            }

            .dropdown-menu a {
                color: #fff;
            }

            .dropdown-menu a:hover {
                background: rgba(0, 0, 0, 0.1);
                color: #fff;
            }

            .nav-right-icons {
                display: none;
            }

            .global-contact-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 600px) {
            .navbar-top-right {
                gap: 10px;
            }

            .footer-cols {
                grid-template-columns: 1fr;
            }
        }
    </style>
    @stack('styles')
</head>

<body>

    {{-- NAVBAR ROW 1: Logo + Contact --}}
    <div class="navbar-top">
        <div class="container">
            <a href="{{ route('home') }}" class="logo">
                <img src="{{ asset('images/logo-floorshine.png') }}" height="48" alt="Floorshine Logo">
            </a>
            <div class="navbar-top-right">
                <a href="tel:+6588112999" aria-label="Call us at +65 8811 2999">
                    <i class="fas fa-phone"></i>
                    <span>8811 2999</span>
                </a>

                <a href="mailto:enquiry@floorpolishing.sg" aria-label="Email us at enquiry@floorpolishing.sg">
                    <i class="fas fa-envelope"></i>
                    <span>enquiry@floorpolishing.sg</span>
                </a>
            </div>
        </div>
    </div>

    {{-- NAVBAR ROW 2: Menu (teal) --}}
    <nav class="navbar-bottom" id="navbarBottom">
        <div class="container">
            <ul class="nav-links" id="navLinks">
                <li>
                    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}" aria-label="Home">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About
                        Us</a>
                </li>
                <li id="serviceDropdown">
                    <a href="#" class="{{ request()->routeIs('services.*') ? 'active' : '' }}">
                        Services <i class="fas fa-chevron-down"></i>
                    </a>
                    <div class="dropdown-menu">
                        <a href="{{ route('services.marble') }}"><span class="icon"><i class="fas fa-gem"></i></span>
                            Marble Polishing</a>
                        <a href="{{ route('services.granite') }}"><span class="icon"><i
                                    class="fas fa-mountain"></i></span> Granite Polishing</a>
                        <a href="{{ route('services.homogeneous') }}"><span class="icon"><i
                                    class="fas fa-th-large"></i></span> Homogeneous Tiles Polishing</a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('services.parquet') }}"><span class="icon"><i
                                    class="fas fa-grip-lines"></i></span> Parquet Polishing</a>
                        <a href="{{ route('services.limestone') }}"><span class="icon"><i
                                    class="fas fa-layer-group"></i></span> Limestone Polishing</a>
                        <a href="{{ route('services.outdoor') }}"><span class="icon"><i
                                    class="fas fa-sun"></i></span> Outdoor Ceramic Tiles Polishing</a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('services.porcelain') }}"><span class="icon"><i
                                    class="fas fa-circle"></i></span> Porcelain Polishing</a>
                        <a href="{{ route('services.terrazzo') }}"><span class="icon"><i
                                    class="fas fa-border-all"></i></span> Terrazzo Polishing</a>
                    </div>
                </li>
                <li>
                    <a href="{{ route('faq') }}" class="{{ request()->routeIs('faq') ? 'active' : '' }}">FAQ</a>
                </li>
                <li>
                    <a href="https://wa.me/6588112999" target="_blank" rel="noopener noreferrer">WhatsApp Us</a>
                </li>
            </ul>

            {{-- Social icons kanan --}}
            <div class="nav-right-icons">
                <a href="https://www.facebook.com/profile.php?id=61565065500306&mibextid=ZbWKwL" title="Facebook"
                    target="_blank" rel="noopener noreferrer" aria-label="Follow us on Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </div>

            {{-- Hamburger for mobile --}}
            <button class="hamburger" id="hamburger" aria-label="Toggle menu">
                <span></span><span></span><span></span>
            </button>
        </div>

    </nav>

    {{-- MAIN CONTENT --}}
    <main>@yield('content')</main>

    {{-- GLOBAL CONTACT SECTION --}}
    <section class="global-contact" id="quote">
        <div class="container">
            <div class="global-contact-grid">
                <div class="gc-info">
                    <h2>
                        Floorshine | Floor Polishing
                        <span>Singapore</span>
                    </h2>
                    <p>Contact us today for a free consultation and quote. Our team is ready to help restore the beauty
                        of your floors.</p>
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
                            <div class="gc-val"><a href="https://wa.me/6588112999" target="_blank"
                                    rel="noopener noreferrer" aria-label="Chat on WhatsApp">8811 2999</a>
                            </div>
                        </div>
                    </div>
                    <div class="gc-item">
                        <div class="gc-icon"><i class="fas fa-envelope"></i></div>
                        <div>
                            <div class="gc-label">Email</div>
                            <div class="gc-val"><a
                                    href="mailto:enquiry@floorpolishing.sg">enquiry@floorpolishing.sg</a></div>
                        </div>
                    </div>
                    <div class="gc-item">
                        <div class="gc-icon"><i class="fas fa-clock"></i></div>
                        <div>
                            <div class="gc-label">Operating Hours</div>
                            <div class="gc-val">Mon – Sat: 9:00 am – 6:00 pm</div>
                        </div>
                    </div>
                </div>
                <div class="gc-map">
                    <iframe
                        src="https://www.google.com/maps?q=18+Sin+Ming+Lane+%2306-27+Midview+City+Singapore+573960&hl=en-SG&output=embed"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        title="Google Maps location of Floorshine Singapore office">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    {{-- FOOTER --}}
    <footer class="site-footer">
        <div class="footer-main-wrap">
            <div class="container">
                <div class="footer-cols">
                    <div>
                        <div class="f-logo">
                            <img src="{{ asset('images/black-logo.png') }}" alt="logo footer">
                        </div>
                        <p class="f-desc">Floorshine is a trusted floor polishing specialist in Singapore — providing
                            professional floor polishing services for all types of flooring such as marble, granite,
                            terrazzo and more. All at affordable prices. Contact us via WhatsApp to find out more about
                            our services and book your floor polishing service today.</p>
                        <div class="f-social">
                            <a href="https://www.facebook.com/profile.php?id=61565065500306&mibextid=ZbWKwL" aria-label="Follow us on Facebook"
                                target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://wa.me/6588112999" aria-label="Chat on WhatsApp" target="_blank" rel="noopener noreferrer"><i
                                    class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
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
                    <div>
                        <div class="f-heading">Follow Us</div>
                        <ul class="f-links" style="margin-bottom:20px;">
                            <li><a href="https://www.facebook.com/profile.php?id=61565065500306&mibextid=ZbWKwL"><i
                                        class="fab fa-facebook-f" style="width:16px;"></i> Facebook</a>
                            </li>
                        </ul>
                        <div class="f-heading">Quick Links</div>
                        <ul class="f-links">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('faq') }}">FAQ</a></li>
                        </ul>
                    </div>
                    <div class="footer-enquiry-col">
                        <h3>Enquiry Form</h3>

                        @if (session('enquiry_success'))
                            <div
                                style="
            background:rgba(53,173,181,0.15); border:1px solid rgba(53,173,181,0.4);
            border-radius:8px; padding:12px 16px; margin-bottom:16px;
            color:#35adb5; font-size:14px;
        ">
                                ✅ Thank you! Your enquiry has been sent. We'll get back to you soon.
                            </div>
                        @endif

                        <form method="POST" action="{{ route('enquiry.send') }}">
                            @csrf
                            <div class="enq-group">
                                <input type="text" name="subject" placeholder="Subject"
                                    value="{{ old('subject') }}"
                                    style="{{ $errors->has('subject') ? 'border-color:#ff6b6b;' : '' }}">
                                @error('subject')
                                    <span style="color:#ff6b6b; font-size:12px;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="enq-group">
                                <input type="text" name="name" placeholder="Name" value="{{ old('name') }}"
                                    style="{{ $errors->has('name') ? 'border-color:#ff6b6b;' : '' }}">
                                @error('name')
                                    <span style="color:#ff6b6b; font-size:12px;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="enq-group">
                                <input type="email" name="email" placeholder="Email"
                                    value="{{ old('email') }}"
                                    style="{{ $errors->has('email') ? 'border-color:#ff6b6b;' : '' }}">
                                @error('email')
                                    <span style="color:#ff6b6b; font-size:12px;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="enq-group">
                                <input type="tel" name="mobile" placeholder="Mobile"
                                    value="{{ old('mobile') }}">
                            </div>
                            <div class="enq-group">
                                <textarea name="question" placeholder="Your Question">{{ old('question') }}</textarea>
                                @error('question')
                                    <span style="color:#ff6b6b; font-size:12px;">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn-enq-submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p>&copy; {{ date('Y') }} Floorshine. All rights reserved. | Singapore Professional Floor Polishing
                </p>
                <div style="display:flex; gap:16px;">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    {{-- WhatsApp Float --}}
    <a href="https://wa.me/6588112999" class="wa-float" target="_blank" rel="noopener noreferrer"
        title="Chat on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>

    <script>
        const hamburger = document.getElementById('hamburger');
        const navLinks = document.getElementById('navLinks');
        hamburger.addEventListener('click', () => navLinks.classList.toggle('open'));

        const serviceDropdown = document.getElementById('serviceDropdown');
        serviceDropdown.querySelector('a').addEventListener('click', function(e) {
            if (window.innerWidth <= 900) {
                e.preventDefault();
                serviceDropdown.classList.toggle('open');
            }
        });

        document.addEventListener('click', function(e) {
            if (window.innerWidth <= 900) {
                if (!navLinks.contains(e.target) && !hamburger.contains(e.target)) {
                    navLinks.classList.remove('open');
                }
            }
        });
    </script>
    @stack('scripts')
</body>

</html>
