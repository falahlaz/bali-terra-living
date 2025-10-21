<?php

namespace App\Livewire\Forms\LandingPage\Social;

use App\Models\SocialLink;
use Livewire\Form;

class CreateForm extends Form
{
    public ?string $platform;

    public ?string $url;

    public ?string $icon;

    public ?int $display_order;

    public ?bool $is_active = false;

    public function rules(): array
    {
        return [
            'platform' => [
                'required',
                'string',
            ],
            'url' => [
                'required',
                'string',
            ],
            'icon' => [
                'nullable',
                'string',
            ],
            'display_order' => [
                'required',
                'integer',
            ],
            'is_active' => [
                'required',
                'boolean',
            ],
        ];
    }

    public function store(): void
    {
        SocialLink::create($this->validate());
    }
}
