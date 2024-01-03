<?php

namespace Database\Seeders;
use App\Models\Pesanan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class pesananTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paket = [
            [
           
            "nama" => "Rofiisultan",
            "nomor_telp" => "098899",
            "alamat"   => "jl.hangtuah",
            "paket_jar"   => "10",
            ],[
            "nama" => "aguss",
            "nomor_telp" => "098899773",
            "alamat"   => "jl.sukasuka",
            "paket_jar"   => "18",
            ],[
            "nama" => "udin",
            "nomor_telp" => "09886673",
            "alamat"   => "jl.batu",
            "paket_jar"   => "99",
        ],[
            "nama" => "aditt",
            "nomor_telp" => "098836673",
            "alamat"   => "jl.992882",
            "paket_jar"   => "49",
         ],[
            "nama" => "bunga",
            "nomor_telp" => "09866373",
            "alamat"   => "jl.jujutsu",
            "paket_jar"   => "89",
        ],[
            "nama" => "ganta",
            "nomor_telp" => "0987373",
            "alamat"   => "jl.sukapura",
            "paket_jar"   => "50",
        ],
           
            
        ];
        Pesanan::truncate();
        Pesanan::insert($paket);
    }
}
