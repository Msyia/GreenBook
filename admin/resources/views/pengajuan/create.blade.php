@include('templates.sidebar')

<div class="content">
<div class="container">
    <h1>Tambah Data Pengajuan</h1>
    <form action="{{ route('pengajuan.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="user_id" class="form-label">Nama User</label>
            <select name="user_id" id="user_id" class="form-select" required>
                <option value="" disabled selected>Pilih Nama User</option>
                @foreach ($users as $user)
                    <option value="{{ $user->id_user }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="buku_id" class="form-label">Judul Buku</label>
            <select name="buku_id" id="buku_id" class="form-select" required onchange="updateBukuDetails()">
                <option value="" disabled selected>Pilih Judul Buku</option>
                @foreach ($buku as $item)
                    <option value="{{ $item->id_buku }}" data-penulis="{{ $item->penulis }}" data-penerbit="{{ $item->penerbit }}">
                        {{ $item->judul }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="penulis" class="form-label">Penulis</label>
            <input type="text" id="penulis" class="form-control" readonly>
        </div>

        <div class="mb-3">
            <label for="penerbit" class="form-label">Penerbit</label>
            <input type="text" id="penerbit" class="form-control" readonly>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>

<script>
    // Fungsi untuk mengupdate penulis dan penerbit sesuai dengan buku yang dipilih
    function updateBukuDetails() {
        const bukuSelect = document.getElementById('buku_id');
        const selectedOption = bukuSelect.options[bukuSelect.selectedIndex];
        const penulis = selectedOption.getAttribute('data-penulis');
        const penerbit = selectedOption.getAttribute('data-penerbit');

        document.getElementById('penulis').value = penulis || '';
        document.getElementById('penerbit').value = penerbit || '';
    }
</script>

    @include('templates.footer')