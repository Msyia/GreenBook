@include('templates.sidebar')

<div class="content ">
    <div class="container mt-5">
        <h3 class="text-center mb-4">Edit Data Peminjaman</h3>
        <form action="{{ route('pinjam_buku.update', $pinjamBuku->id_pinjam) }}" method="POST" class="needs-validation" novalidate>
            @csrf
            @method('PUT')

            <!-- Nama User -->
            <div class="mb-3">
                <label for="user_id" class="form-label">Nama User</label>
                <select name="user_id" id="user_id" class="form-select" required>
                    <option value="" disabled>Pilih Nama User</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id_user }}" {{ $user->id_user == $pinjamBuku->user_id ? 'selected' : '' }}>
                            {{ $user->name }}
                        </option>
                    @endforeach
                </select>
                <div class="invalid-feedback">
                    Silakan pilih nama user.
                </div>
            </div>

            <!-- Judul Buku -->
            <div class="mb-3">
                <label for="id_buku" class="form-label">Judul Buku</label>
                <select name="id_buku" id="id_buku" class="form-select" required>
                    <option value="" disabled>Pilih Judul Buku</option>
                    @foreach ($buku as $b)
                        <option value="{{ $b->id_buku }}" {{ $b->id_buku == $pinjamBuku->id_buku ? 'selected' : '' }}>
                            {{ $b->judul }}
                        </option>
                    @endforeach
                </select>
                <div class="invalid-feedback">
                    Silakan pilih judul buku.
                </div>
            </div>

            <!-- Tanggal Pinjam -->
            <div class="mb-3">
                <label for="tgl_pinjam" class="form-label">Tanggal Pinjam</label>
                <input type="date" name="tgl_pinjam" id="tgl_pinjam" class="form-control" 
                       value="{{ $pinjamBuku->tgl_pinjam }}" required>
                <div class="invalid-feedback">
                    Silakan masukkan tanggal pinjam.
                </div>
            </div>

            <!-- Tanggal Kembali -->
            <div class="mb-3">
                <label for="tgl_kembali" class="form-label">Tanggal Kembali</label>
                <input type="date" name="tgl_kembali" id="tgl_kembali" class="form-control" 
                       value="{{ $pinjamBuku->tgl_kembali }}" required>
                <div class="invalid-feedback">
                    Silakan masukkan tanggal kembali.
                </div>
            </div>
     
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('pinjam_buku.index') }}" class="btn btn-secondary">Batal</a>
            
        </form>
    </div>
</div>

@include('templates.footer')
