<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;

class JadwalController extends Controller
{
    public function index()
    {   
        $data['jadwal'] = \App\Models\Jadwal::latest()->paginate(10);
        return view('admin.jadwal', $data);
    }
    public function create()
    {
        return view('admin.jadwals.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'time' => 'required|date_format:H:i',
            'status' => 'required|in:sedia,tidak tersedia',
            'date'=> 'required|date',
        ]);

        Jadwal::create($request->all());

        return redirect()->route('admin.jadwal')->with('success', 'Jadwal berhasil dibuat');
    }
}
