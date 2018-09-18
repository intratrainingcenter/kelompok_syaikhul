<?php

Route::get('/', function () {
    return view('indexlte');
});

Route::get('/siswa', function () { return view('siswa/siswa'); });
Route::get('/kelas', function () { return view('kelas/kelas'); });
Route::get('/piket', function () { return view('piket/piket'); });
Route::get('/absen', function () { return view('absen/absen'); });
Route::get('/mapel', function () { return view('mapel/mapel'); });

Route::resource('/coba', 'testpagecontrollerAPI');

Route::get('/test/{user}', 'testpagecontroller@index');

Route::get('/nama/{user}', function($user) {
    return $user;
});





