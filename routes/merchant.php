<?php

use App\Http\Controllers\Merchant\AuthorizationsController;
use App\Http\Controllers\Merchant\HousingController;
use App\Http\Controllers\Merchant\UsersController;
use Illuminate\Support\Facades\Route;

Route::post('authorizations', [AuthorizationsController::class, 'store'])
    ->name('authorizations.store');
Route::middleware('auth:merchant-api')->group(function() {
    Route::get('user', [UsersController::class, 'mine']);
    Route::resource('houses', HousingController::class);
    Route::patch('houses/{house}', [HousingController::class, 'update']);
});
