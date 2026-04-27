# 🌟 Floorshine — Singapore Professional Floor Polishing

<p align="center">
  <img src="public/images/logo-floorshine.png" alt="Floorshine Logo" width="200"/>
</p>

<p align="center">
  <strong>Professional Floor Polishing Services in Singapore</strong><br>
  Specialised in Marble, Granite, Parquet, Homogeneous Tiles, Limestone, Outdoor Ceramic, Porcelain & Terrazzo
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-7.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white"/>
  <img src="https://img.shields.io/badge/PHP-7.x-777BB4?style=for-the-badge&logo=php&logoColor=white"/>
  <img src="https://img.shields.io/badge/Font-Poppins-4285F4?style=for-the-badge&logo=google-fonts&logoColor=white"/>
  <img src="https://img.shields.io/badge/Icons-Font%20Awesome-528DD7?style=for-the-badge&logo=fontawesome&logoColor=white"/>
</p>

---

## 📋 Tentang Project

**Floorshine** adalah website profesional untuk perusahaan jasa poles lantai di Singapura. Website ini dibangun menggunakan **Laravel 7** dan menampilkan berbagai layanan pemolesan lantai dengan desain modern, responsif, dan menggunakan font Poppins.

Website ini dirancang untuk memberikan pengalaman terbaik kepada calon pelanggan dengan informasi lengkap tentang setiap jenis layanan, proses pengerjaan, FAQ, dan cara menghubungi tim Floorshine.

---

## ✨ Fitur

- 🏠 **Halaman Home** — Hero section, statistik, solusi, layanan, testimonial, cara kerja, FAQ, dan booking
- 📄 **Halaman About** — Profil perusahaan, visi, misi, dan keunggulan
- 🔧 **8 Halaman Service** — Masing-masing dengan konten lengkap dan spesifik:
  - Marble Polishing
  - Granite Polishing
  - Homogeneous Tiles Polishing
  - Parquet Polishing
  - Limestone Polishing
  - Outdoor Ceramic Tiles Polishing
  - Porcelain Polishing
  - Terrazzo Polishing
- 📞 **Global Contact Section** — Tampil di semua halaman dengan info kontak & Google Maps
- 📋 **Footer** — Enquiry form, daftar layanan, follow us, dan quick links
- 💬 **WhatsApp Float Button** — Tombol WhatsApp mengambang di semua halaman
- 📱 **Fully Responsive** — Tampilan optimal di desktop, tablet, dan mobile
- 🔽 **Dropdown Navbar** — Menu Services dengan dropdown 8 halaman service

---

## 🛠️ Tech Stack

| Teknologi | Versi | Keterangan |
|-----------|-------|------------|
| PHP | 7.x | Backend language |
| Laravel | 7.x | PHP Framework |
| HTML5 | - | Markup |
| CSS3 | - | Styling (vanilla CSS) |
| JavaScript | ES6 | Interaktivitas |
| Font Awesome | 6.4.0 | Icon library |
| Google Fonts | - | Font Poppins |
| Google Maps | Embed API | Peta lokasi |

---

## 📁 Struktur Project

```
floorshine/
├── app/
│   └── Http/
│       └── Controllers/
│           ├── HomeController.php       # Controller halaman utama
│           └── ServiceController.php   # Controller semua halaman service
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php           # Layout utama (navbar, footer, contact)
│       ├── services/
│       │   ├── marble.blade.php
│       │   ├── granite.blade.php
│       │   ├── homogeneous.blade.php
│       │   ├── parquet.blade.php
│       │   ├── limestone.blade.php
│       │   ├── outdoor.blade.php
│       │   ├── porcelain.blade.php
│       │   └── terrazzo.blade.php
│       ├── home.blade.php
│       ├── about.blade.php
│       ├── faq.blade.php
│       └── blog.blade.php
├── routes/
│   └── web.php                         # Semua route website
├── public/
│   └── images/
│       ├── logo-floorshine.png         # Logo utama
│       └── floors/                     # Gambar tiap jenis lantai
│           ├── marble-hero.jpg
│           ├── granite-hero.jpg
│           ├── homogeneous-hero.jpg
│           ├── parquet-hero.jpg
│           ├── limestone-hero.jpg
│           ├── outdoor-hero.jpg
│           ├── porcelain-hero.jpg
│           └── terrazzo-hero.jpg
└── README.md
```

---

## 🚀 Cara Instalasi & Menjalankan

### Prasyarat
Pastikan sudah terinstall:
- **PHP 7.x**
- **Composer**
- **Git**

### Langkah Instalasi

**1. Clone repository**
```bash
git clone https://github.com/username/floorshine.git
cd floorshine
```

**2. Install dependencies**
```bash
composer install
```

**3. Setup environment**
```bash
cp .env.example .env
php artisan key:generate
```

**4. Konfigurasi `.env`**
```env
APP_NAME=Floorshine
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost:8000
```

