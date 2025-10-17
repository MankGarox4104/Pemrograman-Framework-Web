<h1>Edit Produk</h1>
<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <p>Nama: <input type="text" name="nama" value="{{ $product->nama }}"></p>
    <p>Kategori: <input type="text" name="kategori" value="{{ $product->kategori }}"></p>
    <p>Harga: <input type="number" name="harga" step="0.01" value="{{ $product->harga }}"></p>
    <p>Stok: <input type="number" name="stok" value="{{ $product->stok }}"></p>
    <button type="submit">Update</button>
</form>
<a href="{{ route('products.index') }}">Kembali</a>
