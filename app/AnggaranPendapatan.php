<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggaranPendapatan extends Model
{
    use HasFactory;
    protected $table = 'anggaran_pendapatan';
    protected $guarded = [];
}
