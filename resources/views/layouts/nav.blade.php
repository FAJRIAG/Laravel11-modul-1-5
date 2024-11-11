<!-- resources/views/layouts/nav.blade.php -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">POLINDRA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/profil') }}">Profil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/mahasiswa') }}">Mahasiswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/prodi') }}">Prodi</a>
            </li>
        </ul>
    </div>
</nav>
