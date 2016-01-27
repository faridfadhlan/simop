<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PekerjaanController extends Controller
{
    public function index() 
    {
    	$pekerjaans = \App\Pekerjaan::paginate(10);
    	return view('pekerjaan.index', array('pekerjaans'=>$pekerjaans));
    }
}
