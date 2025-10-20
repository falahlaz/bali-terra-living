<?php

namespace App\Livewire\ControlPanel\LandingPage\Content;

use App\Livewire\Forms\LandingPage\Content\CreateForm;
use App\Models\PageSection;
use App\PageProperties;
use App\SectionContentType;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Contents - Control Panel')]
#[Layout('components.layouts.app', ['page' => PageProperties::ContentPage])]
class Create extends Component
{
    public CreateForm $form;

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        $sections = PageSection::query()
            ->where('is_active', true)
            ->orderBy('display_order')
            ->get();

        return view('livewire.control-panel.landing-page.content.create')
            ->with('page', PageProperties::ContentPage)
            ->with('content_types', SectionContentType::cases())
            ->with('sections', $sections);
    }

    public function store(): \Illuminate\Http\RedirectResponse|\Livewire\Features\SupportRedirects\Redirector
    {
        $this->form->store();
        $this->form->reset();

        return redirect()->route('cp.contents.index');
    }
}
