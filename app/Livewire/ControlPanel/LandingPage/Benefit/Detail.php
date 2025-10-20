<?php

namespace App\Livewire\ControlPanel\LandingPage\Benefit;

use App\IconType;
use App\Livewire\Forms\LandingPage\Benefit\UpdateForm;
use App\Models\Benefit;
use App\PageProperties;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Benefit - Control Panel')]
#[Layout('components.layouts.app', ['page' => PageProperties::BenefitPage])]
class Detail extends Component
{
    public Benefit $benefit;

    public UpdateForm $form;

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
    {
        return view('livewire.control-panel.landing-page.benefit.detail')
            ->with('page', PageProperties::BenefitPage)
            ->with('icon_types', IconType::cases());
    }

    public function mount(): void
    {
        $this->form->setForm($this->benefit);
    }

    public function store(): \Illuminate\Http\RedirectResponse|\Livewire\Features\SupportRedirects\Redirector
    {
        $this->form->store($this->benefit);
        $this->form->reset();

        return redirect()->route('cp.benefits.index');
    }
}
