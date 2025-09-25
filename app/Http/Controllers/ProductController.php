<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        // hanya role owner dan admin yg bisa akses
        $this->middleware('role:owner,admin');
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
