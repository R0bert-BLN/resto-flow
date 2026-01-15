<?php

namespace App\Services\Tenant;

use App\DTOs\Tenant\MenuItemDto;
use App\Models\Tenant\MenuItem;
use App\Repositories\Tenant\MenuItemRepository;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

readonly class MenuItemService
{
    public function __construct(
        private MenuItemRepository $repository
    ) {}

    public function getAllPaginated(int $perPage, array $query): LengthAwarePaginator
    {
        return $this->repository->getAllPaginated($perPage, $query);
    }

    public function getById(string $id): MenuItem
    {
        return $this->repository->getById($id);
    }

    public function create(MenuItemDto $dto): MenuItem
    {
        return DB::transaction(fn() => $this->repository->create($dto->toArray()));
    }

    public function update(string $id, MenuItemDto $dto): MenuItem
    {
        $item = $this->repository->getById($id);

        return DB::transaction(function () use ($item, $dto) {
            $item->update($dto->toArray());
            return $item->refresh();
        });
    }

    public function delete(string $id): void
    {
        $item = $this->repository->getById($id);
        $item->delete();
    }
}
