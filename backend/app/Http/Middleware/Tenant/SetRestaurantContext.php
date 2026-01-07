<?php

namespace App\Http\Middleware\Tenant;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetRestaurantContext
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();

        if (!$user || !method_exists($user, 'restaurants')) {
            return $next($request);
        }

        $restaurantId = $request->header('X-Restaurant-Id');

        if ($restaurantId) {
            $hasAccess = $user->restaurants()->where('restaurants.id', $restaurantId)->exists();

            if ($hasAccess) {
                app()->instance('currentRestaurantId', $restaurantId);
            }
        } else {
            abort(403, 'Access denied');
        }

        return $next($request);
    }
}
