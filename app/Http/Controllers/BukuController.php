<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $data['buku'] = DB::table('buku')->get();
        return view('buku', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambah_buku');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kodeInput' => 'required',
            'judulInput' => 'required',
            'pengarangInput' => 'required',
            'genreInput' => 'required',
            'jenisInput' => 'required',
            'gambarInput' => 'image|file|max:2048',
        ]);

        if ($request->file('gambarInput')) {
            $filename = time() . '_' . $request->file('gambarInput')->getClientOriginalName();
            $validatedData['gambar'] = $request->file('gambarInput')->storeAs('buku-images', $filename, 'public');
        }

        $query = DB::table('buku')->insert([
            'kode_buku' => $validatedData['kodeInput'],
            'judul' => $validatedData['judulInput'],
            'pengarang' => $validatedData['pengarangInput'],
            'genre' => $validatedData['genreInput'],
            'jenis_buku' => $validatedData['jenisInput'],
            'gambar' => $validatedData['gambar'] ?? null,
        ]);

        if ($query) {
            return redirect()->route('buku.index')->with('success', 'Data berhasil ditambahkan');
        } else {
            return redirect()->route('buku.index')->with('failed', 'Data gagal ditambahkan');
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
        $data['buku'] = Db::table('buku')->where('id', $id)->first();
        return view('editbuku', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'kodeInput' => 'required',
            'judulInput' => 'required',
            'pengarangInput' => 'required',
            'genreInput' => 'required',
            'jenisInput' => 'required',
            'gambarInput' => 'image|file|max:2048',
        ]);

        if ($request->file('gambarInput')) {
            $currentImage = DB::table('buku')->where('id', $id)->value('gambar');
            if ($currentImage) {
                Storage::disk('public')->delete($currentImage);
            }
            $filename = time() . '_' . $request->file('gambarInput')->getClientOriginalName();
            $validatedData['gambar'] = $request->file('gambarInput')->storeAs('buku-images', $filename, 'public');
        }

        $query = DB::table('buku')->where('id', $id)->update([
            'kode_buku' => $validatedData['kodeInput'],
            'judul' => $validatedData['judulInput'],
            'pengarang' => $validatedData['pengarangInput'],
            'genre' => $validatedData['genreInput'],
            'jenis_buku' => $validatedData['jenisInput'],
            'gambar' => $validatedData['gambar'] ?? DB::table('buku')->where('id', $id)->value('gambar'),
        ]);

        if ($query) {
            return redirect()->route('buku.index')->with('success', 'Data berhasil diperbarui');
        } else {
            return redirect()->route('buku.index')->with('failed', 'Data gagal diperbarui');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $currentImage = DB::table('buku')->where('id', $id)->value('gambar');
        if ($currentImage) {
            Storage::disk('public')->delete($currentImage);
        }

        $query = DB::table('buku')->where('id', $id)->delete();

        if ($query) {
            return redirect()->route('buku.index')->with('success', 'Data berhasil dihapus');
        } else {
            return redirect()->route('buku.index')->with('failed', 'Data gagal dihapus');
        }
    }

}