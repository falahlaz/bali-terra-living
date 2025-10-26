<?php

namespace App\Livewire\Forms\LandingPage\Content;

use App\Models\SectionContent;
use App\SectionContentType;
use Illuminate\Validation\Rule;
use Livewire\Form;

class CreateForm extends Form
{
    public ?int $page_section_id;

    public ?string $content_key;

    public ?string $content_value;

    public ?string $content_type;

    public ?int $display_order;

    public function rules(): array
    {
        return [
            'page_section_id' => [
                'required',
                'integer',
                'exists:page_sections,id',
            ],
            'content_key' => [
                'required',
                'string',
            ],
            'content_value' => [
                'string',
            ],
            'content_type' => [
                'required',
                'string',
                Rule::enum(SectionContentType::class),
            ],
            'display_order' => [
                'required',
                'integer',
            ],
        ];
    }

    public function store(): void
    {
        SectionContent::create($this->validate());
    }
}
