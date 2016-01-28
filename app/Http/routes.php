<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// Authentication routes...




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/



Route::group(['middleware' => ['web']], function () {
    Route::get('pekerjaan', 'PekerjaanController@index');
    Route::get('kegiatan', 'KegiatanController@index');
    Route::get('kegiatan/tambah', 'KegiatanController@tambah');
    Route::post('kegiatan/simpan', 'KegiatanController@simpan');
    Route::get('kegiatan/data_gantt', 'KegiatanController@data_gantt');
    Route::get('pekerjaan/tambah', 'PekerjaanController@tambah');
    Route::post('pekerjaan/simpan', 'PekerjaanController@simpan');
    Route::get('dashboard', 'DashboardController@index');
    Route::get('auth/login', 'Auth\AuthController@getLogin');
    Route::post('auth/login', 'Auth\AuthController@postLogin');
    Route::get('auth/logout', 'Auth\AuthController@getLogout');
    Route::get('auth/register', 'Auth\AuthController@getRegister');
    Route::post('auth/register', 'Auth\AuthController@postRegister');
    Route::get('/', function () {	
            if(Auth::check()) return redirect('dashboard');
            else return redirect('auth/login');
    });
    Route::get('/auth/logout', function() {
            Auth::logout();
            return redirect('/');
    });
});

