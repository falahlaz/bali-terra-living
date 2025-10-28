<?php

namespace App\Livewire\ControlPanel\Testimonial;

use App\Livewire\Forms\Testimonial\CreateOrUpdateForm;
use App\Models\Testimonial;
use App\PageProperties;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Testimonial - Control Panel')]
#[Layout('components.layouts.app', ['page' => PageProperties::TestimonialPage])]
class Detail extends Component
{
    public Testimonial $testimonial;

    public CreateOrUpdateForm $form;

    public function render(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
    {
        return view('livewire.control-panel.testimonial.detail')
            ->with('page', PageProperties::TestimonialPage);
    }

    public function mount(): void
    {
        $this->form->setForm($this->testimonial);
    }

    public function store(): \Illuminate\Http\RedirectResponse|\Livewire\Features\SupportRedirects\Redirector
    {
        $this->form->store($this->testimonial);
        $this->form->reset();

        return redirect()->route('cp.testimonials.index');
    }
}
