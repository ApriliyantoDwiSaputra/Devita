<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;
    protected $table = 'absensi';
    protected $fillable = ['karyawan_id', 'tanggal', 'jam_masuk', 'jam_keluar'];

    // Relasi: Absensi ini dimiliki oleh satu Karyawan
    public function karyawan()
    {
        // return $this->belongsTo(Karyawan::class, 'karyawan_id');
        return $this->belongsTo(Karyawan::class);
    }
}
