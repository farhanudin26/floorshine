@extends('layouts.app')

@section('title', '404 — Page Not Found | Floorshine Singapore')
@section('meta_robots', 'noindex, nofollow')
@push('styles')
<style>
    .page-404 {
        min-height: 80vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 80px 24px;
        text-align: center;
        position: relative;
        overflow: hidden;
        background: #f7fbfc;
    }

    .shine-top-bar {
        position: absolute;
        top: 0; left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, #35adb5, #efb700, #35adb5);
        background-size: 200% 100%;
        animation: shineSlide 2.5s infinite linear;
    }

    @keyframes shineSlide {
        0%   { background-position: 0% 50%; }
        100% { background-position: 200% 50%; }
    }

    .bg-orb {
        position: absolute;
        border-radius: 50%;
        background: rgba(53, 173, 181, 0.06);
        pointer-events: none;
    }

    .e404-badge {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        background: rgba(53, 173, 181, 0.12);
        color: #2a9aa2;
        padding: 5px 16px;
        border-radius: 100px;
        font-size: 13px;
        font-weight: 600;
        margin-bottom: 28px;
    }

    .e404-num-wrap {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 4px;
        margin-bottom: 32px;
    }

    .e404-num {
        font-size: clamp(90px, 18vw, 150px);
        font-weight: 800;
        color: #35adb5;
        line-height: 1;
        letter-spacing: -3px;
        font-family: var(--font-head, sans-serif);
    }

    .e404-icon-box {
        width: clamp(72px, 12vw, 110px);
        height: clamp(72px, 12vw, 110px);
        background: #35adb5;
        border-radius: 18px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        box-shadow: 0 8px 30px rgba(53, 173, 181, 0.35);
    }

    .e404-icon-box i {
        font-size: clamp(30px, 5vw, 44px);
        color: #fff;
    }

    .e404-title {
        font-family: var(--font-head, sans-serif);
        font-size: clamp(22px, 3.5vw, 34px);
        font-weight: 800;
        color: var(--navy, #0d2a38);
        margin-bottom: 14px;
        letter-spacing: -0.5px;
    }

    .e404-sub {
        font-size: 15.5px;
        color: var(--gray-600, #6b7c85);
        line-height: 1.75;
        max-width: 520px;
        margin: 0 auto 36px;
    }

    .e404-btn-row {
        display: flex;
        gap: 12px;
        justify-content: center;
        flex-wrap: wrap;
    }

    .e404-btn-home {
        background: #35adb5;
        color: #fff;
        padding: 13px 28px;
        border-radius: 8px;
        text-decoration: none;
        font-size: 14.5px;
        font-weight: 700;
        font-family: var(--font-head, sans-serif);
        display: inline-flex;
        align-items: center;
        gap: 9px;
        transition: all 0.2s;
        box-shadow: 0 4px 18px rgba(53, 173, 181, 0.25);
    }

    .e404-btn-home:hover {
        background: #2a9aa2;
        color: #fff;
        transform: translateY(-2px);
    }

    .e404-btn-wa {
        background: #25D366;
        color: #fff;
        padding: 13px 28px;
        border-radius: 8px;
        text-decoration: none;
        font-size: 14.5px;
        font-weight: 700;
        font-family: var(--font-head, sans-serif);
        display: inline-flex;
        align-items: center;
        gap: 9px;
        transition: all 0.2s;
        box-shadow: 0 4px 18px rgba(37, 211, 102, 0.25);
    }

    .e404-btn-wa:hover {
        background: #1da851;
        color: #fff;
        transform: translateY(-2px);
    }

    .e404-divider {
        width: 56px;
        height: 3px;
        background: #35adb5;
        border-radius: 10px;
        margin: 40px auto 22px;
    }

    .e404-ql-label {
        font-size: 12.5px;
        color: #8ba3ad;
        font-weight: 600;
        letter-spacing: 0.8px;
        text-transform: uppercase;
        margin-bottom: 16px;
    }

    .e404-quick-links {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
        justify-content: center;
    }

    .e404-ql {
        background: #f0fafb;
        color: #35adb5;
        border: 1px solid #b2e8ec;
        border-radius: 100px;
        padding: 7px 18px;
        font-size: 13px;
        font-weight: 600;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 7px;
        transition: all 0.18s;
    }

    .e404-ql:hover {
        background: #35adb5;
        color: #fff;
        border-color: #35adb5;
    }

    .e404-stats {
        display: flex;
        gap: 40px;
        justify-content: center;
        margin-top: 50px;
    }

    .e404-stat { text-align: center; }
    .e404-stat .n {
        font-family: var(--font-head, sans-serif);
        font-size: 26px;
        font-weight: 800;
        color: #35adb5;
        line-height: 1;
    }
    .e404-stat .l {
        font-size: 12.5px;
        color: #8ba3ad;
        margin-top: 4px;
    }
</style>
@endpush

@section('content')
<div class="page-404">
    <div class="shine-top-bar"></div>
    <div class="bg-orb" style="width:500px;height:500px;top:-130px;right:-150px;"></div>
    <div class="bg-orb" style="width:320px;height:320px;bottom:-80px;left:-80px;"></div>

    {{-- Badge --}}
    <div class="e404-badge">
        <i class="fas fa-layer-group" style="font-size:12px;"></i>
        Floorshine Singapore
    </div>

    {{-- 404 Number --}}
    <div class="e404-num-wrap">
        <span class="e404-num">4</span>
        <div class="e404-icon-box">
            <i class="fas fa-search-minus"></i>
        </div>
        <span class="e404-num">4</span>
    </div>

    {{-- Message --}}
    <h1 class="e404-title">We're Refreshing Our Website!</h1>
    <p class="e404-sub">We've just launched our new website! Some links from Google or old bookmarks may not work yet while our pages get re-indexed. Don't worry — all our services are still available. Use the links below or chat with us on WhatsApp.</p>

    {{-- Buttons --}}
    <div class="e404-btn-row">
        <a href="{{ url('/') }}" class="e404-btn-home">
            <i class="fas fa-home"></i> Back to Home
        </a>
        <a href="https://wa.me/6588112999" class="e404-btn-wa" target="_blank" rel="noopener noreferrer" rel="noopener">
            <i class="fab fa-whatsapp"></i> WhatsApp Us
        </a>
    </div>

    {{-- Divider + Quick Links --}}
    <div class="e404-divider"></div>
    <p class="e404-ql-label">Or browse our services</p>
    <div class="e404-quick-links">
        <a href="{{ route('services.marble') }}" class="e404-ql">
            <i class="fas fa-gem" style="font-size:11px;"></i> Marble
        </a>
        <a href="{{ route('services.granite') }}" class="e404-ql">
            <i class="fas fa-mountain" style="font-size:11px;"></i> Granite
        </a>
        <a href="{{ route('services.parquet') }}" class="e404-ql">
            <i class="fas fa-grip-lines" style="font-size:11px;"></i> Parquet
        </a>
        <a href="{{ route('services.homogeneous') }}" class="e404-ql">
            <i class="fas fa-th-large" style="font-size:11px;"></i> Homogeneous
        </a>
        <a href="{{ route('services.porcelain') }}" class="e404-ql">
            <i class="fas fa-circle" style="font-size:11px;"></i> Porcelain
        </a>
        <a href="{{ route('services.terrazzo') }}" class="e404-ql">
            <i class="fas fa-border-all" style="font-size:11px;"></i> Terrazzo
        </a>
        <a href="{{ route('services.limestone') }}" class="e404-ql">
            <i class="fas fa-layer-group" style="font-size:11px;"></i> Limestone
        </a>
        <a href="{{ route('services.outdoor') }}" class="e404-ql">
            <i class="fas fa-sun" style="font-size:11px;"></i> Outdoor Tiles
        </a>
    </div>

{{-- WhatsApp Float --}}
<a href="https://wa.me/6588112999" class="wa-float" target="_blank" rel="noopener noreferrer" title="Chat on WhatsApp">
    <i class="fab fa-whatsapp"></i>
</a>
@endsection
