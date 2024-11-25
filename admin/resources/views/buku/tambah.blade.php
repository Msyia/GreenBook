@include('templates.sidebar')
<div class="content">
    <div class="container mt-5">
        <h1 class="text-center mb-4">Tambah Buku</h1>

        <!-- Menampilkan Error Validasi -->
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- Form Tambah Buku -->
        <form action="{{ route('buku.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul') }}" required>
            </div>

            <div class="mb-3">
                <label for="penulis" class="form-label">Penulis</label>
                <input type="text" class="form-control" id="penulis" name="penulis" value="{{ old('penulis') }}" required>
            </div>

            <div class="mb-3">
                <label for="penerbit" class="form-label">Penerbit</label>
                <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{ old('penerbit') }}" required>
            </div>

            <div class="mb-3">
                <label for="tgl_terbit" class="form-label">Tanggal Terbit</label>
                <input type="date" class="form-control" id="tgl_terbit" name="tgl_terbit" value="{{ old('tgl_terbit') }}" required>
            </div>

            <div class="mb-3">
                <label for="bahasa" class="form-label">Bahasa</label>
                <input type="text" class="form-control" id="bahasa" name="bahasa" value="{{ old('bahasa') }}" required>
            </div>

            <div class="mb-3">
                <label for="genre" class="form-label">Genre</label>
                <input type="text" class="form-control" id="genre" name="genre" value="{{ old('genre') }}" required>
            </div>

            <div class="mb-3">
                <label for="halaman" class="form-label">Halaman</label>
                <input type="number" class="form-control" id="halaman" name="halaman" value="{{ old('halaman') }}" required>
            </div>

            <div class="mb-3">
                <label for="berat" class="form-label">Berat (gram)</label>
                <input type="number" class="form-control" id="berat" name="berat" value="{{ old('berat') }}" step="0.01" required>
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4">{{ old('deskripsi') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar Buku</label>
                <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*" required>
            </div>

            <div class="text-start">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('buku.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>
@include('templates.footer')