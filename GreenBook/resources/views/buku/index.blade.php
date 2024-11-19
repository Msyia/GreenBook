<!-- Form Pencarian -->
<form action="{{ route('buku.search') }}" method="get">
    <input type="text" name="search" placeholder="Cari buku..." />
    <button type="submit">Cari</button>
</form>

<!-- Daftar Buku -->
<ul>
    @foreach ($buku as $b)
        <li>{{ $b->judul }} - {{ $b->penulis }}
            <form action="{{ route('buku.destroy', $b->id_buku) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </li>
    @endforeach
</ul>
