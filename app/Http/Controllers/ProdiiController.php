<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiiController extends Controller
{
    public function index()
    {

        $dataProdi = [
            ['nama' => 'Teknik Mesin'],
            ['nama' => 'Sistem Informasi kota cerdas'],
            ['nama' => 'Teknik Informatika'],
            ['nama' => 'Teknik Pendingin dan Tata Udara'],
            ['nama' => 'Perancangan Manufaktur '],
            ['nama' => 'Rekayasa Perangkat Lunak'],
            ['nama' => 'Keperawatan'],
        ];

        return view('prodi.index', compact('dataProdi'));
    }
}