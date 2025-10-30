<?php

namespace App\Livewire\LandingPage;

use App\Livewire\Forms\ContactSubmission\SubmitForm;
use App\Models\AboutCard;
use App\Models\Benefit;
use App\Models\PageSection;
use App\Models\Property;
use App\Models\Setting;
use App\Models\Testimonial;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.landing-page.layouts.app')]
class Index extends Component
{
    public SubmitForm $contactSubmissionForm;

    public bool $showWhatsAppModal = false;

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        $sections = PageSection::with([
            'contents',
        ])
            ->where('is_active', true)
            ->where('page_name', 'Home')
            ->orderBy('display_order')
            ->get()
            ->keyBy('section_key');

        $contacts = Setting::where('setting_group', 'contact')
            ->get()
            ->keyBy('setting_key');

        $properties = Property::query()
            ->with([
                'category',
                'features.feature',
                'images' => function (HasMany $query) {
                    $query->where('is_active', '=', true);
                },
            ])
            ->where('is_active', true)
            ->where('priority', true)
            ->limit(3)
            ->get();

        $testimonials = Testimonial::where('is_active', true)
            ->orderBy('featured')
            ->orderBy('display_order')
            ->limit(3)
            ->get();

        $about_cards = AboutCard::where('is_active', true)->get();
        $benefits = Benefit::where('is_active', true)->get();

        return view('livewire.landing-page.index')
            ->with('properties', $properties)
            ->with('sections', $sections)
            ->with('testimonials', $testimonials)
            ->with('about_cards', $about_cards)
            ->with('benefits', $benefits)
            ->with('contacts', $contacts);
    }

    public function storeContactSubmission(): void
    {
        $this->contactSubmissionForm->store();
        $this->contactSubmissionForm->reset();
        $this->showWhatsAppModal = true;
    }

    public function closeModal(): void
    {
        $this->showWhatsAppModal = false;
    }
}
