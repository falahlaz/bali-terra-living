<?php

namespace App\Livewire\ControlPanel\LandingPage\Menu;

use App\Livewire\Forms\LandingPage\Menu\UpdateForm;
use App\Models\LandingPageContent;
use App\Models\LandingPageMenu;
use App\Properties;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Detail Landing Page Menu - Control Panel')]
#[Layout('components.layouts.app', ['page' => Properties::LandingPageMenuPage])]
class Detail extends Component
{
    public LandingPageMenu $menu;
    public UpdateForm $form;

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        $this->menu->load('contents');
        return view('livewire.control-panel.landing-page.menu.detail')
            ->with('page', Properties::LandingPageMenuPage)
            ->with('menu', $this->menu);
    }

    public function mount(): void
    {
       $this->form->menu = $this->menu;
       $this->form->name = $this->menu->name;
       $this->form->redirect = $this->menu->redirect;
       $this->form->is_active = $this->menu->is_active;
    }

    public function update(): void
    {
        $this->form->save();
    }

    public function deleteContent(string $contentId): void
    {
        $this->menu->contents->find($contentId)->delete();
    }
}
