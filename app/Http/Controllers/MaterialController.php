<?php

namespace App\Http\Controllers;

use App\Models\Material; // Memastikan model Material sudah ada
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    // Menampilkan daftar materials
    public function index()
    {
        // Mengambil semua data materials dari database
        $materials = Material::all();
        return view('materials.index', compact('materials')); // Pastikan view ini ada
    }
}
?>
