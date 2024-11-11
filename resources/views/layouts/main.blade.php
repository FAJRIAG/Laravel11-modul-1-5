<!-- resources/views/layouts/main.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Tambahkan link CSS atau Bootstrap jika diperlukan -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    @include('layouts.nav') <!-- Bagian navigasi -->
    
    <div class="container mt-4">
        @yield('content') <!-- Bagian konten dinamis yang akan diisi oleh halaman lain -->
    </div>

    @include('layouts.footer') <!-- Bagian footer -->
</body>
</html>
