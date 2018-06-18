<?php

Route::resource('medico','MedicoController');
Route::resource('paciente','PacienteController');
Route::resource('usuario','UsuarioController');

Route::group(['namespace'=>'Site'],function(){


Route::get('/agenda','SistemaController@agenda');

});


