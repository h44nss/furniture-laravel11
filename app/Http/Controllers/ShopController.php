<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('shop', compact('products'));
    }

    // Function untuk pencarian produk
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Cari produk berdasarkan nama
        $products = Product::where('nama_product',  'like', "%{$query}%")->get();

        return view('shop', compact('products'));
    }
}
