<?php

namespace App\Http\Controllers\Tenant;

use App\DTOs\Tenant\MenuItemDto;
use App\Http\Controllers\Controller;
use App\Http\Requests\Tenant\MenuItemRequest;
use App\Http\Resources\Tenant\MenuItemResource;
use App\Services\Tenant\MenuItemService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

// TODO: Add authorization
class MenuItemController extends Controller
{
    public function __construct(
        private readonly MenuItemService $service
    ) {}

    public function index(Request $request): AnonymousResourceCollection
    {
        $perPage = $request->input('per_page', 15);
        $query = $request->query();

        $items = $this->service->getAllPaginated($perPage, $query);

        return MenuItemResource::collection($items);
    }

    public function store(MenuItemRequest $request, string $categoryId): JsonResponse
    {
        $item = $this->service->create(MenuItemDto::fromRequest($request, $categoryId));

        return response()->json([
            'data' => new MenuItemResource($item)
        ], 201);
    }

    public function show(string $id): JsonResponse
    {
        $item = $this->service->getById($id);

        return response()->json(['data' => new MenuItemResource($item)]);
    }

    public function update(MenuItemRequest $request, string $id): JsonResponse
    {
        $updatedItem = $this->service->update($id, MenuItemDto::fromRequest($request));

        return response()->json([
            'data' => new MenuItemResource($updatedItem)
        ]);
    }

    public function destroy(string $id): JsonResponse
    {
        $this->service->delete($id);
        return response()->json([], 204);
    }
}
