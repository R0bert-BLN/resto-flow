<?php

namespace App\Http\Controllers\Tenant;

use App\DTOs\Tenant\MenuDto;
use App\Http\Controllers\Controller;
use App\Http\Requests\Tenant\MenuRequest;
use App\Http\Resources\Tenant\MenuResource;
use App\Models\Tenant\Menu;
use App\Services\Tenant\MenuService;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

// TODO: Add authorization
class MenuController extends Controller
{
    use AuthorizesRequests;

    public function __construct(
        private readonly MenuService $menuService
    )
    {
    }

    public function index(Request $request): AnonymousResourceCollection
    {
        $perPage = $request->input('per_page', 10);
        $query = $request->query();

        $menu = $this->menuService->getAllPaginated($perPage, $query);

        return MenuResource::collection($menu);
    }

    public function store(MenuRequest $request): JsonResponse
    {
        $menu = $this->menuService->create(MenuDto::fromRequest($request));

        return response()->json([
            'data' => new MenuResource($menu),
        ], 201);
    }


    public function show(string $id): JsonResponse
    {
        $menu = $this->menuService->getById($id);

        return response()->json([
            'data' => new MenuResource($menu)
        ]);
    }

    public function update(MenuRequest $request, string $id): JsonResponse
    {
        $menu = $this->menuService->update($id, MenuDto::fromRequest($request));

        return response()->json([
            'data' => new MenuResource($menu)
        ]);
    }

    public function destroy(string $id): JsonResponse
    {
        $this->menuService->delete($id);

        return response()->json([], 204);
    }
}
