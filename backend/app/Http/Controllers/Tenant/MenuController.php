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

class MenuController extends Controller
{
    use AuthorizesRequests;

    public function __construct(
        private readonly MenuService $menuService
    )
    {
    }

    /**
     * @throws AuthorizationException
     */
    public function index(Request $request): AnonymousResourceCollection
    {
        $this->authorize('viewAny', Menu::class);

        $perPage = $request->input('per_page', 10);
        $query = $request->query();

        $menu = $this->menuService->getAllPaginated($perPage, $query);

        return MenuResource::collection($menu);
    }

    /**
     * @throws AuthorizationException
     */
    public function store(MenuRequest $request): JsonResponse
    {
        $this->authorize('create', Menu::class);
        $menu = $this->menuService->create(MenuDto::fromRequest($request));

        return response()->json([
            'data' => new MenuResource($menu),
        ], 201);
    }

    /**
     * @throws AuthorizationException
     */
    public function show(string $id): JsonResponse
    {
        $this->authorize('viewOnly', Menu::class);
        $menu = $this->menuService->getById($id);

        return response()->json([
            'data' => new MenuResource($menu)
        ]);
    }

    /**
     * @throws AuthorizationException
     */
    public function update(MenuRequest $request, string $id): JsonResponse
    {
        $this->authorize('update', Menu::class);
        $menu = $this->menuService->update($id, MenuDto::fromRequest($request));

        return response()->json([
            'data' => new MenuResource($menu)
        ]);
    }

    /**
     * @throws AuthorizationException
     */
    public function destroy(string $id): JsonResponse
    {
        $this->authorize('delete', Menu::class);
        $this->menuService->delete($id);

        return response()->json([], 204);
    }
}
