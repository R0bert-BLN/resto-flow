<?php

namespace App\Repositories\Tenant;

use App\Models\Tenant\MenuCategory;
use App\Models\Tenant\MenuItem;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Pagination\LengthAwarePaginator;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class MenuItemRepository
{
    public function getAllPaginated(int $perPage, array $query): LengthAwarePaginator
    {
        return QueryBuilder::for(MenuItem::class)
            ->whereHas('category.menu', function ($query) {
                $query->where('restaurant_id', app('currentRestaurantId'));
            })
            ->allowedFilters([
                AllowedFilter::partial('name')
            ])
            ->allowedIncludes(['category'])
            ->defaultSort('-created_at')
            ->paginate($perPage)
            ->appends($query);
    }

    public function getById(string $id): MenuItem
    {
        $item = QueryBuilder::for(MenuItem::class)
            ->whereHas('category.menu', function ($q) {
                $q->where('restaurant_id', app('currentRestaurantId'));
            })
            ->allowedIncludes(['category'])
            ->where('id', $id)
            ->first();

        if (!$item) {
            throw new ModelNotFoundException("Item not found");
        }

        return $item;
    }

    public function create(array $data): MenuItem
    {
        $categoryExists = MenuCategory::where('id', $data['category_id'])
            ->whereHas('menu', fn($query) => $query->where('restaurant_id', app('currentRestaurantId')))
            ->exists();

        if (!$categoryExists) {
            throw new ModelNotFoundException("Item could not be created. Category not found");
        }

        return MenuItem::create($data);
    }
}
