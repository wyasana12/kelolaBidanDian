<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Jadwal;

class BookingController extends Controller
{   
    public function create()
    {   
        $data['jadwal'] = \App\Models\Jadwal::latest()->paginate(10);
        return view('pasien.create', $data);
    }

    public function store(Request $request)
    {
    $request -> validate([
        'nama' => 'required|string|max:255',
        'nik' => 'required|digits:16',
        'tanggalLahir' => 'required|date',
        'jenisKelamin' => 'required|in:L,P',
        'phone' => 'required|regex:/^[0-9]{10,15}$/',
        'keluhan' => 'required|string|max:1000',
        'tanggalPesan' => 'required|date|after_or_equal:today',
        'jadwal_id' => 'required|exists:jadwal,jadwal_id',
    ]);

    $jadwal = Jadwal::find($request->jadwal_id);

    if($jadwal->status == 'tidak tersedia') {
        return back()->with('error', 'Jadwal sudah penuh, silahkan pilih jadwal yang kosong.');
    }

    try {
        Booking::create($request->all());
        $jadwal->update(['status'=> 'tidak tersedia']);
    } catch (\Exception $e) {
        return back()->with('error', 'Terjadi kesalahan saat menyimpan data: ' . $e->getMessage());
    }
    

    return redirect()->route('pasien.confirmation')->with('success', 'Konsultasi berhasil didaftarkan');
    }
}
