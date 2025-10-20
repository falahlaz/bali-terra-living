<?php

namespace App\Livewire\Forms\LandingPage\Menu;

use App\MenuLocation;
use App\MenuTarget;
use App\Models\Menu;
use Illuminate\Validation\Rule;
use Livewire\Form;

class UpdateForm extends Form
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

    public function setForm(Menu $menu): void
    {
        $this->menu_location = $menu->menu_location->value;
        $this->parent_id = $menu->parent_id;
        $this->label = $menu->label;
        $this->url = $menu->url;
        $this->target = $menu->target->value;
        $this->icon = $menu->icon;
        $this->display_order = $menu->display_order;
        $this->is_active = $menu->is_active;
    }

    public function store(Menu $menu): void
    {
        $menu->update($this->validate());
    }
}
