<?php

namespace App\Livewire\Forms\Property\Features;

use App\Models\PropertyFeature;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CreateOrUpdateForm extends Form
{
    public ?PropertyFeature $feature = null;

    #[Validate(['required', 'string'])]
    public ?string $name;

    #[Validate(['required', 'boolean'])]
    public bool $is_active = false;

    public function setFeature(PropertyFeature $feature): void
    {
        $this->feature = $feature;
        $this->name = $feature->name;
        $this->is_active = $feature->is_active;
    }

    public function store(int $property_id): void
    {
        $validated = $this->validate();

        if (!$this->feature) {
            $this->feature = new PropertyFeature();
        }

        $this->feature->property_id = $property_id;
        $this->feature->name = $validated['name'];
        $this->feature->is_active = $validated['is_active'];
        $this->feature->save();
    }
}
