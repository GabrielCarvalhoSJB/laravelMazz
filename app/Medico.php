<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
	protected $fillable = ['name','telefone','horas','dt_consulta'];

    protected $table = "tb_medicos";
}
