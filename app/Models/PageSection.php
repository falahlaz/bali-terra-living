<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PageSection extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'page_name',
        'section_key',
        'section_name',
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
            'is_active' => 'boolean',
        ];
    }

    public function getContent($key, $default = '')
    {
        $content = $this->contents->where('content_key', $key)->first();

        return $content ? $content->content_value : $default;
    }

    public function contents(): HasMany
    {
        return $this->hasMany(SectionContent::class, 'page_section_id');
    }
}
