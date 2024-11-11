<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaaController extends Controller
{
    public function index(){
        $mhs = "Nadia";
        $title = "Mahasiswa Websaya.com";
        $slug = "mahasiswaa";
        return view('konten.mahasiswaa', compact('mhs','title','slug'));

    }
}
