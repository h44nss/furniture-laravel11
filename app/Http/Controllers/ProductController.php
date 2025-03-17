<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Simpan gambar ke storage/app/public/products
        $path = $request->file('gambar')->store('products', 'public');

        // Simpan hanya path gambar ke database
        $product = new Product();
        $product->nama_product = $request->nama_product;
        $product->nama_product = $request->nama_product;
        $product->harga_product = $request->harga_product;
        $product->stok_product = $request->stok_product;
        $product->kategori_product = $request->kategori_product;
        $product->gambar = $path; // Simpan path: "products/kursi.jpg"
        $product->save();

        return redirect()->back()->with('success', 'Product added successfully!');
    }

    public function filterByCategoryAjax($kategori)
    {
        Log::info("Kategori yang diterima: " . $kategori);

        $products = Product::where('kategori_product', strtolower($kategori))->get();

        // Ubah path gambar agar bisa diakses melalui URL
        foreach ($products as $product) {
            $product->image_url = asset('storage/' . $product->gambar_product);
        }

        Log::info("Jumlah produk ditemukan: " . $products->count());

        return response()->json($products);
    }
}
