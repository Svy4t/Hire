<?php

use App\Http\Controllers\UsersController;
use App\Http\Controllers\AdvtController;
use App\Http\Controllers\ElecteController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [UsersController::class, 'register']);
Route::post('/login', [UsersController::class, 'auth']);
Route::post('/getUser', [UsersController::class, 'getUser']);
Route::post('/updateUser', [UsersController::class, 'update']);

Route::post('/indexAdvt', [AdvtController::class, 'index']);
Route::post('/addAdvt', [AdvtController::class, 'store']);
Route::post('/storePhotos', [AdvtController::class, 'storePhotos']);
Route::post('/getAdvtUser', [AdvtController::class, 'getAdvtUser']);
Route::post('/getOneAdvt', [AdvtController::class, 'getOneAdvt']);
Route::post('/deleteAdvt', [AdvtController::class, 'delete']);

Route::post('/indexElecte', [ElecteController::class, 'index']);
Route::post('/addElecte', [ElecteController::class, 'store']);
Route::post('/deleteElecte', [ElecteController::class, 'delete']);
