<?php

namespace App\Http\Controllers;

use index;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::all(); 

        return view('mahasiswa', ['mahasiswas' => $mahasiswas]);
    }
}


