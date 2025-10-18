<?php

namespace App\Models;

use App\ContactStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contact extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'full_name',
        'email',
        'phone_number',
        'interested_in',
        'message',
        'status',
        'processed_at',
        'processed_by',
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
            'status' => ContactStatus::class,
            'processed_at' => 'timestamp',
        ];
    }

    public function admin(): BelongsTo
    {
        return $this->belongsTo(User::class, 'processed_by');
    }
}
