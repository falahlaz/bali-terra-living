<?php

namespace App\Livewire\ControlPanel\LandingPage\About;

use App\Models\AboutCard;
use App\PageProperties;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('About - Control Panel')]
#[Layout('components.layouts.app', ['page' => PageProperties::AboutPage])]
class Index extends Component
{
    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        $about_cards = AboutCard::query()
            ->orderBy('display_order')
            ->get();

        return view('livewire.control-panel.landing-page.about.index')
            ->with('page', PageProperties::AboutPage)
            ->with('about_cards', $about_cards);
    }
}
