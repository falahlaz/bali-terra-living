<?php

namespace App\Livewire\ControlPanel\LandingPage\Menu;

use App\Models\LandingPageMenu;
use App\Properties;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Landing Page Menu - Control Panel')]
#[Layout('components.layouts.app', ['page' => Properties::LandingPageMenuPage])]
class Index extends Component
{
    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
    {
        $menus = LandingPageMenu::query()
            ->select([
                'id',
                'name',
                'is_active',
                'redirect',
            ])
            ->get();

        return view('livewire.control-panel.landing-page.menu.index')
            ->with('page', Properties::LandingPageMenuPage)
            ->with('menus', $menus);
    }
}
