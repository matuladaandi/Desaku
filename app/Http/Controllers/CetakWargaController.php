<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF;

class CetakWargaController extends Controller
{
    public function index()
    {
        $warga = Warga::all();
        return view('dashboard.warga.warga_pdf', ['warga' => $warga]);
    }
    public function cetak_pdf()
    {
        $warga = Warga::all();
        $pdf = PDF::loadview('warga_pdf', ['warga' => $warga]);
        return $pdf->download('laporan-warga-pdf');
    }
}
