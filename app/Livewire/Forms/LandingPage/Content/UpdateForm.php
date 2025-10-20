<?php

namespace App\Livewire\Forms\LandingPage\Content;

use App\Models\SectionContent;
use App\SectionContentType;
use Illuminate\Validation\Rule;
use Livewire\Form;

class UpdateForm extends Form
{
    public ?SectionContent $content;

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
                Rule::unique('section_contents', 'content_key')->ignoreModel($this->content),
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

    public function setForm(SectionContent $content): void
    {
        $this->page_section_id = $content->page_section_id;
        $this->content_key = $content->content_key;
        $this->content_value = $content->content_value;
        $this->content_type = $content->content_type->value;
        $this->display_order = $content->display_order;
    }

    public function store(SectionContent $content): void
    {
        $this->content = $content;
        $content->update($this->validate());
    }
}
