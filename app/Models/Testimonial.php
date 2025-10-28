<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'client_name',
        'client_title',
        'client_initials',
        'client_avatar',
        'rating',
        'testimonial_text',
        'display_order',
        'featured',
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
            'featured' => 'boolean',
            'is_active' => 'boolean',
        ];
    }

    public function getAcronymAttribute(): string
    {
        $words = explode(' ', $this->client_name);
        $initials = '';
        foreach ($words as $word) {
            if (!empty($word)) { // Ensure the word is not empty
                $initials .= mb_substr($word, 0, 1, 'UTF-8'); // Use mb_substr for multi-byte support
            }
        }
        return mb_strtoupper($initials, 'UTF-8'); // Capitalize the initials
    }
}
