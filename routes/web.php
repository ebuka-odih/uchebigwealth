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

Route::view('/', 'pages.index3')->name('index');
Route::view('/get-started', 'pages.get-in')->name('get.started');

Route::get('payment-method', 'PaymentController@paymentMethods')->name('payment_method');
