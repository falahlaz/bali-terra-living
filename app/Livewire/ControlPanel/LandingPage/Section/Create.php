<?php

namespace App\Livewire\ControlPanel\LandingPage\Section;

use App\Livewire\Forms\LandingPage\Section\CreateForm;
use App\PageProperties;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Sections - Control Panel')]
#[Layout('components.layouts.app', ['page' => PageProperties::SectionPage])]
class Create extends Component
{
    public CreateForm $form;

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        return view('livewire.control-panel.landing-page.section.create')
            ->with('page', PageProperties::SectionPage);
    }

    public function store(): \Illuminate\Http\RedirectResponse|\Livewire\Features\SupportRedirects\Redirector
    {
        $this->form->store();
        $this->form->reset();

        return redirect()->route('cp.sections.index');
    }
}
