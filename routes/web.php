<?php

use Illuminate\Support\Facades\Route;

Route::fallback(function () {
    return response()->json([
        'message' => 'This is an API-only service.',
    ], 404);
});
