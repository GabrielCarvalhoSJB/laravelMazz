<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
	protected $fillable = ['name'];
	
    protected $table = "tb_medicos";
}
