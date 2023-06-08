<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function show()
    {
        $profile = Profile::first(); // Mengambil profil pertama dari tabel

        return view('profile', ['Profile' => $profile]);
    }
}
