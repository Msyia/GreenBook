@include('templates.sidebar')

<div class="content">
<div class="container mt-4">
    <h1 class="mb-4 text-center">Tabel Pengajuan Peminjaman</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <button class="btn btn-insert text-light float-end" style="background-color: #8300EB; margin-bottom: 20px;">
                    <a href="{{ route('pengajuan.create') }}" class="text-light" style="text-decoration: none;">Insert</a>
                </button>
    <table class="table table-bordered table-striped" style="border-color: black;">
        <thead class="thead-dark">
            <tr>
                <th>ID Pengajuan</th>
                <th>User ID</th>
                <th>Nama User</th>
                <th>Buku ID</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tanggal Pengajuan</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pengajuan as $p)
                <tr>
                    <td>{{ $p->id_pengajuan }}</td>
                    <td>{{ $p->user_id }}</td>
                    <td>{{ $p->nama_user }}</td>
                    <td>{{ $p->buku_id }}</td>
                    <td>{{ $p->judul }}</td>
                    <td>{{ $p->penulis }}</td>
                    <td>{{ $p->penerbit }}</td>
                    <td>{{ $p->tgl_pengajuan }}</td>
                    <td></td>
                    <td></td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" class="text-center">Tidak ada data pengajuan</td>
                </tr>
            @endforelse
        </tbody>
    </table>


</div>
</div>
@include('templates.footer')