<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContatoController;
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

/*Route::get('/contato', function () {
    return view('contato');
})->name('contato');;
Route::get('/quem_somos', function () {
    return view('quem_somos');
})->name('quemsomos');;

Route::resource('/', [ContactController::class, 'index']);*/

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/quem-somos', 'quemsomos')->name('quem-somos');
});

Route::controller(ContatoController::class)->group(function () {
    Route::get('/contato', 'index')->name('contato');
    Route::post('/contato', 'enviar')->name('contato-enviar');
});
