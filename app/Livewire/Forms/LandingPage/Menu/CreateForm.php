<?php

namespace App\Livewire\Forms\LandingPage\Menu;

use App\MenuLocation;
use App\MenuTarget;
use App\Models\Menu;
use Illuminate\Validation\Rule;
use Livewire\Form;

class CreateForm extends Form
{
    public ?string $menu_location;

    public ?int $parent_id;

    public ?string $label;

    public ?string $url;

    public ?string $target;

    public ?string $icon;

    public ?int $display_order;

    public ?bool $is_active = false;

    public function rules(): array
    {
        return [
            'menu_location' => [
                'required',
                'string',
                Rule::enum(MenuLocation::class),
            ],
            'parent_id' => [
                'nullable',
                'integer',
                Rule::exists('menus', 'id'),
            ],
            'label' => [
                'required',
                'string',
            ],
            'url' => [
                'required',
                'string',
            ],
            'target' => [
                'required',
                'string',
                Rule::enum(MenuTarget::class),
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
        Menu::create($this->validate());
    }
}
