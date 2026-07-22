<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Panel Admin Tasty Food</title>
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
        /* NAVBAR ADMIN STYLING (Tema Hitam Khas Tasty Food) */
        .navbar-admin {
            background-color: #000000;
            padding: 20px 0;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }
        .navbar-brand-admin {
            font-weight: 800;
            font-size: 22px;
            color: #ffffff !important;
            letter-spacing: 1px;
        }
        .navbar-brand-admin span {
            color: #fbbf24;
        }
        .nav-link-admin {
            font-weight: 700;
            font-size: 13px;
            color: #a1a1aa !important;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 10px 15px !important;
            transition: color 0.3s ease;
        }
        .nav-link-admin:hover, .nav-link-admin.active {
            color: #fbbf24 !important;
        }
        /* CUSTOM BRANDED INPUT FORM */
        .form-control-branded {
            border: 2px solid #000000 !important;
            border-radius: 0px !important; /* Kotak tegas khas mockup */
            padding: 12px 15px;
            font-family: 'Montserrat', sans-serif;
            font-size: 14px;
            color: #000000;
            transition: all 0.3s ease;
        }
        .form-control-branded:focus {
            box-shadow: none;
            border-color: #fbbf24 !important;
            background-color: #fffbeb;
        }
        /* BRANDED BUTTON */
        .btn-dark-custom {
            background-color: #000000;
            color: #ffffff;
            border-radius: 0px;
            padding: 12px 35px;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 13px;
            letter-spacing: 1px;
            border: none;
            transition: all 0.3s ease;
        }
        .btn-dark-custom:hover {
            background-color: #fbbf24;
            color: #000000;
        }
        .btn-outline-dark-custom {
            background-color: transparent;
            color: #000000;
            border: 2px solid #000000;
            border-radius: 0px;
            padding: 12px 35px;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 13px;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }
        .btn-outline-dark-custom:hover {
            background-color: #000000;
            color: #ffffff;
        }
        /* CARD MANAGEMENT BOX */
        .card-branded {
            border: 2px solid #000000;
            border-radius: 0px;
            background: #ffffff;
            box-shadow: 8px 8px 0px #000000; /* Efek shadow retro kontemporer */
        }
        .title-line-admin {
            width: 50px;
            height: 3px;
            background-color: #fbbf24;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <!-- NAVBAR KHUSUS ADMIN (VERSI LENGKAP NAVIGASI) -->
    <nav class="navbar navbar-expand-lg navbar-admin mb-5">
        <div class="container">
            <a class="navbar-brand navbar-brand-admin" href="/tasty-secret-admin">TASTY FOOD <span>ADMIN</span></a>
           
            <button class="navbar-toggler border-white text-white" type="button" data-bs-toggle="collapse" data-bs-target="#adminNavbar">
                <!-- Filter invert biar ikon burger-nya warna putih -->
                <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
            </button>
           
            <div class="collapse navbar-collapse" id="adminNavbar">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-1 align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link nav-link-admin {{ Request::is('tasty-secret-admin') ? 'active' : '' }}" href="/tasty-secret-admin">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-admin {{ Request::is('tasty-secret-admin/home') ? 'active' : '' }}" href="/tasty-secret-admin/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-admin {{ Request::is('tasty-secret-admin/tentang') ? 'active' : '' }}" href="/tasty-secret-admin/tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-admin {{ Request::is('tasty-secret-admin/berita*') ? 'active' : '' }}" href="/tasty-secret-admin/berita">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-admin {{ Request::is('tasty-secret-admin/galeri*') ? 'active' : '' }}" href="/tasty-secret-admin/galeri">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-admin {{ Request::is('tasty-secret-admin/kontak*') ? 'active' : '' }}" href="/tasty-secret-admin/kontak">Kontak</a>
                    </li>
                    <!-- MENU KELOLA NAVBAR YANG BARU -->
                    <li class="nav-item">
                        <a class="nav-link nav-link-admin {{ Request::is('tasty-secret-admin/navbar*') ? 'active' : '' }}" href="/tasty-secret-admin/navbar">Navbar</a>
                    </li>
                    <li class="nav-item ms-lg-2">
                        <a class="nav-link nav-link-admin text-warning" href="{{ url('/') }}" target="_blank" style="color: #fbbf24 !important;">Lihat Web ↗</a>
                    </li>

                    <!-- TOMBOL LOGOUT (MEMBUKA MODAL KONFIRMASI) -->
                    <li class="nav-item ms-lg-2">
                        <button type="button" class="btn btn-sm btn-outline-danger text-uppercase fw-bold rounded-0 px-3 py-2" data-bs-toggle="modal" data-bs-target="#logoutModal">
                            Logout
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- KONTEN UTAMA ADMIN -->
    <main class="py-2">
        @yield('content')
    </main>

    <!-- MODAL KONFIRMASI LOGOUT -->
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-2 border-dark rounded-0 shadow">
                <div class="modal-header bg-dark text-white rounded-0">
                    <h5 class="modal-title fw-bold text-uppercase fs-6" id="logoutModalLabel">Konfirmasi Logout</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center py-4">
                    <p class="fs-5 fw-semibold mb-1">Apakah kamu yakin ingin keluar?</p>
                    <p class="text-muted small mb-0">Kamu harus melakukan login kembali untuk mengakses panel admin.</p>
                </div>
                <div class="modal-footer justify-content-center border-0 pb-4">
                    <button type="button" class="btn btn-outline-dark rounded-0 px-4 fw-bold text-uppercase" data-bs-dismiss="modal">Batal</button>
                    <a href="{{ route('logout') }}" class="btn btn-danger rounded-0 px-4 fw-bold text-uppercase">Ya, Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>