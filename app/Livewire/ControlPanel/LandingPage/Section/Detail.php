<?php

namespace App\Livewire\ControlPanel\LandingPage\Section;

use App\Livewire\Forms\LandingPage\Section\UpdateForm;
use App\Models\PageSection;
use App\PageProperties;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Sections - Control Panel')]
#[Layout('components.layouts.app', ['page' => PageProperties::SectionPage])]
class Detail extends Component
{
    public PageSection $section;

    public UpdateForm $form;

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        return view('livewire.control-panel.landing-page.section.detail')
            ->with('page', PageProperties::SectionPage);
    }

    public function mount(): void
    {
        $this->form->setForm($this->section);
    }

    public function store(): \Illuminate\Http\RedirectResponse|\Livewire\Features\SupportRedirects\Redirector
    {
        $this->form->store($this->section);
        $this->form->reset();

        return redirect()->route('cp.sections.index');
    }
}
