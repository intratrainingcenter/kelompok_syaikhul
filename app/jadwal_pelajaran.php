<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_pelajaran extends Model
{
	protected $fillable = ['id_kelas','hari','kode_pelajaran','pelajaran'];

    public function getkelas()
  	{
  		return $this->belongsTo('App\kelas','id_kelas','id');
	}
}
