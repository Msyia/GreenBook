@include('templates.sidebar')

<div class="content">

<div class="container">
    <h2>Edit Data Pengajuan</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('pengajuan.update', $pengajuan->id_pengajuan) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="id_pengajuan" class="form-label">ID Pengajuan</label>
            <input type="text" class="form-control" id="id_pengajuan" value="{{ $pengajuan->id_pengajuan }}" readonly>
        </div>

        <div class="mb-3">
            <label for="user_id" class="form-label">User ID</label>
            <select name="user_id" id="user_id" class="form-control">
                @foreach ($users as $user)
                    <option value="{{ $user->id_user }}" {{ $pengajuan->user_id == $user->id_user ? 'selected' : '' }}>
                        {{ $user->id_user }} - {{ $user->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="buku_id" class="form-label">Buku ID</label>
            <select name="buku_id" id="buku_id" class="form-control">
                @foreach ($buku as $item)
                    <option value="{{ $item->id_buku }}" {{ $pengajuan->buku_id == $item->id_buku ? 'selected' : '' }}>
                        {{ $item->id_buku }} - {{ $item->judul }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="nama_user" class="form-label">Nama User</label>
            <input type="text" class="form-control" id="nama_user" value="{{ $pengajuan->nama_user }}" readonly>
        </div>

        <div class="mb-3">
            <label for="judul" class="form-label">Judul Buku</label>
            <input type="text" class="form-control" id="judul" value="{{ $pengajuan->judul }}" readonly>
        </div>

        <div class="mb-3">
            <label for="penulis" class="form-label">Penulis</label>
            <input type="text" class="form-control" id="penulis" value="{{ $pengajuan->penulis }}" readonly>
        </div>

        <div class="mb-3">
            <label for="penerbit" class="form-label">Penerbit</label>
            <input type="text" class="form-control" id="penerbit" value="{{ $pengajuan->penerbit }}" readonly>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

</div>


@include('templates.footer')