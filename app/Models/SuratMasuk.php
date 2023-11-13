<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    use HasFactory;

    protected $table = "surat_masuks";
    protected $fillable = [
        'no',
        'tgl_surat',
        'perihal',
        'jenis_id',
        'ditujukan',
        'deskripsi',
        'pengirim',
        'berkas',
        'status'
    ];

    public function jenis_surat()
    {
        return $this->belongsTo(JenisSurat::class, 'jenis_id');
    }
}
