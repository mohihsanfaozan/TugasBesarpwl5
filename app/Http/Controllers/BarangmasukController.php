<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\models\Barangmasuk;
use Illuminate\Support\Facades\Storage;

class BarangmasukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        $barangmasuks = barangmasuk::all();
        return view('barangmasuk', compact('user', 'barangmasuks'));
    }
    
}
