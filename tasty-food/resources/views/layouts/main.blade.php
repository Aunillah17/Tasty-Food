<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Tasty Food</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">
   
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #ffffff;
            overflow-x: hidden;
        }
        /* --- NAVBAR BASE STYLING --- */
        .navbar-custom {
            background-color: transparent;
            padding: 25px 0;
            position: relative;
            z-index: 10000 !important;
        }
       
        /* Default Brand (Logo TASTY FOOD) */
        .navbar-brand-custom {
            font-weight: 800;
            font-size: 24px;
            color: #000000 !important;
            letter-spacing: 1px;
            transition: color 0.3s ease;
        }
       
        /* Default Link Menu (Desktop) */
        .nav-link-custom {
            font-weight: 700;
            font-size: 13px;
            color: #000000 !important;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 10px 15px !important;
            transition: color 0.3s ease;
        }
        .nav-link-custom:hover {
            color: #fbbf24 !important;
        }
        /* --- BURGER MENU BASE STYLING --- */
        .navbar-toggler {
            border: 2px solid #000000 !important;
            padding: 6px 10px;
            position: relative;
            z-index: 10005 !important;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        .navbar-toggler-icon {
            filter: invert(0);
        }
        /* --- AUTOMATIC COLOR ADAPTATION FOR SUBPAGES (NON-HOME) --- */
        @unless(Request::is('/'))
            .navbar-brand-custom {
                color: #ffffff !important;
            }
            .navbar-toggler {
                border-color: #ffffff !important;
            }
            .navbar-toggler-icon {
                filter: invert(1) brightness(2);
            }
            .nav-link-custom {
                color: #ffffff !important;
            }
        @endunless
        /* --- RESPONSIVE MOBILE DROPDOWN HP FIX --- */
        @media (max-width: 991.98px) {
            .navbar-collapse {
                background-color: #111111 !important;
                padding: 25px;
                border-radius: 12px;
                margin-top: 15px;
                box-shadow: 0 10px 30px rgba(0,0,0,0.3);
                position: relative;
                z-index: 10001 !important;
            }
            .navbar-nav .nav-link-custom {
                color: #ffffff !important;
                padding: 14px 12px !important;
                border-bottom: 1px solid rgba(255, 255, 255, 0.08) !important;
                font-size: 14px;
                text-align: left;
            }
            .navbar-nav .nav-item:last-child .nav-link-custom {
                border-bottom: none !important;
            }
            .navbar-nav .nav-link-custom:hover {
                color: #fbbf24 !important;
                background-color: rgba(255, 255, 255, 0.05);
                border-radius: 6px;
            }
        }
        /* --- FOOTER STYLING --- */
        .footer-custom {
            background-color: #111111;
            color: #ffffff;
            padding: 80px 0 30px 0;
        }
        .footer-logo {
            font-weight: 800;
            font-size: 24px;
            letter-spacing: 1px;
        }
        .footer-text {
            color: #a1a1aa;
            font-size: 13px;
            line-height: 1.8;
        }
        .footer-title {
            font-weight: 700;
            font-size: 16px;
            margin-bottom: 25px;
            text-transform: capitalize;
        }
        .footer-links list-unstyled li {
            margin-bottom: 12px;
        }
        .footer-links a {
            color: #a1a1aa;
            text-decoration: none;
            font-size: 13px;
            transition: color 0.3s ease;
        }
        .footer-links a:hover {
            color: #ffffff;
        }
       
        /* --- BRANDED ASSETS FOR SOCIAL MEDIA --- */
        .social-icon-box {
            display: inline-block;
            margin-right: 15px;
            transition: transform 0.3s ease;
        }
        .social-icon-box:hover {
            transform: translateY(-3px);
        }
        .social-img-asset {
            width: 32px;  /* Ukuran disesuaikan agar proporsional */
            height: auto;
        }
        /* --- BRANDED ASSETS FOR CONTACT LIST --- */
        .contact-item {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        .contact-img-asset {
            width: 24px;  /* Sesuai ukuran aset 24px bawaannya */
            height: auto;
            flex-shrink: 0;
        }
        .footer-bottom {
            border-top: 1px solid #222222;
            padding-top: 30px;
            margin-top: 60px;
            color: #71717a;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <!-- STATIC/TRANSPARENT NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <!-- DINAMIS: Logo Teks Navbar Terikat Database -->
            <a class="navbar-brand navbar-brand-custom" href="{{ url('/') }}">{{ $homeGlobal->logo_text ?? 'TASTY FOOD' }}</a>
           
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
           
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-2">
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="{{ url('/') }}">{{ $globalNavbar->menu_home }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="{{ url('/tentang') }}">{{ $globalNavbar->menu_tentang }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="{{ url('/berita') }}">{{ $globalNavbar->menu_berita }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="{{ url('/galeri') }}">{{ $globalNavbar->menu_galeri }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="{{ url('/kontak') }}">{{ $globalNavbar->menu_kontak }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- CONTENT PLACEHOLDER -->
    <main>
        @yield('content')
    </main>
    <!-- GLOBAL FOOTER (DINAMIS DARI DATABASE) -->
    <footer class="footer-custom">
        <div class="container">
            <div class="row g-5">
                <!-- Kolom 1: Profil Ringkas -->
                <div class="col-lg-4 col-md-6">
                    <h5 class="footer-logo mb-3">{{ $footerGlobal->brand_title ?? 'Tasty Food' }}</h5>
                    <p class="footer-text mb-4">
                        {{ $footerGlobal->brand_desc ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliqam at dignissim nunc, id maximus ex. Etiam nec dignissim elit, at dignissim enim.' }}
                    </p>
                    <div class="d-flex align-items-center">
                        <!-- Menggunakan Aset Facebook Resmi Perusahaan -->
                        @if(!empty($footerGlobal->facebook_url))
                        <a href="{{ $footerGlobal->facebook_url }}" class="social-icon-box" target="_blank">
                            <img src="{{ asset('assets/images/001-facebook@2x.avif') }}" alt="Facebook" class="social-img-asset">
                        </a>
                        @endif
                        <!-- Menggunakan Aset Twitter Resmi Perusahaan -->
                        @if(!empty($footerGlobal->twitter_url))
                        <a href="{{ $footerGlobal->twitter_url }}" class="social-icon-box" target="_blank">
                            <img src="{{ asset('assets/images/002-twitter@2x.avif') }}" alt="Twitter" class="social-img-asset">
                        </a>
                        @endif
                    </div>
                </div>
               
                <!-- Kolom 2: Useful Links -->
                <div class="col-lg-2 col-md-6 footer-links">
                    <h5 class="footer-title">Useful Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Hewan</a></li>
                        <li><a href="#">Galeri</a></li>
                        <li><a href="#">Testimonial</a></li>
                    </ul>
                </div>
               
                <!-- Kolom 3: Privacy -->
                <div class="col-lg-2 col-md-6 footer-links">
                    <h5 class="footer-title">Privacy</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Karir</a></li>
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Kontak Kami</a></li>
                        <li><a href="#">Servis</a></li>
                    </ul>
                </div>
               
                <!-- Kolom 4: Contact Info -->
                <div class="col-lg-4 col-md-6">
                    <h5 class="footer-title">Contact Info</h5>
                    <ul class="list-unstyled footer-text d-flex flex-column gap-3">
                        <!-- Kontak: Email menggunakan ic_markunread -->
                        <li class="contact-item">
                            <img src="{{ asset('assets/images/ic_markunread_24px@2x.avif') }}" alt="Email Icon" class="contact-img-asset">
                            <span>{{ $footerGlobal->email_address ?? 'tastyfood@gmail.com' }}</span>
                        </li>
                        <!-- Kontak: Telepon menggunakan ic_call -->
                        <li class="contact-item">
                            <img src="{{ asset('assets/images/ic_call_24px@2x.avif') }}" alt="Phone Icon" class="contact-img-asset">
                            <span>{{ $footerGlobal->phone_number ?? '+62 812 3456 7890' }}</span>
                        </li>
                        <!-- Kontak: Lokasi menggunakan ic_place -->
                        <li class="contact-item">
                            <img src="{{ asset('assets/images/ic_place_24px@2x.avif') }}" alt="Location Icon" class="contact-img-asset">
                            <span>{{ $footerGlobal->location_text ?? 'Kota Bandung, Jawa Barat' }}</span>
                        </li>
                    </ul>
                </div>
            </div>
           
            <!-- Hak Cipta -->
            <div class="row">
                <div class="col-12 text-center footer-bottom">
                    <p class="m-0">{!! $footerGlobal->copyright_text ?? 'Copyright &copy;2026 All rights reserved.' !!}</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap 5 JavaScript Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script Shortcut Rahasia: Ctrl + Shift + F -->
    <script>
        document.addEventListener('keydown', function(event) {
            // Cek apakah tombol Ctrl + Shift ditekan bersamaan dengan huruf 'F' (atau 'f')
            if (event.ctrlKey && event.shiftKey && (event.key === 'f' || event.key === 'F')) {
                event.preventDefault();
                window.location.href = '/tasty-secret-admin/login';
            }
        });
    </script>
</body>
</html>