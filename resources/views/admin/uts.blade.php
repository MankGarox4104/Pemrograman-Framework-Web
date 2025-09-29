@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1>Halaman UTS</h1>
    <p>Ini adalah halaman khusus admin dengan URL <b>/uts</b>.</p>

    <a href="{{ route('halaman_uts') }}" class="btn btn-secondary mt-3">Kembali ke Dashboard</a>
</div>
@endsection