**5. Jalankan development server**
```bash
php artisan serve
```

**6. Buka browser**
```
http://127.0.0.1:8000
```

---

## 🗺️ Daftar Route

| Method | URL | Controller | Keterangan |
|--------|-----|------------|------------|
| GET | `/` | HomeController@index | Halaman Home |
| GET | `/about` | HomeController@about | Halaman About |
| GET | `/faq` | HomeController@faq | Halaman FAQ |
| GET | `/blog` | HomeController@blog | Halaman Blog |
| GET | `/services/marble-polishing` | ServiceController@marble | Marble |
| GET | `/services/granite-polishing` | ServiceController@granite | Granite |
| GET | `/services/homogeneous-tiles-polishing` | ServiceController@homogeneous | Homogeneous |
| GET | `/services/parquet-polishing` | ServiceController@parquet | Parquet |
| GET | `/services/limestone-polishing` | ServiceController@limestone | Limestone |
| GET | `/services/outdoor-ceramic-tiles-polishing` | ServiceController@outdoor | Outdoor Ceramic |
| GET | `/services/porcelain-polishing` | ServiceController@porcelain | Porcelain |
| GET | `/services/terrazzo-polishing` | ServiceController@terrazzo | Terrazzo |

---

## 🖼️ Menambahkan Gambar

Simpan semua gambar di folder `public/images/floors/` dengan nama file berikut:

| File | Digunakan di |
|------|-------------|
| `logo-floorshine.png` | Navbar (semua halaman) |
| `marble-hero.jpg` | Hero section Marble |
| `marble-room.jpg` | About section Marble |
| `marble-why.jpg` | Why section Marble |
| `marble-process.jpg` | Process section Marble |
| `marble-maintenance.jpg` | Maintenance section Marble |
| `granite-hero.jpg` | Hero section Granite |
| `homogeneous-hero.jpg` | Hero section Homogeneous |
| `parquet-hero.jpg` | Hero section Parquet |
| `limestone-hero.jpg` | Hero section Limestone |
| `outdoor-hero.jpg` | Hero section Outdoor Ceramic |
| `porcelain-hero.jpg` | Hero section Porcelain |
| `terrazzo-hero.jpg` | Hero section Terrazzo |

> 💡 **Tips:** Gunakan gambar beresolusi minimal **1200x800px** untuk hero dan **800x600px** untuk section lainnya. Format **JPG** disarankan untuk ukuran file yang lebih kecil.

---

## 🗺️ Google Maps

Untuk mengganti embed Google Maps ke lokasi bisnis asli:

1. Buka [Google Maps](https://maps.google.com)
2. Cari lokasi bisnis Floorshine
3. Klik **Share** → **Embed a map**
4. Copy URL dari `src="..."`
5. Paste di `resources/views/layouts/app.blade.php` pada bagian:
```html
{{-- CATATAN GOOGLE MAPS --}}
<iframe src="PASTE_URL_DI_SINI" ...>
```

---

## 🎨 Kustomisasi Warna & Font

Semua warna utama dan font didefinisikan sebagai CSS variables di `layouts/app.blade.php`:

```css
:root {
    --teal:       #1DBBA4;   /* Warna utama */
    --teal-dark:  #14967F;   /* Warna utama gelap */
    --teal-light: #E6F7F5;   /* Warna utama terang */
    --navy:       #0D2B45;   /* Warna navy/gelap */
    --font-head:  'Poppins', sans-serif;
    --font-body:  'Poppins', sans-serif;
}
```

> Ubah nilai di atas untuk mengganti tema warna seluruh website sekaligus.

---

## 📞 Informasi Kontak Floorshine

| | |
|---|---|
| 📍 **Alamat** | 18 Sin Ming Lane, #06-27, Midview City, Singapore 573960 |
| 📱 **WhatsApp** | +65 8877 2899 |
| 📧 **Email** | enquiry@floorpolishing.sg |
| 🕐 **Jam Operasional** | Mon – Fri: 9:00 am – 6:00 pm |

---

## 🔧 Perintah Berguna

```bash
# Jalankan server development
php artisan serve

# Clear semua cache
php artisan cache:clear
php artisan view:clear
php artisan config:clear
php artisan route:clear

# Generate app key baru
php artisan key:generate

# Lihat semua route
php artisan route:list
```

---

## 📝 Catatan Pengembangan

- Semua halaman menggunakan **layout utama** `layouts/app.blade.php`
- **Contact section** dan **footer** hanya ada di layout — tidak perlu ditambahkan di masing-masing halaman
- **WhatsApp float button** otomatis muncul di semua halaman dari layout
- Hero background tiap halaman service menggunakan warna `#35adb5` sebagai fallback saat gambar belum tersedia
- Untuk menambahkan gambar hero, cari komentar `CATATAN:` di dalam setiap file blade

---

## 📄 Lisensi

Project ini dikembangkan untuk **Floorshine Singapore**.
© 2025 Floorshine. All rights reserved.
