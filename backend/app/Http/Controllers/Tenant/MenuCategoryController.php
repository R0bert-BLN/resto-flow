<?php

namespace App\Http\Controllers\Tenant;

use App\DTOs\Tenant\MenuCategoryDto;
use App\Http\Controllers\Controller;
use App\Http\Requests\Tenant\MenuCategoryRequest;
use App\Http\Resources\Tenant\MenuCategoryResource;
use App\Services\Tenant\MenuCategoryService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

// TODO: Add authorization
class MenuCategoryController extends Controller
{
    use AuthorizesRequests;

    public function __construct(
        private readonly MenuCategoryService $service
    )
    {
    }

    public function index(Request $request): AnonymousResourceCollection
    {
        $perPage = $request->input('per_page', 10);
        $query = $request->query();

        $category = $this->service->getAllPaginated($perPage, $query);

        return MenuCategoryResource::collection($category);
    }

    public function store(MenuCategoryRequest $request, string $menuId): JsonResponse
    {
        $category = $this->service->create(MenuCategoryDto::fromRequest($request, $menuId));

        return response()->json([
            'data' => new MenuCategoryResource($category),
        ], 201);
    }

    public function show(string $id): JsonResponse
    {
        $menu = $this->service->getById($id);

        return response()->json([
            'data' => new MenuCategoryResource($menu)
        ]);
    }

    public function update(MenuCategoryRequest $request, string $id): JsonResponse
    {
        $menu = $this->service->update($id, MenuCategoryDto::fromRequest($request));

        return response()->json([
            'data' => new MenuCategoryResource($menu)
        ]);
    }

    public function destroy(string $id): JsonResponse
    {
        $this->service->delete($id);
        return response()->json([], 204);
    }
}
