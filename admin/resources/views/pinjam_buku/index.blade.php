@include('templates.sidebar')

<div class="content">
    <div class="container mt-5" style="font-size: 12px;">
        <h3 class="text-center mb-4">Tabel Daftar Peminjaman Buku</h3>
        <div class="table-container">
            <div class="mb-4">
                <button class="btn btn-insert text-light float-end" style="background-color: #8300EB; margin-bottom: 20px;">
                    <a href="{{ route('pinjam_buku.create') }}" class="text-light" style="text-decoration: none;">Insert</a>
                </button>
            </div>
            <table class="table table-bordered table-striped text-center" style="border-color: black;">
                <thead>
                    <tr>
                        <th>ID Peminjaman</th>
                        <th>Judul Buku</th>
                        <th>Nama</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Denda</th>
                        <th colspan="2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pinjamBuku as $item)
                    <tr>
                        <td>{{ $item->id_pinjam }}</td>
                        <td>{{ $item->judul ?? 'Buku Tidak Ditemukan' }}</td> <!-- Gunakan langsung $item->judul -->
                        <td>{{ $item->nama }}</td> <!-- Gunakan langsung $item->nama -->
                        <td>{{ $item->tgl_pinjam }}</td>
                        <td>{{ $item->tgl_kembali }}</td>
                        <td>Rp {{ number_format($item->denda, 0, ',', '.') }}</td>
                        <td> <a href="{{ route('pinjam_buku.edit', $item->id_pinjam) }}" class="btn btn-dark">Edit</a></td>
                        <td>
                            <form action="{{ route('pinjam_buku.destroy', $item->id_pinjam) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center">Data peminjaman tidak tersedia.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@include('templates.footer')