<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datasiswa extends Model
{
    public function piket()
    {
    	return $this->belongsTo('App\jadwal_piket','id_piket','id');
    }
    public function showclass()
    {
    	return $this->belongsTo('App\kelas','id_kelas','id');
    }
}
