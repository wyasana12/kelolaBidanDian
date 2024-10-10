<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{   
    protected $table = 'bookings';
    protected $fillable = [
        'nama', 'nik', 'tanggalLahir', 'jenisKelamin', 'phone', 'keluhan', 'tanggalPesan', 'jadwal_id'
    ];

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class);
    }
}
