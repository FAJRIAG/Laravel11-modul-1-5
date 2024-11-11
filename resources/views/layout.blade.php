<!DOCTYPE html>
<html>
<head>
    <title>Web Saya</title>
</head>
<body>
    <nav>
        <a href="{{ route('home') }}">HOME</a> |
        <a href="{{ route('mahasiswa') }}">MAHASISWA</a> |
        <a href="{{ route('prodi') }}">PRODI</a>
    </nav>
    
    <div class="content">
        @yield('content')
    </div>
</body>
</html>