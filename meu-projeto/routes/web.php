<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\RelatorioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::resource('alunos', AlunoController::class);

Route::get('/relatorios', [RelatorioController::class, 'emitirRelatorio'])->name('relatorio.emitir'); //apagar depois


Route::get('/graficos', function (){
    return view('grafico.index');
})->name('graficos');
