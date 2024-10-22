<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Product;

class ProductController extends Controller
{
    // Menampilkan produk dari database
    public function index() {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // Menampilkan produk dari API
    public function indexFromApi()
    {
        $response = Http::get('https://dummyjson.com/products');

        if ($response->successful()) {
            $products = $response->json()['products'];
            return view('products.index', compact('products'));
        } else {
            return redirect()->route('products.index')->with('error', 'Failed to fetch products from API.');
        }
    }

    // Menyimpan produk dari API ke database
    public function storeProductsFromApi()
    {
        $response = Http::get('https://dummyjson.com/products');

        if ($response->successful()) {
            $products = $response->json()['products'];

            foreach ($products as $productData) {
                Product::create([
                    'title' => $productData['title'],
                    'brand' => $productData['brand'],
                    'category' => $productData['category'],
                    'price' => $productData['price'],
                    'stock' => $productData['stock'],
                    'description' => $productData['description'],
                    'thumbnail' => $productData['thumbnail'],
                ]);
            }

            return redirect()->route('products.index')->with('success', 'Products imported successfully!');
        } else {
            return redirect()->route('products.index')->with('error', 'Failed to fetch products from API.');
        }
    }
}
