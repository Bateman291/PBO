<?php

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
// ketika kita akses halaman ini maka akan menampilkan halaman ini "/"
// jalankan semua yang ada di dalam functioon nya 
Route::get('/', function () {
    return ('welcome');
});

Route::get('/home', function () {
    return ('Halaman Home');
});

Route::get('/about', function () {
    return ('Halaman About');
});

Route::get('/blog', function () {
    return ('Halaman Blog');
});

Route::get('/memories', function () {
    return ('I promise that the ending always be the same, there no good reason, make belive and i wake up ever exist again');
});
Route :: get('/belajar', function () {
    echo '<h1>Hello World</h1>' ;
    echo '<p>Sedang belajar Laravel</p>' ;
});

Route:: get('/siswa/smkbpi/rpl', function () {
    echo '<h2 style="text-align: center"><u>welcome to 11 RPL</u></h2>';
});

Route :: get('/siswa/{ganisa}', function ($ganisa) {
    return "Tampilkan data siswa bernama $ganisa";
});

Route :: get('/stok_barang/{jenis}/{merek}', function ($jenis,$merek) {
    return "Cek sisa stok untuk $jenis $merek";
});

Route :: get('/profile', function () {
    return view ('profile');
});
