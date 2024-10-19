<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    $home = [
        'name' => 'Anjela',
        'age' => 19,
        'position' => 'China',
        'address' => 'Dahua'
    ];
    return view('home', ['homelist' => $home]);
});
Route::get('/contacts', function () {
    $contact = [
        'address' => 'Xinbi',
        'post_code' => '100048',
        'email' => 'xinbi@qq.com',
        'phone' => '+86 188 0507 7895'
    ];
    return view('contacts', ['contactlist' => $contact]);
});