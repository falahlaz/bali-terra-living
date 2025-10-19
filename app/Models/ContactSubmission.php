<?php

namespace App\Models;

use App\ContactStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ContactSubmission extends Model
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
        'ip_address',
        'user_agent',
        'referrer',
        'status',
        'assigned_to',
        'notes',
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

    public function assignee(): BelongsTo
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }
}
