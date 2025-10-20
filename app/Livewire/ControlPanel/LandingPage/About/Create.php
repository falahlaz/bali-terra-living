<?php

namespace App\Livewire\ControlPanel\LandingPage\About;

use App\AboutCardIconType;
use App\Livewire\Forms\LandingPage\About\CreateForm;
use App\PageProperties;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('About - Control Panel')]
#[Layout('components.layouts.app', ['page' => PageProperties::AboutPage])]
class Create extends Component
{
    public CreateForm $form;

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        return view('livewire.control-panel.landing-page.about.create')
            ->with('page', PageProperties::AboutPage)
            ->with('icon_types', AboutCardIconType::cases());
    }

    public function store(): \Illuminate\Http\RedirectResponse|\Livewire\Features\SupportRedirects\Redirector
    {
        $this->form->store();
        $this->form->reset();

        return redirect()->route('cp.about.index');
    }
}
