<?php

namespace App\Services\Tenant;

use App\DTOs\Tenant\MenuDto;
use App\Models\Tenant\Menu;
use App\Repositories\Tenant\MenuRepository;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

readonly class MenuService
{
    public function __construct(
        private readonly MenuRepository $repository
    ) {}

    public function getAllPaginated(int $perPage, array $query): LengthAwarePaginator
    {
        return $this->repository->getAllPaginated($perPage, $query);
    }

    public function getById(string $id): Menu {
        $menu = $this->repository->getById($id);

        if (!$menu) {
            throw new ModelNotFoundException("Menu not found");
        }

        return $menu;
    }

    public function create(MenuDto $dto): Menu
    {
        return DB::transaction(function () use ($dto) {
            return Menu::create([
                ...$dto->toArray(),
                'restaurant_id' => app('currentRestaurantId')
            ]);
        });
    }

    public function update(string $id, MenuDto $dto): Menu
    {
        $menu = $this->repository->getById($id);

        return DB::transaction(function () use ($menu, $dto) {
            $menu->update($dto->toArray());
            return $menu->refresh();
        });
    }

    public function delete(string $id): void
    {
        $menu = $this->repository->getById($id);
        $menu->delete();
    }
}
