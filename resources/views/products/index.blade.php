<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
</head>
<body>
    <h1>Daftar Produk</h1>
    <a href="{{ route('products.create') }}">+ Tambah Produk</a>
    <br><br>

    @if (session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="8">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kategori</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>
    @foreach ($products as $index => $p)
    <tr>
        <td>{{ $index + 1 }}</td> {{-- Nomor urut otomatis mulai dari 1 --}}
        <td>{{ $p->nama }}</td>
        <td>{{ $p->kategori }}</td>
        <td>{{ $p->harga }}</td>
        <td>{{ $p->stok }}</td>
        <td>
            <a href="{{ route('products.edit', $p->id) }}">Edit</a> |
            <form action="{{ route('products.destroy', $p->id) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Yakin hapus?')">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
</body>
</html>
