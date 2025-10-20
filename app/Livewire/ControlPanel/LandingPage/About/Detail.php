<?php

namespace App\Livewire\ControlPanel\LandingPage\About;

use App\AboutCardIconType;
use App\Livewire\Forms\LandingPage\About\UpdateForm;
use App\Models\AboutCard;
use App\PageProperties;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('About - Control Panel')]
#[Layout('components.layouts.app', ['page' => PageProperties::AboutPage])]
class Detail extends Component
{
    public AboutCard $about;

    public UpdateForm $form;

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        return view('livewire.control-panel.landing-page.about.detail')
            ->with('page', PageProperties::AboutPage)
            ->with('icon_types', AboutCardIconType::cases());
    }

    public function mount(): void
    {
        $this->form->setForm($this->about);
    }

    public function store(): \Illuminate\Http\RedirectResponse|\Livewire\Features\SupportRedirects\Redirector
    {
        $this->form->store($this->about);
        $this->form->reset();

        return redirect()->route('cp.about.index');
    }
}
