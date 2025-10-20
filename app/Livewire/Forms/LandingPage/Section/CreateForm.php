<?php

namespace App\Livewire\Forms\LandingPage\Section;

use App\Models\PageSection;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CreateForm extends Form
{
    #[Validate(['required', 'string'])]
    public ?string $page_name;

    #[Validate(['required', 'string', 'unique:page_sections,section_key'])]
    public ?string $section_key;

    #[Validate(['required', 'string'])]
    public ?string $section_name;

    #[Validate(['required', 'integer'])]
    public ?int $display_order;

    #[Validate(['bool'])]
    public ?bool $is_active = false;

    public function store(): void
    {
        PageSection::create($this->validate());
    }
}
