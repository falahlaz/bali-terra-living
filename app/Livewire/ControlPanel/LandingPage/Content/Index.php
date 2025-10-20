<?php

namespace App\Livewire\ControlPanel\LandingPage\Content;

use App\Models\SectionContent;
use App\PageProperties;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Contents - Control Panel')]
#[Layout('components.layouts.app', ['page' => PageProperties::ContentPage])]
class Index extends Component
{
    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        $contents = SectionContent::query()
            ->with('pageSection')
            ->orderBy('page_section_id')
            ->orderBy('display_order')
            ->get();

        return view('livewire.control-panel.landing-page.content.index')
            ->with('page', PageProperties::ContentPage)
            ->with('contents', $contents);
    }
}
