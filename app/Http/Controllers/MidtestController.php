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
        dd($data);
        return view('folmidtest.midtest_192419_m_andi_matulada', compact(['data']));
    }
}
