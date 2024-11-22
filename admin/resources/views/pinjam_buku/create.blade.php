@include('templates.sidebar')

<div class="content">
    <form action="{{ route('pinjam_buku.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="user_id">Nama User</label>
            <select name="user_id" id="user_id" class="form-control">
                @foreach($users as $user)
                <option value="{{ $user->id_user }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="id_buku">Judul Buku</label>
            <select name="id_buku" id="id_buku" class="form-control">
                @foreach($buku as $book)
                <option value="{{ $book->id_buku }}">{{ $book->judul }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="tgl_pinjam">Tanggal Pinjam</label>
            <input type="date" name="tgl_pinjam" id="tgl_pinjam" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="tgl_kembali">Tanggal Kembali</label>
            <input type="date" name="tgl_kembali" id="tgl_kembali" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Tambah Peminjaman</button>
    </form>
</div>
</div>

@include('templates.footer')