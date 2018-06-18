<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;
use App\Http\Controllers;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Paciente $paciente)
    {
    $title = 'Lista de Paciente';

    $pacientes = $paciente->all();
    return view('paciente', compact('pacientes','title'));
       
}

public function create(){
    $title = 'Cadastrar Novo Paciente';
    return view('create_p', compact('title'));
            }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   

