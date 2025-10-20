<?php

namespace App\Livewire\ControlPanel\LandingPage\Section;

use App\Models\PageSection;
use App\PageProperties;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Sections - Control Panel')]
#[Layout('components.layouts.app', ['page' => PageProperties::SectionPage])]
class Index extends Component
{
    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        $sections = PageSection::query()
            ->orderBy('display_order')
            ->get();

        return view('livewire.control-panel.landing-page.section.index')
            ->with('page', PageProperties::SectionPage)
            ->with('sections', $sections);
    }
}
