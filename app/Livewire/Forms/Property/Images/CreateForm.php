<?php

namespace App\Livewire\Forms\Property\Images;

use App\Models\Property;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CreateForm extends Form
{
    public $images;

    public function store(Property $property): void
    {
        $images = [];
        foreach ($this->images as $image) {
            $path = Storage::disk('public')->putFile('properties', new File($image['path']));
            if (!$path) {
                continue;
            }

            $images[] = [
                'path' => $path,
                'name' => $image['name'],
            ];
        }

        $property->images()->createMany($images);
    }
}
