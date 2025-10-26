<?php

namespace App\View\Components\LandingPage\Nav;

use App\MenuLocation;
use App\MenuTarget;
use App\Models\Menu;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class Index extends Component
{
    public Collection $menus;

    /**
     * Create a new component instance.
     */
    public function __construct(
    ) {
        $this->menus = Menu::where('menu_location', MenuLocation::Header)
            ->where('target', MenuTarget::Self)
            ->where('is_active', true)
            ->orderBy('display_order')
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.landing-page.nav.index');
    }
}
