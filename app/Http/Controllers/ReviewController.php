<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::with('product')->get(); // Mengambil semua review dengan produk terkait
        return view('reviews.index', compact('reviews'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product_id' => 'required|exists:products,id',
            'rating' => 'required|numeric|min:1|max:5',
            'comment' => 'required|string',
            'reviewer_name' => 'required|string',
            'reviewer_email' => 'required|email',
        ]);

        Review::create($validatedData); // Menyimpan review baru

        return redirect()->back()->with('success', 'Review berhasil ditambahkan.');
    }
}
?>