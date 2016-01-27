<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    protected $table = 'pekerjaan';
    public $timestamps = false;
    protected $primaryKey='id';
    protected $fillable = array(
    	'nama',
    	'tgl_mulai',
    	'tgl_selesai',
    	'jumlah_target',
    	'keterangan',
    	'unit_target_id',
    	'user_creator_id',
    	'user_pj_id',
    	'kegiatan_id',
    );
}
