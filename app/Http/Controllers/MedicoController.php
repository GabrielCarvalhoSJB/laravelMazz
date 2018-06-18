<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medico;

use App\Http\Controllers;



class MedicoController extends Controller
{

public function __construct(Medico $medico){
	$this->medico=$medico;
}


	public function index(Medico $medico){
	$title = 'Lista de Médicos';
    $medicos = $medico->all();
    return view('medico', compact('medicos', 'title'));
    	}

    	public function create(){
    $title = 'Cadastrar Novo Médico';
    return view('create_m', compact('title'));
            }

 public function store(Request $request)

    { 
    	

    	 $dataForm = $request->except('_token');
    	 $insert = $this->medico->create($dataForm);
    	 if($insert)
    	 	return redirect()->route('medico.index');
    	 else
    	 	return redirect()->route('medico.create_m');
     
    }

}

