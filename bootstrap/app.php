<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
    web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {

    // You can register middleware here like:
    // $middleware->alias('custom', \App\Http\Middleware\CustomMiddleware::class);

    // Or add global middleware like:
    // $middleware->append(\App\Http\Middleware\SomeGlobalMiddleware::class);

})
    ->withExceptions(function (Exceptions $exceptions) {
        // You can customize exception handling here
    })
    ->create();
