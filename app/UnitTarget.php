<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnitTarget extends Model
{
    protected $table = 'unit_target';
    public $timestamps = false;
    protected $primaryKey='id';
    protected $fillable = array('nama');
}
