<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Product;

class ProductController extends Controller
{
    // Menampilkan semua produk
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // Menampilkan formulir untuk membuat produk baru
    public function create()
    {
        return view('products.create');
    }

    // Menyimpan produk baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string|max:255',
            'price' => 'required|numeric',
            'discount' => 'nullable|numeric',
            'rating' => 'nullable|numeric',
            'stock' => 'required|integer',
            'thumbnail' => 'required|string|max:255',
            'tags' => 'nullable|string|max:255',
            'sku' => 'nullable|string|max:255',
            'weight' => 'nullable|numeric',
            'width' => 'nullable|numeric',
            'height' => 'nullable|numeric',
            'depth' => 'nullable|numeric',
            'warranty_info' => 'nullable|string|max:255',
            'shipping_info' => 'nullable|string|max:255',
            'availability_status' => 'required|string|max:255',
            'return_policy' => 'nullable|string|max:255',
            'minimum_order_quantity' => 'nullable|integer',
            'barcode' => 'nullable|string|max:255',
            'qr_code' => 'nullable|string|max:255',
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
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
                    'description' => $productData['description'],
                    'category' => $productData['category'],
                    'price' => $productData['price'],
                    'discount' => $productData['discount'] ?? null,
                    'rating' => $productData['rating'] ?? null,
                    'stock' => $productData['stock'],
                    'thumbnail' => $productData['thumbnail'],
                    'tags' => implode(',', $productData['tags'] ?? []),
                    'sku' => $productData['sku'] ?? null,
                    'weight' => $productData['weight'] ?? null,
                    'width' => $productData['width'] ?? null,
                    'height' => $productData['height'] ?? null,
                    'depth' => $productData['depth'] ?? null,
                    'warranty_info' => $productData['warranty'] ?? null,
                    'shipping_info' => $productData['shipping'] ?? null,
                    'availability_status' => $productData['availability'] ?? null,
                    'return_policy' => $productData['return_policy'] ?? null,
                    'minimum_order_quantity' => $productData['minimum_order_quantity'] ?? null,
                    'barcode' => $productData['barcode'] ?? null,
                    'qr_code' => $productData['qr_code'] ?? null,
                ]);
            }

            return redirect()->route('products.index')->with('success', 'Products imported successfully!');
        } else {
            return redirect()->route('products.index')->with('error', 'Failed to fetch products from API.');
        }
    }
}
?>