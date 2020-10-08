<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DespesasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::redirect('/', '/admin/despesas');

Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('despesas', [DespesasController::class, 'Despesas'])->name('listaDespesas');
    Route::get('despesas/adicionar', [DespesasController::class, 'formAdicionar'])->name('formAdicionar');
    Route::post('despesas/adicionar', [DespesasController::class, 'adicionar'])->name('adicionar');
});
