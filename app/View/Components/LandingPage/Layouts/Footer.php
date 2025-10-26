<?php

namespace App\View\Components\LandingPage\Layouts;

use App\Models\Setting;
use App\Models\SocialLink;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class Footer extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public Collection $social_links,
        public Collection $quick_links,
        public Collection $contacts,
        public Collection $brands,
    ) {
        $this->social_links = SocialLink::where('is_active', true)->get();
        $setting = Setting::where('setting_group', 'quick-links')->first();
        $this->quick_links = collect(json_decode($setting->setting_value));
        $this->contacts = Setting::where('setting_group', 'contact')->get()->keyBy('setting_key');
        $this->brands = Setting::where('setting_group', 'brand')->get()->keyBy('setting_key');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.landing-page.layouts.footer');
    }
}
