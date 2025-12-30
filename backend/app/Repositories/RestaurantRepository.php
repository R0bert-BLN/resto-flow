<?php

namespace App\Repositories;

use App\Models\Tenant\Restaurant;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
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

    public function getById(string $id): ?Restaurant
    {
        return Restaurant::find($id);
    }

    public function create(array $data): Restaurant
    {
        return Restaurant::create($data);
    }

    public function update(Restaurant $restaurant, array $data): bool
    {
        return $restaurant->update($data);
    }

    public function delete(Restaurant $restaurant): bool
    {
        return $restaurant->delete();
    }
}
