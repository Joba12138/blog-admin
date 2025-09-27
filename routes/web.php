<?php

use App\Admin\Controllers\RenWu\CustomerController;
use Illuminate\Support\Facades\Route;

Route::fallback(function () {
    return response()->json([
        'message' => 'This is an API-only service.',
    ], 404);
});

Route::prefix('ren-wu')->group(function () {
    Route::get('customers', [CustomerController::class, 'index']);
});
