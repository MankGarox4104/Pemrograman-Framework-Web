<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        // hanya bisa diakses oleh role owner
        $this->middleware('owner');
    }

    public function index($angka)
    {
        $hasil = $angka + 10;

        return view('products.index', [
            'angkaAwal' => $angka,
            'hasil' => $hasil
        ]);
    }
}
