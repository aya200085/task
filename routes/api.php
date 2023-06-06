<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\SettingController;

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





Route::group([
    'middleware' => 'api',
], function ($router) {
    Route::post('/login', [ClientController::class, 'login']);
    Route::post('/register', [ClientController::class, 'register']);
    Route::post('/logout', [ClientController::class, 'logout']);
    Route::post('/refresh', [ClientController::class, 'refresh']);

});

 Route::group(['middleware'=>['api','JwtMIddleware']],function(){
Route::get('countries',[SettingController::class,'allCountries']);

Route::get('states',[SettingController::class,'allStates']);

Route::get('cities', [SettingController::class, 'allCities']);


    }) ;



