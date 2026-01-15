<?php

namespace App\DTOs\Tenant;


use Illuminate\Http\Request;

class MenuCategoryDto
{
    public function __construct(
        public string $menu_id,
        public string $name,
        public ?string $description,
        public ?int $position,
    )
    {
    }

    public static function fromRequest(Request $request, ?string $menuId = null): self
    {
        return new self(
            menu_id: $menuId,
            name: $request->validated('name'),
            description: $request->validated('description'),
            position: $request->validated('position'),
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'menu_id' => $this->menu_id,
            'name' => $this->name,
            'description' => $this->description,
            'position' => $this->position,
        ], fn($value) => !is_null($value));
    }
}
