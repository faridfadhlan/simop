<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PekerjaanController extends Controller
{
    public function index() 
    {
    	$pekerjaans = \App\Pekerjaan::paginate(10);
    	return view('pekerjaan.index', array('pekerjaans'=>$pekerjaans));
    }
    
    public function tambah() {
        $pekerjaans = \App\Pekerjaan::lists('nama', 'id');
        $pekerjaan = new \App\Pekerjaan;
        $kegiatans = \App\Kegiatan::lists('nama', 'id');
        $unit_targets = \App\UnitTarget::lists('nama', 'id');
        
        return view('pekerjaan.tambah', [
            'kegiatans'=>$kegiatans, 
            'unit_targets'=>$unit_targets,
            'pekerjaan'=>$pekerjaan,
            'pekerjaans'=>$pekerjaans
        ]);
    }
    
    public function simpan(Request $request) {
        $pekerjaan = new \App\Pekerjaan;
        $messages = array(
            'required'=>'Field :attribute harus diisi',
        );
        
        $validator = Validator::make($request->all(), [
            'nama' => 'required|max:255',
            'tgl_mulai' => 'required',
            'tgl_selesai'=>'required',
            'jumlah_target'=>'required',
            'unt_target_id'=>'reqired',
            'before_id'=>'required'
        ], $messages);

        if ($validator->fails()) {
            return redirect('pekerjaan/tambah')
                        ->withErrors($validator)
                        ->withInput();
        }

        $pekerjaan->nama = $request->input('nama');
        $pekerjaan->tgl_mulai = $request->input('tgl_mulai');
        $pekerjaan->tgl_selesai = $request->input('tgl_selesai');
        $pekerjaan->jumlah_target = $request->input('jumlah_target');
        $pekerjaan->unit_target_id = $request->input('unit_target_id');
        $pekerjaan->user_creator_id = Auth::user()->id;
        $pekerjaan->user_pj_id = Auth::user()->id;
        $pekerjaan->kegiatan_id = $request->input('kegiatan_id');
        $pekerjaan->before_id = $request->input('before_id');
        $pekerjaan->save();
        return redirect('kegiatan');
    }
}
