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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/calculator', \App\Livewire\Calculator::class)->name('calculator');
Route::get('/todo-list', \App\Livewire\TodoList::class)->name('todo-list');
Route::get('/cascading-dropdown', \App\Livewire\CascadingDropdown::class)->name('cascading-dropdown');
Route::get('/products', \App\Livewire\ProductSearch::class)->name('products');
