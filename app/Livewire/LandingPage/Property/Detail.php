<?php

namespace App\Livewire\LandingPage\Property;

use App\Models\Property;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.landing-page.layouts.app')]
class Detail extends Component
{
    public Property $property;

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        $this->property->load([
            'category',
            'details',
            'features.feature',
            'location',
            'images' => function (HasMany $query) {
                $query->where('is_active', '=', true);
            },
        ]);

        return view('livewire.landing-page.property.detail');
    }
}
