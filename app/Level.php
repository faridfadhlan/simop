<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $table = 'level';
    public $timestamps = false;
    protected $primaryKey='id';
    protected $fillable = array(
    	'nama_level',
    );
}
