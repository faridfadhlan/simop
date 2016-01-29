<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Kegiatan extends Model
{
    protected $table = 'kegiatan';
    public $timestamps = false;
    protected $primaryKey='id';
    protected $fillable = array('nama','jenis_waktu_id','nilai_waktu', 'tahun');
    
    public function jenis_waktu() {
        return $this->belongsTo('\App\JenisWaktu', 'jenis_waktu_id', 'id');
    }
    
    public function pekerjaans()
    {
        return $this->hasMany('App\Pekerjaan', 'kegiatan_id', 'id');
    }
    
    public function data_gantt_kegiatan() {
        return DB::select(
                "SELECT
                    k.id as id,
                    k.nama as nama,
                    DATE_FORMAT( MIN( p.tgl_mulai ) , '%d-%m-%Y' ) AS mulai,
                    DATE_FORMAT( MAX( p.tgl_selesai ) , '%d-%m-%Y' ) AS selesai,
                    datediff( max( p.tgl_selesai ) , min( p.tgl_mulai ) ) AS durasi,
                    SUM(pp.jumlah_target) AS target_dialokasikan
                FROM
                    kegiatan k
                    LEFT OUTER JOIN pekerjaan p
                    ON k.id = p.kegiatan_id
                    LEFT OUTER JOIN pelaksana_pekerjaan pp
                    ON p.id = pp.pekerjaan_id
                GROUP BY
                    k.id
                ORDER BY
                    k.id ASC
        ");
    }
}
