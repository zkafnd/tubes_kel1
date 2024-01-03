<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    use HasFactory;
    protected $table = 'pesanans';
    protected $primarykey = 'id';
    protected $fillable =[
        'nama',
        'nomor_telp',
        'alamat',
        'paket_jar',
    ];
}