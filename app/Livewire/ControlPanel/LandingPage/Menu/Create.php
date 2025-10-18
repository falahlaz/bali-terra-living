<?php

namespace App\Livewire\ControlPanel\LandingPage\Menu;

use App\Livewire\Forms\LandingPage\Menu\CreateForm;
use App\Properties;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Create Landing Page Menu - Control Panel')]
#[Layout('components.layouts.app', ['page' => Properties::LandingPageMenuPage])]
class Create extends Component
{
    public CreateForm $form;
    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
    {
        return view('livewire.control-panel.landing-page.menu.create')
            ->with('page', Properties::LandingPageMenuPage);
    }

    public function store(): \Illuminate\Http\RedirectResponse|\Livewire\Features\SupportRedirects\Redirector
    {
        $menu = $this->form->store();
        return redirect()->route('cp.landing-pages.menu.detail', [$menu->id]);
    }
}
