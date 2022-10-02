<?php

use App\Http\Controllers\API\EventsController;
use App\Http\Controllers\API\PaymentIntentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/events', [EventsController::class, 'index']);

Route::group(['middleware' => 'auth:api'], function () {
    Route::post('/payment-intent', [PaymentIntentController::class, 'index']);
});