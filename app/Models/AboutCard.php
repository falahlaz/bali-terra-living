<?php

namespace App\Models;

use App\AboutCardIconType;
use Illuminate\Database\Eloquent\Model;

class AboutCard extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'title',
        'description',
        'icon',
        'icon_type',
        'icon_content',
        'display_order',
        'is_active',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'icon_type' => AboutCardIconType::class,
            'is_active' => 'boolean',
        ];
    }
}
