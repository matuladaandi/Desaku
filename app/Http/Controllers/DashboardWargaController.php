<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;

class DashboardWargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $warga = Warga::all();
        return view('dashboard.warga.index', compact(['warga']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.warga.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nik' => 'required|unique:wargas|numeric',
            'nama' => 'required',
            'ttl' => 'required',
            'j_klmn' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'sts_perkawinan' => 'required',
            'pekerjaan' => 'required',
            'warganegara' => 'required'
        ]);

        Warga::create($validatedData);
        return redirect('dashboard/warga')->with('success', 'Data Warga Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function show(Warga $warga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $warga = Warga::find($id);
        return view('dashboard.warga.edit', compact(['warga']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Warga $warga)
    //  $request itu data baru yg krim, sedangkan $warga adalah data lama yg sudah ada ditabel kita 
    {
        $rules = [
            'nama' => 'required',
            'ttl' => 'required',
            'j_klmn' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'sts_perkawinan' => 'required',
            'pekerjaan' => 'required',
            'warganegara' => 'required'
        ];
        if ($request->nik != $warga->nik) {
            $rules['nik'] = 'required|numeric';
        }
        $validatedData = $request->validate($rules);
        Warga::where('id', $warga->id)
            ->update($validatedData);
        return redirect('dashboard/warga')->with('success', 'Data Warga Berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Warga $warga)
    {

        Warga::destroy($warga->id);
        return redirect('/dashboard/warga')->with('success', 'Data Warga Berhasil Hapus');
    }
}
