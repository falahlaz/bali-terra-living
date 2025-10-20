<?php

namespace App\Livewire\Forms\LandingPage\About;

use App\AboutCardIconType;
use App\Models\AboutCard;
use Illuminate\Validation\Rule;
use Livewire\Form;

class UpdateForm extends Form
{
    public ?string $title;

    public ?string $description;

    public ?string $icon;

    public ?string $icon_type;

    public ?string $icon_content;

    public ?int $display_order;

    public ?bool $is_active = false;

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'icon' => ['nullable', 'string'],
            'icon_type' => ['required_with:icon', 'nullable', 'string', Rule::enum(AboutCardIconType::class)],
            'icon_content' => ['nullable', 'string'],
            'display_order' => ['required', 'integer'],
            'is_active' => ['required', 'boolean'],
        ];
    }

    public function setForm(AboutCard $about): void
    {
        $this->title = $about->title;
        $this->description = $about->description;
        $this->icon = $about->icon;
        $this->icon_type = $about->icon_type->value;
        $this->icon_content = $about->icon_content;
        $this->display_order = $about->display_order;
        $this->is_active = $about->is_active;
    }

    public function store(AboutCard $about): void
    {
        $validated = $this->validate();
        if (! $validated['icon_type']) {
            $validated['icon_type'] = AboutCardIconType::Svg;
        }
        $about->update($validated);
    }
}
