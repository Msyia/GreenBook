<form action="{{ route('buku.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="judul">Judul Buku</label>
        <input type="text" name="judul" id="judul" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="penulis">Penulis</label>
        <input type="text" name="penulis" id="penulis" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="penerbit">Penerbit</label>
        <input type="text" name="penerbit" id="penerbit" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="tgl_terbit">Tanggal Terbit</label>
        <input type="date" name="tgl_terbit" id="tgl_terbit" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="bahasa">Bahasa</label>
        <input type="text" name="bahasa" id="bahasa" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="genre">Genre</label>
        <input type="text" name="genre" id="genre" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="halaman">Jumlah Halaman</label>
        <input type="number" name="halaman" id="halaman" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="berat">Berat (kg)</label>
        <input type="number" step="0.01" name="berat" id="berat" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Tambah Buku</button>
</form>
