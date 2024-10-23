<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth; // Import facade Auth

class LogoutController extends Controller
{
    // Fungsi untuk logout
    public function logout()
    {
        Auth::logout(); // Log out the user
        return redirect('/'); // Redirect to the home page or any other page
    }
}
?>