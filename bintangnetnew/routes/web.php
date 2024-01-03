<?php

// use App\Http\Controllers\pesananController;

use App\Http\Controllers\adminController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\KeluhanController;
use App\Models\contact;
use App\Models\Keluhan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/pesanan', [pesananController::class,'store']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/pesanan',[PesananController::class , 'index']);
    Route::get('/add-pesanan', [PesananController::class,'new']);
    Route::post('/pesanan', [PesananController::class,'store']);
    Route::get('/pesanan/{id}', [PesananController::class,'detail']);
    Route::get('/edit-pesanan/{id}', [PesananController::class,'edit']);
    Route::put('/pesanan/{id}', [PesananController::class,'update']);
    Route::get('/delete-pesanan/{id}', [PesananController::class,'delete']);
    route::delete('/pesanan/{id}', [PesananController::class,'destroy']);
    Route::get('/pesanan-search',[PesananController::class , 'search']);

    // Routes contact
    Route::get('/add-keluhan', [KeluhanController::class, 'addkeluhan']);
    Route::post('/isi-keluhan', [KeluhanController::class, 'isikeluhan']);
    Route::post('/problem', [KeluhanController::class, 'problem']);  
    Route::get('/problem', [KeluhanController::class, 'problem']);  

    Route::get('beranda', function () {
        return view('pesanan.beranda');
    });
    Route::get('berita', function () {
        return view('pesanan.berita');
    });
    // Route::get('/problem',function(){
    //     return view ('pesanan.problem');
    // });
    Route::get('about', function () {
        return view('pesanan.about');
    });
    // Route::get('problem', function () {
    //     return view('pesanan.problem');
    // });
    Route::get('produk', function () {
        return view('pesanan.produk');
    });

    Route::get('pelanggan', function () {
        return view('pesanan.pelanggan');
    });
    Route::get('bayar', function () {
        return view('pesanan.bayar');
    });
    Route::get('detailpesanan', function () {
        return view('pesanan.detailpesanan');
    });
    // route::get('/delete-category/{id}', [CategoryController::class,'delete']);
});
