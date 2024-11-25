<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> <!-- Pastikan Bootstrap/CSS terhubung -->
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Daftar Buku</h1>
        <div class="row">
            @foreach($bukus as $buku)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('storage/' . $buku->gambar) }}" class="card-img-top" alt="{{ $buku->judul }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $buku->judul }}</h5>
                            <p class="card-text"><strong>Penulis:</strong> {{ $buku->penulis }}</p>
                            <p class="card-text"><strong>Penerbit:</strong> {{ $buku->penerbit }}</p>
                            <p class="card-text"><strong>Tanggal Terbit:</strong> {{ $buku->tgl_terbit }}</p>
                            <p class="card-text"><strong>Bahasa:</strong> {{ $buku->bahasa }}</p>
                            <p class="card-text"><strong>Genre:</strong> {{ $buku->genre }}</p>
                            <p class="card-text"><strong>Halaman:</strong> {{ $buku->halaman }}</p>
                            <p class="card-text"><strong>Berat:</strong> {{ $buku->berat }} gram</p>
                            <p class="card-text">{{ Str::limit($buku->deskripsi, 100) }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
