<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    public function index()
    {
        // $warga harus sama dgn compact warga, compact = artinya lemparkan data  
        $warga = Warga::all();

        // yg terakhir yg akan berada di atas
        // $warga = Warga::latest()->get;
        return view('warga.index', compact(['warga']));
    }
}
