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

use App\Http\Controllers\PeopleController;

Route::get('/', [PeopleController::class, 'index']);
Route::get('/pessoas/create', [PeopleController::class, 'create']);
Route::post('/pessoas', [PeopleController::class, 'store']);
