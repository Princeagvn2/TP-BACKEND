<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvenementsController;
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
})->name("welcome");
Route::get('evenements', [EvenementsController::class,"index"])->name("evenements.index");
Route::get('evenements/create', [EvenementsController::class,"create"])->name("evenements.create");
Route::post('evenements', [EvenementsController::class,"store"])->name("evenements.store");

