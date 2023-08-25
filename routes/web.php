<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', [\App\Http\Controllers\FormController::class, 'create'])
    ->name('form.create');

Route::post('form/store', [\App\Http\Controllers\FormController::class, 'store'])
    ->name('form.store');
Route::get('form/index', [\App\Http\Controllers\FormController::class, 'index'])
    ->name('form.index');
Route::patch('instrutor/{id_instrutor}/update', [\App\Http\Controllers\InstrutorController::class, 'update'])
    ->name('instrutor.update');
Route::delete('instrutor/{id_instrutor}', [\App\Http\Controllers\InstrutorController::class, 'destroy'])
    ->name('instrutor.destroy');
Route::get('instrutor/{id_instrutor}/edit', [\App\Http\Controllers\InstrutorController::class, 'edit'])
    ->name('instrutor.edit');
