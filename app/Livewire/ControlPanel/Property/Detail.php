<?php

namespace App\Livewire\ControlPanel\Property;

use App\Livewire\Forms\Property\UpdateForm;
use App\Models\Feature;
use App\Models\Location;
use App\Models\Property;
use App\Models\PropertyCategory;
use App\Models\PropertyFeature;
use App\Models\PropertyImage;
use App\Properties;
use App\PropertyUnitOfMeasure;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Title('Detail Property - Control Panel')]
#[Layout('components.layouts.app', ['page' => Properties::PropertyPage])]
class Detail extends Component
{
    use WithFileUploads;

    public Property $property;
    public UpdateForm $property_form;
    public \App\Livewire\Forms\Property\Features\CreateForm $feature_form;
    public \App\Livewire\Forms\Property\Images\CreateForm $image_form;

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        $this
            ->property
            ->load([
                'category',
                'location',
                'features.feature',
                'images',
                'details',
            ]);

        $categories = PropertyCategory::query()
            ->where('is_active', '=', true)
            ->get();

        $locations = Location::query()
            ->where('is_active', '=', true)
            ->get();

        $features = Feature::query()
            ->where('is_active', '=', true)
            ->get();

        return view('livewire.control-panel.property.detail')
            ->with('page', Properties::PropertyPage)
            ->with('property', $this->property)
            ->with('categories', $categories)
            ->with('locations', $locations)
            ->with('features', $features)
            ->with('unit_of_measurements', PropertyUnitOfMeasure::cases());
    }

    public function mount(): void
    {
        $this->property_form->setForm($this->property);
    }

    public function update(): void
    {
        $this->property_form->store();
    }

    public function deleteFeature(PropertyFeature $feature): void
    {
        $feature->delete();
    }

    public function submitFeature(): void
    {
        $this->feature_form->store($this->property);
        $this->feature_form->reset();
    }

    public function deleteImage(PropertyImage $image): void
    {
        Storage::disk('public')->delete($image->path);
        $image->delete();
    }

    public function submitImages(): void
    {
        $this->image_form->store($this->property);
        $this->image_form->reset();
    }

    public function toggleImageStatus(PropertyImage $image): void
    {
       $image->is_active = !$image->is_active;
       $image->save();
    }

    public function togglePrimary(PropertyImage $image): void
    {
        $this->property
            ->images()
            ->where('is_primary', '=', true)
            ->update([
                'is_primary' => false,
            ]);

        $image->is_primary = !$image->is_primary;
        $image->save();
    }
}
