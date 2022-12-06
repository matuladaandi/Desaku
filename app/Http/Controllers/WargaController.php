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
        return view('warga.index', compact(['warga']));
    }

    public function create()
    {
        return view('warga.create');
    }

    public function store(Request $request)
    {
        // panggil model warga dan functio create, masukan semua data kecual token dan submit
        Warga::create($request->except(['_token', 'submit']));
        return redirect('/');
    }

    public function edit($id)
    {
        $warga = Warga::find($id);
        return view('warga.edit', compact(['warga']));
    }
}
