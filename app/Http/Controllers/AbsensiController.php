<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\absen;
use App\datasiswa;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_absence = absen::with('namesiswa')->get();
        // dd($data);

        return view('absensi.absensi',compact('data_absence'));
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
        $check_absensi =  datasiswa::where('NISN', $request->NISN)->exists();
        // dd($check);
        if ($check_absensi == true){
            $insert = new absen();
            $insert->NISN = $request->NISN;
            $insert->lama = $request->lama;
            $insert->keterangan = $request->keterangan;
            $insert->save();

            return redirect('absensi')->with('alert_success', 'Berhasil! Data Berhasil Ditambahkan');
        }else{
            return redirect('absensi')->with('alert_fail', 'Gagal! Data gagal Ditambahkan');
        }

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
        
        // dd($id);
        $update = absen::find($id);
        $update->lama       = $request->lama;
        $update->keterangan = $request->keterangan;
        $update->save();

        if ($update) {
            return redirect('absensi')->with('alert_success', 'Berhasil! Data Berhasil DiUbah');
        } else {
            return redirect('absensi')->with('alert_fail', 'Gagal! Data gagal Diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = absen::destroy($id);

        if ($delete) {
            return redirect('absensi')->with('alert_success', 'Berhasil! Data Berhasil DiHapus');
        } else {
            return redirect('absensi')->with('alert_fail', 'Gagal! Data gagal DiHapus');
        }
    }
}
