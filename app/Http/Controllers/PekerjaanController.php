<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Http\Requests;
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
        $pekerjaan = new \App\Pekerjaan;
        $kegiatans = \App\Kegiatan::lists('nama', 'id');
        $unit_targets = \App\UnitTarget::lists('nama', 'id');
        
        return view('pekerjaan.tambah', [
            'kegiatans'=>$kegiatans, 
            'unit_targets'=>$unit_targets,
            'pekerjaan'=>$pekerjaan,
        ]);
    }
    
    public function simpan() {
        
    }
}
