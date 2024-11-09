<?php


use App\Mail\BookingCompletedMailing;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Telegram\Bot\Laravel\Facades\Telegram;

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

Route::get('/book', function () {
    $email = 'stech999@ya.ru';
    $data = 'Some booking details'; // Пример данных для передачи

    Mail::to($email)->send(new BookingCompletedMailing($data)); // Передаем данные в конструктор

    return response()->json(['status' => 'success']);
});

Route::get('/test-telegram', function () {
    Telegram::sendMessage([
        'chat_id' => env('TELEGRAM_CHANNEL_ID'),
        'parse_mode' => 'html',
        'text' => 'Какое то текстовое событие'
    ]);

    return response()->json(['status' => 'success']);
});
