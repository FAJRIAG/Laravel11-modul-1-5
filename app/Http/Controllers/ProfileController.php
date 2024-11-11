<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $dataProfil = [
            'nama' => 'FAJRI ABDURAHMAN GHURRI',
            'nim' => '2307038',
            'jurusan' => 'SYSTEM INFORMASI KOTA CERDAS',
        ];

        return view('profil.index', compact('dataProfil'));
    }
}