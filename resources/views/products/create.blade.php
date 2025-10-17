<h1>Tambah Produk</h1>
<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <p>Nama: <input type="text" name="nama"></p>
    <p>Kategori: <input type="text" name="kategori"></p>
    <p>Harga: <input type="number" name="harga" step="0.01"></p>
    <p>Stok: <input type="number" name="stok"></p>
    <button type="submit">Simpan</button>
</form>
<a href="{{ route('products.index') }}">Kembali</a>
