<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
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

Route::get('/contato', 'ContatoController@contato')->name('contato');
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('sobreNos');
Route::get('/', [CityController::class, 'fetchFromApi']);



Route::get('/cities-api', [CityController::class, 'fetchFromApi']);

Route::get('/paises', 'PaisController@index')->name('paises.index');
Route::get('/paises/{nome}', 'PaisController@show')->name('paises.show');
Route::get('/city-api/{id}', [CityController::class, 'showCityDetailsFromApi']);
