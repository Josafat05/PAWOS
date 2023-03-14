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

Route::get('/pagina', function () {
    return view('paginaprincipal');
});
Route::get('/iniciod', function () {
    return view('iniciose');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/botones', function () {
    return view('botones');
});

Auth::routes();

Route::post('/home/store',[\App\Http\Controllers\HomeController::class,'store'])->name('home.store');

Route::delete('/home/{producto}',[\App\Http\Controllers\HomeController::class,'destroy'])->name('home.destroy');

Route::post('/home/{id}/update',[\App\Http\Controllers\HomeController::class,'update'])->name('home.update');

Route::get('/home/{id}/edit', [App\Http\Controllers\HomeController::class, 'edit'])->name('edit');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
