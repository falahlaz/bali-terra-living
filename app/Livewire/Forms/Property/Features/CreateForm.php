<?php

namespace App\Livewire\Forms\Property\Features;

use App\Models\Property;
use App\Models\PropertyFeature;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CreateForm extends Form
{
    #[Validate(['required', 'integer'])]
    public ?int $feature_id;

    public function store(Property $property): void
    {
        $validated = $this->validate();
        $property->features()->create($validated);
    }
}
