<?php

use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\JsonParseController;
use App\Http\Controllers\RequestTestController;
use App\Http\Controllers\TestCookieController;
use App\Http\Controllers\TestHeaderController;
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
});

Route::post('/test_parameters', [RequestTestController::class, 'testRequest']);
Route::get('/test_header', [TestHeaderController::class, 'getHeader']);
Route::get('/test_cookie', [TestCookieController::class, 'testCookie']);
Route::get('/upload_file', [FileUploadController::class, 'showForm'])->name('showForm');
Route::post('/upload_file', [FileUploadController::class, 'fileUpload'])->name('uploadFile');

Route::post('/json_parse', [JsonParseController::class, 'parseJson']);
