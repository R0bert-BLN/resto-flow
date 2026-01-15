<?php

namespace App\Repositories\Tenant;

use App\Models\Tenant\Menu;
use App\Models\Tenant\MenuCategory;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Pagination\LengthAwarePaginator;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\AllowedSort;
use Spatie\QueryBuilder\QueryBuilder;

class MenuCategoryRepository
{
    public function getAllPaginated(int $perPage, array $query): LengthAwarePaginator
    {
        return QueryBuilder::for(MenuCategory::class)
            ->whereHas('menu', function ($query) {
                $query->where('restaurant_id', app('currentRestaurantId'));
            })
            ->allowedFilters([
                AllowedFilter::partial('name')
            ])
            ->allowedSorts([
                AllowedSort::field('created_at', 'created_at'),
                AllowedSort::field('position', 'position')
            ])
            ->defaultSort('-created_at')
            ->paginate($perPage)
            ->appends($query);
    }

    public function getById(string $id): MenuCategory | null
    {
        return QueryBuilder::for(MenuCategory::class)
            ->allowedIncludes(['menu', 'items'])
            ->where('id', $id)
            ->first();
    }

    public function create(array $data): MenuCategory
    {
        $menuExists = Menu::where('id', $data['menu_id'])
            ->where('restaurant_id', app('currentRestaurantId'))
            ->exists();

        if (!$menuExists) {
            throw new ModelNotFoundException("Category could not be created. Menu not found");
        }

        return MenuCategory::create($data);
    }
}
