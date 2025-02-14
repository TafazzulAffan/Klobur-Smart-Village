<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggaranBelanja extends Model
{
    use HasFactory;
    protected $table = 'anggaran_belanja';
    protected $guarded = [];
}
