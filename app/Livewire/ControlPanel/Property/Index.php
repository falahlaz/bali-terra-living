<?php

namespace App\Livewire\ControlPanel\Property;

use App\Models\Property;
use App\Properties;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;

#[Title('Properties - Control Panel')]
#[Layout('components.layouts.app', ['page' => Properties::PropertyPage])]
class Index extends Component
{
    #[Url]
    public $pageSize = 10;
    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        $properties = Property::query()
            ->with('category')
            ->select([
                'id',
                'property_category_id',
                'name',
                'price',
                'width',
                'uom',
                'location',
                'is_active',
                'created_at'
            ])
            ->paginate($this->pageSize);

        return view('livewire.control-panel.property.index')
            ->with('page', Properties::PropertyPage)
            ->with('properties', $properties);
    }
}
