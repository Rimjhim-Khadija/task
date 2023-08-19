<?php

use App\Http\Controllers\TodoController;
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

Route::get('/', function () {
    return view('');
});
Route::get('/', [TodoController::class, 'index'])->name('todo_index');
Route::get('/create', [TodoController::class, 'create'])->name('todo_create');
Route::post('/store', [TodoController::class, 'store'])->name('todo_store');
Route::get('/show/{id}', [TodoController::class, 'show'])->name('todo_show');
Route::get('/delete/{id}', [TodoController::class, 'delete'])->name('todo_delete');
Route::get('/edit/{id}', [TodoController::class, 'edit'])->name('todo_edit');
Route::post('/update/{id}', [TodoController::class, 'update'])->name('todo_update');
