<?php

namespace App\DTOs\Tenant;

use Illuminate\Http\Request;

readonly class MenuDto
{
    public function __construct(
        public string $name,
        public ?string $description,
    ) {}

    public static function fromRequest(Request $request): self
    {
        return new self(
            name: $request->validated('name'),
            description: $request->validated('description'),
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'name' => $this->name,
            'description' => $this->description,
        ], fn($value) => !is_null($value));
    }
}
