<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'kegiatan';
    public $timestamps = false;
    protected $primaryKey='id';
    protected $fillable = array('nama','jenis_waktu_id','nilai_waktu', 'tahun');
    
    public function jenis_waktu() {
        return $this->belongsTo('\App\JenisWaktu', 'jenis_waktu_id', 'id');
    }
}
