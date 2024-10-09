<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index()
    {   
        $data['pengumuman'] = \App\Models\Pengumuman::latest()->paginate(10);
        return view('admin.pengumuman', $data);
    }
    public function create()
    {
        return view('admin.pengumumans.create');
    }
    public function store(Request $request) 
    {
        $request ->validate([
            'judul'=>'required',
            'deskripsi'=>'required'
        ]);

        Pengumuman::create($request->all());
        return redirect()->route('admin.pengumuman')->with('success', 'Pengumuman berhasil dibuat');
    }
}
