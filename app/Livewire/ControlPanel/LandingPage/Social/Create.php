<?php

namespace App\Livewire\ControlPanel\LandingPage\Social;

use App\Livewire\Forms\LandingPage\Social\CreateForm;
use App\PageProperties;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Social - Control Panel')]
#[Layout('components.layouts.app', ['page' => PageProperties::SocialPage])]
class Create extends Component
{
    public CreateForm $form;

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        return view('livewire.control-panel.landing-page.social.create')
            ->with('page', PageProperties::SocialPage);
    }

    public function store(): \Illuminate\Http\RedirectResponse|\Livewire\Features\SupportRedirects\Redirector
    {
        $this->form->store();
        $this->form->reset();

        return redirect()->route('cp.social-links.index');
    }
}
