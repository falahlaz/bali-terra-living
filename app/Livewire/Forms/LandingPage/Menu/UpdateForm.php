<?php

namespace App\Livewire\Forms\LandingPage\Menu;

use App\Models\LandingPageMenu;
use Livewire\Attributes\Validate;
use Livewire\Form;

class UpdateForm extends Form
{
    public LandingPageMenu $menu;

    #[Validate(['required', 'string'])]
    public string $name = '';

    #[Validate(['required', 'string'])]
    public string $redirect = '';

    #[Validate(['required', 'boolean'])]
    public bool $is_active = false;

    public function save(): void
    {
        $validated = $this->validate();
        $this->menu->name = $validated['name'];
        $this->menu->redirect = $validated['redirect'];
        $this->menu->is_active = $validated['is_active'];
        $this->menu->save();
    }
}
