<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Http\Middleware\CheckRole; // <-- 1. Must be imported here
=======
>>>>>>> b80778736e79fc83cfd17e3582d4491083aa35b4

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
<<<<<<< HEAD
        
        // 2. Must be registered here so Laravel knows what 'role' means
        $middleware->alias([
            'role' => CheckRole::class,
        ]);
        
=======
        //
>>>>>>> b80778736e79fc83cfd17e3582d4491083aa35b4
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->shouldRenderJsonWhen(
            fn (Request $request) => $request->is('api/*'),
        );
<<<<<<< HEAD
    })->create();
=======
    })->create();
>>>>>>> b80778736e79fc83cfd17e3582d4491083aa35b4
