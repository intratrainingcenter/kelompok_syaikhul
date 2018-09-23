<?php

Route::resource('kelas','KelasController');
Route::resource('piket', 'piketController');
Route::resource('mapel', 'mapelController');
Route::resource('absensi','AbsensiController');


Route::get('/', function () {
    return view('master.content');
});

