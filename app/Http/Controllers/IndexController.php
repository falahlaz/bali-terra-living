<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $properties = Property::query()
            ->select([
                'id',
                'property_category_id',
                'name',
                'width',
                'uom',
                'location',
                'is_active',
            ])
            ->with([
                'category',
                'features' => function (HasMany $query) {
                    $query->where('is_active', '=', true);
                },
                'images' => function (HasMany $query) {
                    $query->where('is_active', '=', true);
                },
            ])
            ->where('is_active', '=', true)
            ->get();

        return view('landing-page.index')
            ->with('properties', $properties);
    }
}
