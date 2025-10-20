<?php

namespace App\Models;

use App\SectionContentType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SectionContent extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'page_section_id',
        'content_key',
        'content_value',
        'content_type',
        'display_order',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [];

    public function pageSection(): BelongsTo
    {
        return $this->belongsTo(PageSection::class, 'page_section_id');
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'content_type' => SectionContentType::class,
        ];
    }
}
