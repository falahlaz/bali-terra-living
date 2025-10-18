<?php

namespace App\Livewire\Forms\LandingPage\Menu;

use App\Models\LandingPageMenu;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CreateForm extends Form
{
    #[Validate(['required', 'string'])]
    public string $name = '';

    #[Validate(['required', 'string'])]
    public string $redirect = '';

    #[Validate(['required', 'boolean'])]
    public bool $is_active = false;

    public function store(): LandingPageMenu
    {
        $validated = $this->validate();
        return LandingPageMenu::query()->create($validated);
    }
}
