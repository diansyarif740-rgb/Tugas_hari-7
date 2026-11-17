@extends('layouts.app')

@section('title', 'Katalog Produk')

@section('content')
    <h1>Katalog Produk</h1>
    <p>Harga dan stok toko</p>

    <!-- Form Pencarian -->
    <form method="GET" action="{{ route('katalog.index') }}">
        <label for="q">Nama produk</label>
        <input id="q" name="q" value="{{ $q ?? '' }}">
        <button type="submit">Cari</button>
    </form>
    

    @forelse ($produk as $item)
        <div>
            <h3>{{ $item['nama'] }}</h3>
            <p>Kategori: {{ $item['kategori'] }}</p>
            <p>Harga: Rp {{ number_format($item['harga'], 0, ',', '.') }}</p>
            <p>Status: <x-status-stok :stok="$item['stok']" /></p>
        </div>
        
    @empty
        <p>Produk tidak ditemukan.</p>
    @endforelse
@endsection