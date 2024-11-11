<!-- resources/views/prodi/index.blade.php -->
@extends('layouts.master')

@section('title', 'Program Studi')

@section('content')
    <h2>Daftar Program Studi</h2>
    <ul class="list-group">
        @foreach($dataProdi as $prodi)
            <li class="list-group-item">{{ $prodi['nama'] }}</li>
        @endforeach
    </ul>
@endsection