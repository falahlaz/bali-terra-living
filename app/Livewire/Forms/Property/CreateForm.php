<?php

namespace App\Livewire\Forms\Property;

use App\Models\Property;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CreateForm extends Form
{
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
    public string $location = '';

    #[Validate(['required', 'boolean'])]
    public bool $is_active = false;

    public function store(): Property
    {
        $validated = $this->validate();
        return Property::query()->create($validated);
    }
}
