<?php

namespace App\Livewire\LandingPage\Property;

use App\Models\Location;
use App\Models\Property;
use App\Models\PropertyCategory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('components.landing-page.layouts.app')]
class Index extends Component
{
    use WithPagination;

    public $category_id = '';

    public $location_id = '';

    // Keep filters in URL for bookmarking/sharing
    protected $queryString = [
        'category_id' => ['except' => ''],
        'location_id' => ['except' => ''],
    ];

    // Reset pagination when filters change
    public function updatingCategoryId(): void
    {
        $this->resetPage();
    }

    public function updatingLocationId(): void
    {
        $this->resetPage();
    }

    // Method to clear all filters
    public function resetFilters(): void
    {
        $this->category_id = '';
        $this->location_id = '';
        $this->resetPage();
    }

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
    {
        $properties = Property::query()
            ->with([
                'category',
                'location',
                'images' => function (HasMany $query) {
                    $query->where('is_active', '=', true);
                },
            ])
            ->where('is_active', true)
            ->where('priority', true)
            ->when($this->category_id, fn (Builder $query) => $query->where('property_category_id', $this->category_id))
            ->when($this->location_id, fn (Builder $query) => $query->where('location_id', $this->location_id))
            ->paginate(12);

        return view('livewire.landing-page.property.index')
            ->with('properties', $properties)
            ->with('categories', PropertyCategory::where('is_active', true)->orderBy('name')->get())
            ->with('locations', Location::where('is_active', true)->get());
    }
}
