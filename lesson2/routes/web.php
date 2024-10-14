<?php

use App\Http\Controllers\FormProcessor;
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

Route::get('/userform', [FormProcessor::class, 'index']);
// Route::post('/store_form', [FormProcessor::class, 'store']); // вывод JSON
Route::post('/greeting', [FormProcessor::class, 'getDataFormUser']);