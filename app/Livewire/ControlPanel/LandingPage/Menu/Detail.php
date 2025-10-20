<?php

namespace App\Livewire\ControlPanel\LandingPage\Menu;

use App\Livewire\Forms\LandingPage\Menu\UpdateForm;
use App\MenuLocation;
use App\MenuTarget;
use App\Models\Menu;
use App\PageProperties;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Menu - Control Panel')]
#[Layout('components.layouts.app', ['page' => PageProperties::MenuPage])]
class Detail extends Component
{
    public Menu $menu;

    public UpdateForm $form;

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
    {
        $menus = Menu::query()
            ->whereNull('parent_id')
            ->orderBy('display_order')
            ->get();

        return view('livewire.control-panel.landing-page.menu.detail')
            ->with('page', PageProperties::MenuPage)
            ->with('menu_locations', MenuLocation::cases())
            ->with('menu_targets', MenuTarget::cases())
            ->with('menus', $menus);
    }

    public function mount(): void
    {
        $this->form->setForm($this->menu);
    }

    public function store(): \Illuminate\Http\RedirectResponse|\Livewire\Features\SupportRedirects\Redirector
    {
        $this->form->store($this->menu);
        $this->form->reset();

        return redirect()->route('cp.menus.index');
    }
}
