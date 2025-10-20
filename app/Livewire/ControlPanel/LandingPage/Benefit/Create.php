<?php

namespace App\Livewire\ControlPanel\LandingPage\Benefit;

use App\IconType;
use App\Livewire\Forms\LandingPage\Benefit\CreateForm;
use App\PageProperties;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Benefit - Control Panel')]
#[Layout('components.layouts.app', ['page' => PageProperties::BenefitPage])]
class Create extends Component
{
    public CreateForm $form;

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
    {
        return view('livewire.control-panel.landing-page.benefit.create')
            ->with('page', PageProperties::BenefitPage)
            ->with('icon_types', IconType::cases());
    }

    public function store(): \Illuminate\Http\RedirectResponse|\Livewire\Features\SupportRedirects\Redirector
    {
        $this->form->store();
        $this->form->reset();

        return redirect()->route('cp.benefits.index');
    }
}
