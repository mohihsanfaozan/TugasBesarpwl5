<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\models\Barangkeluar;
use Illuminate\Support\Facades\Storage;

class BarangkeluarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        $barangkeluars = barangkeluar::all();
        return view('barangkeluar', compact('user', 'barangkeluars'));
    }
}
