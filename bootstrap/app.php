<?php

use App\Http\Middleware\ForceCloseConnection;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Validation\ValidationException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
        $middleware->append(ForceCloseConnection::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        // 异常定义
        $exceptions->render(function (ValidationException $e) {
            return response()->json([
                'message' => '参数验证失败',
                'errors' => $e->errors(),
            ], 422);
        });
    })->create();
