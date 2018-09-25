<?php

Route::resource('kelas','KelasController');
Route::resource('piket', 'piketController');
Route::resource('mapel', 'mapelController');

Route::get('/', 'dashboardController@index')->name('dashboard');

Route::get('/siswa', function () {
    return view('siswa.siswa');
});
Route::get('/absensi', function () {
    return view('absensi.absensi');
});
// Route::get('/', function () {
//     return view('master.content');
// });

