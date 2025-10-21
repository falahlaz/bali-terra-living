<?php

namespace App\Livewire\ControlPanel\LandingPage\Social;

use App\Models\SocialLink;
use App\PageProperties;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Social - Control Panel')]
#[Layout('components.layouts.app', ['page' => PageProperties::SocialPage])]
class Index extends Component
{
    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        $social_links = SocialLink::query()
            ->orderBy('display_order')
            ->get();

        return view('livewire.control-panel.landing-page.social.index')
            ->with('page', PageProperties::SocialPage)
            ->with('social_links', $social_links);
    }
}
