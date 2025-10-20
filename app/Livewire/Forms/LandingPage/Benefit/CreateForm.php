<?php

namespace App\Livewire\Forms\LandingPage\Benefit;

use App\IconType;
use App\Models\Benefit;
use Illuminate\Validation\Rule;
use Livewire\Form;

class CreateForm extends Form
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
            'icon_type' => ['required_with:icon', 'string', Rule::enum(IconType::class)],
            'icon_content' => ['nullable', 'string'],
            'display_order' => ['required', 'integer'],
            'is_active' => ['required', 'boolean'],
        ];
    }

    public function store(): void
    {
        $validated = $this->validate();
        if (! $validated['icon_type']) {
            $validated['icon_type'] = IconType::Svg;
        }
        Benefit::query()->create($validated);
    }
}
