<?php

namespace App\Models;

use App\MenuLocation;
use App\MenuTarget;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Menu extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'menu_location',
        'parent_id',
        'label',
        'url',
        'target',
        'icon',
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
            'menu_location' => MenuLocation::class,
            'target' => MenuTarget::class,
            'is_active' => 'boolean',
        ];
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }
}
