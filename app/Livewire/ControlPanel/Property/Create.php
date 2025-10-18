<?php

namespace App\Livewire\ControlPanel\Property;

use App\Livewire\Forms\Property\CreateForm;
use App\Models\PropertyCategory;
use App\Properties;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Create Property - Control Panel')]
#[Layout('components.layouts.app', ['page' => Properties::PropertyPage])]
class Create extends Component
{
    public CreateForm $form;

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        $categories = PropertyCategory::query()
            ->where('is_active', '=', true)
            ->get();
        return view('livewire.control-panel.property.create')
            ->with('page', Properties::PropertyPage)
            ->with('categories', $categories);
    }

    public function store(): \Illuminate\Http\RedirectResponse|\Livewire\Features\SupportRedirects\Redirector
    {
        $property = $this->form->store();
        return redirect()->route('cp.properties.detail', [$property->id]);
    }
}
