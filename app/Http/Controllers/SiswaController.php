<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\datasiswa;
use App\kelas;
use App\jadwal_piket;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = datasiswa::with('piket')->with('showclass')->get();
        $data_class = kelas::all();
        $data_pijket = jadwal_piket::all();

        
        $selectclass = [''=>'Pilih Kelas'];

        foreach ($data_class as $item) {
            $selectclass[$item->id] = $item->nama_kelas;
        }

        $selectpijket = [''=>'Pilih Piket'];

        foreach ($data_pijket as $item) {
            $selectpijket[$item->id] = $item->hari;
        }

        return view('siswa.siswa',compact('data','selectclass','selectpijket'));
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
        $insert = new datasiswa();
        $insert->id_kelas       = $request->id_kelas;
        $insert->id_piket       = $request->piket;
        $insert->NISN           = $request->NISN;
        $insert->nama           = $request->nama;
        $insert->jenis_kelamin  = $request->jk;
        $insert->absen          = $request->absen;
        $insert->save();

        return redirect('siswa');
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
        // dd($request);
        $update = datasiswa::find($id);
        $update->id_kelas       = $request->id_kelas;
        $update->id_piket       = $request->piket;
        $update->NISN           = $request->NISN;
        $update->nama           = $request->nama;
        $update->jenis_kelamin  = $request->jk;
        $update->absen          = $request->absen;
        $update->save();

        return redirect('siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = datasiswa::destroy($id);
        return redirect('siswa');
    }
}
