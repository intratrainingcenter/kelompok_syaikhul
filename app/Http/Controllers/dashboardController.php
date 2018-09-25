<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\absen;
use App\kelas;
use App\datasiswa;
use App\jadwal_pelajaran;

class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count_siswa = datasiswa::count();
        $count_kelas = kelas::count();
        $count_mapel = jadwal_pelajaran::count();

        // mengambil data bulan ini
        $currentMonth = date('m');
        $count_absen = absen::whereRaw('MONTH(created_at) = ?',[$currentMonth])->count();
        
        // dd($count_siswa,$count_kelas,$count_mapel,$count_alpha,$count_izin,$count_sakit);
        
        return view('master.content', compact('count_siswa','count_kelas','count_mapel','count_absen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
