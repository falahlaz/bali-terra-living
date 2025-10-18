<?php

namespace App\Livewire\Forms\LandingPage\Content;

use App\Models\LandingPageMenu;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CreateForm extends Form
{
    public LandingPageMenu $menu;

    #[Validate(['required', 'string'])]
    public string $title = '';

    #[Validate(['required', 'string'])]
    public string $content = '';

    #[Validate(['required', 'boolean'])]
    public bool $is_active = false;

    public function store(): void
    {
        $validated = $this->validate();
        $this->menu->contents()->create([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'is_active' => $validated['is_active']
        ]);
    }
}
