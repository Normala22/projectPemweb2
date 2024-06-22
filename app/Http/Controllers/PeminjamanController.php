<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return Response
     */
    public function index()
    {
        $data['peminjaman'] = DB::table('peminjaman')->get();
        return view('peminjaman', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambah_peminjaman');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kodeBukuInput = $request->input('kode_buku');
        $judulInput = $request->input('judul');
        $namaPeminjamInput = $request->input('nama_peminjam');
        $tanggalPeminjamanInput = $request->input('tanggal_peminjaman');
        $tanggalPengembalianInput = $request->input('tanggal_pengembalian');
        $statusInput = $request->input('status');

        $query = DB::table('peminjaman')->insert([
            'kode_buku' => $kodeBukuInput,
            'judul' => $judulInput,
            'nama_peminjam' => $namaPeminjamInput,
            'tanggal_peminjaman' => $tanggalPeminjamanInput,
            'tanggal_pengembalian' => $tanggalPengembalianInput,
            'status' => $statusInput
        ]);

    if ($query) {
        return redirect()->route('peminjaman.index')->with('success', 'Data berhasil ditambahkan');
    } else {
        return redirect()->route('peminjaman.index')->with('failed', 'Data gagal ditambahkan');
    }
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['peminjaman'] = DB::table('peminjaman')->where('id', $id)->first();
        return view('edit_peminjaman', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $kodeBukuInput = $request->input('kode_buku');
    $judulInput = $request->input('judul');
    $namaPeminjamInput = $request->input('nama_peminjam');
    $tanggalPeminjamanInput = $request->input('tanggal_peminjaman');
    $tanggalPengembalianInput = $request->input('tanggal_pengembalian');
    $statusInput = $request->input('status');

    // Jika status berubah menjadi 'Dikembalikan'
    if ($statusInput == 'Dikembalikan') {
        // Ambil data peminjaman
        $peminjaman = DB::table('peminjaman')->where('id', $id)->first();

        // Masukkan data ke tabel pengembalian
        DB::table('pengembalian')->insert([
            'kode_buku' => $peminjaman->kode_buku,
            'judul' => $peminjaman->judul,
            'nama_peminjam' => $peminjaman->nama_peminjam,
            'tanggal_peminjaman' => $peminjaman->tanggal_peminjaman,
            'tanggal_pengembalian' => $tanggalPengembalianInput,
            'status' => $statusInput
        ]);

        // Hapus data dari tabel peminjaman
        DB::table('peminjaman')->where('id', $id)->delete();

        return redirect()->route('peminjaman.index')->with('success', 'Data berhasil dikembalikan dan dipindahkan ke tabel pengembalian');
    } else {
        // Update data di tabel peminjaman
        $query = DB::table('peminjaman')->where('id', $id)->update([
            'kode_buku' => $kodeBukuInput,
            'judul' => $judulInput,
            'nama_peminjam' => $namaPeminjamInput,
            'tanggal_peminjaman' => $tanggalPeminjamanInput,
            'tanggal_pengembalian' => $tanggalPengembalianInput,
            'status' => $statusInput
        ]);

        if ($query) {
            return redirect()->route('peminjaman.index')->with('success', 'Data berhasil diperbarui');
        } else {
            return redirect()->route('peminjaman.index')->with('failed', 'Data gagal diperbarui');
        }
    }
}

/**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $query = DB::table('peminjaman')->where('id', $id)->delete();

        if ($query) {
            return redirect()->route('peminjaman.index')->with('success', 'Data berhasil dihapus');
        } else {
            return redirect()->route('peminjaman.index')->with('failed', 'Data gagal dihapus');
        }
    }
}
