<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use App\Enums\QuotesEnum;
use App\Http\Controllers\Api\Quotes;
use App\Http\Controllers\Api\RefreshQuotes;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware(['api_token'])
    ->prefix(QuotesEnum::AVRILLO->value)
    ->group(function () {
        Route::get('/quotes', Quotes::class);
        Route::get('/refresh-quotes', RefreshQuotes::class);
});