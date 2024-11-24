@include('templates.sidebar')

<div class="content">
    <div class="container mt-5" style="font-size: 12px;">
        <h3 class="text-center mb-4">Tabel Daftar Buku</h3>
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
        <div class="table-container">
            <div class="mb-4">
                <button class="btn btn-insert text-light float-end" style="background-color: #8300EB; margin-bottom: 20px;">
                    <a href="{{ route('buku.create') }}" class="text-light" style="text-decoration: none;">Insert</a>
                </button>
            </div>

            <table class="table table-bordered table-striped text-center" style="border-color: black;">
                <thead>
                    <tr>
                        <th>Id Buku</th>
                        <th>Gambar</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Tanggal Terbit</th>
                        <th>Bahasa</th>
                        <th>Genre</th>
                        <th>Halaman</th>
                        <th>Berat</th>
                        <th>Deskripsi</th>
                        <th colspan="2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($buku as $row)
                    <tr>
                        <td>{{ $row->id_buku }}</td>
                        <td>
                            @if ($row->gambar)
                            <img src="{{ asset('storage/' . $row->gambar) }}" alt="{{ $row->judul }}" width="100">
                            @else
                            <p>No Image</p>
                            @endif
                        </td>
                        <td>{{ $row->judul }}</td>
                        <td>{{ $row->penulis }}</td>
                        <td>{{ $row->penerbit }}</td>
                        <td>{{ $row->tgl_terbit }}</td>
                        <td>{{ $row->bahasa }}</td>
                        <td>{{ $row->genre }}</td>
                        <td>{{ $row->halaman }}</td>
                        <td>{{ $row->berat }}</td>
                        <td>{{ $row->deskripsi }}</td>
                        <td >
                            <button class="btn btn-edit btn-sm btn-dark"><a href="{{ route('buku.edit', ['id' => $row->id_buku]) }}" class="text-light" style="text-decoration: none;">Edit</a></button>
                        </td>
                        <td>
                            <form action="{{ route('buku.destroy', $row->id_buku) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus buku ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@include('templates.footer')