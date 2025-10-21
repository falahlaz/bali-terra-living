<?php

namespace App\Livewire\Forms\LandingPage\Social;

use App\Models\SocialLink;
use Livewire\Form;

class UpdateForm extends Form
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

    public function setForm(SocialLink $social): void
    {
        $this->platform = $social->platform;
        $this->url = $social->url;
        $this->icon = $social->icon;
        $this->display_order = $social->display_order;
        $this->is_active = $social->is_active;
    }

    public function store(SocialLink $social): void
    {
        $social->update($this->validate());
    }
}
