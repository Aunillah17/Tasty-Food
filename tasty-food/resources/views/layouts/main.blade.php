<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Tasty Food</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <style>
        body { 
            font-family: 'Poppins', sans-serif; 
            background-color: #ffffff; 
            color: #333333;
            overflow-x: hidden;
        }

        /* NAVBAR - Dibuat melayang & transparan sesuai contoh image_a7de17.jpg */
        .navbar { 
            background-color: transparent !important; 
            padding: 30px 0; 
            position: relative;
            z-index: 100; /* Memastikan menu berada di paling depan */
        }
        
        .navbar-brand { 
            font-weight: 900; 
            font-size: 24px;
            letter-spacing: 1px; 
            color: #000000 !important; /* Di contoh mockup warna brand-nya Hitam tebal */
        }
        
        /* Menu Navigasi (Warna putih/abu tipis karena background hero-nya gelap) */
        .nav-link { 
            font-weight: 600; 
            font-size: 13px; 
            color: #555555 !important; 
            letter-spacing: 1px;
            transition: color 0.3s ease;
        }
        
        .nav-link:hover { 
            color: #000000 !important; 
        }

        /* FOOTER - Hitam pekat kotak minimalis */
        footer { 
            background-color: #1a1a1a; 
            color: #ffffff; 
            padding: 80px 0 30px 0;
        }
        
        footer h5, footer h6 {
            letter-spacing: 1px;
            font-size: 16px;
        }
        
        footer a { 
            color: #bbbbbb; 
            text-decoration: none; 
            font-size: 14px; 
            transition: color 0.3s;
        }
        
        footer a:hover { 
            color: #ffc107; 
        }

        .footer-social-icon {
            width: 32px;
            height: 32px;
            background-color: #333333;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            color: #ffffff;
            transition: background 0.3s;
        }

        .footer-social-icon:hover {
            background-color: #ffc107;
            color: #000000;
        }
    </style>
</head>
<body>

    <!-- NAVBAR TRANSPARAN -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand text-uppercase" href="/">TASTY FOOD</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav gap-4">
                    <li class="nav-item"><a class="nav-link text-uppercase" href="/">HOME</a></li>
                    <li class="nav-item"><a class="nav-link text-uppercase" href="/tentang">TENTANG</a></li>
                    <li class="nav-item"><a class="nav-link text-uppercase" href="/berita">BERITA</a></li>
                    <li class="nav-item"><a class="nav-link text-uppercase" href="/galeri">GALERI</a></li>
                    <li class="nav-item"><a class="nav-link text-uppercase" href="/kontak">KONTAK</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- TEMPAT MASUKNYA ISI HALAMAN (HOME, TENTANG, DLL) -->
    <main>
        @yield('content')
    </main>

    <!-- FOOTER HITAM PEKAT MODEREN -->
    <footer class="mt-5">
        <div class="container">
            <div class="row g-5">
                <!-- Kolom 1: Profil Pendek -->
                <div class="col-md-5">
                    <h5 class="fw-bold text-uppercase mb-4">Tasty Food</h5>
                    <p class="text-muted small lh-lg mb-4" style="max-width: 350px;">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Commodo morbi elementum tempor pretium sit amet digi ssim koli.
                    </p>
                    <!-- Icon Sosmed Bulat Minimalis -->
                    <div class="d-flex gap-2">
                        <a href="#" class="footer-social-icon"><i class="fab fa-facebook-f" style="font-size: 14px;"></i></a>
                        <a href="#" class="footer-social-icon"><i class="fab fa-twitter" style="font-size: 14px;"></i></a>
                    </div>
                </div>
                
                <!-- Kolom 2: Navigasi Cepat -->
                <div class="col-md-3">
                    <h6 class="fw-bold text-uppercase mb-4">Useful Links</h6>
                    <ul class="list-unstyled d-flex flex-column gap-3">
                        <li><a href="/">Blog</a></li>
                        <li><a href="/tentang">Hewan</a></li>
                        <li><a href="/berita">Galeri</a></li>
                        <li><a href="/kontak">Kontak</a></li>
                    </ul>
                </div>

                <!-- Kolom 3: Kebijakan / Privasi -->
                <div class="col-md-2">
                    <h6 class="fw-bold text-uppercase mb-4">Privacy</h6>
                    <ul class="list-unstyled d-flex flex-column gap-3">
                        <li><a href="#">Karir</a></li>
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Kontak Kami</a></li>
                        <li><a href="#">Servis</a></li>
                    </ul>
                </div>
                
                <!-- Kolom 4: Kontak Informasi -->
                <div class="col-md-2">
                    <h6 class="fw-bold text-uppercase mb-4">Contact Info</h6>
                    <ul class="list-unstyled d-flex flex-column gap-3 text-muted small">
                        <li><span class="text-white">✉</span> tastyfood@gmail.com</li>
                        <li><span class="text-white">📞</span> +62 812 3456 7890</li>
                        <li><span class="text-white">📍</span> Kota Bandung, Jawa Barat</li>
                    </ul>
                </div>
            </div>

            <!-- Hak Cipta -->
            <div class="text-center text-muted small pt-5 mt-4" style="border-top: 1px solid #2d2d2d;">
                <p class="mb-0">&copy; 2026 Tasty Food. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- FontAwesome Kit untuk Icon Sosmed -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>