<?php

namespace App\Http\Controllers;

use App\Models\Material; // Menggunakan model Material
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Menampilkan dashboard
    public function index()
    {
        // Mengambil semua data materials dari database
        $materials = Material::all();
        
        // Mengembalikan view dashboard dengan data materials
        return view('dashboard.index', compact('materials')); // Pastikan view ini ada
    }
}
?>