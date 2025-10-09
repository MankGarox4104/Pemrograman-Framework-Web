<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($nilai)
    {
        // Cek ganjil atau genap
        if ($nilai % 2 == 0) {
            $alertType = 'success';
            $message = "Nilai $nilai adalah GENAP.";
        } else {
            $alertType = 'warning';
            $message = "Nilai $nilai adalah GANJIL.";
        }

        // Kirim ke view
        return view('produk', [
            'alertType' => $alertType,
            'message' => $message
        ]);
    }
}