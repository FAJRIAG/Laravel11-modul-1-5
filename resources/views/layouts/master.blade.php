<!-- resources/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Website Mahasiswa</h1>
            <nav>
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/profile') }}">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/prodii') }}">Program Studi</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <br>
            @yield('content')
        </main>

        <br>
        <footer>
            <p>&copy; 2024 FAJRI SIKC 2B</p>
        </footer>
    </div>
</body>
</html>