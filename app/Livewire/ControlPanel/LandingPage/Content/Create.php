<?php

namespace App\Livewire\ControlPanel\LandingPage\Content;

use App\Livewire\Forms\LandingPage\Content\CreateForm;
use App\Models\LandingPageMenu;
use App\Properties;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Landing Page Menu Content - Control Panel')]
#[Layout('components.layouts.app', ['page' => Properties::LandingPageContentMenu])]
class Create extends Component
{
    public LandingPageMenu $menu;
    public CreateForm $form;
    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        return view('livewire.control-panel.landing-page.content.create')
            ->with('page', Properties::LandingPageContentMenu)
            ->with('menu', $this->menu);
    }

    public function mount(): void
    {
       $this->form->menu = $this->menu;
    }

    public function store(): \Illuminate\Http\RedirectResponse|\Livewire\Features\SupportRedirects\Redirector
    {
        $this->form->store();
        return redirect()->route('cp.landing-pages.menu.detail', [$this->menu->id]);
    }
}
