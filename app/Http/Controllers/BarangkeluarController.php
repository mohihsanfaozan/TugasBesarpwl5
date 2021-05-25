<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\models\Barangkeluar;
use Illuminate\Support\Facades\Storage;
use PDF ;

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
    public function print_barangkeluar()
    {
        $barangkeluars = barangkeluar::all();
        $pdf = PDF::loadview('print.barangkeluar', ['barangkeluar' => $barangkeluars]);
        return $pdf->download('Laporan_Barang_Keluar.pdf');
    }
}

