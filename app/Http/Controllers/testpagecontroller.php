<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testpagecontroller extends Controller
{
    public function index(){
        
        $isi = "Ini Link Biasa";
        return view('coba', ['isi'=>$isi]);
    }
}
