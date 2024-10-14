<?php

namespace App\Http\Controllers;

use App\Models\Supplier; // Pastikan model Supplier sudah ada
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    // Menampilkan daftar supplier
    public function index()
    {
        // Mengambil semua data supplier
        $suppliers = Supplier::all(); // Memanggil model Supplier yang benar
        return view('suppliers.index', compact('suppliers')); // Pastikan view ini ada
    }
}
?>