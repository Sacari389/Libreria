<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('libros', App\Http\Controllers\LibroController::class);
Route::resource('autores', App\Http\Controllers\AutoreController::class);
Route::resource('categorias', App\Http\Controllers\CategoriaController::class);
Route::resource('editoriales', App\Http\Controllers\EditorialeController::class);

Route::get('/libros/export', 'LibroController@exportExcel')->name('libros.export');
