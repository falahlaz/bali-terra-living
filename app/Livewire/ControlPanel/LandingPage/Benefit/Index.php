<?php

namespace App\Livewire\ControlPanel\LandingPage\Benefit;

use App\Models\Benefit;
use App\PageProperties;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Benefit - Control Panel')]
#[Layout('components.layouts.app', ['page' => PageProperties::BenefitPage])]
class Index extends Component
{
    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
    {
        $benefits = Benefit::query()
            ->orderBy('display_order')
            ->get();

        return view('livewire.control-panel.landing-page.benefit.index')
            ->with('page', PageProperties::BenefitPage)
            ->with('benefits', $benefits);
    }
}
