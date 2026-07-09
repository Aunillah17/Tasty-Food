<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasty Food - @yield('title')</title>
    
    <!-- 1. Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- 2. Bootstrap 5 JavaScript Bundle (Wajib di head agar menu HP langsung aktif) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- 3. Bootstrap Icons (Untuk ikon pendukung selain logo sosmed perusahaan) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #ffffff;
            overflow-x: hidden;
        }

        /* ---------------------------------------------------------
           LOGIKA WARNA NAVBAR: DINAMIS MENGIKUTI HALAMAN ACUAN
           --------------------------------------------------------- */
        @if(Request::is('/') || Request::is('home'))
            /* Halaman HOME -> Tulisan & Brand Navbar otomatis HITAM */
            .navbar .navbar-brand,
            .navbar .nav-link,
            .navbar .navbar-nav .nav-link {
                color: #000000 !important;
            }
            .navbar-toggler { border-color: rgba(0, 0, 0, 0.2) !important; }
            .navbar-toggler-icon {
                background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.8%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e") !important;
            }
        @else
            /* Halaman SELAIN HOME -> Tulisan & Brand Navbar otomatis PUTIH */
            .navbar .navbar-brand,
            .navbar .nav-link,
            .navbar .navbar-nav .nav-link {
                color: #ffffff !important;
            }
            .navbar-toggler { border-color: rgba(255, 255, 255, 0.2) !important; }
            .navbar-toggler-icon {
                background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 1%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e") !important;
            }
        @endif

        /* Menu Dropdown Tampilan HP */
        @media (max-width: 991.98px) {
            .navbar-collapse {
                background-color: #111111 !important;
                border-radius: 8px;
                padding: 15px;
                margin-top: 10px;
            }
            .navbar-collapse .nav-link {
                color: #ffffff !important;
                padding: 10px 5px !important;
            }
        }

        /* ---------------------------------------------------------
           STYLING GLOBAL FOOTER (SERBA PUTIH)
           --------------------------------------------------------- */
        footer, footer h5, footer p, footer a, footer span, footer i, footer small {
            color: #ffffff !important;
            text-decoration: none !important;
        }
        footer { background-color: #111111 !important; }
    </style>
</head>
<body>

    <!-- NAVBAR HEADER -->
    <nav class="navbar navbar-expand-lg position-relative py-4">
        <div class="container">
            <!-- Logo berupa Teks sesuai Mockup -->
            <a class="navbar-brand text-uppercase fw-bold" href="{{ url('/') }}">Tasty Food</a>
            
            <!-- Tombol Garis Tiga Responsif HP -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#cleanNavbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse justify-content-end" id="cleanNavbarMenu">
                <ul class="navbar-nav gap-2">
                    <li class="nav-item"><a class="nav-link text-uppercase" href="{{ url('/') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-uppercase" href="{{ url('/tentang') }}">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link text-uppercase" href="{{ url('/berita') }}">Berita</a></li>
                    <li class="nav-item"><a class="nav-link text-uppercase" href="{{ url('/galeri') }}">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link text-uppercase" href="{{ url('/kontak') }}">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- TEMPAT ISI KONTEN TIAP HALAMAN -->
    <main>
        @yield('content')
    </main>

    <!-- FOOTER UTAMA -->
    <footer class="py-5 mt-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-uppercase mb-4 fw-bold">Tasty Food</h5>
                    <p class="mb-4 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <div class="d-flex gap-3">
                        <!-- Sosmed: Sementara pakai Bootstrap Icons, nanti diganti tag <img> asset perusahaan -->
                        <a href="#" style="font-size: 20px;"><i class="bi bi-facebook"></i></a>
                        <a href="#" style="font-size: 20px;"><i class="bi bi-twitter-x"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 ps-lg-5">
                    <h5 class="text-uppercase mb-4 fw-bold">Useful Links</h5>
                    <ul class="list-unstyled d-flex flex-column gap-2">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Hewan</a></li>
                        <li><a href="{{ url('/galeri') }}">Galeri</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-uppercase mb-4 fw-bold">Privacy</h5>
                    <ul class="list-unstyled d-flex flex-column gap-2">
                        <li><a href="#">Karir</a></li>
                        <li><a href="{{ url('/tentang') }}">Tentang Kami</a></li>
                        <li><a href="{{ url('/kontak') }}">Kontak Kami</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-uppercase mb-4 fw-bold">Contact Info</h5>
                    <ul class="list-unstyled d-flex flex-column gap-3">
                        <!-- Info Kontak: Sementara pakai Bootstrap Icons, nanti diganti tag <img> asset perusahaan -->
                        <li class="d-flex align-items-center gap-3"><i class="bi bi-envelope-fill"></i><span>tastyfood@gmail.com</span></li>
                        <li class="d-flex align-items-center gap-3"><i class="bi bi-telephone-fill"></i><span>+62 812 3456 7890</span></li>
                        <li class="d-flex align-items-center gap-3"><i class="bi bi-geo-alt-fill"></i><span>Kota Bandung, Jawa Barat</span></li>
                    </ul>
                </div>
            </div>
            <div class="text-center mt-5 pt-4 border-top border-secondary">
                <small>Copyright ©2026 All rights reserved</small>
            </div>
        </div>
    </footer>

</body>
</html>