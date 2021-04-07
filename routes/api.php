<?php

use App\Http\Controllers\CoronavirusScraping;
use Illuminate\Support\Facades\Route;

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

Route::get('/updates', [CoronavirusScraping::class, 'scrap']);

Route::get('/updates/{id}', function ($id) {

});

Route::get('/countries', function () {

});
