<?php

namespace App\DTOs\Tenant;

use Illuminate\Http\Request;

readonly class RestaurantDto
{
    public function __construct(
        public string $name,
        public ?string $description,
        public ?string $phone,
        public ?string $logo,
    ) {}

    public static function fromRequest(Request $request): self
    {
        return new self(
            name: $request->validated('name'),
            description: $request->validated('description'),
            phone: $request->validated('phone'),
            logo: $request->validated('logo'),
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'name' => $this->name,
            'description' => $this->description,
            'phone' => $this->phone,
            'logo' => $this->logo,
        ], fn($value) => !is_null($value));
    }
}
