<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\MatchUpController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\MilestoneController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('test', function () {
    return 'API Reached';
});

Route::apiResource('/users', UserController::class);
Route::apiResource('/matches', MatchUpController::class);

Route::apiResource('/contracts', ContractController::class);
Route::put('/contracts/{id}/accept', [ContractController::class, 'accept']);

Route::apiResource('/milestones', MilestoneController::class);
Route::apiResource('/tasks', TaskController::class);
