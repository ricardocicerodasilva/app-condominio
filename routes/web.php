<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CondominioController;

Route::get('/',[CondominioController::class,'MostrarHome'])->name('home-adm');
Route::get('/cadastra-morador',[CondominioController::class,'MostrarCadastroMorador'])->name('show-cadastro-morador');
Route::get('/lista-morador',[CondominioController::class,'MostrarMoradorNome'])->name('lista-morador');
Route::get('/altera-morador/{id}',[CondominioController::class,'MostrarMoradorCodigo'])->name('show-altera-morador');

// para cadastrar
Route::post('/cadastra-morador',[CondominioController::class,'CadastrarMorador'])->name('cadastra-morador');

//para deletar
Route::delete('/apaga-morador/{id}',[CondominioController::class,'destroy'])->name('apaga-morador');

//para alterar
Route::put('/altera-morador/{id}',[CondominioController::class,'Update'])->name('altera-morador');
