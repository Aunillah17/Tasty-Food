<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $berita->judul }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm p-4">
                <span class="badge bg-dark rounded-0 mb-3 px-3 text-uppercase" style="width: fit-content; font-size: 11px; letter-spacing: 0.5px;">Detail Berita</span>
               
                <h1 class="mb-4 fw-bold text-dark text-uppercase" style="font-size: 2.2rem; line-height: 1.3;">{{ $berita->judul }}</h1>
               
                @if($berita->gambar)
                    <div class="mb-4 text-center">
                        <img src="{{ asset('assets/images/' . $berita->gambar) }}" class="img-fluid rounded" alt="{{ $berita->judul }}" style="max-height: 450px; width: 100%; object-fit: cover;">
                    </div>
                @endif
               
                <hr>
               
                <!-- Mengambil detail_berita dari database -->
                <div class="berita-content mt-4 text-muted" style="line-height: 1.9; font-size: 1.05rem; text-align: justify;">
                    {!! nl2br(e($berita->detail_berita)) !!}
                </div>
               
                <div class="mt-5">
                    <a href="{{ url('/berita') }}" class="btn btn-outline-dark rounded-0 fw-bold text-uppercase fs-7 px-4">← Kembali ke Berita Kami</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>