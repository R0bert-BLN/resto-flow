<?php

use App\Exceptions\ApiException;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        using: function () {
            $centralDomains = config('tenancy.central_domains');

            foreach ($centralDomains as $domain) {
                Route::middleware('web')
                    ->domain($domain)
                    ->group(base_path('routes/web.php'));

                Route::middleware('api')
                    ->domain($domain)
                    ->prefix('api')
                    ->group(base_path('routes/api.php'));
            }

            Route::middleware([
                'api',
                InitializeTenancyByDomain::class,
                PreventAccessFromCentralDomains::class
            ])
                ->prefix('api')
                ->group(base_path('routes/tenant.php'));
        },
        commands: __DIR__ . '/../routes/console.php',
        health: '/up'
    )
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->shouldRenderJsonWhen(function (Request $request) {
            if ($request->is('api/*') || $request->expectsJson()) {
                return true;
            }

            return false;
        });

        $exceptions->render(function (ApiException $exception) {
            return response()->json([
                'code' => (string) $exception,
                'message' => $exception->getMessage(),
            ]);
        });
    })
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
