<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


/*
Consumer Key: 7eAKKlIcU4tPz13EPW6ZfPyCYKHKPHyt
Consumer Secret: I7nOr3pfQGP8OrhN
Created On: Thu, 9th of Dec 2021 at 17:26:30 pm

*/