<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemerintahanDesa extends Model
{
     use HasFactory;
    protected $table = 'pemerintahan_desa';
    protected $guarded = [];
}
