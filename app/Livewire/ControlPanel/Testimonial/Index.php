<?php

namespace App\Livewire\ControlPanel\Testimonial;

use App\Models\Testimonial;
use App\PageProperties;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Testimonial - Control Panel')]
#[Layout('components.layouts.app', ['page' => PageProperties::TestimonialPage])]
class Index extends Component
{
    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        $testimonials = Testimonial::orderBy('display_order')->get();

        return view('livewire.control-panel.testimonial.index')
            ->with('page', PageProperties::TestimonialPage)
            ->with('testimonials', $testimonials);
    }
}
