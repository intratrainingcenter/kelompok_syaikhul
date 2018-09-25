<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class absen extends Model
{
    public function namesiswa()
    {
    	return $this->belongsTo('App\datasiswa','NISN','NISN');
    }
}
