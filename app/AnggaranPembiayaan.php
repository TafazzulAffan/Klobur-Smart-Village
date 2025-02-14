<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggaranPembiayaan extends Model
{
    use HasFactory;
    protected $table = 'anggaran_pembiayaan';
    protected $guarded = [];
}
