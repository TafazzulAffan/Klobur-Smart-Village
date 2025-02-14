<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model
{
    use HasFactory;
    protected $table = "notifikasi";
    protected $fillable = [
        'judul', 'isi', 'waktu_kirim', 'dibaca',
    ];
}
