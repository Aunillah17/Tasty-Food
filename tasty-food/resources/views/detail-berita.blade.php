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
                <span class="badge bg-primary mb-2" style="width: fit-content;">Detail Berita</span>
                
                <!-- Mengambil JUDUL asli dari database -->
                <h1 class="mb-4">{{ $berita->judul }}</h1>
                
                <!-- Tempat Gambar Berita -->
                @if($berita->gambar)
                    <div class="mb-4 text-center">
                        <img src="{{ asset('assets/img/' . $berita->gambar) }}" class="img-fluid rounded" alt="{{ $berita->judul }}" style="max-height: 400px; width: 100%; object-fit: cover;">
                    </div>
                @endif
                
                <hr>
                
                <!-- Mengambil ISI LENGKAP berita dari database -->
                <div class="berita-content mt-4" style="line-height: 1.8; font-size: 1.1rem;">
                    <p>{{ $berita->isi }}</p>
                </div>
                
                <a href="{{ url('/berita') }}" class="btn btn-secondary mt-4">← Kembali ke Berita Kami</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>