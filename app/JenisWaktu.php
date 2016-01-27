<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisWaktu extends Model
{
    protected $table = 'jenis_waktu';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = array('jenis_waktu');

    public function kegiatan() {
    	return $this->hasMany('App\Kegiatan', 'jenis_waktu_id', 'id');
    }
}
