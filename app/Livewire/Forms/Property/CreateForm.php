<?php

namespace App\Livewire\Forms\Property;

use App\Models\Property;
use App\PropertyStatus;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CreateForm extends Form
{
    #[Validate(['required', 'integer', 'exists:property_categories,id'])]
    public int $property_category_id;

    #[Validate(['required', 'integer', 'exists:locations,id'])]
    public int $location_id;

    #[Validate(['required', 'string'])]
    public string $name;

    #[Validate(['required', 'numeric'])]
    public float $price;

    #[Validate(['required', 'string', 'in:USD,IDR'])]
    public string $currency;

    #[Validate(['required', 'bool'])]
    public bool $price_negotiable;

    #[Validate(['numeric', 'nullable'])]
    public ?float $surface_area = null;

    #[Validate(['numeric', 'nullable'])]
    public ?float $building_area = null;

    #[Validate(['required', 'string'])]
    public string $uom;

    #[Validate(['integer', 'nullable'])]
    public ?int $rooms = null;

    #[Validate(['integer', 'nullable'])]
    public ?int $bathrooms = null;

    #[Validate(['integer', 'nullable'])]
    public ?int $year_built = null;

    #[Validate(['string', 'nullable'])]
    public ?string $short_description = null;

    #[Validate(['string', 'nullable'])]
    public ?string $description = null;

    #[Validate(['string', 'nullable'])]
    public ?string $location_detail = null;

    #[Validate(['required', 'boolean'])]
    public bool $featured = false;

    #[Validate(['required', 'boolean'])]
    public bool $priority = false;

    #[Validate(['required', 'boolean'])]
    public bool $is_active = false;

    public function store(): Property
    {
        $validated = $this->validate();

        $validated['slug'] = Str::slug($validated['name']);
        $count = 1;
        while (Property::query()->where('slug', $validated['slug'])->exists()) {
            $validated['slug'] = Str::slug($validated['slug']).'-'.$count++;
        }

        $validated['status'] = PropertyStatus::Available;
        $validated['published_at'] = now();

        return Property::query()->create($validated);
    }
}
