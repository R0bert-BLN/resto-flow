<?php

namespace App\Repositories\Tenant;

use App\Models\Tenant\Restaurant;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\AllowedSort;
use Spatie\QueryBuilder\QueryBuilder;

class RestaurantRepository
{
    public function getAllPaginated(int $perPage, array $query): LengthAwarePaginator
    {
        return QueryBuilder::for(Restaurant::class)
            ->allowedFilters([
                'name',
                AllowedFilter::partial('description'),
            ])
            ->allowedSorts([
                'name',
                AllowedSort::field('creation_date', 'created_at'),
            ])
            ->defaultSort('-created_at')
            ->paginate($perPage)
            ->appends($query);
    }
}
