<?php

namespace App\Http\Controllers;

use App\Models\Midtest;
use Illuminate\Http\Request;

class MidtestController extends Controller
{
    public function index()
    {
        // $data harus sama dgn compact data, compact = artinya lemparkan data  
        $data = Midtest::all();
        return view('folmidtest.midtest_192419_m_andi_matulada', compact(['data']));
    }

    public function create()
    {
        return view('folmidtest.midtestcreate');
    }

    public function store(Request $request)
    {
        // panggil model Midtest dan function create, masukan semua data kecuali token dan submit
        Midtest::create($request->except(['_token', 'submit']));
        return redirect('/midtest');
    }

    public function edit($id)
    {
        $data = Midtest::find($id);
        return view('folmidtest.midtestedit', compact(['data']));
    }

    public function update($id, Request $request)
    {
        $data = Midtest::find($id);
        $data->update($request->except(['_token', 'submit']));
        return redirect('/midtest');
    }

    public function delete($id)
    {
        $data = Midtest::find($id);
        $data->delete();
        return redirect('/midtest');
    }
}
