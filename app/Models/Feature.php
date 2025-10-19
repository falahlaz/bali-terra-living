<?php

namespace App\Models;

use App\FeatureCategory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [];

    protected function casts(): array
    {
        return [
            'category' => FeatureCategory::class,
            'is_active' => 'boolean',
        ];
    }
}
