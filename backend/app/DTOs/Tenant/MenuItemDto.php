<?php

namespace App\DTOs\Tenant;

use Illuminate\Http\Request;

class MenuItemDto
{
    public function __construct(
        public string $category_id,
        public string $name,
        public string $description,
        public float $price,
        public ?string $picture,
    ) {}

    public static function fromRequest(Request $request, ?string $categoryId = null): self
    {
        return new self(
            category_id: $categoryId,
            name: $request->validated('name'),
            description: $request->validated('description'),
            price: (float) $request->validated('price'),
            picture: $request->validated('picture'),
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'category_id' => $this->category_id,
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'picture' => $this->picture,
        ], fn($value) => !is_null($value));
    }
}
