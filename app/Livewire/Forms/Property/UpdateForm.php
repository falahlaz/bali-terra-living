<?php

namespace App\Livewire\Forms\Property;

use App\Models\Property;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Form;

class UpdateForm extends Form
{
    public Property $property;

    #[Validate(['required', 'integer', 'exists:property_categories,id'])]
    public int $property_category_id;

    #[Validate(['required', 'integer', 'exists:locations,id'])]
    public int $location_id;

    #[Validate(['required', 'string'])]
    public string $name;

    #[Validate(['required', 'numeric:'])]
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

    public function setForm(Property $property): void
    {
        $this->property = $property;
        $this->property_category_id = $property->property_category_id;
        $this->location_id = $property->location_id;
        $this->name = $property->name;
        $this->price = $property->price;
        $this->currency = $property->currency;
        $this->price_negotiable = $property->price_negotiable;
        $this->surface_area = $property->surface_area;
        $this->building_area = $property->building_area;
        $this->uom = $property->uom->value;
        $this->rooms = $property->rooms;
        $this->bathrooms = $property->bathrooms;
        $this->year_built = $property->year_built;
        $this->short_description = $property->short_description;
        $this->description = $property->description;
        $this->location_detail = $property->location_detail;
        $this->featured = $property->featured;
        $this->priority = $property->priority;
        $this->is_active = $property->is_active;
    }

    public function store(): void
    {
        $this->validate();

        if ($this->property->name !== $this->name) {
            $this->property->slug = Str::slug($this->name);
            $count = 1;
            while (Property::query()->where('slug', $this->property->slug)->exists()) {
                $this->property->slug = Str::slug($this->name).'-'.$count++;
            }
        }

        $this->property->property_category_id = $this->property_category_id;
        $this->property->location_id = $this->location_id;
        $this->property->name = $this->name;
        $this->property->price = $this->price;
        $this->property->currency = $this->currency;
        $this->property->price_negotiable = $this->price_negotiable;
        $this->property->surface_area = empty($this->surface_area) ? null : $this->surface_area;
        $this->property->building_area = empty($this->building_area) ? null : $this->building_area;
        $this->property->uom = $this->uom;
        $this->property->rooms = empty($this->rooms) ? null : $this->rooms;
        $this->property->bathrooms = empty($this->bathrooms) ? null : $this->bathrooms;
        $this->property->year_built = empty($this->year_built) ? null : $this->year_built;
        $this->property->short_description = empty($this->short_description) ? null : $this->short_description;
        $this->property->description = empty($this->description) ? null : $this->description;
        $this->property->location_detail = empty($this->location_detail) ? null : $this->location_detail;
        $this->property->featured = $this->featured;
        $this->property->priority = $this->priority;
        $this->property->is_active = $this->is_active;

        $this->property->save();
    }
}
