<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jadwal_piket;

class piketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data_picket = jadwal_piket::orderByDesc('created_at')->get();

        return view('piket/piket', compact('data_picket'));
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
        // dd($request);
        $check_hari = jadwal_piket::where('hari', $request->hari)->doesntExist();
        if ($check_hari) {
            
            $insert = jadwal_piket::create([
                'hari' => $request->hari,
                'created_at' => \Carbon\Carbon::now()
            ]);

            return redirect('piket')->with('alert_success', 'Berhasil! Data Berhasil Ditambahkan');
        } else {
            return redirect('piket')->with('alert_fail', 'Gagal! Data gagal Ditambahkan');
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
        // dd($request);
        $check_hari = jadwal_piket::where('hari', $request->hari)->doesntExist();

        
        if ($check_hari) {
            $update = jadwal_piket::find($id);
            $update->hari = $request->hari;
            $update->save();
            
            return redirect('piket')->with('alert_success', 'Berhasil! Data Berhasil DiUbah');
        } else {
            return redirect('piket')->with('alert_fail', 'Gagal! Data gagal Diubah');
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
        $delete = jadwal_piket::destroy($id);
        if ($delete) {
            return redirect('piket')->with('alert_success', 'Berhasil! Data Berhasil DiHapus');
        } else {
            return redirect('piket')->with('alert_fail', 'Gagal! Data gagal DiHapus');
        }

    }
}
