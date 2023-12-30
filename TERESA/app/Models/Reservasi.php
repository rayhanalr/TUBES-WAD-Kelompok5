<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;
    protected $table = 'reservation';
    protected $fillable = [
        'nama',
        'email',
        'nomor_telepon',
        'tanggal',
        'nma_kegiatan',
        'tempat_kegiatan',
        'deskripsi_kegiatan',
        'file',
        'status',
        'user_id'
    ];
    
}
