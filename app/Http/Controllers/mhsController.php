<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MhsController extends Controller
{
    public function show()
    {
        $mhs = ['Adeeva', 'Nadia', 'FAJRI'];
        return view('mhs.show', compact('mhs'));
    }

    public function index()
    {
        $mhs = "FAJRI";
        return view('mhs.index', compact('mhs'));
    }

    public function perulangan(){
        $mhs = ['Adeeva', 'Nadia', 'FAJRI'];
        return view('mhs.perulangan', compact('mhs'));
    }
}
