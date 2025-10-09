<!DOCTYPE html>
<html>
<head>
    <title>Halaman UTS</title>
</head>
<body>
    <header>
        <h2>Ini Menu Halaman Utama UTS</h2>
        <nav>
            <a href="{{ route('uts.web') }}">Menu uts pemrograman web</a> |
            <a href="{{ route('uts.database') }}">Menu uts database</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>Bagian Bawah UTS</p>
    </footer>
</body>
</html>
