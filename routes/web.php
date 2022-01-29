<?php

use App\Http\Controllers\somaController;
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
    logger()->debug('Alguém acessou o site');
    logger()->info('Alguém acessou o site');

    logger()->error('Usuario tentou e acessou o site',['user'=>2]);

    return view('welcome');
});

Route::get('/soma/{num1}/{num2}',[somaController::class, 'soma']);

Route::get('/sub/{num1}/{num2}' ,[somaController::class, 'sub']);

Route::get('/div/{num1}/{num2}', [somaController::class, 'div']);