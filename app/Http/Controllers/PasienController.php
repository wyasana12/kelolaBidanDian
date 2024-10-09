<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index() {
        $data['pasien'] = \App\Models\Pasien::latest()->paginate(10);
        return view('pasien_index', $data);
    }

    public function daftar(){
        return view('pasien.daftarJanji');
    }

    public function store(Request $request) {
        $requestData = $request->validate([
            'no_pasien' => 'required|numeric',
            'nama' => 'required|min:3',
            'umur' => 'required|numeric',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'alamat' => 'nullable'
        ]);
        $pasien = new \App\Models\Pasien();
        $pasien ->fill($requestData);
        $pasien ->save();
        return back()->with('success', 'Pendaftaran telah berhasil dilakukan');
    }
}
