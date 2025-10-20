<?php

namespace App\Livewire\Forms\Property\Images;

use App\Models\Property;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
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
                'image_url' => '/storage' . $path,
                'path' => $path,
                'name' => $image['name'],
                'title' => $image['name'],
                'alt' => Str::slug($image['name']),
            ];
        }

        $property->images()->createMany($images);
    }
}
