<!DOCTYPE html>
<html>
<head>
    <title>Halaman Produk</title>
    <!-- Tambahkan Bootstrap agar alert-nya tampil bagus -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

    <h2>Hasil Pengecekan Nilai Produk</h2>

    <x-alert type="{{ $alertType }}">
        {{ $message }}
    </x-alert>

</body>
</html>