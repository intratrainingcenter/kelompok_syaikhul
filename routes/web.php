<?php

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
Route::resource('piket', 'piketController');
Route::get('/saya', 'Ckelas@index')->name('saya');
Route::get('/', function () {
    return view('master.content');
});
Route::get('/kelas', function () {
    return view('kelas.kelas');   
});
// Route::get('/piket', function () {
//     return view('piket.piket');
// });
Route::get('/siswa', function () {
    return view('siswa.siswa');
});
Route::get('/mapel', function () {
    return view('mapel.mapel');
});
Route::get('/absensi', function () {
    return view('absensi.absensi');
});

