<?php

namespace App\Livewire\Forms\Testimonial;

use App\Models\Testimonial;
use Illuminate\Validation\Rule;
use Livewire\Form;

class CreateOrUpdateForm extends Form
{
    public ?string $client_name;

    public ?string $client_title;

    public ?string $client_initials;

    public ?string $client_avatar;

    public ?int $rating;

    public ?string $testimonial_text;

    public ?int $display_order = 0;

    public ?bool $featured = false;

    public ?bool $is_active = false;

    public function rules(): array
    {
        return [
            'client_name' => ['required', 'string'],
            'client_title' => ['nullable', 'string'],
            'client_initials' => ['nullable', 'string', 'max:5', Rule::in(['Mr.', 'Ms.'])],
            'client_avatar' => ['nullable', 'string'],
            'rating' => ['required', 'integer', 'between:0,5'],
            'testimonial_text' => ['required', 'string'],
            'display_order' => ['required', 'integer', 'min:0'],
            'featured' => ['required', 'boolean'],
            'is_active' => ['required', 'boolean'],
        ];
    }

    public function setForm(Testimonial $testimonial): void
    {
        $this->client_name = $testimonial->client_name;
        $this->client_title = $testimonial->client_title;
        $this->client_initials = $testimonial->client_initials;
        $this->client_avatar = $testimonial->client_avatar;
        $this->rating = $testimonial->rating;
        $this->testimonial_text = $testimonial->testimonial_text;
        $this->display_order = $testimonial->display_order;
        $this->featured = $testimonial->featured;
        $this->is_active = $testimonial->is_active;
    }

    public function store(?Testimonial $testimonial = null): void
    {
        if (! $testimonial) {
            Testimonial::create($this->validate());

            return;
        }

        $testimonial->update($this->validate());
    }
}
