<?php

namespace App\Http\Middleware\Tenant;

use App\Models\Tenant\Restaurant;
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
        $restaurantId = $request->header('X-Restaurant-Id');

        if ($restaurantId) {
            $hasAccess = $request->user()?->restaurants()->where('restaurants.id', $restaurantId)->exists();

            if ($hasAccess) {
                app()->instance('currentRestaurant', Restaurant::find($restaurantId));
            }
        } else {
            abort(403, 'Access denied');
        }

        return $next($request);
    }
}
