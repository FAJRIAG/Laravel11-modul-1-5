<!-- resources/views/profil/index.blade.php -->
@extends('layouts.master')

@section('title', 'Profil Mahasiswa')

@section('content')
    <h2>Profil Mahasiswa</h2>
    <p>Nama: {{ $dataProfil['nama'] }}</p>
    <p>NIM: {{ $dataProfil['nim'] }}</p>
    <p>Jurusan: {{ $dataProfil['jurusan'] }}</p>
@endsection