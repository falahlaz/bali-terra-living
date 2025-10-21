<?php

namespace App\Livewire\ControlPanel\LandingPage\Social;

use App\Livewire\Forms\LandingPage\Social\UpdateForm;
use App\Models\SocialLink;
use App\PageProperties;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Social - Control Panel')]
#[Layout('components.layouts.app', ['page' => PageProperties::SocialPage])]
class Detail extends Component
{
    public SocialLink $social;

    public UpdateForm $form;

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        return view('livewire.control-panel.landing-page.social.detail')
            ->with('page', PageProperties::SocialPage);
    }

    public function mount(): void
    {
        $this->form->setForm($this->social);
    }

    public function store(): \Illuminate\Http\RedirectResponse|\Livewire\Features\SupportRedirects\Redirector
    {
        $this->form->store($this->social);
        $this->form->reset();

        return redirect()->route('cp.social-links.index');
    }
}
