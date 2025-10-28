<?php

namespace App\Livewire\ControlPanel\Testimonial;

use App\Livewire\Forms\Testimonial\CreateOrUpdateForm;
use App\PageProperties;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Testimonial - Control Panel')]
#[Layout('components.layouts.app', ['page' => PageProperties::TestimonialPage])]
class Create extends Component
{
    public CreateOrUpdateForm $form;

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        return view('livewire.control-panel.testimonial.create')
            ->with('page', PageProperties::TestimonialPage);
    }

    public function store(): \Illuminate\Http\RedirectResponse|\Livewire\Features\SupportRedirects\Redirector
    {
        $this->form->store();
        $this->form->reset();

        return redirect()->route('cp.testimonials.index');
    }
}
