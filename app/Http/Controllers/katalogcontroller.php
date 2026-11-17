<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->get('q');

        // Array produk
        $produk = [
            ['id' => 1, 'nama' => 'Kopi Ende', 'kategori' => 'Minuman', 'harga' => 15000, 'stok' => 12],
            ['id' => 2, 'nama' => 'Roti Cokelat', 'kategori' => 'Makanan', 'harga' => 8000, 'stok' => 0],
            ['id' => 3, 'nama' => 'Teh Hijau', 'kategori' => 'Minuman', 'harga' => 10000, 'stok' => 5]
        ];

        // Filter produk berdasarkan nama
        if ($q) {
            $produk = array_filter($produk, function ($item) use ($q) {
                return stripos($item['nama'], $q) !== false;
            });
        }

        return view('katalog.index', compact('produk', 'q'));
    }

    public function show($id)
    {
        $produk = [
            ['id' => 1, 'nama' => 'Kopi Ende', 'kategori' => 'Minuman', 'harga' => 15000, 'stok' => 12],
            ['id' => 2, 'nama' => 'Roti Cokelat', 'kategori' => 'Makanan', 'harga' => 8000, 'stok' => 0],
            ['id' => 3, 'nama' => 'Teh Hijau', 'kategori' => 'Minuman', 'harga' => 10000, 'stok' => 5]
        ];

        $p = collect($produk)->firstWhere('id', $id);

        if (!$p) {
            abort(404);
        }

        return view('katalog.show', ['produk' => $p]);
    }
}