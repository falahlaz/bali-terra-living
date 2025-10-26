<?php

namespace App\Http\Controllers;

use App\Models\AboutCard;
use App\Models\Benefit;
use App\Models\PageSection;
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
        $sections = PageSection::with([
            'contents',
        ])
            ->where('is_active', true)
            ->where('page_name', 'Home')
            ->orderBy('display_order')
            ->get()
            ->keyBy('section_key');

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

        $about_cards = AboutCard::where('is_active', true)->get();
        $benefits = Benefit::where('is_active', true)->get();

        return view('landing-page.index')
            ->with('properties', $properties)
            ->with('sections', $sections)
            ->with('about_cards', $about_cards)
            ->with('benefits', $benefits);
    }
}
