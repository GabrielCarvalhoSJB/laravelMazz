<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SistemaController extends Controller
{
   public function index(){

   	
   }
public function medicos(){
      return view('medicos');
   }

   public function pacientes(){
   	return view('paciente');
   }

   public function agenda(){
   	return view('agenda');
   }

   public function usuario(){
   	return view('usuario');
   }
}
