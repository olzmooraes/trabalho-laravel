<?php

use app\Http\Controllers\ContactController;
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

/*Route::get('/', function () {
    return view('home');
})->name('home');*/

Route::get('/contato', function () {
    return view('contato');
})->name('contato');;
Route::get('/quem_somos', function () {
    return view('quem_somos');
})->name('quemsomos');;

    Route::resource('/', [ContactController::class, 'index']);
