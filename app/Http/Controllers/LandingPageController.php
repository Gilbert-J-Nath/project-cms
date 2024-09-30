<?php

namespace App\Http\Controllers;

use App\Models\Expertise;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        // Ambil 3 data per halaman
        $expertise = Expertise::paginate(3);
        return view('expertise.index', compact('expertise'));
    }
}
