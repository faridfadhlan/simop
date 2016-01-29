<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use DB;
class KegiatanController extends Controller
{
    public function index(){
        $kegiatans = \App\Kegiatan::with('jenis_waktu')->paginate(10);
        return view('kegiatan.index', ['kegiatans'=>$kegiatans]);
    }
    
    public function detail($id) {
        $kegiatan = \App\Kegiatan::findOrFail($id);
        return view('kegiatan.detail', ['kegiatan'=>$kegiatan]);
    }
    
    public function edit($id) {
        $kegiatan = \App\Kegiatan::findOrFail($id);
        $jenis_waktu = \App\JenisWaktu::lists('jenis_waktu', 'id');
        return view('kegiatan.edit', ['kegiatan'=>$kegiatan, 'jenis_waktu'=>$jenis_waktu]);
    }
    
    public function tambah(){
        $kegiatan = new \App\Kegiatan;
        $jenis_waktu = \App\JenisWaktu::lists('jenis_waktu', 'id');
        return view('kegiatan.tambah', ['kegiatan'=>$kegiatan, 'jenis_waktu'=>$jenis_waktu]);
    }
    
    public function simpan(Request $request) {
        $kegiatan = new \App\Kegiatan;
        $messages = array(
            'required'=>'Field :attribute harus diisi',
            'jenis_waktu_id.required' => 'Jenis Waktu Kegiatan harus diisi'
        );
        
        $validator = Validator::make($request->all(), [
            'nama' => 'required|max:255',
            'jenis_waktu_id' => 'required',
            'nilai_waktu'=>'required|max:4',
            'tahun'=>'required|max:4'
        ], $messages);

        if ($validator->fails()) {
            return redirect('kegiatan/tambah')
                        ->withErrors($validator)
                        ->withInput();
        }

        $kegiatan->nama = $request->input('nama');
        $kegiatan->jenis_waktu_id = $request->input('jenis_waktu_id');
        $kegiatan->nilai_waktu = $request->input('nilai_waktu');
        $kegiatan->tahun = $request->input('tahun');
        $kegiatan->save();
        return redirect('kegiatan');
        
    }
    
    public function data_gantt() {
        $kegiatan = DB::select(
            "SELECT
                k.id as id,
                k.nama as text,
                (CASE WHEN (p.tgl_mulai IS NULL) 
                THEN
                    DATE_FORMAT( NOW() , '%d-%m-%Y' )
                ELSE
                    DATE_FORMAT( MIN( p.tgl_mulai ) , '%d-%m-%Y' )
                END) AS start_date,
                datediff( max( p.tgl_selesai ) , min( p.tgl_mulai ) ) AS duration,
                0.5 AS progress,
                'true' AS open,
                NULL as parent
            FROM
                kegiatan k
                INNER JOIN pekerjaan p
                ON k.id = p.kegiatan_id
            GROUP BY
                k.id
            
            UNION
            SELECT
                id,
                nama,
                DATE_FORMAT( tgl_mulai , '%d-%m-%Y' ) as start_date,
                datediff(tgl_selesai, tgl_mulai) as duration,
                0.5 as progress,
                NULL AS open,
                kegiatan_id as parent
            FROM
                pekerjaan
        ");
        return view('kegiatan.data_gantt', ['kegiatan'=>$kegiatan]);
    }
}