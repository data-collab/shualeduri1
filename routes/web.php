<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/views',[\App\Http\Controllers\ViewController::class, 'index'])->name('views.index');

Route::get('/views/create', [\App\Http\Controllers\ViewController::class, "create"])->name('views.create');

Route::get('/views/{view}', [\App\Http\Controllers\ViewController::class, "show"])->name('views.show');

Route::post('/views/save_view', [\App\Http\Controllers\ViewController::class,"save"])->name('views.save');

Route::get("/views/{view}/edit", [\App\Http\Controllers\ViewController::class, 'edit'])->name('views.edit');

Route::put("/views/{view}/update", [\App\Http\Controllers\ViewController::class, 'update'])->name('views.update');


