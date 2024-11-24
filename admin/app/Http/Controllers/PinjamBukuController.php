<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Buku;
use App\Models\PinjamBuku;
use Illuminate\Support\Facades\DB; // Tambahkan ini
use Illuminate\Http\Request;
use Carbon\Carbon;


class PinjamBukuController extends Controller
{
    public function index()
    {
        $pinjamBuku = DB::table('pinjam_buku')
            ->join('users', 'pinjam_buku.user_id', '=', 'users.id_user')
            ->join('buku', 'pinjam_buku.id_buku', '=', 'buku.id_buku')
            ->select(
                'pinjam_buku.id_pinjam',
                'users.name as nama', // Ambil nama dari tabel users
                'users.no_hp',
                'buku.judul as judul', // Ambil judul dari tabel buku
                'pinjam_buku.tgl_pinjam',
                'pinjam_buku.tgl_kembali',
                'pinjam_buku.denda'
            )
            ->get();

        // Perhitungan denda
        foreach ($pinjamBuku as $item) {
            $tgl_pinjam = Carbon::parse($item->tgl_pinjam);
            $tgl_kembali = Carbon::parse($item->tgl_kembali);
            if ($tgl_kembali->diffInDays($tgl_pinjam) > 7) {
                $item->denda = ($tgl_kembali->diffInDays($tgl_pinjam) - 7) * 1000; // Hitung denda jika lebih dari 7 hari
            } else {
                $item->denda = 0; // Tidak ada denda jika lebih dari 7 hari
            }
        }

        return view('pinjam_buku.index', compact('pinjamBuku'));
    }

    public function create()
    {
        $buku = Buku::all();
        $users = User::all();

        return view('pinjam_buku.create', compact('buku', 'users'));
    }

    // Menyimpan data baru ke database
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id_user',
            'id_buku' => 'required|exists:buku,id_buku',
            'tgl_pinjam' => 'required|date',
            'tgl_kembali' => 'required|date|after_or_equal:tgl_pinjam',
        ]);


        // Hitung denda jika tgl_kembali lebih dari 7 hari dari tgl_pinjam
        $tgl_pinjam = Carbon::parse($request->tgl_pinjam);
        $tgl_kembali = Carbon::parse($request->tgl_kembali);
        $denda = 0;

        if ($tgl_kembali->diffInDays($tgl_pinjam) > 7) {
            $denda = ($tgl_kembali->diffInDays($tgl_pinjam) - 7) * 1000;
        }

        // Simpan data peminjaman
        PinjamBuku::create([
            'user_id' => $request->user_id,
            'id_buku' => $request->id_buku,
            'tgl_pinjam' => $request->tgl_pinjam,
            'tgl_kembali' => $request->tgl_kembali,
            'denda' => $denda,
        ]);

        return redirect()->route('pinjam_buku.index')->with('success', 'Peminjaman berhasil ditambahkan!');
    }


//     public function edit($id)
//     {
//         $pinjamBuku = PinjamBuku::findOrFail($id);
//         $buku = Buku::all(); // Semua data buku
//         $users = User::all(); // Semua data user

//         return view('pinjam_buku.edit', compact('pinjamBuku', 'buku', 'users'));
//     }
//     public function update(Request $request, $id)
// {
//     // Validasi input
//     $validated = $request->validate([
//         'user_id' => 'required|exists:users,id_user',
//         'id_buku' => 'required|exists:buku,id_buku',
//         'tgl_pinjam' => 'required|date',
//         'tgl_kembali' => 'required|date|after_or_equal:tgl_pinjam',
//     ]);

//     // Ambil nama user dan judul buku
//     $user = User::find($request->user_id);
//     $buku = Buku::find($request->id_buku);

//     // Hitung denda jika tgl_kembali lebih dari 7 hari dari tgl_pinjam
//     $tgl_pinjam = \Carbon\Carbon::parse($request->tgl_pinjam);
//     $tgl_kembali = \Carbon\Carbon::parse($request->tgl_kembali);
//     $denda = 0;

//     if ($tgl_kembali->diffInDays($tgl_pinjam) > 7) {
//         $denda = ($tgl_kembali->diffInDays($tgl_pinjam) - 7) * 1000;
//     }

//     // Update data
//     $pinjamBuku = PinjamBuku::findOrFail($id);
//     $pinjamBuku->update([
//         'id_buku' => $request->id_buku,
//         'user_id' => $request->user_id,
//         'tgl_pinjam' => $request->tgl_pinjam,
//         'tgl_kembali' => $request->tgl_kembali,
//         'denda' => $denda,
//         'judul' => $buku->judul, // Update judul
//         'nama' => $user->name,   // Update nama
//     ]);

//     return redirect()->route('pinjam_buku.index')->with('success', 'Data peminjaman berhasil diperbarui!');
// }

public function edit($id)
{
    // Gunakan relasi dengan nama kolom yang benar
    $pinjamBuku = PinjamBuku::with(['user', 'buku'])
        ->where('id_pinjam', $id)
        ->firstOrFail();

    $buku = Buku::all();
    $users = User::all();

    return view('pinjam_buku.edit', compact('pinjamBuku', 'buku', 'users'));
}

public function update(Request $request, $id)
{
    $validated = $request->validate([
        'user_id' => 'required|exists:users,id_user',
        'id_buku' => 'required|exists:buku,id_buku',
        'tgl_pinjam' => 'required|date',
        'tgl_kembali' => 'required|date|after_or_equal:tgl_pinjam',
    ]);

    $pinjamBuku = PinjamBuku::findOrFail($id);
    $pinjamBuku->update([
        'user_id' => $request->user_id,
        'id_buku' => $request->id_buku,
        'tgl_pinjam' => $request->tgl_pinjam,
        'tgl_kembali' => $request->tgl_kembali,
        'denda' => $this->calculateDenda($request->tgl_pinjam, $request->tgl_kembali),
    ]);

    return redirect()->route('pinjam_buku.index')->with('success', 'Data pengajuan berhasil diperbarui.');
}

private function calculateDenda($tglPinjam, $tglKembali)
{
    $tglPinjam = Carbon::parse($tglPinjam);
    $tglKembali = Carbon::parse($tglKembali);

    if ($tglKembali->diffInDays($tglPinjam) > 7) {
        return ($tglKembali->diffInDays($tglPinjam) - 7) * 1000;
    }

    return 0;
}
public function destroy($id)
{
    // Cari data berdasarkan ID
    $pinjamBuku = PinjamBuku::find($id);

    // Jika data ditemukan, hapus
    if ($pinjamBuku) {
        $pinjamBuku->delete();
        return redirect()->route('pinjam_buku.index')->with('success', 'Data peminjaman berhasil dihapus!');
    }

    // Jika data tidak ditemukan
    return redirect()->route('pinjam_buku.index')->with('error', 'Data tidak ditemukan!');
}


}
