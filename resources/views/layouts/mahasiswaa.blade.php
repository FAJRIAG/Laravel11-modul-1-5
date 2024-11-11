<!-- resources/views/mahasiswa.blade.php -->
@extends('layouts.main')

@section('title', 'Data Mahasiswa')

@section('content')
    <h1>Data Mahasiswa</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Prodi</th>
            </tr>
        </thead>
        <tbody>
            @for($i = 1; $i <= 5; $i++)
                <tr>
                    <td>{{ $i }}</td>
                    <td>Mahasiswa {{ $i }}</td>
                    <td>2307038{{ $i }}</td>
                    <td>Sistem Informasi Kota Cerdas</td>
                </tr>
            @endfor
        </tbody>
    </table>
@endsection
