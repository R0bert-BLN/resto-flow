<?php

namespace App\Http\Controllers\Tenant;

use App\DTOs\Tenant\RestaurantDto;
use App\Http\Controllers\Controller;
use App\Http\Requests\Tenant\RestaurantRequest;
use App\Http\Resources\Tenant\RestaurantResource;
use App\Models\Tenant\Restaurant;
use App\Services\Tenant\RestaurantService;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class RestaurantController extends Controller
{
    use AuthorizesRequests;

    public function __construct(
        private readonly RestaurantService $restaurantService
    )
    {
    }

    /**
     * @throws AuthorizationException
     */
    public function index(Request $request): AnonymousResourceCollection
    {
        $this->authorize('viewAny', Restaurant::class);

        $perPage = $request->input('per_page', 10);
        $query = $request->query();

        $restaurants = $this->restaurantService->getAllPaginated($perPage, $query);

        return RestaurantResource::collection($restaurants);
    }

    /**
     * @throws AuthorizationException
     */
    public function store(RestaurantRequest $request): JsonResponse
    {
        $this->authorize('create', Restaurant::class);
        $restaurant = $this->restaurantService->create(RestaurantDto::fromRequest($request));

        return response()->json([
            'data' => new RestaurantResource($restaurant),
        ], 201);
    }

    /**
     * @throws AuthorizationException
     */
    public function show(string $id): JsonResponse
    {
        $this->authorize('viewOnly', Restaurant::class);
        $restaurant = $this->restaurantService->getById($id);

        return response()->json([
            'data' => new RestaurantResource($restaurant)
        ]);
    }

    /**
     * @throws AuthorizationException
     */
    public function update(RestaurantRequest $request, string $id): JsonResponse
    {
        $this->authorize('update', Restaurant::class);
        $restaurant = $this->restaurantService->update($id, RestaurantDto::fromRequest($request));

        return response()->json([
            'data' => new RestaurantResource($restaurant)
        ]);
    }

    /**
     * @throws AuthorizationException
     */
    public function destroy(string $id): JsonResponse
    {
        $this->authorize('delete', Restaurant::class);
        $this->restaurantService->delete($id);

        return response()->json([], 204);
    }
}
