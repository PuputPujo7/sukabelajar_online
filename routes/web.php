<?php

use App\Http\Livewire\Coba;
use App\Http\Livewire\Home;
use App\Http\Livewire\Profil;
use App\Http\Livewire\Umroh;
use App\Http\Livewire\Haji;
use App\Http\Livewire\Galeri;
use App\Http\Livewire\GaleriDetail;
use App\Http\Livewire\Kontak;
use App\Http\Livewire\Paket;
// use App\Http\Livewire\Paket;
use App\Http\Livewire\PaketDetail;
use App\Http\Livewire\PaketUmroh;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Home::class)->name('home');
Route::get('/profil', Profil::class)->name('profil');
Route::get('/umroh', Umroh::class)->name('umroh');
Route::get('/haji', Haji::class)->name('haji');
Route::get('/galeri', Galeri::class)->name('galeri');
Route::get('/kontak', Kontak::class)->name('kontak');
// Route::get('/paket-umroh-{id}', PaketUmroh::class)->name('paket-umroh');

// Route::get('/', Home::class)->name('home');
Route::get('/paket', PaketUmroh::class)->name('paket');
// Route::get('/profil', Profil::class)->name('profil');
// Route::get('/galeri', Galeri::class)->name('galeri');
Route::get('/coba', Coba::class)->name('coba');
Route::get('/umroh-{id}', PaketDetail::class)->name('detail');
Route::get('/galeri-{id}', GaleriDetail::class)->name('galeri-detail');