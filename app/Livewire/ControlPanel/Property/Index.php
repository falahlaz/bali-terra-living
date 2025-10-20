<?php

namespace App\Livewire\ControlPanel\Property;

use App\Models\Property;
use App\PageProperties;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;

#[Title('PageProperties - Control Panel')]
#[Layout('components.layouts.app', ['page' => PageProperties::PropertyPage])]
class Index extends Component
{
    #[Url]
    public $pageSize = 10;

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        $properties = Property::query()
            ->with('category')
            ->with('location')
            ->select([
                'id',
                'property_category_id',
                'location_id',
                'name',
                'price',
                'currency',
                'status',
                'is_active',
            ])
            ->paginate($this->pageSize);

        return view('livewire.control-panel.property.index')
            ->with('page', PageProperties::PropertyPage)
            ->with('properties', $properties);
    }
}
