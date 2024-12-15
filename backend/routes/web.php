<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;

Route::get('/pessoas', [PessoaController::class, 'index']);
Route::get('/pessoas/incluir', [PessoaController::class, 'create']);
Route::get('/pessoas/alterar/{id}', [PessoaController::class, 'update']);
Route::get('/pessoas/deletar/{id}', [PessoaController::class, 'destroy']);
Route::get('/pessoas/visualizar/{id}', [PessoaController::class, 'show']);

Route::get('/usuarios/login/{email}/{senha}', [UsuarioController::class, 'show']);
Route::get('/usuarios', [UsuarioController::class, 'index']);
Route::get('/usuarios/incluir', [UsuarioController::class, 'create']);