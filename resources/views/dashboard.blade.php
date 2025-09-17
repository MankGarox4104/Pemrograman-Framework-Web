<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Toko MankGarox</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="card p-5 shadow-lg text-center" style="width: 600px;">
        <h2>Selamat datang, {{ $user->name }}</h2>
        <p class="mt-3">Role Anda adalah <strong>{{ $user->role }}</strong></p>

        <hr>

        {{-- Konten sesuai role --}}
        @if($user->role === 'admin')
            <h4>Menu Admin</h4>
            <a href="/products" class="btn btn-primary m-2">Kelola Produk</a>
            <a href="/categories" class="btn btn-warning m-2">Kelola Kategori</a>
            <a href="/users" class="btn btn-danger m-2">Kelola User</a>
        @else
            <h4>Menu Pengguna</h4>
            <a href="/products" class="btn btn-success m-2">Lihat Produk</a>
            <a href="/categories" class="btn btn-info m-2">Lihat Kategori</a>
        @endif
        <form action="{{ route('logout') }}" method="POST" class="mt-3">
    @csrf
    <button type="submit" class="btn btn-outline-danger">Logout</button>
</form>
        <hr>
        <a href="/" class="btn btn-secondary mt-3">Kembali ke Home</a>
    </div>
</body>
</html>
