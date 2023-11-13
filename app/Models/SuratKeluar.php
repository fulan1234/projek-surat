<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model
{
    use HasFactory;

    protected $table = "surat_keluars";
    protected $fillable = [
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
