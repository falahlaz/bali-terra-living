<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Property;
use App\Models\PropertyCategory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PropertyController extends Controller
{
    public function index(Request $request): View
    {
        \DB::enableQueryLog();
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
            ->when($request->filled('category_id'), fn (Builder $query) => $query->where('property_category_id', $request->category_id))
            ->when($request->filled('location_id'), fn (Builder $query) => $query->where('location_id', $request->location_id))
            ->paginate(12);

        return view('landing-page.property.index')
            ->with('properties', $properties)
            ->with('categories', PropertyCategory::where('is_active', true)->orderBy('name')->get())
            ->with('locations', Location::where('is_active', true)->get());
    }

    public function show(Property $property): View
    {
        $property->load([
            'category',
            'details',
            'features.feature',
            'location',
            'images' => function (HasMany $query) {
                $query->where('is_active', '=', true);
            },
        ]);
        return view('landing-page.property.detail')
            ->with('property', $property);
    }
}
