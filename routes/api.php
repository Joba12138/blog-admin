<?php

use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\BlogTagController;
use App\Http\Controllers\ClickLogController;
use Illuminate\Support\Facades\Route;

Route::post('click-logs', [ClickLogController::class, 'store']);

Route::prefix('blogs')->group(function () {
    Route::get('posts', [BlogPostController::class, 'index']);
    Route::get('posts/{post}', [BlogPostController::class, 'show']);

    Route::get('tags', [BlogTagController::class, 'index']);
});
