<?php

namespace App\Http\Controllers;

use App\Models\Keluhan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KeluhanController extends Controller
{
    public function addkeluhan() {
        return view('pesanan.contact');
    }

    public function isikeluhan(Request $request) {
        // dd($request->all());
        $keluhan = Keluhan::create($request->all());
        if ($keluhan) {
            Session::flash('status', 'success');
            Session::flash('message', 'Masalah anda Berhasil berhasil dan anda mohon untuk menunggu');
        };
        return redirect('/add-keluhan');
    }

    public function problem() {
        $keluhan = Keluhan::orderBy('id')->paginate(10);
        // dd($keluhan);
        return view('pesanan.problem', ['keluhan' => $keluhan]);
        // redirect('pesanan.contact');
    }
}