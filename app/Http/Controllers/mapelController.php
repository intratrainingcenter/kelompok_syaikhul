<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jadwal_pelajaran;
use App\kelas;

class mapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data_mapel = jadwal_pelajaran::orderByDesc('created_at')->with('getkelas')->get();
        $data_kelas = kelas::all();

        // dd($data_kelas);
        $selectkelas = [''=>'Pilih Kelas'];

        foreach ($data_kelas as $item) {
            $selectkelas[$item->id] = $item->nama_kelas;
        }
        return view('mapel/mapel', compact('data_mapel','selectkelas'));
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
        // dd($request->all());
        $insert = jadwal_pelajaran::create([
            'id_kelas' => $request->id_kelas ,
            'hari' => $request->hari ,
            'kode_pelajaran' => $request->kode_pelajaran ,
            'pelajaran' => $request->pelajaran ,
            'created_at' => \Carbon\Carbon::now() 
        ]);
        
        return redirect('mapel');
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
