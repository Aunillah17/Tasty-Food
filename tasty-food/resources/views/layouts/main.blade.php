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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; background-color: #ffffff; color: #333333; }
        .navbar { background-color: transparent !important; padding: 20px 0; }
        .navbar-brand { font-weight: 800; letter-spacing: 1px; color: #000000 !important; }
        .nav-link { font-weight: 600; font-size: 14px; color: #000000 !important; letter-spacing: 0.5px; }
        .nav-link:hover { color: #ffc107 !important; }
        footer { background-color: #111111; color: #ffffff; }
        footer a { color: #aaaaaa; text-decoration: none; font-size: 14px; }
        footer a:hover { color: #ffc107; }
        .footer-icon { width: 24px; height: 24px; object-fit: contain; }
    </style>
</head>
<body>

    <!-- NAVBAR UTAMA -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand text-uppercase" href="/">TASTY FOOD</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav gap-4">
                    <li class="nav-item"><a class="nav-link text-uppercase" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-uppercase" href="/tentang">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link text-uppercase" href="/berita">Berita</a></li>
                    <li class="nav-item"><a class="nav-link text-uppercase" href="/galeri">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link text-uppercase" href="/kontak">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- KONTEN HALAMAN -->
    <main>
        @yield('content')
    </main>

    <!-- FOOTER UTAMA -->
    <footer class="py-5 mt-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-5">
                    <h5 class="fw-bold text-uppercase mb-3">Tasty Food</h5>
                    <p class="text-muted small lh-lg" style="max-width: 350px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Commodo morbi elementum tempor pretium.</p>
                    <div class="d-flex gap-3 mt-3">
                        <a href="#"><img src="{{ asset('assets/images/001-facebook.png') }}" alt="Facebook" class="footer-icon"></a>
                        <a href="#"><img src="{{ asset('assets/images/002-twitter.png') }}" alt="Twitter" class="footer-icon"></a>
                    </div>
                </div>
                <div class="col-md-3">
                    <h6 class="fw-bold text-uppercase mb-3">Links</h6>
                    <ul class="list-unstyled d-flex flex-column gap-2">
                        <li><a href="/">Home</a></li>
                        <li><a href="/tentang">Tentang Kami</a></li>
                        <li><a href="/berita">Berita</a></li>
                        <li><a href="/galeri">Galeri</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h6 class="fw-bold text-uppercase mb-3">Kontak Kami</h6>
                    <p class="text-muted small mb-2">
                        <img src="{{ asset('assets/images/ic_markunread_24px.png') }}" style="width: 18px; margin-right: 8px;"> info@tastyfood.com
                    </p>
                    <p class="text-muted small mb-0">
                        <img src="{{ asset('assets/images/ic_call_24px.png') }}" style="width: 18px; margin-right: 8px;"> +62 812 3456 7890
                    </p>
                </div>
            </div>
            <hr class="border-secondary my-4">
            <div class="text-center text-muted small">
                <p class="mb-0">&copy; 2026 Tasty Food. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>