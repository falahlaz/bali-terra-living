<?php

namespace App\Livewire\ControlPanel\LandingPage\Menu;

use App\Models\Menu;
use App\PageProperties;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Menu - Control Panel')]
#[Layout('components.layouts.app', ['page' => PageProperties::MenuPage])]
class Index extends Component
{
    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
    {
        $menus = Menu::query()
            ->with('parent')
            ->orderBy('parent_id')
            ->orderBy('display_order')
            ->get();

        return view('livewire.control-panel.landing-page.menu.index')
            ->with('page', PageProperties::MenuPage)
            ->with('menus', $menus);
    }
}
