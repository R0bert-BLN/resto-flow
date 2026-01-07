<?php

namespace App\Services\Tenant;

use App\DTOs\Tenant\RestaurantDto;
use App\Models\Tenant\Restaurant;
use App\Repositories\Tenant\RestaurantRepository;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

readonly class RestaurantService
{
    public function __construct(
        private RestaurantRepository $repository
    ) {}

    public function getAllPaginated(int $perPage, array $query): LengthAwarePaginator
    {
        return $this->repository->getAllPaginated($perPage, $query);
    }

    public function getById(string $id): Restaurant
    {
        $restaurant = Restaurant::find($id);

        if (!$restaurant) {
            throw new ModelNotFoundException("Restaurant not found");
        }

        return $restaurant;
    }

    public function create(RestaurantDto $dto): Restaurant
    {
        return DB::transaction(function () use ($dto) {
           return Restaurant::create($dto->toArray());
        });
    }

    public function update(string $id, RestaurantDto $dto): Restaurant
    {
        $restaurant = $this->getById($id);

        return DB::transaction(function () use ($restaurant, $dto) {
            $restaurant->update($dto->toArray());
            return $restaurant->refresh();
        });
    }

    public function delete(string $id): void
    {
        $restaurant = $this->getById($id);
        $restaurant->delete();
    }
}
