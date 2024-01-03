<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluhan extends Model
{
    use HasFactory;
    protected $table = 'keluhans';
    protected $primaryKey = 'id';
    protected $fillable = 
    [
        'nama',
        'telpon',
        'alamat',
        'masalah'
    ];
}
