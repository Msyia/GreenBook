@include('templates.sidebar')

<div class="content">
<div class="container mt-5">
    <h3 class="text-center mb-4">Edit Data Buku</h3>
    <form action="{{ route('buku.update', $buku->id_buku) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{ $buku->judul }}" required>
        </div>

        <div class="mb-3">
            <label for="penulis" class="form-label">Penulis</label>
            <input type="text" class="form-control" id="penulis" name="penulis" value="{{ $buku->penulis }}" required>
        </div>

        <div class="mb-3">
            <label for="penerbit" class="form-label">Penerbit</label>
            <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{ $buku->penerbit }}" required>
        </div>

        <div class="mb-3">
            <label for="tgl_terbit" class="form-label">Tanggal Terbit</label>
            <input type="date" class="form-control" id="tgl_terbit" name="tgl_terbit" value="{{ $buku->tgl_terbit }}" required>
        </div>

        <div class="mb-3">
            <label for="bahasa" class="form-label">Bahasa</label>
            <input type="text" class="form-control" id="bahasa" name="bahasa" value="{{ $buku->bahasa }}" required>
        </div>

        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <input type="text" class="form-control" id="genre" name="genre" value="{{ $buku->genre }}" required>
        </div>

        <div class="mb-3">
            <label for="halaman" class="form-label">Halaman</label>
            <input type="number" class="form-control" id="halaman" name="halaman" value="{{ $buku->halaman }}" required>
        </div>

        <div class="mb-3">
            <label for="berat" class="form-label">Berat</label>
            <input type="number" class="form-control" id="berat" name="berat" value="{{ $buku->berat }}" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4">{{ $buku->deskripsi }}</textarea>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            @if ($buku->gambar)
                <img src="{{ asset('storage/' . $buku->gambar) }}" alt="{{ $buku->judul }}" width="150" class="mb-2">
            @endif
            <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('buku.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
</div>

@include('templates.footer')