<?php

namespace App\Models;

use App\IconType;
use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
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
            'icon_type' => IconType::class,
            'is_active' => 'boolean',
        ];
    }
}
