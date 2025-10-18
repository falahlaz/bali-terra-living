<?php

namespace App\Livewire\ControlPanel\Property;

use App\Livewire\Forms\Property\Features\CreateOrUpdateForm;
use App\Livewire\Forms\Property\Images\CreateForm;
use App\Livewire\Forms\Property\UpdateForm;
use App\Models\Property;
use App\Models\PropertyCategory;
use App\Models\PropertyFeature;
use App\Models\PropertyImage;
use App\Properties;
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
    public CreateOrUpdateForm $feature_form;
    public CreateForm $image_form;

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        $this
            ->property
            ->load([
                'category',
                'features',
                'images'
            ]);

        $categories = PropertyCategory::query()
            ->where('is_active', '=', true)
            ->get();

        return view('livewire.control-panel.property.detail')
            ->with('page', Properties::PropertyPage)
            ->with('property', $this->property)
            ->with('categories', $categories);
    }

    public function mount(): void
    {
        $this->property_form->setForm($this->property);
    }

    public function update(): void
    {
        $this->property_form->store();
    }

    public function editFeature(PropertyFeature $feature): void
    {
        $this->feature_form->setFeature($feature);
        $this->dispatch('$refresh');
    }

    public function deleteFeature(PropertyFeature $feature): void
    {
        $feature->delete();
    }

    public function submitFeature(): void
    {
        $this->feature_form->store($this->property->id);
        $this->feature_form->feature = null;
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
}
