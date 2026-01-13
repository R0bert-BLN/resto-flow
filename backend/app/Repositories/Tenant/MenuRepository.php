<?php

namespace App\Repositories\Tenant;

use App\Models\Tenant\Menu;
use Illuminate\Pagination\LengthAwarePaginator;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\AllowedSort;
use Spatie\QueryBuilder\QueryBuilder;

class MenuRepository
{
    public function getAllPaginated(int $perPage, array $query): LengthAwarePaginator
    {
        return QueryBuilder::for(Menu::class)
            ->where('restaurant_id', app('currentRestaurantId'))
            ->allowedFilters([
                'name',
                AllowedFilter::partial('description')
            ])
            ->allowedSorts([
                'name',
                AllowedSort::field('created_at', 'created_at')
            ])
            ->defaultSort('-created_at')
            ->paginate($perPage)
            ->appends($query);
    }

    public function getById(string $id): Menu | null {
        return QueryBuilder::for(Menu::class)
            ->where('restaurant_id', app('currentRestaurantId'))
            ->allowedIncludes(['categories', 'categories.items'])
            ->where('id', $id)
            ->first();
    }
}
