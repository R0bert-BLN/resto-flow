<?php

namespace App\Services\Tenant;

use App\DTOs\Tenant\MenuCategoryDto;
use App\Models\Tenant\MenuCategory;
use App\Repositories\Tenant\MenuCategoryRepository;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

readonly class MenuCategoryService
{
    public function __construct(
        private MenuCategoryRepository $repository
    ) {}

    public function getAllPaginated(int $perPage, array $query): LengthAwarePaginator
    {
        return $this->repository->getAllPaginated($perPage, $query);
    }

    public function getById(string $id): MenuCategory {
        $category = $this->repository->getById($id);

        if (!$category) {
            throw new ModelNotFoundException("Category not found");
        }

        return $category;
    }

    public function create(MenuCategoryDto $dto): MenuCategory
    {
        return DB::transaction(function () use ($dto) {
            return $this->repository->create($dto->toArray());
        });
    }

    public function update(string $id, MenuCategoryDto $dto): MenuCategory
    {
        $category = $this->repository->getById($id);

        return DB::transaction(function () use ($category, $dto) {
            $category->update($dto->toArray());
            return $category->refresh();
        });
    }

    public function delete(string $id): void
    {
        $category = $this->repository->getById($id);
        $category->delete();
    }
}
