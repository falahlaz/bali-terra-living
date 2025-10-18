<?php

namespace App\Livewire\Forms\Property;

use App\Models\Property;
use Livewire\Attributes\Validate;
use Livewire\Form;

class UpdateForm extends Form
{
    public Property $property;

    #[Validate(['required', 'integer'])]
    public int $property_category_id;

    #[Validate(['required', 'string'])]
    public string $name;

    #[Validate(['required', 'integer'])]
    public int $price;

    #[Validate(['required', 'integer'])]
    public int $width;

    #[Validate(['required', 'string', 'in:meter'])]
    public string $uom;

    #[Validate(['string'])]
    public string $location;

    #[Validate(['required', 'boolean'])]
    public bool $is_active = false;

    public function setForm(Property $property): void
    {
        $this->property = $property;
        $this->property_category_id = $this->property->property_category_id;
        $this->name = $this->property->name;
        $this->price = $this->property->price;
        $this->width = $this->property->width;
        $this->uom = $this->property->uom->value;
        $this->location = $this->property->location;
        $this->is_active = $this->property->is_active;
    }

    public function store(): void
    {
        $this->validate();
        $this->property->property_category_id = $this->property_category_id;
        $this->property->name = $this->name;
        $this->property->price = $this->price;
        $this->property->width = $this->width;
        $this->property->uom = $this->uom;
        $this->property->location = $this->location;
        $this->property->is_active = $this->is_active;
        $this->property->save();
    }
}
