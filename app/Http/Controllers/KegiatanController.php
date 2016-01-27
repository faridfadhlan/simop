<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class KegiatanController extends Controller
{
    public function index(){
        $kegiatans = \App\Kegiatan::with('jenis_waktu')->paginate(10);
        return view('kegiatan.index', ['kegiatans'=>$kegiatans]);
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
}