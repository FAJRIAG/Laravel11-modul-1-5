<!-- resources/views/layouts/main.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Tambahkan link CSS atau Bootstrap jika diperlukan -->
</head>
<body>
    @include('layouts.nav')
    <div class="container">
        @yield('content')
    </div>
    @include('layouts.footer')
</body>
</html>
