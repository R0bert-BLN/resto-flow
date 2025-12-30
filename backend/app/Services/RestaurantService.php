<?php

namespace App\Services;

use App\DTOs\RestaurantDto;
use App\Models\Tenant\Restaurant;
use App\Repositories\RestaurantRepository;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
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
        $restaurant = $this->repository->getById($id);

        if (!$restaurant) {
            throw new ModelNotFoundException("Restaurant not found");
        }

        return $restaurant;
    }

    public function create(RestaurantDto $dto): Restaurant
    {
        return DB::transaction(function () use ($dto) {
           return $this->repository->create($dto->toArray());
        });
    }

    public function update(string $id, RestaurantDto $dto): Restaurant
    {
        $restaurant = $this->getById($id);

        return DB::transaction(function () use ($restaurant, $dto) {
            $this->repository->update($restaurant, $dto->toArray());
            return $restaurant->refresh();
        });
    }

    public function delete(string $id): void
    {
        $restaurant = $this->getById($id);
        $this->repository->delete($restaurant);
    }
}
