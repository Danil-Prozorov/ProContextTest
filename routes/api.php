<?php

use Illuminate\Http\Request;
use App\Http\Controllers\IpController;
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

// Routes for add and show data

Route::post('/storeIp', [IpController::class, 'store'])->name('api.ip.store');
Route::post('/storeIp/{id}', [IpController::class, 'show'])->name('api.ip.show');
