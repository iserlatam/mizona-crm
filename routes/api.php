<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

require __DIR__.'/v1/apps.php';

require __DIR__.'/v1/services/users.php';

Route::prefix('mz/v1')->group(function () {
    Route::prefix('auth')->group(function () {
        // Call all the auth routes localted in the services folder
        require __DIR__.'/v1/services/auth.php';
    });
    require __DIR__.'/v1/services/users.php';
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

