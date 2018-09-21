<?php

Route::resource('kelas','KelasController');
Route::resource('piket', 'piketController');

Route::get('/siswa', function () {
    return view('siswa.siswa');
});
Route::get('/mapel', function () {
    return view('mapel.mapel');
});
Route::get('/absensi', function () {
    return view('absensi.absensi');
});
Route::get('/', function () {
    return view('master.content');
});

