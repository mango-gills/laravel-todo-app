<?php

use App\Http\Controllers\TodosController;
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

Route::get('/', [TodosController::class, 'index']);
Route::post('/todos', [TodosController::class, 'store'])->name('todos.store');

Route::patch('/todos/{todo}', [TodosController::class, 'update'])->name('todos.update');
Route::delete('/todos/{todo}', [TodosController::class, 'destroy'])->name('todos.destroy');
